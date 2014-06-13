<?php
/**
 * This example updates the descriptions of all active labels by updating
 * its description up to the first 500. To determine which labels exist, run
 * GetAllLabelsExample.php. This feature is only available to DFP premium
 * solution networks.
 *
 * Tags: LabelService.getLabelsByStatement
 * Tags: LabelService.updateLabels
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
 * @author     Eric Koleda
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

  // Get the LabelService.
  $labelService = $user->GetService('LabelService', 'v201405');

  // Create a statement to only select labels that are active.
  $filterStatement = new Statement(
      "WHERE isActive = true LIMIT 500");

  // Get labels by statement.
  $page = $labelService->getLabelsByStatement($filterStatement);

  if (isset($page->results)) {
    $labels = $page->results;

    // Update each local label object's description.
    foreach ($labels as $label) {
      $label->description = 'Last updated on ' . date('Ymd');
    }

    // Update the labels on the server.
    $labels = $labelService->updateLabels($labels);

    // Display results.
    if (isset($labels)) {
      foreach ($labels as $label) {
        printf("A label with ID '%s', name '%s', and description '%s' was "
            . "updated.\n", $label->id, $label->name, $label->description);
      }
    } else {
      print "No labels updated.\n";
    }
  } else {
    print "No labels found to update.\n";
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}

