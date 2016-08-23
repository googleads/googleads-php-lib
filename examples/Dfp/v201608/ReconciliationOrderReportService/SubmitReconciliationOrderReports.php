<?php
/**
 * This example submits a reconciliation order report. To get all reconciliation
 * order reports for a reconciliation report, run
 * GetReconciliationOrderReportsForReconciliationReport.php.
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

// Set the ID of the reconciliation order report to submit.
$reconciliationOrderReportId = 'INSERT_RECONCILIATION_ORDER_REPORT_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the ReconciliationOrderReportService.
  $reconciliationOrderReportService =
      $user->GetService('ReconciliationOrderReportService', 'v201608');

  // Create a statement to select reconciliation order reports.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->Where('id = :id')
      ->OrderBy('id ASC')
      ->Limit(1)
      ->WithBindVariableValue('id', $reconciliationOrderReportId);

  // Default for total result set size.
  $totalResultSetSize = 0;

  do {
    // Get reconciliation order reports by statement.
    $page = $reconciliationOrderReportService
        ->getReconciliationOrderReportsByStatement(
            $statementBuilder->ToStatement());

    // Display results.
    if (isset($page->results)) {
      $totalResultSetSize = $page->totalResultSetSize;
      $i = $page->startIndex;
      foreach ($page->results as $reconciliationOrderReport) {
        printf(
            "%d) Reconciliation order report with ID %d will be submitted.\n",
            $reconciliationOrderReport->id
        );
      }
    }

    $statementBuilder->IncreaseOffsetBy(StatementBuilder::SUGGESTED_PAGE_LIMIT);
  } while ($statementBuilder->GetOffset() < $totalResultSetSize);

  printf("Number of reconciliation order reports to be submitted: %d\n",
      $totalResultSetSize);

  if ($totalResultSetSize > 0) {
    // Remove limit and offset from statement.
    $statementBuilder->RemoveLimitAndOffset();

    // Create action.
    $action = new SubmitReconciliationOrderReports();

    // Perform action.
    $result = $reconciliationOrderReportService
        ->performReconciliationOrderReportAction(
            $action,
            $statementBuilder->ToStatement()
        );

    // Display results.
    if (isset($result) && $result->numChanges > 0) {
      printf("Number of reconciliation order reports submitted: %d\n",
          $result->numChanges);
    } else {
      printf("No reconciliation order reports were submitted.\n");
    }
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

