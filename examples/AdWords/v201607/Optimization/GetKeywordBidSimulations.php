<?php
/**
 * This example gets all available keyword bid simulations within an ad group.
 * To get ad groups, run BasicOperation/GetAdGroups.php.
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
 * @copyright  2015, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
$adGroupId = 'INSERT_ADGROUP_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $adGroupId the id the ad group containing keyword bid
 *     simulations
 */
function GetKeywordBidSimulationsExample(AdWordsUser $user, $adGroupId) {
  // Get the service, which loads the required classes.
  $dataService = $user->GetService('DataService', ADWORDS_VERSION);

  // Create selector.
  $selector = new Selector();
  $selector->fields = array('AdGroupId', 'CriterionId', 'StartDate', 'EndDate',
      'Bid', 'LocalClicks', 'LocalCost', 'LocalImpressions');

  // Create predicates.
  $selector->predicates[] = new Predicate('AdGroupId', 'IN', array($adGroupId));

  // Create paging controls.
  $selector->paging = new Paging(0, AdWordsConstants::RECOMMENDED_PAGE_SIZE);

  do{
    // Make the getCriterionBidLandscape request.
    $page = $dataService->getCriterionBidLandscape($selector);

    // Display results.
    if (isset($page->entries)) {
      foreach ($page->entries as $bidLandscape) {
        printf("Found criterion bid landscape for keyword with id '%s', start "
            . "date '%s', end date '%s', and landscape points:\n",
            $bidLandscape->criterionId, $bidLandscape->startDate,
            $bidLandscape->endDate);
        foreach ($bidLandscape->landscapePoints as $bidLandscapePoint) {
          printf("  bid: %.0f => clicks: %d, cost: %.0f, impressions: %d\n",
              $bidLandscapePoint->bid->microAmount,
              $bidLandscapePoint->clicks,
              $bidLandscapePoint->cost->microAmount,
              $bidLandscapePoint->impressions
          );
        }
        print "\n";
      }
    } else if ($selector->paging->startIndex === 0) {
      printf("No criterion bid landscapes were found.\n");
    }
    // Advance the paging index.
    $selector->paging->startIndex += AdWordsConstants::RECOMMENDED_PAGE_SIZE;
  } while (isset($page->entries) && count($page->entries) > 0);
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
  GetKeywordBidSimulationsExample($user, $adGroupId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
