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

namespace Google\AdsApi\Examples\AdManager\v201808\InventoryService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v201808\StatementBuilder;
use Google\AdsApi\AdManager\v201808\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets all child ad units of the effective root ad unit. To create
 * ad units, run CreateAdUnits.java.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class GetTopLevelAdUnits
{

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session
    ) {
        $inventoryService = $serviceFactory->createInventoryService($session);

        // Get the NetworkService.
        $networkService = $serviceFactory->createNetworkService($session);

        // Set the parent ad unit's ID for all children ad units to be fetched
        // from.
        $parentAdUnitId = $networkService->getCurrentNetwork()
            ->getEffectiveRootAdUnitId();

        // Create a statement to select ad units under the parent ad unit.
        $statementBuilder = new StatementBuilder();
        $statementBuilder->where('parentId = :parentId');
        $statementBuilder->orderBy('id ASC');
        $statementBuilder->limit(StatementBuilder::SUGGESTED_PAGE_LIMIT);
        $statementBuilder->withBindVariableValue('parentId', $parentAdUnitId);

        // Get ad units by statement.
        $page = $inventoryService->getAdUnitsByStatement(
            $statementBuilder->toStatement()
        );
        $totalResultSetSize = $page->getTotalResultSetSize();
        $adUnits = $page->getResults();

        while (!empty($adUnits)) {
            $i = $page->getStartIndex();
            foreach ($page->getResults() as $adUnit) {
                printf(
                    "%d) Ad unit with ID '%s' and name '%s' was found.%s",
                    $i++,
                    $adUnit->getId(),
                    $adUnit->getName(),
                    PHP_EOL
                );
            }
            $statementBuilder->increaseOffsetBy(
                StatementBuilder::SUGGESTED_PAGE_LIMIT
            );
            $page = $inventoryService->getAdUnitsByStatement(
                $statementBuilder->toStatement()
            );
            $adUnits = $page->getResults();
        }

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

        self::runExample(new ServiceFactory(), $session);
    }
}

GetTopLevelAdUnits::main();
