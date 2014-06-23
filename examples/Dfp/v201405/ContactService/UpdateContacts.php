<?php
/**
 * This example updates contact addresses. To determine which contacts exist,
 * run GetAllContacts.php.
 *
 * Tags: ContactService.getContactsByStatement
 * Tags: ContactService.updateContacts
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
 * @author     Vincent Tsao
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

  // Get the ContactService.
  $contactService = $user->GetService('ContactService', 'v201405');

  // Set the ID of the contact to update.
  $contactId = "INSERT_CONTACT_ID_HERE";

  // Create a statement to select a single contact by ID.
  $vars =
      MapUtils::GetMapEntries(array('id' => new NumberValue($contactId)));
  $filterStatement = new Statement("WHERE id = :id ORDER BY id ASC LIMIT 1",
      $vars);

  // Get the contact.
  $page = $contactService->getContactsByStatement($filterStatement);
  $contact = $page->results[0];

  // Update the address on the contact.
  $contact->address = '123 New Street, New York, NY, 10011';

  // Update the contact on the server.
  $contacts = $contactService->updateContacts(array($contact));

  foreach ($contacts as $updatedContact) {
    printf("Contact with ID '%d', name '%s', and address '%s' was " .
        "updated.\n", $updatedContact->id, $updatedContact->name,
        $updatedContact->address);
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

