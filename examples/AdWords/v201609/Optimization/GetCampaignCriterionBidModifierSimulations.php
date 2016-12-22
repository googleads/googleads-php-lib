<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
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
namespace Google\AdsApi\Examples\AdWords\v201609\Optimization;

require '../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201609\cm\DataService;
use Google\AdsApi\AdWords\v201609\cm\Predicate;
use Google\AdsApi\AdWords\v201609\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201609\cm\Paging;
use Google\AdsApi\AdWords\v201609\cm\Selector;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets all available campaign mobile bid modifier landscapes
 * for a given campaign.
 * To get campaigns, run BasicOperations/GetCampaigns.php.
 */
class GetCampaignCriterionBidModifierSimulations {

  const CAMPAIGN_ID = 'INSERT_CAMPAIGN_ID_HERE';
  const PAGE_LIMIT = 500;

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $campaignId) {
    $dataService = $adWordsServices->get($session, DataService::class);

    // Create a selector to select all campaign criterion bid modifiers for the
    // specified campaign.
    $selector = new Selector();
    $selector->setFields([
      'BidModifier',
      'CampaignId',
      'CriterionId',
      'StartDate',
      'EndDate',
      'LocalClicks',
      'LocalCost',
      'LocalImpressions',
      'TotalLocalClicks',
      'TotalLocalCost',
      'TotalLocalImpressions',
      'RequiredBudget'
    ]);
    $selector->setPredicates(
        [new Predicate('CampaignId', PredicateOperator::IN, [$campaignId])]);
    $selector->setPaging(new Paging(0, self::PAGE_LIMIT));

    $totalNumEntries = 0;
    do {
      // Retrieve campaign criterion bid modifiers one page at a time,
      // continuing to request pages until all of them have been retrieved.
      $page = $dataService->getCampaignCriterionBidLandscape($selector);

      // Print out some information for each campaign criterion bid modifier.
      if ($page->getEntries() !== null) {
        $totalNumEntries = $page->getTotalNumEntries();
        foreach ($page->getEntries() as $bidModifierLandscape) {
          printf(
              "Found campaign-level criterion bid modifier landscapes for"
                  . " criterion with ID %d, start date '%s', end date '%s', and"
                  . " landscape points:\n",
              $bidModifierLandscape->getCriterionId(),
              $bidModifierLandscape->getStartDate(),
              $bidModifierLandscape->getEndDate()
          );
        }
        foreach ($bidModifierLandscape->getLandscapePoints()
            as $landscapePoint) {
          printf(
              "  bid modifier: %.2f => clicks: %d, cost: %d, "
                  . "impressions: %d, total clicks: %d, total cost: %d, "
                  . "total impressions: %d, and required budget: %d\n",
              $landscapePoint->getBidModifier(),
              $landscapePoint->getClicks(),
              $landscapePoint->getCost()->getMicroAmount(),
              $landscapePoint->getImpressions(),
              $landscapePoint->getTotalLocalClicks(),
              $landscapePoint->getTotalLocalCost()->getMicroAmount(),
              $landscapePoint->getTotalLocalImpressions(),
              $landscapePoint->getRequiredBudget()->getMicroAmount()
          );
        }
        print "\n";
      }

      $selector->getPaging()->setStartIndex(
          $selector->getPaging()->getStartIndex() + self::PAGE_LIMIT);
    } while ($selector->getPaging()->getStartIndex() < $totalNumEntries);

    printf("Number of results found: %d\n", $totalNumEntries);
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

GetCampaignCriterionBidModifierSimulations::main();
