<?php
/**
 * This example deactivates all line item custom fields. To determine
 * which custom fields exist, run GetAllCustomFieldsExample.php.
 *
 * Tags: CustomFieldService.getCustomFieldsByStatement
 * Tags: CustomFieldService.performCustomFieldAction
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
 * @author     Paul Rashidi
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

  // Get the CustomFieldService.
  $customFieldService = $user->GetService('CustomFieldService', 'v201405');

  // Create bind variables.
  $vars = MapUtils::GetMapEntries(
      array('entityType' => new TextValue("LINE_ITEM"),
            'isActive' => new BooleanValue("TRUE")));

  // Create statement text to select only active custom fields that apply
  // to line items.
  $filterStatementText =
      "WHERE entityType = :entityType and isActive = :isActive";
  $offset = 0;

  do {
    // Create statement to page through results.
    $filterStatement =
        new Statement($filterStatementText . " LIMIT 500 OFFSET " . $offset,
            $vars);

    // Get custom fields by statement.
    $page = $customFieldService->getCustomFieldsByStatement($filterStatement);

    // Display results.
    $customFieldIds = array();
    if (isset($page->results)) {
      $i = $page->startIndex;
      foreach ($page->results as $customField) {
        print $i . ') Custom field with ID "'
            . $customField->id . '" and name "' . $customField->name
            . "\" will be deactivated.\n";
        $i++;
        $customFieldIds[] = $customField->id;
      }
    }

    $offset += 500;
  } while ($offset < $page->totalResultSetSize);

  print 'Number of custom fields to be deactivated: ' . sizeof($customFieldIds)
      . "\n";

  if (sizeof($customFieldIds) > 0) {
    // Create action statement.
    $filterStatementText =
        sprintf('WHERE id IN (%s)', implode(',', $customFieldIds));
    $filterStatement = new Statement($filterStatementText);

    // Create action.
    $action = new DeactivateCustomFields();

    // Perform action.
    $result = $customFieldService->performCustomFieldAction($action,
        $filterStatement);

    // Display results.
    if (isset($result) && $result->numChanges > 0) {
      print 'Number of custom fields deactivated: ' . $result->numChanges
          . "\n";
    } else {
      print "No custom fields were activated.\n";
    }
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

