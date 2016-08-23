<?php
/**
 * This example creates new ad units under the effective root ad unit. To
 * determine which ad units exist, run GetInventoryTree.php or
 * GetAllAdUnits.php.
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

  // Get the InventoryService.
  $inventoryService = $user->GetService('InventoryService', 'v201608');

  // Get the NetworkService.
  $networkService = $user->GetService('NetworkService', 'v201608');

  // Get the effective root ad unit's ID for all ad units to be created under.
  $network = $networkService->getCurrentNetwork();
  $effectiveRootAdUnitId = $network->effectiveRootAdUnitId;

  // Create an array to store local ad unit objects.
  $adUnits = array();

  for ($i = 0; $i < 5; $i++) {
    $adUnit = new AdUnit();
    $adUnit->name = uniqid('Ad_Unit_');
    $adUnit->parentId = $effectiveRootAdUnitId;
    $adUnit->description = 'Ad unit description.';
    $adUnit->targetWindow = 'BLANK';

    // Create ad unit size.
    $adUnitSize = new AdUnitSize();
    $adUnitSize->size = new Size(300, 250, false);
    $adUnitSize->environmentType = 'BROWSER';

    // Set the size of possible creatives that can match this ad unit.
    $adUnit->adUnitSizes = array($adUnitSize);

    $adUnits[] = $adUnit;
  }

  // Create the ad units on the server.
  $adUnits = $inventoryService->createAdUnits($adUnits);

  // Display results.
  if (isset($adUnits)) {
    foreach ($adUnits as $adUnit) {
      print 'An ad unit with ID "' . $adUnit->id
          . '" was created under parent with ID "' . $adUnit->parentId
          . "\".\n";
    }
  } else {
    print "No ad units created.\n";
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

