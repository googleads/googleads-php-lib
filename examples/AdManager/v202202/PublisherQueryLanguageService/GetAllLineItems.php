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

namespace Google\AdsApi\Examples\AdManager\v202202\PublisherQueryLanguageService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v202202\CsvFiles;
use Google\AdsApi\AdManager\Util\v202202\Pql;
use Google\AdsApi\AdManager\Util\v202202\StatementBuilder;
use Google\AdsApi\AdManager\v202202\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets all line items in your network using the Line_Item table.
 * This example may take a while to run.
 *
 * A full list of available tables can be found at
 * https://developers.google.com/ad-manager/docs/reference/v202202/PublisherQueryLanguageService
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class GetAllLineItems
{

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session
    ) {
        $pqlService = $serviceFactory->createPublisherQueryLanguageService(
            $session
        );

        // Create statement to select all line items.
        $statementBuilder = new StatementBuilder();
        $statementBuilder->select('Id, Name, Status');
        $statementBuilder->from('Line_Item');
        $statementBuilder->orderBy('Id ASC');
        $statementBuilder->offset(0);
        $statementBuilder->limit(StatementBuilder::SUGGESTED_PAGE_LIMIT);

        // Default for result sets.
        $combinedResultSet = null;
        $i = 0;

        do {
            // Get all line items.
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
                "%d) %d line items beginning at offset %d were found.%s",
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
        $filePath = tempnam(sys_get_temp_dir(), 'Line-Items-') . '.csv';

        CsvFiles::writeCsv(
            Pql::resultSetTo2DimensionStringArray($combinedResultSet),
            $filePath
        );

        printf("Line items saved to: %s%s", $filePath, PHP_EOL);
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

GetAllLineItems::main();
