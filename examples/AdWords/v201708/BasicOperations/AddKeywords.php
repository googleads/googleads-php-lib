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
namespace Google\AdsApi\Examples\AdWords\v201708\BasicOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201708\cm\AdGroupCriterionOperation;
use Google\AdsApi\AdWords\v201708\cm\AdGroupCriterionService;
use Google\AdsApi\AdWords\v201708\cm\BiddableAdGroupCriterion;
use Google\AdsApi\AdWords\v201708\cm\BiddingStrategyConfiguration;
use Google\AdsApi\AdWords\v201708\cm\CpcBid;
use Google\AdsApi\AdWords\v201708\cm\Keyword;
use Google\AdsApi\AdWords\v201708\cm\KeywordMatchType;
use Google\AdsApi\AdWords\v201708\cm\Money;
use Google\AdsApi\AdWords\v201708\cm\NegativeAdGroupCriterion;
use Google\AdsApi\AdWords\v201708\cm\Operator;
use Google\AdsApi\AdWords\v201708\cm\UrlList;
use Google\AdsApi\AdWords\v201708\cm\UserStatus;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds keywords to an ad group. To get ad groups run
 * GetAdGroups.php.
 */
class AddKeywords {

  const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $adGroupId) {
    $adGroupCriterionService =
        $adWordsServices->get($session, AdGroupCriterionService::class);

    $operations = [];

    // Create the first keyword criterion.
    $keyword = new Keyword();
    $keyword->setText('mars cruise');
    $keyword->setMatchType(KeywordMatchType::BROAD);

    // Create biddable ad group criterion.
    $adGroupCriterion = new BiddableAdGroupCriterion();
    $adGroupCriterion->setAdGroupId($adGroupId);
    $adGroupCriterion->setCriterion($keyword);

    // Set additional settings (optional).
    $adGroupCriterion->setUserStatus(UserStatus::PAUSED);
    $adGroupCriterion->setFinalUrls(
        new UrlList(['http://www.example.com/mars']));

    // Set bids (optional).
    $bid = new CpcBid();
    $money = new Money();
    $money->setMicroAmount(500000);
    $bid->setBid($money);
    $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
    $biddingStrategyConfiguration->setBids([$bid]);
    $adGroupCriterion->setBiddingStrategyConfiguration(
        $biddingStrategyConfiguration);

    // Create an ad group criterion operation and add it to the list.
    $operation = new AdGroupCriterionOperation();
    $operation->setOperand($adGroupCriterion);
    $operation->setOperator(Operator::ADD);
    $operations[] = $operation;

    // Create the second keyword criterion.
    $keyword = new Keyword();
    $keyword->setText('space hotel');
    $keyword->setMatchType(KeywordMatchType::EXACT);

    // Create negative ad group criterion.
    $negativeAdGroupCriterion = new NegativeAdGroupCriterion();
    $negativeAdGroupCriterion->setAdGroupId($adGroupId);
    $negativeAdGroupCriterion->setCriterion($keyword);

    // Create an ad group criterion operation and add it to the list.
    $operation = new AdGroupCriterionOperation();
    $operation->setOperand($negativeAdGroupCriterion);
    $operation->setOperator(Operator::ADD);
    $operations[] = $operation;

    // Create the ad group criteria on the server and print out some information
    // for each created ad group criterion.
    $result = $adGroupCriterionService->mutate($operations);
    foreach ($result->getValue() as $adGroupCriterion) {
      printf(
          "Keyword with text '%s', match type '%s', and ID %d was added.\n",
          $adGroupCriterion->getCriterion()->getText(),
          $adGroupCriterion->getCriterion()->getMatchType(),
          $adGroupCriterion->getCriterion()->getId()
      );
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
    self::runExample(
        new AdWordsServices(), $session, intval(self::AD_GROUP_ID));
  }
}

AddKeywords::main();
