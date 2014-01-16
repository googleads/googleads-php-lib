<?php
/**
 * This code example illustrates how to add ad group level mobile bid modifier
 * override for a campaign.
 *
 * Tags: AdGroupBidModifierService.mutate
 *
 * Copyright 2013, Google Inc. All Rights Reserved.
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
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Paul Matthews
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
$adGroupId = 'INSERT_ADGROUP_ID_HERE';
$bidModifier = 1.5;

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $adGroupId the ID of the ad group to add the bid modifier to
 * @param int $bidModifier the bid modifier multiplier
 */
function AddAdGroupBidModifierExample(AdWordsUser $user, $adGroupId,
    $bidModifier) {
  // Get the AdGroupBidModifierService, which loads the r©equired classes.
  $bidModifierService = $user->GetService('AdGroupBidModifierService',
      ADWORDS_VERSION);

  // Mobile criterion ID.
  $criterionId = 30001;

  // Prepare to add an ad group level override.
  $agBidModifier = new AdGroupBidModifier();
  $agBidModifier->adGroupId = $adGroupId;
  $agBidModifier->criterion = new Platform();
  $agBidModifier->criterion->id = $criterionId;
  $agBidModifier->bidModifier = $bidModifier;

  $operation = new AdGroupBidModifierOperation();

  // Use 'ADD' to add a new modifier and 'SET' to update an existing one. A
  // modifier can be removed with the 'REMOVE' operator.
  $operation->operator = 'ADD';
  $operation->operand = $agBidModifier;

  $response = $bidModifierService->mutate(array($operation));

  foreach ($response->value as $modifier) {
    $value = 'none';
    if (!empty($modifier->bidModifier)) {
      $value = $modifier->bidModifier;
    }
    printf(
      'AdGroup ID %d, Criterion ID %d was updated with ' .
          "ad group level modifier: %s\n",
      $modifier->adGroupId,
      $modifier->criterion->id,
      $value
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
  AddAdGroupBidModifierExample($user, $adGroupId, $bidModifier);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
