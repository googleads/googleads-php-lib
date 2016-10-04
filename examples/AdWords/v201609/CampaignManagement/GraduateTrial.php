<?php
/**
 * This example shows how to graduate a trial.
 * See the Campaign Drafts and Experiments guide for more information:
 * https://developers.google.com/adwords/api/docs/guides/campaign-drafts-experiments
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
$trialId = 'INSERT_TRIAL_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param int $trialId the ID of the trial to graduate
 */
function GraduateTrialExample(AdWordsUser $user, $trialId) {
  // Get the TrialService, which loads the required classes.
  $trialService = $user->GetService('TrialService', ADWORDS_VERSION);
  $budgetService = $user->GetService('BudgetService', ADWORDS_VERSION);

  // To graduate a trial, you must specify a different budget from the base
  // campaign. The base campaign (in order to have had a trial based on it)
  // must have a non-shared budget, so it cannot be shared with the new
  // independent campaign created by graduation.
  $budget = new Budget();
  $budget->name = 'Trial Budget #' . uniqid();
  $budget->amount = new Money(50000000);
  $budget->deliveryMethod = 'STANDARD';

  $operations = array();
  $operation = new BudgetOperation();
  $operation->operand = $budget;
  $operation->operator = 'ADD';
  $operations[] = $operation;

  $budget = $budgetService->mutate($operations)->value[0];

  // Create a trial.
  $trial = new Trial();
  $trial->id = $trialId;
  $trial->budgetId = $budget->budgetId;
  $trial->status = 'GRADUATED';

  // Create an operation.
  $operations = array();
  $operation = new TrialOperation();
  $operation->operand = $trial;
  $operation->operator = 'SET';
  $operations[] = $operation;

  // Make the mutate request.
  $trial = $trialService->mutate($operations)->value[0];

  // Graduation is a synchronous operation, so the campaign is already ready.
  // If you promote instead, make sure to see the polling scheme demonstrated
  // in AddTrial.php to wait for the asynchronous operation to finish.
  printf(
      "Trial with ID %d graduated. Campaign with ID %d was given a new budget "
          . "ID %d and is no longer dependent on this trial.\n",
      $trial->id,
      $trial->trialCampaignId,
      $budget->budgetId
  );
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
  GraduateTrialExample($user, $trialId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
