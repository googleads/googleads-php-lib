<?php
/**
 * This example gets a delivery forecast for existing line items. To determine
 * which line items exist, run GetAllLineItems.php.
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
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

// Set the IDs of the line items to get a forecast for.
$lineItemId1 = "INSERT_LINE_ITEM_ID_HERE";
$lineItemId2 = "INSERT_LINE_ITEM_ID_HERE";

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the ForecastService.
  $forecastService = $user->GetService('ForecastService', 'v201611');

  $options = new DeliveryForecastOptions();
  $forecast = $forecastService->getDeliveryForecastByIds(
      array($lineItemId1, $lineItemId2), $options);

  foreach ($forecast->lineItemDeliveryForecasts as $lineItemForecast) {
    $unitType = strtolower($lineItemForecast->unitType);
    printf("Forecast for line item %d:\n", $lineItemForecast->lineItemId);
    printf("\t%d %s matched\n", $lineItemForecast->matchedUnits, $unitType);
    printf("\t%d %s delivered\n", $lineItemForecast->deliveredUnits, $unitType);
    printf("\t%d %s predicted\n",
        $lineItemForecast->predictedDeliveryUnits, $unitType);
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

