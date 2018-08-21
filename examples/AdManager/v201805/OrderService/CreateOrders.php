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

namespace Google\AdsApi\Examples\AdManager\v201805\OrderService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\v201805\Order;
use Google\AdsApi\AdManager\v201805\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Creates orders.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateOrders
{

    // Set the advertiser (company), salesperson, and trafficker to assign to
    // each order.
    const ADVERTISER_ID = 'INSERT_ADVERTISER_COMPANY_ID_HERE';
    const SALESPERSON_ID = 'INSERT_SALESPERSON_ID_HERE';
    const TRAFFICKER_ID = 'INSERT_TRAFFICKER_ID_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        $advertiserId,
        $salespersonId,
        $traffickerId
    ) {
        $orderService = $serviceFactory->createOrderService($session);

        $order = new Order();
        $order->setName('Order #' . uniqid());
        $order->setAdvertiserId($advertiserId);
        $order->setSalespersonId($salespersonId);
        $order->setTraffickerId($traffickerId);

        // Create the order on the server.
        $results = $orderService->createOrders([$order]);

        // Print out some information for each created order.
        foreach ($results as $i => $order) {
            printf(
                "%d) Order with ID %d and name '%s' was created.%s",
                $i,
                $order->getId(),
                $order->getName(),
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
            intval(self::ADVERTISER_ID),
            intval(self::SALESPERSON_ID),
            intval(self::TRAFFICKER_ID)
        );
    }
}

CreateOrders::main();
