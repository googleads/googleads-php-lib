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

namespace Google\AdsApi\Examples\AdWords\v201809\CampaignManagement;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201809\cm\CampaignService;
use Google\AdsApi\AdWords\v201809\cm\OrderBy;
use Google\AdsApi\AdWords\v201809\cm\Paging;
use Google\AdsApi\AdWords\v201809\cm\Predicate;
use Google\AdsApi\AdWords\v201809\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201809\cm\Selector;
use Google\AdsApi\AdWords\v201809\cm\SortOrder;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets all campaigns with a specific label. To add a label to
 * campaigns, run AddCampaignLabels.php.
 */
class GetCampaignsByLabel
{

    const LABEL_ID = 'INSERT_LABEL_ID_HERE';
    const PAGE_LIMIT = 500;

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $labelId
    ) {
        $campaignService = $adWordsServices->get($session, CampaignService::class);

        // Create a selector to select all campaigns by the specified label.
        $selector = new Selector();
        $selector->setFields(['Id', 'Name', 'Labels']);
        // Labels filtering is performed by ID. You can use CONTAINS_ANY to select
        // campaigns with any of the label IDs, CONTAINS_ALL to select campaigns
        // with all of the label IDs, or CONTAINS_NONE to select campaigns with none
        // of the label IDs.
        $selector->setPredicates(
            [
                new Predicate('Labels', PredicateOperator::CONTAINS_ANY, [$labelId])
            ]
        );
        $selector->setOrdering([new OrderBy('Name', SortOrder::ASCENDING)]);
        $selector->setPaging(new Paging(0, self::PAGE_LIMIT));

        $totalNumEntries = 0;
        do {
            // Retrieve campaigns one page at a time, continuing to request
            // pages until all campaigns have been retrieved.
            $page = $campaignService->get($selector);

            // Print out some information for each campaign.
            if ($page->getEntries() !== null) {
                $totalNumEntries = $page->getTotalNumEntries();
                foreach ($page->getEntries() as $campaign) {
                    printf(
                        "Campaign with name '%s' and ID %d and labels '%s' was found.\n",
                        $campaign->getName(),
                        $campaign->getId(),
                        implode(
                            ', ',
                            array_map(
                                function ($label) {
                                    return sprintf('%d/%s', $label->getId(), $label->getName());
                                },
                                $campaign->getLabels()
                            )
                        )
                    );
                }
            }

            $selector->getPaging()->setStartIndex(
                $selector->getPaging()->getStartIndex() + self::PAGE_LIMIT
            );
        } while ($selector->getPaging()->getStartIndex() < $totalNumEntries);

        printf("Number of results found: %d\n", $totalNumEntries);
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
            intval(self::LABEL_ID)
        );
    }
}

GetCampaignsByLabel::main();
