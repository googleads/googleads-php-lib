<?php
/**
 * This example updates a LICA's destination URL. To determine which LICAs
 * exist, run GetAllLicas.php.
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

// Set the line item ID of the LICA to update.
$lineItemId = 'INSERT_LINE_ITEM_ID_HERE';

// Set the master or creative set ID of the LICA to update. For creative sets,
// set the master creative ID.
$creativeId = 'INSERT_CREATIVE_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the LineItemCreativeAssociationService.
  $licaService =
      $user->GetService('LineItemCreativeAssociationService', 'v201605');

  // Create a statement to select a single LICA by ID.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->Where(
      'lineItemId = :lineItemId AND creativeId = :creativeId')
      ->OrderBy('lineItemId ASC, creativeId ASC')
      ->Limit(1)
      ->WithBindVariableValue('lineItemId', $lineItemId)
      ->WithBindVariableValue('creativeId', $creativeId);

  // Get the LICA.
  $page =
      $licaService->getLineItemCreativeAssociationsByStatement(
          $statementBuilder->ToStatement());
  $lica = $page->results[0];

  // Update the destination URL.
  $lica->destinationUrl = 'https://news.google.com?newTrackingParameter';

  // Update the LICA on the server.
  $licas = $licaService->updateLineItemCreativeAssociations(array($lica));

  foreach ($licas as $updatedLica) {
    printf("Lica with line item ID %d, and creative ID %d was updated.\n",
        $updatedLica->lineItemId, $updatedLica->creativeId);
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

