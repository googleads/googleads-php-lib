<?php
/**
 * This example gets all available campaign mobile bid modifier landscapes
 * for a given campaign.
 * To get campaigns, run BasicOperations/GetCampaigns.php.
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

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $campaignId the id of campaign to run criterion bid modifier
 *     simulations
 */
function GetCampaignCriterionBidModifierSimulationsExample(AdWordsUser $user,
    $campaignId) {
  // Get the service, which loads the required classes.
  $dataService = $user->GetService('DataService', ADWORDS_VERSION);

  // Create selector.
  $selector = new Selector();
  $selector->fields = array(
      'BidModifier',
      'CampaignId',
      'CriterionId',
      'StartDate',
      'EndDate',
      'LocalClicks',
      'LocalCost',
      'LocalImpressions',
      'TotalLocalClicks',
      'TotalLocalCost',
      'TotalLocalImpressions',
      'RequiredBudget'
  );

  // Create predicates.
  $selector->predicates[] =
      new Predicate('CampaignId', 'IN', array($campaignId));

  // Create paging controls.
  $selector->paging = new Paging(0, AdWordsConstants::RECOMMENDED_PAGE_SIZE);

  do {
    // Make the getCampaignCriterionBidLandscape request.
    $page = $dataService->getCampaignCriterionBidLandscape($selector);

    // Display results.
    if (isset($page->entries)) {
      foreach ($page->entries as $bidModifierLandscape) {
        printf(
            "Found campaign-level criterion bid modifier landscapes for"
                . " criterion with ID %d, start date '%s', end date '%s', and"
                . " landscape points:\n",
            $bidModifierLandscape->criterionId,
            $bidModifierLandscape->startDate,
            $bidModifierLandscape->endDate
        );
        foreach ($bidModifierLandscape->landscapePoints as $landscapePoint) {
          printf(
              "  bid modifier: %.2f => clicks: %d, cost: %.0f, "
                  . "impressions: %d, total clicks: %d, total cost: %.0f, "
                  . "total impressions: %d, and required budget: %.0f\n",
              $landscapePoint->bidModifier,
              $landscapePoint->clicks,
              $landscapePoint->cost->microAmount,
              $landscapePoint->impressions,
              $landscapePoint->totalLocalClicks,
              $landscapePoint->totalLocalCost->microAmount,
              $landscapePoint->totalLocalImpressions,
              $landscapePoint->requiredBudget->microAmount
          );
        }
        print "\n";
      }
    } else if ($selector->paging->startIndex === 0) {
      printf("No campaign criterion bid modifier landscapes were found.\n");
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
  GetCampaignCriterionBidModifierSimulationsExample($user, $campaignId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
