<?php
/**
 * This example creates a custom creative for a given advertiser. This feature
 * is only available to DFP premium solution networks. To determine which
 * companies are advertisers, run GetCompaniesByStatement.php. To
 * determine which creatives already exist, run GetAllCreatives.php.
 *
 * PHP version 5
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
 * @package    GoogleApiAdsDfp
 * @subpackage v201611
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
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
  $creativeService = $user->GetService('CreativeService', 'v201611');

  // Create the local custom creative object.
  $customCreative = new CustomCreative();
  $customCreative->name = 'Custom creative' . uniqid();
  $customCreative->advertiserId = $advertiserId;
  $customCreative->destinationUrl = 'http://google.com';

  // Set the custom creative image asset.
  $customCreativeAsset = new CustomCreativeAsset();
  $customCreativeAsset->macroName = 'IMAGE_ASSET';
  $asset = new CreativeAsset();
  // Filenames must be unique.
  $asset->fileName = sprintf('inline%s.jpg', uniqid());
  $asset->assetByteArray = MediaUtils::GetBase64Data(
      'http://www.google.com/intl/en/adwords/select/images/samples/inline.jpg');
  $customCreativeAsset->asset = $asset;
  $customCreative->customCreativeAssets = array($customCreativeAsset);

  // Set the HTML snippet using the custom creative asset macro.
  $customCreative->htmlSnippet = '<a href="%%CLICK_URL_UNESC%%%%DEST_URL%%">'
      . '<img src="%%FILE:' . $customCreativeAsset->macroName . '%%"/>'
      . '</a><br>Click above for great deals!';

  // Set the creative size.
  $customCreative->size = new Size(300, 250, false);

  // Create the custom creative on the server.
  $customCreatives = $creativeService->createCreatives(array($customCreative));

  foreach ($customCreatives as $customCreative) {
    printf("A custom creative with ID '%s', name '%s', and size '%sx%s' was "
        . "created and can be previewed at: %s\n", $customCreative->id,
        $customCreative->name, $customCreative->size->width,
        $customCreative->size->height, $customCreative->previewUrl);
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

