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

namespace Google\AdsApi\Examples\Dfp\v201802\TeamService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201802\StatementBuilder;
use Google\AdsApi\Dfp\v201802\TeamService;

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
        DfpServices $dfpServices,
        DfpSession $session,
        $teamId
    ) {
        $teamService = $dfpServices->get($session, TeamService::class);

        // Create a statement to only select a single team by ID.
        $statementBuilder = new StatementBuilder();
        $statementBuilder->where('id = :id');
        $statementBuilder->orderBy('id ASC');
        $statementBuilder->limit(1);
        $statementBuilder->withBindVariableValue('id', $teamId);

        // Get the team.
        $page = $teamService->getTeamsByStatement($statementBuilder->toStatement());
        $team = $page->getResults()[0];

        $newDescription = $team->getDescription() . ' - UPDATED';
        $team->setDescription($newDescription);

        // Update the team on the server.
        $teams = $teamService->updateTeams([$team]);

        foreach ($teams as $updatedTeam) {
            printf(
                "Team with ID %d and name '%s' was updated.\n",
                $updatedTeam->getId(),
                $updatedTeam->getName()
            );
        }
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()
            ->build();

        // Construct an API session configured from a `adsapi_php.ini` file and the
        // OAuth2 credentials above.
        $session = (new DfpSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        self::runExample(new DfpServices(), $session, intval(self::TEAM_ID));
    }
}

UpdateTeams::main();
