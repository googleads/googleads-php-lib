<?php
/**
 * Copyright 2017 Google Inc. All Rights Reserved.
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
 */
namespace Google\AdsApi\Examples\AdWords\v201708\Reporting;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\ReportSettingsBuilder;
use Google\AdsApi\AdWords\Reporting\v201708\DownloadFormat;
use Google\AdsApi\AdWords\Reporting\v201708\ReportDefinition;
use Google\AdsApi\AdWords\Reporting\v201708\ReportDefinitionDateRangeType;
use Google\AdsApi\AdWords\Reporting\v201708\ReportDownloader;
use Google\AdsApi\AdWords\v201708\cm\ApiException;
use Google\AdsApi\AdWords\v201708\cm\Paging;
use Google\AdsApi\AdWords\v201708\cm\Predicate;
use Google\AdsApi\AdWords\v201708\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201708\cm\ReportDefinitionReportType;
use Google\AdsApi\AdWords\v201708\cm\Selector;
use Google\AdsApi\AdWords\v201708\mcm\ManagedCustomerService;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets and downloads an Ad Hoc report from an XML report
 * definition for all accounts directly under a manager account.
 * This example should be run against an AdWords manager account.
 *
 * Although the example's name is `ParallelReportDownload`, it doesn't download
 * reports in parallel as this client library doesn't support multithreading.
 * It is named so to be consistent with other client libraries.
 */
class ParallelReportDownload {

  // Timeout between retries in seconds.
  const BACKOFF_FACTOR = 5;

  // Maximum number of retries for 500 errors.
  const MAX_RETRIES = 5;

  // The number of entries per page of the results.
  const PAGE_LIMIT = 500;

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSessionBuilder $sessionBuilder, $reportDir) {
    // Construct an API session for the client customer ID specified in the
    // configuration file.
    $session = $sessionBuilder->build();

    // Create selector.
    $selector = new Selector();
    $selector->setFields(
        ['CampaignId', 'AdGroupId', 'Impressions', 'Clicks', 'Cost']);

    // Create report definition.
    $reportDefinition = new ReportDefinition();
    $reportDefinition->setSelector($selector);
    $reportDefinition->setReportName('Custom ADGROUP_PERFORMANCE_REPORT');
    $reportDefinition->setDateRangeType(
        ReportDefinitionDateRangeType::LAST_7_DAYS);
    $reportDefinition->setReportType(
        ReportDefinitionReportType::ADGROUP_PERFORMANCE_REPORT);
    $reportDefinition->setDownloadFormat(DownloadFormat::CSV);

    $customerIds = self::getAllManagedCustomerIds($adWordsServices, $session);
    printf("Downloading reports for %d managed customers.\n",
        count($customerIds));

    $successfulReports = [];
    $failedReports = [];

    foreach ($customerIds as $customerId) {
      $filePath = sprintf('%s%sadgroup_%d.csv', $reportDir,
          DIRECTORY_SEPARATOR, $customerId);

      // Construct an API session for the specified client customer ID.
      $session = $sessionBuilder->withClientCustomerId($customerId)->build();
      $reportDownloader = new ReportDownloader($session);

      $retryCount = 0;
      $doContinue = true;
      do {
        $retryCount++;
        try {
          // Optional: If you need to adjust report settings just for this one
          // request, you can create and supply the settings override here.
          // Otherwise, default values from the configuration file
          // (adsapi_php.ini) are used.
          $reportSettingsOverride = (new ReportSettingsBuilder())
              ->includeZeroImpressions(false)
              ->build();
          $reportDownloadResult = $reportDownloader->downloadReport(
              $reportDefinition, $reportSettingsOverride);
          $reportDownloadResult->saveToFile($filePath);
          printf(
              "Report for client customer ID %d successfully downloaded to: "
                  . "%s\n",
              $customerId,
              $filePath
          );
          $successfulReports[$customerId] = $filePath;
          $doContinue = false;
        } catch (ApiException $e) {
          printf(
              "Report attempt #%d for client customer ID %d was not downloaded"
                  . " due to: %s\n",
              $retryCount,
              $customerId,
              $e->getMessage()
          );

          // If this is a server error, retry up to the defined maximum number
          // of retries.
          if ($e->getErrors() === null && $retryCount < self::MAX_RETRIES) {
            $sleepTime = $retryCount * self::BACKOFF_FACTOR;
            printf(
                "Sleeping %d seconds before retrying report for client customer"
                    . " ID %d.\n",
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
   * To set clientCustomerId to any manager account you want to get
   * reports for its client accounts, use `AdWordsSessionBuilder` to
   * create new session.
   */
  private static function getAllManagedCustomerIds(
      AdWordsServices $adWordsServices, AdWordsSession $session) {
    $managedCustomerService =
        $adWordsServices->get($session, ManagedCustomerService::class);

    $selector = new Selector();
    $selector->setFields(['CustomerId']);
    $selector->setPaging(new Paging(0, self::PAGE_LIMIT));
    $selector->setPredicates([new Predicate('CanManageClients',
        PredicateOperator::EQUALS, ['false'])]);

    $customerIds = [];
    $totalNumEntries = 0;
    do {
      $page = $managedCustomerService->get($selector);
      if ($page->getEntries() !== null) {
        $totalNumEntries = $page->getTotalNumEntries();
        foreach ($page->getEntries() as $customer) {
          $customerIds[] = $customer->getCustomerId();
        }
      }
      $selector->getPaging()->setStartIndex(
          $selector->getPaging()->getStartIndex() + self::PAGE_LIMIT);
    } while ($selector->getPaging()->getStartIndex() < $totalNumEntries);

    return $customerIds;
  }

  public static function main() {
    // Generate a refreshable OAuth2 credential for authentication.
    $oAuth2Credential = (new OAuth2TokenBuilder())
        ->fromFile()
        ->build();

    // See: AdWordsSessionBuilder for setting a client customer ID that is
    // different from that specified in your adsapi_php.ini file.
    $sessionBuilder = (new AdWordsSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential);

    self::runExample(new AdWordsServices(), $sessionBuilder,
        sys_get_temp_dir());
  }
}

ParallelReportDownload::main();
