<?php
/**
 * This example gets all language and carrier criteria available for targeting.
 *
 * Tags: ConstantDataService.get
 *
 * Copyright 2011, Google Inc. All Rights Reserved.
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
 * @subpackage v201309
 * @category   WebServices
 * @copyright  2011, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

/**
 * Runs the example
 * @param AdWordsUser $user the user to run the example with
 */
function GetTargetableLanguagesAndCarriersExample(AdWordsUser $user) {
  // Get the service, which loads the required classes.
  $constantDataService = $user->GetService('ConstantDataService', ADWORDS_VERSION);

  // Make the getLanguageCriterion request.
  $languages = $constantDataService->getLanguageCriterion();

  foreach ($languages as $language) {
    printf("Language with name '%s' and ID '%s' was found.\n",
        $language->name, $language->id);
  }

  print "\n";

  // Make the getCarrierCriterion request.
  $carriers = $constantDataService->getCarrierCriterion();

  foreach ($carriers as $carrier) {
    printf("Carrier with name '%s', country code '%s', and ID '%s' was "
        . "found.\n", $carrier->name, $carrier->countryCode, $carrier->id);
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
  GetTargetableLanguagesAndCarriersExample($user);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
