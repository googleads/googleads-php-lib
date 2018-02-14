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

namespace Google\AdsApi\Examples\Dfp\v201711\ReportService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201711\ReportDownloader;
use Google\AdsApi\Dfp\Util\v201711\StatementBuilder;
use Google\AdsApi\Dfp\v201711\Column;
use Google\AdsApi\Dfp\v201711\DateRangeType;
use Google\AdsApi\Dfp\v201711\Dimension;
use Google\AdsApi\Dfp\v201711\ExportFormat;
use Google\AdsApi\Dfp\v201711\NetworkService;
use Google\AdsApi\Dfp\v201711\ReportJob;
use Google\AdsApi\Dfp\v201711\ReportQuery;
use Google\AdsApi\Dfp\v201711\ReportQueryAdUnitView;
use Google\AdsApi\Dfp\v201711\ReportService;

/**
 * This example runs a typical daily inventory report and saves it in your
 * system's temp directory. It filters on the network's root ad unit ID. This is
 * only to demonstrate filtering for the purposes of this example, as filtering
 * on the root ad unit is equivalent to not filtering on any ad units.
 */
class RunInventoryReport
{

    public static function runExample(
        DfpServices $dfpServices,
        DfpSession $session
    ) {
        $reportService = $dfpServices->get($session, ReportService::class);
        $networkService = $dfpServices->get($session, NetworkService::class);

        // Get the network's root ad unit ID to filter on.
        $rootAdUnitId = $networkService->getCurrentNetwork()
            ->getEffectiveRootAdUnitId();

        // Create statement to filter on a parent ad unit with the root ad unit ID
        // to include all ad units in the network.
        $statementBuilder = (new StatementBuilder())->where('PARENT_AD_UNIT_ID = :parentAdUnitId')
            ->withBindVariableValue('parentAdUnitId', intval($rootAdUnitId));

        // Create report query.
        $reportQuery = new ReportQuery();
        $reportQuery->setDimensions(
            [
                Dimension::AD_UNIT_ID,
                Dimension::AD_UNIT_NAME
            ]
        );
        $reportQuery->setColumns(
            [
                Column::AD_SERVER_IMPRESSIONS,
                Column::AD_SERVER_CLICKS,
                Column::DYNAMIC_ALLOCATION_INVENTORY_LEVEL_IMPRESSIONS,
                Column::DYNAMIC_ALLOCATION_INVENTORY_LEVEL_CLICKS,
                Column::TOTAL_INVENTORY_LEVEL_IMPRESSIONS,
                Column::TOTAL_INVENTORY_LEVEL_CPM_AND_CPC_REVENUE
            ]
        );
        // Set the filter statement.
        $reportQuery->setStatement($statementBuilder->toStatement());
        // Set the ad unit view to hierarchical.
        $reportQuery->setAdUnitView(ReportQueryAdUnitView::HIERARCHICAL);
        // Set the start and end dates or choose a dynamic date range type.
        $reportQuery->setDateRangeType(DateRangeType::YESTERDAY);

        // Create report job and start it.
        $reportJob = new ReportJob();
        $reportJob->setReportQuery($reportQuery);
        $reportJob = $reportService->runReportJob($reportJob);

        // Create report downloader to poll report's status and download when ready.
        $reportDownloader = new ReportDownloader($reportService, $reportJob->getId());
        if ($reportDownloader->waitForReportToFinish()) {
            // Write to system temp directory by default.
            $filePath = sprintf(
                '%s.csv.gz',
                tempnam(sys_get_temp_dir(), 'inventory-report-')
            );
            printf("Downloading report to %s ...\n", $filePath);
            // Download the report.
            $reportDownloader->downloadReport(ExportFormat::CSV_DUMP, $filePath);
            print "done.\n";
        } else {
            print "Report failed.\n";
        }
    }

    public static function main()
    {
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()
            ->build();
        $session = (new DfpSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();
        self::runExample(new DfpServices(), $session);
    }
}

RunInventoryReport::main();
