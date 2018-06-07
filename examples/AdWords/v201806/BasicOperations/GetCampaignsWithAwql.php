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

namespace Google\AdsApi\Examples\AdWords\v201806\BasicOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\Query\v201806\ServiceQueryBuilder;
use Google\AdsApi\AdWords\v201806\cm\CampaignService;
use Google\AdsApi\AdWords\v201806\cm\Page;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets all campaigns in the account with AWQL. To add a campaign,
 * run AddCampaign.php.
 */
class GetCampaignsWithAwql
{

    const PAGE_LIMIT = 500;

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session
    ) {
        $campaignService = $adWordsServices->get(
            $session,
            CampaignService::class
        );

        // Create AWQL query.
        $query = (new ServiceQueryBuilder())
            ->select(['Id', 'Name', 'Status'])
            ->orderByAsc('Name')
            ->limit(0, self::PAGE_LIMIT)
            ->build();

        do {
            // Advance the paging offset in subsequent iterations only.
            if (isset($page)) {
                $query->nextPage();
            }

            // Make a request using an AWQL string. This request will return the
            // first page containing up to `self::PAGE_LIMIT` results
            $page = $campaignService->query(sprintf('%s', $query));

            // Display results from second and subsequent pages.
            if ($page->getEntries() !== null) {
                foreach ($page->getEntries() as $campaign) {
                    printf(
                        "Campaign with ID %d and name '%s' was found.\n",
                        $campaign->getId(),
                        $campaign->getName()
                    );
                }
            }
        } while ($query->hasNext($page));

        printf(
            "Number of results found: %d\n",
            $page->getTotalNumEntries()
        );
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

GetCampaignsWithAwql::main();
