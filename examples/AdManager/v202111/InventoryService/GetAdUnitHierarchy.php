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

namespace Google\AdsApi\Examples\AdManager\v202111\InventoryService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v202111\StatementBuilder;
use Google\AdsApi\AdManager\v202111\AdUnit;
use Google\AdsApi\AdManager\v202111\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets the ad unit hierarchy and displays it as a tree. To create
 * ad units, run CreateAdUnits.java.
 *
 * It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class GetAdUnitHierarchy
{

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session
    ) {
        $inventoryService = $serviceFactory->createInventoryService($session);

        // Get the NetworkService.
        $networkService = $serviceFactory->createNetworkService($session);

        // Get the effective root ad unit.
        $rootAdUnitId = $networkService->getCurrentNetwork()
            ->getEffectiveRootAdUnitId();

        // Create a statement to select only the root ad unit by ID.
        $statementBuilder = new StatementBuilder();
        $statementBuilder->where('id = :id');
        $statementBuilder->orderBy('id ASC');
        $statementBuilder->limit(1);
        $statementBuilder->withBindVariableValue('id', $rootAdUnitId);

        $page = $inventoryService->getAdUnitsByStatement(
            $statementBuilder->toStatement()
        );

        $effectiveRootAdUnit = $page->getResults()[0];

        // Get all ad units.
        $adUnits = self::getAllAdUnits($serviceFactory, $session);

        self::buildAndDisplayAdUnitTree($effectiveRootAdUnit, $adUnits);
    }

    private static function getAllAdUnits(
        ServiceFactory $serviceFactory,
        AdManagerSession $session
    ) {
        $adUnits = [];

        // Get the InventoryService.
        $inventoryService = $serviceFactory->createInventoryService(
            $session
        );

        // Create a statement to select all ad units.
        $statementBuilder = new StatementBuilder();
        $statementBuilder->orderBy('id ASC');
        $statementBuilder->limit(StatementBuilder::SUGGESTED_PAGE_LIMIT);

        // Default for total result set size.
        $totalResultSetSize = 0;

        do {
            // Get ad units by statement.
            $page = $inventoryService->getAdUnitsByStatement(
                $statementBuilder->toStatement()
            );

            if (!is_null($page->getResults())) {
                $totalResultSetSize = $page->getTotalResultSetSize();
                $adUnits = array_merge($adUnits, $page->getResults());
            }

            $statementBuilder->increaseOffsetBy(
                StatementBuilder::SUGGESTED_PAGE_LIMIT
            );
        } while ($statementBuilder->getOffset() < $totalResultSetSize);

        return $adUnits;
    }

    /**
     * Builds and displays an ad unit tree from ad units underneath
     * the root ad unit.
     *
     * @param AdUnit $root the root ad unit to build the tree under
     * @param AdUnit[] $adUnits the ad units under the root
     */
    private static function buildAndDisplayAdUnitTree(
        AdUnit $root,
        array $adUnits
    ) {
        if (is_null($root)) {
            print "No root unit found.\n";

            return;
        }

        $treeMap = [];

        foreach ($adUnits as $adUnit) {
            $parentId = $adUnit->getParentId();

            if (!is_null($parentId)) {
                if (!array_key_exists($parentId, $treeMap)) {
                    $treeMap[$parentId] = [];
                }

                $treeMap[$parentId][] = $adUnit;
            }
        }

        self::displayInventoryTree($root, $treeMap);
    }

    /**
     * Displays the ad unit tree beginning at the root ad unit.
     *
     * @param AdUnit $root the root ad unit to build the tree under
     * @param array $treeMap the associative array mapping each ad unit to its
     *    children
     */
    private static function displayInventoryTree(AdUnit $root, array $treeMap)
    {
        self::displayInventoryTreeHelper($root, $treeMap, 0);
    }

    /**
     * Helper for displaying inventory units.
     *
     * @param AdUnit $root the root ad unit to build a subtree
     * @param array $treeMap associative array mapping each ad unit to its
     *     children
     * @param int $depth the depth the tree has reached
     */
    private static function displayInventoryTreeHelper(
        AdUnit $root,
        array $treeMap,
        int $depth
    ) {
        $rootId = $root->getId();

        printf(
            "%s%s(%s)%s",
            self::generateTab($depth),
            $root->getName(),
            $rootId,
            PHP_EOL
        );

        if (!array_key_exists($rootId, $treeMap) || empty($treeMap[$rootId])) {
            return;
        }

        foreach ($treeMap[$rootId] as $child) {
            self::displayInventoryTreeHelper($child, $treeMap, $depth + 1);
        }
    }

    /**
     * Generates tabs to represent branching to children.
     *
     * @param int $depth the depth the tree has reached
     * @return string the tabs to insert in front of the root unit
     */
    private static function generateTab(int $depth)
    {
        $builder = '';

        if ($depth > 0) {
            $builder .= '  ';
        }

        for ($i = 1; $i < $depth; $i++) {
            $builder .= '|  ';
        }

        $builder .= '+--';

        return $builder;
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

GetAdUnitHierarchy::main();
