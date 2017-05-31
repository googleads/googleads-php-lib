<?php
/**
 * This example gets a forecast for a prospective line item that targets the
 * entire network. The targeting can be modified to determine forecasts for
 * other criteria such as custom criteria targeting (in addition to targeting
 * the whole network). See CreateLineItems.php and TargetCustomCriteria.php for
 * examples of how to create more complex targeting.
 *
 * PHP version 5
 *
 * Copyright 2015, Google Inc. All Rights Reserved.
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
 * @copyright  2015, Google Inc. All Rights Reserved.
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
require_once 'Google/Api/Ads/Dfp/Util/v201611/DateTimeUtils.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

// Set the ID of the advertiser (company) to forecast for. Setting an advertiser
// will cause the forecast to apply the appropriate unified blocking rules.
$advertiserId = 'INSERT_ADVERTISER_COMPANY_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the ForecastService.
  $forecastService = $user->GetService('ForecastService', 'v201611');

  // Get the NetworkService.
  $networkService = $user->GetService('NetworkService', 'v201611');

  // Get the root ad unit ID used to target the whole site.
  $rootAdUnitId = $networkService->getCurrentNetwork()->effectiveRootAdUnitId;

  // Create inventory targeting.
  $inventoryTargeting = new InventoryTargeting();

  // Create ad unit targeting for the root ad unit.
  $adUnitTargeting = new AdUnitTargeting();
  $adUnitTargeting->adUnitId = $rootAdUnitId;
  $adUnitTargeting->includeDescendants = true;

  $inventoryTargeting->targetedAdUnits = array($adUnitTargeting);

  // Create targeting.
  $targeting = new Targeting();
  $targeting->inventoryTargeting = $inventoryTargeting;

  // Create a line item.
  $lineItem = new LineItem();
  $lineItem->targeting = $targeting;
  $lineItem->lineItemType = 'SPONSORSHIP';

  // Set the roadblocking type.
  $lineItem->roadblockingType = 'ONE_OR_MORE';

  // Set the creative rotation type.
  $lineItem->creativeRotationType = 'OPTIMIZED';

  // Create the creative placeholder size.
  $size = new Size();
  $size->width = 300;
  $size->height = 250;
  $size->isAspectRatio = false;

  // Create the creative placeholder.
  $creativePlaceholder = new CreativePlaceholder();
  $creativePlaceholder->size = $size;

  // Set the size of creatives that can be associated with this line item.
  $lineItem->creativePlaceholders = array($creativePlaceholder);

  // Set the length of the line item to run.
  $lineItem->startDateTimeType = 'IMMEDIATELY';
  $lineItem->endDateTime = DateTimeUtils::ToDfpDateTime(
      new DateTime('+30 days', new DateTimeZone('America/New_York')));

  // Set the cost type.
  $lineItem->costType = 'CPM';

  // Set the line item to use 50% of the impressions.
  $goal = new Goal();
  $goal->goalType = 'DAILY';
  $goal->unitType = 'IMPRESSIONS';
  $goal->units = 50;
  $lineItem->primaryGoal = $goal;

  // Get forecast for prospective line item.
  $prospectiveLineItem = new ProspectiveLineItem();
  $prospectiveLineItem->advertiserId = $advertiserId;
  $prospectiveLineItem->lineItem = $lineItem;
  $options  = new AvailabilityForecastOptions();
  $options->includeContendingLineItems = true;
  $options->includeTargetingCriteriaBreakdown = true;

  $forecast =
      $forecastService->getAvailabilityForecast($prospectiveLineItem, $options);

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

