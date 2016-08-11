<?php
/**
 * This example adds a companion creative to a creative set. To determine which
 * creative sets exist, run GetAllCreativeSets.php.
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
 * @subpackage v201605
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
require_once 'Google/Api/Ads/Dfp/Util/v201605/StatementBuilder.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

// Set the ID of the creative set to update.
$creativeSetId = 'INSERT_CREATIVE_SET_ID_HERE';

// Set the ID of the companion creative to add to the creative set.
$companionCreativeId = 'INSERT_COMPANION_CREATIVE_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the CreativeSetService.
  $creativeSetService = $user->GetService('CreativeSetService', 'v201605');

  // Create a statement to select a single creative set by ID.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->Where('id = :id')
      ->OrderBy('id ASC')
      ->Limit(1)
      ->WithBindVariableValue('id', $creativeSetId);

  // Get the creative set.
  $page = $creativeSetService->getCreativeSetsByStatement(
      $statementBuilder->ToStatement());
  $creativeSet = $page->results[0];

  // Add the companion creative to the creative set.
  $creativeSet->companionCreativeIds[] = $companionCreativeId;

  // Update the creative set on the server.
  $updatedCreativeSet = $creativeSetService->updateCreativeSet($creativeSet);

  printf("Creative set with ID %d, master creative ID %d, and companion "
      . "creative IDs [%s] was updated.\n", $updatedCreativeSet->id,
      $updatedCreativeSet->masterCreativeId,
      implode(',', $updatedCreativeSet->companionCreativeIds));
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

