<?php
/**
 * This example deletes custom targeting values for a given custom targeting
 * key. To determine which custom targeting keys and values exist, run
 * GetAllCustomTargetingKeysAndValuesExample.php.
 *
 * Tags: CustomTargetingService.getCustomTargetingValuesByStatement
 * Tags: CustomTargetingService.performCustomTargetingValueAction
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

  // Set ID of the custom targeting key to delete values from.
  $keyId = 'INSERT_CUSTOM_TARGETING_KEY_ID_HERE';

  // Create statement text to only select custom values by the given custom
  // targeting key ID.
  $filterStatementText = 'WHERE customTargetingKeyId = :keyId';

  // Create bind variables.
  $vars = MapUtils::GetMapEntries(array('keyId' => new NumberValue($keyId)));

  $offset = 0;
  $valueIds = array();

  do {
    // Create statement to page through results.
    $filterStatement = new Statement($filterStatementText .
        ' LIMIT 500 OFFSET ' . $offset, $vars);

    // Get custom targeting values by statement.
    $page = $customTargetingService->getCustomTargetingValuesByStatement(
        $filterStatement);

    if (isset($page->results)) {
      foreach ($page->results as $customTargetingValue) {
        $valueIds[] = $customTargetingValue->id;
      }
    }

    $offset += 500;
  } while ($offset < $page->totalResultSetSize);

  printf("Number of custom targeting values to be deleted: %d\n",
      sizeof($valueIds));

  if (sizeof($valueIds) > 0) {
    // Create action statement.
    $filterStatementText .= sprintf(' AND id IN (%s)', implode(',', $valueIds));
    $filterStatement = new Statement($filterStatementText, $vars);

    // Create action.
    $action = new DeleteCustomTargetingValues();

    // Perform action.
    $result = $customTargetingService->performCustomTargetingValueAction(
        $action, $filterStatement);

    // Display results.
    if (isset($result) && $result->numChanges > 0) {
      printf("Number of custom targeting values deleted: %d\n",
          $result->numChanges);
    } else {
      print "No custom targeting values were deleted.\n";
    }
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

