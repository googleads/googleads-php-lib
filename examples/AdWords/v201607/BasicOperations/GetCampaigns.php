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
namespace Google\AdsApi\Examples\AdWords\v201607\BasicOperations;

require '../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201607\cm\OrderBy;
use Google\AdsApi\AdWords\v201607\cm\Paging;
use Google\AdsApi\AdWords\v201607\cm\Selector;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets all campaigns. To add a campaign, run AddCampaign.php.
 */
class GetCampaigns {

  const SUGGESTED_PAGE_LIMIT = 500;

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session) {
    $campaignService =
        $adWordsServices->get($session, 'CampaignService', 'v201607', 'cm');

    // Create selector.
    $selector = new Selector();
    $selector->setFields(['Id', 'Name']);
    $selector->setOrdering([new OrderBy('Name', 'ASCENDING')]);
    $selector->setPaging(new Paging(0, self::SUGGESTED_PAGE_LIMIT));

    $totalNumEntries = 0;
    do {
      // Make the get request.
      $page = $campaignService->get($selector);

      // Display results.
      if ($page->getEntries() !== null) {
        $totalNumEntries = $page->getTotalNumEntries();
        foreach ($page->getEntries() as $campaign) {
          printf(
              "Campaign with ID %d and name '%s' was found.\n",
              $campaign->getId(),
              $campaign->getName()
          );
        }
      }

      // Advance the paging index.
      $selector->getPaging()->setStartIndex(
          $selector->getPaging()->getStartIndex() + self::SUGGESTED_PAGE_LIMIT);
    } while ($selector->getPaging()->getStartIndex() < $totalNumEntries);

    printf("Number of results found: %d\n", $totalNumEntries);
  }

  public static function main() {
    $oAuth2Credential = (new OAuth2TokenBuilder())
        ->fromFile()
        ->build();
    $session = (new AdWordsSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential)
        ->build();
    self::runExample(new AdWordsServices(), $session);
  }
}

GetCampaigns::main();
