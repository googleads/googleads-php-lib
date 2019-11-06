<?php
/**
 * Copyright 2019 Google LLC
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

namespace Google\AdsApi\Examples\AdManager\v201911\AdjustmentService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\v201911\AdUnitTargeting;
use Google\AdsApi\AdManager\v201911\AdUnitSize;
use Google\AdsApi\AdManager\v201911\BasisType;
use Google\AdsApi\AdManager\v201911\Date;
use Google\AdsApi\AdManager\v201911\EnvironmentType;
use Google\AdsApi\AdManager\v201911\DateRange;
use Google\AdsApi\AdManager\v201911\GeoTargeting;
use Google\AdsApi\AdManager\v201911\HistoricalAdjustment;
use Google\AdsApi\AdManager\v201911\InventoryTargeting;
use Google\AdsApi\AdManager\v201911\Location;
use Google\AdsApi\AdManager\v201911\PeriodType;
use Google\AdsApi\AdManager\v201911\Targeting;
use Google\AdsApi\AdManager\v201911\TimeSeries;
use Google\AdsApi\AdManager\v201911\TrafficForecastAdjustment;
use Google\AdsApi\AdManager\v201911\TrafficForecastAdjustmentSegment;
use Google\AdsApi\AdManager\v201911\TrafficTimeSeriesFilterCriteria;
use Google\AdsApi\AdManager\v201911\ServiceFactory;
use Google\AdsApi\AdManager\v201911\Size;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds or replaces a forecast adjustment for 1920x1080 video
 * traffic in the United States.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateTrafficAdjustments
{

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session
    ) {
        $trafficAdjustmentService =
            $serviceFactory->createAdjustmentService($session);
        $networkService=
            $serviceFactory->createNetworkService($session);

        $rootAdUnitId = $networkService->getCurrentNetwork()
            ->getEffectiveRootAdUnitId();

        // Create inventory targeting.
        $inventoryTargeting = new InventoryTargeting();

        // Create targeting for the root ad unit (i.e. the whole network).
        $adUnitTargeting = new AdUnitTargeting();
        $adUnitTargeting->setAdUnitId($rootAdUnitId);
        $adUnitTargeting->setIncludeDescendants(true);

        $inventoryTargeting->setTargetedAdUnits([$adUnitTargeting]);

        // Create a new adjustment for United States traffic.
        // When using GeoTargeting only Locations of type COUNTRY are supported.
        // You can retrieve all GeoTargets by running the GetGeoTargets.php
        // example.
        $geoTargeting = new GeoTargeting();
        $countryLocation = new Location();
        $countryLocation->setId(2840);
        $geoTargeting->setTargetedLocations([$countryLocation]);

        $targeting = new Targeting();
        $targeting->setInventoryTargeting($inventoryTargeting);
        $targeting->setGeoTargeting($geoTargeting);

        // Adjust only 1920x1080 video traffic.
        $adUnitSize = new AdUnitSize();
        $size = new Size();
        $size->setWidth(1920);
        $size->setHeight(1080);
        $adUnitSize->setSize($size);
        $adUnitSize->setEnvironmentType(EnvironmentType::VIDEO_PLAYER);

        $adjustment = new TrafficForecastAdjustment();
        $criteria = new TrafficTimeSeriesFilterCriteria();
        $criteria->setTargeting($targeting);
        $criteria->setAdUnitSizes([$adUnitSize]);

        $adjustment->setFilterCriteria($criteria);

        // Create a new historical adjustment targeting next year's January with
        // 105% of the traffic of this year's January.
        $januaryAdjustment = new HistoricalAdjustment();

        $referenceDateRange = new DateRange();
        $referenceDateRange->setStartDate(
            new Date(date('Y'), 1, 1)
        );
        $referenceDateRange->setEndDate(
            new Date(date('Y'), 1, 31)
        );
        $januaryAdjustment->setReferenceDateRange($referenceDateRange);

        $targetDateRange = new DateRange();
        $targetDateRange->setStartDate(
            new Date(date('Y') + 1, 1, 1)
        );
        $targetDateRange->setEndDate(
            new Date(date('Y') + 1, 1, 31)
        );
        $januaryAdjustment->setTargetDateRange($targetDateRange);

        $januaryAdjustment->setMilliPercentMultiplier(105000);

        $januarySegment = new TrafficForecastAdjustmentSegment();
        $januarySegment->setBasisType(BasisType::HISTORICAL);
        $januarySegment->setHistoricalAdjustment($januaryAdjustment);

        // Create a new absolute adjustment of 500,000 ad opportunities for
        // Christmas and 1M ad opportunities for Boxing Day.
        $holidayTimeSeries = new TimeSeries();
        $holidayRange = new DateRange();
        $holidayRange->setStartDate(
            new Date(date('Y'), 12, 25)
        );
        $holidayRange->setEndDate(
            new Date(date('Y'), 12, 26)
        );
        $holidayTimeSeries->setTimeSeriesDateRange($holidayRange);
        $holidayTimeSeries->setTimeSeriesValues([500000, 1000000]);
        $holidayTimeSeries->setValuePeriodType(PeriodType::DAILY);
        $holidaySegment = new TrafficForecastAdjustmentSegment();
        $holidaySegment->setBasisType(BasisType::ABSOLUTE);
        $holidaySegment->setAdjustmentTimeSeries($holidayTimeSeries);

        // Create a new absolute adjustment of 900,000 ad opportunities for the
        // first week in September.
        $septemberTimeSeries = new TimeSeries();
        $septemberRange = new DateRange();
        $septemberRange->setStartDate(new Date(date('Y'), 9, 1));
        $septemberRange->setEndDate(new Date(date('Y'), 9, 7));

        $septemberTimeSeries->setTimeSeriesDateRange($septemberRange);
        $septemberTimeSeries->setTimeSeriesValues([900000]);
        $septemberTimeSeries->setValuePeriodType(PeriodType::CUSTOM);

        $septemberSegment = new TrafficForecastAdjustmentSegment();
        $septemberSegment->setBasisType(BasisType::ABSOLUTE);
        $septemberSegment->setAdjustmentTimeSeries($septemberTimeSeries);

        $adjustment->setForecastAdjustmentSegments([
            $januarySegment, $holidaySegment, $septemberSegment]);

        // Create the forecast adjustment on the server.
        $trafficAdjustments =
            $trafficAdjustmentService->updateTrafficAdjustments([$adjustment]);

        foreach ($trafficAdjustments as $updatedTrafficAdjustment) {
            printf(
                "Forecast adjustment with ID %d and %d segments was created.%s",
                $updatedTrafficAdjustment->getId(),
                count(
                    $updatedTrafficAdjustment->getForecastAdjustmentSegments()
                ),
                PHP_EOL
            );
        }
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
            $session
        );
    }
}

UpdateTrafficAdjustments::main();
