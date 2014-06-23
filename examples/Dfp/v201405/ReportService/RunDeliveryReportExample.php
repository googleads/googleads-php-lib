<?php
/**
 * This example runs a report similar to the "Orders report" on the DFP website
 * with additional attributes and can filter to include just one order. To
 * download the report see DownloadReportExample.php.
 *
 * Tags: ReportService.runReportJob
 * Tags: ReportService.queryReportJob
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
 * @subpackage v201405
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
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

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the ReportService.
  $reportService = $user->GetService('ReportService', 'v201405');

  // Set the order id to report on.
  $order_id = 'INSERT_ORDER_ID_HERE';

  // Create bind variables.
  $vars =
      MapUtils::GetMapEntries(array('orderId' => new NumberValue($order_id)));

  // Create statement text to filter based on an order id.
  $filterStatementText = 'WHERE order_id = :orderId';

  // Create statement object from text.
  $filterStatement = new Statement($filterStatementText, $vars);

  // Create report job.
  $reportJob = new ReportJob();

  // Create report query.
  $reportQuery = new ReportQuery();
  $reportQuery->dateRangeType = 'LAST_MONTH';
  $reportQuery->dimensions = array('ORDER_ID', 'ORDER_NAME');
  $reportQuery->dimensionAttributes = array('ORDER_TRAFFICKER',
      'ORDER_START_DATE_TIME', 'ORDER_END_DATE_TIME');
  $reportQuery->columns = array('AD_SERVER_IMPRESSIONS', 'AD_SERVER_CLICKS',
      'AD_SERVER_CTR', 'AD_SERVER_CPM_AND_CPC_REVENUE', 
      'AD_SERVER_WITHOUT_CPD_AVERAGE_ECPM');
  $reportQuery->statement = $filterStatement;
  $reportJob->reportQuery = $reportQuery;

  // Run report job.
  $reportJob = $reportService->runReportJob($reportJob);

  do {
    printf("Report with ID '%s' is running.\n", $reportJob->id);
    sleep(30);
    // Get report job.
    $reportJob = $reportService->getReportJob($reportJob->id);
  } while ($reportJob->reportJobStatus == 'IN_PROGRESS');

  if ($reportJob->reportJobStatus == 'FAILED') {
    printf("Report job with ID '%s' failed to finish successfully.\n",
        $reportJob->id);
  } else {
    printf("Report job with ID '%s' completed successfully.\n", $reportJob->id);
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

