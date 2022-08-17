<?php
/**
 * Copyright 2020 Google LLC
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

namespace Google\AdsApi\Examples\AdManager\v202208\AdjustmentService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\v202208\Date;
use Google\AdsApi\AdManager\v202208\DateRange;
use Google\AdsApi\AdManager\v202208\ForecastAdjustment;
use Google\AdsApi\AdManager\v202208\ForecastAdjustmentStatus;
use Google\AdsApi\AdManager\v202208\ForecastAdjustmentVolumeType;
use Google\AdsApi\AdManager\v202208\HistoricalBasisVolumeSettings;
use Google\AdsApi\AdManager\v202208\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example creates a new forecast adjustment of 110% of New Years Day
 *   traffic.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateForecastAdjustments
{
    const TRAFFIC_FORECAST_SEGMENT_ID = "INSERT_TRAFFIC_FORECAST_SEGMENT_ID_HERE";

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        int $trafficForecastSegmentId
    ) {
        $adjustment = new ForecastAdjustment();

        $adjustment->setName('Forecast Adjustment #' . uniqid());
        $adjustment->setTrafficForecastSegmentId($trafficForecastSegmentId);
        $adjustment->setStatus(ForecastAdjustmentStatus::ACTIVE);

        // Adjust next year's New Year's Day values
        $targetDateRange = new DateRange();
        $targetDateRange->setStartDate(
            new Date(date('Y') + 1, 1, 1)
        );
        $targetDateRange->setEndDate(
            new Date(date('Y') + 1, 1, 1)
        );
        $adjustment->setDateRange($targetDateRange);

        $adjustment->setVolumeType(
            ForecastAdjustmentVolumeType::HISTORICAL_BASIS_VOLUME);
        $settings = new HistoricalBasisVolumeSettings();
        $settings->setUseParentTrafficForecastSegmentTargeting(true);

        $historicalDateRange = new DateRange();
        $historicalDateRange->setStartDate(
            new Date(date('Y'), 1, 1)
        );
        $historicalDateRange->setEndDate(
            new Date(date('Y'), 1, 1)
        );
        $settings->setHistoricalDateRange($historicalDateRange);
        $settings->setMultiplierMilliPercent(110000);
        $adjustment->setHistoricalBasisVolumeSettings($settings);

        $adjustmentService =
            $serviceFactory->createAdjustmentService($session);

        $adjustments = $adjustmentService->createForecastAdjustments(
            [$adjustment]);

        foreach ($adjustments as $createdAdjustment) {
            printf(
                "Forecast adjustment with ID %d and name '%s' was created.%s",
                $createdAdjustment->getId(),
                $createdAdjustment->getName(),
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
            $session,
            self::TRAFFIC_FORECAST_SEGMENT_ID
        );
    }
}

CreateForecastAdjustments::main();
