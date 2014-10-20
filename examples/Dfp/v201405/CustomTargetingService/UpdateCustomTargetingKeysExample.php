<?php
/**
 * This example updates the display name of each custom targeting key up to the
 * first 500. To determine which custom targeting keys exist, run
 * GetAllCustomTargetingKeysAndValuesExample.php.
 *
 * Tags: CustomTargetingService.getCustomTargetingValuesByStatement
 * Tags: CustomTargetingService.updateCustomTargetingKeys
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
 * @author     Adam Rogal
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

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the CustomTargetingService.
  $customTargetingService =
      $user->GetService('CustomTargetingService', 'v201405');

  // Create a statement to get all custom targeting keys.
  $filterStatement = new Statement('LIMIT 500');

  // Get custom targeting keys by statement.
  $page = $customTargetingService->getCustomTargetingKeysByStatement(
      $filterStatement);

  if (isset($page->results)) {
    $keys = $page->results;

    // Update each local custom targeting key object by changing its display
    // name.
    foreach ($keys as $key) {
      if (empty($key->displayName)) {
        $key->displayName = $key->name;
      }
      $key->displayName .= ' (Deprecated)';
    }

    // Update the custom targeting keys on the server.
    $keys = $customTargetingService->updateCustomTargetingKeys($keys);

    // Display results.
    if (isset($keys)) {
      foreach ($page->results as $key) {
        printf("Custom targeting key with ID '%s', name '%s', and display " .
            "name '%s' was updated.\n", $key->id, $key->name,
            $key->displayName);
      }
    } else {
      print "No custom targeting keys updated.\n";
    }
  } else {
    print "No custom targeting keys found to update.\n";
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

