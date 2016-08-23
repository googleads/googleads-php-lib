<?php
/**
 * This example creates new placements for various ad unit sizes. To determine
 * which placements exist, run GetAllPlacements.php.
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

  // Get the PlacementService.
  $placementService = $user->GetService('PlacementService', 'v201608');

  // Get the InventoryService.
  $inventoryService = $user->GetService('InventoryService', 'v201608');

  // Create local placement object to store skyscraper ad units.
  $skyscraperAdUnitPlacement = new Placement();
  $skyscraperAdUnitPlacement->name =
      'Skyscraper AdUnit Placement #' . time();
  $skyscraperAdUnitPlacement->description =
      'Contains ad units that can hold creatives of size 120x600';

  // Create local placement object to store medium square ad units.
  $mediumSquareAdUnitPlacement = new Placement();
  $mediumSquareAdUnitPlacement->name =
      'Medium Square AdUnit Placement #' . time();
  $mediumSquareAdUnitPlacement->description =
      'Contains ad units that can hold creatives of size 300x250';

  // Create local placement object to store banner ad units.
  $bannerAdUnitPlacement = new Placement();
  $bannerAdUnitPlacement->name = 'Banner AdUnit Placement #' . time();
  $bannerAdUnitPlacement->description =
    'Contains ad units that can hold creatives of size 468x60';

  $placementList = array();

  // Get the first 500 ad units.
  $filterStatement = new Statement('LIMIT 500');
  $page = $inventoryService->getAdUnitsByStatement($filterStatement);

  // Separate the ad units by size.
  if (isset($page->results)) {
    foreach ($page->results as $adUnit) {
      if (isset($adUnit->parentId)) {
        foreach ((array) $adUnit->adUnitSizes as $adUnitSize) {
          $size = $adUnitSize->size;
          if ($size->width == 300 && $size->height == 250) {
            $mediumSquareAdUnitPlacement->targetedAdUnitIds[] = $adUnit->id;
          } else if ($size->width == 120 && $size->height == 600) {
            $skyscraperAdUnitPlacement->targetedAdUnitIds[] = $adUnit->id;
          } else if ($size->width == 468 && $size->height == 60) {
            $bannerAdUnitPlacement->targetedAdUnitIds[] = $adUnit->id;
          }
        }
      }
    }
  }

  // Only create placements with one or more ad units.
  if (count($skyscraperAdUnitPlacement->targetedAdUnitIds)>0) {
    $placementList[] = $skyscraperAdUnitPlacement;
  }
  if (count($mediumSquareAdUnitPlacement->targetedAdUnitIds)>0) {
    $placementList[] = $mediumSquareAdUnitPlacement;
  }
  if (count($bannerAdUnitPlacement->targetedAdUnitIds)>0) {
    $placementList[] = $bannerAdUnitPlacement;
  }

  // Create the placements on the server.
  $placements = $placementService->createPlacements($placementList);

  // Display results.
  if (isset($placements)) {
    foreach ($placements as $placement) {
      print 'A placement with ID "' . $placement->id
          . '", name "' . $placement->name
          . '", and containing ad units {' .
          implode(', ', (array) $placement->targetedAdUnitIds)
          . "} was created.\n";
    }
  } else {
    print "No placements created.\n";
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

