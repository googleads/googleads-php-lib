<?php
/**
 * This example illustrates how to retrieve ad group level bid modifiers for a
 * campaign.
 *
 * Tags: AdGroupBidModifierService.get
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

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 */
function GetAdGroupBidModifiersExample(AdWordsUser $user) {
  // Get the service, which loads the required classes.
  $bidModifierService = $user->GetService('AdGroupBidModifierService',
      ADWORDS_VERSION);

  // Create selector.
  $selector = new Selector();
  $selector->fields = array('CampaignId', 'AdGroupId', 'BidModifier', 'Id');
  $selector->ordering[] = new OrderBy('CampaignId', 'ASCENDING');

  // Create paging controls.
  $selector->paging = new Paging(0, AdWordsConstants::RECOMMENDED_PAGE_SIZE);

  do {
    // Make the get request.
    $page = $bidModifierService->get($selector);

    // Display results.
    if (isset($page->entries)) {
      foreach ($page->entries as $modifier) {
        $value = 'none';
        if (!empty($modifier->bidModifier)) {
          $value = $modifier->bidModifier;
        }
        printf("Campaign ID %d, AdGroup ID %d, Criterion ID %d has ad group " .
            "level modifier: %s\n",
          $modifier->campaignId,
          $modifier->adGroupId,
          $modifier->criterion->id,
          $value
        );
      }
    } else {
      print "No bid modifiers were found.\n";
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
  GetAdGroupBidModifiersExample($user);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
