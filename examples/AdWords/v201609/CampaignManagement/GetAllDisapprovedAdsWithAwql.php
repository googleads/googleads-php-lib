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
namespace Google\AdsApi\Examples\AdWords\v201609\CampaignManagement;

require '../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201609\cm\AdGroupAdService;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets all disapproved ads in an ad group with AWQL. To get ad
 * groups, run BasicOperation/GetAdGroups.php.
 */
class GetAllDisapprovedAdsWithAwql {

  const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';
  const PAGE_LIMIT = 500;

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $adGroupId) {
    $adGroupAdService =
        $adWordsServices->get($session, AdGroupAdService::class);

    // Create an AWQL query.
    $query = sprintf(
        'SELECT Id, AdGroupAdDisapprovalReasons WHERE AdGroupId = '
            . '%d AND AdGroupCreativeApprovalStatus = DISAPPROVED ORDER BY Id',
        $adGroupId
    );

    // Create paging controls.
    $totalNumEntries = 0;
    $offset = 0;
    do {
      $pageQuery = sprintf('%s LIMIT %d,%d', $query, $offset, self::PAGE_LIMIT);

      // Make the query request.
      $page = $adGroupAdService->query($pageQuery);

      // Display results from the query.
      if ($page->getEntries() !== null) {
        $totalNumEntries = $page->getTotalNumEntries();
        foreach ($page->getEntries() as $adGroupAd) {
          printf(
              "Ad with ID %d and type '%s' was disapproved for the following"
                  . " reasons:\n",
              $adGroupAd->getAd()->getId(),
              $adGroupAd->getAd()->getType()
          );
          if ($adGroupAd->getDisapprovalReasons() !== null) {
            foreach ($adGroupAd->getDisapprovalReasons() as $reason) {
              printf("\t'%s'\n", $reason);
            }
          }
        }
      }

      // Advance the paging offset.
      $offset += self::PAGE_LIMIT;
    } while ($offset < $totalNumEntries);

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
        new AdWordsServices(), $session, intval(self::AD_GROUP_ID));
  }
}

GetAllDisapprovedAdsWithAwql::main();
