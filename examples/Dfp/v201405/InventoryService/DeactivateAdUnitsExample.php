<?php
/**
 * This example deactivates all active ad units. To determine which ad units
 * exist, run GetAllAdUnitsExample.php or GetInventoryTreeExample.php.
 *
 * Tags: InventoryService.getAdUnitsByStatement
 * Tags: InventoryService.performAdUnitAction
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
require_once 'Google/Api/Ads/Common/Util/MapUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the InventoryService.
  $inventoryService = $user->GetService('InventoryService', 'v201405');

  // Create statement text to get all active ad units.
  $filterStatementText = "WHERE status = 'ACTIVE'";

  $offset = 0;

  do {
    // Create statement to page through results.
    $filterStatement =
        new Statement($filterStatementText . " LIMIT 500 OFFSET " . $offset);

    // Get ad units by statement.
    $page = $inventoryService->getAdUnitsByStatement($filterStatement);

    // Display results.
    $adUnitIds = array();
    if (isset($page->results)) {
      $i = $page->startIndex;
      foreach ($page->results as $adUnit) {
        print $i . ') Ad unit with ID "' . $adUnit->id
            . '", name "' . $adUnit->name
            . '", and status "' . $adUnit->status . "\" will be deactivated.\n";
        $i++;
        $adUnitIds[] =  $adUnit->id;
      }
    }

    $offset += 500;
  } while ($offset < $page->totalResultSetSize);

  print 'Number of ad units to be deactivated: ' . sizeof($adUnitIds) . "\n";

  if (sizeof($adUnitIds) > 0) {
    // Create action statement.
    $filterStatementText =
        sprintf('WHERE id IN (%s)', implode(',', $adUnitIds));
    $filterStatement = new Statement($filterStatementText);

    // Create action.
    $action = new DeactivateAdUnits();

    // Perform action.
    $result = $inventoryService->performAdUnitAction($action, $filterStatement);

    // Display results.
    if (isset($result) && $result->numChanges > 0) {
      print 'Number of ad units deactivated: ' . $result->numChanges . "\n";
    } else {
      print "No ad units were deactivated.\n";
    }
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

