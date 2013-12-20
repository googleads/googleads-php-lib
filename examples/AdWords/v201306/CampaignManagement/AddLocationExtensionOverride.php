<?php
/**
 * This example ads an ad extension override to an ad using an existing
 * campaign ad extension. To get ads, run GetAllAds.php. To get campaign
 * ad extensions, run AddLocationExtension.php.
 *
 * Tags: AdGroupCriterionService.mutate
 * Restriction: adwords-only
 *
 * Copyright 2012, Google Inc. All Rights Reserved.
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
 * @subpackage v201306
 * @category   WebServices
 * @copyright  2012, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
$adId = 'INSERT_AD_ID_HERE';
$campaignAdExtensionId = 'INSERT_CAMPAIGN_AD_EXTENSION_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $adId the id the ad to add the override to
 * @param string $campaignAdExtensionId the id of an existings campaign ad
 *     extension to override with
 */
function AddLocationExtensionOverrideExample(AdWordsUser $user, $adId,
    $campaignAdExtensionId) {
  // Get the service, which loads the required classes.
  $adExtensionOverrideService =
      $user->GetService('AdExtensionOverrideService', ADWORDS_VERSION);

  // Create ad extenstion override.
  $adExtensionOverride = new AdExtensionOverride();
  $adExtensionOverride->adId = $adId;

  // Create ad extension using existing id.
  $adExtension = new AdExtension();
  $adExtension->id = $campaignAdExtensionId;
  $adExtensionOverride->adExtension = $adExtension;

  // Set override info (optional).
  $locationOverrideInfo = new LocationOverrideInfo();
  $locationOverrideInfo->radius = 5;
  $locationOverrideInfo->radiusUnits = 'MILES';
  $overrideInfo = new OverrideInfo();
  $overrideInfo->LocationOverrideInfo = $locationOverrideInfo;
  $adExtensionOverride->overrideInfo = $overrideInfo;

  // Create operations.
  $operation = new AdExtensionOverrideOperation();
  $operation->operand = $adExtensionOverride;
  $operation->operator = 'ADD';

  $operations = array($operation);

  // Make the mutate request.
  $result = $adExtensionOverrideService->mutate($operations);

  // Display results.
  if (isset($result->value)) {
    foreach ($result->value as $adExtensionOverride) {
      print 'Ad extension override with ad ID "' . $adExtensionOverride->adId
          . '", ad extension ID "' . $adExtensionOverride->adExtension->id
          . '", and type "' . $adExtensionOverride->adExtension->AdExtensionType
          . "\" was added.\n";
    }
  } else {
    print "No ad extension overrides were added.\n";
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
  AddLocationExtensionOverrideExample($user, $adId, $campaignAdExtensionId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
