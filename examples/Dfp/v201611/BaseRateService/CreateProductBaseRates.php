<?php
/**
 * This example creates a new product base rate. To determine which base rates
 * exist, run GetAllBaseRates.php.
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
 * @subpackage v201611
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

// Set the rate card ID to add the base rate to.
$rateCardId = 'INSERT_RATE_CARD_ID_HERE';

// Set the product to apply this base rate to.
$productId = 'INSERT_PRODUCT_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the BaseRateService.
  $baseRateService = $user->GetService('BaseRateService', 'v201611');

  // Create a base rate for a product.
  $productBaseRate = new ProductBaseRate();

  // Set the rate card ID that the product base rate belongs to.
  $productBaseRate->rateCardId = $rateCardId;

  // Set the product the base rate will be applied to.
  $productBaseRate->productId = $productId;

  // Create a rate worth $2 and set that on the product base rate.
  $rate = new Money();
  $rate->currencyCode = 'USD';
  $rate->microAmount = 2000000;
  $productBaseRate->rate = $rate;

  // Create the product base rate on the server.
  $baseRates = $baseRateService->createBaseRates(array($productBaseRate));

  foreach ($baseRates as $createdBaseRate) {
    printf("A product base rate with ID %d and rate %.2f %s was created.\n",
        $createdBaseRate->id,
        $createdBaseRate->rate->microAmount / 1000000,
        $createdBaseRate->rate->currencyCode
    );
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

