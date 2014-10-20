<?php
/**
 * This example updates the destination URL of all LICAs up to the first
 * 500. To determine which LICAs exist, run GetAllLicasExample.php.
 *
 * Tags: LineItemCreativeAssociationService.getLineItemCreativeAssociationsByStatement
 * Tags: LineItemCreativeAssociationService.updateLineItemCreativeAssociations
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
 * @author     Adam Rogal
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

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the LineItemCreativeAssociationService.
  $licaService =
      $user->GetService('LineItemCreativeAssociationService', 'v201405');

  // Create a statement to get all LICAs.
  $filterStatement = new Statement("LIMIT 500");

  // Get LICAs by statement.
  $page = $licaService->getLineItemCreativeAssociationsByStatement(
      $filterStatement);

  if (isset($page->results)) {
    $licas = $page->results;

    // Update each local LICA object by changing its destination URL.
    foreach ($licas as $lica) {
      $lica->destinationUrl = 'http://news.google.com';
    }

    // Update the LICAs on the server.
    $licas = $licaService->updateLineItemCreativeAssociations($licas);

    // Display results.
    if (isset($licas)) {
      foreach ($licas as $lica) {
        print 'LICA with line item ID "' . $lica->lineItemId
            . '", creative ID "' . $lica->creativeId
            . '", and destination URL "' . $lica->destinationUrl
            . "\" was updated.\n";
      }
    } else {
      print "No LICAs updated.\n";
    }
  } else {
    print "No LICAs found to update.\n";
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

