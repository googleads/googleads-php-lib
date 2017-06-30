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
namespace Google\AdsApi\Examples\AdWords\v201702\BasicOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201702\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201702\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201702\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201702\cm\AdGroupAdStatus;
use Google\AdsApi\AdWords\v201702\cm\ExpandedTextAd;
use Google\AdsApi\AdWords\v201702\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds an expanded text ad to an ad group. To get ad groups,
 * run GetAdGroups.php.
 */
class AddExpandedTextAds {

  const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $adGroupId) {
    $adGroupAdService =
        $adWordsServices->get($session, AdGroupAdService::class);

    $operations = [];
    // Create an expanded text ad.
    $expandedTextAd = new ExpandedTextAd();
    $expandedTextAd->setHeadlinePart1('Cruise to Mars #' . uniqid());
    $expandedTextAd->setHeadlinePart2('Best Space Cruise Line');
    $expandedTextAd->setDescription('Buy your tickets now!');
    $expandedTextAd->setFinalUrls(['http://www.example.com']);
    $expandedTextAd->setPath1('all-inclusive');
    $expandedTextAd->setPath2('deals');

    // Create ad group ad.
    $adGroupAd = new AdGroupAd();
    $adGroupAd->setAdGroupId($adGroupId);
    $adGroupAd->setAd($expandedTextAd);
    // Optional: Set additional settings.
    $adGroupAd->setStatus(AdGroupAdStatus::PAUSED);

    // Create ad group ad operation and add it to the list.
    $operation = new AdGroupAdOperation();
    $operation->setOperand($adGroupAd);
    $operation->setOperator(Operator::ADD);
    $operations[] = $operation;

    // Create another expanded text ad.
    $expandedTextAd = new ExpandedTextAd();
    $expandedTextAd->setHeadlinePart1('Cruise to Venus #' . uniqid());
    $expandedTextAd->setHeadlinePart2('Best Space Cruise Line');
    $expandedTextAd->setDescription('Buy your tickets now!');
    $expandedTextAd->setFinalUrls(['http://www.example.com']);

    // Create ad group ad.
    $adGroupAd = new AdGroupAd();
    $adGroupAd->setAdGroupId($adGroupId);
    $adGroupAd->setAd($expandedTextAd);
    // Optional: Set additional settings.
    $adGroupAd->setStatus(AdGroupAdStatus::PAUSED);

    // Create ad group ad operation and add it to the list.
    $operation = new AdGroupAdOperation();
    $operation->setOperand($adGroupAd);
    $operation->setOperator(Operator::ADD);
    $operations[] = $operation;

    // Add expanded text ads on the server.
    $result = $adGroupAdService->mutate($operations);

    // Create the expanded text ads on the server and print out some information
    // for each created expanded text ad.
    foreach ($result->getValue() as $adGroupAd) {
      printf(
          "Expanded text ad with ID %d and headline '%s - %s' was added.\n",
          $adGroupAd->getAd()->getId(),
          $adGroupAd->getAd()->getHeadlinePart1(),
          $adGroupAd->getAd()->getHeadlinePart2()
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

AddExpandedTextAds::main();
