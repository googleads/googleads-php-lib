<?php
/**
 * This code example upgrades an ad to use upgraded URLs.
 *
 * Tags: AdGroupAdService.get, AdGroupAdService.mutate
 * Restriction: adwords-only
 *
 * Copyright 2015, Google Inc. All Rights Reserved.
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
 * @subpackage v201409
 * @category   WebServices
 * @copyright  2015, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Danial Klimkin
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
$adGroupId = 'INSERT_AD_GROUP_ID_HERE';
$adId = 'INSERT_AD_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $adGroupId the ID of the ad group of the ad to upgrade
 * @param string $adId the ID of the ad to upgrade
 */
function UpgradeAdUrlExample(AdWordsUser $user, $adGroupId, $adId) {
  // Get the service, which loads the required classes.
  $adGroupAdService = $user->GetService('AdGroupAdService', ADWORDS_VERSION);

  $adGroupAd = NULL;

  // Retrieving the ad first.
  $selector = new Selector();
  $selector->fields = array('Id', 'Url');
  $selector->ordering[] = new OrderBy('Headline', 'ASCENDING');

  // Restrict the fetch to only the selected ad group ID and ad ID.
  $selector->predicates[] =
      new Predicate('AdGroupId', 'EQUALS', array($adGroupId));
  $selector->predicates[] = new Predicate('Id', 'EQUALS', array($adId));

  $page = $adGroupAdService->get($selector);

  if (isset($page->entries)) {
    $adGroupAd = $page->entries[0];
    printf("About to upgrade ad ID %d with URL '%s'.\n",
        $adGroupAd->ad->id, $adGroupAd->ad->url);
  } else {
    print "Ad for upgrade was not found.\n";
    return;
  }

  // Proceed with URL upgrade.
  $upgradeUrl = new AdUrlUpgrade();
  $upgradeUrl->adId = $adGroupAd->ad->id;
  $upgradeUrl->finalUrl = $adGroupAd->ad->url;

  $result = $adGroupAdService->upgradeUrl(array($upgradeUrl));

  // Display results.
  foreach ($result as $adGroupAd) {
    printf("Text ad with ID %d was upgraded to final URLs: '%s'.\n",
        $adGroupAd->id, join(",", $adGroupAd->finalUrls));
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
  UpgradeAdUrlExample($user, $adGroupId, $adId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
