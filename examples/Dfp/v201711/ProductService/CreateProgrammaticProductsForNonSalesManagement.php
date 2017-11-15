<?php
/**
 * Copyright 2017 Google Inc. All Rights Reserved.
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
 */
namespace Google\AdsApi\Examples\Dfp\v201711\ProductService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\v201711\AdExchangeEnvironment;
use Google\AdsApi\Dfp\v201711\AdUnitTargeting;
use Google\AdsApi\Dfp\v201711\CreativePlaceholder;
use Google\AdsApi\Dfp\v201711\EnvironmentType;
use Google\AdsApi\Dfp\v201711\InventoryTargeting;
use Google\AdsApi\Dfp\v201711\LineItemType;
use Google\AdsApi\Dfp\v201711\Money;
use Google\AdsApi\Dfp\v201711\NetworkService;
use Google\AdsApi\Dfp\v201711\Product;
use Google\AdsApi\Dfp\v201711\ProductMarketplaceInfo;
use Google\AdsApi\Dfp\v201711\ProductService;
use Google\AdsApi\Dfp\v201711\ProductType;
use Google\AdsApi\Dfp\v201711\RateType;
use Google\AdsApi\Dfp\v201711\Size;
use Google\AdsApi\Dfp\v201711\Targeting;

/**
 * Creates a programmatic product for a non-sales-enabled network.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateProgrammaticProductsForNonSalesManagement {

  public static function runExample(DfpServices $dfpServices,
      DfpSession $session) {
    $productService = $dfpServices->get($session, ProductService::class);
    $networkService = $dfpServices->get($session, NetworkService::class);

    // Create a product that will have standard proposal line items and
    // trafficked in DFP.
    $product = new Product();
    $product->setName('Non-sales programmatic product #' . uniqid());
    $product->setProductType(ProductType::DFP);
    $product->setLineItemType(LineItemType::STANDARD);
    $product->setPriority(8);
    $product->setEnvironmentType(EnvironmentType::BROWSER);
    $product->setRateType(RateType::CPM);
    $product->setRate(new Money('USD', 6000000));

    // Set required Marketplace information.
    $productMarketplaceInfo = new ProductMarketplaceInfo();
    $productMarketplaceInfo
        ->setAdditionalTerms('Additional terms for the product');
    $productMarketplaceInfo
        ->setAdExchangeEnvironment(AdExchangeEnvironment::DISPLAY);
    $product->setProductMarketplaceInfo($productMarketplaceInfo);

    // Set the size of creatives that can be associated with the product.
    $creativePlaceholder = new CreativePlaceholder();
    $creativePlaceholder->setSize(new Size(300, 250, false));
    $product->setCreativePlaceholders([$creativePlaceholder]);

    // Create ad unit targeting for the root ad unit (i.e. the whole network).
    $rootAdUnitId =
        $networkService->getCurrentNetwork()->getEffectiveRootAdUnitId();
    $adUnitTargeting = new AdUnitTargeting();
    $adUnitTargeting->setAdUnitId($rootAdUnitId);
    $adUnitTargeting->setIncludeDescendants(true);

    $productTargeting = new Targeting();
    $inventoryTargeting = new InventoryTargeting();
    $inventoryTargeting->setTargetedAdUnits([$adUnitTargeting]);
    $productTargeting->setInventoryTargeting($inventoryTargeting);
    $product->setBuiltInTargeting($productTargeting);

    // Create the products on the server.
    $results = $productService->createProducts([$product]);

    // Print out some information for each created product.
    foreach ($results as $i => $product) {
      printf(
          "%d) Programmatic product with ID %d and name '%s' was created.\n",
          $i,
          $product->getId(),
          $product->getName()
      );
    }
  }

  public static function main() {
    // Generate a refreshable OAuth2 credential for authentication.
    $oAuth2Credential = (new OAuth2TokenBuilder())
        ->fromFile()
        ->build();

    // Construct an API session configured from a properties file and the OAuth2
    // credentials above.
    $session = (new DfpSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential)
        ->build();

    self::runExample(new DfpServices(), $session);
  }
}

CreateProgrammaticProductsForNonSalesManagement::main();
