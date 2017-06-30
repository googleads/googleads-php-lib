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
namespace Google\AdsApi\Examples\AdWords\v201702\AdvancedOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201702\cm\AdGroupBidModifierService;
use Google\AdsApi\AdWords\v201702\cm\OrderBy;
use Google\AdsApi\AdWords\v201702\cm\Paging;
use Google\AdsApi\AdWords\v201702\cm\Selector;
use Google\AdsApi\AdWords\v201702\cm\SortOrder;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example illustrates how to retrieve ad group level bid modifiers for
 * all campaigns.
 */
class GetAdGroupBidModifiers {

  const PAGE_LIMIT = 500;

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session) {
    $adGroupBidModifierService =
        $adWordsServices->get($session, AdGroupBidModifierService::class);

    // Create a selector to select all ad group bid modifiers.
    $selector = new Selector();
    $selector->setFields(
        ['Id', 'AdGroupId', 'CampaignId', 'BidModifier']);
    $selector->setOrdering([new OrderBy('CampaignId', SortOrder::ASCENDING)]);
    $selector->setPaging(new Paging(0, self::PAGE_LIMIT));

    $totalNumEntries = 0;
    do {
      // Retrieve ad group bid modifiers one page at a time, continuing to
      // request pages until all ad group bid modifiers have been retrieved.
      $page = $adGroupBidModifierService->get($selector);

      // Print out some information for each ad group bid modifier.
      if ($page->getEntries() !== null) {
        $totalNumEntries = $page->getTotalNumEntries();
        foreach ($page->getEntries() as $adGroupBidModifier) {
          printf(
              "Campaign ID %d, ad group ID %d, criterion ID %d has ad group "
                  . "level modifier: %s\n",
              $adGroupBidModifier->getCampaignId(),
              $adGroupBidModifier->getAdGroupId(),
              $adGroupBidModifier->getCriterion()->getId(),
              ($adGroupBidModifier->getBidModifier() === null)
                  ? 'none' : $adGroupBidModifier->getBidModifier()
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
    self::runExample(new AdWordsServices(), $session);
  }
}

GetAdGroupBidModifiers::main();
