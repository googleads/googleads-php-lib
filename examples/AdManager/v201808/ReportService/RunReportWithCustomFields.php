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

namespace Google\AdsApi\Examples\AdManager\v201808\ReportService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v201808\ReportDownloader;
use Google\AdsApi\AdManager\v201808\Column;
use Google\AdsApi\AdManager\v201808\DateRangeType;
use Google\AdsApi\AdManager\v201808\Dimension;
use Google\AdsApi\AdManager\v201808\ExportFormat;
use Google\AdsApi\AdManager\v201808\ReportJob;
use Google\AdsApi\AdManager\v201808\ReportQuery;
use Google\AdsApi\AdManager\v201808\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example runs a report that includes a custom field. To determine which
 * custom fields exist, run GetAllCustomFields.java.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class RunReportWithCustomFields
{

    const CUSTOM_FIELD_ID = 'INSERT_CUSTOM_FIELD_ID_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        $customFieldId
    ) {
        $reportService = $serviceFactory->createReportService($session);

        // Create report query.
        $reportQuery = new ReportQuery();
        $reportQuery->setDimensions([Dimension::DATE, Dimension::LINE_ITEM_ID]);
        $reportQuery->setColumns([Column::AD_SERVER_IMPRESSIONS]);

        // Set the dynamic date range type or a custom start and end date.
        $reportQuery->setDateRangeType(DateRangeType::LAST_MONTH);

        // Set the custom field IDs.
        $reportQuery->setCustomFieldIds([$customFieldId]);

        // Create report job.
        $reportJob = new ReportJob();
        $reportJob->setReportQuery($reportQuery);

        // Run report job.
        $reportJob = $reportService->runReportJob($reportJob);

        $reportDownloader = new ReportDownloader(
            $reportService,
            $reportJob->getId()
        );
        if ($reportDownloader->waitForReportToFinish()) {
            // Write to system temp directory by default.
            $filePath = sprintf(
                '%s.csv.gz',
                tempnam(sys_get_temp_dir(), 'custom-field-report-')
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
            intval(self::CUSTOM_FIELD_ID)
        );
    }
}

RunReportWithCustomFields::main();
