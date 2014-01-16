<?php
/**
 * This example demonstrates how to detect and handle 2-step authorization
 * errors.
 *
 * Copyright 2012, Google Inc. All Rights Reserved.
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
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @category   WebServices
 * @copyright  2012, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Adam Rogal <api.arogal@gmail.com>
 * @author     Eric Koleda
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

/**
 * Runs the example.
 */
function HandleTwoFactorAuthorizationErrorExample() {
  // Create an AdWordsUser using the credentials for a 2-step tester account.
  $user = new AdWordsUser(NULL, '2steptester@gmail.com', 'testaccount');

  try {
    $authToken = $user->GetAuthToken();
    printf("Successfully retrieved auth token for the account '%s': '%s'\n",
        $user->GetEmail(), $authToken);
  } catch (AuthTokenException $e) {
    if (strpos($e->GetError(), 'InvalidSecondFactor') !== FALSE) {
      // See http://goo.gl/SHgXV for more details.
      print "The account has 2-step verification enabled, so an "
          . "application-specific password must be used instead.\n";
    } else {
      print "Invalid email or password.\n";
    }
  }
}

// Don't run the example if the file is being included.
if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
  return;
}

try {
  // Run the example.
  HandleTwoFactorAuthorizationErrorExample();
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
