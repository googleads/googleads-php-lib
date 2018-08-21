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

namespace Google\AdsApi\Examples\AdManager\v201805\TeamService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v201805\StatementBuilder;
use Google\AdsApi\AdManager\v201805\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example updates a team's description.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class UpdateTeams
{

    const TEAM_ID = 'INSERT_TEAM_ID_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        $teamId
    ) {
        $teamService = $serviceFactory->createTeamService($session);

        // Create a statement to only select a single team by ID.
        $statementBuilder = new StatementBuilder();
        $statementBuilder->where('id = :id');
        $statementBuilder->orderBy('id ASC');
        $statementBuilder->limit(1);
        $statementBuilder->withBindVariableValue('id', $teamId);

        // Get the team.
        $page = $teamService->getTeamsByStatement(
            $statementBuilder->toStatement()
        );
        $team = $page->getResults()[0];

        $newDescription = $team->getDescription() . ' - UPDATED';
        $team->setDescription($newDescription);

        // Update the team on the server.
        $teams = $teamService->updateTeams([$team]);

        foreach ($teams as $updatedTeam) {
            printf(
                "Team with ID %d and name '%s' was updated.%s",
                $updatedTeam->getId(),
                $updatedTeam->getName(),
                PHP_EOL
            );
        }
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()
            ->build();

        // Construct an API session configured from a `adsapi_php.ini` file
        // and the OAuth2 credentials above.
        $session = (new AdManagerSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        self::runExample(new ServiceFactory(), $session, intval(self::TEAM_ID));
    }
}

UpdateTeams::main();
