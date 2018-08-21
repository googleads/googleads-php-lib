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

namespace Google\AdsApi\Examples\AdManager\v201802\PublisherQueryLanguageService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerServices;
use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v201802\CsvFiles;
use Google\AdsApi\AdManager\Util\v201802\Pql;
use Google\AdsApi\AdManager\Util\v201802\StatementBuilder;
use Google\AdsApi\AdManager\v201802\PublisherQueryLanguageService;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets geographic criteria from the Geo_Target table, such as
 * all cities available to target. Other types include 'Country', 'Region',
 * 'State', 'Postal_Code', and 'DMA_Region' (i.e. Metro).
 *
 * A full list of available geo target types can be found at
 * https://developers.google.com/ad-manager/docs/reference/v201802/PublisherQueryLanguageService
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class GetGeoTargets
{

    // Set the type of geo target.
    const GEO_TARGET_TYPE = 'City';
    const COUNTRY_CODE = 'US';

    public static function runExample(
        AdManagerServices $adManagerServices,
        AdManagerSession $session,
        $type,
        $countryCode
    ) {
        $pqlService = $adManagerServices->get(
            $session,
            PublisherQueryLanguageService::class
        );

        // Create statement to select all targetable cities.
        $statementBuilder = new StatementBuilder();
        $statementBuilder->select(
            'Id, Name, CanonicalParentId, ParentIds, CountryCode'
        );
        $statementBuilder->from('Geo_Target');
        $statementBuilder->where(
            'Type = :type and CountryCode = :countryCode  and Targetable = true'
        );
        $statementBuilder->orderBy('CountryCode ASC, Name ASC');
        $statementBuilder->offset(0);
        $statementBuilder->limit(StatementBuilder::SUGGESTED_PAGE_LIMIT);
        $statementBuilder->withBindVariableValue('type', $type);
        $statementBuilder->withBindVariableValue('countryCode', $countryCode);

        // Default for result sets.
        $combinedResultSet = null;
        $i = 0;

        do {
            // Get all cities.
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
                "%d) %d geo targets beginning at offset %d were found.\n",
                $i++,
                is_null($rows) ? 0 : count($rows),
                $statementBuilder->getOffset()
            );

            $statementBuilder->increaseOffsetBy(
                StatementBuilder::SUGGESTED_PAGE_LIMIT
            );

            $rows = $resultSet->getRows();
        } while (!empty($rows));

        // Change to your file location.
        $filePath = tempnam(sys_get_temp_dir(), $type . '-') . '.csv';

        CsvFiles::writeCsv(
            Pql::resultSetTo2DimensionStringArray($combinedResultSet),
            $filePath
        );

        printf("Geo targets saved to: %s\n", $filePath);
    }

    public static function main()
    {
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()
            ->build();
        $session = (new AdManagerSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();
        self::runExample(
            new AdManagerServices(),
            $session,
            self::GEO_TARGET_TYPE,
            self::COUNTRY_CODE
        );
    }
}

GetGeoTargets::main();
