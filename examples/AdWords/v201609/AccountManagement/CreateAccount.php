<?php
/**
 * This example creates a new account under an AdWords manager account. Note:
 * this example must be run using the credentials of an AdWords manager account,
 * and by default the new account will only be accessible via the parent AdWords
 * manager account.
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
 * @subpackage v201609
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
function CreateAccountExample(AdWordsUser $user) {
  // Get the service, which loads the required classes.
  $managedCustomerService =
      $user->GetService('ManagedCustomerService', ADWORDS_VERSION);

  // Create customer.
  $customer = new ManagedCustomer();
  $customer->name = 'Account #' . uniqid();
  $customer->currencyCode = 'EUR';
  $customer->dateTimeZone = 'Europe/London';

  // Create operation.
  $operation = new ManagedCustomerOperation();
  $operation->operator = 'ADD';
  $operation->operand = $customer;

  $operations = array($operation);

  // Make the mutate request.
  $result = $managedCustomerService->mutate($operations);

  // Display result.
  $customer = $result->value[0];
  printf("Account with customer ID '%s' was created.\n",
      $customer->customerId);
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
  CreateAccountExample($user);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
