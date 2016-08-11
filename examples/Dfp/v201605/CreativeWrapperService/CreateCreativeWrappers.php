<?php
/**
 * This code example creates a new creative wrapper. Creative wrappers must be
 * associated with a LabelType.CREATIVE_WRAPPER label and applied to ad units
 * by AdUnit.appliedLabels. To determine which creative wrappers exist, run
 * GetAllCreativeWrappers.php.
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
 * @subpackage v201605
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
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
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the CreativeWrapperService.
  $creativeWrapperService = $user->GetCreativeWrapperService('v201605');

  $labelId = 'INSERT_CREATIVE_WRAPPER_LABEL_ID_HERE';

  // Create creative wrapper objects.
  $creativeWrapper = new CreativeWrapper();
  $creativeWrapper->labelId = $labelId;
  $creativeWrapper->ordering = 'INNER';
  $creativeWrapper->header = new CreativeWrapperHtmlSnippet;
  $creativeWrapper->header->htmlSnippet = '<b>My creative wrapper header</b>';
  $creativeWrapper->footer = new CreativeWrapperHtmlSnippet;
  $creativeWrapper->footer->htmlSnippet = '<b>My creative wrapper footer</b>';

  // Create the creative wrappers on the server.
  $creativeWrappers =
      $creativeWrapperService->CreateCreativeWrappers(array($creativeWrapper));

  // Display results.
  if (isset($creativeWrappers)) {
    foreach ($creativeWrappers as $creativeWrapper) {
      printf("Creative wrapper with ID '%d' applying to label '%d' was" .
          " created.\n", $creativeWrapper->id, $creativeWrapper->labelId);
    }
  } else {
    print "No creative wrappers were created.";
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  print $e->getMessage() . "\n";
}


