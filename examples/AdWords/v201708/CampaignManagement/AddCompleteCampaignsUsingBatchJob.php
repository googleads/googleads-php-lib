<?php
/**
 * Copyright 2017 Google Inc. All Rights Reserved.
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
 */
namespace Google\AdsApi\Examples\AdWords\v201708\CampaignManagement;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\BatchJobs\v201708\BatchJobs;
use Google\AdsApi\AdWords\v201708\cm\AdGroup;
use Google\AdsApi\AdWords\v201708\cm\AdGroupOperation;
use Google\AdsApi\AdWords\v201708\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201708\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201708\cm\AdGroupCriterionOperation;
use Google\AdsApi\AdWords\v201708\cm\AdvertisingChannelType;
use Google\AdsApi\AdWords\v201708\cm\BatchJob;
use Google\AdsApi\AdWords\v201708\cm\BatchJobOperation;
use Google\AdsApi\AdWords\v201708\cm\BatchJobService;
use Google\AdsApi\AdWords\v201708\cm\BatchJobStatus;
use Google\AdsApi\AdWords\v201708\cm\BiddableAdGroupCriterion;
use Google\AdsApi\AdWords\v201708\cm\BiddingStrategyConfiguration;
use Google\AdsApi\AdWords\v201708\cm\BiddingStrategyType;
use Google\AdsApi\AdWords\v201708\cm\Budget;
use Google\AdsApi\AdWords\v201708\cm\BudgetBudgetDeliveryMethod;
use Google\AdsApi\AdWords\v201708\cm\BudgetOperation;
use Google\AdsApi\AdWords\v201708\cm\Campaign;
use Google\AdsApi\AdWords\v201708\cm\CampaignCriterionOperation;
use Google\AdsApi\AdWords\v201708\cm\CampaignOperation;
use Google\AdsApi\AdWords\v201708\cm\CampaignStatus;
use Google\AdsApi\AdWords\v201708\cm\CpcBid;
use Google\AdsApi\AdWords\v201708\cm\ExpandedTextAd;
use Google\AdsApi\AdWords\v201708\cm\Keyword;
use Google\AdsApi\AdWords\v201708\cm\KeywordMatchType;
use Google\AdsApi\AdWords\v201708\cm\ManualCpcBiddingScheme;
use Google\AdsApi\AdWords\v201708\cm\Money;
use Google\AdsApi\AdWords\v201708\cm\NegativeCampaignCriterion;
use Google\AdsApi\AdWords\v201708\cm\Operator;
use Google\AdsApi\AdWords\v201708\cm\Predicate;
use Google\AdsApi\AdWords\v201708\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201708\cm\Selector;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use UnexpectedValueException;

/**
 * This example adds complete campaigns using BatchJobService.
 */
class AddCompleteCampaignsUsingBatchJob {

  const NUMBER_OF_CAMPAIGNS_TO_ADD = 2;
  const NUMBER_OF_ADGROUPS_TO_ADD = 2;
  const NUMBER_OF_KEYWORDS_TO_ADD = 5;
  const POLL_FREQUENCY_SECONDS = 30;
  const MAX_POLL_ATTEMPTS = 60;

  private static $temporaryId = 0;

  public static function runExample(
      AdWordsServices $adWordsServices, AdWordsSession $session) {
    $batchJobService = $adWordsServices->get($session, BatchJobService::class);

    // Create a BatchJob.
    $addOp = new BatchJobOperation();
    $addOp->setOperator(Operator::ADD);
    $addOp->setOperand(new BatchJob());

    $result = $batchJobService->mutate([$addOp]);
    $batchJob = $result->getValue()[0];

    // Get the upload URL from the new job.
    $uploadUrl = $batchJob->getUploadUrl()->getUrl();
    printf("Created BatchJob with ID %d, status '%s' and upload URL '%s'.\n",
        $batchJob->getId(), $batchJob->getStatus(), $uploadUrl);

    $namePrefix = uniqid();
    // Create and add an operation to create a new budget.
    $budgetOperation = self::buildBudgetOperation($namePrefix);
    $operations = [$budgetOperation];

    // Create and add an operation to create new campaigns.
    $campaignOperations =
        self::buildCampaignOperations($namePrefix, $budgetOperation);
    $operations = array_merge($operations, $campaignOperations);

    // Create and add operations to create new negative keyword criteria for
    // each campaign.
    $campaignCriterionOperations =
        self::buildCampaignCriterionOperations($campaignOperations);
    $operations = array_merge($operations, $campaignCriterionOperations);

    // Create and add operations to create new ad groups.
    $adGroupOperations =
        self::buildAdGroupOperations($namePrefix, $campaignOperations);
    $operations = array_merge($operations, $adGroupOperations);

    // Create and add operations to create new ad group criteria (keywords).
    $adGroupCriterionOperations =
        self::buildAdGroupCriterionOperations($adGroupOperations);
    $operations = array_merge($operations, $adGroupCriterionOperations);

    // Create and add operations to create new ad group ads (text ads).
    $adGroupAdOperations = self::buildAdGroupAdOperations($adGroupOperations);
    $operations = array_merge($operations, $adGroupAdOperations);

    // Use BatchJobs to upload all operations.
    $batchJobs = new BatchJobs($session);
    $batchJobs->uploadBatchJobOperations($operations, $uploadUrl);

    printf("Uploaded %d operations for batch job with ID %d.\n",
        count($operations), $batchJob->getId());

    // Poll for completion of the batch job using an exponential back off.
    $pollAttempts = 0;
    $isPending = true;
    do {
      $sleepSeconds = self::POLL_FREQUENCY_SECONDS * pow(2, $pollAttempts);
      printf("Sleeping %d seconds...\n", $sleepSeconds);
      sleep($sleepSeconds);

      $selector = new Selector();
      $selector->setFields(
          ['Id', 'Status', 'DownloadUrl', 'ProcessingErrors', 'ProgressStats']);
      $selector->setPredicates([
          new Predicate('Id', PredicateOperator::EQUALS, [$batchJob->getId()])
      ]);
      $batchJob = $batchJobService->get($selector)->getEntries()[0];
      printf("Batch job ID %d has status '%s'.\n", $batchJob->getId(),
          $batchJob->getStatus());

      $pollAttempts++;
      if ($batchJob->getStatus() !== BatchJobStatus::ACTIVE &&
          $batchJob->getStatus() !== BatchJobStatus::AWAITING_FILE &&
          $batchJob->getStatus() !== BatchJobStatus::CANCELING) {
        $isPending = false;
      }
    } while ($isPending && $pollAttempts <= self::MAX_POLL_ATTEMPTS);

    if ($isPending) {
      throw new UnexpectedValueException(
          sprintf('Job is still pending state after polling %d times.',
              self::MAX_POLL_ATTEMPTS));
    }

    if ($batchJob->getProcessingErrors() !== null) {
      $i = 0;
      foreach ($batchJob->getProcessingErrors() as $processingError) {
        printf(
            " Processing error [%d]: errorType=%s, trigger=%s, errorString=%s,"
                . " fieldPath=%s, reason=%s\n",
            $i++,
            $processingError->getApiErrorType(),
            $processingError->getTrigger(),
            $processingError->getErrorString(),
            $processingError->getFieldPath(),
            $processingError->getReason()
        );
      }
    } else {
      printf("No processing errors found.\n");
    }

    if ($batchJob->getDownloadUrl() !== null
        && $batchJob->getDownloadUrl()->getUrl() !== null) {
      $mutateResults = $batchJobs->downloadBatchJobResults(
          $batchJob->getDownloadUrl()->getUrl());
      printf("Downloaded results from %s:\n",
          $batchJob->getDownloadUrl()->getUrl());

      if (count($mutateResults) === 0) {
        printf("  No results available.\n");
      } else {
        foreach ($mutateResults as $mutateResult) {
          $outcome =
              $mutateResult->getErrorList() === null ? 'SUCCESS' : 'FAILURE';
          printf("  Operation [%d] - %s\n", $mutateResult->getIndex(),
              $outcome);
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
   * @param AdGroupOperation[] $adGroupOperations an array of AdGroupOperation
   * @return array an array of AdGroupAdOperation
   */
  private static function buildAdGroupAdOperations(array $adGroupOperations) {
    $operations = [];
    foreach ($adGroupOperations as $adGroupOperation) {
      $adGroupId = $adGroupOperation->getOperand()->getId();
      $adGroupAd = new AdGroupAd();
      $adGroupAd->setAdGroupId($adGroupId);

      $expandedTextAd = new ExpandedTextAd();
      $expandedTextAd->setHeadlinePart1('Luxury Cruise to Mars');
      $expandedTextAd->setHeadlinePart2('Visit the Red Planet in style.');
      $expandedTextAd->setDescription('Low-gravity fun for everyone!');
      $expandedTextAd->setFinalUrls(['http://www.example.com/1']);

      $adGroupAd->setAd($expandedTextAd);

      $operation = new AdGroupAdOperation();
      $operation->setOperator(Operator::ADD);
      $operation->setOperand($adGroupAd);

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
   * @param AdGroupOperation[] $adGroupOperations an array of AdGroupOperation
   * @return array an array of AdGroupCriterionOperation
   */
  private static function buildAdGroupCriterionOperations
      (array $adGroupOperations) {
    $adGroupCriteriaOperations = [];

    // Create AdGroupCriterionOperations to add keywords.
    foreach ($adGroupOperations as $adGroupOperation) {
      $newAdGroupId = $adGroupOperation->getOperand()->getId();
      for ($i = 0; $i < self::NUMBER_OF_KEYWORDS_TO_ADD; $i++) {
        // Create Keyword.
        $text = sprintf('mars%d', $i);

        // Make 50% of keywords invalid to demonstrate error handling.
        if ($i % 2 == 0) {
          $text = $text . '!!!';
        }
        $keyword = new Keyword();
        $keyword->setText($text);
        $keyword->setMatchType(KeywordMatchType::BROAD);

        // Create BiddableAdGroupCriterion.
        $biddableAdGroupCriterion = new BiddableAdGroupCriterion();
        $biddableAdGroupCriterion->setAdGroupId($newAdGroupId);
        $biddableAdGroupCriterion->setCriterion($keyword);

        // Create AdGroupCriterionOperation.
        $operation = new AdGroupCriterionOperation();
        $operation->setOperand($biddableAdGroupCriterion);
        $operation->setOperator(Operator::ADD);

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
   * @param CampaignOperation[] $campaignOperations an array of
   *     CampaignOperation
   * @return array an array of AdGroupOperation
   */
  private static function buildAdGroupOperations($namePrefix,
      array $campaignOperations) {
    $operations = [];
    foreach ($campaignOperations as $campaignOperation) {
      for ($i = 0; $i < self::NUMBER_OF_ADGROUPS_TO_ADD; $i++) {
        $adGroup = new AdGroup();
        $adGroup->setCampaignId($campaignOperation->getOperand()->getId());
        $adGroup->setId(--self::$temporaryId);
        $adGroup->setName(sprintf('Batch Ad Group %s.%s', $namePrefix,
            strval($adGroup->getId())));

        $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
        $money = new Money();
        $money->setMicroAmount(10000000);
        $bid = new CpcBid();
        $bid->setBid($money);
        $biddingStrategyConfiguration->setBids([$bid]);

        $adGroup->setBiddingStrategyConfiguration(
            $biddingStrategyConfiguration);

        $operation = new AdGroupOperation();
        $operation->setOperand($adGroup);
        $operation->setOperator(Operator::ADD);

        $operations[] = $operation;
      }
    }
    return $operations;
  }

  /**
   * Builds objects of CampaignCriterionOperation for creating a negative
   * campaign criterion (as keyword) for campaigns in the specified campaign
   * operations.
   *
   * @param CampaignOperation[] $campaignOperations an array of
   *     CampaignOperation
   * @return array an array of CampaignCriterionOperation
   */
  private static function buildCampaignCriterionOperations(
      array $campaignOperations) {
    $operations = [];
    foreach ($campaignOperations as $campaignOperation) {
      $keyword = new Keyword();
      $keyword->setMatchType(KeywordMatchType::BROAD);
      $keyword->setText('venus');

      $negativeCriterion = new NegativeCampaignCriterion();
      $negativeCriterion->setCampaignId(
          $campaignOperation->getOperand()->getId());
      $negativeCriterion->setCriterion($keyword);

      $operation = new CampaignCriterionOperation();
      $operation->setOperand($negativeCriterion);
      $operation->setOperator(Operator::ADD);

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
  private static function buildCampaignOperations($namePrefix,
      BudgetOperation $budgetOperation) {
    $budgetId = $budgetOperation->getOperand()->getBudgetId();

    $operations = [];
    for ($i = 0; $i < self::NUMBER_OF_CAMPAIGNS_TO_ADD; $i++) {
      $campaign = new Campaign();
      $campaign->setId(--self::$temporaryId);
      $campaign->setName(sprintf('Batch Campaign %s.%s', $namePrefix,
          strval($campaign->getId())));

      // Recommendation: Set the campaign to PAUSED when creating it to stop
      // the ads from immediately serving. Set to ENABLED once you've added
      // targeting and the ads are ready to serve.
      $campaign->setStatus(CampaignStatus::PAUSED);
      $campaign->setAdvertisingChannelType(AdvertisingChannelType::SEARCH);

      $budget = new Budget();
      $budget->setBudgetId($budgetId);
      $campaign->setBudget($budget);
      $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
      $biddingStrategyConfiguration->setBiddingStrategyType(
          BiddingStrategyType::MANUAL_CPC);

      // You can optionally provide a bidding scheme in place of the type.
      $cpcBiddingScheme = new ManualCpcBiddingScheme();
      $cpcBiddingScheme->setEnhancedCpcEnabled(false);
      $biddingStrategyConfiguration->setBiddingScheme($cpcBiddingScheme);

      $campaign->setBiddingStrategyConfiguration($biddingStrategyConfiguration);

      $operation = new CampaignOperation();
      $operation->setOperand($campaign);
      $operation->setOperator(Operator::ADD);
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
  private static function buildBudgetOperation($namePrefix) {
    $budget = new Budget();
    $budget->setBudgetId(--self::$temporaryId);
    $budget->setName('Interplanetary Cruise #' . $namePrefix);
    $budgetAmount = new Money();
    $budgetAmount->setMicroAmount(50000000);
    $budget->setAmount($budgetAmount);
    $budget->setDeliveryMethod(BudgetBudgetDeliveryMethod::STANDARD);

    $budgetOperation = new BudgetOperation();
    $budgetOperation->setOperand($budget);
    $budgetOperation->setOperator(Operator::ADD);
    return $budgetOperation;
  }

  public static function main() {
    // Generate a refreshable OAuth2 credential for authentication.
    $oAuth2Credential = (new OAuth2TokenBuilder())
        ->fromFile()
        ->build();

    // Construct an API session configured from a properties file and the OAuth2
    // credentials above.
    $session = (new AdWordsSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential)
        ->build();
    self::runExample(new AdWordsServices(), $session);
  }
}

AddCompleteCampaignsUsingBatchJob::main();
