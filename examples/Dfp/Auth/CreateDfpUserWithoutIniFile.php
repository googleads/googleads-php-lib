<?php
/**
 * This example demonstrates how to create an DfpUser object without using an
 * auth.ini file.
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
 * @subpackage Auth
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
error_reporting(E_STRICT | E_ALL);

// Add the library to the include path. This is not neccessary if you've already
// done so in your php.ini file.
$path = dirname(__FILE__) . '/../../../src';

set_include_path(get_include_path() . PATH_SEPARATOR . $path);

require_once 'Google/Api/Ads/Dfp/Lib/DfpUser.php';
require_once dirname(__FILE__) . '/../../Common/ExampleUtils.php';

// If you don't have a client ID or secret,
// see https://cloud.google.com/console/project
define('CLIENT_ID', 'INSERT_CLIENT_ID_HERE');
define('CLIENT_SECRET', 'INSERT_CLIENT_SECRET_HERE');
// If you don't have a refresh token, see GetRefreshTokenWithoutIniFile.php.
define('REFRESH_TOKEN', 'INSERT_REFRESH_TOKEN_HERE');
define('NETWORK_CODE', 'INSERT_NETWORK_CODE_HERE');
define('APPLICATION_NAME', 'INSERT_APPLICATION_NAME_HERE');

/**
 * Run an example using the $user object.
 * @param string $user the user that contains the client ID and secret
 */
function RunExample(DfpUser $user) {
  // Get the NetworkService.
  $networkService = $user->GetService('NetworkService');

  // Gets the current network.
  $network = $networkService->getCurrentNetwork();

  printf("Current network has network code %d and display name \"%s\".\n",
    $network->networkCode, $network->displayName);
}

// Don't run the example if the file is being included.
if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
  return;
}

try {
  $oauth2Info = array(
    'client_id' => CLIENT_ID,
    'client_secret' => CLIENT_SECRET,
    'refresh_token' => REFRESH_TOKEN
  );

  $user = new DfpUser(null, APPLICATION_NAME, NETWORK_CODE, null, $oauth2Info);
  $user->LogDefault();

  // Get the OAuth2 credential.
  RunExample($user);
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}

