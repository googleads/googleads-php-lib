<?php
/**
 * This code example updates a creative set by adding a companion creative. 
 * To determine which creative sets exist, run
 * GetAllCreativeSetsExample.php.
 *
 * Tags: CreativeSetService.getCreativeSetsByStatement
 * Tags: CreativeSetService.updateCreativeSets
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

  // Get the CreativeSetService.
  $creativeSetService = $user->GetService('CreativeSetService', 'v201405');

  // Set the ID of the creative set to get.
  $creativeSetId = 'INSERT_CREATIVE_SET_ID_HERE';
  $companionCreativeId = 'INSERT_COMPANION_CREATIVE_ID_HERE';

  // Create a statement to select a single creative set by ID.
  $vars =
      MapUtils::GetMapEntries(array('id' => new NumberValue($creativeSetId)));
  $filterStatement = new Statement("WHERE id = :id ORDER BY id ASC LIMIT 1",
      $vars);

  // Get the creative set.
  $page = $creativeSetService->getCreativeSetsByStatement($filterStatement);
  $creativeSet = $page->results[0];

  // Update the companion creatives.
  $creativeSet->companionCreativeIds[] = $companionCreativeID;

  // Update the creative set on the server.
  $creativeSets = $creativeSetService->updateCreativeSets(array($creativeSet));

  foreach ($creativeSets as $creativeSet) {
    printf ("A creative set with ID '%s', name '%s', master creative ID '%s' "
        . ", and companion creativeID(s) {%s} was updated.\n",
        $creativeSet->id, $creativeSet->name, $creativeSet->masterCreativeId,
        join(',', $creativeSet->companionCreativeIds));
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

