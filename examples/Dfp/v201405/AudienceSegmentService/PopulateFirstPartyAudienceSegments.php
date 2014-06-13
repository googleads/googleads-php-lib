<?php
/**
 * This example populates all rule based first party audience segments. To
 * determine which audience segments exist, run GetAllAudienceSegments.php.
 *
 * Tags: AudienceSegmentService.getAudienceSegmentsByStatement
 * Tags: AudienceSegmentService.performAudienceSegmentAction
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
require_once 'Google/Api/Ads/Common/Util/MapUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the AudienceSegmentService.
  $audienceSegmentService =
      $user->GetService('AudienceSegmentService', 'v201405');

  $audienceSegmentId = 'INSERT_AUDIENCE_SEGMENT_ID_HERE';

  // Create bind variables.
  $vars = MapUtils::GetMapEntries(
      array('type' => new TextValue('FIRST_PARTY'),
          'audienceSegmentId' => new NumberValue($audienceSegmentId)));

  // Statement parts to help build a statement to select specified first party
  // audience segment.
  $pqlTemplate = "WHERE id IN (:audienceSegmentId) AND type = :type ORDER BY "
      . "id LIMIT %d OFFSET %d";
  $SUGGESTED_PAGE_LIMIT = 500;
  $offset = 0;

  $page = new AudienceSegmentPage();

  do {
    // Get audience segments by statement.
    $page = $audienceSegmentService->getAudienceSegmentsByStatement(
        new Statement(sprintf($pqlTemplate, $SUGGESTED_PAGE_LIMIT, $offset),
            $vars));

    // Display results.
    $audienceSegmentIds = array();
    if (isset($page->results)) {
      $i = $page->startIndex;
      foreach ($page->results as $audienceSegment) {
        printf("%d) Audience segment with ID \"%d\" and name \"%s\" will be "
            . "populated.\n", $i++, $audienceSegment->id,
            $audienceSegment->name);
        $audienceSegmentIds[] = $audienceSegment->id;
      }
    }

    $offset += $SUGGESTED_PAGE_LIMIT;
  } while ($offset < $page->totalResultSetSize);

  printf("Number of audience segments to be populated: %d\n",
      sizeof($audienceSegmentIds));

  if (sizeof($audienceSegmentIds) > 0) {
    // Create action statement.
    $filterStatementText = sprintf('WHERE id IN (%s)',
        implode(',', $audienceSegmentIds));
    $filterStatement = new Statement($filterStatementText);

    // Create action.
    $action = new PopulateAudienceSegments();

    // Perform action.
    $result = $audienceSegmentService->performAudienceSegmentAction($action,
        $filterStatement);

    // Display results.
    if (isset($result) && $result->numChanges > 0) {
      printf("Number of audience segments populated: %d\n",
          $result->numChanges);
    } else {
      printf("No audience segments were populated.\n");
    }
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

