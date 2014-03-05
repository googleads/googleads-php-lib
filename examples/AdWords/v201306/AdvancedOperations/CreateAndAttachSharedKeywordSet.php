<?php
/**
 * This example creates a shared list of negative broad match keywords, it
 * then attaches them to a campaign.
 *
 * This is a BETA feature.
 *
 * Tags: SharedSetService.mutate, CampaignSharedSetService.mutate
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
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Paul Matthews
 */

// Include the initialization file.
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
$campaignId = 'INSERT_CAMPAIGN_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $campaignId the ID of the parent campaign
 */
function CreateAndAttachSharedKeywordSetExample(AdWordsUser $user,
    $campaignId) {

  $keywordTexts = array(
    'mars cruise',
    'mars hotels',
  );

  // Create shared negative Keyword Set.
  $sharedSetService = $user->GetService('SharedSetService');

  $set = new SharedSet();
  $set->name = sprintf(
    'API Negative keyword list #%s',
    uniqid()
  );
  $set->type = 'NEGATIVE_KEYWORDS';

  $operation = new SharedSetOperation();
  $operation->operator = 'ADD';
  $operation->operand = $set;

  $operations = array($operation);

  $result = $sharedSetService->mutate($operations);

  // Get the shared set ID and print it.
  $set = $result->value[0];
  $sharedSetId = $set->sharedSetId;
  printf(
    "SharedSet '%s' has been created with ID '%s'\n",
    $set->name,
    $sharedSetId
  );

  // Add negative Keywords to SharedSet.
  $sharedCriterionService = $user->GetService('SharedCriterionService');

  $operations = array();
  foreach ($keywordTexts as $keywordText) {
    $keyword = new Keyword();
    $keyword->text = $keywordText;
    $keyword->matchType = 'BROAD';

    $sharedCriterion = new SharedCriterion();
    $sharedCriterion->criterion = $keyword;
    $sharedCriterion->negative = true;
    $sharedCriterion->sharedSetId = $sharedSetId;

    $operation = new SharedCriterionOperation();
    $operation->operator = 'ADD';
    $operation->operand = $sharedCriterion;


    $operations[] = $operation;
  }

  $result = $sharedCriterionService->mutate($operations);

  // Print the shared negative keywords.
  foreach ($result->value as $sharedCriterion) {
    printf(
      "Shared negative Keyword '%s' created, with ID '%s'\n",
      $sharedCriterion->criterion->text,
      $sharedCriterion->criterion->id
    );
  }

  // Attach the articles to the campaign.
  $campaignSharedSetService = $user->GetService('CampaignSharedSetService');

  $campaignSet = new CampaignSharedSet();
  $campaignSet->campaignId = $campaignId;
  $campaignSet->sharedSetId = $sharedSetId;

  $operator = new CampaignSharedSetOperation();
  $operator->operator = 'ADD';
  $operator->operand = $campaignSet;

  $operations = array($operator);

  $result = $campaignSharedSetService->mutate($operations);

  // Print the CampaignSharedSet and its relating IDs.
  $campaignSet = $result->value[0];
  printf(
    "Created CampaignSharedSet with campaign ID '%s' and shared set ID '%s'\n",
    $campaignSet->campaignId,
    $campaignSet->sharedSetId
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
  CreateAndAttachSharedKeywordSetExample($user, $campaignId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
