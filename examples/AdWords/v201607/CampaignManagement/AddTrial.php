<?php
/**
 * This example shows how to create a trial and wait for it to complete.
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
 * @subpackage v201607
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
define('MAX_POLL_ATTEMPTS', 5);
define('POLL_FREQUENCY_SECONDS', 30);

$draftId = 'INSERT_DRAFT_ID_HERE';
$baseCampaignId = 'INSERT_BASE_CAMPAIGN_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param int $draftId the ID of the draft used to create a trial
 * @param int $baseCampaignId the ID of the base campaign used to create
 *     a trial
 */
function AddTrialExample(AdWordsUser $user, $draftId, $baseCampaignId) {
  // Get the TrialService, which loads the required classes.
  $trialService = $user->GetService('TrialService', ADWORDS_VERSION);
  $trialAsynErrorService =
      $user->GetService('TrialAsyncErrorService', ADWORDS_VERSION);

  // Create a trial.
  $trial = new Trial();
  $trial->draftId = $draftId;
  $trial->baseCampaignId = $baseCampaignId;
  $trial->name = 'Test Trial #' . uniqid();
  $trial->trafficSplitPercent = 50;

  // Create an operation.
  $operation = new TrialOperation();
  $operation->operand = $trial;
  $operation->operator = 'ADD';
  $operations[] = $operation;

  // Make the mutate request.
  $result = $trialService->mutate($operations);
  $trial = $result->value[0];

  $selector = new Selector();
  $selector->fields =
      array('Id', 'Status', 'BaseCampaignId', 'TrialCampaignId');
  $selector->predicates = new Predicate('Id', 'IN', array($trial->id));

  // Since creating a trial is asynchronous, we have to poll it to wait for it
  // to finish.
  $pollAttempts = 0;
  $isPending = true;
  $trial = null;
  do {
    $sleepSeconds = POLL_FREQUENCY_SECONDS * pow(2, $pollAttempts);
    printf("Sleeping %d seconds...\n", $sleepSeconds);
    sleep($sleepSeconds);

    $trial = $trialService->get($selector)->entries[0];
    printf("Trial ID %d has status '%s'.\n", $trial->id, $trial->status);

    $pollAttempts++;
    $isPending = ($trial->status === 'CREATING') ? true : false;
  } while ($isPending && $pollAttempts <= MAX_POLL_ATTEMPTS);

  if ($trial->status === 'ACTIVE') {
    // The trial creation was successful.
    printf("Trial created with ID %d and trial campaign ID %d\n", $trial->id,
        $trial->trialCampaignId);
  } else if ($trial->status === 'CREATION_FAILED') {
    // The trial creation failed, and errors can be fetched from the
    // TrialAsyncErrorService.
    $selector = new Selector();
    $selector->fields = array('TrialId', 'AsyncError');
    $selector->predicates = new Predicate('TrialId', 'IN', array($trial->id));

    $errors = $trialAsynErrorService->get($selector)->entries;

    if (count($errors) === 0) {
      printf("Could not retrieve errors for the trial with ID %d\n",
          $trial->id);
    } else {
      printf("Could not create trial due to the following errors:\n");
      $i = 0;
      foreach ($errors as $error) {
        printf("Error #%d: %s\n", $i++, $error->asyncError);
      }
    }
  } else {
    // Most likely, the trial is still being created. You can continue polling,
    // but we have limited the number of attempts in the example.
    printf("Timed out waiting to create trial from draft with ID %d with base "
        . "campaign with ID %d\n", $draftId, $baseCampaignId);
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
  AddTrialExample($user, $draftId, $baseCampaignId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
