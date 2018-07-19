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

namespace Google\AdsApi\Examples\Dfp\v201805\ForecastService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\v201805\DeliveryForecastOptions;
use Google\AdsApi\Dfp\v201805\ForecastService;
use Google\AdsApi\Dfp\v201805\ServiceFactory;

/**
 * Gets a delivery forecast for existing line items.
 */
class GetDeliveryForecastForLineItems
{

    // Set the IDs of the line items to get a forecast for.
    const LINE_ITEM_ID_1 = 'INSERT_LINE_ITEM_ID_HERE';
    const LINE_ITEM_ID_2 = 'INSERT_LINE_ITEM_ID_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        DfpSession $session,
        $lineItemId1,
        $lineItemId2
    ) {
        $forecastService = $serviceFactory->createForecastService($session);

        // Get forecast for the line items with no options set.
        $forecast = $forecastService->getDeliveryForecastByIds(
            [$lineItemId1, $lineItemId2],
            new DeliveryForecastOptions()
        );

        // Print out forecast results.
        foreach ($forecast->getLineItemDeliveryForecasts() as $lineItemForecast) {
            $unitType = strtolower($lineItemForecast->getUnitType());
            printf(
                "Forecast for line item ID %d:%s",
                $lineItemForecast->getLineItemId(),
                PHP_EOL
            );
            printf(
                "    %d %s matched%s",
                $lineItemForecast->getMatchedUnits(),
                $unitType,
                PHP_EOL
            );
            printf(
                "    %d %s delivered%s",
                $lineItemForecast->getDeliveredUnits(),
                $unitType,
                PHP_EOL
            );
            printf(
                "    %d %s predicted%s",
                $lineItemForecast->getPredictedDeliveryUnits(),
                $unitType,
                PHP_EOL
            );
        }
    }

    public static function main()
    {
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()
            ->build();
        $session = (new DfpSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();
        self::runExample(
            new ServiceFactory(),
            $session,
            intval(self::LINE_ITEM_ID_1),
            intval(self::LINE_ITEM_ID_2)
        );
    }
}

GetDeliveryForecastForLineItems::main();
