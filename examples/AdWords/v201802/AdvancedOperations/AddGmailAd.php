<?php
/**
 * Copyright 2018 Google Inc. All Rights Reserved.
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

namespace Google\AdsApi\Examples\AdWords\v201802\AdvancedOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201802\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201802\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201802\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201802\cm\AdGroupAdStatus;
use Google\AdsApi\AdWords\v201802\cm\GmailAd;
use Google\AdsApi\AdWords\v201802\cm\GmailTeaser;
use Google\AdsApi\AdWords\v201802\cm\Image;
use Google\AdsApi\AdWords\v201802\cm\MediaMediaType;
use Google\AdsApi\AdWords\v201802\cm\MediaService;
use Google\AdsApi\AdWords\v201802\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This code example adds a Gmail ad to a given ad group. The ad group's
 * campaign needs to have an AdvertisingChannelType of DISPLAY and
 * AdvertisingChannelSubType of DISPLAY_GMAIL_AD.
 * To get ad groups, run BasicOperations/GetAdGroups.php.
 */
class AddGmailAd
{

    const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $adGroupId
    ) {
        $mediaService =
            $adWordsServices->get($session, MediaService::class);
        $adGroupAdService =
            $adWordsServices->get($session, AdGroupAdService::class);

        // This ad format does not allow the creation of an image using the
        // Image.data field. An image must first be created using the
        // MediaService, and Image.mediaId must be populated when creating the
        // ad.
        $uploadedLogoImage =
            self::uploadImage($mediaService, 'https://goo.gl/mtt54n');
        $logoImage = new Image();
        $logoImage->setMediaId($uploadedLogoImage->getMediaId());

        $uploadedMarketingImage =
            self::uploadImage($mediaService, 'http://goo.gl/3b9Wfh');
        $marketingImage = new Image();
        $marketingImage->setMediaId($uploadedMarketingImage->getMediaId());

        $teaser = new GmailTeaser();
        $teaser->setHeadline('Dream');
        $teaser->setDescription('Create your own adventure');
        $teaser->setBusinessName('Interplanetary Ships');
        $teaser->setLogoImage($logoImage);

        // Creates a Gmail ad.
        $gmailAd = new GmailAd();
        $gmailAd->setTeaser($teaser);
        $gmailAd->setMarketingImage($marketingImage);
        $gmailAd->setMarketingImageHeadline('Travel');
        $gmailAd->setMarketingImageDescription('Take to the skies!');
        $gmailAd->setFinalUrls(['http://www.example.com/']);

        // Creates ad group ad for the Gmail ad.
        $adGroupAd = new AdGroupAd();
        $adGroupAd->setAdGroupId($adGroupId);
        $adGroupAd->setAd($gmailAd);
        // Optional: Set additional settings.
        $adGroupAd->setStatus(AdGroupAdStatus::PAUSED);

        // Creates ad group ad operation and add it to the list.
        $operation = new AdGroupAdOperation();
        $operation->setOperand($adGroupAd);
        $operation->setOperator(Operator::ADD);

        // Adds a Gmail ad on the server.
        $result = $adGroupAdService->mutate([$operation]);

        if (empty($result->getValue())) {
            print "No Gmail ads were added.\n";
            return;
        }
        // Prints out some information for each created Gmail ad.
        foreach ($result->getValue() as $adGroupAd) {
            printf(
                "A Gmail ad with ID %d and headline '%s' was added.\n",
                $adGroupAd->getAd()->getId(),
                $adGroupAd->getAd()->getTeaser()->getHeadline()
            );
        }
    }

    /**
     * Uploads an image to the server.
     *
     * @param MediaService $mediaService the media service
     * @param string $url the URL of image to upload
     * @return Image the uploaded image returned from the server
     */
    private static function uploadImage(MediaService $mediaService, $url)
    {
        // Creates an image and upload it to the server.
        $image = new Image();
        $image->setData(file_get_contents($url));
        $image->setType(MediaMediaType::IMAGE);

        return $mediaService->upload([$image])[0];
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())
            ->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();
        self::runExample(
            new AdWordsServices(),
            $session,
            intval(self::AD_GROUP_ID)
        );
    }
}

AddGmailAd::main();
