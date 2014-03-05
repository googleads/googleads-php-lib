<?php
/**
 * This example archives all active third party slots for a company. To
 * determine which third party slots exist, run
 * GetAllThirdPartySlotsExample.php.
 *
 * Tags: ThirdPartSlotService
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

  // Set the company that the third party slots to archive belong to.
  $companyId = 'INSERT_COMPANY_ID_HERE';

  // Create bind variables.
  $vars = MapUtils::GetMapEntries(array(
      'companyId' => new NumberValue($companyId),
      'status' => new TextValue('ACTIVE')));

  // Create a statement to only select active third party slots.
  $filterStatementText = 'WHERE companyId = :companyId AND status = :status';

  $offset = 0;

  do {
    // Create statement to page through results.
    $filterStatement =
        new Statement($filterStatementText . ' LIMIT 500 OFFSET ' . $offset,
            $vars);

    // Get third party slots by statement.
    $page =
        $thirdPartySlotService->getThirdPartySlotsByStatement($filterStatement);

    // Display results.
    $thirdPartySlotIds = array();
    if (isset($page->results)) {
      $i = $page->startIndex;
      foreach ($page->results as $thirdPartySlot) {
        printf("Third party slot with ID '%s' will be archived.\n",
            $thirdPartySlot->id);
        $i++;
        $thirdPartySlotIds[] = $thirdPartySlot->id;
      }
    }

    $offset += 500;
  } while ($offset < $page->totalResultSetSize);

  printf("Number of third party slots to be archived: %d\n",
      sizeof($thirdPartySlotIds));

  if (sizeof($thirdPartySlotIds) > 0) {
    // Create action statement.
    $filterStatementText =
        sprintf('WHERE id IN (%s)', implode(',', $thirdPartySlotIds));
    $filterStatement = new Statement($filterStatementText);

    // Create action.
    $action = new ArchiveThirdPartySlots();

    // Perform action.
    $result = $thirdPartySlotService->performThirdPartySlotAction($action,
        $filterStatement);

    // Display results.
    if (isset($result) && $result->numChanges > 0) {
      printf("Number of third party slots archived: %d\n",
          $result->numChanges);
    } else {
      print "No third party slots were archived.\n";
    }
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

