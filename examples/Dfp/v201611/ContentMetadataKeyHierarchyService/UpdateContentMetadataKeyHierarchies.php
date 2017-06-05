<?php
/**
 * This example updates a content metadata key hierarchy by adding a hierarchy
 * level. To determine which content metadata key hierarchies exist, run
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
 * @subpackage v201611
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
require_once 'Google/Api/Ads/Dfp/Util/v201611/StatementBuilder.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

// Set the ID of the content metadata key hierarchy to update.
$contentMetadataKeyHierarchyId =
    'INSERT_CONTENT_METADATA_KEY_HIERARCHY_ID_HERE';

// Set the ID of the custom targeting key to be added as a hierarchy level.
$customTargetingKeyId = 'INSERT_CUSTOM_TARGETING_KEY_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the ContentMetadataKeyHierarchyService.
  $contentMetadataKeyHierarchyService =
      $user->GetService('ContentMetadataKeyHierarchyService', 'v201611');

  // Create a statement to select a single content metadata key hierarchy by ID.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->Where('id = :id')
      ->OrderBy('id ASC')
      ->Limit(1)
      ->WithBindVariableValue('id', $contentMetadataKeyHierarchyId);

  // Get the content metadata key hierarchy.
  $page =
      $contentMetadataKeyHierarchyService->
          getContentMetadataKeyHierarchiesByStatement(
              $statementBuilder->ToStatement());
  $contentMetadataKeyHierarchy = $page->results[0];

  // Update the content metadata key hierarchy by adding a hierarchy level.
  $hierarchyLevels = $contentMetadataKeyHierarchy->hierarchyLevels;

  $hierarchyLevel = new ContentMetadataKeyHierarchyLevel();
  $hierarchyLevel->customTargetingKeyId = $customTargetingKeyId;
  $hierarchyLevel->hierarchyLevel = count($hierarchyLevels) + 1;

  $contentMetadataKeyHierarchy->hierarchyLevels[] = $hierarchyLevel;

  // Update the content metadata key hierarchy on the server.
  $contentMetadataKeyHierarchies =
      $contentMetadataKeyHierarchyService->updateContentMetadataKeyHierarchies(
          array($contentMetadataKeyHierarchy));

  foreach (
      $contentMetadataKeyHierarchies as $updatedContentMetadataKeyHierarchy) {
    printf("Content metadata key hierarchy with ID %d, and name '%s' was "
        . "updated.\n", $updatedContentMetadataKeyHierarchy->id,
        $updatedContentMetadataKeyHierarchy->name);
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

