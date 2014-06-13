<?php
/**
 * This example updates the notes of each order up to the first 500.
 * To determine which orders exist, run GetAllOrdersExample.php.
 *
 * Tags: OrderService.getOrdersByStatement
 * Tags: OrderService.updateOrders
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
 * @subpackage v201405
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Adam Rogal
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

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the OrderService.
  $orderService = $user->GetService('OrderService', 'v201405');

  // Create a statement to get all orders.
  $filterStatement = new Statement('LIMIT 500');

  // Get orders by statement.
  $page = $orderService->getOrdersByStatement($filterStatement);

  if (isset($page->results)) {
    $orders = $page->results;

    // Remove archived orders.
    array_filter($orders,
        create_function('$order', 'return !$order->isArchived;'));

    // Update each local order object by changing its notes.
    foreach ($orders as $order) {
      $order->notes = 'Spoke to advertiser. All is well.';
    }

    // Update the orders on the server.
    $orders = $orderService->updateOrders($orders);

    // Display results.
    if (isset($orders)) {
      foreach ($orders as $order) {
        print 'Order with ID "' . $order->id
            . '", name "' . $order->name
            . '", advertiser ID "' . $order->advertiserId
            . '", and notes "' . $order->notes
            . "\" was updated.\n";
      }
    } else {
      print "No orders updated.\n";
    }
  } else {
    print "No orders found to update.\n";
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

