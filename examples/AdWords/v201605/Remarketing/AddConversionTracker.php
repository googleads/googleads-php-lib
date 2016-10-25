<?php
/**
 * This example adds a new conversion type to the account.
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
function AddConversionTrackerExample(AdWordsUser $user) {
  // Get the service, which loads the required classes.
  $conversionTrackerService =
      $user->GetService('ConversionTrackerService', ADWORDS_VERSION);

  // Create conversion tracker.
  $conversionTracker = new AdWordsConversionTracker();
  $conversionTracker->name = 'Interplanetary Cruise Conversion #' . uniqid();

  // Set additional settings (optional).
  $conversionTracker->status = 'ENABLED';
  $conversionTracker->category = 'DEFAULT';
  $conversionTracker->viewthroughLookbackWindow = 15;
  $conversionTracker->textFormat = 'HIDDEN';
  $conversionTracker->conversionPageLanguage = 'en';
  $conversionTracker->backgroundColor = '#0000FF';

  // Create operation.
  $operation = new ConversionTrackerOperation();
  $operation->operand = $conversionTracker;
  $operation->operator = 'ADD';

  $operations = array($operation);

  // Make the mutate request.
  $result = $conversionTrackerService->mutate($operations);

  // Display result.
  $conversionTracker = $result->value[0];
  printf("Conversion type with name '%s' and ID '%.0f' was added.\n",
      $conversionTracker->name, $conversionTracker->id);
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
  AddConversionTrackerExample($user);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
