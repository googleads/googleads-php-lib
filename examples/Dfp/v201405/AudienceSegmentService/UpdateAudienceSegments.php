<?php
/**
 * This example updates first party audience segment member expiration days. To
 * determine which first party audience segments exist, run
 * GetFirstPartyAudienceSegments.php.
 *
 * Tags: AudienceSegmentService.getAudienceSegments
 * Tags: AudienceSegmentService.updateAudienceSegments
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

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the AudienceSegmentService.
  $audienceSegmentService = $user->GetService('AudienceSegmentService',
      'v201405');

  // Set the ID of the first party audience segment to update.
  $audienceSegmentId = 'INSERT_AUDIENCE_SEGMENT_ID_HERE';

  // Create bind variables.
  $vars = MapUtils::GetMapEntries(
      array('audienceSegmentId' => new NumberValue($audienceSegmentId)));

  // Create statement text to select the audience segment to update.
  $filterStatementText = "WHERE id = :audienceSegmentId LIMIT 1";

  // Get the audience segment.
  $audienceSegment = $audienceSegmentService->getAudienceSegmentsByStatement(
      new Statement($filterStatementText, $vars))->results[0];

  // Update the member expiration days.
  $audienceSegment->membershipExpirationDays = 180;

  // Update the audience segment on the server.
  $audienceSegments =
      $audienceSegmentService->updateAudienceSegments(array($audienceSegment));

  // Display results.
  if (isset($audienceSegments)) {
    foreach ($audienceSegments as $updatedAudienceSegment) {
      printf("Audience segment with ID \"%d\" and name \"%s\" was updated.\n",
          $updatedAudienceSegment->id, $updatedAudienceSegment->name);
    }
  } else {
    printf("No audience segments were updated.\n");
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

