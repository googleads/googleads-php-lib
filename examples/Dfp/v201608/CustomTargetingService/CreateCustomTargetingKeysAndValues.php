<?php
/**
 * This example creates new custom targeting keys and values. To determine which
 * custom targeting keys and values exist, run
 * GetAllCustomTargetingKeysAndValues.php. To target these custom
 * targeting keys and values, run TargetCustomCriteria.php.
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
 * @subpackage v201608
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

  // Get the CustomTargetingService.
  $customTargetingService =
      $user->GetService('CustomTargetingService', 'v201608');

  // Create predefined key.
  $genderKey = new CustomTargetingKey();
  $genderKey->displayName = 'gender';
  $genderKey->name = 'g';
  $genderKey->type = 'PREDEFINED';

  // Create predefined key that may be used for content targeting.
  $genreKey = new CustomTargetingKey();
  $genreKey->displayName = 'genre';
  $genreKey->name = 'genre';
  $genreKey->type = 'PREDEFINED';

  // Create free-form key.
  $carModelKey = new CustomTargetingKey();
  $carModelKey->displayName = 'car model';
  $carModelKey->name = 'c';
  $carModelKey->type = 'FREEFORM';

  // Create the custom targeting keys on the server.
  $keys = $customTargetingService->createCustomTargetingKeys(
      array($genderKey, $genreKey, $carModelKey));

  if (isset($keys)) {
    foreach ($keys as $key) {
      printf("A custom targeting key with ID '%s', name '%s', and display " .
          "name '%s' was created.\n", $key->id, $key->name, $key->displayName);
    }
  } else {
    print "No keys were created.\n";
  }

  // Create custom targeting value for the predefined gender key.
  $genderMaleValue = new CustomTargetingValue();
  $genderMaleValue->customTargetingKeyId = $keys[0]->id;
  $genderMaleValue->displayName = 'male';
  // Name is set to 1 so that the actual name can be hidden from website
  // users.
  $genderMaleValue->name = '1';
  $genderMaleValue->matchType = 'EXACT';

  $genderFemaleValue = new CustomTargetingValue();
  $genderFemaleValue->customTargetingKeyId = $keys[0]->id;
  $genderFemaleValue->displayName = 'female';
  // Name is set to 2 so that the actual name can be hidden from website
  // users.
  $genderFemaleValue->name = '2';
  $genderFemaleValue->matchType = 'EXACT';

  // Create custom targeting value for the predefined genre key.
  $genreComedyValue = new CustomTargetingValue();
  $genreComedyValue->customTargetingKeyId = $keys[1]->id;
  $genreComedyValue->displayName = 'comedy';
  $genreComedyValue->name = 'comedy';
  $genreComedyValue->matchType = 'EXACT';

  $genreDramaValue = new CustomTargetingValue();
  $genreDramaValue->customTargetingKeyId = $keys[1]->id;
  $genreDramaValue->displayName = 'drama';
  $genreDramaValue->name = 'drama';
  $genreDramaValue->matchType = 'EXACT';

  // Create custom targeting value for the free-form age key. These are
  // values that would be suggested in the UI or can be used when targeting
  // with a free-form custom criterion.
  $carModelHondaCivicValue = new CustomTargetingValue();
  $carModelHondaCivicValue->customTargetingKeyId = $keys[2]->id;
  $carModelHondaCivicValue->displayName = 'honda civic';
  $carModelHondaCivicValue->name = 'honda civic';
  // Setting match type to exact will match exactly 'honda civic'.
  $carModelHondaCivicValue->matchType = 'EXACT';

  // Create the custom targeting values on the server.
  $values = $customTargetingService->createCustomTargetingValues(array(
      $genderMaleValue, $genderFemaleValue, $genreComedyValue,
      $genreDramaValue, $carModelHondaCivicValue));

  if (isset($values)) {
    foreach ($values as $value) {
      printf("A custom targeting value with ID '%s', belonging to key " .
          "with ID '%s', name '%s', and display name '%s' was created.\n",
          $value->id, $value->customTargetingKeyId, $value->name,
          $value->displayName);
    }
  } else {
    print "No values were created.\n";
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

