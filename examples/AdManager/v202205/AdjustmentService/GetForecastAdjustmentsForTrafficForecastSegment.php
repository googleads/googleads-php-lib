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

namespace Google\AdsApi\Examples\AdManager\v202205\AdjustmentService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v202205\StatementBuilder;
use Google\AdsApi\AdManager\v202205\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets all forecast adjustments for a traffic forecast segment.
 *
 * <p>It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class GetForecastAdjustmentsForTrafficForecastSegment
{

    // Set the forecast adjustment to be updated.
    const TRAFFIC_FORECAST_SEGMENT_ID = 'INSERT_TRAFFIC_FORECAST_SEGMENT_ID_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        int $trafficForecastSegmentId
    ) {
        $adjustmentService = $serviceFactory->createAdjustmentService($session);

        // Create a statement to select adjustments.
        $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
        $statementBuilder = (new StatementBuilder())
            ->where('trafficForecastSegmentId = :trafficForecastSegmentId')
            ->withBindVariableValue('trafficForecastSegmentId',
                $trafficForecastSegmentId)
            ->orderBy('id ASC')
            ->limit($pageSize);

        // Retrieve all traffic adjustments for the traffic forecast segment,
        // paging through until all adjustments have been retrieved.
        $totalResultSetSize = 0;
        do {
            $page = $adjustmentService->getForecastAdjustmentsByStatement(
                $statementBuilder->toStatement()
            );

            // Print out some information for each adjustment.
            if ($page->getResults() !== null) {
                $totalResultSetSize = $page->getTotalResultSetSize();
                $i = $page->getStartIndex();
                foreach ($page->getResults() as $adjustment) {
                    printf(
                        "%d) Forecast adjustment with ID %d and name '%s' " .
                        "belonging to the traffic forecast segment %d was " .
                        "found.%s",
                        $i++,
                        $adjustment->getId(),
                        $adjustment->getName(),
                        $trafficForecastSegmentId,
                        PHP_EOL
                    );
                }
            }

            $statementBuilder->increaseOffsetBy($pageSize);
        } while ($statementBuilder->getOffset() < $totalResultSetSize);

        printf("Number of results found: %d%s", $totalResultSetSize, PHP_EOL);
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

        self::runExample(new ServiceFactory(), $session,
            self::TRAFFIC_FORECAST_SEGMENT_ID);
    }
}

GetForecastAdjustmentsForTrafficForecastSegment::main();
