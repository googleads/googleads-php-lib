<?php
/**
 * This example adds third party redirect ads to an ad group. To get ad groups,
 * run GetAdGroups.php.
 *
 * Tags: AdGroupAdService.mutate
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
 * @param string $adGroupId the ID of the ad group to add the ads to
 */
function AddThirdPartyRedirectAdsExample(AdWordsUser $user, $adGroupId) {
  // Get the service, which loads the required classes.
  $adGroupAdService = $user->GetService('AdGroupAdService', ADWORDS_VERSION);

  $numAds = 5;

  $thirdPartyRedirectAd = new ThirdPartyRedirectAd();
  $thirdPartyRedirectAd->name = 'Example third party ad #' . uniqid();
  $thirdPartyRedirectAd->url = 'http://www.example.com';

  $thirdPartyRedirectAd->dimensions = new Dimensions(300, 250);
  // This field normally contains the javascript ad tag.
  $thirdPartyRedirectAd->snippet = '<img src="http://goo.gl/HJM3L"/>';

  // DoubleClick Rich Media Expandable format ID.
  $thirdPartyRedirectAd->certifiedVendorFormatId = 232;
  $thirdPartyRedirectAd->isCookieTargeted = false;
  $thirdPartyRedirectAd->isUserInterestTargeted = false;
  $thirdPartyRedirectAd->isTagged = false;

  // Expandable Ad properties.
  $thirdPartyRedirectAd->expandingDirections =
      array('EXPANDING_UP', 'EXPANDING_DOWN');
  $thirdPartyRedirectAd->adAttributes = array('ROLL_OVER_TO_EXPAND');

  // Create ad group ad.
  $thirdPartyAdGroup = new AdGroupAd();
  $thirdPartyAdGroup->adGroupId = $adGroupId;
  $thirdPartyAdGroup->ad = $thirdPartyRedirectAd;

  // Set additional settings (optional).
  $thirdPartyAdGroup->status = 'PAUSED';

  // Create operation.
  $thirdPartyOperation = new AdGroupAdOperation();
  $thirdPartyOperation->operand = $thirdPartyAdGroup;
  $thirdPartyOperation->operator = 'ADD';

  // Create in stream third party redirect ad.
  $inStreamRedirectAd = new ThirdPartyRedirectAd();
  $inStreamRedirectAd->name = 'Example third party ad #' . uniqid();
  $inStreamRedirectAd->url = 'http://www.example.com';

  // Duration = 15 seconds
  $inStreamRedirectAd->adDuration = 15000;
  $inStreamRedirectAd->sourceUrl = 'http://ad.doubleclick.net/pfadx/' .
      'N270.126913.6102203221521/B3876671.21;dcadv=2215309;sz=0x0;' .
      'ord=%5btimestamp%5d;dcmt=text/xml';

  // VAST (video) Unit.
  $inStreamRedirectAd->certifiedVendorFormatId = 303;

  $inStreamRedirectAd->richMediaAdType = 'IN_STREAM_VIDEO';

  // Create ad group ad.
  $inStreamAdGroup = new AdGroupAd();
  $inStreamAdGroup->adGroupId = $adGroupId;
  $inStreamAdGroup->ad = $inStreamRedirectAd;

  // Set additional settings (optional).
  $inStreamAdGroup->status = 'PAUSED';

  // Create operation.
  $inStreamOperation = new AdGroupAdOperation();
  $inStreamOperation->operand = $inStreamAdGroup;
  $inStreamOperation->operator = 'ADD';

  $operations = array(
    $thirdPartyOperation,
    $inStreamOperation,
  );

  // Make the mutate request.
  $result = $adGroupAdService->mutate($operations);

  // Display results.
  foreach ($result->value as $adGroupAd) {
    printf("Third party redirect ad with name '%s' and ID '%s' was added.\n",
        $adGroupAd->ad->name, $adGroupAd->ad->id);
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
  AddThirdPartyRedirectAdsExample($user, $adGroupId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
