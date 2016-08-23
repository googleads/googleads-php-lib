<?php
/**
 * This example creates new line items. To determine which line items exist,
 * run GetAllLineItems.php. To determine which orders exist, run
 * GetAllOrders.php. To determine which placements exists, run
 * GetAllPlacements.php.
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
 * @subpackage v201608
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
require_once 'Google/Api/Ads/Dfp/Util/v201608/DateTimeUtils.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the LineItemService.
  $lineItemService = $user->GetService('LineItemService', 'v201608');

  // Set the order that all created line items will belong to and the placement
  // ID to target.
  $orderId = 'INSERT_ORDER_ID_HERE';
  $targetPlacementIds = array('INSERT_PLACEMENT_ID_HERE');

  // Create inventory targeting.
  $inventoryTargeting = new InventoryTargeting();
  $inventoryTargeting->targetedPlacementIds = $targetPlacementIds;

  // Create geographical targeting.
  $geoTargeting = new GeoTargeting();

  // Include the US, Quebec (Canada), and postal code B3P (Canada).
  $countryLocation = new DfpLocation();
  $countryLocation->id = 2840;

  $regionLocation = new DfpLocation();
  $regionLocation->id = 20123;

  $postalCodeLocation = new DfpLocation();
  $postalCodeLocation->id = 9000093;

  $geoTargeting->targetedLocations = array($countryLocation, $regionLocation);

  // Exclude Chicago and the New York metro area.
  $cityLocation = new DfpLocation();
  $cityLocation->id = 1016367;

  $metroLocation = new DfpLocation();
  $metroLocation->id = 200501;
  $geoTargeting->excludedLocations = array($cityLocation, $metroLocation);

  // Exclude users from US federal government domains.
  $userDomainTargeting = new UserDomainTargeting(array('usa.gov'), false);

  // Target only the weekend in the browser's timezone.
  $saturdayDayPart = new DayPart();
  $saturdayDayPart->dayOfWeek = 'SATURDAY';
  $saturdayDayPart->startTime = new TimeOfDay(0, 'ZERO');
  $saturdayDayPart->endTime = new TimeOfDay(24, 'ZERO');

  $sundayDayPart = new DayPart();
  $sundayDayPart->dayOfWeek = 'SUNDAY';
  $sundayDayPart->startTime = new TimeOfDay(0, 'ZERO');
  $sundayDayPart->endTime = new TimeOfDay(24, 'ZERO');

  // Create day-part targeting.
  $dayPartTargeting = new DayPartTargeting();
  $dayPartTargeting->timeZone = 'BROWSER';
  $dayPartTargeting->dayParts = array($saturdayDayPart, $sundayDayPart);

  // Target just the Chrome browser.
  $browserTechnology = new Technology();
  $browserTechnology->id = 500072;

  // Create technology targeting.
  $browserTargeting = new BrowserTargeting();
  $browserTargeting->browsers = array($browserTechnology);
  $technologyTargeting = new TechnologyTargeting();
  $technologyTargeting->browserTargeting = $browserTargeting;

  // Create targeting.
  $targeting = new Targeting();
  $targeting->inventoryTargeting = $inventoryTargeting;
  $targeting->geoTargeting = $geoTargeting;
  $targeting->userDomainTargeting = $userDomainTargeting;
  $targeting->dayPartTargeting = $dayPartTargeting;
  $targeting->technologyTargeting = $technologyTargeting;

  // Create an array to store local line item objects.
  $lineItems = array();

  for ($i = 0;  $i < 5; $i++) {
    $lineItem = new LineItem();
    $lineItem->name = 'Line item #' . uniqid();
    $lineItem->orderId = $orderId;
    $lineItem->targeting = $targeting;
    $lineItem->lineItemType = 'STANDARD';
    $lineItem->allowOverbook = true;

    // Create the creative placeholder.
    $creativePlaceholder = new CreativePlaceholder();
    $creativePlaceholder->size = new Size(300, 250, false);

    // Set the size of creatives that can be associated with this line item.
    $lineItem->creativePlaceholders = array($creativePlaceholder);

    // Set the creative rotation type to even.
    $lineItem->creativeRotationType = 'EVEN';

    // Set the length of the line item to run.
    $lineItem->startDateTimeType = 'IMMEDIATELY';
    $lineItem->endDateTime = DateTimeUtils::ToDfpDateTime(
        new DateTime('+1 month', new DateTimeZone('America/New_York')));

    // Set the cost per unit to $2.
    $lineItem->costType = 'CPM';
    $lineItem->costPerUnit = new Money('USD', 2000000);

    // Set the number of units bought to 500,000 so that the budget is
    // $1,000.
    $goal = new Goal();
    $goal->units = 500000;
    $goal->unitType = 'IMPRESSIONS';
    $goal->goalType = 'LIFETIME';
    $lineItem->primaryGoal = $goal;

    $lineItems[] = $lineItem;
  }

  // Create the line items on the server.
  $lineItems = $lineItemService->createLineItems($lineItems);

  // Display results.
  if (isset($lineItems)) {
    foreach ($lineItems as $lineItem) {
      printf("A line item with with ID %d, belonging to order ID %d, and name "
          . "%s was created\n", $lineItem->id, $lineItem->orderId,
          $lineItem->name);
    }
  } else {
    printf("No line items created.");
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

