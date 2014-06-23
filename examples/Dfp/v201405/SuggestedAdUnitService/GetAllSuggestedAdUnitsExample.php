<?php
/**
 * This example gets all suggested ad units. To approve suggested ad units, run
 * ApproveSuggestedAdUnitsExample.php. This feature is only available to DFP
 * premium solution networks.
 *
 * Tags: SuggestedAdUnitService.getSuggestedAdUnitsByStatement
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

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the SuggestedAdUnitService.
  $suggestedAdUnitService =
      $user->GetService('SuggestedAdUnitService', 'v201405');

  // Set defaults for page and statement.
  $page = new SuggestedAdUnitPage();
  $filterStatement = new Statement();
  $offset = 0;

  do {
    // Create a statement to get all suggested ad units.
    $filterStatement->query = 'LIMIT 500 OFFSET ' . $offset;

    // Get creatives by statement.
    $page = $suggestedAdUnitService->getSuggestedAdUnitsByStatement(
        $filterStatement);

    // Display results.
    if (isset($page->results)) {
      $i = $page->startIndex;
      foreach ($page->results as $suggestedAdUnit) {
        printf("%d) Suggested ad unit with ID '%s' and number of requests '%d' "
            . "was found.\n", $i, $suggestedAdUnit->id,
            $suggestedAdUnit->numRequests);
        $i++;
      }
    }

    $offset += 500;
  } while ($offset < $page->totalResultSetSize);

  print 'Number of results found: ' . $page->totalResultSetSize . "\n";
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

