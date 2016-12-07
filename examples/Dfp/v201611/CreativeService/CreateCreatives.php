<?php
/**
 * This example creates new image creatives for a given advertiser. To
 * determine which companies are advertisers, run
 * GetCompaniesByStatement.php. To determine which creatives already
 * exist, run GetAllCreatives.php.
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

require_once 'Google/Api/Ads/Dfp/Lib/DfpUser.php';
require_once 'Google/Api/Ads/Common/Util/MediaUtils.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

// Set the ID of the advertiser (company) that all creatives will be
// assigned to.
$advertiserId = 'INSERT_ADVERTISER_COMPANY_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the CreativeService.
  $creativeService = $user->GetService('CreativeService', 'v201611');

  // Create an array to store local image creative objects.
  $imageCreatives = array();

  for ($i = 0; $i < 5; $i++) {
    // Create creative size.
    $size = new Size(300, 250);

    // Create an image creative.
    $imageCreative = new ImageCreative();
    $imageCreative->name = 'Image creative #' . $i;
    $imageCreative->advertiserId = $advertiserId;
    $imageCreative->destinationUrl = 'http://google.com';
    $imageCreative->size = $size;

    // Create image asset.
    $creativeAsset = new CreativeAsset();
    $creativeAsset->fileName = 'image.jpg';
    $creativeAsset->assetByteArray =
        MediaUtils::GetBase64Data('http://www.google.com/intl/en/adwords/'
            . 'select/images/samples/inline.jpg');
    $creativeAsset->size = $size;
    $imageCreative->primaryImageAsset = $creativeAsset;

    $imageCreatives[] = $imageCreative;
  }

  // Create the image creatives on the server.
  $imageCreatives = $creativeService->createCreatives($imageCreatives);

  // Display results.
  if (isset($imageCreatives)) {
    foreach ($imageCreatives as $creative) {
      // Use instanceof to determine what type of creative was returned.
      if ($creative instanceof ImageCreative) {
        printf("An image creative with ID %d, name '%s', and size '%sx%s' was "
            . "created and can be previewed at: '%s'\n",
            $creative->id,
            $creative->name,
            $creative->size->width,
            $creative->size->height,
            $creative->previewUrl
        );
      } else {
        printf("A creative with ID %d, name '%s', and type '%s' was created.\n",
            $creative->id,
            $creative->name,
            get_class($creative)
        );
      }
    }
  } else {
    printf("No creatives created.\n");
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

