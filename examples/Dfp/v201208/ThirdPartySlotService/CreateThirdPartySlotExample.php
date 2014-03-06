<?php
/**
 * This example creates a new third party slot. To determine which third party
 * slots exist, run GetAllThirdPartySlotsExample.php.
 *
 * Tags: ThirdPartySlotService
 *
 * PHP version 5
 *
 * Copyright 2012, Google Inc. All Rights Reserved.
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
 * @subpackage v201208
 * @category   WebServices
 * @copyright  2012, Google Inc. All Rights Reserved.
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
require_once 'Google/Api/Ads/Dfp/Util/DateTimeUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the ThirdPartySlotService.
  $thirdPartySlotService =
      $user->GetService('ThirdPartySlotService', 'v201208');

  // Set the company ID to associate with this third party slot.
  $companyId = 'INSERT_COMPANY_ID_HERE';

  // Set the external unique ID to associate with this third party slot.
  $externalUniqueId = 'INSERT_EXTERNAL_UNIQUE_ID_HERE';

  // Set the external unique name to associate with this third party slot.
  $externalUniqueName = 'INSERT_EXTERNAL_UNIQUE_NAME_HERE';

  // Set the creative IDs to associate with this third party slot.
  $creativeIds = array('INSERT_CREATIVE_ID_HERE');

  // Create the ThirdPartySlot object.
  $thirdPartySlot = new ThirdPartySlot();
  $thirdPartySlot->companyId = $companyId;
  $thirdPartySlot->description = 'Third party slot description.';
  $thirdPartySlot->externalUniqueId = $externalUniqueId;
  $thirdPartySlot->externalUniqueName = $externalUniqueName;

  // Set the creatives that the third party slot will represent.
  $thirdPartySlot->creativeIds = $creativeIds;

  // Create the third party slot on the server.
  $thirdPartySlot =
      $thirdPartySlotService->createThirdPartySlot($thirdPartySlot);

  // Display results.
  if (isset($thirdPartySlot)) {
    printf("A third party slot with ID '%s' and name '%s' was created.\n",
        $thirdPartySlot->id, $thirdPartySlot->externalUniqueName);
  } else {
    print "No third party slot was created.";
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

