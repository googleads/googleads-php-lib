<?php
/**
 * This example creates a programmatic product for those not using sales
 * management.
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

  $productService = $user->GetService('ProductService', 'v201611');
  $networkService = $user->GetService('NetworkService', 'v201611');

  // Create a product that will have standard proposal line items and trafficked
  // in DFP.
  $product = new Product();
  $product->name = 'Non-sales programmatic product #' . uniqid();
  $product->productType = 'DFP';
  $product->lineItemType = 'STANDARD';
  $product->priority = 8;
  $product->environmentType = 'BROWSER';
  $product->rateType = 'CPM';
  $product->rate = new Money('USD', 6000000);

  // Set required Marketplace information.
  $productMarketplaceInfo = new ProductMarketplaceInfo();
  $productMarketplaceInfo->additionalTerms = 'Additional terms for the product';
  $productMarketplaceInfo->adExchangeEnvironment = 'DISPLAY';
  $product->productMarketplaceInfo = $productMarketplaceInfo;

  // Set the size of creatives that can be associated with the product.
  $creativePlaceholder = new CreativePlaceholder();
  $creativePlaceholder->size = new Size(300, 250, false);
  $product->creativePlaceholders = array($creativePlaceholder);

  // Create ad unit targeting for the root ad unit (i.e. the whole network).
  $rootAdUnitId = $networkService->getCurrentNetwork()->effectiveRootAdUnitId;
  $adUnitTargeting = new AdUnitTargeting();
  $adUnitTargeting->adUnitId = $rootAdUnitId;
  $adUnitTargeting->includeDescendants = true;

  $productTargeting = new Targeting();
  $inventoryTargeting = new InventoryTargeting();
  $inventoryTargeting->targetedAdUnits = array($adUnitTargeting);
  $productTargeting->inventoryTargeting = $inventoryTargeting;
  $product->builtInTargeting = $productTargeting;

  // Create the programmatic product on the server.
  $products = $productService->createProducts(array($product));

  foreach ($products as $createdProduct) {
    printf("A programmatic product with ID %d and name '%s' was created.\n",
        $createdProduct->id, $createdProduct->name);
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}
