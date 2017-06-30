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
namespace Google\AdsApi\Examples\AdWords\v201705\AdvancedOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201705\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201705\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201705\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201705\cm\AdGroupAdStatus;
use Google\AdsApi\AdWords\v201705\cm\Image;
use Google\AdsApi\AdWords\v201705\cm\MediaMediaType;
use Google\AdsApi\AdWords\v201705\cm\MediaService;
use Google\AdsApi\AdWords\v201705\cm\Operator;
use Google\AdsApi\AdWords\v201705\cm\ResponsiveDisplayAd;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds an image representing the ad using the MediaService and
 * then adds a responsive display ad to an ad group. To get ad groups, run
 * GetAdGroups.php.
 */
class AddResponsiveDisplayAd {

  const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $adGroupId) {
    $mediaService = $adWordsServices->get($session, MediaService::class);

    // Create an image and add it to the images list.
    $image = new Image();
    $image->setData(file_get_contents('http://goo.gl/3b9Wfh'));
    $image->setType(MediaMediaType::IMAGE);
    $images = [$image];

    // Upload the image to the server.
    $image = $mediaService->upload($images)[0];

    $adGroupAdService =
        $adWordsServices->get($session, AdGroupAdService::class);

    $operations = [];
    // Create a responsive display ad.
    $responsiveDisplayAd = new ResponsiveDisplayAd();

    // This ad format does not allow the creation of an image using the
    // Image.data field. An image must first be created using the MediaService,
    // and Image.mediaId must be populated when creating the ad.
    $marketingImage = new Image();
    $marketingImage->setMediaId($image->getMediaId());

    $responsiveDisplayAd->setMarketingImage($marketingImage);
    $responsiveDisplayAd->setShortHeadline('Travel');
    $responsiveDisplayAd->setLongHeadline('Travel the World');
    $responsiveDisplayAd->setDescription('Take to the air!');
    $responsiveDisplayAd->setBusinessName('Google');
    $responsiveDisplayAd->setFinalUrls(['http://www.example.com']);

    // Create ad group ad.
    $adGroupAd = new AdGroupAd();
    $adGroupAd->setAdGroupId($adGroupId);
    $adGroupAd->setAd($responsiveDisplayAd);
    // Optional: Set additional settings.
    $adGroupAd->setStatus(AdGroupAdStatus::PAUSED);

    // Create ad group ad operation and add it to the list.
    $operation = new AdGroupAdOperation();
    $operation->setOperand($adGroupAd);
    $operation->setOperator(Operator::ADD);
    $operations[] = $operation;

    // Add a responsive display ad on the server.
    $result = $adGroupAdService->mutate($operations);

    // Create the responsive display ad on the server and print out some
    // information for each created responsive display ad.
    foreach ($result->getValue() as $adGroupAd) {
      printf(
          "Responsive display ad with ID %d and short headline '%s'"
              . " was added.\n",
          $adGroupAd->getAd()->getId(),
          $adGroupAd->getAd()->getShortHeadline()
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

AddResponsiveDisplayAd::main();
