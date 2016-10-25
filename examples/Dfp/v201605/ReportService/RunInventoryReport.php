<?php
/**
 * This example runs a typical daily inventory report.
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
 * @subpackage v201605
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
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
require_once 'Google/Api/Ads/Dfp/Util/v201605/ReportDownloader.php';
require_once 'Google/Api/Ads/Dfp/Util/v201605/StatementBuilder.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the ReportService.
  $reportService = $user->GetService('ReportService', 'v201605');

  // Get the NetworkService.
  $networkService = $user->GetService('NetworkService', 'v201605');

  // Get the root ad unit ID to filter on.
  $rootAdUnitId =
      $networkService->getCurrentNetwork()->effectiveRootAdUnitId;

  // Create statement to filter on a parent ad unit with the root ad unit ID to
  // include all ad units in the network.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->Where('PARENT_AD_UNIT_ID = :parentAdUnitId')
      ->WithBindVariableValue('parentAdUnitId', floatval($rootAdUnitId));

  // Create report query.
  $reportQuery = new ReportQuery();
  $reportQuery->dimensions = array('AD_UNIT_ID', 'AD_UNIT_NAME');
  $reportQuery->columns = array('AD_SERVER_IMPRESSIONS', 'AD_SERVER_CLICKS',
      'DYNAMIC_ALLOCATION_INVENTORY_LEVEL_IMPRESSIONS',
      'DYNAMIC_ALLOCATION_INVENTORY_LEVEL_CLICKS',
      'TOTAL_INVENTORY_LEVEL_IMPRESSIONS',
      'TOTAL_INVENTORY_LEVEL_CPM_AND_CPC_REVENUE');

  // Set the filter statement.
  $reportQuery->statement = $statementBuilder->ToStatement();

  // Set the ad unit view to hierarchical.
  $reportQuery->adUnitView = 'HIERARCHICAL';

  // Set the start and end dates or choose a dynamic date range type.
  $reportQuery->dateRangeType = 'YESTERDAY';

  // Create report job.
  $reportJob = new ReportJob();
  $reportJob->reportQuery = $reportQuery;

  // Run report job.
  $reportJob = $reportService->runReportJob($reportJob);

  // Create report downloader.
  $reportDownloader = new ReportDownloader($reportService, $reportJob->id);

  // Wait for the report to be ready.
  $reportDownloader->waitForReportReady();

  // Change to your file location.
  $filePath = sprintf('%s.csv.gz', tempnam(sys_get_temp_dir(),
      'inventory-report-'));

  printf("Downloading report to %s ...\n", $filePath);

  // Download the report.
  $reportDownloader->downloadReport('CSV_DUMP', $filePath);

  printf("done.\n");
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

