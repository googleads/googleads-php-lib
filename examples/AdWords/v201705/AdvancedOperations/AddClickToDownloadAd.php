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
use Google\AdsApi\AdWords\v201705\cm\Operator;
use Google\AdsApi\AdWords\v201705\cm\TemplateAd;
use Google\AdsApi\AdWords\v201705\cm\TemplateElement;
use Google\AdsApi\AdWords\v201705\cm\TemplateElementField;
use Google\AdsApi\AdWords\v201705\cm\TemplateElementFieldType;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This code example creates a click-to-download ad, also known as an
 * app promotion ad to a given ad group. To list ad groups, run
 * GetAdGroups.php.
 */
class AddClickToDownloadAd {

  const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $adGroupId) {
    $adGroupAdService =
        $adWordsServices->get($session, AdGroupAdService::class);

    // Optionally specify a landscape image. The image needs to be in a BASE64
    // encoded form. Here we download a demo image and encode it for this ad.
    $imageData = file_get_contents('http://goo.gl/9JmyKk');

    $operations = [];
    // Create a template ad.
    $clickToDownloadAppAd = new TemplateAd();
    $clickToDownloadAppAd->setName('Ad for demo game');
    // 353 represents app install ad. See
    // https://developers.google.com/adwords/api/docs/appendix/templateads
    // for details.
    $clickToDownloadAppAd->setTemplateId(353);
    $clickToDownloadAppAd->setFinalUrls(
        ['http://play.google.com/store/apps/details?id=com.example.demogame']);
    $clickToDownloadAppAd->setDisplayUrl('play.google.com');

    // Create the template elements for the ad. You can refer to
    // https://developers.google.com/adwords/api/docs/appendix/templateads
    // for the list of avaliable template fields.
    $headline = new TemplateElementField();
    $headline->setName('headline');
    $headline->setFieldText('Enjoy your drive in Mars');
    $headline->setType(TemplateElementFieldType::TEXT);

    $description1 = new TemplateElementField();
    $description1->setName('description1');
    $description1->setFieldText('Realistic physics simulation');
    $description1->setType(TemplateElementFieldType::TEXT);

    $description2 = new TemplateElementField();
    $description2->setName('description2');
    $description2->setFieldText('Race against players online');
    $description2->setType(TemplateElementFieldType::TEXT);

    $appId = new TemplateElementField();
    $appId->setName('appId');
    $appId->setFieldText('com.example.demogame');
    $appId->setType(TemplateElementFieldType::TEXT);

    $appStore = new TemplateElementField();
    $appStore->setName('appStore');
    $appStore->setFieldText('2');
    $appStore->setType(TemplateElementFieldType::ENUM);

    $landscapeImage = new TemplateElementField();
    $landscapeImage->setName('landscapeImage');
    $image = new Image();
    $image->setData($imageData);
    $landscapeImage->setFieldMedia($image);
    $landscapeImage->setType(TemplateElementFieldType::IMAGE);

    $adData = new TemplateElement();
    $adData->setUniqueName('adData');
    $adData->setFields([$headline, $description1, $description2, $appId,
        $appStore, $landscapeImage]);

    $clickToDownloadAppAd->setTemplateElements([$adData]);

    // Create ad group ad.
    $adGroupAd = new AdGroupAd();
    $adGroupAd->setAdGroupId($adGroupId);
    $adGroupAd->setAd($clickToDownloadAppAd);
    // Optional: Set additional settings.
    $adGroupAd->setStatus(AdGroupAdStatus::PAUSED);

    // Create ad group ad operation and add it to the list.
    $operation = new AdGroupAdOperation();
    $operation->setOperand($adGroupAd);
    $operation->setOperator(Operator::ADD);
    $operations[] = $operation;

    // Create the ad group ad on the server and print out some information
    // about it.
    $result = $adGroupAdService->mutate($operations);
    foreach ($result->getValue() as $adGroupAd) {
      printf(
          "New click-to-download ad with ID %d and URL '%s' was created.\n",
          $adGroupAd->getAd()->getId(),
          $adGroupAd->getAd()->getFinalUrls()[0]
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

AddClickToDownloadAd::main();
