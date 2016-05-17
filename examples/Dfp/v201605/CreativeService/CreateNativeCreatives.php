<?php
/**
 * This example creates a new native creative. To determine which creatives
 * exist, run GetAllCreatives.php.
 *
 * PHP version 5
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
 * @package    GoogleApiAdsDfp
 * @subpackage v201605
 * @category   WebServices
 * @copyright  2015, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
error_reporting(E_STRICT | E_ALL);

// You can set the include path to src directory or reference
// DfpUser.php directly via require_once.
// $path = '/path/to/dfp_api_php_lib/src';
$path = dirname(__FILE__) . '/../../../../src';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

require_once 'Google/Api/Ads/Common/Util/MediaUtils.php';
require_once 'Google/Api/Ads/Dfp/Lib/DfpUser.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

// Set the ID of the advertiser (company) that all creatives will be assigned
// to.
$advertiserId = 'INSERT_ADVERTISER_COMPANY_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the CreativeService.
  $creativeService = $user->GetService('CreativeService', 'v201605');

  // Use the system defined native app install creative template.
  $nativeAppInstallTemplateId = 10004400;

  // Use 1x1 as the size for native creatives.
  $size = new Size();
  $size->width = 1;
  $size->height = 1;
  $size->isAspectRatio = false;

  // Create a native app install creative for the Pie Noon app.
  $nativeAppInstallCreative = new TemplateCreative();
  $nativeAppInstallCreative->name = 'Native creative #' . uniqid();
  $nativeAppInstallCreative->advertiserId = $advertiserId;
  $nativeAppInstallCreative->destinationUrl =
      'https://play.google.com/store/apps/details?id=com.google.fpl.pie_noon';
  $nativeAppInstallCreative->creativeTemplateId = $nativeAppInstallTemplateId;
  $nativeAppInstallCreative->size = $size;

  // Set the headline.
  $headlineVariableValue = new StringCreativeTemplateVariableValue();
  $headlineVariableValue->uniqueName = 'Headline';
  $headlineVariableValue->value = 'Pie Noon';
  $nativeAppInstallCreative->creativeTemplateVariableValues[] =
      $headlineVariableValue;

  // Set the body text.
  $bodyVariableValue = new StringCreativeTemplateVariableValue();
  $bodyVariableValue->uniqueName = 'Body';
  $bodyVariableValue->value = 'Try multi-screen mode!';
  $nativeAppInstallCreative->creativeTemplateVariableValues[] =
      $bodyVariableValue;

  // Set the image asset.
  $imageVariableValue = new AssetCreativeTemplateVariableValue();
  $imageVariableValue->uniqueName = 'Image';
  $imageAsset = new CreativeAsset();
  $imageAsset->fileName = 'image' . uniqid() . '.png';
  $imageAsset->assetByteArray = MediaUtils::GetBase64Data(
      'https://lh4.ggpht.com/GIGNKdGHMEHFDw6TM2bgAUDKPQQRIReKZPqEpMeEhZOPYnTdOQ'
      . 'GaSpGSEZflIFs0iw=h300');
  $imageVariableValue->asset = $imageAsset;
  $nativeAppInstallCreative->creativeTemplateVariableValues[] =
      $imageVariableValue;

  // Set the price.
  $priceVariableValue = new StringCreativeTemplateVariableValue();
  $priceVariableValue->uniqueName = 'Price';
  $priceVariableValue->value = 'Free';
  $nativeAppInstallCreative->creativeTemplateVariableValues[] =
      $priceVariableValue;

  // Set app icon image asset.
  $appIconVariableValue = new AssetCreativeTemplateVariableValue();
  $appIconVariableValue->uniqueName = 'Appicon';
  $appIconAsset = new CreativeAsset();
  $appIconAsset->fileName = 'icon' . uniqid() . '.png';
  $appIconAsset->assetByteArray = MediaUtils::GetBase64Data(
      'https://lh6.ggpht.com/Jzvjne5CLs6fJ1MHF-XeuUfpABzl0YNMlp4RpHnvPRCIj4--eT'
      . 'DwtyouwUDzVVekXw=w300');
  $appIconVariableValue->asset = $appIconAsset;
  $nativeAppInstallCreative->creativeTemplateVariableValues[] =
      $appIconVariableValue;

  // Set the call to action text.
  $callToActionVariableValue = new StringCreativeTemplateVariableValue();
  $callToActionVariableValue->uniqueName = 'Calltoaction';
  $callToActionVariableValue->value = 'Install';
  $nativeAppInstallCreative->creativeTemplateVariableValues[] =
      $callToActionVariableValue;

  // Set the star rating.
  $starRatingVariableValue = new StringCreativeTemplateVariableValue();
  $starRatingVariableValue->uniqueName = 'Starrating';
  $starRatingVariableValue->value = '4';
  $nativeAppInstallCreative->creativeTemplateVariableValues[] =
      $starRatingVariableValue;

  // Set the store type.
  $storeVariableValue = new StringCreativeTemplateVariableValue();
  $storeVariableValue->uniqueName = 'Store';
  $storeVariableValue->value = 'Google Play';
  $nativeAppInstallCreative->creativeTemplateVariableValues[] =
      $storeVariableValue;

  // Set the deep link URL.
  $deepLinkVariableValue = new UrlCreativeTemplateVariableValue();
  $deepLinkVariableValue->uniqueName = 'DeeplinkclickactionURL';
  $deepLinkVariableValue->value = 'market://details?id=com.google.fpl.pie_noon';
  $nativeAppInstallCreative->creativeTemplateVariableValues[] =
      $deepLinkVariableValue;

  // Create the native creative on the server.
  $nativeCreatives =
      $creativeService->createCreatives(array($nativeAppInstallCreative));

  foreach ($nativeCreatives as $nativeCreative) {
    printf(
        "A native creative with ID %d and name '%s' was created and can be "
            . "previewed at: '%s'.\n",
        $nativeCreative->id,
        $nativeCreative->name,
        $nativeCreative->previewUrl
    );
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

