<?php
/**
 * Copyright 2017 Google Inc. All Rights Reserved.
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
 */
namespace Google\AdsApi\Examples\AdWords\v201710\AdvancedOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201710\cm\CampaignSharedSetService;
use Google\AdsApi\AdWords\v201710\cm\Criterion;
use Google\AdsApi\AdWords\v201710\cm\CriterionType;
use Google\AdsApi\AdWords\v201710\cm\Operator;
use Google\AdsApi\AdWords\v201710\cm\Predicate;
use Google\AdsApi\AdWords\v201710\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201710\cm\Paging;
use Google\AdsApi\AdWords\v201710\cm\Selector;
use Google\AdsApi\AdWords\v201710\cm\SharedCriterion;
use Google\AdsApi\AdWords\v201710\cm\SharedCriterionOperation;
use Google\AdsApi\AdWords\v201710\cm\SharedCriterionService;
use Google\AdsApi\AdWords\v201710\cm\SharedSetType;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example demonstrates how to find and remove shared sets and shared set
 * criteria.
 */
class FindAndRemoveCriteriaFromSharedSet {

  const CAMPAIGN_ID = 'INSERT_CAMPAIGN_ID_HERE';
  const PAGE_LIMIT = 100;

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $campaignId) {
    $campaignSharedSetService =
        $adWordsServices->get($session, CampaignSharedSetService::class);

    // Create selector.
    $selector = new Selector();
    $selector->setFields([
        'SharedSetId', 'CampaignId', 'SharedSetName', 'SharedSetType']);
    $selector->setPredicates([
        new Predicate('CampaignId', PredicateOperator::EQUALS, [$campaignId]),
        new Predicate('SharedSetType', PredicateOperator::IN, [
            SharedSetType::NEGATIVE_KEYWORDS, SharedSetType::NEGATIVE_PLACEMENTS
        ])
    ]);
    $selector->setPaging(new Paging(0, self::PAGE_LIMIT));

    $sharedSetIds = [];
    $totalNumEntries = 0;
    do {
      // Make the get request.
      $page = $campaignSharedSetService->get($selector);

      // Display results.
      if ($page->getEntries() !== null) {
        $totalNumEntries = $page->getTotalNumEntries();
        foreach ($page->getEntries() as $campaignSharedSet) {
          $sharedSetIds[] = strval($campaignSharedSet->getSharedSetId());
          printf(
              "Campaign shared set ID %d and name '%s' found for"
                  . " campaign ID %d.\n",
              $campaignSharedSet->getSharedSetId(),
              $campaignSharedSet->getSharedSetName(),
              $campaignSharedSet->getCampaignId()
          );
        }
      }

      // Advance the paging index.
      $selector->getPaging()->setStartIndex(
          $selector->getPaging()->getStartIndex() + self::PAGE_LIMIT);
    } while ($selector->getPaging()->getStartIndex() < $totalNumEntries);

    if (empty($sharedSetIds)) {
      printf("No shared sets found for campaign ID %d.\n", $campaignId);
      return;
    }

    // Next, retrieve criterion IDs for all found shared sets.
    $sharedCriterionService = $adWordsServices->get($session,
        SharedCriterionService::class);

    // Create selector.
    $selector = new Selector();
    $selector->setFields([
        'SharedSetId', 'Id', 'KeywordText', 'KeywordMatchType', 'PlacementUrl'
    ]);
    $selector->setPredicates([
        new Predicate('SharedSetId', PredicateOperator::IN, $sharedSetIds)]);
    $selector->setPaging(new Paging(0, self::PAGE_LIMIT));

    $removeCriterionOperations = [];
    $totalNumEntries = 0;
    do {
      // Make the get request.
      $page = $sharedCriterionService->get($selector);

      // Display results.
      if ($page->getEntries() !== null) {
        $totalNumEntries = $page->getTotalNumEntries();
        foreach ($page->getEntries() as $sharedCriterion) {
          if (CriterionType::KEYWORD
              === $sharedCriterion->getCriterion()->getType()) {
            $keyword = $sharedCriterion->getCriterion();
            printf(
                "Shared negative keyword with ID %d and text '%s' was found.\n",
                $keyword->getId(),
                $keyword->getText()
            );
          } else if (CriterionType::PLACEMENT
              === $sharedCriterion->getCriterion()->getType()) {
            $placement = $sharedCriterion->getCriterion();
            printf(
                "Shared negative placement with ID %d and URL '%s' was"
                    . " found.\n",
                $placement->getId(),
                $placement->getUrl()
            );
          } else {
            printf("Shared criterion with ID %d was found.\n",
                $sharedCriterion->getCriterion()->getId());
          }

          $criterionToRemove = new Criterion();
          $criterionToRemove->setId(
              $sharedCriterion->getCriterion()->getId());

          $sharedCriterionToRemove = new SharedCriterion();
          $sharedCriterionToRemove->setCriterion($criterionToRemove);
          $sharedCriterionToRemove->setSharedSetId(
              $sharedCriterion->getSharedSetId());

          // Create an operation to remove this criterion.
          $removeCriterionOperation = new SharedCriterionOperation();
          $removeCriterionOperation->setOperator(Operator::REMOVE);
          $removeCriterionOperation->setOperand($sharedCriterionToRemove);

          $removeCriterionOperations[] = $removeCriterionOperation;
        }
      }

      // Advance the paging index.
      $selector->getPaging()->setStartIndex(
          $selector->getPaging()->getStartIndex() + self::PAGE_LIMIT);
    } while ($selector->getPaging()->getStartIndex() < $totalNumEntries);

    // Finally, remove the criteria.
    if (empty($removeCriterionOperations)) {
      printf("No shared criteria to remove.\n");
    } else {
      $result = $sharedCriterionService->mutate($removeCriterionOperations);
      foreach ($result->getValue() as $removedCriterion) {
        printf(
            "Shared criterion ID %d was successfully removed from shared set"
                . " ID %d.\n",
            $removedCriterion->getCriterion()->getId(),
            $removedCriterion->getSharedSetId()
        );
      }
    }
  }

  public static function main() {
    // Generate a refreshable OAuth2 credential for authentication.
    $oAuth2Credential = (new OAuth2TokenBuilder())
        ->fromFile()
        ->build();

    // Construct an API session configured from a properties file and the OAuth2
    // credentials above.
    $session = (new AdWordsSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential)
        ->build();
    self::runExample(
        new AdWordsServices(), $session, intval(self::CAMPAIGN_ID));
  }
}

FindAndRemoveCriteriaFromSharedSet::main();
