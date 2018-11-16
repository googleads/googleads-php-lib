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

namespace Google\AdsApi\Examples\AdManager\v201805\UserService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\v201805\ServiceFactory;
use Google\AdsApi\AdManager\v201805\User;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Creates users.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateUsers
{

    // Set the email address, name, and role of the user to create.
    const USER_EMAIL = 'INSERT_USER_EMAIL_ADDRESS_HERE';
    const USER_NAME = 'INSERT_USER_NAME_HERE';
    // Roles can be obtained by running GetAllRoles.php.
    const USER_ROLE_ID = 'INSERT_USER_ROLE_ID_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        $userEmail,
        $userName,
        $userRoleId
    ) {
        $userService = $serviceFactory->createUserService($session);

        $user = new User();
        $user->setName('User #' . uniqid());
        $user->setEmail($userEmail);
        $user->setName($userName);
        $user->setRoleId($userRoleId);

        // Create the users on the server.
        $results = $userService->createUsers([$user]);

        // Print out some information for each created user.
        foreach ($results as $i => $user) {
            printf(
                "%d) User with ID %d and name '%s' was created.%s",
                $i,
                $user->getId(),
                $user->getName(),
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
            self::USER_EMAIL,
            self::USER_NAME,
            intval(self::USER_ROLE_ID)
        );
    }
}

CreateUsers::main();
