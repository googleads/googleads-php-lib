<?php
/**
 * This example adds express businesses. To get express
 * businesses, run GetExpressBusinesses.php.
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
function AddExpressBusinessesExample(AdWordsUser $user) {
  // Get the service, which loads the required classes.
  $businessService = $user->GetService('ExpressBusinessService',
    ADWORDS_VERSION);

  $business1 = new ExpressBusiness();
  $business1->status = 'ENABLED';
  $business1->name = 'Express Interplanetary Cruise #' . uniqid();
  $business1->website = 'http://www.example.com/cruise1';

  $business2 = new ExpressBusiness();
  $business2->status = 'ENABLED';
  $business2->name = 'Express Interplanetary Cruise #' . uniqid();
  $business2->website = 'http://www.example.com/cruise2';

  $operations = array();

  $operation1 = new ExpressBusinessOperation();
  $operation1->operand = $business1;
  $operation1->operator = 'ADD';
  $operations[] = $operation1;

  $operation2 = new ExpressBusinessOperation();
  $operation2->operand = $business2;
  $operation2->operator = 'ADD';
  $operations[] = $operation2;

  $addedBusinesses = $businessService->mutate($operations);

  foreach($addedBusinesses as $addedBusiness) {
    printf("Added express business with ID %d and name '%s'\n",
      $addedBusiness->id, $addedBusiness->name);
  }
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
  AddExpressBusinessesExample($user);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
