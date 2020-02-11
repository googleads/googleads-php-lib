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

namespace Google\AdsApi\Examples\AdManager\v202002\AdjustmentService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v202002\StatementBuilder;
use Google\AdsApi\AdManager\v202002\BasisType;
use Google\AdsApi\AdManager\v202002\Date;
use Google\AdsApi\AdManager\v202002\DateRange;
use Google\AdsApi\AdManager\v202002\HistoricalAdjustment;
use Google\AdsApi\AdManager\v202002\ServiceFactory;
use Google\AdsApi\AdManager\v202002\TrafficForecastAdjustmentSegment;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds a historical adjustment of 110% for New Years Day traffic.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class UpdateTrafficAdjustments
{

    // Set the forecast adjustment to be updated.
    const ADJUSTMENT_ID = 'INSERT_ADJUSTMENT_ID_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        $adjustmentId
    ) {
        $trafficAdjustmentService =
            $serviceFactory->createAdjustmentService($session);

        // Create a statement to only select a single forecast adjustment by ID.
        $statementBuilder = new StatementBuilder();
        $statementBuilder->Where('id = :id');
        $statementBuilder->OrderBy('id ASC');
        $statementBuilder->Limit(1);
        $statementBuilder->WithBindVariableValue('id', $adjustmentId);

        // Get the forecast adjustment.
        $page = $trafficAdjustmentService->getTrafficAdjustmentsByStatement(
            $statementBuilder->toStatement()
        );

        $trafficAdjustment = $page->getResults()[0];

        // Create a new historical adjustment segment for New Years Day.
        $newYearsAdjustment = new HistoricalAdjustment();

        $lastNewYearsDay = new Date(date('Y'), 1, 1);
        $referenceDateRange = new DateRange();
        $referenceDateRange->setStartDate($lastNewYearsDay);
        $referenceDateRange->setEndDate($lastNewYearsDay);
        $newYearsAdjustment->setReferenceDateRange($referenceDateRange);

        $nextNewYearsDay = new Date(date('Y') + 1, 1, 1);
        $targetDateRange = new DateRange();
        $targetDateRange->setStartDate($nextNewYearsDay);
        $targetDateRange->setEndDate($nextNewYearsDay);
        $newYearsAdjustment->setTargetDateRange($targetDateRange);

        $newYearsAdjustment->setMilliPercentMultiplier(110000);

        $segment = new TrafficForecastAdjustmentSegment();
        $segment->setBasisType(BasisType::HISTORICAL);
        $segment->setHistoricalAdjustment($newYearsAdjustment);

        // Add the historical segment to the adjustment.
        $segments = $trafficAdjustment->getForecastAdjustmentSegments();
        array_push($segments, $segment);
        $trafficAdjustment->setForecastAdjustmentSegments($segments);

        // Update the forecast adjustment on the server.
        $trafficAdjustments =
            $trafficAdjustmentService->updateTrafficAdjustments(
                [$trafficAdjustment]
            );

        foreach ($trafficAdjustments as $updatedTrafficAdjustment) {
            printf(
                "Forecast adjustment with ID %d and %d segments was updated.%s",
                $updatedTrafficAdjustment->getId(),
                count($updatedTrafficAdjustment
                    ->getForecastAdjustmentSegments()),
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
            intval(self::ADJUSTMENT_ID)
        );
    }
}

UpdateTrafficAdjustments::main();
