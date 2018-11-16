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

namespace Google\AdsApi\Examples\AdManager\v201808\ForecastService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\v201808\AvailabilityForecastOptions;
use Google\AdsApi\AdManager\v201808\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Gets a forecast for an existing line item.
 */
class GetAvailabilityForecastForLineItem
{

    // Set the ID of the line item to get a forecast for.
    const LINE_ITEM_ID = 'INSERT_LINE_ITEM_ID_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        $lineItemId
    ) {
        $forecastService = $serviceFactory->createForecastService($session);

        // Get forecast for line item.
        $options = new AvailabilityForecastOptions();
        $options->setIncludeContendingLineItems(true);
        $options->setIncludeTargetingCriteriaBreakdown(true);
        $forecast = $forecastService->getAvailabilityForecastById(
            $lineItemId,
            $options
        );

        // Print out forecast results.
        $matchedUnits = $forecast->getMatchedUnits();
        $unitType = strtolower($forecast->getUnitType());
        printf("%d %s matched.%s", $matchedUnits, $unitType, PHP_EOL);

        if ($matchedUnits > 0) {
            $availableUnits = $forecast->getAvailableUnits();
            $percentAvailableUnits = $availableUnits / $matchedUnits * 100;
            $possibleUnits = $forecast->getPossibleUnits();
            $percentPossibleUnits = $possibleUnits / $matchedUnits * 100;
            printf(
                "%.2d%% %s available.%s",
                $percentAvailableUnits,
                $unitType,
                PHP_EOL
            );
            printf(
                "%.2d%% %s possible.%s",
                $percentPossibleUnits,
                $unitType,
                PHP_EOL
            );
        }

        printf(
            "%d contending line items.%s",
            count($forecast->getContendingLineItems()),
            PHP_EOL
        );
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
            $session,
            intval(self::LINE_ITEM_ID)
        );
    }
}

GetAvailabilityForecastForLineItem::main();
