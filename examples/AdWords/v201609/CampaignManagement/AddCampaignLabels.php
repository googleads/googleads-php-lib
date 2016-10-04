<?php
/**
 * This example adds a label to multiple campaigns.
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

$campaignIds = array('INSERT_CAMPAIGN_ID_1_HERE', 'INSERT_CAMPAIGN_ID_2_HERE');
$labelId = 'INSERT_LABEL_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param array $campaignIds an array of campaign Ids to run the example with
 * @param string $labelId the label Id to run the example with
 */
function AddCampaignLabelsExample(AdWordsUser $user, array $campaignIds,
    $labelId) {
  // Get the CampaignService, which loads the required classes.
  $campaignService = $user->GetService('CampaignService', ADWORDS_VERSION);

  $operations = array();
  foreach ($campaignIds as $campaignId) {
    $campaignLabel = new CampaignLabel();
    $campaignLabel->campaignId = $campaignId;
    $campaignLabel->labelId = $labelId;

    $operation = new CampaignLabelOperation();
    $operation->operand = $campaignLabel;
    $operation->operator = 'ADD';

    $operations[] = $operation;
  }

  // Make the mutate request.
  $result = $campaignService->mutateLabel($operations);

  // Display results.
  foreach ($result->value as $campaignLabel) {
    printf("Campaign label for campaign ID '%s' and label ID '%d' was added.\n",
        $campaignLabel->campaignId, $campaignLabel->labelId);
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
  AddCampaignLabelsExample($user, $campaignIds, $labelId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
