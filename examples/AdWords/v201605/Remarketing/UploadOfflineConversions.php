<?php
/**
 * This code example imports offline conversion values for specific clicks to
 * your account. To get Google Click ID for a click, run
 * CLICK_PERFORMANCE_REPORT. To set up a conversion tracker, run the
 * AddConversionTracker.php example.
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

// Include the initialization file.
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
$conversionName = 'INSERT_CONVERSION_NAME_HERE';
$gclid = 'INSERT_GOOGLE_CLICK_ID_HERE';
$conversionTime = 'INSERT_CONVERSION_TIME_HERE';
$conversionValue = 'INSERT_CONVERSION_VALUE_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $campaignId the ID of the campaign to add the sitelinks to
 */
function UploadOfflineConversionsExample(AdWordsUser $user, $conversionName,
    $gclid, $conversionTime, $conversionValue) {
  // Get the services, which loads the required classes.
  $offlineConversionService = $user->GetService('OfflineConversionFeedService',
      ADWORDS_VERSION);

  // Associate offline conversions with the existing named conversion tracker.
  // If this tracker was newly created, it may be a few hours before it can
  // accept conversions.
  $feed = new OfflineConversionFeed();
  $feed->conversionName = $conversionName;
  $feed->conversionTime = $conversionTime;
  $feed->conversionValue = $conversionValue;
  $feed->googleClickId = $gclid;

  $offlineConversionOperation = new OfflineConversionFeedOperation();
  $offlineConversionOperation->operator = 'ADD';
  $offlineConversionOperation->operand = $feed;

  $offlineConversionOperations = array($offlineConversionOperation);
  $result = $offlineConversionService->mutate($offlineConversionOperations);

  $feed = $result->value[0];
  printf('Uploaded offline conversion value of %d for Google Click ID = ' .
      "'%s' to '%s'.", $feed->conversionValue, $feed->googleClickId,
      $feed->conversionName);
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
  UploadOfflineConversionsExample($user, $conversionName, $gclid,
      $conversionTime, $conversionValue);
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
