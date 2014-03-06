<?php
/**
 * This example activates all line items for the given order. To be activated,
 * line items need to be in the approved (needs creatives) state and have at
 * least one creative associated with them. To approve line items, approve the
 * order to which they belong by running ApproveOrdersExample.php. To create
 * LICAs, run CreateLicasExample.php. To determine which line items exist, run
 * GetAllLineItemsExample.php.
 *
 * Tags: LineItemService.updateLineItemCreativeAssociations
 * Tags: LineItemService.performLineItemAction
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
 * @subpackage v201311
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
require_once 'Google/Api/Ads/Common/Util/MapUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the LineItemService.
  $lineItemService = $user->GetService('LineItemService', 'v201311');

  // Set the ID of the order to get line items from.
  $orderId = 'INSERT_ORDER_ID_HERE';

  // Create bind variables.
  $vars = MapUtils::GetMapEntries(
      array('orderId' => new NumberValue($orderId)));

  // Create statement text to select approved line items from a given order.
  $filterStatementText =
      "WHERE orderId = :orderId AND status = 'NEEDS_CREATIVES'";

  $offset = 0;

  do {
    // Create statement to page through results.
    $filterStatement =
        new Statement($filterStatementText . " LIMIT 500 OFFSET " . $offset,
            $vars);

    // Get line items by statement.
    $page = $lineItemService->getLineItemsByStatement($filterStatement);

    // Display results.
    $lineItemIds = array();
    if (isset($page->results)) {
      $i = $page->startIndex;
      foreach ($page->results as $lineItem) {
        // Archived line items cannot be activated.
        if (!$lineItem->isArchived) {
          print $i . ') Line item with ID "'
              . $lineItem->id . '", belonging to order ID "'
              . $lineItem->orderId . '", and name "' . $lineItem->name
              . "\" will be activated.\n";
          $i++;
          $lineItemIds[] = $lineItem->id;
        }
      }
    }

    $offset += 500;
  } while ($offset < $page->totalResultSetSize);

  print 'Number of line items to be activated: ' . sizeof($lineItemIds) . "\n";

  if (sizeof($lineItemIds) > 0) {
    // Create action statement.
    $filterStatementText =
        sprintf('WHERE id IN (%s)', implode(',', $lineItemIds));
    $filterStatement = new Statement($filterStatementText);

    // Create action.
    $action = new ActivateLineItems();

    // Perform action.
    $result =
        $lineItemService->performLineItemAction($action, $filterStatement);

    // Display results.
    if (isset($result) && $result->numChanges > 0) {
      print 'Number of line items activated: ' . $result->numChanges . "\n";
    } else {
      print "No line items were activated.\n";
    }
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

