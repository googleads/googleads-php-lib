<?php
/**
 * This example deletes a content metadata key hierarchy. To determine which
 * content metadata key hierarchies exist, run
 * GetAllContentMetadataKeyHierarchies.php.
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
 * @subpackage v201608
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
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
require_once 'Google/Api/Ads/Dfp/Util/v201608/StatementBuilder.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

// Set the ID of the content metadata key hierarchy to delete.
$contentMetadataKeyHierarchyId =
    'INSERT_CONTENT_METADATA_KEY_HIERARCHY_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the ContentMetadataKeyHierarchyService.
  $contentMetadataKeyHierarchyService = $user->GetService(
      'ContentMetadataKeyHierarchyService', 'v201608');

  // Create a statement to select a single content metadata key hierarchy by ID.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->Where('id = :id')
      ->OrderBy('id ASC')
      ->Limit(1)
      ->WithBindVariableValue('id', $contentMetadataKeyHierarchyId);

  // Default for total result set size.
  $totalResultSetSize = 0;

  do {
    // Get content metadata key hierarchies by statement.
    $page = $contentMetadataKeyHierarchyService->
        getContentMetadataKeyHierarchiesByStatement(
            $statementBuilder->ToStatement());

    // Display results.
    if (isset($page->results)) {
      $totalResultSetSize = $page->totalResultSetSize;
      $i = $page->startIndex;
      foreach ($page->results as $contentMetadataKeyHierarchy) {
        printf("%d) Content metadata key hierarchy with ID %d, and name '%s' "
            . "will be deleted.\n", $i++, $contentMetadataKeyHierarchy->id,
            $contentMetadataKeyHierarchy->name);
      }
    }

    $statementBuilder->IncreaseOffsetBy(StatementBuilder::SUGGESTED_PAGE_LIMIT);
  } while ($statementBuilder->GetOffset() < $totalResultSetSize);

  printf("Number of content metadata key hierarchies to be deleted: %d\n", 
      totalResultSetSize);

  if ($totalResultSetSize > 0) {
    // Remove limit and offset from statement.
    $statementBuilder->RemoveLimitAndOffset();

    // Create action.
    $action = new DeleteContentMetadataKeyHierarchies();

    // Perform action.
    $result = $contentMetadataKeyHierarchyService->
        performContentMetadataKeyHierarchyAction($action,
            $statementBuilder->ToStatement());

    // Display results.
    if (isset($result) && $result->numChanges > 0) {
      printf("Number of content metadata key hierarchies deleted: %d\n",
          $result->numChanges);
    } else {
      printf("No content metadata key hierarchies were deleted.\n");
    }
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

