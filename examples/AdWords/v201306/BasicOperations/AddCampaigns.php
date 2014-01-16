  <?php
/**
 * This example adds campaigns.
 *
 * Tags: CampaignService.mutate
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
 * @author     Adam Rogal <api.arogal@gmail.com>
 * @author     Eric Koleda <api.ekoleda@gmail.com>
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 */
function AddCampaignsExample(AdWordsUser $user) {
  // Get the BudgetService, which loads the required classes.
  $budgetService = $user->GetService('BudgetService', ADWORDS_VERSION);

  // Create the shared budget (required).
  $budget = new Budget();
  $budget->name = 'Interplanetary Cruise Budget #' . uniqid();
  $budget->period = 'DAILY';
  $budget->amount = new Money(50000000);
  $budget->deliveryMethod = 'STANDARD';

  $operations = array();

  // Create operation.
  $operation = new BudgetOperation();
  $operation->operand = $budget;
  $operation->operator = 'ADD';
  $operations[] = $operation;

   // Make the mutate request.
  $result = $budgetService->mutate($operations);
  $budget = $result->value[0];

  // Get the CampaignService, which loads the required classes.
  $campaignService = $user->GetService('CampaignService', ADWORDS_VERSION);

  $numCampaigns = 2;
  $operations = array();
  for ($i = 0; $i < $numCampaigns; $i++) {
    // Create campaign.
    $campaign = new Campaign();
    $campaign->name = 'Interplanetary Cruise #' . uniqid();

    // Set shared budget (required).
    $campaign->budget = new Budget();
    $campaign->budget->budgetId = $budget->budgetId;

    // Set bidding strategy (required).
    $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
    $biddingStrategyConfiguration->biddingStrategyType = 'MANUAL_CPC';

    // You can optionally provide a bidding scheme in place of the type.
    $biddingScheme = new ManualCpcBiddingScheme();
    $biddingScheme->enhancedCpcEnabled = FALSE;
    $biddingStrategyConfiguration->biddingScheme = $biddingScheme;

    $campaign->biddingStrategyConfiguration = $biddingStrategyConfiguration;

    // Set keyword matching setting (required).
    $keywordMatchSetting = new KeywordMatchSetting();
    $keywordMatchSetting->optIn = TRUE;
    $campaign->settings[] = $keywordMatchSetting;

    // Set network targeting (recommended).
    $networkSetting = new NetworkSetting();
    $networkSetting->targetGoogleSearch = TRUE;
    $networkSetting->targetSearchNetwork = TRUE;
    $networkSetting->targetContentNetwork = TRUE;
    $campaign->networkSetting = $networkSetting;

    // Set additional settings (optional).
    $campaign->status = 'PAUSED';
    $campaign->startDate = date('Ymd', strtotime('+1 day'));
    $campaign->endDate = date('Ymd', strtotime('+1 month'));
    $campaign->adServingOptimizationStatus = 'ROTATE';

    // Set frequency cap (optional).
    $frequencyCap = new FrequencyCap();
    $frequencyCap->impressions = 5;
    $frequencyCap->timeUnit = 'DAY';
    $frequencyCap->level = 'ADGROUP';
    $campaign->frequencyCap = $frequencyCap;

    // Set advanced location targeting settings (optional).
    $geoTargetTypeSetting = new GeoTargetTypeSetting();
    $geoTargetTypeSetting->positiveGeoTargetType = 'DONT_CARE';
    $geoTargetTypeSetting->negativeGeoTargetType = 'DONT_CARE';
    $campaign->settings[] = $geoTargetTypeSetting;

    // Create operation.
    $operation = new CampaignOperation();
    $operation->operand = $campaign;
    $operation->operator = 'ADD';
    $operations[] = $operation;
  }

  // Make the mutate request.
  $result = $campaignService->mutate($operations);

  // Display results.
  foreach ($result->value as $campaign) {
    printf("Campaign with name '%s' and ID '%s' was added.\n", $campaign->name,
        $campaign->id);
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
  AddCampaignsExample($user);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
