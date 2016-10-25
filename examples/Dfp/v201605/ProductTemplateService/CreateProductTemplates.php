<?php
/**
 * This example creates a new product template. To determine which product
 * templates exist, run GetAllProductTemplates.php.
 *
 * PHP version 5
 *
 * Copyright 2014, Google Inc. All Rights Reserved.
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
 * @copyright  2014, Google Inc. All Rights Reserved.
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

  // Get the ProductTemplateService.
  $productTemplateService = $user->GetService('ProductTemplateService',
      'v201605');

  // Get the NetworkService.
  $networkService = $user->GetService('NetworkService', 'v201605');

  // Create a product template.
  $productTemplate = new ProductTemplate();
  $productTemplate->name = sprintf('Product template #%s', uniqid());
  $productTemplate->description = 'This product template creates standard '
      . 'proposal line items targeting Chrome browsers with product '
      . 'segmentation on ad units and geo targeting.';

  // Set the name macro which will be used to generate the names of the
  // products. This will create a segmentation based on the line item type, ad
  // unit, and location.
  $productTemplate->nameMacro =
      '<line-item-type> - <ad-unit> - <template-name> - <location>';

  // Set the product type so the created proposal line items will be trafficked
  // in DFP.
  $productTemplate->productType = 'DFP';

  // Set rate type to create CPM priced proposal line items.
  $productTemplate->rateType = 'CPM';
  $productTemplate->deliveryRateType = 'AS_FAST_AS_POSSIBLE';

  // Optionally set the creative rotation of the product to serve one or more
  // creatives.
  $productTemplate->roadblockingType = 'ONE_OR_MORE';

  // Create the master creative placeholder.
  $creativeMasterPlaceholder = new CreativePlaceholder();
  $creativeMasterPlaceholder->size = new Size(728, 90, false);

  // Create companion creative placeholders.
  $companionCreativePlaceholder = new CreativePlaceholder();
  $companionCreativePlaceholder->size = new Size(300, 250, false);

  // Set the size of creatives that can be associated with the product template.
  $productTemplate->creativePlaceholders =
      array($creativeMasterPlaceholder, $companionCreativePlaceholder);

  // Set the type of proposal line item to be created from the product template.
  $productTemplate->lineItemType = 'STANDARD';

  // Get the root ad unit ID used to target the whole site.
  $rootAdUnitId = $networkService->getCurrentNetwork()->effectiveRootAdUnitId;

  // Create ad unit targeting for the root ad unit (i.e. the whole network).
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

  // Add browser targeting to Chrome on the product template distinct from
  // product segmentation.
  $chromeBrowser = new Browser();
  $chromeBrowser->id = 500072;

  $browserTargeting = new BrowserTargeting();
  $browserTargeting->browsers = array($chromeBrowser);

  $technologyTargeting = new TechnologyTargeting();
  $technologyTargeting->browserTargeting = $browserTargeting;

  $productTemplateTargeting = new Targeting();
  $productTemplateTargeting->technologyTargeting = $technologyTargeting;

  $productTemplate->builtInTargeting = $productTemplateTargeting;

  // Allow placement targeting to be customized on the proposal line item.
  $customizableAttributes = new CustomizableAttributes();
  $customizableAttributes->allowPlacementTargetingCustomization = true;
  $productTemplate->customizableAttributes = $customizableAttributes;

  // Add inventory and geo targeting as product segmentation.
  $productSegmentation = new ProductSegmentation();
  $productSegmentation->adUnitSegments = array($adUnitTargeting);
  $productSegmentation->geoSegment = $geoTargeting;

  $productTemplate->productSegmentation = $productSegmentation;

  // Create the product template on the server.
  $productTemplates = $productTemplateService->createProductTemplates(
      array($productTemplate));

  foreach ($productTemplates as $createdProductTemplate) {
    printf("A product template with ID %d and name '%s' was created.\n",
        $createdProductTemplate->id, $createdProductTemplate->name);
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

