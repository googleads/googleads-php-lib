<?php
/**
 * This example adds various types of targeting criteria to a campaign. To get
 * campaigns, run BasicOperations/GetCampaigns.php.
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

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
$campaignId = 'INSERT_CAMPAIGN_ID_HERE';
// Replace the value below with the ID of a feed that has been configured for
// location targeting, meaning it has an ENABLED FeedMapping with criterionType
// of 77. Feeds linked to a GMB account automatically have this FeedMapping.
// If you don't have such a feed, set this value to null.
$locationFeedId = 'INSERT_LOCATION_FEED_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $campaignId the id of the campaign to add targeting criteria to
 * @param string $locationFeedId the id of a feed configured for location
 *     targeting
 */
function AddCampaignTargetingCriteriaExample(AdWordsUser $user, $campaignId,
      $locationFeedId) {
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

  // Location Groups criteria. These represent targeting by household income
  // or places of interest. The IDs can be found in the documentation or
  // retrieved with the LocationCriterionService.

  // Tiers are numbered 1-10, and represent 10% segments of earners.
  // For example, TIER_1 is the top 10%, TIER_2 is the 80-90%, etc.
  // Tiers 6 through 10 are grouped into TIER_6_TO_10.
  // Other valid options: AIRPORT, UNIVERSITY.
  $tierThree = new IncomeOperand('TIER_3');
  $miami = new GeoTargetOperand(array(1015116)); // Miami, FL
  $firstGroup = new LocationGroups();
  $firstGroup->matchingFunction = new FeedFunction('AND', $tierThree, $miami);
  $campaignCriteria[] = new CampaignCriterion($campaignId, null, $firstGroup);

  if ($locationFeedId !== null) {
    // Distance targeting. Area of 10 miles around targets above.
    $radius = new ConstantOperand();
    $radius->type = 'DOUBLE';
    $radius->unit = 'MILES';
    $radius->doubleValue = 10.0;
    $distance = new LocationExtensionOperand($radius);
    $secondGroup = new LocationGroups();
    $secondGroup->feedId = intval($locationFeedId);
    $secondGroup->matchingFunction = new FeedFunction('IDENTITY', $distance);
    $campaignCriteria[] =
        new CampaignCriterion($campaignId, null, $secondGroup);
  }

  // Create operations.
  $operations = array();
  foreach ($campaignCriteria as $campaignCriterion) {
    $operations[] = new CampaignCriterionOperation($campaignCriterion, 'ADD');
  }

  // Add a negative campaign criterion.
  $negativeKeyword = new Keyword();
  $negativeKeyword->text = 'jupiter cruise';
  $negativeKeyword->matchType = 'BROAD';
  $negativeCriterion = new NegativeCampaignCriterion();
  $negativeCriterion->campaignId = $campaignId;
  $negativeCriterion->criterion = $negativeKeyword;

  $operations[] = new CampaignCriterionOperation($negativeCriterion, 'ADD');

  // Make the mutate request.
  $result = $campaignCriterionService->mutate($operations);

  // Display results.
  foreach ($result->value as $campaignCriterion) {
    printf("Campaign targeting criterion with ID '%s' and type '%s' was "
        . "added.\n", $campaignCriterion->criterion->id,
        $campaignCriterion->criterion->CriterionType);
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
  AddCampaignTargetingCriteriaExample($user, $campaignId, $locationFeedId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
