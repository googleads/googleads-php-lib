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

namespace Google\AdsApi\Examples\AdManager\v201802\ForecastService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerServices;
use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\v201802\DeliveryForecastOptions;
use Google\AdsApi\AdManager\v201802\ForecastService;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Gets a delivery forecast for existing line items.
 */
class GetDeliveryForecastForLineItems
{

    // Set the IDs of the line items to get a forecast for.
    const LINE_ITEM_ID_1 = 'INSERT_LINE_ITEM_ID_HERE';
    const LINE_ITEM_ID_2 = 'INSERT_LINE_ITEM_ID_HERE';

    public static function runExample(
        AdManagerServices $adManagerServices,
        AdManagerSession $session,
        $lineItemId1,
        $lineItemId2
    ) {
        $forecastService = $adManagerServices->get(
            $session,
            ForecastService::class
        );

        // Get forecast for the line items with no options set.
        $forecast = $forecastService->getDeliveryForecastByIds(
            [$lineItemId1, $lineItemId2],
            new DeliveryForecastOptions()
        );

        // Print out forecast results.
        $lineItemDeliveryForecasts = $forecast->getLineItemDeliveryForecasts();
        foreach ($lineItemDeliveryForecasts as $lineItemForecast) {
            $unitType = strtolower($lineItemForecast->getUnitType());
            printf(
                "Forecast for line item ID %d:\n",
                $lineItemForecast->getLineItemId()
            );
            printf(
                "    %d %s matched\n",
                $lineItemForecast->getMatchedUnits(),
                $unitType
            );
            printf(
                "    %d %s delivered\n",
                $lineItemForecast->getDeliveredUnits(),
                $unitType
            );
            printf(
                "    %d %s predicted\n",
                $lineItemForecast->getPredictedDeliveryUnits(),
                $unitType
            );
        }
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
            intval(self::LINE_ITEM_ID_1),
            intval(self::LINE_ITEM_ID_2)
        );
    }
}

GetDeliveryForecastForLineItems::main();
