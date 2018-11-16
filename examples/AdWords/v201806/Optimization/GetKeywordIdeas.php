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

namespace Google\AdsApi\Examples\AdWords\v201806\Optimization;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201806\cm\Language;
use Google\AdsApi\AdWords\v201806\cm\NetworkSetting;
use Google\AdsApi\AdWords\v201806\cm\Paging;
use Google\AdsApi\AdWords\v201806\o\AttributeType;
use Google\AdsApi\AdWords\v201806\o\IdeaType;
use Google\AdsApi\AdWords\v201806\o\LanguageSearchParameter;
use Google\AdsApi\AdWords\v201806\o\NetworkSearchParameter;
use Google\AdsApi\AdWords\v201806\o\RelatedToQuerySearchParameter;
use Google\AdsApi\AdWords\v201806\o\RequestType;
use Google\AdsApi\AdWords\v201806\o\SeedAdGroupIdSearchParameter;
use Google\AdsApi\AdWords\v201806\o\TargetingIdeaSelector;
use Google\AdsApi\AdWords\v201806\o\TargetingIdeaService;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Common\Util\MapEntries;

/**
 * This example gets keyword ideas related to a seed keyword.
 */
class GetKeywordIdeas
{

    // If you do not want to use an existing ad group to seed your request, you
    // can set this to null.
    const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';
    const PAGE_LIMIT = 500;

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $adGroupId
    ) {
        $targetingIdeaService = $adWordsServices->get($session, TargetingIdeaService::class);

        // Create selector.
        $selector = new TargetingIdeaSelector();
        $selector->setRequestType(RequestType::IDEAS);
        $selector->setIdeaType(IdeaType::KEYWORD);
        $selector->setRequestedAttributeTypes(
            [
                AttributeType::KEYWORD_TEXT,
                AttributeType::SEARCH_VOLUME,
                AttributeType::AVERAGE_CPC,
                AttributeType::COMPETITION,
                AttributeType::CATEGORY_PRODUCTS_AND_SERVICES
            ]
        );

        $paging = new Paging();
        $paging->setStartIndex(0);
        $paging->setNumberResults(10);
        $selector->setPaging($paging);

        $searchParameters = [];
        // Create related to query search parameter.
        $relatedToQuerySearchParameter = new RelatedToQuerySearchParameter();
        $relatedToQuerySearchParameter->setQueries(
            [
                'bakery',
                'pastries',
                'birthday cake'
            ]
        );
        $searchParameters[] = $relatedToQuerySearchParameter;

        // Create language search parameter (optional).
        // The ID can be found in the documentation:
        // https://developers.google.com/adwords/api/docs/appendix/languagecodes
        $languageParameter = new LanguageSearchParameter();
        $english = new Language();
        $english->setId(1000);
        $languageParameter->setLanguages([$english]);
        $searchParameters[] = $languageParameter;

        // Create network search parameter (optional).
        $networkSetting = new NetworkSetting();
        $networkSetting->setTargetGoogleSearch(true);
        $networkSetting->setTargetSearchNetwork(false);
        $networkSetting->setTargetContentNetwork(false);
        $networkSetting->setTargetPartnerSearchNetwork(false);

        $networkSearchParameter = new NetworkSearchParameter();
        $networkSearchParameter->setNetworkSetting($networkSetting);
        $searchParameters[] = $networkSearchParameter;

        // Optional: Use an existing ad group to generate ideas.
        if (!empty($adGroupId)) {
            $seedAdGroupIdSearchParameter = new SeedAdGroupIdSearchParameter();
            $seedAdGroupIdSearchParameter->setAdGroupId($adGroupId);
            $searchParameters[] = $seedAdGroupIdSearchParameter;
        }
        $selector->setSearchParameters($searchParameters);
        $selector->setPaging(new Paging(0, self::PAGE_LIMIT));

        // Get keyword ideas.
        $page = $targetingIdeaService->get($selector);

        // Print out some information for each targeting idea.
        $entries = $page->getEntries();
        if ($entries !== null) {
            foreach ($entries as $targetingIdea) {
                $data = MapEntries::toAssociativeArray($targetingIdea->getData());
                $keyword = $data[AttributeType::KEYWORD_TEXT]->getValue();
                $searchVolume = ($data[AttributeType::SEARCH_VOLUME]->getValue() !== null)
                    ? $data[AttributeType::SEARCH_VOLUME]->getValue() : 0;
                $averageCpc = $data[AttributeType::AVERAGE_CPC]->getValue();
                $competition = $data[AttributeType::COMPETITION]->getValue();
                $categoryIds = ($data[AttributeType::CATEGORY_PRODUCTS_AND_SERVICES]->getValue() === null)
                    ? $categoryIds = ''
                    : implode(
                        ', ',
                        $data[AttributeType::CATEGORY_PRODUCTS_AND_SERVICES]->getValue()
                    );
                printf(
                    "Keyword with text '%s', average monthly search volume %d, "
                    . "average CPC %d, and competition %.2f was found with categories: %s\n",
                    $keyword,
                    $searchVolume,
                    ($averageCpc === null) ? 0 : $averageCpc->getMicroAmount(),
                    $competition,
                    $categoryIds
                );
            }
        }

        if (empty($entries)) {
            print "No related keywords were found.\n";
        }
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()->withOAuth2Credential($oAuth2Credential)->build();
        self::runExample(new AdWordsServices(), $session, self::AD_GROUP_ID);
    }
}

GetKeywordIdeas::main();
