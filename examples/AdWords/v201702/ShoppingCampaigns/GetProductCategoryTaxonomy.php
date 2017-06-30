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
namespace Google\AdsApi\Examples\AdWords\v201702\ShoppingCampaigns;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201702\cm\ConstantDataService;
use Google\AdsApi\AdWords\v201702\cm\Predicate;
use Google\AdsApi\AdWords\v201702\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201702\cm\Selector;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example fetches the set of valid `ProductBiddingCategory`.
 */
class GetProductCategoryTaxonomy {

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session) {
    $constantDataService =
        $adWordsServices->get($session, ConstantDataService::class);

    // Create a selector to select product bidding categories in US.
    $selector = new Selector();
    $selector->setPredicates(
        [new Predicate('Country', PredicateOperator::IN, ['US'])]);

    // A mapping from ID to bidding category.
    $biddingCategories = [];
    // An array of root bidding categories (those that don't have any parents).
    $rootCategories = [];

    $productBiddingCategories =
        $constantDataService->getProductBiddingCategoryData($selector);
    foreach ($productBiddingCategories as $productBiddingCategory) {
      $id = $productBiddingCategory->getDimensionValue()->getvalue();
      $name = $productBiddingCategory->getDisplayValue()[0]->getvalue();
      $parentId = ($productBiddingCategory->getParentDimensionValue() !== null)
          ? $productBiddingCategory->getParentDimensionValue()->getvalue()
          : null;

      if (array_key_exists($id, $biddingCategories) === false) {
        $biddingCategories[$id] = [
            'children' => []
        ];
      }
      $biddingCategories[$id]['id'] = $id;
      $biddingCategories[$id]['name'] = $name;

      if ($parentId !== null) {
        if (array_key_exists($parentId, $biddingCategories) === false) {
          // 'id' and 'name' of $biddingCategories[$parentId] will get
          // populated in its iteration of this loop.
          $biddingCategories[$parentId] = [
              'children' => []
          ];
        }
        $biddingCategories[$parentId]['children'][] = $biddingCategories[$id];
      } else {
        $rootCategories[] = $biddingCategories[$id];
      }
    }

    self::displayCategories($rootCategories, '');
  }

  private static function displayCategories(array $categories, $prefix) {
    foreach ($categories as $category) {
      printf("%s%s [%s]\n", $prefix, $category['name'], $category['id']);
      if (count($category['children']) > 0) {
        self::displayCategories($category['children'],
            sprintf('%s%s > ', $prefix, $category['name']));
      }
    }
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

GetProductCategoryTaxonomy::main();
