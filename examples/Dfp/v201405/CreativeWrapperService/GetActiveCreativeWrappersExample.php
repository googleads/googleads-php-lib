<?php
/**
 * This code example gets all active creative wrappers. To create creative
 * wrappers, run CreateCreativeWrappersExample.php
 *
 * Tags: CreativeWrapperService.getCreativeWrappersByStatement
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

  // Get the CreativeWrapperService.
  $creativeWrapperService = $user->GetCreativeWrapperService('v201405');

  // Create a statement to select only active creative wrappers.
  $vars = MapUtils::GetMapEntries(array('status' => new TextValue('ACTIVE')));
  $filterStatement =
      new Statement('WHERE status = :status', $vars);

  // Get creative wrappers by statement.
  $page =
      $creativeWrapperService->getCreativeWrappersByStatement($filterStatement);

  // Display results.
  if (isset($page->results)) {
    foreach ($page->results as $creativeWrapper) {
      printf("Creative wrapper with ID '%s' applying to label '%s' with" .
          " status '%s' was found.\n", $creativeWrapper->id,
          $creativeWrapper->labelId, $creativeWrapper->status);
    }
  }

  printf("Number of results found: %s\n", $page->totalResultSetSize);
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}


