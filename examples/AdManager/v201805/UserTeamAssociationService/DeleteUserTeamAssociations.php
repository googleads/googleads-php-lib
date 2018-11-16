<?php
/**
 * Copyright 2018 Google Inc. All Rights Reserved.
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

namespace Google\AdsApi\Examples\AdManager\v201805\UserTeamAssociationService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v201805\StatementBuilder;
use Google\AdsApi\AdManager\v201805\DeleteUserTeamAssociations as DeleteAction;
use Google\AdsApi\AdManager\v201805\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example deletes all user team associations for a given user (i.e.
 * removes the user from all teams). To determine which
 * user team associations exist, run GetAllUserTeamAssociations.php. To
 * determine which users exist, run GetAllUsers.php
 *
 * This example is meant to be run from a command line (not as a web page) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class DeleteUserTeamAssociations
{

    const USER_ID = 'INSERT_USER_ID_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        $userId
    ) {
        $userTeamAssociationService =
            $serviceFactory->createUserTeamAssociationService($session);

        // Create a statement to get all user team associations for a user.
        $statementBuilder = (new StatementBuilder())
            ->where('WHERE userId = :userId ')
            ->orderBy('userId ASC, teamId ASC')
            ->limit(StatementBuilder::SUGGESTED_PAGE_LIMIT)
            ->withBindVariableValue('userId', $userId);

        // Default for total result set size.
        $totalResultSetSize = 0;

        do {
            // Get user team associations by statement.
            $page = $userTeamAssociationService
                ->getUserTeamAssociationsByStatement(
                    $statementBuilder->toStatement()
                );

            if (!empty($page->getResults())) {
                $totalResultSetSize = $page->getTotalResultSetSize();
                $i = $page->getStartIndex();
                foreach ($page->getResults() as $userTeamAssociation) {
                    printf(
                        "%d) User team association with user ID %d and "
                        . "team ID %d will be deleted.%s",
                        $i++,
                        $userTeamAssociation->getUserId(),
                        $userTeamAssociation->getTeamId(),
                        PHP_EOL
                    );
                }
            }

            $statementBuilder->increaseOffsetBy(
                StatementBuilder::SUGGESTED_PAGE_LIMIT
            );
        } while ($statementBuilder->getOffset() < $totalResultSetSize);

        printf(
            "Number of user team associations to be deleted: %d%s",
            $totalResultSetSize,
            PHP_EOL
        );

        if ($totalResultSetSize > 0) {
            // Remove limit and offset from statement.
            $statementBuilder->removeLimitAndOffset();

            // Create action.
            $action = new DeleteAction();

            // Perform action.
            $result = $userTeamAssociationService
                ->performUserTeamAssociationAction(
                    $action,
                    $statementBuilder->toStatement()
                );

            if (!is_null($result) && $result->getNumChanges() > 0) {
                printf(
                    "Number of user team associations deleted: %d%s",
                    $result->getNumChanges(),
                    PHP_EOL
                );
            } else {
                print "No user team associations were deleted.\n";
            }
        }
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())
            ->fromFile()
            ->build();

        // Construct an API session configured from an `adsapi_php.ini` file
        // and the OAuth2 credentials above.
        $session = (new AdManagerSessionBuilder())
            ->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        self::runExample(new ServiceFactory(), $session, intval(self::USER_ID));
    }
}

DeleteUserTeamAssociations::main();
