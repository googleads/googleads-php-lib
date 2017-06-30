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
namespace Google\AdsApi\Examples\AdWords\v201705\Targeting;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201705\cm\CampaignCriterionService;
use Google\AdsApi\AdWords\v201705\cm\Predicate;
use Google\AdsApi\AdWords\v201705\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201705\cm\Paging;
use Google\AdsApi\AdWords\v201705\cm\Selector;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets all targeting criteria for a campaign. To add targeting
 * criteria, run AddCampaignTargetingCriteria.php.
 */
class GetCampaignTargetingCriteria {

  const CAMPAIGN_ID = 'INSERT_CAMPAIGN_ID_HERE';
  const PAGE_LIMIT = 500;

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $campaignId) {
    $campaignCriterionService =
        $adWordsServices->get($session, CampaignCriterionService::class);

    // Create a selector to select all campaign criteria for the specified
    // campaign.
    $selector = new Selector();
    $selector->setFields(['Id', 'CriteriaType']);
    $selector->setPredicates([
        new Predicate('CampaignId', PredicateOperator::IN, [$campaignId]),
        new Predicate('CriteriaType', PredicateOperator::IN,
            ['LANGUAGE', 'LOCATION', 'AGE_RANGE', 'CARRIER',
            'OPERATING_SYSTEM_VERSION', 'GENDER', 'PROXIMITY', 'PLATFORM'])
    ]);
    $selector->setPaging(new Paging(0, self::PAGE_LIMIT));

    $totalNumEntries = 0;
    do {
      // Retrieve campaign criteria one page at a time, continuing to request
      // pages until all campaign criteria have been retrieved.
      $page = $campaignCriterionService->get($selector);

      // Print out some information for each campaign criterion.
      if ($page->getEntries() !== null) {
        $totalNumEntries = $page->getTotalNumEntries();
        foreach ($page->getEntries() as $campaignCriterion) {
          printf(
              "Campaign targeting criterion with ID %d and type '%s' was "
                  . "found.\n",
              $campaignCriterion->getCriterion()->getId(),
              $campaignCriterion->getCriterion()->getType()
          );
        }
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

GetCampaignTargetingCriteria::main();
