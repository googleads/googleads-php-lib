<?php
/**
 * This example gets all custom targeting keys and the values. To create custom
 * targeting keys and values, run CreateCustomTargetingKeysAndValues.php.
 *
 * Tags: CustomTargetingService.getCustomTargetingKeysByStatement
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

  $keys = array();
  $offset = 0;

  do {
    // Create statement to page through all custom targeting keys.
    $filterStatement = new Statement('LIMIT 500 OFFSET ' . $offset);

    // Get custom targeting keys by statement.
    $page = $customTargetingService->getCustomTargetingKeysByStatement(
        $filterStatement);

    if (isset($page->results)) {
      $keys = array_merge($keys, $page->results);
    }

    $offset += 500;
  } while ($offset < $page->totalResultSetSize);


  $values = array();

  if (sizeof($keys) > 0) {
    $keyIds = array_map(create_function('$key', 'return $key->id;'), $keys);

    // Create statement text to all custom targeting values for all custom
    // targeting keys.
    $filterStatementText = sprintf('WHERE customTargetingKeyId IN (%s)',
          implode(',', $keyIds));
    $offset = 0;

    do {
      // Create statement to page through all custom targeting values.
      $filterStatement = new Statement($filterStatementText .
          ' LIMIT 500 OFFSET ' . $offset);

      // Get custom targeting values by statement.
      $page = $customTargetingService->getCustomTargetingValuesByStatement(
          $filterStatement);

      if (isset($page->results)) {
        $values = array_merge($values, $page->results);
      }

      $offset += 500;
    } while ($offset < $page->totalResultSetSize);
  }

  // Create map of custom targeting key id to custom targeting values.
  $keyIdToValueMap = array();
  foreach ($values as $value) {
    $keyIdToValueMap[$value->customTargetingKeyId][] = $value;
  }

  // Display keys and values.
  $keyCount = 0;
  foreach ($keys as $key) {
    printf("%d) Custom targeting key with ID '%s', name '%s', display " .
        "name '%s', and type '%s' was found.\n", $keyCount, $key->id,
        $key->name, $key->displayName, $key->type);
    if (array_key_exists($key->id, $keyIdToValueMap)) {
      $valueCount = 0;
      foreach ($keyIdToValueMap[$key->id] as $value) {
        printf("\t%d) Custom targeting value with ID '%s', name '%s', and " .
            "display name '%s' was found.\n", $valueCount, $value->id,
            $value->name, $value->displayName);
        $valueCount++;
      }
    }
    $keyCount++;
  }

  printf("Found %d keys and %d values.\n", sizeof($keys), sizeof($values));
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

