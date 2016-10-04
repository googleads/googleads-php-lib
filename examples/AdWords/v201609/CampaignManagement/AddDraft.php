<?php
/**
 * This example shows how to create a draft and access its associated
 * draft campaign.
 *
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
$baseCampaignId = 'INSERT_BASE_CAMPAIGN_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param int $baseCampaignId the ID of the base campaign used to create
 *     a draft
 */
function AddDraftExample(AdWordsUser $user, $baseCampaignId) {
  // Get the DraftService, which loads the required classes.
  $draftService = $user->GetService('DraftService', ADWORDS_VERSION);

  // Create a draft.
  $draft = new Draft();
  $draft->baseCampaignId = $baseCampaignId;
  $draft->draftName = 'Test Draft #' . uniqid();

  // Create an operation.
  $operation = new DraftOperation();
  $operation->operand = $draft;
  $operation->operator = 'ADD';
  $operations[] = $operation;

  // Make the mutate request.
  $result = $draftService->mutate($operations);
  $draft = $result->value[0];
  printf(
      "Draft with ID %d, base campaign ID %d, and draft campaign ID"
          . " %d was added.\n",
      $draft->draftId,
      $draft->baseCampaignId,
      $draft->draftCampaignId
  );

  // Once the draft is created, you can modify the draft campaign as if it were
  // a real campaign. For example, you may add criteria, adjust bids, or even
  // include additional ads. Adding a criterion is shown here.
  $campaignCriterionService =
      $user->GetService('CampaignCriterionService', ADWORDS_VERSION);

  // Create a criterion.
  $language = new Language();
  $language->id = 1003; // Spanish
  $campaignCriterion = new CampaignCriterion();
  $campaignCriterion->campaignId = $draft->draftCampaignId;
  $campaignCriterion->criterion = $language;

  // Create an operation.
  $operations = array();
  $operation = new CampaignCriterionOperation();
  $operation->operand = $campaignCriterion;
  $operation->operator = 'ADD';
  $operations[] = $operation;

  // Make the mutate request.
  $result = $campaignCriterionService->mutate($operations);
  $campaignCriterion = $result->value[0];

  printf("Draft updated to include criteria in the campaign with ID %d.\n",
      $draft->draftCampaignId);
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
  AddDraftExample($user, $baseCampaignId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
