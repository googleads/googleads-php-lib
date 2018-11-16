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

namespace Google\AdsApi\Examples\AdWords\v201806\Reporting;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201806\cm\ReportDefinitionReportType;
use Google\AdsApi\AdWords\v201806\cm\ReportDefinitionService;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets the fields available in a campaign report.
 */
class GetReportFields
{

    const PAGE_LIMIT = 500;

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session
    ) {
        $reportDefinitionService = $adWordsServices->get($session, ReportDefinitionService::class);

        // The type of the report to get fields for.
        $reportType = ReportDefinitionReportType::CAMPAIGN_PERFORMANCE_REPORT;

        // Get report fields of the report type.
        $reportDefinitionFields = $reportDefinitionService->getReportFields($reportType);

        printf(
            "The report type '%s' contains the following fields:\n",
            $reportType
        );
        foreach ($reportDefinitionFields as $reportDefinitionField) {
            printf(
                '  %s (%s)',
                $reportDefinitionField->getFieldName(),
                $reportDefinitionField->getFieldType()
            );
            if ($reportDefinitionField->getEnumValues() !== null) {
                printf(
                    ' := [%s]',
                    implode(', ', $reportDefinitionField->getEnumValues())
                );
            }
            print "\n";
        }
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()->withOAuth2Credential($oAuth2Credential)->build();
        self::runExample(new AdWordsServices(), $session);
    }
}

GetReportFields::main();
