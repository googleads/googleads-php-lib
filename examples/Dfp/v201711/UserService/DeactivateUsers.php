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
namespace Google\AdsApi\Examples\Dfp\v201711\UserService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201711\StatementBuilder;
use Google\AdsApi\Dfp\v201711\DeactivateUsers as DeactivateUsersAction;
use Google\AdsApi\Dfp\v201711\UserService;

/**
 * Deactivates users.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class DeactivateUsers {

  const USER_ID = 'INSERT_USER_ID_HERE';

  public static function runExample(DfpServices $dfpServices,
      DfpSession $session, $userId) {
    $userService = $dfpServices->get($session, UserService::class);

    // Create a statement to select the users to deactivate.
    $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
    $statementBuilder = (new StatementBuilder())
        ->where('id = :id')
        ->orderBy('id ASC')
        ->limit($pageSize)
        ->withBindVariableValue('id', $userId);

    // Retrieve a small amount of users at a time, paging through until all
    // users have been retrieved.
    $totalResultSetSize = 0;
    do {
      $page = $userService->getUsersByStatement(
          $statementBuilder->toStatement());

      // Print out some information for the users to be deactivated.
      if ($page->getResults() !== null) {
        $totalResultSetSize = $page->getTotalResultSetSize();
        $i = $page->getStartIndex();
        foreach ($page->getResults() as $user) {
          printf(
              "%d) User with ID %d, " .
                  "email '%s', " .
                  "and role '%s' will be deactivated.\n",
              $i++,
              $user->getId(),
              $user->getEmail(),
              $user->getRoleName()
          );
        }
      }

      $statementBuilder->increaseOffsetBy($pageSize);
    } while ($statementBuilder->getOffset() < $totalResultSetSize);

    printf(
        "Total number of users to be deactivated: %d\n", $totalResultSetSize);

    if ($totalResultSetSize > 0) {
      // Remove limit and offset from statement so we can reuse the statement.
      $statementBuilder->removeLimitAndOffset();

      // Create and perform action.
      $action = new DeactivateUsersAction();
      $result = $userService->performUserAction($action,
          $statementBuilder->toStatement());

      if ($result !== null && $result->getNumChanges() > 0) {
        printf("Number of users deactivated: %d\n", $result->getNumChanges());
      } else {
        printf("No users were deactivated.\n");
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

    self::runExample(new DfpServices(), $session, intval(self::USER_ID));
  }
}

DeactivateUsers::main();
