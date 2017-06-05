<?php
/**
 * This example creates a new exchange rate. To determine which exchange rates
 * exist, run GetAllExchangeRates.php.
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

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the ExchangeRateService.
  $exchangeRateService = $user->GetService('ExchangeRateService', 'v201611');

  // Create an exchange rate.
  $exchangeRate = new ExchangeRate();

  // Set the currency code.
  $exchangeRate->currencyCode = 'AUD';

  // Set the direction of the conversion (from the network currency).
  $exchangeRate->direction = 'FROM_NETWORK';

  // Set the conversion value as 1.5 (this value is multiplied by
  // 10,000,000,000)
  $exchangeRate->exchangeRate = 15000000000;

  // Do not refresh exchange rate from Google data. Update manually only.
  $exchangeRate->refreshRate = 'FIXED';

  // Create the exchange rate on the server.
  $exchangeRates =
      $exchangeRateService->createExchangeRates(array($exchangeRate));

  foreach ($exchangeRates as $createdExchangeRate) {
    printf("An exchange rate with ID %d, currency code '%s', direction '%s', "
        . "and exchange rate %.2f was created.\n",
        $createdExchangeRate->id,
        $createdExchangeRate->currencyCode,
        $createdExchangeRate->direction,
        $createdExchangeRate->exchangeRate / 10000000000
    );
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

