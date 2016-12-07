<?php
/**
 * This example creates programmatic product templates. Your network must have
 * sales management enabled to run this example.
 *
 * <p>To publish the created product templates to Marketplace, you must create a
 * ProductTemplateBaseRate with a Marketplace rate card.
 *
 * PHP version 5
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
 * @package    GoogleApiAdsDfp
 * @subpackage v201611
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
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
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  $productTemplateService = $user->GetService('ProductTemplateService',
      'v201611');
  $networkService = $user->GetService('NetworkService', 'v201611');

  // Create a product template that will have standard proposal line items and
  // be trafficked in DFP.
  $productTemplate = new ProductTemplate();
  $productTemplate->lineItemType = 'STANDARD';
  $productTemplate->productType = 'DFP';
  $productTemplate->name = 'Programmatic product template #' . uniqid();
  $productTemplate->description = 'This product template creates standard '
      . 'programmatic proposal line items targeting all ad units with product '
      . 'segmentation on geo targeting.';
  $productTemplate->rateType = 'CPM';

  // Set required Marketplace information.
  $marketplaceInfo = new ProductTemplateMarketplaceInfo();
  $marketplaceInfo->adExchangeEnvironment = 'DISPLAY';
  $productTemplate->productTemplateMarketplaceInfo = $marketplaceInfo;

  // Set the name macro which will be used to generate the names of the
  // products. This will create a segmentation based on the line item type, ad
  // unit, and location.
  $productTemplate->nameMacro =
      '<line-item-type> - <ad-unit> - <template-name> - <location>';

  // Set the size of creatives that can be associated with the product template.
  $creativePlaceholder = new CreativePlaceholder();
  $creativePlaceholder->size = new Size(728, 90, false);
  $productTemplate->creativePlaceholders = array($creativePlaceholder);

  // Create ad unit targeting for the root ad unit (i.e. the whole network).
  $rootAdUnitId = $networkService->getCurrentNetwork()->effectiveRootAdUnitId;
  $adUnitTargeting = new AdUnitTargeting();
  $adUnitTargeting->adUnitId = $rootAdUnitId;
  $adUnitTargeting->includeDescendants = true;

  // Create geo targeting for the US.
  $countryLocation = new DfpLocation();
  $countryLocation->id = 2840;

  // Create geo targeting for Hong Kong.
  $regionLocation = new DfpLocation();
  $regionLocation->id = 2344;

  $geoTargeting = new GeoTargeting();
  $geoTargeting->targetedLocations = array($countryLocation, $regionLocation);

  // Add geo as product segmentation.
  $productSegmentation = new ProductSegmentation();
  $productSegmentation->adUnitSegments = array($adUnitTargeting);
  $productSegmentation->geoSegment = $geoTargeting;
  $productTemplate->productSegmentation = $productSegmentation;

  // Create the product template on the server.
  $productTemplates = $productTemplateService->createProductTemplates(
      array($productTemplate));

  foreach ($productTemplates as $createdProductTemplate) {
    printf(
        "A programmatic product template with ID %d and name '%s' was "
            . "created.\n",
        $createdProductTemplate->id,
        $createdProductTemplate->name
    );
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}
