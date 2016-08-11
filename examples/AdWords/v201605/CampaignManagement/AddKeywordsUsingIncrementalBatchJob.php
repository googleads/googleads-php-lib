<?php
/**
 * This code sample illustrates how to perform multiple requests using the
 * BatchJobService using incremental uploads.
 *
 * Copyright 2016, Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201605
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';
require_once ADWORDS_UTIL_PATH . '/XmlDeserializer.php';
require_once ADWORDS_UTIL_VERSION_PATH . '/BatchJobUtils.php';

define('NUMBER_OF_KEYWORDS_TO_ADD', 100);
define('POLL_FREQUENCY_SECONDS', 30);
define('MAX_POLL_ATTEMPTS', 5);

$adGroupId = 'INSERT_AD_GROUP_ID_HERE';

/**
 * Runs the example.
 *
 * @param AdWordsUser $user the user to run the example with
 * @param string $adGroupId the ID of the ad group to add the keywords to
 */
function AddKeywordsUsingIncrementalBatchJob(AdWordsUser $user, $adGroupId) {
  // Get the service, which loads the required classes.
  $batchJobService = $user->GetService('BatchJobService', ADWORDS_VERSION);

  // Create a BatchJob.
  $addOp = new BatchJobOperation();
  $addOp->operator = 'ADD';
  $addOp->operand = new BatchJob();
  $addOps[] = $addOp;

  $result = $batchJobService->mutate($addOps);
  $batchJob = $result->value[0];

  // Get the upload URL from the new job.
  $uploadUrl = $batchJob->uploadUrl->url;
  printf("Created BatchJob with ID %d, status '%s' and upload URL '%s'.\n",
      $batchJob->id, $batchJob->status, $uploadUrl);

  // Use BatchJobUtils to upload all operations.
  $batchJobUtils = new BatchJobUtils($uploadUrl);

  // Generate and upload the first set of operations.
  $adGroupCriterionOperations =
      buildAdGroupCriterionOperations($adGroupId);
  $batchJobUtils->UploadIncrementalBatchJobOperations(
      $adGroupCriterionOperations);
  printf("Uploaded %d operations for batch job with ID %d.\n",
      count($adGroupCriterionOperations), $batchJob->id);

  // Generate and upload the second set of operations.
  $adGroupCriterionOperations =
      buildAdGroupCriterionOperations($adGroupId);
  $batchJobUtils->UploadIncrementalBatchJobOperations(
      $adGroupCriterionOperations);
  printf("Uploaded %d operations for batch job with ID %d.\n",
      count($adGroupCriterionOperations), $batchJob->id);

  // Generate and upload the third and final set of operations.
  $adGroupCriterionOperations =
      buildAdGroupCriterionOperations($adGroupId);
  $batchJobUtils->UploadIncrementalBatchJobOperations(
      $adGroupCriterionOperations, true);
  printf("Uploaded %d operations for batch job with ID %d.\n",
      count($adGroupCriterionOperations), $batchJob->id);

  // Poll for completion of the batch job using an exponential back off.
  $pollAttempts = 0;
  $isPending = true;
  $wasCancelRequested = false;

  $selector = new Selector();
  $selector->fields = array('Id', 'Status', 'DownloadUrl', 'ProcessingErrors',
      'ProgressStats');
  $selector->predicates[] = new Predicate('Id', 'EQUALS', $batchJob->id);
  do {
    $sleepSeconds = POLL_FREQUENCY_SECONDS * pow(2, $pollAttempts);
    printf("Sleeping %d seconds...\n", $sleepSeconds);
    sleep($sleepSeconds);

    $batchJob = $batchJobService->get($selector)->entries[0];
    printf("Batch job ID %d has status '%s'.\n", $batchJob->id,
        $batchJob->status);

    $pollAttempts++;
    if ($batchJob->status !== 'ACTIVE' &&
        $batchJob->status !== 'AWAITING_FILE' &&
        $batchJob->status !== 'CANCELING') {
      $isPending = false;
    }

    // Optional: Cancel the job if it has not completed after polling
    // MAX_POLL_ATTEMPTS times.
    if ($isPending && !$wasCancelRequested
        && $pollAttempts == MAX_POLL_ATTEMPTS) {
      $batchJob->status = 'CANCELING';
      $batchJobSetOperation = new BatchJobOperation();
      $batchJobSetOperation->operand = $batchJob;
      $batchJobSetOperation->operator = 'SET';

      // Only request cancellation once per job.
      $wasCancelRequested = true;
      try {
        $operations[] = $batchJobSetOperation;
        $batchJob = $batchJobService->mutate($operations)->value[0];
        printf("Requested cancellation of batch job with ID %d.\n",
            $batchJob->id);
        // Reset the poll attempt counter to wait for cancellation.
        $pollAttempts = 0;
      } catch (Exception $e) {
        $errors = $e->detail->ApiExceptionFault->errors;
        if ($errors !== null
            && $errors->enc_value instanceof BatchJobError) {
          if ($errors->enc_value->reason === 'INVALID_STATE_CHANGE') {
            printf("Attempt to cancel batch job with ID %d was rejected because"
                . " the job already completed or was canceled.\n",
                $batchJob->id);
            // Reset the poll attempt counter to wait for cancellation.
            $pollAttempts = 0;
            continue;
          }
        }
        throw $e;
      }
    }
  } while ($isPending && $pollAttempts <= MAX_POLL_ATTEMPTS);

  if ($isPending) {
    throw new BatchJobException(
        sprintf("Job is still pending state after polling %d times.",
            MAX_POLL_ATTEMPTS));
  }

  if ($batchJob->processingErrors !== null) {
    $i = 0;
    foreach ($batchJob->processingErrors as $processingError) {
      printf(
          " Processing error [%d]: errorType=%s, trigger=%s, errorString=%s,"
              . " fieldPath=%s, reason=%s\n",
          $i++,
          $processingError->ApiErrorType,
          $processingError->trigger,
          $processingError->errorString,
          $processingError->fieldPath,
          $processingError->reason
      );
    }
  } else {
    printf("No processing errors found.\n");
  }

  if ($batchJob->downloadUrl !== null && $batchJob->downloadUrl->url !== null) {
    $xmlResponse =
        $batchJobUtils->DownloadBatchJobResults($batchJob->downloadUrl->url);
    printf("Downloaded results from %s:\n", $batchJob->downloadUrl->url);
    $deserializer = new XmlDeserializer(BatchJobUtils::$CLASS_MAP);
    $mutateResponse = $deserializer->ConvertXmlToObject($xmlResponse);
    if (empty($mutateResponse)) {
      printf("  No results available.\n");
    } else {
      foreach ($mutateResponse->rval as $mutateResult) {
        $outcome = $mutateResult->errorList === null ? 'SUCCESS' : 'FAILURE';
        printf("  Operation [%d] - %s\n", $mutateResult->index, $outcome);
      }
    }
  } else {
    printf("No results available for download.\n");
  }
}

/**
 * Builds objects of AdGroupCriterionOperation for creating biddable criteria
 * (as keywords) for an ad group with the specified ID. 10% of
 * keywords are created with some invalid characters to demonstrate how
 * BatchJobService returns information about such errors.
 *
 * @param string $adGroupId the ID of the ad group to add the keywords to
 * @return array an array of AdGroupCriterionOperation
 */
function buildAdGroupCriterionOperations($adGroupId) {
  $adGroupCriterionOperations = array();

  $suffix = uniqid();
  // Create AdGroupCriterionOperations to add keywords.
  for ($i = 0; $i < NUMBER_OF_KEYWORDS_TO_ADD; $i++) {
    // Create Keyword.
    $text = sprintf("mars%s-%d", $suffix, $i);

    // Make 10% of keywords invalid to demonstrate error handling.
    if ($i % 10 == 0) {
      $text = $text . '!!!';
    }
    $keyword = new Keyword();
    $keyword->text = $text;
    $keyword->matchType = 'BROAD';

    // Create BiddableAdGroupCriterion.
    $biddableAdGroupCriterion = new BiddableAdGroupCriterion();
    $biddableAdGroupCriterion->adGroupId = $adGroupId;
    $biddableAdGroupCriterion->criterion = $keyword;

    // Create AdGroupCriterionOperation.
    $operation = new AdGroupCriterionOperation();
    $operation->operand = $biddableAdGroupCriterion;
    $operation->operator = 'ADD';

    // Add to list.
    $adGroupCriterionOperations[] = $operation;
  }
  return $adGroupCriterionOperations;
}

// Don't run the example if the file is being included.
if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
  return;
}

try {
  // Get AdWordsUser from credentials in "../auth.ini"
  // relative to the AdWordsUser.php file's directory.
  $user = new AdWordsUser();

  // Log every SOAP XML request and response.
  $user->LogAll();

  // Run the example.
  AddKeywordsUsingIncrementalBatchJob($user, $adGroupId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
