<?php
/**
 * This example creates content metadata key hierarchies. To determine
 * which content metadata key hierarchies exist, run
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
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the ContentMetadataKeyHierarchyService.
  $contentMetadataKeyHierarchyService =
      $user->GetService('ContentMetadataKeyHierarchyService', 'v201608');

  // Set the IDs of the custom targeting keys for the hierarchy.
  $customTargetingKeyId1 = "INSERT_LEVEL_ONE_CUSTOM_TARGETING_KEY_ID_HERE";
  $customTargetingKeyId2 = "INSERT_LEVEL_ONE_CUSTOM_TARGETING_KEY_ID_HERE";

  $hierarchyLevel1 = new ContentMetadataKeyHierarchyLevel();
  $hierarchyLevel1->customTargetingKeyId = $customTargetingKeyId1;
  $hierarchyLevel1->hierarchyLevel = 1;

  $hierarchyLevel2 = new ContentMetadataKeyHierarchyLevel();
  $hierarchyLevel2->customTargetingKeyId = $customTargetingKeyId2;
  $hierarchyLevel2->hierarchyLevel = 2;

  $contentMetadataKeyHierarchy = new ContentMetadataKeyHierarchy();
  $contentMetadataKeyHierarchy->name = sprintf("Content hierarchy #%s",
      uniqid());
  $contentMetadataKeyHierarchy->hierarchyLevels = array($hierarchyLevel1,
      $hierarchyLevel2);

  // Create the content metadata key hierarchy on the server.
  $contentMetadataKeyHierarchies = $contentMetadataKeyHierarchyService->
      createContentMetadataKeyHierarchies(array($contentMetadataKeyHierarchy));

  foreach ($contentMetadataKeyHierarchies as $contentMetadataKeyHierarchy) {
    printf("Content metadata key hierarchy with ID '%d', name '%s', and %d "
        . "levels was created.\n", $contentMetadataKeyHierarchy->id,
        $contentMetadataKeyHierarchy->name,
        count($contentMetadataKeyHierarchy->hierarchyLevels));
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

