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
use Google\AdsApi\AdManager\v201805\ServiceFactory;
use Google\AdsApi\AdManager\v201805\UserTeamAssociation;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example creates a new user team association to add a user to that team.
 * To determine which user team associations exist, run
 * GetAllUserTeamAssociations.php. To determine which users exist,
 * run GetAllUsers.php. To determine which teams exist, run GetAllTeams.php.
 *
 * This example is meant to be run from a command line (not as a web page) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateUserTeamAssociations
{

    const USER_ID = 'INSERT_USER_ID_HERE';
    const TEAM_ID = 'INSERT_TEAM_ID_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        $userId,
        $teamId
    ) {
        $userTeamAssociationService =
            $serviceFactory->createUserTeamAssociationService($session);

        // Create a user team association.
        $userTeamAssociation = new UserTeamAssociation();
        $userTeamAssociation->setUserId($userId);
        $userTeamAssociation->setTeamId($teamId);

        // Create the user team association on the server.
        $userTeamAssociations =
            $userTeamAssociationService->createUserTeamAssociations(
                [$userTeamAssociation]
            );

        foreach ($userTeamAssociations as $createdUserTeamAssociation) {
            printf(
                'A user team association with user ID %d and team ID %d was '
                . "created.%s",
                $createdUserTeamAssociation->getUserId(),
                $createdUserTeamAssociation->getTeamId(),
                PHP_EOL
            );
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

        self::runExample(
            new ServiceFactory(),
            $session,
            intval(self::USER_ID),
            intval(self::TEAM_ID)
        );
    }
}


CreateUserTeamAssociations::main();
