<?php
/**
 * This example updates custom field descriptions. To determine which custom
 * fields exist, run GetAllCustomFieldsExample.php.
 *
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
 * @subpackage v201308
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
  $customFieldService = $user->GetService('CustomFieldService', 'v201308');

  // Set the ID of the custom field to update.
  $customFieldId = "INSERT_CUSTOM_FIELD_ID_HERE";

  // Get the custom field.
  $customField = $customFieldService->getCustomField($customFieldId);

  if (isset($customField)) {
    $customField->description = "Description " . time();

    $customFields = array();
    $customFields[] = $customField;

    // Update the custom field on the server.
    $customFields = $customFieldService->updateCustomFields($customFields);

    // Display results.
    if (isset($customFields)) {
      foreach ($customFields as $customField) {
        print 'Custom field with ID "'
            . $customField->id . '", name "' . $customField->name
            . '", and description "' . $customField->description
            . "\" was updated.\n";
      }
    } else {
      print "No custom fields were updated.\n";
    }
  } else {
    print "No custom fields found to update.\n";
  }

} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

