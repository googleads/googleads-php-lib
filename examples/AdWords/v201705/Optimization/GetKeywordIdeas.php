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
namespace Google\AdsApi\Examples\AdWords\v201705\Optimization;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201705\cm\Language;
use Google\AdsApi\AdWords\v201705\cm\NetworkSetting;
use Google\AdsApi\AdWords\v201705\cm\Paging;
use Google\AdsApi\AdWords\v201705\o\AttributeType;
use Google\AdsApi\AdWords\v201705\o\IdeaType;
use Google\AdsApi\AdWords\v201705\o\LanguageSearchParameter;
use Google\AdsApi\AdWords\v201705\o\NetworkSearchParameter;
use Google\AdsApi\AdWords\v201705\o\RelatedToQuerySearchParameter;
use Google\AdsApi\AdWords\v201705\o\RequestType;
use Google\AdsApi\AdWords\v201705\o\TargetingIdeaSelector;
use Google\AdsApi\AdWords\v201705\o\TargetingIdeaService;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Common\Util\MapEntries;

/**
 * This example gets keyword ideas related to a seed keyword.
 */
class GetKeywordIdeas {

  const PAGE_LIMIT = 500;

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session) {
    $targetingIdeaService =
        $adWordsServices->get($session, TargetingIdeaService::class);

    // Create selector.
    $selector = new TargetingIdeaSelector();
    $selector->setRequestType(RequestType::IDEAS);
    $selector->setIdeaType(IdeaType::KEYWORD);
    $selector->setRequestedAttributeTypes([
        AttributeType::KEYWORD_TEXT,
        AttributeType::SEARCH_VOLUME,
        AttributeType::CATEGORY_PRODUCTS_AND_SERVICES
    ]);

    $searchParameters = [];
    // Create seed keyword.
    $keyword = 'mars cruise';
    // Create related to query search parameter.
    $relatedToQuerySearchParameter = new RelatedToQuerySearchParameter();
    $relatedToQuerySearchParameter->setQueries([$keyword]);
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

    $selector->setSearchParameters($searchParameters);
    $selector->setPaging(new Paging(0, self::PAGE_LIMIT));

    $totalNumEntries = 0;
    do {
      // Retrieve targeting ideas one page at a time, continuing to request
      // pages until all of them have been retrieved.
      $page = $targetingIdeaService->get($selector);

      // Print out some information for each targeting idea.
      if ($page->getEntries() !== null) {
        $totalNumEntries = $page->getTotalNumEntries();
        foreach ($page->getEntries() as $targetingIdea) {
          $data = MapEntries::toAssociativeArray($targetingIdea->getData());
          $keyword = $data[AttributeType::KEYWORD_TEXT]->getValue();
          $searchVolume =
              ($data[AttributeType::SEARCH_VOLUME]->getValue() !== null)
              ? $data[AttributeType::SEARCH_VOLUME]->getValue() : 0;
          $categoryIds =
              ($data[AttributeType::CATEGORY_PRODUCTS_AND_SERVICES]->getValue()
                  === null)
              ? $categoryIds = '' : implode(', ', $data[
                  AttributeType::CATEGORY_PRODUCTS_AND_SERVICES]->getValue());
          printf(
              "Keyword idea with text '%s', category IDs (%d) and average "
                  . "monthly search volume %d was found.\n",
              $keyword,
              $categoryIds,
              $searchVolume
          );
        }
      }

      $selector->getPaging()->setStartIndex(
          $selector->getPaging()->getStartIndex() + self::PAGE_LIMIT);
    } while ($selector->getPaging()->getStartIndex() < $totalNumEntries);

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
    self::runExample(new AdWordsServices(), $session);
  }
}

GetKeywordIdeas::main();
