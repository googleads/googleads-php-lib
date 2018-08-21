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

namespace Google\AdsApi\Examples\AdManager\v201805\InventoryService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\v201805\AdUnit;
use Google\AdsApi\AdManager\v201805\AdUnitSize;
use Google\AdsApi\AdManager\v201805\AdUnitTargetWindow;
use Google\AdsApi\AdManager\v201805\EnvironmentType;
use Google\AdsApi\AdManager\v201805\ServiceFactory;
use Google\AdsApi\AdManager\v201805\Size;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example creates ad units.
 *
 * It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class CreateAdUnits
{

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session
    ) {
        $inventoryService = $serviceFactory->createInventoryService($session);
        $networkService = $serviceFactory->createNetworkService($session);

        // Get the effective root ad unit's ID for all ad units to be created
        // under.
        $network = $networkService->getCurrentNetwork();
        $effectiveRootAdUnitId = $network->getEffectiveRootAdUnitId();

        // Configure the ad unit to be created.
        $adUnit = new AdUnit();
        $adUnit->setName(uniqid('sports_page_'));
        $adUnit->setParentId($effectiveRootAdUnitId);
        $adUnit->setDescription('Banner ad on a sports page.');
        $adUnit->setTargetWindow(AdUnitTargetWindow::BLANK);

        // Set the size of possible creatives that can match this ad unit.
        $size = new Size();
        $size->setWidth(300);
        $size->setHeight(250);
        $size->setIsAspectRatio(false);
        $adUnitSize = new AdUnitSize();
        $adUnitSize->setSize($size);
        $adUnitSize->setEnvironmentType(EnvironmentType::BROWSER);
        $adUnit->setAdUnitSizes([$adUnitSize]);

        // Create the ad units on the server.
        $adUnits = $inventoryService->createAdUnits([$adUnit]);

        // Print out some information for each created ad unit.
        foreach ($adUnits as $i => $adUnit) {
            printf(
                "%d) An ad unit with ID '%s' and name '%s' was created.%s",
                $i,
                $adUnit->getId(),
                $adUnit->getName(),
                PHP_EOL
            );
        }

        printf("Created %d ad unit(s).%s", count($adUnits), PHP_EOL);
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

CreateAdUnits::main();
