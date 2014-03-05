<?php
/**
 * This example adds placements to an ad group. To get ad groups run
 * GetAdGroups.php.
 *
 * Tags: AdGroupCriterionService.mutate
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

// Enter parameters required by the code example.
$adGroupId = 'INSERT_AD_GROUP_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $adGroupId the ID of the ad group to add the placements to
 */
function AddPlacementsExample(AdWordsUser $user, $adGroupId) {
  // Get the service, which loads the required classes.
  $adGroupCriterionService =
      $user->GetService('AdGroupCriterionService', ADWORDS_VERSION);

  $numPlacements = 5;
  $operations = array();
  for ($i = 0; $i < $numPlacements; $i++) {
    // Create placement criterion.
    $placement = new Placement();
    $placement->url = 'mars.google.com/' . uniqid();

    // Create biddable ad group criterion.
    $adGroupCriterion = new BiddableAdGroupCriterion();
    $adGroupCriterion->adGroupId = $adGroupId;
    $adGroupCriterion->criterion = $placement;

    // Set additional settings (optional).
    $adGroupCriterion->userStatus = 'PAUSED';
    $adGroupCriterion->destinationUrl = 'http://www.example.com/mars';

    // Set bids (optional).
    $bid = new CpmBid();
    $bid->bid =  new Money(500000);
    $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
    $biddingStrategyConfiguration->bids[] = $bid;
    $adGroupCriterion->biddingStrategyConfiguration =
        $biddingStrategyConfiguration;

    $adGroupCriteria[] = $adGroupCriterion;

    // Create operation.
    $operation = new AdGroupCriterionOperation();
    $operation->operand = $adGroupCriterion;
    $operation->operator = 'ADD';
    $operations[] = $operation;
  }

  // Make the mutate request.
  $result = $adGroupCriterionService->mutate($operations);

  // Display results.
  foreach ($result->value as $adGroupCriterion) {
    printf("Placement with URL '%s' and ID '%s' was added.\n",
        $adGroupCriterion->criterion->url,
        $adGroupCriterion->criterion->id);
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
  AddPlacementsExample($user, $adGroupId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
