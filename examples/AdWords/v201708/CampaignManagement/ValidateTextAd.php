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
namespace Google\AdsApi\Examples\AdWords\v201708\CampaignManagement;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201708\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201708\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201708\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201708\cm\ApiException;
use Google\AdsApi\AdWords\v201708\cm\ExpandedTextAd;
use Google\AdsApi\AdWords\v201708\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example validates a text ad without creating it using the validateOnly
 * mode, which can be useful when checking for policy violations.
 */
class ValidateTextAd {

  const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $adGroupId) {
    $session->setValidateOnly(true);
    $adGroupAdService =
        $adWordsServices->get($session, AdGroupAdService::class);

    $operations = [];
    // Create invalid expanded text ad.
    $expandedTextAd = new ExpandedTextAd();
    $expandedTextAd->setHeadlinePart1('Luxury Cruise to Mars !!!');
    $expandedTextAd->setHeadlinePart2('Visit the Red Planet in style.');
    $expandedTextAd->setDescription(
        'Low-gravity fun for all astronauts in orbit.');
    $expandedTextAd->setFinalUrls(['http://www.example.com']);

    // Create ad group ad.
    $adGroupAd = new AdGroupAd();
    $adGroupAd->setAdGroupId($adGroupId);
    $adGroupAd->setAd($expandedTextAd);

    // Create ad group ad operation and add it to the list.
    $operation = new AdGroupAdOperation();
    $operation->setOperand($adGroupAd);
    $operation->setOperator(Operator::ADD);
    $operations[] = $operation;

    try {
      $adGroupAdService->mutate($operations);
      printf("The expanded text ad is valid.\n");
    } catch (ApiException $e) {
      $errors = $e->getErrors();
      if (count($errors) > 0) {
        printf("The expanded text ad is invalid for the following reasons:\n");
        foreach ($errors as $error) {
          printf("  %s @ %s\n", $error->getErrorString(),
              $error->getFieldPath());
        }
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
    self::runExample(
        new AdWordsServices(), $session, intval(self::AD_GROUP_ID));
  }
}

ValidateTextAd::main();
