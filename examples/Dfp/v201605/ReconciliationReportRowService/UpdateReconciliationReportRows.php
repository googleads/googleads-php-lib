<?php
/**
 * This example updates a reconciliation report row.
 *
 * To get reconciliation report rows for a reconciliation report, run
 * GetReconciliationReportRowsForReconciliationReport.php.
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

// Set the ID of the reconciliation report and the row to update.
$reconciliationReportId = 'INSERT_RECONCILIATION_REPORT_ID_HERE';
$reconciliationReportRowId = 'INSERT_RECONCILIATION_REPORT_ROW_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the ReconciliationReportRowService.
  $reconciliationReportRowService =
      $user->GetService('ReconciliationReportRowService', 'v201605');

  // Create a statement to select a reconciliation report rows.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->Where('reconciliationReportId = :reconciliationReportId '
      . 'AND id = :reconciliationReportRowId')
      ->Limit(1)
      ->WithBindVariableValue(
          'reconciliationReportId', $reconciliationReportId)
      ->WithBindVariableValue(
          'reconciliationReportRowId', $reconciliationReportRowId);

  // Get reconciliation report rows by statement.
  $page = $reconciliationReportRowService
      ->getReconciliationReportRowsByStatement(
          $statementBuilder->ToStatement());
  $row = $page->results[0];

  // Set a comment on the reconciliation report row.
  $row->comments = 'Third party volume didn\'t match DFP - we agreed to split '
      . 'the difference';

  // Set and use a manual volume for billing.
  $row->manualVolume = ($row->dfpVolume + $row->thirdPartyVolume) / 2;
  $row->reconciliationSource = 'MANUAL';

  // Update the reconciliation report rows on the server.
  $updatedRows = $reconciliationReportRowService
      ->updateReconciliationReportRows(array($row));

  foreach ($updatedRows as $updatedRow) {
    printf(
        "Reconciliation report row with ID %d for line item ID %d and creative "
            . "ID %d was updated, with manual volume %d.\n",
        $updatedRow->id,
        $updatedRow->lineItemId,
        $updatedRow->creativeId,
        $updatedRow->manualVolume
    );
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

