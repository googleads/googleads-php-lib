<?php
/**
 * This example retrieves a previously created ad units and creates
 * a tree.
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

/**
 * Gets all ad units for this user.
 *
 * @param DfpUser $user the user to get the ad units for
 * @return array all ad units for this user
 */
function GetAllAdUnits(DfpUser $user) {
  // Get the InventoryService.
  $inventoryService = $user->GetService('InventoryService', 'v201605');

  // Create array to hold all ad units.
  $adUnits = array();

  // Set defaults for page and statement.
  $page = new AdUnitPage();
  $filterStatement = new Statement();
  $offset = 0;

  do {
    // Create a statement to get all ad units.
    $filterStatement->query = 'LIMIT 500 OFFSET ' . $offset;

    // Get creatives by statement.
    $page = $inventoryService->getAdUnitsByStatement($filterStatement);

    if (isset($page->results)) {
      $adUnits = array_merge($adUnits, $page->results);
    }

    $offset += 500;
  } while ($offset < $page->totalResultSetSize);

  return $adUnits;
}

/**
 * Finds the root ad unit for the user.
 *
 * @param DfpUser $user the user to get the root ad unit for
 * @return the ad unit representing the root ad unit or <var>null</var> if one
 *     is not found.
 */
function FindRootAdUnit(DfpUser $user) {
  // Get the InventoryService.
  $inventoryService = $user->GetService('InventoryService', 'v201605');

  // Create a statement to only select image creatives.
  $filterStatement = new Statement("WHERE parentId IS NULL LIMIT 1");

  // Get ad units by statement.
  $page = $inventoryService->getAdUnitsByStatement($filterStatement);

  if (isset($page->results)) {
    return $page->results[0];
  } else {
    return null;
  }
}

/**
 * Builds and displays an ad unit tree from an array of ad units underneath
 * the root ad unit.
 *
 * @param AdUnit $root the root ad unit to build the tree under
 * @param array $adUnits the array of ad units.
 */
function BuildAndDisplayAdUnitTree(AdUnit $root,
    array $adUnits) {
  $treeMap = array();

  foreach ($adUnits as $adUnit) {
    if (isset($adUnit->parentId)) {
      $treeMap[$adUnit->parentId][] = $adUnit;
    }
  }

  if (isset($root)) {
    DisplayInventoryTree($root, $treeMap);
  } else {
    print "No root unit found.\n";
  }
}

/**
 * Displays the ad unit tree beginning at the root ad unit.
 *
 * @param AdUnit $root the root ad unit
 * @param array $treeMap the map of id to array of ad units
 */
function DisplayInventoryTree(AdUnit $root, array $treeMap) {
  DisplayInventoryTreeHelper($root, $treeMap, 0);
}

/**
 * Helper for displaying inventory units.
 *
 * @param AdUnit $root the root inventory unit
 * @param array $treeMap the map of id to array of inventory units
 * @param $depth the depth the tree has reached
 */
function DisplayInventoryTreeHelper(AdUnit $root,
    array $treeMap, $depth) {
  print GenerateTab($depth) . $root->name . ' ('
      . $root->id . ")\n";

  if (isset($treeMap[$root->id])) {
    foreach ($treeMap[$root->id] as $child) {
      DisplayInventoryTreeHelper($child,
          $treeMap, $depth + 1);
    }
  }
}

/**
 * Generates a string of tabs to represent branching to children.
 *
 * @param $depth a depth from 0 to max(depth)
 * @return string a string to insert in front of the root unit
 */
function GenerateTab($depth) {
  $tab = '';

  if ($depth != 0) {
    $tab .= '  ';
  }

  for ($i = 1; $i < $depth; $i++) {
    $tab .= '|  ';
  }

  return $tab . '+--';
}

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  $allAdUnits = GetAllAdUnits($user);

  // Find the root ad unit. rootAdUnit can also be set to child unit to
  // only build and display a portion of the tree.
  $rootAdUnit = FindRootAdUnit($user);

  if (isset($rootAdUnit)) {
    BuildAndDisplayAdUnitTree($rootAdUnit, $allAdUnits);
  } else {
    print "Could not build tree. No root ad unit found.\n";
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}



