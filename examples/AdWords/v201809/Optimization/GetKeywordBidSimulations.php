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

namespace Google\AdsApi\Examples\AdWords\v201809\Optimization;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilder;
use Google\AdsApi\AdWords\v201809\cm\DataService;
use Google\AdsApi\AdWords\v201809\cm\Paging;
use Google\AdsApi\AdWords\v201809\cm\Predicate;
use Google\AdsApi\AdWords\v201809\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201809\cm\Selector;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets all available keyword bid simulations within an ad group.
 * To get ad groups, run BasicOperation/GetAdGroups.php.
 */
class GetKeywordBidSimulations
{

    const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';
    const PAGE_SIZE = 100;

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $adGroupId
    ) {
        $dataService = $adWordsServices->get($session, DataService::class);

        // Create a query to select all keyword bid simulations for the
        // specified ad group.
        $query = (new ServiceQueryBuilder())
            ->select([
                'AdGroupId',
                'CriterionId',
                'StartDate',
                'EndDate',
                'Bid',
                'BiddableConversions',
                'BiddableConversionsValue',
                'LocalClicks',
                'LocalCost',
                'LocalImpressions'
            ])
            ->where('AdGroupId')->in([$adGroupId])
            ->limit(0, self::PAGE_SIZE)
            ->build();

        // Display bid landscapes.
        do {
            if (isset($fetchedPage)) {
                // Advance the paging offset in subsequent iterations only.
                $query->nextPage();
            }

            // Retrieve keyword bid simulations one page at a time, continuing
            // to request pages until all of them have been retrieved.
            $fetchedPage = $dataService->queryCriterionBidLandscape(
                sprintf('%s', $query)
            );

            // Print out some information for each bid landscape.
            if ($fetchedPage->getEntries() !== null) {
                foreach ($fetchedPage->getEntries() as $bidLandscape) {
                    printf(
                        "Found a criterion bid landscape with ad group ID %d," .
                        " criterion ID %d, start date '%s', end date '%s'," .
                        " and landscape points:%s",
                        $bidLandscape->getAdGroupId(),
                        $bidLandscape->getCriterionId(),
                        $bidLandscape->getStartDate(),
                        $bidLandscape->getEndDate(),
                        PHP_EOL
                    );
                    foreach ($bidLandscape->getLandscapePoints() as
                             $bidLandscapePoint) {
                        printf(
                            "  bid: %d => clicks: %d, cost: %d, impressions: %d"
                            . ", biddable conversions: %.2f, biddable "
                            . "conversions value: %.2f%s",
                            $bidLandscapePoint->getBid()->getMicroAmount(),
                            $bidLandscapePoint->getClicks(),
                            $bidLandscapePoint->getCost()->getMicroAmount(),
                            $bidLandscapePoint->getImpressions(),
                            $bidLandscapePoint->getBiddableConversions(),
                            $bidLandscapePoint->getBiddableConversionsValue(),
                            PHP_EOL
                        );
                    }
                    print PHP_EOL;
                }
            }
        } while ($query->hasNext($fetchedPage));
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())
            ->fromFile()->withOAuth2Credential($oAuth2Credential)->build();
        self::runExample(
            new AdWordsServices(),
            $session,
            intval(self::AD_GROUP_ID)
        );
    }
}

GetKeywordBidSimulations::main();
