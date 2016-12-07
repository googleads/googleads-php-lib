<?php
/**
 * This example updates a custom targeting key's display name. To determine
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

// Set the ID of the custom targeting key to update.
$customTargetingKeyId = 'INSERT_CUSTOM_TARGETING_KEY_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the CustomTargetingService.
  $customTargetingService =
      $user->GetService('CustomTargetingService', 'v201611');

  // Create a statement to select a single custom targeting key by ID.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->Where('id = :id')
      ->OrderBy('id ASC')
      ->Limit(1)
      ->WithBindVariableValue('id', $customTargetingKeyId);

  // Default for total result set size.
  $totalResultSetSize = 0;

  // Get the custom targeting key.
  $page = $customTargetingService->getCustomTargetingKeysByStatement(
      $statementBuilder->ToStatement());
  $customTargetingKey = $page->results[0];

  // Update the custom targeting key's display name.
  $customTargetingKey->displayName = 'New custom targeting key display name.';

  // Update the custom targeting key on the server.
  $customTargetingKeys =
      $customTargetingService->
          updateCustomTargetingKeys(array($customTargetingKey));

  foreach ($customTargetingKeys as $updatedCustomTargetingKey) {
    printf("Custom targeting key with ID %d, name '%s', and display name '%s' "
        . "was updated.\n", $updatedCustomTargetingKey->id,
        $updatedCustomTargetingKey->name,
        $updatedCustomTargetingKey->displayName);
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

