<?php
/**
 * This example updates teams by adding an ad unit to the first 5.
 * To determine which teams exist, run GetAllTeamsExample.java.
 *
 * Tags: TeamService.getTeamsByStatement
 * Tags: TeamService.updateTeams
 *
 * PHP version 5
 *
 * Copyright 2013, Google Inc. All Rights Reserved.
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
 * @subpackage v201405
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Paul Rashidi
 */
error_reporting(E_STRICT | E_ALL);

// You can set the include path to src directory or reference
// DfpUser.php directly via require_once.
// $path = '/path/to/dfp_api_php_lib/src';
$path = dirname(__FILE__) . '/../../../../src';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

require_once 'Google/Api/Ads/Dfp/Lib/DfpUser.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the TeamService.
  $teamService = $user->GetService('TeamService', 'v201405');

  // Set the ID of the ad unit to add to the teams.
  $adUnitID = "INSERT_AD_UNIT_ID_HERE";

  // Create a statement to select first 5 teams that aren't
  // built-in.
  $filterStatement = new Statement("WHERE id > 0 LIMIT 5");

  // Get teams by statement.
  $page = $teamService->getTeamsByStatement($filterStatement);

  if (isset($page->results)) {
    $teams = $page->results;

    $i = 0;
    // Update each local team object by appending the ad unit to it.
    foreach ($teams as $team) {
      if (!$team->hasAllInventory) {
        if (!isset($team->adUnitIds)) {
          // Empty team inventory.
          $team->adUnitIds = array();
        }
        $team->adUnitIds[] = $adUnitID;
        $i++;
      }
    }

    // Reorganize the $teams array.
    $teams = array_values($teams);

    // Update the teams on the server.
    $teams = $teamService->updateTeams($teams);

    // Display results.
    if (isset($teams)) {
      foreach ($teams as $team) {
        print 'A team with ID "' . $team->id
            . '" and name "' . $team->name . "\" was updated.\n";
      }
    } else {
      print "No teams updated.\n";
    }
  } else {
    print "No teams found to update.\n";
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

