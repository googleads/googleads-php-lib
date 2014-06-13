<?php
/**
 * This example gets all teams that the current user belongs to. The statement
 * retrieves up to the maximum page size limit of 500. To create teams, run
 * CreateTeamsExample.php.
 *
 * Tags: UserTeamAssociationService.getUserTeamAssociationsByStatement
 * Tags: UserService.getCurrentUser
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

  // Get the UserTeamAssociationService.
  $userTeamAssociationService = $user->GetService('UserTeamAssociationService',
      'v201405');

  // Get the UserService.
  $userService = $user->GetService("UserService", "v201405");

  // Get the current user.
  $currentUserId = $userService->getCurrentUser()->id;

  // Create bind variables.
  $vars = MapUtils::GetMapEntries(
      array('userId' => new NumberValue($currentUserId)));

  // Create filter text to select user team associations by the user ID.
  $filterStatement =
      new Statement("WHERE userId = :userId LIMIT 500", $vars);

  // Get user team associations by statement.
  $page = $userTeamAssociationService->getUserTeamAssociationsByStatement(
      $filterStatement);

  // Display results.
  if (isset($page->results)) {
    $i = $page->startIndex;
    foreach ($page->results as $uta) {
      print $i . ') User team association between user with ID "' . $uta->userId
          . '" and team with ID "' . $uta->teamId
           . "\" was found.\n";
      $i++;
    }
  }

  print 'Number of results found: ' . $page->totalResultSetSize . "\n";
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

