<?php
/**
 * This example deletes a content metadata key hierarchy. To determine
 * which content metadata key hierarchies exist, run
 * GetAllContentMetadataKeyHierarchiesExample.php.
 *
 * Tags: ContentMetadataKeyHierarchyService.getContentMetadataKeyHierarchiesByStatement
 * Tags: ContentMetadataKeyHierarchyService.performContentMetadataKeyHierarchyAction
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
 * @subpackage v201405
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
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the ContentMetadataKeyHierarchyService.
  $contentMetadataKeyHierarchyService =
      $user->GetService('ContentMetadataKeyHierarchyService', 'v201405');

  // Set the ID of the content metadata key hierarchy to delete.
  $contentMetadataKeyHierarchyId =
      "INSERT_CONTENT_METADATA_KEY_HIERARCHY_ID_HERE";

  // Create a statement to select a single content metadata key hierarchy by ID.
  $vars = MapUtils::GetMapEntries(array('id' =>
      new NumberValue($contentMetadataKeyHierarchyId)));
  $filterStatement = new Statement("WHERE id = :id ORDER BY id ASC LIMIT 1",
      $vars);

  // Get the content metadata key hierarchy.
  $page = $contentMetadataKeyHierarchyService->
      getContentMetadataKeyHierarchiesByStatement($filterStatement);
  $contentMetadataKeyHierarchy = $page->results[0];

  printf("Content metadata key hierarchy with ID '%d' will be deleted.\n",
      $contentMetadataKeyHierarchy->id);

  // Create and perform the delete action.
  $filterStatement = new Statement("WHERE id = :id", $vars);
  $deleteAction = new DeleteContentMetadataKeyHierarchies();
  $result = $contentMetadataKeyHierarchyService->
      performContentMetadataKeyHierarchyAction($deleteAction, $filterStatement);

  printf("Number of content metadata key hierarchies deleted: %d.\n",
      $result->numChanges);
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

