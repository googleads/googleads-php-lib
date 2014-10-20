<?php
/**
 * This example deactivates all LICAs for the line item. To determine which
 * LICAs exist, run GetAllLicasExample.php.
 *
 * Tags: LineItemCreativeAssociationService.performLineItemCreativeAssociationAction
 * Tags: LineItemCreativeAssociationService.getLineItemCreativeAssociationsByStatement
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

  // Get the LineItemCreativeAssociationService.
  $licaService =
      $user->GetService('LineItemCreativeAssociationService', 'v201405');

  // Set the line item to get LICAs by.
  $lineItemId = 'INSERT_LINE_ITEM_ID_HERE';

  // Create bind variables.
  $vars = MapUtils::GetMapEntries(
      array('lineItemId' => new NumberValue($lineItemId)));

  // Create statement text to select active LICAs for a given line item.
  $filterStatementText = "WHERE lineItemId = :lineItemId AND status = 'ACTIVE'";

  $offset = 0;

  do {
    // Create statement to page through results.
    $filterStatement =
        new Statement($filterStatementText . " LIMIT 500 OFFSET " . $offset,
            $vars);

    // Get LICAs by statement.
    $page = $licaService->getLineItemCreativeAssociationsByStatement(
        $filterStatement);

    // Display results.
    $creativeIds = array();
    if (isset($page->results)) {
      $i = $page->startIndex;
      foreach ($page->results as $lica) {
        print $i . ') LICA with line item ID "' . $lica->lineItemId
            . '", creative ID "' . $lica->creativeId
            . '", and status "' . $lica->status
            . "\" will be deactivated.\n";
        $i++;
        $creativeIds[] = $lica->creativeId;
      }
    }

    $offset += 500;
  } while ($offset < $page->totalResultSetSize);

  print 'Number of LICAs to be deactivated: ' . sizeof($lica->creativeId)
      . "\n";

  if (sizeof($lica->creativeId) > 0) {
    // Create action statement.
    $filterStatementText = sprintf(
        'WHERE lineItemId = :lineItemId AND creativeId IN (%s)',
        implode(',', $creativeIds));
    $filterStatement = new Statement($filterStatementText, $vars);

    // Create action.
    $action = new DeactivateLineItemCreativeAssociations();

    // Perform action.
    $result = $licaService->performLineItemCreativeAssociationAction($action,
        $filterStatement);

    // Display results.
    if (isset($result) && $result->numChanges > 0) {
      print 'Number of LICAs deactivated: ' . $result->numChanges . "\n";
    } else {
      print "No LICAs were deactivated.\n";
    }
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

