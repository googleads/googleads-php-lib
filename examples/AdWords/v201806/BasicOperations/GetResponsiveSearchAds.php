<?php
/**
 * Copyright 2018 Google LLC
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
use Google\AdsApi\AdWords\v201806\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201806\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201806\cm\AdGroupAdStatus;
use Google\AdsApi\AdWords\v201806\cm\AdType;
use Google\AdsApi\AdWords\v201806\cm\ResponsiveSearchAd;
use Google\AdsApi\AdWords\v201806\cm\TextAsset;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets non-removed responsive search ads in an ad group.  To add
 * responsive search ads, run AddResponsiveSearchAd.php. To get ad groups, run
 * GetAdGroups.php.
 */
class GetResponsiveSearchAds
{

    const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';
    const PAGE_LIMIT = 500;

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $adGroupId
    ) {
        $adGroupAdService =
            $adWordsServices->get($session, AdGroupAdService::class);

        // Create a selector to select all ads for the specified ad group.
        $selectedFields = [
            'Id',
            'Status',
            'ResponsiveSearchAdHeadlines',
            'ResponsiveSearchAdDescriptions'
        ];
        $query = (new ServiceQueryBuilder())->select($selectedFields)
            ->where('AdGroupId')
            ->in([$adGroupId])
            ->where('AdType')
            ->in([AdType::RESPONSIVE_SEARCH_AD])
            ->where('Status')
            ->in([AdGroupAdStatus::ENABLED, AdGroupAdStatus::PAUSED])
            ->orderByAsc('Id')
            ->limit(0, self::PAGE_LIMIT)
            ->build();

        $totalNumEntries = 0;
        do {
            // Advance the paging offset in subsequent iterations only.
            if (isset($page)) {
                $query->nextPage();
            }

            // Retrieve ad group ads one page at a time, continuing to request
            // pages until all ad group ads have been retrieved.
            $page = $adGroupAdService->query(sprintf('%s', $query));

            // Print out some information for each ad group ad.
            if ($page->getEntries() !== null) {
                $totalNumEntries = $page->getTotalNumEntries();
                /** @var AdGroupAd $adGroupAd */
                foreach ($page->getEntries() as $adGroupAd) {
                    /** @var ResponsiveSearchAd $ad */
                    $ad = $adGroupAd->getAd();
                    printf(
                        "Responsive search ad with ID %d and status '%s'"
                        . " was found.%s",
                        $ad->getId(),
                        $adGroupAd->getStatus(),
                        PHP_EOL
                    );
                    print 'Headlines:' . PHP_EOL;
                    foreach ($ad->getHeadlines() as $headline) {
                        /** @var TextAsset $textAsset */
                        $textAsset = $headline->getAsset();
                        $pinnedField = $headline->getPinnedField();
                        printf('    %s%s', $textAsset->getAssetText(), PHP_EOL);
                        if (!is_null($pinnedField)) {
                            printf(
                                '      (pinned to %s)%s',
                                $pinnedField,
                                PHP_EOL
                            );
                        }
                    }
                    print 'Descriptions:' . PHP_EOL;
                    foreach ($ad->getDescriptions() as $description) {
                        /** @var TextAsset $textAsset */
                        $textAsset = $description->getAsset();
                        $pinnedField = $description->getPinnedField();
                        printf('    %s%s', $textAsset->getAssetText(), PHP_EOL);
                        if (!is_null($pinnedField)) {
                            printf(
                                '      (pinned to %s)%s',
                                $pinnedField,
                                PHP_EOL
                            );
                        }
                    }
                    print PHP_EOL;
                }
            }
        } while ($query->hasNext($page));

        printf(
            'Number of responsive search ad(s) found: %d%s',
            $totalNumEntries,
            PHP_EOL
        );
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();
        self::runExample(
            new AdWordsServices(),
            $session,
            intval(self::AD_GROUP_ID)
        );
    }
}

GetResponsiveSearchAds::main();
