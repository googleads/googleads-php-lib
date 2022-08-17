<?php
/**
 * Copyright 2020 Google LLC. All Rights Reserved.
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

namespace Google\AdsApi\Examples\AdManager\v202208\PublisherQueryLanguageService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v202208\CsvFiles;
use Google\AdsApi\AdManager\Util\v202208\Pql;
use Google\AdsApi\AdManager\Util\v202208\StatementBuilder;
use Google\AdsApi\AdManager\v202208\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets Multiple Customer Management earning information for
 * the prior month.
 *
 * A full list of available tables can be found at
 * https://developers.google.com/ad-manager/docs/reference/v202208/PublisherQueryLanguageService
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class GetMcmEarnings
{

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session
    ) {
        $pqlService = $serviceFactory->createPublisherQueryLanguageService(
            $session
        );

        // The Month column of the Mcm_Earnings table contains the first day of the months.
        // In order to match a given month, use first day of that month when building a query.
        $firstDayOfLastMonth = date('Ym1', strtotime('-1 month'));

        // Create statement to select earnings data from the prior month.
        $statementBuilder = new StatementBuilder();
        $statementBuilder->select("Month, ChildName, ChildNetworkCode, " .
            "TotalEarningsCurrencyCode, TotalEarningsMicros, " .
            "ParentPaymentCurrencyCode, ParentPaymentMicros, " .
            "ChildPaymentCurrencyCode, ChildPaymentMicros, DeductionsMicros")
            ->from('Mcm_Earnings')
            ->where('Month = :month')
            ->orderBy('ChildNetworkCode')
            ->limit(StatementBuilder::SUGGESTED_PAGE_LIMIT)
            ->withBindVariableValue('month', $firstDayOfLastMonth);

        // Default for result sets.
        $combinedResultSet = null;
        $i = 0;

        do {
            // Get all earnings.
            $resultSet = $pqlService->select($statementBuilder->toStatement());

            // Combine result sets with previous ones.
            $combinedResultSet = is_null($combinedResultSet)
                ? $resultSet
                : Pql::combineResultSets(
                    $combinedResultSet,
                    $resultSet
                );

            $rows = $resultSet->getRows();

            printf(
                "%d) %d rows beginning at offset %d were found.%s",
                $i++,
                is_null($rows) ? 0 : count($rows),
                $statementBuilder->getOffset(),
                PHP_EOL
            );

            $statementBuilder->increaseOffsetBy(
                StatementBuilder::SUGGESTED_PAGE_LIMIT
            );
            $rows = $resultSet->getRows();
        } while (!empty($rows));

        // Change to your file location.
        $filePath = tempnam(sys_get_temp_dir(), 'EarningsReport-') . '.csv';

        CsvFiles::writeCsv(
            Pql::resultSetTo2DimensionStringArray($combinedResultSet),
            $filePath
        );

        printf("Earnings information saved to: %s%s", $filePath, PHP_EOL);
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
            $session
        );
    }
}

GetMcmEarnings::main();
