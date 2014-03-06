<?php
/**
 * This code sample illustrates how to perform asynchronous requests using the
 * MutateJobService. To get ad groups, run BasicOperations/GetAdGroups.php.
 *
 * Tags: MutateJobService.mutate, MutateJobService.get
 * Tags: MutateJobService.getResults
 *
 * Copyright 2012, Google Inc. All Rights Reserved.
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
 * @subpackage v201306
 * @category   WebServices
 * @copyright  2012, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
 */

require_once dirname(dirname(__FILE__)) . '/init.php';

require_once UTIL_PATH . '/ChoiceUtils.php';
require_once UTIL_PATH . '/OgnlUtils.php';

// Enter parameters required by the code example.
$adGroupId = 'INSERT_AD_GROUP_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $adGroupId the ID of the ad group to add placements to
 */
function AddPlacementsInBulkExample(AdWordsUser $user, $adGroupId) {
  // Get the service, which loads the required classes.
  $mutateJobService = $user->GetService('MutateJobService', ADWORDS_VERSION);

  // Generate operations.
  $numPlacements = 100;
  $operations = array();
  for ($i = 0; $i < $numPlacements; $i++) {
    $placement = new Placement();
    // Randomly add invalid characters to placement URLs.
    if (rand(0, 9) == 0) {
      $placement->url = 'mars.google.com/<' . uniqid();
    } else {
      $placement->url = 'mars.google.com/' . uniqid();
    }

    $adGroupCriterion = new BiddableAdGroupCriterion();
    $adGroupCriterion->adGroupId = $adGroupId;
    $adGroupCriterion->criterion = $placement;

    $operation = new AdGroupCriterionOperation();
    $operation->operator = 'ADD';
    $operation->operand = $adGroupCriterion;
    $operations[] = $operation;
  }

  // You can specify up to 3 job IDs that must successfully complete before
  // this job can be processed. We won't set any in this example.
  $policy = new BulkMutateJobPolicy();
  $policy->prerequisiteJobIds = array();

  // Call mutate to create a new job.
  printf("Creating job with %d operations.\n", sizeof($operations));
  $job = $mutateJobService->mutate($operations, $policy);
  printf("Job with ID '%s' was created.\n", $job->id);

  // Create a selector for retrieving the job status and later its results.
  $selector = new BulkMutateJobSelector();
  $selector->jobIds[] = $job->id;
  $selector->includeStats = TRUE;
  $selector->includeHistory = TRUE;

  $numRetries = 0;
  $maxRetries = 100;
  $retryInterval = 10;
  do {
    sleep($retryInterval);
    $jobs = $mutateJobService->get($selector);
    $job = $jobs[0];
    switch ($job->status) {
      case 'PENDING':
        printf("The job has been pending for approximately %s.\n",
            strftime('%M:%S', time() - strtotime($job->history[0]->dateTime)));
        break;
      case 'PROCESSING':
        printf("The job is processing and approximately %d%% complete.\n",
            $job->stats->progressPercent);
        break;
      case 'COMPLETED':
        printf("The job is complete and took approximately %d seconds to "
            ."process.\n", $job->stats->processingTimeMillis / 100);
        break;
      case 'FAILED':
        printf("The job failed with reason '%s'.\n",
            ChoiceUtils::GetValue($job->failureReason));
        break;
    }
    $numRetries++;
  } while (($job->status == 'PENDING' || $job->status == 'PROCESSING') &&
        $numRetries < $maxRetries);

  if ($job->status == 'COMPLETED') {
    // Retrieve the results of the job.
    $jobResult = ChoiceUtils::GetValue(
        $mutateJobService->getResult($selector));

    // Sort the placements into groups based on the results.
    $lost = array();
    $skipped = array();
    $failed = array();
    $errors = array();
    $genericErrors = array();

    // Examines the errors to determine which placements failed to be applied.
    foreach ($jobResult->errors as $error) {
      $index = OgnlUtils::GetOperationIndex($error->fieldPath);
      if (isset($index)) {
        $placementUrl = $operations[$index]->operand->criterion->url;
        switch ($error->reason) {
          case 'LOST_RESULT':
            $lost[] = $placementUrl;
            break;
          case 'UNPROCESSED_RESULT':
          case 'BATCH_FAILURE':
            $skipped[] = $placementUrl;
            break;
          default:
            if (!in_array($placementUrl, $failed)) {
              $failed[] = $placementUrl;
            }
            $errors[$placementUrl][] = $error;
        }
      } else {
        $genericErrors[] = $error;
      }
    }

    // Examine the results to determine which placements were added
    // successfully.
    $succeeded = array();
    for ($i = 0; $i < sizeof($jobResult->results); $i++) {
      $operation = $operations[$i];
      $result = ChoiceUtils::GetValue($jobResult->results[$i]);
      if ($result instanceof AdGroupCriterion) {
        $succeeded[] = $result->criterion->url;
      }
    }

    // Display the results of the job.
    printf("%d placements were added successfully: %s\n", sizeof($succeeded),
        implode(', ', $succeeded));

    printf("%d placements were skipped and should be retried: %s\n",
        sizeof($skipped), implode(', ', $skipped));

    printf("%d placements were not added due to errors:\n", sizeof($failed));
    foreach ($failed as $placementUrl) {
      $errorStrings = array();
      foreach ($errors[$placementUrl] as $error) {
        $errorStrings[] = $error->errorString;
      }
      printf("- %s: %s\n", $placementUrl, implode(', ', $errorStrings));
    }

    printf("%d generic errors were encountered:\n", sizeof($genericErrors));
    foreach($genericErrors as $error) {
      printf("- %s\n", $error->errorString);
    }
  }
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
  AddPlacementsInBulkExample($user, $adGroupId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
