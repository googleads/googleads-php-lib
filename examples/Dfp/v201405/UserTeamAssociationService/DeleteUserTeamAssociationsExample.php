<?php
/**
 * This example removes the user from all its teams. To determine which
 * users exist, run GetAllUsersExample.php.
 *
 * Tags: UserTeamAssociationService.performUserTeamAssociationAction
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
require_once 'Google/Api/Ads/Common/Util/MapUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the UserTeamAssociationService.
  $userTeamAssociationService =
      $user->GetService('UserTeamAssociationService', 'v201405');

  // Set the user to remove from its teams.
  $userId = 'INSERT_USER_ID_HERE';

  // Create bind variables.
  $vars = MapUtils::GetMapEntries(
      array('userId' => new NumberValue($userId)));

  // Create statement text to select user team associations by the user ID.
  $filterStatementText = "WHERE userId = :userId ";

  $offset = 0;

  do {
    // Create statement to page through results.
    $filterStatement = new Statement($filterStatementText
        . " LIMIT 500 OFFSET " . $offset, $vars);

    // Get user team associations by statement.
    $page = $userTeamAssociationService->getUserTeamAssociationsByStatement(
        $filterStatement);

    // Display results.
    if (isset($page->results)) {
      $i = $page->startIndex;
      foreach ($page->results as $uta) {
        print $i . ') User team association between user with ID "'
            . $uta->userId . '" and team with ID "' . $uta->teamId
            . "\" will be deleted.\n";
        $i++;
      }
    }

    $offset += 500;
  } while ($offset < $page->totalResultSetSize);

  print 'Number of user team associations to be deleted: ' . $i . "\n";

  if ($i > 0) {
    // Create action statement.
    $filterStatementText = 'WHERE userId = :userId ';
    $filterStatement = new Statement($filterStatementText, $vars);

    // Create action.
    $action = new DeleteUserTeamAssociations();

    // Perform action.
    $result = $userTeamAssociationService->performUserTeamAssociationAction(
        $action, $filterStatement);

    // Display results.
    if (isset($result) && $result->numChanges > 0) {
      print 'Number of user team associations deleted: '
          . $result->numChanges . "\n";
    } else {
      print "No user team associations were deleted.\n";
    }
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

