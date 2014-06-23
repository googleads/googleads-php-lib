<?php
/**
 * This example updates user team associations by setting the overridden access
 * type to read only for all teams that the user belongs to. To determine
 * which users exists, run GetAllUsersExample.php
 *
 * Tags: UserTeamAssociationService.getUserTeamAssociationsByStatement
 * Tags: UserTeamAssociationService.updateUserTeamAssociations
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

  // Get the UserTeamAssociationService.
  $userTeamAssociationService =
      $user->GetService('UserTeamAssociationService', 'v201405');

  // Set the user to set to read only access within its teams.
  $userId = "INSERT_USER_ID_HERE";

  // Create bind variables.
  $vars = MapUtils::GetMapEntries(
      array('userId' => new NumberValue($userId)));

  // Create filter text to select user team associations by the user ID.
  $filterStatement = new Statement("WHERE userId = :userId LIMIT 500", $vars);

  $page = $userTeamAssociationService->getUserTeamAssociationsByStatement(
      $filterStatement);

  if (isset($page->results)) {
    $utas = $page->results;

    // Update each local user team association to read only access.
    foreach ($utas as $uta) {
      $uta->overriddenTeamAccessType = 'READ_ONLY';
    }

    // Update the user team associations on the server.
    $utas = $userTeamAssociationService->updateUserTeamAssociations($utas);

    // Display results.
    if (isset($utas)) {
      foreach ($utas as $uta) {
        print 'User team association between user with ID "'
            . $uta->userId . '" and team with ID "' . $uta->teamId
            . '" was updated to access type "'
            . $uta->overriddenTeamAccessType . '".\n';
      }
    } else {
      print "No user team associations updated.\n";
    }
  } else {
    print "No user team associations found to update.\n";
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

