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

namespace Google\AdsApi\Examples\AdWords\v201710\Reporting;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\Reporting\v201710\DownloadFormat;
use Google\AdsApi\AdWords\Reporting\v201710\ReportDefinition;
use Google\AdsApi\AdWords\Reporting\v201710\ReportDefinitionDateRangeType;
use Google\AdsApi\AdWords\Reporting\v201710\ReportDownloader;
use Google\AdsApi\AdWords\ReportSettingsBuilder;
use Google\AdsApi\AdWords\v201710\cm\Predicate;
use Google\AdsApi\AdWords\v201710\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201710\cm\ReportDefinitionReportType;
use Google\AdsApi\AdWords\v201710\cm\Selector;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Downloads CRITERIA_PERFORMANCE_REPORT for the specified client customer ID.
 */
class DownloadCriteriaReportWithSelector
{

    public static function runExample(AdWordsSession $session, $filePath)
    {
        // Create selector.
        $selector = new Selector();
        $selector->setFields(
            [
                'CampaignId',
                'AdGroupId',
                'Id',
                'Criteria',
                'CriteriaType',
                'Impressions',
                'Clicks',
                'Cost'
            ]
        );

        // Use a predicate to filter out paused criteria (this is optional).
        $selector->setPredicates(
            [
                new Predicate('Status', PredicateOperator::NOT_IN, ['PAUSED'])
            ]
        );

        // Create report definition.
        $reportDefinition = new ReportDefinition();
        $reportDefinition->setSelector($selector);
        $reportDefinition->setReportName(
            'Criteria performance report #' . uniqid()
        );
        $reportDefinition->setDateRangeType(
            ReportDefinitionDateRangeType::LAST_7_DAYS
        );
        $reportDefinition->setReportType(
            ReportDefinitionReportType::CRITERIA_PERFORMANCE_REPORT
        );
        $reportDefinition->setDownloadFormat(DownloadFormat::CSV);

        // Download report.
        $reportDownloader = new ReportDownloader($session);
        // Optional: If you need to adjust report settings just for this one
        // request, you can create and supply the settings override here. Otherwise,
        // default values from the configuration file (adsapi_php.ini) are used.
        $reportSettingsOverride = (new ReportSettingsBuilder())->includeZeroImpressions(false)->build();
        $reportDownloadResult = $reportDownloader->downloadReport(
            $reportDefinition,
            $reportSettingsOverride
        );
        $reportDownloadResult->saveToFile($filePath);
        printf(
            "Report with name '%s' was downloaded to '%s'.\n",
            $reportDefinition->getReportName(),
            $filePath
        );
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // See: AdWordsSessionBuilder for setting a client customer ID that is
        // different from that specified in your adsapi_php.ini file.
        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()->withOAuth2Credential($oAuth2Credential)->build();

        $filePath = sprintf(
            '%s.csv',
            tempnam(sys_get_temp_dir(), 'criteria-report-')
        );
        self::runExample($session, $filePath);
    }
}

DownloadCriteriaReportWithSelector::main();
