<?php
/**
 * This example updates a team by adding an ad unit to it. To determine which
 * teams exist, run GetAllTeams.php.
 *
 * PHP version 5
 *
 * Copyright 2014, Google Inc. All Rights Reserved.
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
 *
 * @package    GoogleApiAdsDfp
 * @subpackage v201605
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
error_reporting(E_STRICT | E_ALL);

// You can set the include path to src directory or reference
// DfpUser.php directly via require_once.
// $path = '/path/to/dfp_api_php_lib/src';
$path = dirname(__FILE__) . '/../../../../src';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

require_once 'Google/Api/Ads/Dfp/Lib/DfpUser.php';
require_once 'Google/Api/Ads/Dfp/Util/v201605/StatementBuilder.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

// Set the ID of the team to update.
$teamId = 'INSERT_TEAM_ID_HERE';

// Set the ID of the ad unit to add to the team.
$adUnitId = 'INSERT_AD_UNIT_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the TeamService.
  $teamService = $user->GetService('TeamService', 'v201605');

  // Create a statement to select a single team by ID.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->Where('id = :id')
      ->OrderBy('id ASC')
      ->Limit(1)
      ->WithBindVariableValue('id', $teamId);

  // Get the team.
  $page = $teamService->getTeamsByStatement(
      $statementBuilder->ToStatement());
  $team = $page->results[0];

  // Don't add ad unit if the team has all inventory already.
  if (!$team->hasAllInventory) {
    // Update the team's ad units.
    $team->adUnitIds[] = $adUnitId;

    // Update the team on the server.
    $teams = $teamService->updateTeams(array($team));

    foreach ($teams as $updatedTeam) {
      printf("Team with ID %d, name '%s' was updated.\n", $updatedTeam->id,
          $updatedTeam->name);
    }
  } else {
    printf('No teams were updated.');
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

