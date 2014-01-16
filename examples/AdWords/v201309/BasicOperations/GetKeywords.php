<?php
/**
 * This example gets all keywords in an ad group. To add keywords, run
 * AddKeywords.php. To get ad groups, run GetAdGroups.php.
 *
 * Tags: AdGroupCriterionService.get
 * Restriction: adwords-only
 *
 * Copyright 2011, Google Inc. All Rights Reserved.
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
 * @subpackage v201309
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
$adGroupId = 'INSERT_AD_GROUP_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $adGroupId the id of the parent ad group
 */
function GetKeywordsExample(AdWordsUser $user, $adGroupId) {
  // Get the service, which loads the required classes.
  $adGroupCriterionService =
      $user->GetService('AdGroupCriterionService', ADWORDS_VERSION);

  // Create selector.
  $selector = new Selector();
  $selector->fields = array('KeywordText', 'KeywordMatchType', 'Id');
  $selector->ordering[] = new OrderBy('KeywordText', 'ASCENDING');

  // Create predicates.
  $selector->predicates[] = new Predicate('AdGroupId', 'IN', array($adGroupId));
  $selector->predicates[] =
      new Predicate('CriteriaType', 'IN', array('KEYWORD'));

  // Create paging controls.
  $selector->paging = new Paging(0, AdWordsConstants::RECOMMENDED_PAGE_SIZE);

  do {
    // Make the get request.
    $page = $adGroupCriterionService->get($selector);

    // Display results.
    if (isset($page->entries)) {
      foreach ($page->entries as $adGroupCriterion) {
      printf("Keyword with text '%s', match type '%s', and ID '%s' was "
          . "found.\n", $adGroupCriterion->criterion->text,
          $adGroupCriterion->criterion->matchType,
          $adGroupCriterion->criterion->id);
      }
    } else {
      print "No keywords were found.\n";
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
  GetKeywordsExample($user, $adGroupId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
