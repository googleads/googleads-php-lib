<?php
/**
 * This code example imports offline conversion values for specific clicks to
 * your account. To get Google Click ID for a click, run
 * CLICK_PERFORMANCE_REPORT.
 *
 * Tags: ConversionTrackerService.mutate, OfflineConversionFeedService.mutate
 * Restriction: adwords-only
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
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     David Torres <api.davidtorres@gmail.com>
 */

// Include the initialization file.
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
$conversionName = 'INSERT_CONVERSION_NAME_HERE';
$gClId = 'INSERT_GOOGLE_CLICK_ID_HERE';
$conversionTime = 'INSERT_CONVERSION_TIME_HERE';
$conversionValue = 'INSERT_CONVERSION_VALUE_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $campaignId the ID of the campaign to add the sitelinks to
 */
function UploadOfflineConversionsExample(AdWordsUser $user, $conversionName,
    $gClId, $conversionTime, $conversionValue) {
  // Get the services, which loads the required classes.
  $conversionTrackerService = $user->GetService('ConversionTrackerService',
      ADWORDS_VERSION);
  $offlineConversionService = $user->GetService('OfflineConversionFeedService',
      ADWORDS_VERSION);

  // Create an upload conversion. Once created, this entry will be visible
  // under Tools and Analysis->Conversion and will have Source = "Import".
  $uploadConversion = new UploadConversion();
  $uploadConversion->category = 'PAGE_VIEW';
  $uploadConversion->name = $conversionName;
  $uploadConversion->viewthroughLookbackWindow = 30;
  $uploadConversion->ctcLookbackWindow = 90;

  $uploadConversionOperation = new ConversionTrackerOperation();
  $uploadConversionOperation->operator = 'ADD';
  $uploadConversionOperation->operand = $uploadConversion;

  $uploadConversionOperations = array($uploadConversionOperation);
  $result = $conversionTrackerService->mutate($uploadConversionOperations);

  $uploadConversion = $result->value[0];
  printf("New upload conversion type with name = '%s' and ID = %d was " .
      "created.\n", $uploadConversion->name, $uploadConversion->id);

  // Associate offline conversions with the upload conversion we created.
  $feed = new OfflineConversionFeed();
  $feed->conversionName = $conversionName;
  $feed->conversionTime = $conversionTime;
  $feed->conversionValue = $conversionValue;
  $feed->googleClickId = $gClId;

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
  UploadOfflineConversionsExample($user, $conversionName, $gClId,
      $conversionTime, $conversionValue);
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
