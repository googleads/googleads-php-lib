<?php
/**
 * This example creates a new video ad unit under the effective root ad unit.
 * This feature is only available to DFP premium solution networks. To determine
 * which ad units exist, run GetInventoryTree.php or
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
 * @subpackage v201605
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
  $inventoryService = $user->GetService('InventoryService', 'v201605');

  // Get the NetworkService.
  $networkService = $user->GetService('NetworkService', 'v201605');

  // Get the effective root ad unit's ID for all ad units to be created under.
  $network = $networkService->getCurrentNetwork();
  $effectiveRootAdUnitId = $network->effectiveRootAdUnitId;

  // Create local ad unit object.
  $adUnit = new AdUnit();
  $adUnit->name = 'Video_Ad_Unit';
  $adUnit->parentId = $effectiveRootAdUnitId;
  $adUnit->description = 'Ad unit description.';
  $adUnit->targetWindow = 'BLANK';
  $adUnit->explicitlyTargeted = true;

  // Create master ad unit size.
  $masterAdUnitSize = new AdUnitSize();
  $masterAdUnitSize->size = new Size(400, 300, false);
  $masterAdUnitSize->environmentType = 'VIDEO_PLAYER';

  // Create companion sizes.
  $companionAdUnitSize1 = new AdUnitSize();
  $companionAdUnitSize1->size = new Size(300, 250, false);
  $companionAdUnitSize1->environmentType = 'BROWSER';

  $companionAdUnitSize2 = new AdUnitSize();
  $companionAdUnitSize2->size = new Size(728, 90, false);
  $companionAdUnitSize2->environmentType = 'BROWSER';

  // Add companions to master ad unit size.
  $masterAdUnitSize->companions =
      array($companionAdUnitSize1, $companionAdUnitSize2);

  // Set the size of possible creatives that can match this ad unit.
  $adUnit->adUnitSizes = array($masterAdUnitSize);

  // Create the ad unit on the server.
  $adUnits = $inventoryService->createAdUnits(array($adUnit));

  foreach ($adUnits as $adUnit) {
    printf("An ad unit with ID '%s' was created under parent with ID '%s'.\n",
        $adUnit->id, $adUnit->parentId);
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

