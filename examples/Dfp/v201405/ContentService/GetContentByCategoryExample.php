<?php
/**
 * This example gets all active content categorized as 'comedy' using the
 * network's content browse custom targeting key. This feature is only available
 * to DFP video publishers.
 *
 * Tags: ContentService.getContentByStatementAndCustomTargetingValue
 * Tags: NetworkService.getCurrentNetwork
 * Tags: CustomTargetingService.getCurrentNetwork
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

  // Get the ContentService.
  $contentService = $user->GetService('ContentService', 'v201405');

  // Get the NetworkService.
  $networkService = $user->GetService('NetworkService', 'v201405');

  // Get the CustomTargetingService.
  $customTargetingService =
      $user->GetService('CustomTargetingService', 'v201405');

  // Get content browse custom targeting key ID.
  $network = $networkService->getCurrentNetwork();
  $contentBrowseCustomTargetingKeyId =
      $network->contentBrowseCustomTargetingKeyId;

  // Create a statement to select the categories matching the name comedy.
  $categoryFilterStatement = new Statement(
      "WHERE customTargetingKeyId = :contentBrowseCustomTargetingKeyId "
          . "and name = :category LIMIT 1");
  $categoryFilterStatement->values = MapUtils::GetMapEntries(array(
      'contentBrowseCustomTargetingKeyId' =>
          new NumberValue($contentBrowseCustomTargetingKeyId),
      'category' => new TextValue('comedy')));

  // Get categories matching the filter statement.
  $customTargetingValuePage =
      $customTargetingService->getCustomTargetingValuesByStatement(
          $categoryFilterStatement);

  // Get the custom targeting value ID for the comedy category.
  $categoryCustomTargetingValueId = $customTargetingValuePage->results[0]->id;

  // Create a statement to get all active content.
  $filterStatement = new Statement("WHERE status = 'ACTIVE' LIMIT 500");

  // Get content by statement.
  $page = $contentService->getContentByStatementAndCustomTargetingValue(
      $filterStatement, $categoryCustomTargetingValueId);

  // Display results.
  if (isset($page->results)) {
    $i = $page->startIndex;
    foreach ($page->results as $content) {
      printf(
          "%d) Content with ID '%s', name '%s', and status '%s' was found.\n",
          $i, $content->id, $content->name, $content->status);
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

