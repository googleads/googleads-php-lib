<?php
/**
 * This example shows how to get recently updated line items. To create
 * line items, run CreateLineItemsExample.php.
 *
 * Tags: LineItemService.getLineItemsByStatement
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
 * @subpackage v201211
 * @category   WebServices
 * @copyright  2012, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Paul Rashidi
 */
error_reporting(E_STRICT | E_ALL);

// You can set the include path to src directory or reference
// DfpUser.php directly via require_once.
// $path = '/path/to/dfp_api_php_lib/src';
$path = dirname(__FILE__) . '/../../../../src';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

require_once 'Google/Api/Ads/Dfp/Lib/DfpUser.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';
require_once 'Google/Api/Ads/Common/Util/MapUtils.php';
require_once 'Google/Api/Ads/Dfp/Util/DateTimeUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the LineItemService.
  $lineItemService = $user->GetService('LineItemService', 'v201211');

  // Set the ID of the order to get line items from.
  $orderId = 'INSERT_ORDER_ID_HERE';

  // Calculate time from three days ago.
  $threeDaysAgo = date(DateTimeUtils::$DFP_DATE_TIME_STRING_FORMAT,
      strtotime('-3 day'));

  // Create bind variables.
  $vars = MapUtils::GetMapEntries(array('orderId' => new NumberValue($orderId),
      'threeDaysAgo' => new TextValue($threeDaysAgo)));

  // Create statement object to only select line items belonging to the order
  // and have been modified in the last 3 days.
  $filterStatement = new Statement("WHERE orderId = :orderId "
      . "AND lastModifiedDateTime >= :threeDaysAgo "
      . "LIMIT 500", $vars);

  // Get line items by statement.
  $page = $lineItemService->getLineItemsByStatement($filterStatement);

  // Display results.
  if (isset($page->results)) {
    $i = $page->startIndex;
    foreach ($page->results as $lineItem) {
      // Format lastModifiedDateTime for printing.
      $lastModifiedDateTime =
          DateTimeUtils::GetDateTime($lineItem->lastModifiedDateTime);
      $lastModifiedDateTimeText = $lastModifiedDateTime
          ->format(DateTimeUtils::$DFP_DATE_TIME_STRING_FORMAT);

      print $i . ') Line item with ID "'
          . $lineItem->id . '", belonging to order ID "'
          . $lineItem->orderId . '", with name "' . $lineItem->name
          . '", and last modified ' . $lastModifiedDateTimeText
          . " was found.\n";
      $i++;
    }
  }

  print 'Number of results found: ' . $page->totalResultSetSize . "\n";
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

