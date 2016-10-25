<?php
/**
 * This example adds a Universal App campaign. To get campaigns, run
 * GetCampaigns.php. To upload image assets for this campaign, run
 * UploadImage.php.
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
 * @subpackage v201609
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

/**
 * Runs the example.
 *
 * @param AdWordsUser $user the user to run the example with
 */
function AddUniversalAppCampaignExample(AdWordsUser $user) {
  // Get the CampaignService, which loads the required classes.
  $campaignService = $user->GetService('CampaignService', ADWORDS_VERSION);

  // Create campaign with some properties set.
  $campaign = new Campaign();
  $campaign->name = 'Interplanetary Cruise #' . uniqid();
  // Recommendation: Set the campaign to PAUSED when creating it to stop
  // the ads from immediately serving. Set to ENABLED once you've added
  // targeting and the ads are ready to serve.
  $campaign->status = 'PAUSED';

  // Set the advertising channel and subchannel types for Universal app
  // campaigns.
  $campaign->advertisingChannelType = 'MULTI_CHANNEL';
  $campaign->advertisingChannelSubType = 'UNIVERSAL_APP_CAMPAIGN';

  // Set the campaign's bidding strategy. Universal App campaigns
  // only support TARGET_CPA bidding strategy.
  $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
  $biddingStrategyConfiguration->biddingStrategyType = 'TARGET_CPA';

  // Set the target CPA to $1 / app install.
  $biddingScheme = new TargetCpaBiddingScheme();
  $biddingScheme->targetCpa = new Money(1000000);

  $biddingStrategyConfiguration->biddingScheme = $biddingScheme;
  $campaign->biddingStrategyConfiguration = $biddingStrategyConfiguration;

  // Set the campaign's budget.
  $campaign->budget = new Budget();
  $campaign->budget->budgetId = CreateBudget($user);

  // Optional: Set the start date.
  $campaign->startDate = date('Ymd', strtotime('+1 day'));

  // Optional: Set the end date.
  $campaign->endDate = date('Ymd', strtotime('+1 year'));

  // Set the campaign's assets and ad text ideas. These values will be used to
  // generate ads.
  $universalAppSetting = new UniversalAppCampaignSetting();
  $universalAppSetting->appId = 'com.interplanetarycruise.booking';
  $universalAppSetting->description1 = 'Best Space Cruise Line';
  $universalAppSetting->description2 = 'Visit all the planets';
  $universalAppSetting->description3 = 'Trips 7 days a week';
  $universalAppSetting->description4 = 'Buy your tickets now!';

  // Optional: You can set up to 10 image assets for your campaign.
  // See UploadImage.php for an example on how to upload images.
  //
  // $universalAppSetting->imageMediaIds = array(INSERT_IMAGE_MEDIA_ID_HERE);

  // Optimize this campaign for getting new users for your app.
  $universalAppSetting->universalAppBiddingStrategyGoalType =
      'OPTIMIZE_FOR_INSTALL_CONVERSION_VOLUME';

  // If you select bidding strategy goal type as
  // OPTIMIZE_FOR_IN_APP_CONVERSION_VOLUME, then you may specify a set of
  // conversion types for in-app actions to optimize the campaign towards.
  // Conversion type IDs can be retrieved using ConversionTrackerService.get.
  //
  // $campaign->selectiveOptimization = new SelectiveOptimization();
  // $campaign->selectiveOptimization->conversionTypeIds = array(
  //     INSERT_CONVERSION_TYPE_ID_1_HERE,
  //     INSERT_CONVERSION_TYPE_ID_2_HERE
  // );

  // Optional: Set the campaign settings for Advanced location options.
  $geoTargetTypeSetting = new GeoTargetTypeSetting();
  $geoTargetTypeSetting->negativeGeoTargetType = 'LOCATION_OF_PRESENCE';
  $campaign->settings = array($universalAppSetting, $geoTargetTypeSetting);

  // Create the campaign operation.
  $operations = array();
  $operation = new CampaignOperation();
  $operation->operand = $campaign;
  $operation->operator = 'ADD';
  $operations[] = $operation;

  // Add campaigns on the server.
  $result = $campaignService->mutate($operations);

  // Print information for each campaign.
  foreach ($result->value as $campaign) {
    printf("Universal App Campaign with name '%s' and ID %d was added.\n",
        $campaign->name, $campaign->id);
    // Optional: Set the campaign's location and language targeting. No other
    // targeting criteria can be used for Universal App campaigns.
    SetCampaignTargetingCriteria($campaign->id, $user);
  }
}

/**
 * Creates the budget for the campaign.
 *
 * @return the new budget ID
 */
function CreateBudget(AdWordsUser $user) {
  // Get the BudgetService, which loads the required classes.
  $budgetService = $user->GetService('BudgetService', ADWORDS_VERSION);

  // Create the shared budget (required).
  $budget = new Budget();
  $budget->name = 'Interplanetary Cruise Budget #' . uniqid();
  $budget->amount = new Money(50000000);
  $budget->deliveryMethod = 'STANDARD';

  // Universal App campaigns don't support shared budgets.
  $budget->isExplicitlyShared = false;
  $operations = array();

  // Create operation.
  $operation = new BudgetOperation();
  $operation->operand = $budget;
  $operation->operator = 'ADD';
  $operations[] = $operation;

  // Make the mutate request.
  $result = $budgetService->mutate($operations);
  $budget = $result->value[0];

  printf("Budget with name '%s' and ID %d was created.\n",
      $budget->name, $budget->budgetId);

  return $budget->budgetId;
}

/**
 * Sets the campaign's targeting criteria.
 *
 * @param AdWordsUser $user the AdWords user object
 */
function SetCampaignTargetingCriteria($campaignId, AdWordsUser $user) {
  // Get the service, which loads the required classes.
  $campaignCriterionService =
      $user->GetService('CampaignCriterionService', ADWORDS_VERSION);

  $campaignCriteria = array();
  // Create locations. The IDs can be found in the documentation or retrieved
  // with the LocationCriterionService.
  $california = new Location();
  $california->id = 21137;
  $campaignCriteria[] = new CampaignCriterion($campaignId, null, $california);

  $mexico = new Location();
  $mexico->id = 2484;
  $campaignCriteria[] = new CampaignCriterion($campaignId, null, $mexico);

  // Create languages. The IDs can be found in the documentation or retrieved
  // with the ConstantDataService.
  $english = new Language();
  $english->id = 1000;
  $campaignCriteria[] = new CampaignCriterion($campaignId, null, $english);

  $spanish = new Language();
  $spanish->id = 1003;
  $campaignCriteria[] = new CampaignCriterion($campaignId, null, $spanish);

  // Create operations to add each of the criteria above.
  $operations = array();
  foreach ($campaignCriteria as $campaignCriterion) {
    $operations[] = new CampaignCriterionOperation($campaignCriterion, 'ADD');
  }

  // Set the campaign targets.
  $result = $campaignCriterionService->mutate($operations);

  // Display added campaign targets.
  foreach ($result->value as $campaignCriterion) {
    printf("Campaign criterion of type '%s' and ID %d was added.\n",
        $campaignCriterion->criterion->CriterionType,
        $campaignCriterion->criterion->id
    );
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
  AddUniversalAppCampaignExample($user);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
