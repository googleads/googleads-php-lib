<?php
/**
 * This example demonstrates how to handle partial failures when adding
 * placements. To get ad groups run BasicOperations/GetAdGroups.php.
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

require_once dirname(dirname(__FILE__)) . '/init.php';

require_once UTIL_PATH . '/ErrorUtils.php';

// Enter parameters required by the code example.
$adGroupId = 'INSERT_AD_GROUP_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $adGroupId the id to add placements to
 */
function HandlePartialFailuresExample(AdWordsUser $user, $adGroupId) {
  // Get the service, which loads the required classes. Passing true for the
  // parameter $partialFailure enables partial failure behavior.
  $adGroupCriterionService = $user->GetService('AdGroupCriterionService',
      ADWORDS_VERSION, NULL, NULL, NULL, TRUE);

  // Create placements.
  $placements = array();
  $placements[] = new Placement('mars.google.com');
  $placements[] = new Placement('bad.url');
  $placements[] = new Placement('venus.google.com');
  $placements[] = new Placement('example.com/invalid<character');

  // Create ad group criteria and operations.
  $operations = array();
  foreach ($placements as $placement) {
    $adGroupCriterion = new BiddableAdGroupCriterion();
    $adGroupCriterion->adGroupId = $adGroupId;
    $adGroupCriterion->criterion = $placement;

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
      printf("Placement with URL '%s' and ID '%s' was added.\n",
          $adGroupCriterion->criterion->url,
          $adGroupCriterion->criterion->id);
    }
  }

  // Check for partial failures.
  if (isset($result->partialFailureErrors)) {
    foreach ($result->partialFailureErrors as $error) {
      $index = ErrorUtils::GetSourceOperationIndex($error);
      if (isset($index)) {
        $adGroupCriterion = $operations[$index]->operand;
        printf("Placement with URL '%s' failed with error '%s'.\n",
            $adGroupCriterion->criterion->url, $error->errorString);
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
