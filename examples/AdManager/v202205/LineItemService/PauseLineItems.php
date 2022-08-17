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

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v202205\StatementBuilder;
use Google\AdsApi\AdManager\v202205\PauseLineItems as PauseLineItemsAction;
use Google\AdsApi\AdManager\v202205\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Pauses line items.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class PauseLineItems
{

    const LINE_ITEM_ID = 'INSERT_LINE_ITEM_ID_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        int $lineItemId
    ) {
        $lineItemService = $serviceFactory->createLineItemService($session);

        // Create a statement to select the line items to pause.
        $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
        $statementBuilder = (new StatementBuilder())->where('id = :id')
            ->orderBy('id ASC')
            ->limit($pageSize)
            ->withBindVariableValue('id', $lineItemId);

        // Retrieve a small amount of line items at a time, paging through until
        // all line items have been retrieved.
        $totalResultSetSize = 0;
        do {
            $page = $lineItemService->getLineItemsByStatement(
                $statementBuilder->toStatement()
            );

            // Print out some information for the line items to be paused.
            if ($page->getResults() !== null) {
                $totalResultSetSize = $page->getTotalResultSetSize();
                $i = $page->getStartIndex();
                foreach ($page->getResults() as $lineItem) {
                    printf(
                        "%d) Line item with ID %d and name '%s' will be"
                        . " paused.%s",
                        $i++,
                        $lineItem->getId(),
                        $lineItem->getName(),
                        PHP_EOL
                    );
                }
            }

            $statementBuilder->increaseOffsetBy($pageSize);
        } while ($statementBuilder->getOffset() < $totalResultSetSize);

        printf(
            "Total number of line items to be paused: %d%s",
            $totalResultSetSize,
            PHP_EOL
        );

        if ($totalResultSetSize > 0) {
            // Remove limit and offset from statement so we can reuse the
            // statement.
            $statementBuilder->removeLimitAndOffset();

            // Create and perform action.
            $action = new PauseLineItemsAction();
            $result = $lineItemService->performlineItemAction(
                $action,
                $statementBuilder->toStatement()
            );

            if ($result !== null && $result->getNumChanges() > 0) {
                printf(
                    "Number of line items paused: %d%s",
                    $result->getNumChanges(),
                    PHP_EOL
                );
            } else {
                printf("No line items were paused.%s", PHP_EOL);
            }
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

PauseLineItems::main();
