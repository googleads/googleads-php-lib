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

namespace Google\AdsApi\Examples\AdManager\v201802\InventoryService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerServices;
use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v201802\StatementBuilder;
use Google\AdsApi\AdManager\v201802\ArchiveAdUnits as ArchiveAdUnitsAction;
use Google\AdsApi\AdManager\v201802\InventoryService;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Archives ad units.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class ArchiveAdUnits
{

    const PARENT_AD_UNIT_ID = 'INSERT_PARENT_AD_UNIT_ID_HERE';

    public static function runExample(
        AdManagerServices $adManagerServices,
        AdManagerSession $session,
        $parentAdUnitId
    ) {
        $inventoryService = $adManagerServices->get(
            $session,
            InventoryService::class
        );

        // Create a statement to select the ad units to archive.
        $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
        $statementBuilder =
            (new StatementBuilder())
                ->where('parentId = :parentId or id = :parentId')
                ->orderBy(
                    'id ASC'
                )
                ->limit($pageSize)
                ->withBindVariableValue('parentId', $parentAdUnitId);

        // Retrieve a small amount of ad units at a time, paging
        // through until all ad units have been retrieved.
        $totalResultSetSize = 0;
        do {
            $page = $inventoryService->getAdUnitsByStatement(
                $statementBuilder->toStatement()
            );

            // Print out some information for the ad units to be
            // archived.
            if ($page->getResults() !== null) {
                $totalResultSetSize = $page->getTotalResultSetSize();
                $i = $page->getStartIndex();
                foreach ($page->getResults() as $adUnit) {
                    printf(
                        "%d) Ad unit with ID %d and name '%s' will be "
                        . "archived.\n",
                        $i++,
                        $adUnit->getId(),
                        $adUnit->getName()
                    );
                }
            }

            $statementBuilder->increaseOffsetBy($pageSize);
        } while ($statementBuilder->getOffset() < $totalResultSetSize);

        printf(
            "Total number of ad units to be archived: %d\n",
            $totalResultSetSize
        );

        if ($totalResultSetSize > 0) {
            // Remove limit and offset from statement so we can reuse the statement.
            $statementBuilder->removeLimitAndOffset();

            // Create and perform action.
            $action = new ArchiveAdUnitsAction();
            $result = $inventoryService->performAdUnitAction(
                $action,
                $statementBuilder->toStatement()
            );

            if ($result !== null && $result->getNumChanges() > 0) {
                printf(
                    "Number of ad units archived: %d\n",
                    $result->getNumChanges()
                );
            } else {
                printf("No ad units were archived.\n");
            }
        }
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()
            ->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdManagerSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        self::runExample(
            new AdManagerServices(),
            $session,
            intval(self::PARENT_AD_UNIT_ID)
        );
    }
}

ArchiveAdUnits::main();
