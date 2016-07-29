<?php
/**
 * This example adds a Portfolio Bidding Strategy and uses it to
 * construct a campaign.
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

// Enter budgetId required by the code example, or leave as null to create one.
$budgetId = null;

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string|null $sharedBudgetId the shared budget ID to re-use or null
 *    to create a new one
 */
function UsePortfolioBiddingStrategyExample(AdWordsUser $user,
    $sharedBudgetId = null) {
  $biddingStrategy = CreateBiddingStrategy($user);

  if (!$sharedBudgetId) {
    $budget = CreateSharedBudget($user);
    $sharedBudgetId = $budget->budgetId;
  }
  CreateCampaignWithBiddingStrategy($user, $biddingStrategy->id,
      $sharedBudgetId);
}

/**
 * Creates the bidding strategy object.
 * @param AdWordsUser $user the user to run the example with
 */
function CreateBiddingStrategy(AdWordsUser $user) {
  // Get the BiddingStrategyService, which loads the required classes.
  $biddingStrategyService =
      $user->GetService('BiddingStrategyService', ADWORDS_VERSION);

  // Create a portfolio bidding strategy.
  $biddingStrategy = new SharedBiddingStrategy();
  $biddingStrategy->name = "Maximize Clicks " . uniqid();

  $biddingScheme = new TargetSpendBiddingScheme();
  // Optionally set additional bidding scheme parameters.
  $biddingScheme->bidCeiling = new Money(2000000);
  $biddingScheme->spendTarget = new Money(20000000);

  $biddingStrategy->biddingScheme = $biddingScheme;

  // Create operation.
  $operation = new BiddingStrategyOperation();
  $operation->operator = 'ADD';
  $operation->operand = $biddingStrategy;

  $result = $biddingStrategyService->mutate(array($operation));

  $newBiddingStrategy = $result->value[0];

  printf(
      "Portfolio bidding strategy with name '%s' and ID %d of type %s was "
          . "created.\n",
      $newBiddingStrategy->name,
      $newBiddingStrategy->id,
      $newBiddingStrategy->biddingScheme->biddingSchemeType
  );

  return $newBiddingStrategy;
}

/**
 * Creates an explicit budget to be used only to create the Campaign.
 * @param AdWordsUser $user the user to run the example with
 */
function CreateSharedBudget($user) {
  // Get the BudgetService, which loads the required classes.
  $budgetService = $user->GetService('BudgetService', ADWORDS_VERSION);

  // Create a shared budget
  $budget = new Budget();
  $budget->name = "Shared Interplanetary Budget #" . uniqid();
  $budget->period = 'DAILY';
  $budget->amount = new Money(50000000);
  $budget->deliveryMethod = 'STANDARD';
  $budget->isExplicitlyShared = true;

  $operations = array();

  // Create operation.
  $operation = new BudgetOperation();
  $operation->operand = $budget;
  $operation->operator = 'ADD';
  $operations[] = $operation;

  // Make the mutate request.
  $result = $budgetService->mutate($operations);
  return $result->value[0];
}

/**
 * Create a Campaign with a Portfolio Bidding Strategy.
 * @param AdWordsUser $user the user to run the example with
 * @param string $biddingStrategyId the bidding strategy id to use
 * @param string $sharedBudgetId the shared budget id to use
 */
function CreateCampaignWithBiddingStrategy(AdWordsUser $user,
    $biddingStrategyId, $sharedBudgetId) {
  // Get the CampaignService, which loads the required classes.
  $campaignService = $user->GetService('CampaignService', ADWORDS_VERSION);

  // Create campaign.
  $campaign = new Campaign();
  $campaign->name = 'Interplanetary Cruise #' . uniqid();

  // Set the budget.
  $campaign->budget = new Budget();
  $campaign->budget->budgetId = $sharedBudgetId;
  $campaign->advertisingChannelType = 'SEARCH';

  // Set bidding strategy (required).
  $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
  $biddingStrategyConfiguration->biddingStrategyId = $biddingStrategyId;

  $campaign->biddingStrategyConfiguration = $biddingStrategyConfiguration;

  // Set network targeting (recommended).
  $networkSetting = new NetworkSetting();
  $networkSetting->targetGoogleSearch = true;
  $networkSetting->targetSearchNetwork = true;
  $networkSetting->targetContentNetwork = true;
  $campaign->networkSetting = $networkSetting;

  // Create operation.
  $operation = new CampaignOperation();
  $operation->operand = $campaign;
  $operation->operator = 'ADD';

  $result = $campaignService->mutate(array($operation));

  $newCampaign = $result->value[0];

  printf("Campaign with name '%s', ID %d and bidding scheme ID %d was "
        . "created.\n", $newCampaign->name, $newCampaign->id,
          $newCampaign->biddingStrategyConfiguration->biddingStrategyId);

  return $newCampaign;
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
  UsePortfolioBiddingStrategyExample($user, $budgetId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
