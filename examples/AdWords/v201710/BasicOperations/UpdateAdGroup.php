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
namespace Google\AdsApi\Examples\AdWords\v201710\BasicOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201710\cm\AdGroup;
use Google\AdsApi\AdWords\v201710\cm\AdGroupOperation;
use Google\AdsApi\AdWords\v201710\cm\AdGroupService;
use Google\AdsApi\AdWords\v201710\cm\BiddingStrategyConfiguration;
use Google\AdsApi\AdWords\v201710\cm\CpcBid;
use Google\AdsApi\AdWords\v201710\cm\Money;
use Google\AdsApi\AdWords\v201710\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example updates the default bid of an ad group. To get ad groups, run
 * GetAdGroups.php.
 */
class UpdateAdGroup {

  const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';
  const MICROS_PER_DOLLAR = 1000000;

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $adGroupId) {
    $adGroupService = $adWordsServices->get($session, AdGroupService::class);

    $operations = [];
    // Create ad group object.
    $adGroup = new AdGroup();
    $adGroup->setId($adGroupId);

    // Update the bid.
    $bid = new CpcBid();
    $money = new Money();
    $money->setMicroAmount(intval(0.75 * self::MICROS_PER_DOLLAR));
    $bid->setBid($money);
    $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
    $biddingStrategyConfiguration->setBids([$bid]);
    $adGroup->setBiddingStrategyConfiguration($biddingStrategyConfiguration);

    // Create ad group operation and add it to the list.
    $operation = new AdGroupOperation();
    $operation->setOperand($adGroup);
    $operation->setOperator(Operator::SET);
    $operations[] = $operation;

    // Update the ad group on the server.
    $result = $adGroupService->mutate($operations);

    $adGroup = $result->getValue()[0];
    $bid = $adGroup->getBiddingStrategyConfiguration()->getBids()[0]->getBid();
    printf(
        "Ad group with ID %d has updated default bid to %f in your currency.\n",
        $adGroup->getId(),
        $bid->getMicroAmount() / self::MICROS_PER_DOLLAR
    );
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

UpdateAdGroup::main();
