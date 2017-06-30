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
namespace Google\AdsApi\Examples\Dfp\v201705\CreativeService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\v201705\AssetCreativeTemplateVariableValue;
use Google\AdsApi\Dfp\v201705\CreativeAsset;
use Google\AdsApi\Dfp\v201705\CreativeService;
use Google\AdsApi\Dfp\v201705\Size;
use Google\AdsApi\Dfp\v201705\StringCreativeTemplateVariableValue;
use Google\AdsApi\Dfp\v201705\TemplateCreative;
use Google\AdsApi\Dfp\v201705\UrlCreativeTemplateVariableValue;

/**
 * Creates native creatives.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateNativeCreatives {

  const ADVERTISER_ID = 'INSERT_ADVERTISER_ID_HERE';

  public static function runExample(DfpServices $dfpServices,
      DfpSession $session, $advertiserId) {
    $creativeService = $dfpServices->get($session, CreativeService::class);

    // Use the system defined native app install creative template.
    $nativeAppInstallTemplateId = 10004400;

    // Use 1x1 as the size for native creatives.
    $size = new Size();
    $size->setWidth(1);
    $size->setHeight(1);
    $size->setIsAspectRatio(false);

    // Create a native app install creative for the Pie Noon app.
    $nativeAppInstallCreative = new TemplateCreative();
    $nativeAppInstallCreative->setName('Native creative #' . uniqid());
    $nativeAppInstallCreative->setAdvertiserId($advertiserId);
    $nativeAppInstallCreative->setDestinationUrl(
        'https://play.google.com/store/apps/details?id=com.google.fpl.pie_noon'
    );
    $nativeAppInstallCreative
        ->setCreativeTemplateId($nativeAppInstallTemplateId);
    $nativeAppInstallCreative->setSize($size);

    // Set the headline.
    $headlineVariableValue = new StringCreativeTemplateVariableValue();
    $headlineVariableValue->setUniqueName('Headline');
    $headlineVariableValue->setValue('Pie Noon');
    $variableValues = [$headlineVariableValue];

    // Set the body text.
    $bodyVariableValue = new StringCreativeTemplateVariableValue();
    $bodyVariableValue->setUniqueName('Body');
    $bodyVariableValue->setValue('Try multi-screen mode!');
    $variableValues[] = $bodyVariableValue;

    // Set the image asset.
    $imageVariableValue = new AssetCreativeTemplateVariableValue();
    $imageVariableValue->setUniqueName('Image');
    $imageAsset = new CreativeAsset();
    $imageAsset->setFileName('image' . uniqid() . '.png');
    $imageAsset->setAssetByteArray(file_get_contents(
        'https://lh4.ggpht.com/GIGNKdGHMEHFDw6TM2bgAUDKPQQRIReKZPqEpMeEhZOPYnTd'
            . 'OQGaSpGSEZflIFs0iw=h300'
    ));
    $imageVariableValue->setAsset($imageAsset);
    $variableValues[] = $imageVariableValue;

    // Set the price.
    $priceVariableValue = new StringCreativeTemplateVariableValue();
    $priceVariableValue->setUniqueName('Price');
    $priceVariableValue->setValue('Free');
    $variableValues[] = $priceVariableValue;

    // Set app icon image asset.
    $appIconVariableValue = new AssetCreativeTemplateVariableValue();
    $appIconVariableValue->setUniqueName('Appicon');
    $appIconAsset = new CreativeAsset();
    $appIconAsset->setFileName('icon' . uniqid() . '.png');
    $appIconAsset->setAssetByteArray(file_get_contents(
        'https://lh6.ggpht.com/Jzvjne5CLs6fJ1MHF-XeuUfpABzl0YNMlp4RpHnvPRCIj4--'
            . 'eTDwtyouwUDzVVekXw=w300'
    ));
    $appIconVariableValue->setAsset($appIconAsset);
    $variableValues[] = $appIconVariableValue;

    // Set the call to action text.
    $callToActionVariableValue = new StringCreativeTemplateVariableValue();
    $callToActionVariableValue->setUniqueName('Calltoaction');
    $callToActionVariableValue->setValue('Install');
    $variableValues[] = $callToActionVariableValue;

    // Set the star rating.
    $starRatingVariableValue = new StringCreativeTemplateVariableValue();
    $starRatingVariableValue->setUniqueName('Starrating');
    $starRatingVariableValue->setValue('4');
    $variableValues[] = $starRatingVariableValue;

    // Set the store type.
    $storeVariableValue = new StringCreativeTemplateVariableValue();
    $storeVariableValue->setUniqueName('Store');
    $storeVariableValue->setValue('Google Play');
    $variableValues[] = $storeVariableValue;

    // Set the deep link URL.
    $deepLinkVariableValue = new UrlCreativeTemplateVariableValue();
    $deepLinkVariableValue->setUniqueName('DeeplinkclickactionURL');
    $deepLinkVariableValue
        ->setValue('market://details?id=com.google.fpl.pie_noon');
    $variableValues[] = $deepLinkVariableValue;

    $nativeAppInstallCreative
        ->setCreativeTemplateVariableValues($variableValues);

    // Create the native creatives on the server.
    $results = $creativeService->createCreatives([$nativeAppInstallCreative]);

    // Print out some information for each created native creative.
    foreach ($results as $i => $nativeAppInstallCreative) {
      printf(
          "%d) Native creative with ID %d and name '%s' was created and can be "
              . "previewed at: '%s'.\n",
          $i,
          $nativeAppInstallCreative->getId(),
          $nativeAppInstallCreative->getName(),
          $nativeAppInstallCreative->getPreviewUrl()
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
    $session = (new DfpSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential)
        ->build();

    self::runExample(new DfpServices(), $session, intval(self::ADVERTISER_ID));
  }
}

CreateNativeCreatives::main();
