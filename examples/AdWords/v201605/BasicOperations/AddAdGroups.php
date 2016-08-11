<?php
/**
 * This example adds ad groups to a campaign. To get campaigns, run
 * GetCampaigns.php.
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

// Enter parameters required by the code example.
$campaignId = 'INSERT_CAMPAIGN_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $campaignId the ID of the campaign to add the ad group to
 */
function AddAdGroupsExample(AdWordsUser $user, $campaignId) {
  // Get the service, which loads the required classes.
  $adGroupService = $user->GetService('AdGroupService', ADWORDS_VERSION);

  $numAdGroups = 2;
  $operations = array();
  for ($i = 0; $i < $numAdGroups; $i++) {
    // Create ad group.
    $adGroup = new AdGroup();
    $adGroup->campaignId = $campaignId;
    $adGroup->name = 'Earth to Mars Cruise #' . uniqid();

    // Set bids (required).
    $bid = new CpcBid();
    $bid->bid =  new Money(1000000);
    $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
    $biddingStrategyConfiguration->bids[] = $bid;
    $adGroup->biddingStrategyConfiguration = $biddingStrategyConfiguration;

    // Set additional settings (optional).
    $adGroup->status = 'ENABLED';

    // Targeting restriction settings. Depending on the criterionTypeGroup
    // value, most TargetingSettingDetail only affect Display campaigns.
    // However, the USER_INTEREST_AND_LIST value works for RLSA campaigns -
    // Search campaigns targeting using a remarketing list.
    $targetingSetting = new TargetingSetting();
    // Restricting to serve ads that match your ad group placements.
    // This is equivalent to choosing "Target and bid" in the UI.
    $targetingSetting->details[] =
        new TargetingSettingDetail('PLACEMENT', false);
    // Using your ad group verticals only for bidding. This is equivalent
    // to choosing "Bid only" in the UI.
    $targetingSetting->details[] =
        new TargetingSettingDetail('VERTICAL', true);
    $adGroup->settings[] = $targetingSetting;

    // Create operation.
    $operation = new AdGroupOperation();
    $operation->operand = $adGroup;
    $operation->operator = 'ADD';
    $operations[] = $operation;
  }

  // Make the mutate request.
  $result = $adGroupService->mutate($operations);

  // Display result.
  $adGroups = $result->value;
  foreach ($adGroups as $adGroup) {
    printf("Ad group with name '%s' and ID '%s' was added.\n", $adGroup->name,
        $adGroup->id);
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
  AddAdGroupsExample($user, $campaignId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
