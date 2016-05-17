<?php
/**
 * This example runs a typical delivery report for a single order.
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
require_once 'Google/Api/Ads/Dfp/Util/v201605/DateTimeUtils.php';
require_once 'Google/Api/Ads/Dfp/Util/v201605/ReportDownloader.php';
require_once 'Google/Api/Ads/Dfp/Util/v201605/StatementBuilder.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

// Set the ID of the order to run the report for.
$orderId = 'INSERT_ORDER_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the ReportService.
  $reportService = $user->GetService('ReportService', 'v201605');

  // Create report query.
  $reportQuery = new ReportQuery();
  $reportQuery->dimensions = array('ORDER_ID', 'ORDER_NAME');
  $reportQuery->dimensionAttributes = array('ORDER_TRAFFICKER',
      'ORDER_START_DATE_TIME', 'ORDER_END_DATE_TIME');
  $reportQuery->columns = array('AD_SERVER_IMPRESSIONS', 'AD_SERVER_CLICKS',
      'AD_SERVER_CTR', 'AD_SERVER_CPM_AND_CPC_REVENUE', 
      'AD_SERVER_WITHOUT_CPD_AVERAGE_ECPM');

  // Create statement to filter for an order.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->Where('order_id = :orderId')->WithBindVariableValue(
      'orderId', $orderId);

  // Set the filter statement.
  $reportQuery->statement = $statementBuilder->ToStatement();

  // Set the start and end dates or choose a dynamic date range type.
  $reportQuery->dateRangeType = 'CUSTOM_DATE';
  $reportQuery->startDate = DateTimeUtils::ToDfpDateTime(
      new DateTime('-10 days', new DateTimeZone('America/New_York')))->date;
  $reportQuery->endDate = DateTimeUtils::ToDfpDateTime(
      new DateTime('now', new DateTimeZone('America/New_York')))->date;

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
      'delivery-report-'));

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

