<?php
/**
 * This example creates new activity groups. To determine which activity groups
 * exist, run GetAllActivityGroups.php.
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

  // Get the ActivityGroupService.
  $activityGroupService = $user->GetService('ActivityGroupService', 'v201608');

  // Set the ID of the advertiser company this activity group is associated
  // with.
  $advertiserCompanyId = 'INSERT_ADVERTISER_COMPANY_ID_HERE';

  // Create a short-term activity group.
  $shortTermActivityGroup = new ActivityGroup();
  $shortTermActivityGroup->name = sprintf('Short-term activity group #%s',
      uniqid());
  $shortTermActivityGroup->companyIds = array($advertiserCompanyId);
  $shortTermActivityGroup->clicksLookback = 1;
  $shortTermActivityGroup->impressionsLookback = 1;

  // Create a long-term activity group.
  $longTermActivityGroup = new ActivityGroup();
  $longTermActivityGroup->name = sprintf('Long-term activity group #%s',
      uniqid());
  $longTermActivityGroup->companyIds = array($advertiserCompanyId);
  $longTermActivityGroup->clicksLookback = 30;
  $longTermActivityGroup->impressionsLookback = 30;

  // Create the activity groups on the server.
  $activityGroups = $activityGroupService->createActivityGroups(
      array($shortTermActivityGroup, $longTermActivityGroup));

  // Display results.
  if (isset($activityGroups)) {
    foreach ($activityGroups as $activityGroup) {
      printf("An activity group with ID \"%d\" and name \"%s\" was created.\n",
          $activityGroup->id, $activityGroup->name);
    }
  } else {
    printf("No activity groups were created.\n");
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

