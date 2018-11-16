<?php
/**
 * Copyright 2018 Google LLC
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

namespace Google\AdsApi\Examples\AdWords\v201806\AdvancedOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201806\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201806\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201806\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201806\cm\AssetLink;
use Google\AdsApi\AdWords\v201806\cm\AssetOperation;
use Google\AdsApi\AdWords\v201806\cm\AssetService;
use Google\AdsApi\AdWords\v201806\cm\DisplayAdFormatSetting;
use Google\AdsApi\AdWords\v201806\cm\ImageAsset;
use Google\AdsApi\AdWords\v201806\cm\MultiAssetResponsiveDisplayAd;
use Google\AdsApi\AdWords\v201806\cm\Operator;
use Google\AdsApi\AdWords\v201806\cm\TextAsset;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This code example adds a multi-asset responsive display ad
 * (MultiAssetResponsiveDisplayAd) to an ad group. Image assets are uploaded
 * using AssetService. To get ad groups, run GetAdGroups.php.
 */
class AddMultiAssetResponsiveDisplayAd
{

    const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $adGroupId
    ) {

        $assetService = $adWordsServices->get($session, AssetService::class);
        $adGroupAdService =
            $adWordsServices->get($session, AdGroupAdService::class);

        // Create a multi-asset responsive display ad.
        $multiAssetResponsiveDisplayAd = new MultiAssetResponsiveDisplayAd();
        $headlineTextAsset1 = new TextAsset();
        $headlineTextAsset1->setAssetText('Travel to Mars');
        $headlineTextAsset2 = new TextAsset();
        $headlineTextAsset2->setAssetText('Travel to Jupiter');
        $headlineTextAsset3 = new TextAsset();
        $headlineTextAsset3->setAssetText('Travel to Pluto');
        // Text assets can be specified directly in the asset field when
        // creating the ad.
        $multiAssetResponsiveDisplayAd->setHeadlines([
            new AssetLink($headlineTextAsset1),
            new AssetLink($headlineTextAsset2),
            new AssetLink($headlineTextAsset3)
        ]);

        // Set business name and long headline.
        $multiAssetResponsiveDisplayAd->setBusinessName(
            'Galactic Luxury Cruises'
        );
        $longHeadlineTextAsset = new TextAsset();
        $longHeadlineTextAsset->setAssetText(
            'Visit the planet in a luxury spaceship.'
        );
        $multiAssetResponsiveDisplayAd->setLongHeadline(
            new AssetLink($longHeadlineTextAsset)
        );

        // Set description.
        $descriptionTextAsset1 = new TextAsset();
        $descriptionTextAsset1->setAssetText(
            'Visit the planet in a luxury spaceship.'
        );
        $descriptionTextAsset2 = new TextAsset();
        $descriptionTextAsset2->setAssetText('See the planet in style.');
        $multiAssetResponsiveDisplayAd->setDescriptions([
            new AssetLink($descriptionTextAsset1),
            new AssetLink($descriptionTextAsset2)
        ]);

        // Set a marketing image.
        $marketingImageAsset = new ImageAsset();
        // This ad format does not allow the creation of an image asset by
        // setting the Asset.imageData field. An image asset must first be
        // created using the AssetService, and Asset.assetId must be populated
        // when creating the ad.
        $marketingImageAsset->setAssetId(
            self::uploadImageAsset($assetService, 'https://goo.gl/3b9Wfh')
        );
        $multiAssetResponsiveDisplayAd->setMarketingImages([
            new AssetLink(
                $marketingImageAsset
            )
        ]);

        // Set a square image.
        $squareImageAsset = new ImageAsset();
        $squareImageAsset->setAssetId(
            self::uploadImageAsset($assetService, 'https://goo.gl/mtt54n')
        );
        $multiAssetResponsiveDisplayAd->setSquareMarketingImages([
            new AssetLink(
                $squareImageAsset
            )
        ]);

        $multiAssetResponsiveDisplayAd->setFinalUrls(
            ['http://www.example.com']
        );

        // Optional: Set call to action text.
        $multiAssetResponsiveDisplayAd->setCallToActionText('Shop Now');

        // Optional: Set color settings using hexadecimal values.
        // Set allowFlexibleColor to false if you want your ads to render by
        // always using your colors strictly.
        $multiAssetResponsiveDisplayAd->setMainColor('#0000ff');
        $multiAssetResponsiveDisplayAd->setAccentColor('#ffff00');
        $multiAssetResponsiveDisplayAd->setAllowFlexibleColor(false);

        // Optional: Set the format setting that the ad will be served in.
        $multiAssetResponsiveDisplayAd->setFormatSetting(
            DisplayAdFormatSetting::NON_NATIVE
        );

        // Optional: Set dynamic display ad settings, composed of landscape logo
        // image, promotion text, and price prefix.
        $multiAssetResponsiveDisplayAd->setDynamicSettingsPricePrefix(
            'as low as'
        );
        $multiAssetResponsiveDisplayAd->setDynamicSettingsPromoText(
            'Free shipping!'
        );

        // Set a logo image.
        $logoImageAsset = new ImageAsset();
        $logoImageAsset->setAssetId(
            self::uploadImageAsset($assetService, 'https://goo.gl/mtt54n')
        );
        $multiAssetResponsiveDisplayAd->setLogoImages([
            new AssetLink(
                $logoImageAsset
            )
        ]);

        // Create ad group ad.
        $adGroupAd = new AdGroupAd();
        $adGroupAd->setAdGroupId($adGroupId);
        $adGroupAd->setAd($multiAssetResponsiveDisplayAd);

        // Create ad group ad operation and add it to the list.
        $operation = new AdGroupAdOperation();
        $operation->setOperand($adGroupAd);
        $operation->setOperator(Operator::ADD);

        // Add a multi-asset responsive display ad on the server.
        $result = $adGroupAdService->mutate([$operation]);

        // Print out some information for each created ad.
        foreach ($result->getValue() as $adGroupAd) {
            $ad = $adGroupAd->getAd();
            printf(
                "Responsive display ad with ID %d and long "
                . "headline '%s' was added.%s",
                $ad->getId(),
                $ad->getLongHeadline()->getAsset()->getAssetText(),
                PHP_EOL
            );
        }
    }

    /**
     * Upload an image asset using AssetService and provided URL.
     */
    private static function uploadImageAsset(AssetService $assetService, $url)
    {
        // Creates an image asset and upload it to the server.
        $imageAsset = new ImageAsset();
        // Optional: Provide a unique friendly name to identify your asset. If
        // you specify the assetName field, then both the asset name and the
        // image being uploaded should be unique, and should not match another
        // ACTIVE asset in this customer account.
        // $imageAsset->setAssetName('Image asset #' . uniqid());
        $imageAsset->setImageData(file_get_contents($url));

        // Create an asset operation.
        $operation = new AssetOperation();
        $operation->setOperand($imageAsset);
        $operation->setOperator(Operator::ADD);

        return $assetService->mutate([$operation])->getValue()[0]->getAssetId();
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();
        self::runExample(
            new AdWordsServices(),
            $session,
            intval(self::AD_GROUP_ID)
        );
    }
}

AddMultiAssetResponsiveDisplayAd::main();
