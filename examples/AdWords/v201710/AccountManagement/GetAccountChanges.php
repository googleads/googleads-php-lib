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

namespace Google\AdsApi\Examples\AdWords\v201710\AccountManagement;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201710\ch\ChangeStatus;
use Google\AdsApi\AdWords\v201710\ch\CustomerSyncSelector;
use Google\AdsApi\AdWords\v201710\ch\CustomerSyncService;
use Google\AdsApi\AdWords\v201710\cm\CampaignService;
use Google\AdsApi\AdWords\v201710\cm\DateTimeRange;
use Google\AdsApi\AdWords\v201710\cm\Paging;
use Google\AdsApi\AdWords\v201710\cm\Selector;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets the changes in the account during the last 24 hours.
 * Note: this example must be run using the credentials of an ad-serving
 * account.
 */
class GetAccountChanges
{

    const PAGE_LIMIT = 500;

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session
    ) {
        $campaignService = $adWordsServices->get($session, CampaignService::class);
        $customerSyncService = $adWordsServices->get($session, CustomerSyncService::class);

        // Create selector.
        $selector = new Selector();
        $selector->setFields(['Id']);
        $selector->setPaging(new Paging(0, self::PAGE_LIMIT));

        // Get an array of all campaign IDs.
        $campaignIds = [];
        $totalNumEntries = 0;
        do {
            $page = $campaignService->get($selector);

            if ($page->getEntries() !== null) {
                $totalNumEntries = $page->getTotalNumEntries();
                foreach ($page->getEntries() as $campaign) {
                    $campaignIds[] = $campaign->getId();
                }
            }

            // Advance the paging index.
            $selector->getPaging()->setStartIndex(
                $selector->getPaging()->getStartIndex() + self::PAGE_LIMIT
            );
        } while ($selector->getPaging()->getStartIndex() < $totalNumEntries);

        // Set the date time range, from 24 hours ago until now.
        $dateTimeRange = new DateTimeRange();
        $dateTimeRange->setMin(date('Ymd his', strtotime('-1 day')));
        $dateTimeRange->setMax(date('Ymd his'));

        // Create selector.
        $selector = new CustomerSyncSelector();
        $selector->setDateTimeRange($dateTimeRange);
        $selector->setCampaignIds($campaignIds);

        // Retrieve the account changes from the server.
        $accountChanges = $customerSyncService->get($selector);

        // Print out some information related to the account changes.
        if ($accountChanges !== null) {
            printf(
                "Most recent change: %s\n",
                $accountChanges->getLastChangeTimestamp()
            );
            if ($accountChanges->getChangedCampaigns() !== null) {
                foreach ($accountChanges->getChangedCampaigns() as $campaignChangeData) {
                    printf(
                        "Campaign with ID %d has change status '%s'.\n",
                        $campaignChangeData->getCampaignId(),
                        $campaignChangeData->getCampaignChangeStatus()
                    );
                    if ($campaignChangeData->getCampaignChangeStatus() !== ChangeStatus::NEW_VALUE) {
                        printf(
                            "\tAdded campaign criteria: %s\n",
                            self::flatten($campaignChangeData->getAddedCampaignCriteria())
                        );
                        printf(
                            "\tRemoved campaign criteria: %s\n",
                            self::flatten($campaignChangeData->getRemovedCampaignCriteria())
                        );
                        if ($campaignChangeData->getChangedAdGroups() !== null) {
                            foreach ($campaignChangeData->getChangedAdGroups() as $adGroupChangeData) {
                                printf(
                                    "\tAd Group with ID %d has change status '%s'.\n",
                                    $adGroupChangeData->getAdGroupId(),
                                    $adGroupChangeData->getAdGroupChangeStatus()
                                );
                                if ($adGroupChangeData->getAdGroupChangeStatus() !== ChangeStatus::NEW_VALUE) {
                                    printf(
                                        "\t\tChanged ads: %s\n",
                                        self::flatten($adGroupChangeData->getChangedAds())
                                    );
                                    printf(
                                        "\t\tChanged criteria: %s\n",
                                        self::flatten($adGroupChangeData->getChangedCriteria())
                                    );
                                    printf(
                                        "\t\tRemoved criteria: %s\n",
                                        self::flatten($adGroupChangeData->getRemovedCriteria())
                                    );
                                }
                            }
                        }
                    }
                }
            }
        } else {
            print "No changes were found.\n";
        }
    }

    /**
     * Flatten an array to a comma-separated string or empty string if the array
     * is null.
     *
     * @param array|null $array the array to be flattened
     * @return string the comma-separated string or empty string
     */
    private static function flatten($array)
    {
        return ($array === null) ? '' : implode(', ', $array);
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()->withOAuth2Credential($oAuth2Credential)->build();
        self::runExample(new AdWordsServices(), $session);
    }
}

GetAccountChanges::main();
