<?php
/**
 * This example sets ad parameters for a keyword. To get keywords, run
 * BasicOperaitons/GetKeywords.php.
 *
 * Copyright 2016, Google Inc. All Rights Reserved.
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
 * @package    GoogleApiAdsAdWords
 * @subpackage v201609
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
$adGroupId = 'INSERT_AD_GROUP_ID_HERE';
$keywordId = 'INSERT_KEYWORD_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $adGroupId the id of the parent ad group of the keyword
 * @param string $keywordId the id of the keyword to set ad parameters for
 */
function SetAdParametersExample(AdWordsUser $user, $adGroupId, $keywordId) {
  // Get the service, which loads the required classes.
  $adParamService = $user->GetService('AdParamService', ADWORDS_VERSION);

  // Create ad parameters.
  $adParam1 = new AdParam($adGroupId, $keywordId, '100', 1);
  $adParam2 = new AdParam($adGroupId, $keywordId, '$40', 2);

  // Create operations.
  $operations = array();

  $adParamOperation1 = new AdParamOperation();
  $adParamOperation1->operand = $adParam1;
  $adParamOperation1->operator = 'SET';
  $operations[] = $adParamOperation1;

  $adParamOperation2 = new AdParamOperation();
  $adParamOperation2->operand = $adParam2;
  $adParamOperation2->operator = 'SET';
  $operations[] = $adParamOperation2;

  // Make the mutate request.
  $adParams = $adParamService->mutate($operations);

  // Display results.
  foreach ($adParams as $adParam) {
    printf("Ad parameter with insertion text '%s' and parameter index '%s' "
        . "was set.\n", $adParam->insertionText, $adParam->paramIndex);
  }
}

// Don't run the example if the file is being included.
if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
  return;
}

try {
  // Get AdWordsUser from credentials in "../auth.ini"
  // relative to the AdWordsUser.php file's directory.
  $user = new AdWordsUser();

  // Log every SOAP XML request and response.
  $user->LogAll();

  // Run the example.
  SetAdParametersExample($user, $adGroupId, $keywordId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
