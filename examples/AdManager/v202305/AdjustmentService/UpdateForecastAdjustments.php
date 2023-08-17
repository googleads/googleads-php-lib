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

namespace Google\AdsApi\Examples\AdManager\v202305\AdjustmentService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v202305\StatementBuilder;
use Google\AdsApi\AdManager\v202305\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example updates a forecast adjustment.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class UpdateForecastAdjustments
{

    // Set the forecast adjustment to be updated.
    const ADJUSTMENT_ID = 'INSERT_ADJUSTMENT_ID_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        int $adjustmentId
    ) {
        $adjustmentService =
            $serviceFactory->createAdjustmentService($session);

        // Create a statement to only select a single forecast adjustment by ID.
        $statementBuilder = (new StatementBuilder())
            ->where('id = :id')
            ->withBindVariableValue('id', $adjustmentId)
            ->orderBy('id ASC')
            ->limit(1);

        $page = $adjustmentService->getForecastAdjustmentsByStatement(
            $statementBuilder->toStatement());

        $adjustment = $page->getResults()[0];
        $adjustment->setName($adjustment->getName() . " (updated)");

        $updatedAdjustments = $adjustmentService->updateForecastAdjustments(
            $adjustment);

        foreach ($updatedAdjustments as $updatedAdjustment) {
            printf(
                "Forecast adjustment with ID %d and name '%s' was updated.%s",
                $updatedAdjustment->getId(),
                $updatedAdjustment->getName(),
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

UpdateForecastAdjustments::main();
