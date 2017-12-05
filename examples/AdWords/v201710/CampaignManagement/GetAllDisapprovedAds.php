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
namespace Google\AdsApi\Examples\AdWords\v201710\CampaignManagement;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201710\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201710\cm\OrderBy;
use Google\AdsApi\AdWords\v201710\cm\Paging;
use Google\AdsApi\AdWords\v201710\cm\Predicate;
use Google\AdsApi\AdWords\v201710\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201710\cm\PolicyApprovalStatus;
use Google\AdsApi\AdWords\v201710\cm\Selector;
use Google\AdsApi\AdWords\v201710\cm\SortOrder;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets all disapproved ads in an ad group. To get ad groups, run
 * BasicOperation/GetAdGroups.php.
 */
class GetAllDisapprovedAds {

  const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';
  const PAGE_LIMIT = 500;

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $adGroupId) {
    $adGroupAdService =
        $adWordsServices->get($session, AdGroupAdService::class);

    // Create a selector to select all ads for the specified ad group.
    $selector = new Selector();
    $selector->setFields(['Id', 'PolicySummary']);
    $selector->setOrdering([new OrderBy('Id', SortOrder::ASCENDING)]);
    // Create the predicate to get only disapproved ads.
    $selector->setPredicates([
        new Predicate('AdGroupId', PredicateOperator::IN, [$adGroupId]),
        new Predicate('CombinedApprovalStatus', PredicateOperator::EQUALS,
            [PolicyApprovalStatus::DISAPPROVED])
    ]);
    $selector->setPaging(new Paging(0, self::PAGE_LIMIT));

    $totalNumEntries = 0;
    $disapprovedAdsCount = 0;
    do {
      // Retrieve ad group ads one page at a time, continuing to request pages
      // until all ad group ads have been retrieved.
      $page = $adGroupAdService->get($selector);

      // Print out some information for each ad group ad.
      if ($page->getEntries() !== null) {
        $totalNumEntries = $page->getTotalNumEntries();
        foreach ($page->getEntries() as $adGroupAd) {
          $disapprovedAdsCount++;
          $policySummary = $adGroupAd->getPolicySummary();
          printf(
              "Ad with ID %d and type '%s' was disapproved with the following"
                  . " policy topic entries:\n",
              $adGroupAd->getAd()->getId(),
              $adGroupAd->getAd()->getType()
          );
          // Display the policy topic entries related to the ad disapproval.
          foreach ($policySummary->getPolicyTopicEntries()
              as $policyTopicEntry) {
            printf(
                "  topic id: %s, topic name: '%s', Help Center URL: %s\n",
                $policyTopicEntry->getPolicyTopicId(),
                $policyTopicEntry->getPolicyTopicName(),
                $policyTopicEntry->getPolicyTopicHelpCenterUrl()
            );
            // Display the attributes and values that triggered the policy
            // topic.
            if ($policyTopicEntry->getPolicyTopicEvidences() === null) {
              continue;
            }
            foreach ($policyTopicEntry->getPolicyTopicEvidences()
                as $evidence) {
              printf("    evidence type: %s\n",
                  $evidence->getPolicyTopicEvidenceType());
              $evidenceTextList = $evidence->getEvidenceTextList();
              if ($evidenceTextList === null) {
                continue;
              }
              for ($i = 0; $i < count($evidenceTextList); $i++) {
                printf("      evidence text[%d]: %s\n",
                    $i, $evidenceTextList[$i]);
              }
            }
          }
        }
      }

      $selector->getPaging()->setStartIndex(
          $selector->getPaging()->getStartIndex() + self::PAGE_LIMIT);
    } while ($selector->getPaging()->getStartIndex() < $totalNumEntries);
    printf("%d disapproved ads were found.\n", $disapprovedAdsCount);
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

GetAllDisapprovedAds::main();
