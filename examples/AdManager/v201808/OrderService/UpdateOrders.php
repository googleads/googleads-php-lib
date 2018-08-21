<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
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

namespace Google\AdsApi\Examples\AdManager\v201808\OrderService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v201808\StatementBuilder;
use Google\AdsApi\AdManager\v201808\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example updates an array of orders.
 *
 * <p>It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class UpdateOrders
{

    // Set the ID of the order to update.
    const ORDER_ID = 'INSERT_ORDER_ID_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        $orderId
    ) {

        $orderService = $serviceFactory->createOrderService($session);

        // Create a statement to only select a single order by ID.
        $statementBuilder = new StatementBuilder();
        $statementBuilder->Where('id = :id');
        $statementBuilder->OrderBy('id ASC');
        $statementBuilder->Limit(1);
        $statementBuilder->WithBindVariableValue('id', $orderId);

        // Get the order.
        $page = $orderService->getOrdersByStatement(
            $statementBuilder->toStatement()
        );

        $order = $page->getResults()[0];

        // Update the order's notes.
        $order->setNotes('Spoke to advertiser. All is well.');

        // Update the order on the server.
        $orders = $orderService->updateOrders([$order]);

        foreach ($orders as $updatedOrder) {
            printf(
                "Order with ID %d and name '%s' was updated.%s",
                $updatedOrder->getId(),
                $updatedOrder->getName(),
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

        self::runExample(new ServiceFactory(), $session, self::ORDER_ID);
    }
}

UpdateOrders::main();
