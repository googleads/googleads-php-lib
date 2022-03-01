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

namespace Google\AdsApi\Examples\AdManager\v202202\ForecastService;

require __DIR__ . '/../../../../vendor/autoload.php';

use DateTime;
use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v202202\AdManagerDates;
use Google\AdsApi\AdManager\Util\v202202\AdManagerDateTimes;
use Google\AdsApi\AdManager\v202202\AdUnitTargeting;
use Google\AdsApi\AdManager\v202202\DateRange;
use Google\AdsApi\AdManager\v202202\InventoryTargeting;
use Google\AdsApi\AdManager\v202202\ServiceFactory;
use Google\AdsApi\AdManager\v202202\Targeting;
use Google\AdsApi\AdManager\v202202\TrafficDataRequest;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets the forecasted run-of-network traffic data for previous
 * and next 7 days.
 */
class GetTrafficData
{

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session
    ) {
        $forecastService = $serviceFactory->createForecastService($session);
        $networkService = $serviceFactory->createNetworkService($session);

        // Get the root ad unit ID used to target the whole site.
        $rootAdUnitId = $networkService->getCurrentNetwork()
            ->getEffectiveRootAdUnitId();

        // Create inventory targeting.
        $inventoryTargeting = new InventoryTargeting();

        // Create ad unit targeting for the root ad unit.
        $adUnitTargeting = new AdUnitTargeting();
        $adUnitTargeting->setAdUnitId($rootAdUnitId);
        $adUnitTargeting->setIncludeDescendants(true);

        $inventoryTargeting->setTargetedAdUnits([$adUnitTargeting]);

        // Create targeting.
        $targeting = new Targeting();
        $targeting->setInventoryTargeting($inventoryTargeting);


        // Create the date range. Include the previous and next 7 days.
        $startDate = AdManagerDateTimes::fromDateTime(new DateTime('-7 day'))
            ->getDate();
        $endDate = AdManagerDateTimes::fromDateTime(new DateTime('+7 day'))
            ->getDate();
        $dateRange = new DateRange();
        $dateRange->setStartDate($startDate);
        $dateRange->setEndDate($endDate);

        // Request the traffic forecast data.
        $trafficDataRequest = new TrafficDataRequest();
        $trafficDataRequest->setRequestedDateRange($dateRange);
        $trafficDataRequest->setTargeting($targeting);
        $trafficData = $forecastService->getTrafficData($trafficDataRequest);

        // Read the historical traffic data.
        $historicalTimeSeries = $trafficData->getHistoricalTimeSeries();
        if (is_null($historicalTimeSeries)) {
            printf(
                "Historical ad opportunities were not available%s",
                PHP_EOL
            );
        } else {
            $historicalSeriesStartDate = strtotime(AdManagerDates::toDateString(
                $historicalTimeSeries->getTimeSeriesDateRange()->getStartDate()
            ));
            $days = $historicalTimeSeries->getValues();
            $numberOfDays = count($days);
            for ($i = 0; $i < $numberOfDays; $i++) {
                printf(
                    "%s: %d historical ad opportunities%s",
                    date(
                        "Y-m-d",
                        strtotime("+{$i} day", $historicalSeriesStartDate)
                    ),
                    $days[$i],
                    PHP_EOL
                );
            }
        }

        // Read the forecasted traffic data.
        $forecastedTimeSeries = $trafficData->getForecastedTimeSeries();
        if (is_null($forecastedTimeSeries)) {
            printf(
                "Forecasted ad opportunities are not available%s",
                PHP_EOL
            );
        } else {
            $seriesStartDate = strtotime(AdManagerDates::toDateString(
                $forecastedTimeSeries->getTimeSeriesDateRange()->getStartDate()
            ));
            $days = $forecastedTimeSeries->getValues();
            $numberOfDays = count($days);
            for ($i = 0; $i < $numberOfDays; $i++) {
                printf(
                    "%s: %d forecasted ad opportunities%s",
                    date("Y-m-d", strtotime("+{$i} day", $seriesStartDate)),
                    $days[$i],
                    PHP_EOL
                );
            }
        }
    }

    public static function main()
    {
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();
        $session = (new AdManagerSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();
        self::runExample(new ServiceFactory(), $session);
    }
}

GetTrafficData::main();
