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
namespace Google\AdsApi\Examples\AdWords\v201705\Optimization;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201705\cm\DataService;
use Google\AdsApi\AdWords\v201705\cm\Predicate;
use Google\AdsApi\AdWords\v201705\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201705\cm\Selector;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets all available keyword bid simulations within an ad group.
 * To get ad groups, run BasicOperation/GetAdGroups.php.
 */
class GetKeywordBidSimulations {

  const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';

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

    // Retrieve keyword bid simulations one page at a time, continuing to
    // request pages until all of them have been retrieved.
    $page = $dataService->getCriterionBidLandscape($selector);

    // Print out some information for each bid landscape.
    if ($page->getEntries() !== null) {
      foreach ($page->getEntries() as $bidLandscape) {
        printf(
            "Found criterion bid landscape for keyword with ID %d, start "
                . "date '%s', end date '%s', and landscape points:\n",
            $bidLandscape->getCriterionId(),
            $bidLandscape->getStartDate(),
            $bidLandscape->getEndDate()
        );
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
    } else {
      print "No criterion bid landscapes were found.\n";
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
        new AdWordsServices(), $session, intval(self::AD_GROUP_ID));
  }
}

GetKeywordBidSimulations::main();
