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

namespace Google\AdsApi\Examples\Dfp\v201805\UserTeamAssociationService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201805\StatementBuilder;
use Google\AdsApi\Dfp\v201805\TeamAccessType;
use Google\AdsApi\Dfp\v201805\UserTeamAssociationService;

/**
 * This example updates a single user team association for a given user.
 * To determine which user team associations exist, run
 * GetAllUserTeamAssociations.php. To determine which users exist, run
 * GetAllUsers.php
 *
 * This example is meant to be run from a command line (not as a web page) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class UpdateUserTeamAssociations
{

    const USER_ID = 'INSERT_USER_ID_HERE';
    const TEAM_ID = 'INSERT_TEAM_ID_HERE';

    public static function runExample(
        DfpServices $dfpServices,
        DfpSession $session,
        $userId,
        $teamId
    ) {
        // Get the UserTeamAssociationService.
        $userTeamAssociationService =
            $dfpServices->get($session, UserTeamAssociationService::class);

        // Create a statement to only select a single user team association
        // by user's and team's ID.
        $statementBuilder = (new StatementBuilder())
            ->where("userId = :userId AND teamId = :teamId")
            ->limit(1)
            ->withBindVariableValue("userId", $userId)
            ->withBindVariableValue("teamId", $teamId);

        // Get the user team association.
        $page = $userTeamAssociationService->getUserTeamAssociationsByStatement(
            $statementBuilder->toStatement()
        );

        $userTeamAssociation = $page->getResults()[0];

        // Update the user's access type on the team.
        $userTeamAssociation->setOverriddenTeamAccessType(
            TeamAccessType::READ_ONLY
        );

        // Update the user team associations on the server.
        $userTeamAssociations = $userTeamAssociationService
            ->updateUserTeamAssociations([$userTeamAssociation]);

        foreach ($userTeamAssociations as $updatedUserTeamAssociation) {
            printf(
                'User team association with user ID %d and team ID %d was' .
                ' updated.%s',
                $updatedUserTeamAssociation->getUserId(),
                $updatedUserTeamAssociation->getTeamId(),
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

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new DfpSessionBuilder())
            ->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        self::runExample(
            new DfpServices(),
            $session,
            intval(self::USER_ID),
            intval(self::TEAM_ID)
        );
    }
}

UpdateUserTeamAssociations::main();
