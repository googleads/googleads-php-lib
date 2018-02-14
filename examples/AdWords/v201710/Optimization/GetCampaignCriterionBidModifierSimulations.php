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
 * This example gets all available campaign mobile bid modifier landscapes
 * for a given campaign.
 * To get campaigns, run BasicOperations/GetCampaigns.php.
 */
class GetCampaignCriterionBidModifierSimulations
{

    const CAMPAIGN_ID = 'INSERT_CAMPAIGN_ID_HERE';
    const PAGE_SIZE = 100;

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $campaignId
    ) {
        $dataService = $adWordsServices->get($session, DataService::class);

        // Create a selector to select all campaign criterion bid modifiers for the
        // specified campaign.
        $selector = new Selector();
        $selector->setFields(
            [
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
            ]
        );
        $selector->setPredicates(
            [new Predicate('CampaignId', PredicateOperator::IN, [$campaignId])]
        );
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

            // Retrieve campaign criterion bid modifiers one page at a time,
            // continuing to request pages until all of them have been retrieved.
            $page = $dataService->getCampaignCriterionBidLandscape($selector);

            // Print out some information for each campaign criterion bid modifier.
            if ($page->getEntries() !== null) {
                foreach ($page->getEntries() as $bidModifierLandscape) {
                    printf(
                        "Found campaign-level criterion bid modifier landscapes for"
                        . " criterion with ID %d, start date '%s', end date '%s', and landscape points:\n",
                        $bidModifierLandscape->getCriterionId(),
                        $bidModifierLandscape->getStartDate(),
                        $bidModifierLandscape->getEndDate()
                    );
                    $landscapePointsInPreviousPage = count($bidModifierLandscape->getLandscapePoints());
                    foreach ($bidModifierLandscape->getLandscapePoints() as $landscapePoint) {
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
            }
        } while ($landscapePointsInPreviousPage >= self::PAGE_SIZE);
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()->withOAuth2Credential($oAuth2Credential)->build();
        self::runExample(
            new AdWordsServices(),
            $session,
            intval(self::CAMPAIGN_ID)
        );
    }
}

GetCampaignCriterionBidModifierSimulations::main();
