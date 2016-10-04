<?php
/**
 * This code snippet is meant to be used in the Campaign Drafts and Experiments
 * guide to demonstrate how to fetch ad groups for a specific draft.
 *
 * https://developers.google.com/adwords/api/docs/guides/campaign-drafts-experiments
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

// Enter parameters required by the code example.
$draftCampaignId = 'INSERT_DRAFT_CAMPAIGN_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param int $draftCampaignId the ID of the draft used to get ad groups
 */
function GetAdGroupsForDraftExample(AdWordsUser $user, $draftCampaignId) {
  // Get the AdGroupService.
  $adGroupService = $user->GetService('AdGroupService', ADWORDS_VERSION);

  // Create selector.
  $selector = new Selector();
  $selector->fields = array('Id');

  // Create predicates.
  $selector->predicates[] =
      new Predicate('CampaignId', 'EQUALS', $draftCampaignId);

  // Create paging controls.
  $selector->paging = new Paging(0, AdWordsConstants::RECOMMENDED_PAGE_SIZE);

  // Make the get request.
  $page = $adGroupService->get($selector);

  // Display results.
  if ($page->totalNumEntries !== null && $page->totalNumEntries > 0) {
    printf("Found %d ad groups.\n", $page->totalNumEntries);
  } else {
    print "No ad groups were found.\n";
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
  GetAdGroupsForDraftExample($user, $draftCampaignId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
