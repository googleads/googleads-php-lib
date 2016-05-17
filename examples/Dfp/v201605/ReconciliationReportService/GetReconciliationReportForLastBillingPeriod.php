<?php
/**
 * This example gets the previous billing period's reconciliation report.
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
require_once 'Google/Api/Ads/Dfp/Util/v201605/DateTimeUtils.php';
require_once 'Google/Api/Ads/Dfp/Util/v201605/StatementBuilder.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the ReconciliationReportService.
  $reconciliationReportService =
      $user->GetService('ReconciliationReportService', 'v201605');

  // Get the NetworkService.
  $networkService = $user->GetService('NetworkService', 'v201605');
  $network = $networkService->getCurrentNetwork();

  // Create a statement to select the last month's reconciliation report.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->Where('startDate = :startDate')
      ->OrderBy('id ASC')
      ->Limit(1)
      ->WithBindVariableValue(
          'startDate',
          DateTimeUtils::ToString(DateTimeUtils::ToDfpDateTime(new DateTime(
              'first day of last month',
              new DateTimeZone($network->timeZone)
          ))->date)
      );

  // Default for total result set size.
  $totalResultSetSize = 0;

  do {
    // Get reconciliation reports by statement.
    $page = $reconciliationReportService->
        getReconciliationReportsByStatement(
            $statementBuilder->ToStatement());

    // Display results.
    if (isset($page->results)) {
      $totalResultSetSize = $page->totalResultSetSize;
      $i = $page->startIndex;
      foreach ($page->results as $reconciliationReport) {
        printf(
            "%d) Reconciliation report with ID %d for month %s/%s was found.\n",
            $i++,
            $reconciliationReport->id,
            $reconciliationReport->startDate->month,
            $reconciliationReport->startDate->year
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

