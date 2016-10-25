<?php
/**
 * This example gets all custom targeting keys and values. To create custom
 * targeting keys and values, run CreateCustomTargetingKeysAndValues.php.
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
 * @subpackage v201605
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
require_once 'Google/Api/Ads/Dfp/Util/v201605/StatementBuilder.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the CustomTargetingService.
  $customTargetingService =
      $user->GetService('CustomTargetingService', 'v201605');

  // Get all custom targeting keys.
  $customTargetingKeys = getAllCustomTargetingKeyIds($user);

  // Create a statement to get all custom targeting values for a custom
  // targeting key.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->Where('customTargetingKeyId = :customTargetingKeyId')
      ->OrderBy('id ASC')
      ->Limit(StatementBuilder::SUGGESTED_PAGE_LIMIT);

  $totalResultsCounter = 0;

  foreach ($customTargetingKeys as $customTargetingKey) {
    // Set the custom targeting key ID to select from.
    $statementBuilder->WithBindVariableValue('customTargetingKeyId',
        $customTargetingKey);

    // Default for total result set size.
    $totalResultSetSize = 0;
    $statementBuilder->Offset(0);

    do {
      // Get custom targeting values by statement.
      $page = $customTargetingService->getCustomTargetingValuesByStatement(
          $statementBuilder->ToStatement());

      // Display results.
      if (isset($page->results)) {
        $totalResultSetSize = $page->totalResultSetSize;
        foreach ($page->results as $customTargetingValue) {
          printf(
              "%d) Custom targeting value with ID %d, name '%s', display "
                  . "name '%s', and belonging to key with ID %d was found.\n",
              $totalResultsCounter++,
              $customTargetingValue->id,
              $customTargetingValue->name,
              $customTargetingValue->displayName,
              $customTargetingValue->customTargetingKeyId
          );
        }
      }

     $statementBuilder->IncreaseOffsetBy(
         StatementBuilder::SUGGESTED_PAGE_LIMIT);
    } while ($statementBuilder->GetOffset() < $totalResultSetSize);
  }

  printf("Number of results found: %d\n", $totalResultsCounter);
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

/**
 * Gets all custom targeting key IDs.
 */
function getAllCustomTargetingKeyIds($user) {
  $customTargetingKeyIds = array();

  // Get the CustomTargetingService.
  $customTargetingService =
      $user->GetService('CustomTargetingService', 'v201605');

  // Create a statement to get all custom targeting keys.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->OrderBy('id ASC')
      ->Limit(StatementBuilder::SUGGESTED_PAGE_LIMIT);

  // Default for total result set size.
  $totalResultSetSize = 0;

  do {
    // Get custom targeting keys by statement.
    $page = $customTargetingService->getCustomTargetingKeysByStatement(
        $statementBuilder->ToStatement());

    // Display results.
    if (isset($page->results)) {
      $totalResultSetSize = $page->totalResultSetSize;
      $i = $page->startIndex;
      foreach ($page->results as $customTargetingKey) {
        printf(
            "%d) Custom targeting key with ID %d, name '%s', and display "
                . "name '%s' was found.\n",
            $i++,
            $customTargetingKey->id,
            $customTargetingKey->name,
            $customTargetingKey->displayName
        );
        $customTargetingKeyIds[] = $customTargetingKey->id;
      }
    }

    $statementBuilder->IncreaseOffsetBy(StatementBuilder::SUGGESTED_PAGE_LIMIT);
  } while ($statementBuilder->GetOffset() < $totalResultSetSize);

  return $customTargetingKeyIds;
}

