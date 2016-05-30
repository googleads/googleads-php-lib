<?php
/**
 * This code sample illustrates how to use BatchJobService to create a complete
 * campaign, including ad groups and keywords.
 *
 * Copyright 2015, Google Inc. All Rights Reserved.
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
 * @copyright  2015, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';
require_once ADWORDS_UTIL_PATH . '/TempIdGenerator.php';
require_once ADWORDS_UTIL_PATH . '/XmlDeserializer.php';
require_once ADWORDS_UTIL_PATH . '/XmlSerializer.php';
require_once ADWORDS_UTIL_VERSION_PATH . '/BatchJobUtils.php';

define('NUMBER_OF_CAMPAIGNS_TO_ADD', 2);
define('NUMBER_OF_ADGROUPS_TO_ADD', 2);
define('NUMBER_OF_KEYWORDS_TO_ADD', 5);
define('POLL_FREQUENCY_SECONDS', 30);
define('MAX_POLL_ATTEMPTS', 60);

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 */
function AddCompleteCampaignUsingBatchJobExample(AdWordsUser $user) {
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
  printf("Created BatchJob with ID %d, status '%s' and upload 'URL' %s.\n",
      $batchJob->id, $batchJob->status, $uploadUrl);

  $namePrefix = uniqid();
  // Create and add an operation to create a new budget.
  $budgetOperation = buildBudgetOperation($namePrefix);
  $operations = array($budgetOperation);

  // Create and add an operation to create new campaigns.
  $campaignOperations = buildCampaignOperations($namePrefix, $budgetOperation);
  $operations = array_merge($operations, $campaignOperations);

  // Create and add operations to create new negative keyword criteria for
  // each campaign.
  $campaignCriterionOperations =
      buildCampaignCriterionOperations($campaignOperations);
  $operations = array_merge($operations, $campaignCriterionOperations);

  // Create and add operations to create new ad groups.
  $adGroupOperations = buildAdGroupOperations($namePrefix, $campaignOperations);
  $operations = array_merge($operations, $adGroupOperations);

  // Create and add operations to create new ad group criteria (keywords).
  $adGroupCriterionOperations =
      buildAdGroupCriterionOperations($adGroupOperations);
  $operations = array_merge($operations, $adGroupCriterionOperations);

  // Create and add operations to create new ad group ads (text ads).
  $adGroupAdOperations = buildAdGroupAdOperations($adGroupOperations);
  $operations = array_merge($operations, $adGroupAdOperations);

  // Use BatchJobUtils to upload all operations.
  $batchJobUtils = new BatchJobUtils($batchJob->uploadUrl->url);
  $batchJobUtils->UploadBatchJobOperations($operations);

  printf("Uploaded %d operations for batch job with ID %d.\n",
      count($operations), $batchJob->id);

  // Poll for completion of the batch job using an exponential back off.
  $pollAttempts = 0;
  $isPending = true;
  do {
    $sleepSeconds = POLL_FREQUENCY_SECONDS * pow(2, $pollAttempts);
    printf("Sleeping %d seconds...\n", $sleepSeconds);
    sleep($sleepSeconds);

    $selector = new Selector();
    $selector->fields = array('Id', 'Status', 'DownloadUrl', 'ProcessingErrors',
        'ProgressStats');
    $selector->predicates[] = new Predicate('Id', 'EQUALS', $batchJob->id);
    $batchJob = $batchJobService->get($selector)->entries[0];
    printf("Batch job ID %d has status '%s'.\n", $batchJob->id,
        $batchJob->status);

    $pollAttempts++;
    if ($batchJob->status !== 'ACTIVE' &&
        $batchJob->status !== 'AWAITING_FILE' &&
        $batchJob->status !== 'CANCELING') {
      $isPending = false;
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
 * Builds objects of AdGroupAdOperation for creating an ad group ad for
 * ad groups in the specified ad group operations.
 *
 * @param array $adGroupOperations an array of AdGroupOperation
 * @return array an array of AdGroupAdOperation
 */
function buildAdGroupAdOperations(array $adGroupOperations) {
  $operations = array();
  foreach ($adGroupOperations as $adGroupOperation) {
    $adGroupId = $adGroupOperation->operand->id;
    $adGroupAd = new AdGroupAd();
    $adGroupAd->adGroupId = $adGroupId;

    $textAd = new TextAd();
    $textAd->headline = 'Luxury Cruise to Mars';
    $textAd->description1 = 'Visit the Red Planet in style.';
    $textAd->description2 = 'Low-gravity fun for everyone!';
    $textAd->displayUrl = 'www.example.com';
    $textAd->finalUrls[] = 'http://www.example.com/1';

    $adGroupAd->ad = $textAd;

    $operation = new AdGroupAdOperation();
    $operation->operator = 'ADD';
    $operation->operand = $adGroupAd;

    $operations[] = $operation;
  }
  return $operations;
}

/**
 * Builds objects of AdGroupCriterionOperation for creating biddable criteria
 * (as keywords) for ad groups in the specified ad group operations. 50% of
 * keywords are created with some invalid characters to demonstrate how
 * BatchJobService returns information about such errors.
 *
 * @param array $adGroupOperations an array of AdGroupOperation
 * @return array an array of AdGroupCriterionOperation
 */
function buildAdGroupCriterionOperations(array $adGroupOperations) {
  $adGroupCriteriaOperations = array();

  // Create AdGroupCriterionOperations to add keywords.
  foreach ($adGroupOperations as $adGroupOperation) {
    $newAdGroupId = $adGroupOperation->operand->id;
    for ($i = 0; $i < NUMBER_OF_KEYWORDS_TO_ADD; $i++) {
      // Create Keyword.
      $text = sprintf("mars%d", $i);

      // Make 50% of keywords invalid to demonstrate error handling.
      if ($i % 2 == 0) {
        $text = $text . '!!!';
      }
      $keyword = new Keyword();
      $keyword->text = $text;
      $keyword->matchType = 'BROAD';

      // Create BiddableAdGroupCriterion.
      $biddableAdGroupCriterion = new BiddableAdGroupCriterion();
      $biddableAdGroupCriterion->adGroupId = $newAdGroupId;
      $biddableAdGroupCriterion->criterion = $keyword;

      // Create AdGroupCriterionOperation.
      $operation = new AdGroupCriterionOperation();
      $operation->operand = $biddableAdGroupCriterion;
      $operation->operator = 'ADD';

      // Add to list.
      $adGroupCriteriaOperations[] = $operation;
    }
  }
  return $adGroupCriteriaOperations;
}

/**
 * Builds objects of AdGroupOperation for creating ad groups for campaigns in
 * the specified campaign operations.
 *
 * @param string $namePrefix a prefix string used to name ad groups
 * @param array $campaignOperations an array of CampaignOperation
 * @return array an array of AdGroupOperation
 */
function buildAdGroupOperations($namePrefix, array $campaignOperations) {
  $operations = array();
  foreach ($campaignOperations as $campaignOperation) {
    for ($i = 0; $i < NUMBER_OF_ADGROUPS_TO_ADD; $i++) {
      $adGroup = new AdGroup();
      $adGroup->campaignId = $campaignOperation->operand->id;
      $adGroup->id = TempIdGenerator::Generate();
      $adGroup->name = sprintf("Batch Ad Group %s.%s", $namePrefix,
          strval($adGroup->id));

      $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
      $bid = new CpcBid();
      $bid->bid = new Money(10000000);
      $biddingStrategyConfiguration->bids[] = $bid;

      $adGroup->biddingStrategyConfiguration = $biddingStrategyConfiguration;

      $operation = new AdGroupOperation();
      $operation->operand = $adGroup;
      $operation->operator = 'ADD';

      $operations[] = $operation;
    }
  }
  return $operations;
}

/**
 * Builds objects of CampaignCriterionOperation for creating a negative campaign
 * criterion (as keyword) for campaigns in the specified campaign operations.
 *
 * @param array $campaignOperations an array of CampaignOperation
 * @return array an array of CampaignCriterionOperation
 */
function buildCampaignCriterionOperations(array $campaignOperations) {
  $operations = array();
  foreach ($campaignOperations as $campaignOperation) {
    $keyword = new Keyword();
    $keyword->matchType = 'BROAD';
    $keyword->text = 'venus';

    $negativeCriterion = new NegativeCampaignCriterion();
    $negativeCriterion->campaignId = $campaignOperation->operand->id;
    $negativeCriterion->criterion = $keyword;

    $operation = new CampaignCriterionOperation();
    $operation->operand = $negativeCriterion;
    $operation->operator = 'ADD';

    $operations[] = $operation;
  }
  return $operations;
}

/**
 * Builds objects of CampaignOperation for creating a campaign using the ID of
 * budget in the specified budget operation.
 *
 * @param string $namePrefix a prefix string used to name campaigns
 * @param BudgetOperation $budgetOperation an object of BudgetOperation
 * @return array an array of CampaignOperation
 */
function buildCampaignOperations($namePrefix,
    BudgetOperation $budgetOperation) {
  $budgetId = $budgetOperation->operand->budgetId;

  $operations = array();
  for ($i = 0; $i < NUMBER_OF_CAMPAIGNS_TO_ADD; $i++) {
    $campaign = new Campaign();
    $campaign->id = TempIdGenerator::Generate();
    $campaign->name = sprintf("Batch Campaign %s.%s", $namePrefix,
        strval($campaign->id));
    $campaign->status = 'PAUSED';
    $campaign->advertisingChannelType = 'SEARCH';

    $budget = new Budget();
    $budget->budgetId = $budgetId;
    $campaign->budget = $budget;
    $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
    $biddingStrategyConfiguration->biddingStrategyType = 'MANUAL_CPC';

    // You can optionally provide a bidding scheme in place of the type.
    $cpcBiddingScheme = new ManualCpcBiddingScheme();
    $cpcBiddingScheme->enhancedCpcEnabled = false;
    $biddingStrategyConfiguration->biddingScheme = $cpcBiddingScheme;

    $campaign->biddingStrategyConfiguration = $biddingStrategyConfiguration;

    $operation = new CampaignOperation();
    $operation->operand = $campaign;
    $operation->operator = 'ADD';
    $operations[] = $operation;
  }
  return $operations;
}

/**
 * Builds BudgetOperation for creating a budget.
 *
 * @param string $namePrefix a prefix string used to name a budget
 * @return BudgetOperation an object of BudgetOperation
 */
function buildBudgetOperation($namePrefix) {
  $budget = new Budget();
  $budget->budgetId = TempIdGenerator::Generate();
  $budget->name = 'Interplanetary Cruise #' . $namePrefix;
  $budgetAmount = new Money();
  $budgetAmount->microAmount = 50000000;
  $budget->amount = $budgetAmount;
  $budget->deliveryMethod = 'STANDARD';

  $budgetOperation = new BudgetOperation();
  $budgetOperation->operand = $budget;
  $budgetOperation->operator = 'ADD';
  return $budgetOperation;
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
  AddCompleteCampaignUsingBatchJobExample($user);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
