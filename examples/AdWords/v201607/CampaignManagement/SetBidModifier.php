<?php
/**
 * This example sets a Bid Modifier on a Campaign.
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
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file.
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
$campaignId = 'INSERT_CAMPAIGN_ID_HERE';
$bidModifier = 1.5;

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $campaignId the id of the campaign to modify
 * @param float $bidModifier the multiplier to set on the campaign
 */
function SetBidModifierExample(AdWordsUser $user, $campaignId, $bidModifier) {
  // Get the CampaignCriterionService, also loads classes
  $campaignCriterionService =
      $user->GetService('CampaignCriterionService', ADWORDS_VERSION);

  // Create Mobile Platform. The ID can be found in the documentation.
  // https://developers.google.com/adwords/api/docs/appendix/platforms
  $mobile = new Platform();
  $mobile->id = 30001; // HighEndMobile = 30001

  // Create criterion with modified bid.
  $criterion = new CampaignCriterion();
  $criterion->campaignId = $campaignId;
  $criterion->criterion = $mobile;
  $criterion->bidModifier = $bidModifier;

  // Create SET operation.
  $operation = new CampaignCriterionOperation();
  $operation->operator = 'SET';
  $operation->operand = $criterion;

  // Update campaign criteria.
  $results = $campaignCriterionService->mutate(array($operation));

  // Display campaign criteria.
  if (count($results->value)) {
    foreach ($results->value as $campaignCriterion) {
      printf(
          "Campaign criterion with campaign ID '%s', criterion ID '%s', "
          . "and type '%s' was modified with bid %.2f.\n",
          $campaignCriterion->campaignId,
          $campaignCriterion->criterion->id,
          $campaignCriterion->criterion->type,
          $campaignCriterion->bidModifier);
    }

    return true;
  }
  print 'No campaign criterias were modified.';
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
  SetBidModifierExample($user, $campaignId, $bidModifier);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
