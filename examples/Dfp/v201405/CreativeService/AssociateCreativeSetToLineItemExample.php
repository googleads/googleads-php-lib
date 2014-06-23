<?php
/**
 * This example creates a line item creative association for a creative set. To
 * create creative sets, run CreateCreativeSetExample.php. To create creatives,
 * run CreateCreativesExample.php. To determine which LICAs exist, run
 * GetAllLicasExample.php.
 *
 * Tags: LineItemCreativeAssociationService.createLineItemCreativeAssociations
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

  // Get the LineItemCreativeAssociationService.
  $licaService = $user->GetService('LineItemCreativeAssociationService',
      'v201405');

  // Set the line item ID and creative set ID to associate.
  $lineItemId = "INSERT_LINE_ITEM_ID_HERE";
  $creativeSetId = "INSERT_CREATIVE_SET_ID_HERE";

  $lica = new LineItemCreativeAssociation();
  $lica->lineItemId = $lineItemId;
  $lica->creativeSetId = $creativeSetId;

  // Create the LICA on the server.
  $licas = $licaService->createLineItemCreativeAssociations(array($lica));
  $lica = $licas[0];

  printf("A LICA with line item ID %d and creative set ID %d was created.",
      $lica->lineItemId, $lica->creativeSetId);
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

