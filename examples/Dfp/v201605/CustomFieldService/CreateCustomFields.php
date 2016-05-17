<?php
/**
 * This example creates custom fields. To determine which custom fields exist,
 * run GetAllCustomFields.php.
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
 * @subpackage v201605
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
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
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the CustomFieldService.
  $customFieldService =
      $user->GetService('CustomFieldService', 'v201605');

  // Create custom fields.
  $customField1 = new CustomField();
  $customField1->name = 'Customer comments #' . time();
  $customField1->entityType = 'LINE_ITEM';
  $customField1->dataType = 'STRING';
  $customField1->visibility = 'FULL';

  $customField2 = new CustomField();
  $customField2->name = 'Internal approval status #' . time();
  $customField2->entityType = 'LINE_ITEM';
  $customField2->dataType = 'DROP_DOWN';
  $customField2->visibility = 'FULL';

  // Create the custom fields on the server.
  $customFields = $customFieldService->createCustomFields(
      array($customField1, $customField2));

  // Display results.
  if (isset($customFields)) {
    foreach ($customFields as $customField) {
      printf("A custom field with ID '%s' and name '%s' was created.\n",
          $customField->id, $customField->name);
    }
  } else {
    print "No custom fields were created.\n";
  }

} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

