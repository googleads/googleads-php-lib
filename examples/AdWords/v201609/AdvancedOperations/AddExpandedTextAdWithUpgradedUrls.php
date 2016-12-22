<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
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
namespace Google\AdsApi\Examples\AdWords\v201609\BasicOperations;

require '../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201609\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201609\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201609\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201609\cm\AdGroupAdStatus;
use Google\AdsApi\AdWords\v201609\cm\CustomParameter;
use Google\AdsApi\AdWords\v201609\cm\CustomParameters;
use Google\AdsApi\AdWords\v201609\cm\ExpandedTextAd;
use Google\AdsApi\AdWords\v201609\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds an expanded text ad to an ad group that uses upgraded URLs.
 * To get ad groups, run GetAdGroups.php.
 */
class AddExpandedTextAdWithUpgradedUrls {

  const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $adGroupId) {
    $adGroupAdService =
        $adWordsServices->get($session, AdGroupAdService::class);

    $operations = [];
    // Create expanded text ad with a tracking template and custom parameters.
    $expandedTextAd = new ExpandedTextAd();
    $expandedTextAd->setHeadlinePart1('Luxury Cruise to Mars');
    $expandedTextAd->setHeadlinePart2('Visit the Red Planet in style.');
    $expandedTextAd->setDescription('Low-gravity fun for everyone!');

    // Specify a tracking url for 3rd party tracking provider. You may
    // specify one at customer, campaign, ad group, ad, criterion or
    // feed item levels.
    $expandedTextAd->setTrackingUrlTemplate(
        'http://tracker.example.com/?season={_season}&promocode={_promocode}'
            . '&u={lpurl}'
    );

    // Since your tracking url has two custom parameters, provide their
    // values too. This can be provided at campaign, ad group, ad, criterion
    // or feed item levels.
    $seasonParameter = new CustomParameter();
    $seasonParameter->setKey('season');
    $seasonParameter->setValue('christmas');

    $promoCodeParameter = new CustomParameter();
    $promoCodeParameter->setKey('promocode');
    $promoCodeParameter->setValue('NYC123');

    $expandedTextAd->setUrlCustomParameters(new CustomParameters());
    $expandedTextAd->getUrlCustomParameters()->setParameters(
        [$seasonParameter, $promoCodeParameter]);

    // Specify a list of final urls. This field cannot be set if url field is
    // set. This may be specified at ad, criterion and feed item levels.
    $expandedTextAd->setFinalUrls([
        'http://www.example.com/cruise/space/',
        'http://www.example.com/locations/mars/'
    ]);

    // Specify a list of final mobile urls. This field cannot be set if url
    // field is set, or finalUrls is unset. This may be specified at ad,
    // criterion and feed item levels.
    $expandedTextAd->setFinalMobileUrls([
        'http://mobile.example.com/cruise/space/',
        'http://mobile.example.com/locations/mars/'
    ]);

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

    // Add an expanded text ad on the server.
    $result = $adGroupAdService->mutate($operations);

    // Create the expanded text ad on the server and print out its information.
    foreach ($result->getValue() as $adGroupAd) {
      $ad = $adGroupAd->getAd();
      printf("Ad with ID %d was added.\n", $ad->getId());
      print("Upgraded URL properties:\n");
      printf("  Final URLs: %s\n", implode(', ', $ad->getFinalUrls()));
      printf("  Final Mobile URLs: %s\n",
          implode(', ', $ad->getFinalMobileUrls()));
      printf("  Tracking URL template: %s\n", $ad->getTrackingUrlTemplate());
      printf("  Custom parameters: %s\n",
          implode(', ', array_map(
              function($param) {
                return sprintf('%s=%s', $param->getKey(), $param->getValue());
              },
              $ad->getUrlCustomParameters()->getParameters()
          ))
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

AddExpandedTextAdWithUpgradedUrls::main();
