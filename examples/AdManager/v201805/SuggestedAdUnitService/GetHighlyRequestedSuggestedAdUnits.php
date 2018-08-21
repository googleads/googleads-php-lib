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

namespace Google\AdsApi\Examples\AdManager\v201805\SuggestedAdUnitService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v201805\StatementBuilder;
use Google\AdsApi\AdManager\v201805\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets all highly requested suggested ad units.
 *
 * <p>It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class GetHighlyRequestedSuggestedAdUnits
{

    const NUM_REQUESTS = 'INSERT_NUM_REQUESTS_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        $numRequests
    ) {
        $suggestedAdUnitService = $serviceFactory->createSuggestedAdUnitService(
            $session
        );

        // Create a statement to select suggested ad units.
        $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
        $statementBuilder = (new StatementBuilder())
            ->where('numRequests >= :numRequests')
            ->orderBy('id ASC')
            ->limit($pageSize)
            ->withBindVariableValue('numRequests', $numRequests);

        // Retrieve a small amount of suggested ad units at a time, paging
        // through until all suggested ad units have been retrieved.
        $totalResultSetSize = 0;
        do {
            $page = $suggestedAdUnitService->getSuggestedAdUnitsByStatement(
                $statementBuilder->toStatement()
            );

            // Print out some information for each suggested ad unit.
            if ($page->getResults() !== null) {
                $totalResultSetSize = $page->getTotalResultSetSize();
                $i = $page->getStartIndex();
                foreach ($page->getResults() as $suggestedAdUnit) {
                    printf(
                        "%d) Suggested ad unit with ID '%s'"
                        . " and num requests %d was found.%s",
                        $i++,
                        $suggestedAdUnit->getId(),
                        $suggestedAdUnit->getNumRequests(),
                        PHP_EOL
                    );
                }
            }

            $statementBuilder->increaseOffsetBy($pageSize);
        } while ($statementBuilder->getOffset() < $totalResultSetSize);

        printf("Number of results found: %d%s", $totalResultSetSize, PHP_EOL);
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()
            ->build();

        // Construct an API session configured from an `adsapi_php.ini` file
        // and the OAuth2 credentials above.
        $session = (new AdManagerSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        self::runExample(
            new ServiceFactory(),
            $session,
            intval(self::NUM_REQUESTS)
        );
    }
}

GetHighlyRequestedSuggestedAdUnits::main();
