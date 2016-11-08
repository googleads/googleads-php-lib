<?php
/**
 * This code example imports offline call conversion values for calls related
 * to the ads in your account.
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

// Include the initialization file.
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
$callerId = 'INSERT_CALLER_ID_HERE';
// For times use the format yyyyMMdd HHmmss tz. For more details on formats,
// see: https://developers.google.com/adwords/api/docs/appendix/codes-formats#date-and-time-formats
// For time zones, see: https://developers.google.com/adwords/api/docs/appendix/codes-formats#timezone-ids
$callStartTime = 'INSERT_CALL_START_TIME_HERE';
$conversionName = 'INSERT_CONVERSION_NAME_HERE';
$conversionTime = 'INSERT_CONVERSION_TIME_HERE';
$conversionValue = 'INSERT_CONVERSION_VALUE_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $callerId the caller ID
 * @param string $callStartTime the call start time
 * @param string $conversionName the conversion name
 * @param string $conversionTime the time that the conversion has occurred
 * @param string $conversionValue the conversion value
 */
function UploadOfflineCallConversionsExample(AdWordsUser $user, $callerId,
    $callStartTime, $conversionName, $conversionTime, $conversionValue) {
  // Get the services, which loads the required classes.
  $offlineCallConversionService =
      $user->GetService('OfflineCallConversionFeedService', ADWORDS_VERSION);

  // Associate offline call conversions with the existing named conversion
  // tracker. If this tracker was newly created, it may be a few hours before
  // it can accept conversions.
  $feed = new OfflineCallConversionFeed();
  $feed->callerId = $callerId;
  $feed->callStartTime = $callStartTime;
  $feed->conversionName = $conversionName;
  $feed->conversionTime = $conversionTime;
  $feed->conversionValue = $conversionValue;

  $offlineCallConversionOperation = new OfflineCallConversionFeedOperation();
  $offlineCallConversionOperation->operator = 'ADD';
  $offlineCallConversionOperation->operand = $feed;

  $offlineCallConversionOperations = array($offlineCallConversionOperation);
  // This example uploads only one call conversion, but you can upload multiple
  // call conversions by passing additional operations.
  $result =
      $offlineCallConversionService->mutate($offlineCallConversionOperations);

  $feed = $result->value[0];
  printf("Uploaded offline call conversion value of '%s' for caller ID '%s'.\n",
      $feed->conversionValue, $feed->callerId);
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
  UploadOfflineCallConversionsExample($user, $callerId, $callStartTime,
      $conversionName, $conversionTime, $conversionValue);
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
