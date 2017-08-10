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
namespace Google\AdsApi\Examples\AdWords\v201708\AdvancedOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201708\cm\Campaign;
use Google\AdsApi\AdWords\v201708\cm\CampaignOperation;
use Google\AdsApi\AdWords\v201708\cm\CampaignService;
use Google\AdsApi\AdWords\v201708\cm\OrderBy;
use Google\AdsApi\AdWords\v201708\cm\Paging;
use Google\AdsApi\AdWords\v201708\cm\Selector;
use Google\AdsApi\AdWords\v201708\cm\SortOrder;
use Google\AdsApi\AdWords\v201708\cm\String_StringMapEntry;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Common\Util\MapEntries;

/**
 * This code snippet is meant to be used in the Forward Compatibility Maps guide
 * to demonstrate how to fetch and update FCM entries.
 *
 * <p>https://developers.google.com/adwords/api/docs/guides/forward-compatibility-maps
 */
class GetAndSetForwardCompatibilityMap {

  const PAGE_LIMIT = 100;

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session) {
    $compatibilityMapKey = 'Campaign.intergalacticAdsEnabled';
    $campaignMap =
        self::getCampaigns($adWordsServices, $session, $compatibilityMapKey);
    foreach ($campaignMap as $campaignId => $value) {
      if ($value === true) {
        self::updateForwardCompatibilityMap(
            $adWordsServices,
            $session,
            $campaignId,
            $compatibilityMapKey
        );
      }
    }
  }

  /**
   * Retrieves a map of campaign ID to forward compatibility map value for the
   * specified forward compatibility map key.
   */
  private static function getCampaigns(AdWordsServices $adWordsServices,
      AdWordsSession $session, $compatibilityMapKey) {
    // Get the CampaignService.
    $campaignService = $adWordsServices->get($session, CampaignService::class);

    // Create selector.
    // Notice there is no need to explicitly request the
    // forwardCompatibilityMap, indeed adding to the list of fields
    // will throw an error.
    $selector = new Selector();
    $selector->setFields(['Id']);
    $selector->setPaging(new Paging(0, self::PAGE_LIMIT));

    $campaignMap = [];
    $foundResults = false;
    do {
      // Retrieve campaigns one page at a time, continuing to request pages
      // until all campaigns have been retrieved.
      $page = $campaignService->get($selector);

      // Print out some information for each campaign.
      if ($page->getEntries() !== null) {
        $totalNumEntries = $page->getTotalNumEntries();
        foreach ($page->getEntries() as $campaign) {
          if (is_null($campaign->getForwardCompatibilityMap())) {
            continue;
          }
          $forwardCompatibilityMap = MapEntries::toAssociativeArray(
              $campaign->getForwardCompatibilityMap());
          // This demonstrates how to handle a forward compatibility map key
          // where the value is a boolean. Check the forward compatibility map
          // documentation for the data type for each supported key:
          // https://developers.google.com/adwords/api/docs/guides/forward-compatibility-maps
          $value = boolval($forwardCompatibilityMap[$compatibilityMapKey]);
          $foundResults = true;
          printf(
              "Campaign ID %d has forward compatibility map value of '%s' for "
                  . "key '%s'.\n",
              $campaign->getId(),
              $value,
              $compatibilityMapKey
          );
          // Cast the ID to string to prevent 32-bit PHP to convert this to
          // negative number.
          $campaignId = strval($campaign->getId());
          $campaignMap[$campaignId] = $value;
        }
      }
      $selector->getPaging()->setStartIndex(
          $selector->getPaging()->getStartIndex() + self::PAGE_LIMIT);
    } while ($selector->getPaging()->getStartIndex() < $totalNumEntries);
    if (!$foundResults) {
      print "No forward compatibility maps are found.\n";
    }

    return $campaignMap;
  }

  private static function updateForwardCompatibilityMap(
      AdWordsServices $adWordsServices,
      AdWordsSession $session,
      $campaignId,
      $compatibilityMapKey
  ) {
    // This is an example on how to update a campaign using the
    // CampaignService and the forwardCompatibilityMap field.

    // Get the CampaignService.
    $campaignService = $adWordsServices->get($session, CampaignService::class);

    // Create campaign with updated status.
    $campaign = new Campaign();
    $campaign->setId($campaignId);
    // Set the forward compatibility map entry to "true" to update the campaign.
    // This demonstrates how to handle a forward compatibility map key
    // where the value is a boolean. Check the forward compatibility map
    // documentation for the data type for each supported key:
    // https://developers.google.com/adwords/api/docs/guides/forward-compatibility-maps
    $campaign->setForwardCompatibilityMap([
        new String_StringMapEntry($compatibilityMapKey, 'true')
    ]);

    // Create operations.
    $operation = new CampaignOperation();
    $operation->setOperand($campaign);
    $operation->setOperator(Operator::SET);

    // Update campaign on the server.
    $result = $campaignService->mutate([$operation]);
    printf("Updated forward compatibility map of campaign ID %d.\n",
        $result->getValue()[0]->getId());
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

GetAndSetForwardCompatibilityMap::main();
