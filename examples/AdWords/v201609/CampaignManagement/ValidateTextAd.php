<?php
/**
 * This example validates a text ad without creating it, which can be useful
 * when checking for policy violations.
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
require_once UTIL_PATH . '/ErrorUtils.php';

// Enter parameters required by the code example.
$adGroupId = 'INSERT_AD_GROUP_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $adGroupId the ID of the ad group to hypothetically add the
 *     expanded text ad to
 */
function ValidateTextAdExample(AdWordsUser $user, $adGroupId) {
  // Get the service, which loads the required classes. Passing true for the
  // parameter $validateOnly will ensure that ads aren't created.
  $adGroupAdValidationService =
      $user->GetService('AdGroupAdService', ADWORDS_VERSION, null, null, true);

  // Create invalid expanded text ad.
  $expandedTextAd = new ExpandedTextAd();
  $expandedTextAd->headlinePart1 = 'Luxury Cruise to Mars';
  $expandedTextAd->headlinePart2 = 'Visit the Red Planet in style.';
  $expandedTextAd->description = 'Low-gravity fun for all astronauts in orbit.';
  $expandedTextAd->finalUrls = array('http://www.example.com');

  // Create ad group ad.
  $adGroupAd = new AdGroupAd();
  $adGroupAd->adGroupId = $adGroupId;
  $adGroupAd->ad = $expandedTextAd;

  // Create operation.
  $operation = new AdGroupAdOperation();
  $operation->operand = $adGroupAd;
  $operation->operator = 'ADD';

  $operations = array($operation);

  // Make the mutate request.
  try {
    $result = $adGroupAdValidationService->mutate($operations);
    printf("The expanded text ad is valid.\n");
  } catch (SoapFault $e) {
    $errors = ErrorUtils::GetApiErrors($e);
    if (sizeof($errors) > 0) {
      printf("The expanded text ad is invalid for the following reasons:\n");
      foreach ($errors as $error) {
        printf("  %s @ %s\n", $error->errorString, $error->fieldPath);
      }
    } else {
      // Not an API error, so throw it up a level.
      throw $e;
    }
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
  ValidateTextAdExample($user, $adGroupId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
