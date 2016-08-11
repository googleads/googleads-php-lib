<?php
/**
 * This example creates new users. To determine which users
 * exist, run GetAllUsers.php.
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

  // Get the UserService.
  $userService = $user->GetService('UserService', 'v201605');

  // Set the user's email addresses and names.
  $emailAndNames =
      array(array('INSERT_EMAIL_ADDRESS_HERE', 'INSERT_NAME_HERE'),
          array('INSERT_ANOTHER_EMAIL_ADDRESS_HERE',
              'INSERT_ANOTHER_NAME_HERE'));

  // Roles can be obtained by running GetAllRoles.php.
  $roleId = 'INSERT_ROLE_ID_HERE';

  // Create an array to store local user objects.
  $users = array();

  for ($i = 0;  $i < sizeof($emailAndNames); $i++) {
    $newUser = new User();
    $newUser->email = $emailAndNames[$i][0];
    $newUser->name = $emailAndNames[$i][1];
    $newUser->roleId = $roleId;

    $users[] = $newUser;
  }

  // Create the users on the server.
  $users = $userService->createUsers($users);

  // Display results.
  if (isset($users)) {
    foreach ($users as $user) {
      print 'A user with ID "' . $user->id
          . '", email "' . $user->email
          . '", and role "' . $user->roleName . "\" was created.\n";
    }
  } else {
    print "No users created.\n";
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

