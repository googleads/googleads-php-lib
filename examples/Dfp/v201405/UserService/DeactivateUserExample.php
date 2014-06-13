<?php
/**
 * This example deactivates a user. Deactivated users can no longer make
 * requests to the API. The user making the request cannot deactivate itself.
 * To determine which users exist, run GetAllUsersExample.php.
 *
 * Tags: UserService.getUsersByStatement
 * Tags: UserService.performUserAction
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
 * @author     Eric Koleda
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

  // Get the UserService.
  $userService = $user->GetService('UserService', 'v201405');

  // Set the ID of the user to deactivate.
  $userId = 'INSERT_USER_ID_HERE';

  // Create bind variables.
  $vars = MapUtils::GetMapEntries(array('id' => new NumberValue($userId)));

  // Create statement text to get user by id.
  $filterStatementText = "WHERE id = :id";

  $offset = 0;

  do {
    // Create statement to page through results.
    $filterStatement =
        new Statement($filterStatementText . " LIMIT 500 OFFSET " . $offset,
            $vars);

    // Get users by statement.
    $page = $userService->getUsersByStatement($filterStatement);

    // Display results.
    $userIds = array();
    if (isset($page->results)) {
      $i = $page->startIndex;
      foreach ($page->results as $usr) {
        print $i . ') User with ID "' . $usr->id
            . '", email "' . $usr->email
            . '", and status "' . ($usr->isActive ? 'ACTIVE' : 'INACTIVE')
            . "\" will be deactivated.\n";
        $i++;
        $userIds[] = $usr->id;
      }
    }

    $offset += 500;
  } while ($offset < $page->totalResultSetSize);

  print 'Number of users to be deactivated: ' . sizeof($userIds) . "\n";

  if (sizeof($userIds) > 0) {
    // Create action statement.
    $filterStatementText = sprintf('WHERE id IN (%s)', implode(',', $userIds));
    $filterStatement = new Statement($filterStatementText);

    // Create action.
    $action = new DeactivateUsers();

    // Perform action.
    $result = $userService->performUserAction($action, $filterStatement);

    // Display results.
    if (isset($result) && $result->numChanges > 0) {
      print 'Number of users deactivated: ' . $result->numChanges . "\n";
    } else {
      print "No users were deactivated.\n";
    }
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

