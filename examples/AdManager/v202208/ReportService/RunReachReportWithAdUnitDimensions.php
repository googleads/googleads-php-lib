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

namespace Google\AdsApi\Examples\AdManager\v202208\ReportService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v202208\ReportDownloader;
use Google\AdsApi\AdManager\v202208\Column;
use Google\AdsApi\AdManager\v202208\DateRangeType;
use Google\AdsApi\AdManager\v202208\Dimension;
use Google\AdsApi\AdManager\v202208\ExportFormat;
use Google\AdsApi\AdManager\v202208\ReportJob;
use Google\AdsApi\AdManager\v202208\ReportQuery;
use Google\AdsApi\AdManager\v202208\ReportQueryAdUnitView;
use Google\AdsApi\AdManager\v202208\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example runs a reach report with ad unit dimensions.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class RunReachReportWithAdUnitDimensions
{

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session
    ) {
        $reportService = $serviceFactory->createReportService($session);

        // Create report query.
        $reportQuery = new ReportQuery();
        $reportQuery->setAdUnitView(ReportQueryAdUnitView::FLAT);
        $reportQuery->setDimensions(
            [
                Dimension::MONTH_AND_YEAR,
                Dimension::COUNTRY_NAME,
                Dimension::AD_UNIT_ID,
                Dimension::AD_UNIT_NAME
            ]
        );
        $reportQuery->setColumns(
            [
                Column::UNIQUE_REACH_FREQUENCY,
                Column::UNIQUE_REACH_IMPRESSIONS,
                Column::UNIQUE_REACH
            ]
        );

        $reportQuery->setDateRangeType(DateRangeType::LAST_MONTH);

        // Create report job.
        $reportJob = new ReportJob();
        $reportJob->setReportQuery($reportQuery);

        // Run report job.
        $reportJob = $reportService->runReportJob($reportJob);

        // Create report downloader to poll report's status and download when
        // ready.
        $reportDownloader = new ReportDownloader(
            $reportService,
            $reportJob->getId()
        );
        if ($reportDownloader->waitForReportToFinish()) {
            // Write to system temp directory by default.
            $filename = tempnam(sys_get_temp_dir(),
                'reach-report-with-ad-unit-dimensions');
            $filePath = sprintf(
                '%s.csv.gz',
                $filename
            );
            printf("Downloading report to %s ...%s", $filePath, PHP_EOL);
            // Download the report.
            $reportDownloader->downloadReport(
                ExportFormat::CSV_DUMP,
                $filePath
            );
            print "Done.\n";
        } else {
            print "Report failed.\n";
        }
    }

    public static function main()
    {
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()
            ->build();
        $session = (new AdManagerSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();
        self::runExample(new ServiceFactory(), $session);
    }
}

RunReachReportWithAdUnitDimensions::main();
