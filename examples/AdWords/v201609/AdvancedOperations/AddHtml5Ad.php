<?php
/**
 * This example adds an HTML5 ad to given ad group. To get ad groups, run
 * GetAdGroups.php.
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

// Include the initialization file.
require_once dirname(dirname(__FILE__)) . '/init.php';
require_once UTIL_PATH . '/MediaUtils.php';

// Enter parameters required by the code example.
$adGroupId = 'INSERT_AD_GROUP_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $adGroupId the ID of the ad group to add the ad to
 */
function AddHtml5Ad(AdWordsUser $user, $adGroupId) {
  // Get the AdGroupAdService, which loads the required classes.
  $adGroupAdService = $user->GetService('AdGroupAdService', ADWORDS_VERSION);

  // Create the template ad.
  $html5Ad = new TemplateAd();

  $html5Ad->name = 'Ad for HTML5';
  $html5Ad->templateId = 419;
  $html5Ad->finalUrls = array('http://example.com/html5');
  $html5Ad->displayUrl = 'example.com/html5';

  $dimensions = new Dimensions();
  $dimensions->width = 300;
  $dimensions->height = 250;
  $html5Ad->dimensions = $dimensions;

  // The HTML5 zip file contains all the HTML, CSS, and images needed for the
  // HTML5 ad. For help on creating an HTML5 zip file, check out Google Web
  // Designer (https://www.google.com/webdesigner/).
  $html5Zip = MediaUtils::GetBase64Data('https://goo.gl/9Y7qI2');

  // Create a media bundle containing the zip file with all the HTML5
  // components.
  // NOTE: You may also upload an HTML5 zip using MediaService.upload()
  // and simply set the mediaId field below. See UploadMediaBundle.php for an
  // example.
  $mediaBundle = new MediaBundle();
  $mediaBundle->data = $html5Zip;
  $mediaBundle->entryPoint = 'carousel/index.html';
  $mediaBundle->type = 'MEDIA_BUNDLE';

  // Create the template elements for the ad. You can refer to
  // https://developers.google.com/adwords/api/docs/appendix/templateads
  // for the list of avaliable template fields.
  $media = new TemplateElementField();
  $media->name = 'Custom_layout';
  $media->fieldMedia = $mediaBundle;
  $media->type = 'MEDIA_BUNDLE';

  $layout = new TemplateElementField();
  $layout->name = 'layout';
  $layout->fieldText = 'Custom';
  $layout->type = 'ENUM';

  $adData = new TemplateElement();
  $adData->uniqueName = 'adData';
  $adData->fields = array($media, $layout);

  $html5Ad->templateElements = array($adData);

  // Create the ad group ad.
  $html5AdGroupAd = new AdGroupAd();
  $html5AdGroupAd->adGroupId = $adGroupId;
  $html5AdGroupAd->ad = $html5Ad;

  // Optional: Set the status.
  $html5AdGroupAd->status = 'PAUSED';

  // Create the operation.
  $operation = new AdGroupAdOperation();
  $operation->operator = 'ADD';
  $operation->operand = $html5AdGroupAd;

  $operations = array($operation);

  // Create the ads.
  $result = $adGroupAdService->mutate($operations);

  foreach ($result->value as $adGroupAd) {
    printf("New HTML5 ad with ID %d and display URL '%s' was created.\n",
        $adGroupAd->ad->id, $adGroupAd->ad->displayUrl);
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
  AddHtml5Ad($user, $adGroupId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
