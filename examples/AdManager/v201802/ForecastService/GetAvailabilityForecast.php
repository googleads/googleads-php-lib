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

use DateTime;
use DateTimeZone;
use Google\AdsApi\AdManager\AdManagerServices;
use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v201802\AdManagerDateTimes;
use Google\AdsApi\AdManager\v201802\AdUnitTargeting;
use Google\AdsApi\AdManager\v201802\AvailabilityForecastOptions;
use Google\AdsApi\AdManager\v201802\CostType;
use Google\AdsApi\AdManager\v201802\CreativePlaceholder;
use Google\AdsApi\AdManager\v201802\CreativeRotationType;
use Google\AdsApi\AdManager\v201802\ForecastService;
use Google\AdsApi\AdManager\v201802\Goal;
use Google\AdsApi\AdManager\v201802\GoalType;
use Google\AdsApi\AdManager\v201802\InventoryTargeting;
use Google\AdsApi\AdManager\v201802\LineItem;
use Google\AdsApi\AdManager\v201802\LineItemType;
use Google\AdsApi\AdManager\v201802\NetworkService;
use Google\AdsApi\AdManager\v201802\ProspectiveLineItem;
use Google\AdsApi\AdManager\v201802\Size;
use Google\AdsApi\AdManager\v201802\StartDateTimeType;
use Google\AdsApi\AdManager\v201802\Targeting;
use Google\AdsApi\AdManager\v201802\UnitType;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Gets a forecast for a prospective line item that targets the entire network.
 * The targeting can be modified to determine forecasts for other criteria such
 * as custom criteria targeting (in addition to targeting the whole network).
 */
class GetAvailabilityForecast
{

    // Set the ID of the advertiser (company) to forecast for. Setting an
    // advertiser will cause the forecast to apply the appropriate unified
    // blocking rules.
    const ADVERTISER_ID = 'INSERT_ADVERTISER_ID_HERE';

    public static function runExample(
        AdManagerServices $adManagerServices,
        AdManagerSession $session,
        $advertiserId
    ) {
        $forecastService = $adManagerServices->get(
            $session,
            ForecastService::class
        );

        // Create a run-of-network line item to forecast on.
        $lineItem = new LineItem();
        $lineItem->setLineItemType(LineItemType::SPONSORSHIP);
        $lineItem->setCreativeRotationType(CreativeRotationType::OPTIMIZED);
        $lineItem->setStartDateTimeType(StartDateTimeType::IMMEDIATELY);
        $lineItem->setEndDateTime(
            AdManagerDateTimes::fromDateTime(
                new DateTime('+30 days', new DateTimeZone('America/New_York'))
            )
        );
        $lineItem->setCostType(CostType::CPM);

        // Set the line item to use 50% of the impressions.
        $goal = new Goal();
        $goal->setGoalType(GoalType::DAILY);
        $goal->setUnitType(UnitType::IMPRESSIONS);
        $goal->setUnits(50);
        $lineItem->setPrimaryGoal($goal);

        // Set the size of creatives that can be associated with this line item.
        $size = new Size();
        $size->setWidth(300);
        $size->setHeight(250);
        $size->setIsAspectRatio(false);
        $creativePlaceholder = new CreativePlaceholder();
        $creativePlaceholder->setSize($size);
        $lineItem->setCreativePlaceholders([$creativePlaceholder]);

        // Create ad unit targeting for the root ad unit.
        $networkService = $adManagerServices->get(
            $session,
            NetworkService::class
        );
        $rootAdUnitId = $networkService->getCurrentNetwork()
            ->getEffectiveRootAdUnitId();
        $adUnitTargeting = new AdUnitTargeting();
        $adUnitTargeting->setAdUnitId($rootAdUnitId);
        $adUnitTargeting->setIncludeDescendants(true);
        $inventoryTargeting = new InventoryTargeting();
        $inventoryTargeting->setTargetedAdUnits([$adUnitTargeting]);
        $targeting = new Targeting();
        $targeting->setInventoryTargeting($inventoryTargeting);
        $lineItem->setTargeting($targeting);

        // Get forecast for prospective line item.
        $prospectiveLineItem = new ProspectiveLineItem();
        $prospectiveLineItem->setAdvertiserId($advertiserId);
        $prospectiveLineItem->setLineItem($lineItem);
        $options = new AvailabilityForecastOptions();
        $options->setIncludeContendingLineItems(true);
        $options->setIncludeTargetingCriteriaBreakdown(true);

        $forecast = $forecastService->getAvailabilityForecast(
            $prospectiveLineItem,
            $options
        );

        // Print out forecast results.
        $matchedUnits = $forecast->getMatchedUnits();
        $unitType = strtolower($forecast->getUnitType());
        printf("%d %s matched.\n", $matchedUnits, $unitType);

        if ($matchedUnits > 0) {
            $availableUnits = $forecast->getAvailableUnits();
            $percentAvailableUnits = $availableUnits / $matchedUnits * 100;
            $possibleUnits = $forecast->getPossibleUnits();
            $percentPossibleUnits = $possibleUnits / $matchedUnits * 100;
            printf("%.2d%% %s available.\n", $percentAvailableUnits, $unitType);
            printf("%.2d%% %s possible.\n", $percentPossibleUnits, $unitType);
        }

        printf(
            "%d contending line items.\n",
            count($forecast->getContendingLineItems())
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
            new AdManagerServices(),
            $session,
            intval(self::ADVERTISER_ID)
        );
    }
}

GetAvailabilityForecast::main();
