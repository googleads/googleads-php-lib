<?php
/**
 * This example creates a new template creative for a given advertiser. To
 * determine which companies are advertisers, run
 * GetCompaniesByStatement.php. To determine which creatives already
 * exist, run GetAllCreatives.php. To determine which creative templates
 * exist, run GetAllCreativeTemplates.php
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
 * @subpackage v201608
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
  $creativeService = $user->GetService('CreativeService', 'v201608');

  // Use the image banner with optional third party tracking template.
  $creativeTemplateId = 10000680;

  // Create the local custom creative object.
  $templateCreative = new TemplateCreative();
  $templateCreative->name = 'Template creative' . uniqid();
  $templateCreative->advertiserId = $advertiserId;
  $templateCreative->creativeTemplateId = $creativeTemplateId;

  // Set the creative size.
  $templateCreative->size = new Size(300, 250, false);

  // Create the asset variable value.
  $assetVariableValue = new AssetCreativeTemplateVariableValue();
  $assetVariableValue->uniqueName = 'Imagefile';
  $asset = new CreativeAsset();
  $asset->assetByteArray = MediaUtils::GetBase64Data(
      'http://www.google.com/intl/en/adwords/select/images/samples/inline.jpg');
  // Filenames must be unique.
  $asset->fileName = sprintf('image%s.jpg', uniqid());
  $assetVariableValue->asset = $asset;
  $templateCreative->creativeTemplateVariableValues[] = $assetVariableValue;

  // Create the image width variable value.
  $imageWidthVariableValue = new LongCreativeTemplateVariableValue();
  $imageWidthVariableValue->uniqueName = 'Imagewidth';
  $imageWidthVariableValue->value = 300;
  $templateCreative->creativeTemplateVariableValues[] =
      $imageWidthVariableValue;

  // Create the image height variable value.
  $imageHeightVariableValue = new LongCreativeTemplateVariableValue();
  $imageHeightVariableValue->uniqueName = 'Imageheight';
  $imageHeightVariableValue->value = 250;
  $templateCreative->creativeTemplateVariableValues[] =
      $imageHeightVariableValue;

  // Create the URL variable value.
  $urlVariableValue = new UrlCreativeTemplateVariableValue();
  $urlVariableValue->uniqueName = 'ClickthroughURL';
  $urlVariableValue->value = 'www.google.com';
  $templateCreative->creativeTemplateVariableValues[] = $urlVariableValue;

  // Create the target window variable value.
  $targetWindowVariableValue = new StringCreativeTemplateVariableValue();
  $targetWindowVariableValue->uniqueName = 'Targetwindow';
  $targetWindowVariableValue->value = '_blank';
  $templateCreative->creativeTemplateVariableValues[] =
      $targetWindowVariableValue;

  // Create the template creative on the server.
  $templateCreatives =
      $creativeService->createCreatives(array($templateCreative));

  foreach ($templateCreatives as $templateCreative) {
    printf("A template creative with ID '%s', name '%s', and type '%s' was "
        . "created and can be previewed at: %s\n", $templateCreative->id,
        $templateCreative->name, get_class($templateCreative),
        $templateCreative->previewUrl);
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

