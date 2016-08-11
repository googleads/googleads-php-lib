<?php
/**
 * This example adds a Shopping campaign.
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
 * @subpackage v201607
 * @category   WebServices
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

$budgetId = 'INSERT_BUDGET_ID_HERE';
$merchantId = 'INSERT_MERCHANT_CENTER_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param int $budgetId the ID of a portfolio budget to use for the campaign
 * @param int $merchantId the Merchant Center account ID to use for product data
 */
function addShoppingCampaignExample(AdWordsUser $user, $budgetId, $merchantId) {
  // Get the services, which loads the required classes.
  $campaignService = $user->GetService('CampaignService', ADWORDS_VERSION);
  $adGroupService = $user->GetService('AdGroupService', ADWORDS_VERSION);
  $adGroupAdService = $user->GetService('AdGroupAdService', ADWORDS_VERSION);

  // Create campaign.
  $campaign = new Campaign();
  $campaign->name = 'Shopping campaign #' . uniqid();
  // The advertisingChannelType is what makes this a Shopping campaign
  $campaign->advertisingChannelType = 'SHOPPING';

  // Set portfolio budget (required).
  $campaign->budget = new Budget();
  $campaign->budget->budgetId = $budgetId;

  // Set bidding strategy (required).
  $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
  $biddingStrategyConfiguration->biddingStrategyType = 'MANUAL_CPC';

  $campaign->biddingStrategyConfiguration = $biddingStrategyConfiguration;

  // All Shopping campaigns need a ShoppingSetting.
  $shoppingSetting = new ShoppingSetting();
  $shoppingSetting->salesCountry = 'US';
  $shoppingSetting->campaignPriority = 0;
  $shoppingSetting->merchantId = $merchantId;
  // Set to "true" to enable Local Inventory Ads in your campaign.
  $shoppingSetting->enableLocal = true;
  $campaign->settings[] = $shoppingSetting;

  // Create operation.
  $operation = new CampaignOperation();
  $operation->operand = $campaign;
  $operation->operator = 'ADD';

  // Make the mutate request.
  $result = $campaignService->mutate(array($operation));

  // Display result.
  $campaign = $result->value[0];
  printf("Campaign with name '%s' and ID '%s' was added.\n", $campaign->name,
        $campaign->id);

  // Create ad group.
  $adGroup = new AdGroup();
  $adGroup->campaignId = $campaign->id;
  $adGroup->name = 'Ad Group #' . uniqid();

  // Create operation.
  $operation = new AdGroupOperation();
  $operation->operand = $adGroup;
  $operation->operator = 'ADD';

  // Make the mutate request.
  $result = $adGroupService->mutate(array($operation));

  // Display result.
  $adGroup = $result->value[0];
  printf("Ad group with name '%s' and ID '%s' was added.\n", $adGroup->name,
        $adGroup->id);

  // Create product ad.
  $productAd = new ProductAd();

  // Create ad group ad.
  $adGroupAd = new AdGroupAd();
  $adGroupAd->adGroupId = $adGroup->id;
  $adGroupAd->ad = $productAd;

  // Create operation.
  $operation = new AdGroupAdOperation();
  $operation->operand = $adGroupAd;
  $operation->operator = 'ADD';

  // Make the mutate request.
  $result = $adGroupAdService->mutate(array($operation));

  // Display result.
  $adGroupAd = $result->value[0];
  printf("Product ad with ID '%s' was added.\n", $adGroupAd->ad->id);
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
  addShoppingCampaignExample($user, $budgetId, $merchantId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
