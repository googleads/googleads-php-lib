<?php
/**
 * This example shows how to get recently updated line items. To create
 * line items, run CreateLineItemsExample.php.
 *
 * Tags: LineItemService.getLineItemsByStatement
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
 * @subpackage v201405
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Vincent Tsao
 */
error_reporting(E_STRICT | E_ALL);

// You can set the include path to src directory or reference
// DfpUser.php directly via require_once.
// $path = '/path/to/dfp_api_php_lib/src';
$path = dirname(__FILE__) . '/../../../../src';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

require_once 'Google/Api/Ads/Dfp/Lib/DfpUser.php';
require_once 'Google/Api/Ads/Dfp/Util/DateTimeUtils.php';
require_once 'Google/Api/Ads/Dfp/Util/StatementBuilder.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the LineItemService.
  $lineItemService = $user->GetService('LineItemService', 'v201405');

  // Create a statement to only select line items updated or created since
  // yesterday.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->Where('lastModifiedDateTime >= :lastModifiedDateTime')
      ->OrderBy('id ASC')
      ->Limit(StatementBuilder::SUGGESTED_PAGE_LIMIT)
      ->WithBindVariableValue('lastModifiedDateTime',
          date(DateTimeUtils::$DFP_DATE_TIME_STRING_FORMAT,
              strtotime('-1 day')));

  // Default for total result set size.
  $totalResultSetSize = 0;

  do {
    // Get line items by statement.
    $page = $lineItemService->getLineItemsByStatement(
        $statementBuilder->ToStatement());

    // Display results.
    if (isset($page->results)) {
      $totalResultSetSize = $page->totalResultSetSize;
      $i = $page->startIndex;
      foreach ($page->results as $lineItem) {
        // Format lastModifiedDateTime for printing.
        $lastModifiedDateTime =
            DateTimeUtils::GetDateTime($lineItem->lastModifiedDateTime);
        $lastModifiedDateTimeText = $lastModifiedDateTime
            ->format(DateTimeUtils::$DFP_DATE_TIME_STRING_FORMAT);

        printf("%d) Line item with ID %d, belonging to order ID %d, with name "
            . "%s, and last modified %s was found.\n", $i++, $lineItem->id,
            $lineItem->orderId, $lineItem->name, $lastModifiedDateTimeText);
      }
    }
    $statementBuilder->IncreaseOffsetBy(StatementBuilder::SUGGESTED_PAGE_LIMIT);
  } while ($statementBuilder->GetOffset() < $totalResultSetSize);
  printf("Number of results found: %d\n", $totalResultSetSize);
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

