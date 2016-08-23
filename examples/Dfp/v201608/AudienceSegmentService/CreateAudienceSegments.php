<?php
/**
 * This example creates new rule based first party audience segments. To
 * determine which audience segments exist, run GetAllAudienceSegments.php.
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

  // Get the AudienceSegmentService.
  $audienceSegmentService =
      $user->GetService('AudienceSegmentService', 'v201608');

  // Get the NetworkService.
  $networkService = $user->GetService('NetworkService', 'v201608');

  // Set the IDs of the custom criteria to be used in the segment rule.
  $customTargetingKeyId = 'INSERT_CUSTOM_TARGETING_KEY_ID_HERE';
  $customTargetingValueId = 'INSERT_CUSTOM_TARGETING_VALUE_ID_HERE';

  // Get the root ad unit ID used to target the whole site.
  $rootAdUnitId = $networkService->getCurrentNetwork()->effectiveRootAdUnitId;

  // Create inventory targeting to be used in the segment rule.
  $inventoryTargeting = new InventoryTargeting();

  // Create ad unit targeting for the root ad unit (i.e. the whole network).
  $adUnitTargeting = new AdUnitTargeting();
  $adUnitTargeting->adUnitId = $rootAdUnitId;
  $inventoryTargeting->targetedAdUnits = array($adUnitTargeting);

  // Create custom criteria to be used in the segment rule.
  $customCriteria = new CustomCriteria();
  $customCriteria->keyId = $customTargetingKeyId;
  $customCriteria->valueIds = array($customTargetingValueId);
  $customCriteria->operator = 'IS';

  // Create the custom criteria set that will resemble:
  // $customCriteria.key == $customCriteria.value
  $topCustomCriteriaSet = new CustomCriteriaSet();
  $topCustomCriteriaSet->logicalOperator = 'AND';
  $topCustomCriteriaSet->children = array($customCriteria);

  // Create the audience segment rule.
  $rule = new FirstPartyAudienceSegmentRule();
  $rule->inventoryRule = $inventoryTargeting;
  $rule->customCriteriaRule = $topCustomCriteriaSet;

  // Create an audience segment.
  $audienceSegment = new RuleBasedFirstPartyAudienceSegment();
  $audienceSegment->name = sprintf('Sports enthusiasts audience segment #%s',
      uniqid());
  $audienceSegment->description = 'Sports enthusiasts between the ages of 20 '
      . 'and 30.';
  $audienceSegment->pageViews = 6;
  $audienceSegment->recencyDays = 6;
  $audienceSegment->membershipExpirationDays = 88;
  $audienceSegment->rule = $rule;

  // Create the audience segment on the server.
  $audienceSegments = $audienceSegmentService->createAudienceSegments(
      array($audienceSegment));

  // Display results.
  foreach ($audienceSegments as $createdAudienceSegment) {
    printf("An audience segment with ID \"%d\", name \"%s\", and type \"%s\" "
        . "was created.\n", $createdAudienceSegment->id,
        $createdAudienceSegment->name, $createdAudienceSegment->type);
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

