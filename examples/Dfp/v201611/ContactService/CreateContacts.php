<?php
/**
 * This example creates new contacts. To determine which contacts exist, run
 * GetAllContacts.php.
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
 * @subpackage v201611
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

  // Get the ContactService.
  $contactService = $user->GetService('ContactService', 'v201611');

  // Set the ID of the advertiser company this contact is associated with.
  $advertiserCompanyId = 'INSERT_ADVERTISER_COMPANY_ID_HERE';

  // Set the ID of the agency company this contact is associated with.
  $agencyCompanyId = 'INSERT_AGENCY_COMPANY_ID_HERE';

  // Create an advertiser contact.
  $advertiserContact = new Contact();
  $advertiserContact->name = sprintf('Mr. Advertiser #%s', uniqid());
  $advertiserContact->email = 'advertiser@advertising.com';
  $advertiserContact->companyId = $advertiserCompanyId;

  // Create an agency contact.
  $agencyContact = new Contact();
  $agencyContact->name = sprintf('Ms. Agency #%s', uniqid());
  $agencyContact->email = 'agency@agencies.com';
  $agencyContact->companyId = $agencyCompanyId;

  // Create the contacts on the server.
  $contacts = $contactService->createContacts(array($advertiserContact,
      $agencyContact));

  // Display results.
  if (isset($contacts)) {
    foreach ($contacts as $contact) {
      printf("A contact with ID \"%d\" and name \"%s\" was created.\n",
          $contact->id, $contact->name);
    }
  } else {
    printf("No contacts were created.\n");
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

