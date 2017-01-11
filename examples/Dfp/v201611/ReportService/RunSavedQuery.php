<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
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
namespace Google\AdsApi\Examples\Dfp\v201611\ReportService;

require '../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201611\ReportDownloader;
use Google\AdsApi\Dfp\Util\v201611\StatementBuilder;
use Google\AdsApi\Dfp\v201611\ExportFormat;
use Google\AdsApi\Dfp\v201611\ReportJob;
use Google\AdsApi\Dfp\v201611\ReportQuery;
use Google\AdsApi\Dfp\v201611\ReportQueryAdUnitView;
use Google\AdsApi\Dfp\v201611\ReportService;
use UnexpectedValueException;

/**
 * This example retrieves and runs a saved report query.
 */
class RunSavedQuery {

  const SAVED_QUERY_ID = 'INSERT_SAVED_QUERY_ID_HERE';

  public static function runExample(DfpServices $dfpServices,
      DfpSession $session, $savedQueryId) {
    $reportService = $dfpServices->get($session, ReportService::class);

    // Create statement to retrieve the saved query.
    $statementBuilder = (new StatementBuilder())
        ->where('id = :id')
        ->orderBy('id ASC')
        ->limit(1)
        ->withBindVariableValue('id', $savedQueryId);

    $savedQueryPage = $reportService->getSavedQueriesByStatement(
        $statementBuilder->toStatement());
    $savedQuery = $savedQueryPage->getResults()[0];

    if ($savedQuery->getIsCompatibleWithApiVersion() === false) {
      throw new UnexpectedValueException(
          'The saved query is not compatible with this API version.');
    }

    // Optionally modify the query.
    $reportQuery = $savedQuery->getReportQuery();
    $reportQuery->setAdUnitView(ReportQueryAdUnitView::HIERARCHICAL);

    // Create report job using the saved query.
    $reportJob = new ReportJob();
    $reportJob->setReportQuery($reportQuery);

    $reportJob = $reportService->runReportJob($reportJob);

    // Create report downloader to poll report's status and download when ready.
    $reportDownloader =
        new ReportDownloader($reportService, $reportJob->getId());
    if ($reportDownloader->waitForReportToFinish()) {
      // Write to system temp directory by default.
      $filePath = sprintf(
          '%s.csv.gz',
          tempnam(sys_get_temp_dir(), 'saved-report-')
      );
      printf("Downloading report to %s ...\n", $filePath);
      // Download the report.
      $reportDownloader->downloadReport(ExportFormat::CSV_DUMP, $filePath);
      print "done.\n";
    } else {
      print "Report failed.\n";
    }
  }

  public static function main() {
    $oAuth2Credential = (new OAuth2TokenBuilder())
        ->fromFile()
        ->build();
    $session = (new DfpSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential)
        ->build();
    self::runExample(new DfpServices(), $session, intval(self::SAVED_QUERY_ID));
  }
}

RunSavedQuery::main();
