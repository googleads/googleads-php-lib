<?php
/**
 * This example adds an expanded text ad to an ad group that uses upgraded URLs.
 *
 * To get ad groups, run GetAdGroups.php.
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

require_once UTIL_PATH . '/MediaUtils.php';

// Enter parameters required by the code example.
$adGroupId = 'INSERT_AD_GROUP_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $adGroupId the id of the ad group to add the ads to
 */
function AddExpandedTextAdWithUpgradedUrlsExample(AdWordsUser $user,
    $adGroupId) {
  // Get the service, which loads the required classes.
  $adGroupAdService = $user->GetService('AdGroupAdService', ADWORDS_VERSION);

  $operations = array();

  // Create expanded text ad with a tracking template and custom parameters.
  $expandedTextAd = new ExpandedTextAd();
  $expandedTextAd->headlinePart1 = 'Luxury Cruise to Mars';
  $expandedTextAd->headlinePart2 = 'Visit the Red Planet in style.';
  $expandedTextAd->description = 'Low-gravity fun for everyone!';

  // Specify a tracking url for 3rd party tracking provider. You may
  // specify one at customer, campaign, ad group, ad, criterion or
  // feed item levels.
  $expandedTextAd->trackingUrlTemplate =
      'http://tracker.example.com/?season={_season}&promocode={_promocode}' .
      '&u={lpurl}';

  // Since your tracking url has two custom parameters, provide their
  // values too. This can be provided at campaign, ad group, ad, criterion
  // or feed item levels.
  $seasonParameter = new CustomParameter();
  $seasonParameter->key = 'season';
  $seasonParameter->value = 'christmas';

  $promoCodeParameter = new CustomParameter();
  $promoCodeParameter->key = 'promocode';
  $promoCodeParameter->value = 'NYC123';

  $expandedTextAd->urlCustomParameters = new CustomParameters();
  $expandedTextAd->urlCustomParameters->parameters = array($seasonParameter,
      $promoCodeParameter);

  // Specify a list of final urls. This field cannot be set if url field is
  // set. This may be specified at ad, criterion and feed item levels.
  $expandedTextAd->finalUrls = array('http://www.example.com/cruise/space/',
      'http://www.example.com/locations/mars/');

  // Specify a list of final mobile urls. This field cannot be set if url
  // field is set, or finalUrls is unset. This may be specified at ad,
  // criterion and feed item levels.
  $expandedTextAd->finalMobileUrls = array(
      'http://mobile.example.com/cruise/space/',
      'http://mobile.example.com/locations/mars/'
  );

  // Create ad group ad.
  $adGroupAd = new AdGroupAd();
  $adGroupAd->adGroupId = $adGroupId;
  $adGroupAd->ad = $expandedTextAd;

  // Set additional settings (optional).
  $adGroupAd->status = 'PAUSED';

  // Create operation.
  $operation = new AdGroupAdOperation();
  $operation->operand = $adGroupAd;
  $operation->operator = 'ADD';
  $operations[] = $operation;

  // Make the mutate request.
  $result = $adGroupAdService->mutate($operations);

  // Display results.
  foreach ($result->value as $adGroupAd) {
    $ad = $adGroupAd->ad;
    printf("Ad with ID %d was added.\n", $ad->id);
    print("Upgraded URL properties:\n");
    printf("  Final URLs: %s\n", implode(', ', $ad->finalUrls));
    printf("  Final Mobile URLs: %s\n", implode(', ', $ad->finalMobileUrls));
    printf("  Tracking URL template: %s\n", $ad->trackingUrlTemplate);
    printf("  Custom parameters: %s\n",
        implode(', ',
            array_map(function($param) {
              return sprintf('%s=%s', $param->key, $param->value);
            },
            $ad->urlCustomParameters->parameters)));
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
  AddExpandedTextAdWithUpgradedUrlsExample($user, $adGroupId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
