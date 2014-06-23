<?php
/**
 * This example gets all contacts that aren't invited yet. To create contacts,
 * run CreateContacts.php.
 *
 * Tags: ContactService.getContactsByStatement
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

  // Statement parts to help build a statement to only select contacts that
  // aren't invited yet.
  $pqlTemplate = 'WHERE status = :status ORDER BY id LIMIT %d OFFSET %d';
  $STATUS = 'UNINVITED';
  $SUGGESTED_PAGE_LIMIT = 500;
  $offset = 0;

  $page = new ContactPage();

  do {
    // Get contacts by statement.
    $vars = MapUtils::GetMapEntries(array('status' => new TextValue($STATUS)));
    $page = $contactService->getContactsByStatement(new Statement(
        sprintf($pqlTemplate, $SUGGESTED_PAGE_LIMIT, $offset), $vars));

    // Display results.
    if (isset($page->results)) {
      $i = $page->startIndex;
      foreach ($page->results as $contact) {
        printf("%d) Contact with ID \"%d\" and name \"%s\" was found.\n", $i++,
            $contact->id, $contact->name);
      }
    }

    $offset += $SUGGESTED_PAGE_LIMIT;
  } while ($offset < $page->totalResultSetSize);

  printf("Number of results found: %d\n", $page->totalResultSetSize);
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

