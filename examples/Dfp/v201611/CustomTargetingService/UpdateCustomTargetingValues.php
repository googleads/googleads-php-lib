<?php
/**
 * This example updates a custom targeting value's display name. To determine
 * which custom targeting keys and values exist, run
 * GetAllCustomTargetingKeysAndValues.php.
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

// Set the ID of the custom targeting value to update.
$customTargetingValueId = 'INSERT_CUSTOM_TARGETING_VALUE_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the CustomTargetingService.
  $customTargetingService =
      $user->GetService('CustomTargetingService', 'v201611');

  // Create a statement to select a single custom targeting value by ID.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->Where('id = :id')
      ->OrderBy('id ASC')
      ->Limit(1)
      ->WithBindVariableValue('id', $customTargetingValueId);

  // Get the custom targeting value.
  $page = $customTargetingService->getCustomTargetingValuesByStatement(
      $statementBuilder->ToStatement());
  $customTargetingValue = $page->results[0];

  // Update the custom targeting value's display name.
  $customTargetingValue->displayName =
      'New custom targeting value display name.';

  // Update the custom targeting value on the server.
  $customTargetingValues =
      $customTargetingService->updateCustomTargetingValues(
          array($customTargetingValue));

  foreach ($customTargetingValues as $updatedCustomTargetingValue) {
    printf("Custom targeting value with ID %d, name '%s', and display name "
        . "'%s' was updated.\n", $updatedCustomTargetingValue->id,
        $updatedCustomTargetingValue->name,
        $updatedCustomTargetingValue->displayName);
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

