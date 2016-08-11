<?php
/**
 * This example gets and downloads an Ad Hoc report from an XML report
 * definition for all accounts directly under a manager account.
 * This example should be run against an AdWords manager account.
 *
 * Although the example's name is `ParallelReportDownload`, it doesn't download
 * reports in parallel as this client lib isn't built to support multithreading.
 * It is named so to be consistent with other client libs.
 *
 * Copyright 2016, Google Inc. All Rights Reserved.
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
 * @package    GoogleApiAdsAdWords
 * @subpackage v201607
 * @category   WebServices
 * @copyright  2015, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

require_once dirname(dirname(__FILE__)) . '/init.php';
require_once ADWORDS_UTIL_VERSION_PATH . '/ReportUtils.php';
define('MAX_RETRIES', 5);
define('BACKOFF_FACTOR', 5);

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 */
function ParallelReportDownloadExample(AdWordsUser $user) {
  // Load the service, so that the required classes are available.
  $user->LoadService('ReportDefinitionService', ADWORDS_VERSION);

  // Create selector.
  $selector = new Selector();
  $selector->fields =
      array('CampaignId', 'AdGroupId', 'Impressions', 'Clicks', 'Cost');

  // Create report definition.
  $reportDefinition = new ReportDefinition();
  $reportDefinition->selector = $selector;
  $reportDefinition->reportName = 'Custom ADGROUP_PERFORMANCE_REPORT';
  $reportDefinition->dateRangeType = 'LAST_7_DAYS';
  $reportDefinition->reportType = 'ADGROUP_PERFORMANCE_REPORT';
  $reportDefinition->downloadFormat = 'CSV';

  // Set additional options.
  $options = array('version' => ADWORDS_VERSION);

  // Optional: Set skipReportHeader, skipColumnHeader, skipReportSummary to
  //     suppress headers or summary rows.
  // $options['skipReportHeader'] = true;
  // $options['skipColumnHeader'] = true;
  // $options['skipReportSummary'] = true;
  //
  // Optional: Set useRawEnumValues to return enum values instead of enum
  //     display values.
  // $options['useRawEnumValues'] = true;
  //
  // Optional: Set includeZeroImpressions to include zero impression rows in
  //     the report output.
  // $options['includeZeroImpressions'] = true;

  $customerIds = getAllManagedCustomerIds($user);
  printf("Downloading reports for %d managed customers.\n",
      count($customerIds));

  $successfulReports = array();
  $failedReports = array();
  $reportDir = sys_get_temp_dir();
  $reportUtils = new ReportUtils();

  foreach ($customerIds as $customerId) {
    $filePath = sprintf('%s.csv', tempnam($reportDir, 'adgroup_'));
    $user->SetClientCustomerId($customerId);

    $retryCount = 0;
    $doContinue = true;
    do {
      $retryCount++;
      try {
        $reportUtils->DownloadReport($reportDefinition, $filePath, $user,
            $options);
        printf(
            "Report for client customer ID %d successfully downloaded to: %s\n",
            $customerId,
            $filePath
        );
        $successfulReports[$customerId] = $filePath;
        $doContinue = false;
      } catch (ReportDownloadException $e) {
        printf(
            "Report attempt #%d for client customer ID %d was not downloaded"
                . " due to: %s\n",
            $retryCount,
            $customerId,
            $e->getMessage()
        );

        if ($e->GetHttpCode() >= 500 && $retryCount < MAX_RETRIES) {
          $sleepTime = $retryCount * BACKOFF_FACTOR;
          printf(
              "Sleeping %d seconds before retrying report for client customer "
                  . "ID %d.\n",
              $sleepTime,
              $customerId
          );
          sleep($sleepTime);
        } else {
          printf(
              "Report request failed for client customer ID %d.\n",
              $customerId
          );
          $failedReports[$customerId] = $filePath;
          $doContinue = false;
        }

      }
    } while ($doContinue === true);
  }

  print "All downloads completed. Results:\n";
  print "Successful reports:\n";
  foreach ($successfulReports as $customerId => $filePath) {
    printf("\tClient ID %d => '%s'\n", $customerId, $filePath);
  }
  print "Failed reports:\n";
  foreach ($failedReports as $customerId => $filePath) {
    printf("\tClient ID %d => '%s'\n", $customerId, $filePath);
  }
  print "End of results.\n";
}

/**
 * Retrieves all the customer IDs under a manager account.
 *
 * @param AdWordsUser $user the user to run the example with
 * @return array the list of customer IDs under a manager account
 */
function getAllManagedCustomerIds(AdWordsUser $user) {
  // Optional: Set clientCustomerId to any manager account you want to get
  //     reports for its client accounts.
  // $user->SetClientCustomerId('INSERT_CLIENT_CUSTOMER_ID_HERE');
  $managedCustomerService =
      $user->GetService('ManagedCustomerService', ADWORDS_VERSION);

  $selector = new Selector();
  $selector->fields = array('CustomerId');
  $selector->paging = new Paging(0, AdWordsConstants::RECOMMENDED_PAGE_SIZE);
  $selector->predicates[] =
      new Predicate('CanManageClients', 'EQUALS', 'false');

  $customerIds = array();
  do {
    $page = $managedCustomerService->get($selector);
    if (isset($page->entries)) {
      foreach ($page->entries as $customer) {
        $customerIds[] = $customer->customerId;
      }
    }
    $selector->paging->startIndex += AdWordsConstants::RECOMMENDED_PAGE_SIZE;
  } while ($selector->paging->startIndex < $page->totalNumEntries);

  return $customerIds;
}

// Don't run the example if the file is being included.
if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
  return;
}

try {
  // Get AdWordsUser from credentials in "../auth.ini"
  // relative to the AdWordsUser.php file's directory.
  $user = new AdWordsUser();

  // Log every SOAP XML request and response.
  $user->LogAll();

  // Run the example.
  ParallelReportDownloadExample($user);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
