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

namespace Google\AdsApi\Examples\AdManager\v201805\ReportService;

require __DIR__ . '/../../../../vendor/autoload.php';

use DateTime;
use DateTimeZone;
use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v201805\AdManagerDateTimes;
use Google\AdsApi\AdManager\Util\v201805\ReportDownloader;
use Google\AdsApi\AdManager\Util\v201805\StatementBuilder;
use Google\AdsApi\AdManager\v201805\Column;
use Google\AdsApi\AdManager\v201805\DateRangeType;
use Google\AdsApi\AdManager\v201805\Dimension;
use Google\AdsApi\AdManager\v201805\DimensionAttribute;
use Google\AdsApi\AdManager\v201805\ExportFormat;
use Google\AdsApi\AdManager\v201805\ReportJob;
use Google\AdsApi\AdManager\v201805\ReportQuery;
use Google\AdsApi\AdManager\v201805\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Runs a typical delivery report for a single order.
 */
class RunDeliveryReportForOrder
{

    const ORDER_ID = 'INSERT_ORDER_ID_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        $orderId
    ) {
        $reportService = $serviceFactory->createReportService($session);

        // Create report query.
        $reportQuery = new ReportQuery();
        $reportQuery->setDimensions(
            [
                Dimension::ORDER_ID,
                Dimension::ORDER_NAME
            ]
        );
        $reportQuery->setDimensionAttributes(
            [
                DimensionAttribute::ORDER_TRAFFICKER,
                DimensionAttribute::ORDER_START_DATE_TIME,
                DimensionAttribute::ORDER_END_DATE_TIME
            ]
        );
        $reportQuery->setColumns(
            [
                Column::AD_SERVER_IMPRESSIONS,
                Column::AD_SERVER_CLICKS,
                Column::AD_SERVER_CTR,
                Column::AD_SERVER_CPM_AND_CPC_REVENUE,
                Column::AD_SERVER_WITHOUT_CPD_AVERAGE_ECPM
            ]
        );

        // Create statement to filter for an order.
        $statementBuilder = (new StatementBuilder())
            ->where('ORDER_ID = :orderId')
            ->withBindVariableValue(
                'orderId',
                $orderId
            );

        // Set the filter statement.
        $reportQuery->setStatement($statementBuilder->toStatement());

        // Set the start and end dates or choose a dynamic date range type.
        $reportQuery->setDateRangeType(DateRangeType::CUSTOM_DATE);
        $reportQuery->setStartDate(
            AdManagerDateTimes::fromDateTime(
                new DateTime(
                    '-10 days',
                    new DateTimeZone('America/New_York')
                )
            )
                ->getDate()
        );
        $reportQuery->setEndDate(
            AdManagerDateTimes::fromDateTime(
                new DateTime(
                    'now',
                    new DateTimeZone('America/New_York')
                )
            )
                ->getDate()
        );

        // Create report job and start it.
        $reportJob = new ReportJob();
        $reportJob->setReportQuery($reportQuery);
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
                tempnam(sys_get_temp_dir(), 'delivery-report-')
            );
            printf("Downloading report to %s ...%s", $filePath, PHP_EOL);
            // Download the report.
            $reportDownloader->downloadReport(
                ExportFormat::CSV_DUMP,
                $filePath
            );
            print "done.\n";
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
        self::runExample(
            new ServiceFactory(),
            $session,
            intval(self::ORDER_ID)
        );
    }
}

RunDeliveryReportForOrder::main();
