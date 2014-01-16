<?php
/**
 * Examines every line item and determines if any of them are targeting
 * deprecated locations.
 *
 * Tags: PublisherQueryLanguageService.select
 * Tags: LineItemService.getLineItemsByStatement
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
 * @subpackage v201308
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Vincent Tsao
 */
error_reporting(E_STRICT | E_ALL);

// You can set the include path to src directory or reference
// DfpUser.php directly via require_once.
// $path = '/path/to/dfp_api_php_lib/src';
$path = dirname(__FILE__) . '/../../../../src';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

require_once 'Google/Api/Ads/Dfp/Lib/DfpUser.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

define('API_VERSION', 'v201308');

/**
 * Helper method that finds deprecated locations from the specified table.
 *
 * @param PublisherQueryLanguageService $pqlService the PQL service
 * @param string $locationTable the table for the type of untargetable location
 *     we are looking for
 * @return a list of untargetable locations IDs for the specified location table
 */
function getAllUntargetableLocationsHelper($pqlService, $locationTable) {
  // Define the number of locations we want to get at a time.
  $LIMIT = 500;
  // Filter on deprecated locations.
  $selectStatement = "SELECT id FROM " . $locationTable . " WHERE targetable"
      . " = FALSE ORDER BY ID LIMIT " . $LIMIT;
  $offset = 0;
  $resultSetSize = 0;

  $untargetableLocationIds = array();

  do {
    $selectStatementOffset = new Statement($selectStatement . ' OFFSET '
        . $offset);
    $resultSet = $pqlService->select($selectStatementOffset);

    if (isset($resultSet->rows)) {
      foreach($resultSet->rows as $row) {
        $untargetableLocationIds[] = $row->values[0]->value;
      }

      $resultSetSize = count($resultSet->rows);
    }

    $offset += $LIMIT;
  } while ($resultSetSize == $LIMIT);

  return $untargetableLocationIds;
}

/**
 * Finds all untargetable locations.
 *
 * @param DfpUser $user the user credentials to use for API calls
 * @return a list of untargetable location IDs
 */
function getAllUntargetableLocations($user) {
  // Tables that represent all different location types.
  $LOCATION_TABLES = array('Country', 'Region', 'Metro', 'City', 'Postal_Code');

  // Get the PublisherQueryLanguageService.
  $pqlService = $user->GetService('PublisherQueryLanguageService',
      API_VERSION);
  $untargetableLocationIds = array();

  // Find all untargetable locations for each location type.
  foreach ($LOCATION_TABLES as $table) {
    $untargetableLocationIds = array_merge($untargetableLocationIds,
        getAllUntargetableLocationsHelper($pqlService, $table));
  }

  return $untargetableLocationIds;
}

/**
 * Builds a map of geo targets to the line items targeting them.
 *
 * @param DfpUser $user the user credentials to use for API calls
 * @return a map of geo targets to the line items targeting them
 */
function buildGeoTargetToLineItemsMap($user) {
  // Get the LineItemService.
  $lineItemService = $user->GetService('LineItemService', API_VERSION);

  // Set defaults for page and statement.
  $LIMIT = 500;
  $page = new LineItemPage();
  $filterStatement = new Statement();
  $offset = 0;

  // Map of geo targets to all line items targeting it.
  $geoTargetToLineItemsMap = array();

  do {
    // Create a statement to get all line items.
    $filterStatement->query = 'LIMIT '. $LIMIT . '  OFFSET ' . $offset;

    // Get line items by statement.
    $page = $lineItemService->getLineItemsByStatement($filterStatement);

    // If a line item has geo targeting, store it in the map.
    if (isset($page->results)) {
      foreach ($page->results as $lineItem) {
        if (isset($lineItem->targeting->geoTargeting->targetedLocations)) {
          foreach ($lineItem->targeting->geoTargeting->targetedLocations as
              $targetedLocation) {
            $lineItemIds = array();
            if (isset($geoTargetToLineItemsMap[$targetedLocation->id])) {
              $lineItemIds = $geoTargetToLineItemsMap[$targetedLocation->id];
            }
            $lineItemIds[] = $lineItem->id;
            $geoTargetToLineItemsMap[$targetedLocation->id] = $lineItemIds;
          }
        }
      }
    }

    $offset += $LIMIT;
  } while ($offset < $page->totalResultSetSize);

  return $geoTargetToLineItemsMap;
}

/**
 * Finds all the geo targets in the specified map that are deprecated.
 *
 * @param array $geoTargetToLineItemsMap a map of geo targets to the line items
 *     targeting them
 * @param array $untargetableLocationIds a list of deprecated location IDs
 * @return a map of deprecated geo targets to the line items targeting them
 */
function findLineItemsToUpdate($geoTargetToLineItemsMap,
    $untargetableLocationIds) {
  // A map of deprecated geo targets to the line items targeting them.
  $lineItemsToUpdate = array();

  foreach ($geoTargetToLineItemsMap as $geoTargetId => $lineItemIds) {
    if (in_array($geoTargetId, $untargetableLocationIds)) {
      $lineItemsToUpdate[$geoTargetId] = $lineItemIds;
    }
  }

  return $lineItemsToUpdate;
}

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogAll();

  // Find all untargetable locations.
  $untargetableLocationIds = getAllUntargetableLocations($user);
  printf("Found %d untargetable locations.\n", count($untargetableLocationIds));

  // Build a map of geo targets to the line items targeting them.
  $geoTargetToLineItemsMap = buildGeoTargetToLineItemsMap($user);

  // Find all the deprecated geo targets from that map.
  $lineItemsToUpdate = findLineItemsToUpdate($geoTargetToLineItemsMap,
      $untargetableLocationIds);

  $i = 0;
  // Print the line items that need to be updated.
  foreach ($lineItemsToUpdate as $geoTargetId => $lineItemIds) {
    printf("%d) The following line items are targeting deprecated location %d"
        . " and need to be updated: %s\n", $i, $geoTargetId, implode(', ',
        $lineItemIds));
    $i++;
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

