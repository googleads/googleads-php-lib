<?php
/**
 * This example gets all web target platform ad unit sizes.
 *
 * Tags: InventoryService.getAdUnitSizes
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
 * @author     Paul Rashidi
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
  $inventoryService = $user->GetService('InventoryService', 'v201405');

  // Create bind variables.
  $vars = MapUtils::GetMapEntries(
      array('targetPlatform' => new TextValue('WEB')));

  // Create a statement to only select web ad units sizes.
  $filterStatement = new Statement("WHERE targetPlatform = :targetPlatform",
      $vars);

  // Get all ad unit sizes by statement.
  $adUnitSizes = $inventoryService->getAdUnitSizesByStatement($filterStatement);

  // Display results.
  $i = 0;
  foreach ($adUnitSizes as $adUnitSize) {
    printf("%d) Web ad unit size of dimensions %s was found.\n", $i,
        $adUnitSize->fullDisplayString);
    $i++;
  }

  printf ("Number of ad unit sizes found: %d\n", count($adUnitSizes));
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

