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
namespace Google\AdsApi\Examples\Dfp\v201711\SuggestedAdUnitService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201711\StatementBuilder;
use Google\AdsApi\Dfp\v201711\ApproveSuggestedAdUnits as ApproveSuggestedAdUnitsAction;
use Google\AdsApi\Dfp\v201711\SuggestedAdUnitService;

/**
 * Approves suggested ad units.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class ApproveSuggestedAdUnits {

  const NUMBER_OF_REQUESTS = 'INSERT_NUMBER_OF_REQUESTS_HERE';

  public static function runExample(DfpServices $dfpServices,
      DfpSession $session, $numberOfRequests) {
    $suggestedAdUnitService =
        $dfpServices->get($session, SuggestedAdUnitService::class);

    // Create a statement to select the suggested ad units to approve.
    $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
    $statementBuilder = (new StatementBuilder())
        ->where('numRequests >= :numRequests')
        ->orderBy('id ASC')
        ->limit($pageSize)
        ->withBindVariableValue('numRequests', $numberOfRequests);

    // Retrieve a small amount of suggested ad units at a time, paging through
    // until all suggested ad units have been retrieved.
    $totalResultSetSize = 0;
    do {
      $page = $suggestedAdUnitService->getSuggestedAdUnitsByStatement(
          $statementBuilder->toStatement());

      // Print out some information for the suggested ad units to be approved.
      if ($page->getResults() !== null) {
        $totalResultSetSize = $page->getTotalResultSetSize();
        $i = $page->getStartIndex();
        foreach ($page->getResults() as $suggestedAdUnit) {
          printf(
              "%d) Suggested ad unit with ID %d " .
                  "and number of requests %d will be approved.\n",
              $i++,
              $suggestedAdUnit->getId(),
              $suggestedAdUnit->getNumRequests()
          );
        }
      }

      $statementBuilder->increaseOffsetBy($pageSize);
    } while ($statementBuilder->getOffset() < $totalResultSetSize);

    printf("Total number of suggested ad units to be approved: %d\n",
        $totalResultSetSize);

    if ($totalResultSetSize > 0) {
      // Remove limit and offset from statement so we can reuse the statement.
      $statementBuilder->removeLimitAndOffset();

      // Create and perform action.
      $action = new ApproveSuggestedAdUnitsAction();
      $result = $suggestedAdUnitService->performSuggestedAdUnitAction($action,
          $statementBuilder->toStatement());

      if ($result !== null && $result->getNumChanges() > 0) {
        printf("Number of suggested ad units approved: %d\n",
            $result->getNumChanges());
      } else {
        printf("No suggested ad units were approved.\n");
      }
    }
  }

  public static function main() {
    // Generate a refreshable OAuth2 credential for authentication.
    $oAuth2Credential = (new OAuth2TokenBuilder())
        ->fromFile()
        ->build();

    // Construct an API session configured from a properties file and the OAuth2
    // credentials above.
    $session = (new DfpSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential)
        ->build();

    self::runExample(
        new DfpServices(), $session, intval(self::NUMBER_OF_REQUESTS));
  }
}

ApproveSuggestedAdUnits::main();
