<?php
/**
 * This example gets all campaigns with a specific label. To add a label to
 * campaigns, run AddCampaignLabels.php.
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

$labelId = 'INSERT_LABEL_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $labelId the label id to run the example with
 */
function GetCampaignsByLabelExample(AdWordsUser $user, $labelId) {
  // Get the service, which loads the required classes.
  $campaignService = $user->GetService('CampaignService', ADWORDS_VERSION);

  // Create selector.
  $selector = new Selector();
  $selector->fields = array('Id', 'Name', 'Labels');
  // Labels filtering is performed by ID. You can use containsAny to select
  // campaigns with any of the label IDs, containsAll to select campaigns with
  // all of the label IDs, or containsNone to select campaigns with none of the
  // label IDs.
  $selector->predicates[] = new Predicate('Labels', 'CONTAINS_ANY',
      array($labelId));
  $selector->ordering[] = new OrderBy('Name', 'ASCENDING');

  // Create paging controls.
  $selector->paging = new Paging(0, AdWordsConstants::RECOMMENDED_PAGE_SIZE);

  do {
    // Make the get request.
    $page = $campaignService->get($selector);

    // Display results.
    if (isset($page->entries)) {
      foreach ($page->entries as $campaign) {
        printf("Campaign with name '%s' and ID '%d' and labels '%s'" .
            " was found.\n", $campaign->name, $campaign->id,
            implode(', ',
                array_map(function($label) {
                  return sprintf('%d/%s', $label->id, $label->name);
                }, $campaign->labels)));
      }
    } else {
      print "No campaigns were found.\n";
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
  GetCampaignsByLabelExample($user, $labelId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
