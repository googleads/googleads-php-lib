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
namespace Google\AdsApi\Examples\Dfp\v201702\LineItemService;

require '../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201702\StatementBuilder;
use Google\AdsApi\Dfp\v201702\LineItemService;
use Google\AdsApi\Dfp\v201702\PauseLineItems as PauseLineItemsAction;

/**
 * This example pauses a single line item.
 */
class PauseLineItems {

  // Set the ID of the line item to pause.
  const LINE_ITEM_ID = 'INSERT_LINE_ITEM_ID_HERE';

  public static function runExample(DfpServices $dfpServices,
      DfpSession $session, $lineItemId) {
    $lineItemService =
        $dfpServices->get($session, LineItemService::class);

    // Create a statement to select a single line item by ID.
    $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
    $statementBuilder = (new StatementBuilder())
        ->where('id = :id')
        ->orderBy('id ASC')
        ->limit(1)
        ->withBindVariableValue('id', $lineItemId);

    $totalResultSetSize = 0;
    do {
      // Get line items by statement.
      $page = $lineItemService->getLineItemsByStatement(
          $statementBuilder->toStatement());

      // Display results.
      if ($page->getResults() !== null) {
        $totalResultSetSize = $page->getTotalResultSetSize();
        $i = $page->getStartIndex();
        foreach ($page->getResults() as $lineItem) {
          printf(
              "%d) Line item with ID %d, belonging to order %d, and name '%s' "
                  . "will be paused.\n",
              $i++,
              $lineItem->getId(),
              $lineItem->getOrderId(),
              $lineItem->getName()
          );
        }
      }

      $statementBuilder->increaseOffsetBy($pageSize);
    } while ($statementBuilder->getOffset() < $totalResultSetSize);

    printf(
        "Total number of line items to be paused: %d\n", $totalResultSetSize);

    if ($totalResultSetSize > 0) {
      // Remove limit and offset from statement.
      $statementBuilder->removeLimitAndOffset();

      // Create and perform action.
      $action = new PauseLineItemsAction();
      $result = $lineItemService->performLineItemAction($action,
          $statementBuilder->toStatement());

      // Display results.
      if ($result !== null && $result->getNumChanges() > 0) {
        printf("Number of line items paused: %d\n", $result->getNumChanges());
      } else {
        printf("No line items were paused.\n");
      }
    }
  }

  public static function main() {
    $oAuth2Credential = (new OAuth2TokenBuilder())
        ->fromFile()
        ->build();
    $session = (new DfpSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential)
        ->build();
    self::runExample(new DfpServices(), $session, intval(self::LINE_ITEM_ID));
  }
}

PauseLineItems::main();

