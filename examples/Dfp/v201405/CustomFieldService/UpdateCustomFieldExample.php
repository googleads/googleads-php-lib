<?php
/**
 * This example updates custom field descriptions. To determine which custom
 * fields exist, run GetAllCustomFieldsExample.php.
 *
 * Tags: CustomFieldService.getCustomFieldsByStatement
 * Tags: CustomFieldService.updateCustomFields
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

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the CustomFieldService.
  $customFieldService = $user->GetService('CustomFieldService', 'v201405');

  // Set the ID of the custom field to update.
  $customFieldId = "INSERT_CUSTOM_FIELD_ID_HERE";

  // Create a statement to select a single custom field by ID.
  $vars =
      MapUtils::GetMapEntries(array('id' => new NumberValue($customFieldId)));
  $filterStatement = new Statement("WHERE id = :id ORDER BY id ASC LIMIT 1",
      $vars);

  // Get the custom field.
  $page = $customFieldService->getCustomFieldsByStatement($filterStatement);
  $customField = $page->results[0];

  // Update the description on the custom field.
  $customField->description = "Description " . time();

  // Update the custom field on the server.
  $customFields = $customFieldService->updateCustomFields(array($customField));

  foreach ($customFields as $customField) {
    printf("Custom field with ID '%s', name '%s', and description '%s' was "
        . "updated.\n", $customField->id, $customField->name,
        $customField->description);
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

