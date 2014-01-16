<?php
/**
 * This example demonstrates how to handle partial failures when adding
 * keywords. To get ad groups run BasicOperations/GetAdGroups.php.
 *
 * Tags: AdGroupCriterionService.mutate
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
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @category   WebServices
 * @copyright  2012, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';
require_once UTIL_PATH . '/ErrorUtils.php';

// Enter parameters required by the code example.
$adGroupId = 'INSERT_AD_GROUP_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $adGroupId the id to add keywords to
 */
function HandlePartialFailuresExample(AdWordsUser $user, $adGroupId) {
  // Get the service, which loads the required classes. Passing true for the
  // parameter $partialFailure enables partial failure behavior.
  $adGroupCriterionService = $user->GetService('AdGroupCriterionService',
      ADWORDS_VERSION, NULL, NULL, NULL, TRUE);

  // Create keywords.
  $keywords = array();
  $keywords[] = new Keyword('mars cruise', 'BROAD');
  $keywords[] = new Keyword('inv@lid cruise', 'BROAD');
  $keywords[] = new Keyword('venus cruise', 'BROAD');
  $keywords[] = new Keyword('b(a)d keyword cruise', 'BROAD');

  // Create ad group criteria and operations.
  $operations = array();
  foreach ($keywords as $keyword) {
    $adGroupCriterion = new BiddableAdGroupCriterion();
    $adGroupCriterion->adGroupId = $adGroupId;
    $adGroupCriterion->criterion = $keyword;

    $operation = new AdGroupCriterionOperation();
    $operation->operand = $adGroupCriterion;
    $operation->operator = 'ADD';

    $operations[] = $operation;
  }

  // Make the mutate request.
  $result = $adGroupCriterionService->mutate($operations);

  // Display results.
  foreach ($result->value as $adGroupCriterion) {
    if ($adGroupCriterion->AdGroupCriterionType == 'BiddableAdGroupCriterion') {
      printf("Keyword with text '%s', match type '%s', and ID '%s' was "
          . "added.\n", $adGroupCriterion->criterion->text,
          $adGroupCriterion->criterion->matchType,
          $adGroupCriterion->criterion->id);
    }
  }

  // Check for partial failures.
  if (isset($result->partialFailureErrors)) {
    foreach ($result->partialFailureErrors as $error) {
      $index = ErrorUtils::GetSourceOperationIndex($error);
      if (isset($index)) {
        $adGroupCriterion = $operations[$index]->operand;
        printf("Keyword with text '%s' and match type '%s' failed with error "
            . "'%s'.\n", $adGroupCriterion->criterion->text,
          $adGroupCriterion->criterion->matchType, $error->errorString);
      } else {
        printf("Operations failed with error '%s'.\n", $error->errorString);
      }
    }
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
  HandlePartialFailuresExample($user, $adGroupId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
