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

namespace Google\AdsApi\Examples\AdManager\v201805\LineItemService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v201805\StatementBuilder;
use Google\AdsApi\AdManager\v201805\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Updates line items.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class UpdateLineItems
{

    // Set the line item to be updated.
    const LINE_ITEM_ID = 'INSERT_LINE_ITEM_ID_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        $lineItemId
    ) {
        $lineItemService = $serviceFactory->createLineItemService($session);

        // Create a statement to only select a single line item by ID.
        $statementBuilder = new StatementBuilder();
        $statementBuilder->Where('id = :id');
        $statementBuilder->OrderBy('id ASC');
        $statementBuilder->Limit(1);
        $statementBuilder->WithBindVariableValue('id', $lineItemId);

        // Get the line item.
        $page = $lineItemService->getLineItemsByStatement(
            $statementBuilder->toStatement()
        );

        $lineItem = $page->getResults()[0];

        // Update the notes of the line item.
        $lineItem->setNotes(
            'Spoke to advertiser about this line item. All is well.'
        );

        // Update the line item on the server.
        $lineItems = $lineItemService->updatelineItems([$lineItem]);

        foreach ($lineItems as $updatedLineItem) {
            printf(
                "Line item with ID %d and name '%s' was updated.%s",
                $updatedLineItem->getId(),
                $updatedLineItem->getName(),
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
            intval(self::LINE_ITEM_ID)
        );
    }
}

UpdateLineItems::main();
