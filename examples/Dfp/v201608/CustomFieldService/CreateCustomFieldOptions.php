<?php
/**
 * This example creates custom field options for a drop-down custom field.
 * Once created, custom field options can be found under the options fields of
 * the drop-down custom field and they cannot be deleted. To determine which
 * custom fields exist, run GetAllCustomFields.php.
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
 * @subpackage v201608
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
      $user->GetService('CustomFieldService', 'v201608');

  // Set the ID of the drop-down custom field to create options for.
  $customFieldId = "INSERT_DROP_DOWN_CUSTOM_FIELD_ID_HERE";

  // Create custom field options.
  $customFieldOption1 = new CustomFieldOption();
  $customFieldOption1->displayName = 'Approved';
  $customFieldOption1->customFieldId = $customFieldId;

  $customFieldOption2 = new CustomFieldOption();
  $customFieldOption2->displayName = 'Unapproved';
  $customFieldOption2->customFieldId = $customFieldId;

  // Create the custom targeting keys on the server.
  $customFieldOptions = $customFieldService->createCustomFieldOptions(
      array($customFieldOption1, $customFieldOption2));

  // Display results.
  if (isset($customFieldOptions)) {
    foreach ($customFieldOptions as $customFieldOption) {
      printf("A custom field option with ID '%s' and name '%s' was created.\n",
          $customFieldOption->id, $customFieldOption->displayName);
    }
  } else {
    print "No custom field options were created.\n";
  }

} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

