<?php
/**
 * This example adds an image representing the ad using the MediaService and
 * then adds a responsive display ad to an ad group.
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
 * @subpackage v201607
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
 * @param string $adGroupId the ID of the ad group to add the ads to
 */
function AddResponsiveDisplayAd(AdWordsUser $user, $adGroupId) {
  // Get the service, which loads the required classes.
  $mediaService = $user->GetService('MediaService', ADWORDS_VERSION);

  // Creates image.
  $image = new Image();
  $image->data = MediaUtils::GetBase64Data('https://goo.gl/3b9Wfh');
  $image->type = 'IMAGE';

  // Make the upload request.
  $result = $mediaService->upload(array($image));
  $image = $result[0];

  // Get the service, which loads the required classes.
  $adGroupAdService = $user->GetService('AdGroupAdService', ADWORDS_VERSION);

  // Create a responsive display ad.
  $responsiveDisplayAd = new ResponsiveDisplayAd();

  // This ad format does not allow the creation of an image using the
  // Image.data field. An image must first be created using the MediaService,
  // and Image.mediaId must be populated when creating the ad.
  $marketingImage = new Image();
  $marketingImage->mediaId = $image->mediaId;

  $responsiveDisplayAd->marketingImage = $marketingImage;
  $responsiveDisplayAd->shortHeadline = 'Travel';
  $responsiveDisplayAd->longHeadline = 'Travel the World';
  $responsiveDisplayAd->description = 'Take to the air!';
  $responsiveDisplayAd->businessName = 'Google';
  $responsiveDisplayAd->finalUrls = array('http://www.example.com');

  // Create ad group ad.
  $adGroupAd = new AdGroupAd();
  $adGroupAd->adGroupId = $adGroupId;
  $adGroupAd->ad = $responsiveDisplayAd;

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
    printf("Responsive display ad with ID '%d' and short headline '%s'"
        . " was added.\n", $adGroupAd->ad->id, $adGroupAd->ad->shortHeadline);
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
  AddResponsiveDisplayAd($user, $adGroupId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
