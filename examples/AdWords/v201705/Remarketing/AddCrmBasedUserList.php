<?php
/**
 * This example adds a user list (a.k.a. audience) and uploads members to
 * populate the list.
 *
 * <p>
 * <em>Note:</em> It may take up to several hours for the list to be populated
 * with members.
 * Email addresses must be associated with a Google account.
 * For privacy purposes, the user list size will show as zero until the list has
 * at least 1,000 members. After that, the size will be rounded to the two most
 * significant digits.
 * </p>
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
 * @subpackage v201705
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file.
require_once dirname(dirname(__FILE__)) . '/init.php';

$EMAILS = array('customer1@example.com', 'customer2@example.com',
    'Client3@example.com ');

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param array $EMAILS a list of member emails to be added to a user list
 */
function AddCrmBasedUserList(AdWordsUser $user, array $EMAILS) {
  // Get the services, which loads the required classes.
  $userListService = $user->GetService('AdwordsUserListService',
      ADWORDS_VERSION);

  // Create a user list.
  $userList = new CrmBasedUserList();
  $userList->name = 'Customer relationship management list #' . uniqid();
  $userList->description =
      'A list of customers that originated from email addresses';

  // Maximum life span is 180 days.
  $userList->membershipLifeSpan = 180;

  // Create operations to add the user list.
  $operation = new UserListOperation();
  $operation->operand = $userList;
  $operation->operator = 'ADD';

  $operations = array($operation);

  // Add user list.
  $result = $userListService->mutate($operations);

  // Display user list.
  $userListAdded = $result->value[0];
  printf("User list with name '%s' and ID '%d' was added.\n",
      $userListAdded->name, $userListAdded->id);

  // Get a user list ID.
  $userListId = $userListAdded->id;

  $mutateMembersOperations = array();
  // Create operation to add members to the user list based on email addresses.
  $mutateMembersOperation = new MutateMembersOperation();
  $operand = new MutateMembersOperand();
  $operand->userListId = $userListId;

  $members = array();
  // Hash normalized email addresses based on SHA-256 hashing algorithm.
  foreach ($EMAILS as $email) {
    $memberByEmail = new Member();
    $memberByEmail->hashedEmail = normalizeAndHash($email);
    $members[] = $memberByEmail;
  }

  // Adding address info is currently available on a whitelist-only basis.
  // This code demonstrates how to do it, and you can uncomment it if you are on
  // the whitelist.
  /*
  $firstName = 'John';
  $lastName = 'Doe';
  $countryCode = 'US';
  $zipCode = '10011';

  $addressInfo = new AddressInfo();
  // First and last name must be normalized and hashed.
  $addressInfo->hashedFirstName = normalizeAndHash($firstName);
  $addressInfo->hashedLastName = normalizeAndHash($lastName);
  // Country code and zip code are sent in plain text.
  $addressInfo->countryCode = $countryCode;
  $addressInfo->zipCode = $zipCode;

  $memberByAddress = new Member();
  $memberByAddress->addressInfo = $addressInfo;
  $members[] = $memberByAddress;
  */

  // Add members to the operand and add the operation to the list.
  $operand->membersList = $members;
  $mutateMembersOperation->operand = $operand;
  $mutateMembersOperation->operator = 'ADD';
  $mutateMembersOperations[] = $mutateMembersOperation;

  // Add members to the user list based on email addresses.
  $mutateMembersResult =
      $userListService->mutateMembers($mutateMembersOperations);

  // Display results.
  // Reminder: it may take several hours for the list to be populated with
  //     members.
  foreach ($mutateMembersResult->userLists as $userListResult) {
    printf(
        "%d email addresses were uploaded to user list with name '%s' and ID"
            . " '%d' and are scheduled for review.\n",
        count($EMAILS),
        $userListResult->name,
        $userListResult->id
    );
  }
}

function normalizeAndHash($value) {
  return hash('sha256', strtolower(trim($value)));
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
  AddCrmBasedUserList($user, $EMAILS);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
