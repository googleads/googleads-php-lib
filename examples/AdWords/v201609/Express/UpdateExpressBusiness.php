<?php
/**
 * This example updates an express businesses. To add an express
 * business, run AddExpressBusinesses.php.
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

// Enter parameters required by the code example.
$businessId = 'INSERT_BUSINESS_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 */
function UpdateExpressBusinessExample(AdWordsUser $user, $businessId) {
  // Get the service, which loads the required classes.
  $businessService = $user->GetService('ExpressBusinessService',
    ADWORDS_VERSION);

  // Update the name and website for the business.
  $business = new ExpressBusiness();
  $business->id = $businessId;
  $business->name = 'Express Interplanetary Cruise #' . uniqid();
  $business->website = 'http://www.example.com/?myParam=' . uniqid();

  $operations = array();

  $operation = new ExpressBusinessOperation();
  $operation->operand = $business;
  $operation->operator = 'SET';
  $operations[] = $operation;

  $result = $businessService->mutate($operations);
  $mutatedBusiness = $result[0];

  printf("Express business with ID %d and name '%s' was updated\n",
      $mutatedBusiness->id, $mutatedBusiness->name);
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
  UpdateExpressBusinessExample($user, $businessId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
