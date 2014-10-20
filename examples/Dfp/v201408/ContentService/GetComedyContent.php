<?php
/**
 * This example gets all active content categorized as "comedy" using the
 * network's content browse custom targeting key. This feature is only available
 * to DFP video publishers.
 *
 * Tags: ContentService.getContentByStatementAndCustomTargetingValue
 * Tags: CustomTargetingService.getCustomTargetingValuesByStatement
 * Tags: NetworkService.getCurrentNetwork
 *
 * PHP version 5
 *
 * Copyright 2014, Google Inc. All Rights Reserved.
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
 * @subpackage v201408
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
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
require_once 'Google/Api/Ads/Dfp/Util/StatementBuilder.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the ContentService.
  $contentService = $user->GetService('ContentService', 'v201408');

  // Get the CustomTargetingService.
  $customTargetingService =
      $user->GetService('CustomTargetingService', 'v201408');

  // Get the NetworkService.
  $networkService = $user->GetService('NetworkService', 'v201408');

  // Get content browse custom targeting key ID.
  $contentBrowseCustomTargetingKeyId =
      $networkService->getCurrentNetwork()->contentBrowseCustomTargetingKeyId;

  if (empty($contentBrowseCustomTargetingKeyId)) {
    throw new RuntimeException(
        'Your network does not have content categories enabled.');
  }

  // Create a statement to select the categories matching the name comedy.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->Where(
      'customTargetingKeyId = :contentBrowseCustomTargetingKeyId AND name = '
          . ':category'
      )
      ->OrderBy('id ASC')
      ->Limit(1)
      ->WithBindVariableValue('contentBrowseCustomTargetingKeyId',
          $contentBrowseCustomTargetingKeyId)
      ->WithBindVariableValue('category', 'comedy');

  // Get categories matching the filter statement.
  $page = $customTargetingService->getCustomTargetingValuesByStatement(
      $statementBuilder->ToStatement());

  // Get the custom targeting value ID for the comedy category.
  if (!isset($page->results)) {
    throw new RuntimeException('No comedy category values were found.');
  }
  $categoryCustomTargetingValueId = $page->results[0]->id;

  // Create a statement to select all content.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->OrderBy('id ASC')
      ->Limit(StatementBuilder::SUGGESTED_PAGE_LIMIT);

  // Default for total result set size.
  $totalResultSetSize = 0;

  do {
    // Get content by statement.
    $page = $contentService->getContentByStatementAndCustomTargetingValue(
        $statementBuilder->ToStatement(), $categoryCustomTargetingValueId);

    // Display results.
    if (isset($page->results)) {
      $totalResultSetSize = $page->totalResultSetSize;
      $i = $page->startIndex;
      foreach ($page->results as $content) {
        printf("%d) Content with ID %d, name '%s', and status %s was found.\n",
        $i++, $content->id, $content->name, $content->status);
      }
    }

    $statementBuilder->IncreaseOffsetBy(StatementBuilder::SUGGESTED_PAGE_LIMIT);
  } while ($statementBuilder->GetOffset() < $totalResultSetSize);

  printf("Number of results found: %d\n", $totalResultSetSize);
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

