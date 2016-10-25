<?php
/**
 * This example adds a new remarketing list audience to the account and
 * retrieves the associated remarketing tag code.
 *
 * PHP version 5
 *
 * Copyright 2016, Google Inc. All Rights Reserved.
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
 * @package    GoogleApiAdsAdWords
 * @subpackage v201605
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 */
function AddAudienceExample(AdWordsUser $user) {
  // Get the services, which loads the required classes.
  $userListService = $user->GetService('AdwordsUserListService', ADWORDS_VERSION);
  $conversionTrackerService =
      $user->GetService('ConversionTrackerService', ADWORDS_VERSION);

  // Create conversion type (tag).
  $conversionType = new UserListConversionType();
  $conversionType->name = 'Mars cruise customers #' . uniqid();

  // Create remarketing user list.
  $userList = new BasicUserList();
  $userList->name = 'Mars cruise customers #' . uniqid();
  $userList->conversionTypes = array($conversionType);

  // Set additional settings (optional).
  $userList->description = 'A list of mars cruise customers in the last year';
  $userList->status = 'OPEN';
  $userList->membershipLifeSpan = 365;

  // Create operation.
  $operation = new UserListOperation();
  $operation->operand = $userList;
  $operation->operator = 'ADD';

  $operations = array($operation);

  // Make the mutate request.
  $result = $userListService->mutate($operations);
  $userList = $result->value[0];

  // Wait a moment before retrieving the conversion snippet.
  sleep(1);

  // Create the selector.
  $selector = new Selector();
  $selector->fields = array('Id');
  $selector->predicates[] =
      new Predicate('Id', 'IN', array($userList->conversionTypes[0]->id));

  // Make the get request.
  $page = $conversionTrackerService->get($selector);
  $conversionTracker = $page->entries[0];

  // Display result.
  printf("Audience with name '%s' and ID '%.0f' was added.\n", $userList->name,
      $userList->id);
  printf("Tag code:\n%s\n", $conversionTracker->snippet);
}

// Don't run the example if the file is being included.
if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
  return;
}

try {
  // Get AdWordsUser from credentials in "../auth.ini"
  // relative to the AdWordsUser.php file's directory.
  $user = new AdWordsUser();

  // Log every SOAP XML request and response.
  $user->LogAll();

  // Run the example.
  AddAudienceExample($user);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
