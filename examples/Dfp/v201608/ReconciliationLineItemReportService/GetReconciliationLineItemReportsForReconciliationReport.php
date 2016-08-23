<?php
/**
 * This example gets a reconciliation report's data for line items that served
 * through DFP.
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
 * @subpackage v201608
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
require_once 'Google/Api/Ads/Dfp/Util/v201608/StatementBuilder.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

// Set the ID of the reconciliation report to retrieve line item reports for.
$reconciliationReportId = 'INSERT_RECONCILIATION_REPORT_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the ReconciliationLineItemReportService.
  $reconciliationLineItemReportService =
      $user->GetService('ReconciliationLineItemReportService', 'v201608');

  // Create a statement to select reconciliation line item reports for DFP line
  // items.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->Where('reconciliationReportId = :reconciliationReportId '
      . 'AND lineItemId != :lineItemId')
      ->OrderBy('lineItemId ASC')
      ->Limit(StatementBuilder::SUGGESTED_PAGE_LIMIT)
      ->WithBindVariableValue(
          'reconciliationReportId', $reconciliationReportId)
      ->WithBindVariableValue('lineItemId', 0);

  // Default for total result set size.
  $totalResultSetSize = 0;

  do {
    // Get reconciliation line item reports by statement.
    $page = $reconciliationLineItemReportService->
        getReconciliationLineItemReportsByStatement(
            $statementBuilder->ToStatement());

    // Display results.
    if (isset($page->results)) {
      $totalResultSetSize = $page->totalResultSetSize;
      $i = $page->startIndex;
      foreach ($page->results as $reconciliationLineItemReport) {
        printf(
            "%d) Reconciliation line item report with ID %d for line item ID "
                . "%d was found, with reconciliation source '%s' and "
                . "reconciled volume '%d'.\n",
            $i++,
            $reconciliationLineItemReport->id,
            $reconciliationLineItemReport->lineItemId,
            $reconciliationLineItemReport->reconciliationSource,
            $reconciliationLineItemReport->reconciledVolume
        );
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

