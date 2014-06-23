<?php
/**
 * This example gets custom targeting values for the given predefined custom
 * targeting key. The statement retrieves up to the maximum page size limit of
 * 500. To create custom targeting values, run
 * CreateCustomTargetingKeysAndValuesExample.php. To determine which custom
 * targeting keys exist, run GetAllCustomTargetingKeysAndValuesExample.php.
 *
 * Tags: CustomTargetingService.getCustomTargetingValuesByStatement
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
require_once 'Google/Api/Ads/Common/Util/MapUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the CustomTargetingService.
  $customTargetingService =
      $user->GetService('CustomTargetingService', 'v201405');

  // Set the ID of the custom targeting key to get custom targeting values for.
  $keyId = 'INSERT_CUSTOM_TARGETING_KEY_ID_HERE';

  // Create a statement to only select custom targeting values for a given key.
  $filterStatement = new Statement(
      'WHERE customTargetingKeyId = :keyId LIMIT 500',
      MapUtils::GetMapEntries(array('keyId' => new NumberValue($keyId))));

  // Get custom targeting keys by statement.
  $page = $customTargetingService->getCustomTargetingValuesByStatement(
      $filterStatement);

  // Display results.
  if (isset($page->results)) {
    $i = $page->startIndex;
    foreach ($page->results as $key) {
      printf("%d) Custom targeting value with ID '%s', name '%s', and " .
          "display name '%s' was found.\n", $i, $key->id, $key->name,
          $key->displayName);
      $i++;
    }
  }

  printf("Number of results found: %d\n", sizeof($page->results));
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

