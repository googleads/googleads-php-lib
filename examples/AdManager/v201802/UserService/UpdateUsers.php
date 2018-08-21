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

namespace Google\AdsApi\Examples\AdManager\v201802\UserService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerServices;
use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v201802\StatementBuilder;
use Google\AdsApi\AdManager\v201802\UserService;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example updates the role of a user to a salesperson. To determine which
 * users exist, run GetAllUsers.java.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class UpdateUsers
{

    const USER_ID = 'INSERT_USER_ID_HERE';
    const ROLE_ID = 'INSERT_ROLE_ID_HERE';

    public static function runExample(
        AdManagerServices $adManagerServices,
        AdManagerSession $session,
        $userId,
        $roleId
    ) {
        $userService = $adManagerServices->get($session, UserService::class);

        // Create a statement to only select a single user by ID.
        $statementBuilder = new StatementBuilder();
        $statementBuilder->where('id = :id');
        $statementBuilder->orderBy('id ASC');
        $statementBuilder->limit(1);
        $statementBuilder->withBindVariableValue('id', $userId);

        // Get the user.
        $page = $userService->getUsersByStatement(
            $statementBuilder->toStatement()
        );

        $user = $page->getResults()[0];

        // Set the role of the user to a salesperson.
        // To determine what other roles exist, run GetAllRoles.java.
        $user->setRoleId($roleId);

        // Update the user on the server.
        $users = $userService->updateUsers([$user]);

        foreach ($users as $updatedUser) {
            printf(
                "User with ID %d and name '%s' was updated.\n",
                $updatedUser->getId(),
                $updatedUser->getName()
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
            intval(self::USER_ID),
            intval(self::ROLE_ID)
        );
    }
}

UpdateUsers::main();
