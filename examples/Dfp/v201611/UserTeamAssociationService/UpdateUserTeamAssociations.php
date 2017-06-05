<?php
/**
 * This example updates the access of a user on a team. To determine which user
 * team associations exist, run GetAllUserTeamAssociations.php.
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
 * @subpackage v201611
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
require_once 'Google/Api/Ads/Dfp/Util/v201611/StatementBuilder.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

// Set the user ID of the user team association to update.
$userId = 'INSERT_USER_ID_HERE';

// Set the team ID of the user team association to update.
$teamId = 'INSERT_TEAM_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the UserTeamAssociationService.
  $userTeamAssociationService =
      $user->GetService('UserTeamAssociationService', 'v201611');

  // Create a statement to select a single user team association by ID.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->Where('userId = :userId AND teamId = :teamId')
      ->OrderBy('userId ASC, teamId ASC')
      ->Limit(1)
      ->WithBindVariableValue('userId', $userId)
      ->WithBindVariableValue('teamId', $teamId);

  // Get the user team association.
  $page = $userTeamAssociationService->getUserTeamAssociationsByStatement(
      $statementBuilder->ToStatement());
  $userTeamAssociation = $page->results[0];

  // Update the user's access type on the team.
  $userTeamAssociation->overriddenTeamAccessType = 'READ_ONLY';

  // Update the user team association on the server.
  $userTeamAssociations =
      $userTeamAssociationService->updateUserTeamAssociations(
          array($userTeamAssociation));

  foreach ($userTeamAssociations as $updatedUserTeamAssociation) {
    printf("User team association with user ID %d, and team ID %d was "
        . "updated.\n", $updatedUserTeamAssociation->userId,
        $updatedUserTeamAssociation->teamId);
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

