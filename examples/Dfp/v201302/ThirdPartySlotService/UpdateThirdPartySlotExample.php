<?php
/**
 * This example updates the first third party slot description.
 *
 * Tags: ThirdPartySlotService
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
 * @subpackage v201302
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

  // Get the ThirdPartySlotService.
  $thirdPartySlotService =
      $user->GetService('ThirdPartySlotService', 'v201302');

  // Create a statement to get one active third party slot.
  $filterStatement = new Statement('WHERE status = :status LIMIT 1',
      MapUtils::GetMapEntries(array('status' => new TextValue('ACTIVE'))));

  // Get third party slots by statement.
  $page =
      $thirdPartySlotService->getThirdPartySlotsByStatement($filterStatement);

  if (isset($page->results)) {
    $thirdPartySlot = $page->results[0];

    // Update the local third party slot by changing its description.
    $thirdPartySlot->description = 'Updated description';

    // Update the third party slot on the server.
    $thirdPartySlot =
        $thirdPartySlotService->updateThirdPartySlot($thirdPartySlot);

    // Display results.
    if (isset($thirdPartySlot)) {
      printf("Third party slot with ID '%s' and description '%s' was "
          . "updated.\n", $thirdPartySlot->id, $thirdPartySlot->description);
    } else {
      print "The third party slot was not updated.\n";
    }
  } else {
    print "No third party slot was found to update.\n";
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

