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

namespace Google\AdsApi\Examples\Dfp\v201805\PublisherQueryLanguageService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201805\CsvFiles;
use Google\AdsApi\Dfp\Util\v201805\Pql;
use Google\AdsApi\Dfp\Util\v201805\StatementBuilder;
use Google\AdsApi\Dfp\v201805\PublisherQueryLanguageService;

/**
 * This example gets all programmatic buyers in your network using the Programmatic_Buyer table.
 *
 * A full list of available tables can be found at
 * https://developers.google.com/doubleclick-publishers/docs/reference/latest/PublisherQueryLanguageService
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class GetAllProgrammaticBuyers
{

    public static function runExample(DfpServices $dfpServices, DfpSession $session)
    {
        $pqlService = $dfpServices->get($session, PublisherQueryLanguageService::class);

        // Create statement to select all programmatic buyers.
        $statementBuilder = new StatementBuilder();
        $statementBuilder->select('BuyerAccountId, Name');
        $statementBuilder->from('Programmatic_Buyer');
        $statementBuilder->orderBy('BuyerAccountId ASC');
        $statementBuilder->offset(0);
        $statementBuilder->limit(StatementBuilder::SUGGESTED_PAGE_LIMIT);

        // Default for result sets.
        $combinedResultSet = null;
        $i = 0;

        do {
            // Get all programmatic buyers.
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
                "%d) %d programmatic buyers beginning at offset %d were found.\n",
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
        $filePath = tempnam(sys_get_temp_dir(), 'Programmatic-Buyers-') . '.csv';

        CsvFiles::writeCsv(
            Pql::resultSetTo2DimensionStringArray($combinedResultSet),
            $filePath
        );

        printf("Programmatic buyers saved to: %s\n", $filePath);
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

GetAllProgrammaticBuyers::main();
