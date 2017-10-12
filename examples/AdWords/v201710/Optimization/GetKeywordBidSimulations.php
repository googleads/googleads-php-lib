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
namespace Google\AdsApi\Examples\AdWords\v201710\Optimization;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201710\cm\DataService;
use Google\AdsApi\AdWords\v201710\cm\Paging;
use Google\AdsApi\AdWords\v201710\cm\Predicate;
use Google\AdsApi\AdWords\v201710\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201710\cm\Selector;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets all available keyword bid simulations within an ad group.
 * To get ad groups, run BasicOperation/GetAdGroups.php.
 */
class GetKeywordBidSimulations {

  const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';
  const PAGE_SIZE = 100;

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $adGroupId) {
    $dataService = $adWordsServices->get($session, DataService::class);

    // Create a selector to select all keyword bid simulations for the
    // specified ad group.
    $selector = new Selector();
    $selector->setFields([
        'AdGroupId',
        'CriterionId',
        'StartDate',
        'EndDate',
        'Bid',
        'LocalClicks',
        'LocalCost',
        'LocalImpressions'
    ]);
    $selector->setPredicates([
        new Predicate('AdGroupId', PredicateOperator::IN, [$adGroupId])
    ]);
    $selector->setPaging(new Paging(0, self::PAGE_SIZE));

    // Display bid landscapes.
    $landscapePointsInPreviousPage = 0;
    $startIndex = 0;
    do {
      // Offset the start index by the number of landscape points in the last
      // retrieved page, NOT the number of entries (bid landscapes) in the page.
      $startIndex += $landscapePointsInPreviousPage;
      $selector->getPaging()->setStartIndex($startIndex);

      // Reset the count of landscape points in preparation for processing the
      // next page.
      $landscapePointsInPreviousPage = 0;

      // Retrieve keyword bid simulations one page at a time, continuing to
      // request pages until all of them have been retrieved.
      $page = $dataService->getCriterionBidLandscape($selector);

      // Print out some information for each bid landscape.
      if ($page->getEntries() !== null) {
        foreach ($page->getEntries() as $bidLandscape) {
          printf(
              "Found criterion bid landscape with ad group ID %d, criterion ID"
                  . " %d, start date '%s', end date '%s', and landscape points:"
                  . "\n",
              $bidLandscape->getAdGroupId(),
              $bidLandscape->getCriterionId(),
              $bidLandscape->getStartDate(),
              $bidLandscape->getEndDate()
          );
          $landscapePointsInPreviousPage =
              count($bidLandscape->getLandscapePoints());
          foreach ($bidLandscape->getLandscapePoints() as $bidLandscapePoint) {
            printf(
                "  bid: %d => clicks: %d, cost: %d, impressions: %d\n",
                $bidLandscapePoint->getBid()->getMicroAmount(),
                $bidLandscapePoint->getClicks(),
                $bidLandscapePoint->getCost()->getMicroAmount(),
                $bidLandscapePoint->getImpressions()
            );
          }
          print "\n";
        }
      }
    } while ($landscapePointsInPreviousPage >= self::PAGE_SIZE);
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
        new AdWordsServices(), $session, intval(self::AD_GROUP_ID));
  }
}

GetKeywordBidSimulations::main();
