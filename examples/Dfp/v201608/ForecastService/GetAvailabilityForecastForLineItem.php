<?php
/**
 * This example gets a forecast for an existing line item. To determine which
 * line items exist, run GetAllLineItems.php.
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

require_once 'Google/Api/Ads/Dfp/Lib/DfpUser.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

// Set the ID of the line item to get a forecast for.
$lineItemId = 'INSERT_LINE_ITEM_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the ForecastService.
  $forecastService = $user->GetService('ForecastService', 'v201608');

  // Get forecast for line item.
  $options = new AvailabilityForecastOptions();
  $options->includeContendingLineItems = true;
  $options->includeTargetingCriteriaBreakdown = true;
  $forecast = $forecastService->getAvailabilityForecastById(
      $lineItemId, $options);

  // Display results.
  $matchedUnits = $forecast->matchedUnits;
  $unitType = strtolower($forecast->unitType);
  printf("%d %s matched.\n", $matchedUnits, $unitType);

  if ($matchedUnits !== 0) {
    $percentAvailableUnits = $forecast->availableUnits / $matchedUnits * 100;
    printf("%.2d%% %s available.\n", $percentAvailableUnits, $unitType);
  }

  if ($matchedUnits !== 0) {
    $percentPossibleUnits = $forecast->possibleUnits / $matchedUnits * 100;
    printf("%.2d%% %s possible.\n", $percentPossibleUnits, $unitType);
  }

  printf("%d contending line items.\n", count($forecast->contendingLineItems));
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

