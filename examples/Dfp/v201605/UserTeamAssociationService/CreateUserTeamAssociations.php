<?php
/**
 * This example adds a user to a team by creating an association between the
 * two. To determine which teams exist, run GetAllTeams.php. To
 * determine which users exist, run GetAllUsers.php.
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
 * @subpackage v201605
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
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
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the UserTeamAssociationService.
  $userTeamAssociationService =
      $user->GetService('UserTeamAssociationService', 'v201605');

  // Set the team ID and user IDs to associate together.
  $teamId = 'INSERT_TEAM_ID_HERE';
  $userIds = array('INSERT_USER_ID_HERE');

  // Create an array to store local user team association objects.
  $utas = array();

  // For each user, associate it with the given team.
  foreach ($userIds as $userId) {
    // Create local user team association.
    $uta = new UserTeamAssociation();
    $uta->teamId = $teamId;
    $uta->userId = $userId;
    $utas[] = $uta;
  }

  // Create the user team associations on the server.
  $utas = $userTeamAssociationService->createUserTeamAssociations($utas);

  // Display results.
  if (isset($utas)) {
    foreach ($utas as $uta) {
      print 'A user team association between user with ID "' . $uta->userId
          . '" and team with ID "' . $uta->teamId
          . "\" was created.\n";
    }
  } else {
    print "No user team associations created.";
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

