<?php
/**
 * This example gets various statistics for campaigns that received at least one
 * impression during the last week. To get campaigns, run GetCampaigns.php.
 *
 * Tags: CampaignService.get
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

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $campaignId the ID of the campaign to get stats for
 */
function GetCampaignStatsExample(AdWordsUser $user) {
  // Get the service, which loads the required classes.
  $campaignService = $user->GetService('CampaignService', ADWORDS_VERSION);

  // Create selector.
  $selector = new Selector();
  $selector->fields =
      array('Id', 'Name', 'Impressions', 'Clicks', 'Cost', 'Ctr');
  $selector->predicates[] =
      new Predicate('Impressions', 'GREATER_THAN', array(0));

  // Set date range to request stats for.
  $dateRange = new DateRange();
  $dateRange->min = date('Ymd', strtotime('-1 week'));
  $dateRange->max = date('Ymd', strtotime('-1 day'));
  $selector->dateRange = $dateRange;

  // Create paging controls.
  $selector->paging = new Paging(0, AdWordsConstants::RECOMMENDED_PAGE_SIZE);

  do {
    // Make the get request.
    $page = $campaignService->get($selector);

    // Display results.
    if (isset($page->entries)) {
      foreach ($page->entries as $campaign) {
        printf("Campaign with name '%s' and id '%s' had the following stats "
            . "during the last week:\n", $campaign->name, $campaign->id);
        printf("  Impressions: %d\n", $campaign->campaignStats->impressions);
        printf("  Clicks: %d\n", $campaign->campaignStats->clicks);
        printf("  Cost: $%.2f\n", $campaign->campaignStats->cost->microAmount
            / AdWordsConstants::MICROS_PER_DOLLAR);
        printf("  CTR: %.2f%%\n", $campaign->campaignStats->ctr * 100);
      }
    } else {
      print "No matching campaigns were found.\n";
    }

    // Advance the paging index.
    $selector->paging->startIndex += AdWordsConstants::RECOMMENDED_PAGE_SIZE;
  } while ($page->totalNumEntries > $selector->paging->startIndex);
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
  GetCampaignStatsExample($user);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
