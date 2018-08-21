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

namespace Google\AdsApi\Examples\AdManager\v201802\LineItemService;

require __DIR__ . '/../../../../vendor/autoload.php';

use DateTime;
use DateTimeZone;
use Google\AdsApi\AdManager\AdManagerServices;
use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v201802\AdManagerDateTimes;
use Google\AdsApi\AdManager\v201802\BrowserTargeting;
use Google\AdsApi\AdManager\v201802\CostType;
use Google\AdsApi\AdManager\v201802\CreativePlaceholder;
use Google\AdsApi\AdManager\v201802\CreativeRotationType;
use Google\AdsApi\AdManager\v201802\DayOfWeek;
use Google\AdsApi\AdManager\v201802\DayPart;
use Google\AdsApi\AdManager\v201802\DayPartTargeting;
use Google\AdsApi\AdManager\v201802\GeoTargeting;
use Google\AdsApi\AdManager\v201802\Goal;
use Google\AdsApi\AdManager\v201802\GoalType;
use Google\AdsApi\AdManager\v201802\InventoryTargeting;
use Google\AdsApi\AdManager\v201802\LineItem;
use Google\AdsApi\AdManager\v201802\LineItemService;
use Google\AdsApi\AdManager\v201802\LineItemType;
use Google\AdsApi\AdManager\v201802\Location;
use Google\AdsApi\AdManager\v201802\MinuteOfHour;
use Google\AdsApi\AdManager\v201802\Money;
use Google\AdsApi\AdManager\v201802\Size;
use Google\AdsApi\AdManager\v201802\StartDateTimeType;
use Google\AdsApi\AdManager\v201802\Targeting;
use Google\AdsApi\AdManager\v201802\Technology;
use Google\AdsApi\AdManager\v201802\TechnologyTargeting;
use Google\AdsApi\AdManager\v201802\TimeOfDay;
use Google\AdsApi\AdManager\v201802\UnitType;
use Google\AdsApi\AdManager\v201802\UserDomainTargeting;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Creates line items.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateLineItems
{

    // Set the order that all created line items will belong to and the
    // placement ID to target.
    const ORDER_ID = 'INSERT_ORDER_ID_HERE';
    const PLACEMENT_ID = 'INSERT_PLACEMENT_ID_HERE';

    public static function runExample(
        AdManagerServices $adManagerServices,
        AdManagerSession $session,
        $orderId,
        $placementId
    ) {
        $lineItemService = $adManagerServices->get(
            $session,
            LineItemService::class
        );

        // Setup the line item's targeting first.

        // Create inventory targeting.
        $inventoryTargeting = new InventoryTargeting();
        $inventoryTargeting->setTargetedPlacementIds([$placementId]);

        // Create geographical targeting.
        $geoTargeting = new GeoTargeting();

        // Include the US, Quebec (Canada), and postal code B3P (Canada).
        $countryLocation = new Location();
        $countryLocation->setId(2840);

        $regionLocation = new Location();
        $regionLocation->setId(20123);

        $postalCodeLocation = new Location();
        $postalCodeLocation->setId(9000093);

        $geoTargeting->setTargetedLocations(
            [$countryLocation, $regionLocation]
        );

        // Exclude Chicago and the New York metro area.
        $cityLocation = new Location();
        $cityLocation->setId(1016367);

        $metroLocation = new Location();
        $metroLocation->setId(200501);
        $geoTargeting->setExcludedLocations([$cityLocation, $metroLocation]);

        // Exclude users from US federal government domains.
        $userDomainTargeting = new UserDomainTargeting();
        $userDomainTargeting->setDomains(['usa.gov']);
        $userDomainTargeting->setTargeted(false);

        // Target only the weekend in the browser's timezone.
        $saturdayDayPart = new DayPart();
        $saturdayDayPart->setDayOfWeek(DayOfWeek::SATURDAY);
        $saturdayDayPart->setStartTime(new TimeOfDay(0, MinuteOfHour::ZERO));
        $saturdayDayPart->setEndTime(new TimeOfDay(24, MinuteOfHour::ZERO));

        $sundayDayPart = new DayPart();
        $sundayDayPart->setDayOfWeek(DayOfWeek::SUNDAY);
        $sundayDayPart->setStartTime(new TimeOfDay(0, MinuteOfHour::ZERO));
        $sundayDayPart->setEndTime(new TimeOfDay(24, MinuteOfHour::ZERO));

        // Create day-part targeting.
        $dayPartTargeting = new DayPartTargeting();
        $dayPartTargeting->setDayParts([$saturdayDayPart, $sundayDayPart]);

        // Target just the Chrome browser.
        $browserTechnology = new Technology();
        $browserTechnology->setId(500072);

        // Create technology targeting.
        $browserTargeting = new BrowserTargeting();
        $browserTargeting->setBrowsers([$browserTechnology]);
        $technologyTargeting = new TechnologyTargeting();
        $technologyTargeting->setBrowserTargeting($browserTargeting);

        // Create targeting.
        $targeting = new Targeting();
        $targeting->setInventoryTargeting($inventoryTargeting);
        $targeting->setGeoTargeting($geoTargeting);
        $targeting->setUserDomainTargeting($userDomainTargeting);
        $targeting->setDayPartTargeting($dayPartTargeting);
        $targeting->setTechnologyTargeting($technologyTargeting);

        // Now setup the line item.
        $lineItem = new LineItem();
        $lineItem->setName('Line item #' . uniqid());
        $lineItem->setOrderId($orderId);
        $lineItem->setTargeting($targeting);
        $lineItem->setLineItemType(LineItemType::STANDARD);
        $lineItem->setAllowOverbook(true);

        // Create the creative placeholder.
        $creativePlaceholder = new CreativePlaceholder();
        $creativePlaceholder->setSize(new Size(300, 250, false));

        // Set the size of creatives that can be associated with this line item.
        $lineItem->setCreativePlaceholders([$creativePlaceholder]);

        // Set the creative rotation type to even.
        $lineItem->setCreativeRotationType(CreativeRotationType::EVEN);

        // Set the length of the line item to run.
        $lineItem->setStartDateTimeType(StartDateTimeType::IMMEDIATELY);
        $lineItem->setEndDateTime(
            AdManagerDateTimes::fromDateTime(
                new DateTime('+1 month', new DateTimeZone('America/New_York'))
            )
        );

        // Set the cost per unit to $2.
        $lineItem->setCostType(CostType::CPM);
        $lineItem->setCostPerUnit(new Money('USD', 2000000));

        // Set the number of units bought to 500,000 so that the budget is
        // $1,000.
        $goal = new Goal();
        $goal->setUnits(500000);
        $goal->setUnitType(UnitType::IMPRESSIONS);
        $goal->setGoalType(GoalType::LIFETIME);
        $lineItem->setPrimaryGoal($goal);

        // Create the line items on the server.
        $results = $lineItemService->createLineItems([$lineItem]);

        // Print out some information for each created line item.
        foreach ($results as $i => $lineItem) {
            printf(
                "%d) Line item with ID %d, belonging to order ID %d, and name "
                . "'%s' was created.\n",
                $i,
                $lineItem->getId(),
                $lineItem->getOrderId(),
                $lineItem->getName()
            );
        }
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()
            ->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdManagerSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        self::runExample(
            new AdManagerServices(),
            $session,
            intval(self::ORDER_ID),
            intval(self::PLACEMENT_ID)
        );
    }
}

CreateLineItems::main();
