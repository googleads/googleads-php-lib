<?php
/**
 * This example creates an experiment using a query percentage of 10, which
 * defines what fraction of auctions should go to the control split (90%) vs.
 * the experiment split (10%), then adds experimental bid changes for an ad
 * group, and adds an experiment-only keyword. To get campaigns, run
 * BasicOperations/GetCampaigns.php. To get ad groups, run
 * BasicOperations/GetAdGroups.php. To get keywords, run
 * BasicOperations/GetKeywords.php.
 *
 * Tags: ExperimentService.mutate
 * Restriction: adwords-only
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

// Enter parameters required by the code example.
$campaignId = "INSERT_CAMPAIGN_ID_HERE";
$adGroupId = "INSERT_AD_GROUP_ID_HERE";

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $campaignId the ID of the campaign to add the experiment to
 * @param string $adGroupId the ID of the ad group to set experimental bids on
 */
function AddExperimentExample(AdWordsUser $user, $campaignId, $adGroupId) {
  // Get the services, which loads the required classes.
  $experimentService = $user->GetService('ExperimentService', ADWORDS_VERSION);
  $adGroupService = $user->GetService('AdGroupService', ADWORDS_VERSION);
  $adGroupCriterionService =
      $user->GetService('AdGroupCriterionService', ADWORDS_VERSION);

  // Create experiment.
  $experiment = new Experiment();
  $experiment->campaignId = $campaignId;
  $experiment->name = 'Interplanetary Experiment #' . uniqid();
  $experiment->queryPercentage = 10;

  // Set additional settings (optional).
  $experiment->startDateTime = date('Ymd His', strtotime('+1 day'));
  $experiment->endDateTime = date('Ymd His', strtotime('+1 month'));

  // Create operation.
  $experimentOperation = new ExperimentOperation();
  $experimentOperation->operand = $experiment;
  $experimentOperation->operator = 'ADD';

  $experimentOperations = array($experimentOperation);

  // Make the mutate request.
  $result = $experimentService->mutate($experimentOperations);

  // Display result.
  $experiment = $result->value[0];
  printf ("Experiment with name '%s' and ID '%.0f' was added.\n",
      $experiment->name, $experiment->id);

  // Create ad group bid multipliers to be used in the experiment.
  $adGroupBidMultipliers = new ManualCPCAdGroupExperimentBidMultipliers();
  $adGroupBidMultipliers->maxCpcMultiplier = new BidMultiplier(1.5);

  // Create ad group experiment data.
  $adGroupExperimentData = new AdGroupExperimentData();
  $adGroupExperimentData->experimentId = $experiment->id;
  $adGroupExperimentData->experimentDeltaStatus = 'MODIFIED';
  $adGroupExperimentData->experimentBidMultipliers = $adGroupBidMultipliers;

  // Create updated ad group.
  $adGroup = new AdGroup();
  $adGroup->id = $adGroupId;
  $adGroup->experimentData = $adGroupExperimentData;

  // Create operation.
  $adGroupOperation = new AdGroupOperation();
  $adGroupOperation->operand = $adGroup;
  $adGroupOperation->operator = 'SET';

  $adGroupOperations = array($adGroupOperation);

  // Make the mutate request.
  $result = $adGroupService->mutate($adGroupOperations);

  // Display result.
  $adGroup = $result->value[0];
  printf ("Ad group with name '%s' and ID '%.0f' was updated in the "
      . "experiment.\n", $adGroup->name, $adGroup->id);

  // Create experiment data for a new experiment-only keyword.
  $adGroupCriterionExperimentData =
      new BiddableAdGroupCriterionExperimentData();
  $adGroupCriterionExperimentData->experimentId = $experiment->id;
  $adGroupCriterionExperimentData->experimentDeltaStatus = 'EXPERIMENT_ONLY';

  // Create keyword.
  $keyword = new Keyword('mars tour', 'BROAD');

  // Create ad group criterion.
  $adGroupCriterion = new BiddableAdGroupCriterion();
  $adGroupCriterion->adGroupId = $adGroupId;
  $adGroupCriterion->criterion = $keyword;
  $adGroupCriterion->experimentData = $adGroupCriterionExperimentData;

  // Create operation.
  $adGroupCriterionOperation = new AdGroupCriterionOperation();
  $adGroupCriterionOperation->operand = $adGroupCriterion;
  $adGroupCriterionOperation->operator = 'ADD';

  $adGroupCriterionOperations = array($adGroupCriterionOperation);

  // Make the mutate request.
  $result = $adGroupCriterionService->mutate($adGroupCriterionOperations);

  // Display result.
  $adGroupCriterion = $result->value[0];
  printf("Keyword with text '%s', match type '%s', and ID '%s' was added to "
      . "the experiment.\n",
      $adGroupCriterion->criterion->text,
      $adGroupCriterion->criterion->matchType,
      $adGroupCriterion->criterion->id);
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
  AddExperimentExample($user, $campaignId, $adGroupId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
