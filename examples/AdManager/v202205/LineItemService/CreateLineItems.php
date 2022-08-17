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

namespace Google\AdsApi\Examples\AdManager\v202205\LineItemService;

require __DIR__ . '/../../../../vendor/autoload.php';

use DateTime;
use DateTimeZone;
use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v202205\AdManagerDateTimes;
use Google\AdsApi\AdManager\v202205\BrowserTargeting;
use Google\AdsApi\AdManager\v202205\CostType;
use Google\AdsApi\AdManager\v202205\CreativePlaceholder;
use Google\AdsApi\AdManager\v202205\CreativeRotationType;
use Google\AdsApi\AdManager\v202205\DayOfWeek;
use Google\AdsApi\AdManager\v202205\DayPart;
use Google\AdsApi\AdManager\v202205\DayPartTargeting;
use Google\AdsApi\AdManager\v202205\GeoTargeting;
use Google\AdsApi\AdManager\v202205\Goal;
use Google\AdsApi\AdManager\v202205\GoalType;
use Google\AdsApi\AdManager\v202205\InventoryTargeting;
use Google\AdsApi\AdManager\v202205\LineItem;
use Google\AdsApi\AdManager\v202205\LineItemType;
use Google\AdsApi\AdManager\v202205\Location;
use Google\AdsApi\AdManager\v202205\MinuteOfHour;
use Google\AdsApi\AdManager\v202205\Money;
use Google\AdsApi\AdManager\v202205\ServiceFactory;
use Google\AdsApi\AdManager\v202205\Size;
use Google\AdsApi\AdManager\v202205\StartDateTimeType;
use Google\AdsApi\AdManager\v202205\Targeting;
use Google\AdsApi\AdManager\v202205\Technology;
use Google\AdsApi\AdManager\v202205\TechnologyTargeting;
use Google\AdsApi\AdManager\v202205\TimeOfDay;
use Google\AdsApi\AdManager\v202205\UnitType;
use Google\AdsApi\AdManager\v202205\UserDomainTargeting;
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
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        int $orderId,
        int $placementId
    ) {
        $lineItemService = $serviceFactory->createLineItemService($session);

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
                "%d) Line item with ID %d, belonging to order ID %d, and name"
                . " '%s' was created.%s",
                $i,
                $lineItem->getId(),
                $lineItem->getOrderId(),
                $lineItem->getName(),
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
            intval(self::ORDER_ID),
            intval(self::PLACEMENT_ID)
        );
    }
}

CreateLineItems::main();
