<?php
/**
 * This example runs a report that includes custom fields found in the line
 * items of an order. To download the report see DownloadReportExample.php.
 *
 * Tags: ReportService.runReportJob
 * Tags: ReportService.getReportJob
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
 * @author     Vincent Tsao
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

  // Get the LineItemService.
  $lineItemService = $user->GetService('LineItemService', 'v201405');

  // Set the ID of the order to get line items from.
  $orderId = 'INSERT_ORDER_ID_HERE';

  // Set defaults for page and statement.
  $page = new LineItemPage();
  $vars = MapUtils::GetMapEntries(array('orderId' =>
      new NumberValue($orderId)));
  $filterStatement = new Statement(NULL, $vars);
  $offset = 0;

  // Collect all line item custom field IDs for an order.
  $customFieldIds = array();
  do {
    // Create a statement to only select line items from a given order.
    $filterStatement->query = sprintf('WHERE orderId = :orderId LIMIT 500 ' .
        'OFFSET %d', $offset);

    // Get line items by statement.
    $page = $lineItemService->getLineItemsByStatement($filterStatement);

    // Get custom field IDs from the line items of an order.
    if (isset($page->results)) {
      foreach ($page->results as $lineItem) {
        if (isset($lineItem->customFieldValues)) {
          foreach ($lineItem->customFieldValues as $customFieldValue) {
            $customFieldId = $customFieldValue->customFieldId;
            if (!in_array($customFieldId, $customFieldIds)) {
              $customFieldIds[] = $customFieldId;
            }
          }
        }
      }
    }

    $offset += 500;
  } while ($offset < $page->totalResultSetSize);

  // Get the ReportService.
  $reportService = $user->GetService('ReportService', 'v201405');

  // Create report job.
  $reportJob = new ReportJob();

  // Create report query.
  $reportQuery = new ReportQuery();
  $reportQuery->dateRangeType = 'LAST_MONTH';
  $reportQuery->dimensions = array('LINE_ITEM_ID', 'LINE_ITEM_NAME');
  $reportQuery->customFieldIds = $customFieldIds;
  $reportQuery->columns = array('AD_SERVER_IMPRESSIONS');
  $reportJob->reportQuery = $reportQuery;

  // Report on a single order.
  $filterStatement->query = 'WHERE ORDER_ID = :orderId';
  $reportQuery->statement = $filterStatement;

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

