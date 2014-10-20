<?php
/**
 * This code example approves all suggested ad units with 50 or more requests.
 * This feature is only available to DFP premium solution networks.
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
 * @author     Paul Rashidi
 * @author     Vincent Tsao
 */
error_reporting(E_STRICT | E_ALL);

// You can set the include path to src directory or reference
// DfpUser.php directly via require_once.
// $path = '/path/to/dfp_api_php_lib/src';
$path = dirname(__FILE__) . '/../../../../src';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

require_once 'Google/Api/Ads/Common/Util/MapUtils.php';
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

  // Set the number of requests for suggested ad units greater than which to
  // approve.
  $numRequests = 'INSERT_NUMBER_OF_REQUESTS_HERE';

  // Create bind variables.
  $vars = MapUtils::GetMapEntries(
      array('numRequests' => new NumberValue($numRequests)));

  // Statement parts to help build a statement to select suggested ad units that
  // are highly requested.
  $pqlTemplate = "WHERE numRequests >= :numRequests ORDER BY id LIMIT %d "
      . "OFFSET %d";
  $SUGGESTED_PAGE_LIMIT = 500;
  $offset = 0;

  $page = null;
  $suggestedAdUnitIds = array();

  do {
    // Get suggested ad units by statement.
    $page = $suggestedAdUnitService->getSuggestedAdUnitsByStatement(
        new Statement(sprintf($pqlTemplate, $SUGGESTED_PAGE_LIMIT, $offset),
            $vars));

    // Display results.
    if (isset($page->results)) {
      $i = $page->startIndex;
      foreach ($page->results as $suggestedAdUnit) {
        printf("%d) Suggested ad unit with ID '%s' and number of requests '%d' "
            . "will be approved.\n", $i++, $suggestedAdUnit->id);
        $suggestedAdUnitIds[] = $suggestedAdUnitId->id;
      }
    }

    $offset += $SUGGESTED_PAGE_LIMIT;
  } while ($offset < $page->totalResultSetSize);

  printf("Number of suggested ad units to be approved: %d\n",
      count($suggestedAdUnitIds));

  if (count($suggestedAdUnitIds) > 0) {
    // Create action statement.
    $filterStatementText = sprintf('WHERE id IN (%s)',
        implode(',', $suggestedAdUnitIds));
    $filterStatement = new Statement($filterStatementText);

    // Create action.
    $action = new ApproveSuggestedAdUnit();

    // Perform action.
    $result = $suggestedAdUnitService->performSuggestedAdUnitAction($action,
        $filterStatement);

    // Display results.
    if (isset($result) && $result->numChanges > 0) {
      printf("Number of suggested ad units approved: %d\n",
          $result->numChanges);
    } else {
      print "No suggested ad units were approved.\n";
    }
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

