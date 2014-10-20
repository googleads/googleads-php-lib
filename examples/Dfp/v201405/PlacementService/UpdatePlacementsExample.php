<?php
/**
 * This example updates all placements to allow for AdSense targetting up to the
 * first 500. To determine which placements exist, run
 * GetAllPlacementsExample.php.
 *
 * Tags: PlacementService.getPlacementsByStatement
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
 * @subpackage v201405
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Adam Rogal
 * @author     Eric Koleda
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

  // Get the PlacementService.
  $placementService = $user->GetService('PlacementService', 'v201405');

  // Get the InventoryService.
  $inventoryService = $user->GetService('InventoryService', 'v201405');

  // Create a statement to select first 500 placements.
  $filterStatement = new Statement("LIMIT 500");

  // Get placements by statement.
  $page = $placementService->getPlacementsByStatement($filterStatement);

  if (isset($page->results)) {
    $placements = $page->results;

    // Update each local placement object by adding the root ad unit.
    foreach ($placements as $placement) {
      $placement->targetingDescription = !empty($placement->description) ?
          $placement->description : 'Generic description';
      $placement->targetingAdLocation = 'All images on sports pages.';
      $placement->targetingSiteName = 'http://code.google.com';
      $placement->isAdSenseTargetingEnabled = TRUE;
    }

    // Update the placements on the server.
    $placements = $placementService->updatePlacements($placements);

    // Display results.
    if (isset($placements)) {
      foreach ($placements as $placement) {
        print 'A placement with ID "' . $placement->id
          . '", name "' . $placement->name
          . '", and AdSense targeting "'
          . ($placement->isAdSenseTargetingEnabled ? 'enabled' : 'disabled')
          . "\" was updated.\n";
      }
    } else {
      print "No placements updated.\n";
    }
  } else {
    print "No placements found to update.\n";
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

