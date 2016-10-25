<?php
/**
 * This example updates a reconciliation line item report.
 *
 * To get reconciliation line item reports for a reconciliation report, run
 * GetReconciliationLineItemReportsForReconciliationReport.php.
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
 * @subpackage v201605
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
require_once 'Google/Api/Ads/Dfp/Util/v201605/StatementBuilder.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

// Set the ID of the reconciliation line item report to retrieve.
$reconciliationLineItemReportId =
    'INSERT_RECONCILIATION_LINE_ITEM_REPORT_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the ReconciliationLineItemReportService.
  $reconciliationLineItemReportService =
      $user->GetService('ReconciliationLineItemReportService', 'v201605');

  // Create a statement to select a reconciliation line item report.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->Where('id = :lineItemReportId')
      ->OrderBy('id ASC')
      ->Limit(1)
      ->WithBindVariableValue('lineItemReportId',
          $reconciliationLineItemReportId);

  // Get reconciliation line item reports by statement.
  $page = $reconciliationLineItemReportService
      ->getReconciliationLineItemReportsByStatement(
          $statementBuilder->ToStatement());
  $lineItemReport = $page->results[0];

  // Set and use a manual volume for billing. This example splits the difference
  // between DFP and the third party volume.
  $lineItemReport->manualVolume =
      ($lineItemReport->dfpVolume + $lineItemReport->thirdPartyVolume) / 2;
  $lineItemReport->reconciliationSource = 'MANUAL';

  // Update the reconciliation line item report on the server.
  $updatedLineItemReports = $reconciliationLineItemReportService
      ->updateReconciliationLineItemReports(array($lineItemReport));

  foreach ($updatedLineItemReports as $updatedLineItemReport) {
    printf(
        "Reconciliation line item report with ID %d for line item ID %d was "
        . "updated, with manual volume %d.\n",
        $updatedLineItemReport->id,
        $updatedLineItemReport->lineItemId,
        $updatedLineItemReport->manualVolume
    );
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

