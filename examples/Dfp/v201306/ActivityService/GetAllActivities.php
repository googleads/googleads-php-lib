<?php
/**
 * This example gets all activities. To create activities, run
 * CreateActivities.java.
 *
 * Tags: ActivityService.getActivitiesByStatement
 * Tags: ActivityGroupService.getActivityGroupsByStatement
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
 * @subpackage v201306
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

require_once 'Google/Api/Ads/Common/Util/MapUtils.php';
require_once 'Google/Api/Ads/Dfp/Lib/DfpUser.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

/**
 * Gets all activity group IDs.
 */
function getAllActivityGroupIds($dfpUser) {
  $activityGroupIds = array();

  // Get the ActivityGroupService.
  $activityGroupService = $dfpUser->GetService('ActivityGroupService',
      'v201306');

  // Statement parts to help build a statement that selects all activity groups.
  $pqlTemplate = 'ORDER BY id LIMIT %d OFFSET %d';
  $SUGGESTED_PAGE_LIMIT = 500;
  $offset = 0;

  $page = new ActivityGroupPage();

  do {
    // Get activity groups by statement.
    $page = $activityGroupService->getActivityGroupsByStatement(new Statement(
        sprintf($pqlTemplate, $SUGGESTED_PAGE_LIMIT, $offset)));

    // Display results.
    if (isset($page->results)) {
      foreach ($page->results as $activityGroup) {
        $activityGroupIds[] = $activityGroup->id;
      }
    }

    $offset += $SUGGESTED_PAGE_LIMIT;
  } while ($offset < $page->totalResultSetSize);

  return $activityGroupIds;
}

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the ActivityService.
  $activityService = $user->GetService('ActivityService', 'v201306');

  // Statement parts to help build a statement to get all activities for an
  // activity group.
  $pqlTemplate = 'WHERE activityGroupId = :activityGroupId ORDER BY id LIMIT ' .
     '%d OFFSET %d';
  $SUGGESTED_PAGE_LIMIT = 500;

  $totalResultsCounter = 0;

  $activityGroupIds = getAllActivityGroupIds($user);

  foreach ($activityGroupIds as $activityGroupId) {
    // Set the activity group ID to select from.
    $vars = MapUtils::GetMapEntries(array('activityGroupId' =>
        new NumberValue($activityGroupId)));

    $page = new ActivityPage();
    $offset = 0;

    do {
      // Get activities by statement.
      $page = $activityService->getActivitiesByStatement(new Statement(
        sprintf($pqlTemplate, $SUGGESTED_PAGE_LIMIT, $offset), $vars));

      // Display results.
      if (isset($page->results)) {
        $i = $page->startIndex;
        foreach ($page->results as $activity) {
          printf("%d) Activity with ID \"%d\", name \"%s\", type \"%s\", and " .
              "activity group ID \"%d\" was found.\n", $totalResultsCounter++,
              $activity->id, $activity->name, $activity->type,
              $activityGroupId);
        }
      }

      $offset += $SUGGESTED_PAGE_LIMIT;
    } while ($offset < $page->totalResultSetSize);
  }
  printf("Number of results found: %d\n", $totalResultsCounter);
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

