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

namespace Google\AdsApi\Examples\AdManager\v201802\ReportService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerServices;
use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v201802\ReportDownloader;
use Google\AdsApi\AdManager\v201802\Column;
use Google\AdsApi\AdManager\v201802\DateRangeType;
use Google\AdsApi\AdManager\v201802\Dimension;
use Google\AdsApi\AdManager\v201802\ExportFormat;
use Google\AdsApi\AdManager\v201802\ReportJob;
use Google\AdsApi\AdManager\v201802\ReportQuery;
use Google\AdsApi\AdManager\v201802\ReportService;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example runs a reach report.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class RunReachReport
{

    public static function runExample(
        AdManagerServices $adManagerServices,
        AdManagerSession $session
    ) {
        $reportService = $adManagerServices->get(
            $session,
            ReportService::class
        );

        // Create report query.
        $reportQuery = new ReportQuery();
        $reportQuery->setDimensions(
            [
                Dimension::LINE_ITEM_ID,
                Dimension::LINE_ITEM_NAME
            ]
        );
        $reportQuery->setColumns(
            [
                Column::REACH_FREQUENCY,
                Column::REACH_AVERAGE_REVENUE,
                Column::REACH
            ]
        );

        // Set the dynamic date range type or a custom start and end date that
        // is the beginning of the week (Sunday) to the end of the week
        // (Saturday), or the first of the month to the end of the month.
        $reportQuery->setDateRangeType(DateRangeType::REACH_LIFETIME);

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
            $filePath = sprintf(
                '%s.csv.gz',
                tempnam(sys_get_temp_dir(), 'reach-report-')
            );
            printf("Downloading report to %s ...\n", $filePath);
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
        self::runExample(new AdManagerServices(), $session);
    }
}

RunReachReport::main();
