<?php
/**
 * This example demonstrates how to find shared sets, shared set criterions and
 * how to remove them.
 *
 * This is a BETA feature.
 *
 * Tags: CampaignSharedSetService.get,SharedCriterionService.get,
 * Tags: SharedCriterionService.mutate
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
 * @subpackage v201309
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Paul Matthews
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
$campaignId = 'INSERT_CAMPAIGN_ID_HERE';

function FindAndRemoveCriteriaFromSharedSetExample(AdWordsUser $user,
    $campaignId) {
  $sharedSetIds = FindSharedSetsForACampaignId($user, $campaignId);
  $sharedCriteriaPerSetId = FindCriteriaForSharedSets($user, $sharedSetIds);
  RemoveCriteriaFromSharedSet($user, $sharedCriteriaPerSetId);
}

function FindSharedSetsForACampaignId(AdWordsUser $user, $campaignId) {
  $campaignSharedSetService = $user->GetService("CampaignSharedSetService");

  // Create two predicates:
  // Filter by campaign ID.
  $campaignPredicate = new Predicate();
  $campaignPredicate->field = "CampaignId";
  $campaignPredicate->operator = "EQUALS";
  $campaignPredicate->values = array($campaignId);

  // Filter by shared set type.
  $typePredicate = new Predicate();
  $typePredicate->field = "SharedSetType";
  $typePredicate->operator = "IN";
  $typePredicate->values = array("NEGATIVE_KEYWORDS", "NEGATIVE_PLACEMENTS");

  $selector = new Selector();
  $selector->fields = array("SharedSetId", "CampaignId", "SharedSetName",
      "SharedSetType", "Status");
  $selector->predicates = array($campaignPredicate, $typePredicate);

  // Create paging controls.
  $selector->paging = new Paging(0, AdWordsConstants::RECOMMENDED_PAGE_SIZE);

  $sharedSetIds = array();

  do {
    // Make the get request.
    $page = $campaignSharedSetService->get($selector);

    // Display results.
    if (isset($page->entries)) {
      foreach ($page->entries as $campaignSharedSet) {
        printf("A Campaign Shared Set with the shared set ID '%s', campaign " .
            "ID '%s', name '%s', type '%s' and status '%s' was found.\n",
            $campaignSharedSet->sharedSetId, $campaignSharedSet->campaignId,
            $campaignSharedSet->sharedSetName,
            $campaignSharedSet->sharedSetType, $campaignSharedSet->status);

        // Add the shared set ID to the response array.
        $sharedSetIds[] = $campaignSharedSet->sharedSetId;
      }
    }

    // Configure the next page.
    $selector->paging->startIndex += AdWordsConstants::RECOMMENDED_PAGE_SIZE;
  } while ($page->totalNumEntries > $selector->paging->startIndex);

  if (empty($sharedSetIds)) {
    throw new RuntimeException(sprintf(
        "No shared sets for campaign ID \"%s\"", $campaignId));
  }

  return $sharedSetIds;
}

function FindCriteriaForSharedSets(AdWordsUser $user, $sharedSetIds) {
  $sharedCriterionService = $user->GetService("SharedCriterionService");

  $predicate = new Predicate();
  $predicate->field = "SharedSetId";
  $predicate->operator = "IN";
  $predicate->values = $sharedSetIds;

  $selector = new Selector();
  $selector->fields = array("SharedSetId", "Id", "KeywordText",
      "KeywordMatchType", "PlacementUrl");
  $selector->predicates = array($predicate);

  // Create paging controls.
  $selector->paging = new Paging(0, AdWordsConstants::RECOMMENDED_PAGE_SIZE);

  $sharedCriteriaPerSetId = array();
  do {
    $page = $sharedCriterionService->get($selector);

    if (isset($page->entries)) {
      foreach ($page->entries as $sharedCriterion) {
        $sharedSetId = $sharedCriterion->sharedSetId;
        printf("A SharedCriterion with the CriterionId \"%s\" was found " .
            "for SharedSetId \"%s\".\n",
            $sharedCriterion->criterion->id, $sharedSetId);

        // Add an array of shared set IDs mapping to a list of criterionIds
        if (!isset($sharedCriteriaPerSetId[$sharedSetId])) {
          $sharedCriteriaPerSetId[$sharedSetId] = array();
        }

        $sharedCriteriaPerSetId[$sharedSetId][] =
            $sharedCriterion->criterion->id;
      }
    }

    // Configure the next page.
    $selector->paging->startIndex += AdWordsConstants::RECOMMENDED_PAGE_SIZE;
  } while ($page->totalNumEntries > $selector->paging->startIndex);

  if (empty($sharedCriteriaPerSetId)) {
    throw new RuntimeException(sprintf(
        "No shared criteria for sets: \"%s\"",
        implode("\", \"", $sharedSetIds)));
  }

  return $sharedCriteriaPerSetId;
}

function RemoveCriteriaFromSharedSet(AdWordsUser $user,
    $sharedSetsToCriterions) {
  $sharedCriterionService = $user->GetService("SharedCriterionService");

  $operations = array();
  foreach ($sharedSetsToCriterions as $sharedSetId => $criterionIds) {
    foreach ($criterionIds as $criterionId) {

      $criterion = new Criterion();
      $criterion->id = $criterionId;

      $sharedCriterion = new SharedCriterion();
      $sharedCriterion->criterion = $criterion;
      $sharedCriterion->sharedSetId = $sharedSetId;

      $operation = new SharedCriterionOperation();
      $operation->operator = "REMOVE";
      $operation->operand = $sharedCriterion;
      $operations[] = $operation;
    }
  }

  $result = $sharedCriterionService->mutate($operations);

  // On nothing removed, raise an exception.
  if (empty($result->value)) {
    throw new RuntimeException("Unable to remove SharedCriterion.");
  }

  foreach ($result->value as $sharedCriterion) {
    printf("Deleted SharedCriterion with shared set ID \"%s\" and " .
        "criterion ID \"%s\"\n",
        $sharedCriterion->sharedSetId,
        $sharedCriterion->criterion->id);
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
  FindAndRemoveCriteriaFromSharedSetExample($user, $campaignId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
