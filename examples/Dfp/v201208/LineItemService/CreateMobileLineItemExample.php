<?php
/**
 * This example creates a new line item to serve to the mobile platform. Mobile
 * features needs to be enabled in your account to use mobile targeting. To
 * determine which line items exist, run GetAllLineItemsExample.php. To
 * determine which orders exist, run GetAllOrdersExample.php. To determine
 * which placements exist, run GetAllPlacementsExample.php.
 *
 * Tags: LineItemService.createLineItem
 *
 * PHP version 5
 *
 * Copyright 2012, Google Inc. All Rights Reserved.
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
 * @subpackage v201208
 * @category   WebServices
 * @copyright  2012, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
 */
error_reporting(E_STRICT | E_ALL);

// You can set the include path to src directory or reference
// DfpUser.php directly via require_once.
// $path = '/path/to/dfp_api_php_lib/src';
$path = dirname(__FILE__) . '/../../../../src';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

require_once 'Google/Api/Ads/Dfp/Lib/DfpUser.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';
require_once 'Google/Api/Ads/Dfp/Util/DateTimeUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the LineItemService.
  $lineItemService = $user->GetService('LineItemService', 'v201208');

  // Set the order that all created line items will belong to and the placement
  // ID to target.
  $orderId = 'INSERT_ORDER_ID_HERE';
  $targetPlacementIds = array('INSERT_MOBILE_PLACEMENT_ID_HERE');

  // Create inventory targeting.
  $inventoryTargeting = new InventoryTargeting();
  $inventoryTargeting->targetedPlacementIds = $targetPlacementIds;

  // Create technology targeting.
  $technologyTargeting = new TechnologyTargeting();

  // Create device manufacturer targeting.
  $deviceManufacturerTargeting = new DeviceManufacturerTargeting();
  $deviceManufacturerTargeting->isTargeted = TRUE;

  // Target the Google device manufacturer (40100).
  $deviceManufacturerTechnology = new Technology();
  $deviceManufacturerTechnology->id = 40100;
  $deviceManufacturerTargeting->deviceManufacturers =
      array($deviceManufacturerTechnology);
  $technologyTargeting->deviceManufacturerTargeting =
      $deviceManufacturerTargeting;

  // Create mobile device targeting.
  $mobileDeviceTargeting = new MobileDeviceTargeting();

  // Exclude the Nexus One device (604046).
  $mobileDeviceTechnology = new Technology();
  $mobileDeviceTechnology->id = 604046;
  $mobileDeviceTargeting->targetedMobileDevices =
      array($mobileDeviceTechnology);
  $technologyTargeting->mobileDeviceTargeting = $mobileDeviceTargeting;

  // Create mobile device submodel targeting.
  $mobileDeviceSubmodelTargeting = new MobileDeviceSubmodelTargeting();

  // Target the iPhone 4 device submodel (640003).
  $mobileDeviceSubmodelTechnology = new Technology();
  $mobileDeviceSubmodelTechnology->id = 640003;
  $mobileDeviceSubmodelTargeting->targetedMobileDeviceSubmodels =
      array($mobileDeviceSubmodelTechnology);
  $technologyTargeting->mobileDeviceSubmodelTargeting =
      $mobileDeviceSubmodelTargeting;

  // Create targeting.
  $targeting = new Targeting();
  $targeting->inventoryTargeting = $inventoryTargeting;
  $targeting->technologyTargeting = $technologyTargeting;

  // Create local line item object.
  $lineItem = new LineItem();
  $lineItem->name = 'Mobile line item';
  $lineItem->orderId = $orderId;
  $lineItem->targeting = $targeting;
  $lineItem->lineItemType = 'STANDARD';
  $lineItem->allowOverbook = TRUE;

  // Set the target platform to mobile.
  $lineItem->targetPlatform = 'MOBILE';

  // Set the creative rotation type to even.
  $lineItem->creativeRotationType = 'EVEN';

  // Create the creative placeholder.
  $creativePlaceholder = new CreativePlaceholder();
  $creativePlaceholder->size = new Size(300, 250, FALSE);

  // Set the size of creatives that can be associated with this line item.
  $lineItem->creativePlaceholders = array($creativePlaceholder);

  // Set the length of the line item to run.
  $lineItem->startDateTimeType = 'IMMEDIATELY';
  $lineItem->endDateTime =
      DateTimeUtils::GetDfpDateTime(new DateTime('+1 month'));

  // Set the cost per unit to $2.
  $lineItem->costType = 'CPM';
  $lineItem->costPerUnit = new Money('USD', 2000000);

  // Set the number of units bought to 500,000 so that the budget is $1,000.
  $lineItem->unitsBought = 500000;
  $lineItem->unitType = 'IMPRESSIONS';

  // Create the line item on the server.
  $lineItem = $lineItemService->createLineItem($lineItem);

  // Display results.
  if (isset($lineItem)) {
    prinf("A line item with with ID '%s', belonging to order ID '%s', and name "
        . "'%s' was created.\n", $lineItem->id, $lineItem->orderId,
        $lineItem->name);
  } else {
    print "No line item was created.";
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

