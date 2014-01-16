<?php
/**
 * This example gets all third party redirect ads in an ad group. To add
 * third party redirect ads, run AddThirdPartyRedirectAd.php. To get ad groups,
 * run GetAdGroups.php
 *
 * Tags: AdGroupAdService.get
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
 * @param string $adGroupId the id of the parent ad group
 */
function GetThirdPartyRedirectAdsExample(AdWordsUser $user, $adGroupId) {
  // Get the service, which loads the required classes.
  $adGroupAdService = $user->GetService('AdGroupAdService', ADWORDS_VERSION);

  // Create selector.
  $selector = new Selector();
  $selector->fields = array('RichMediaAdName', 'Id');
  $selector->ordering[] = new OrderBy('Id', 'ASCENDING');

  // Create predicates.
  $selector->predicates[] = new Predicate('AdGroupId', 'IN', array($adGroupId));
  $selector->predicates[] =
      new Predicate('AdType', 'IN', array('THIRD_PARTY_REDIRECT_AD'));
  // By default disabled ads aren't returned by the selector. To return them
  // include the DISABLED status in a predicate.
  $selector->predicates[] =
      new Predicate('Status', 'IN', array('ENABLED', 'PAUSED', 'DISABLED'));

  // Create paging controls.
  $selector->paging = new Paging(0, AdWordsConstants::RECOMMENDED_PAGE_SIZE);

  do {
    // Make the get request.
    $page = $adGroupAdService->get($selector);

    // Display results.
    if (isset($page->entries)) {
      foreach ($page->entries as $adGroupAd) {
        printf("Third party redirect ad with name '%s' and ID '%s' was "
            . "found.\n", $adGroupAd->ad->name, $adGroupAd->ad->id);
      }
    } else {
      print "No third party redirect ads were found.\n";
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
  GetThirdPartyRedirectAdsExample($user, $adGroupId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
