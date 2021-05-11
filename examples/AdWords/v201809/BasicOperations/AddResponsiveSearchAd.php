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

namespace Google\AdsApi\Examples\AdWords\v201809\BasicOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAdStatus;
use Google\AdsApi\AdWords\v201809\cm\AssetLink;
use Google\AdsApi\AdWords\v201809\cm\Operator;
use Google\AdsApi\AdWords\v201809\cm\ResponsiveSearchAd;
use Google\AdsApi\AdWords\v201809\cm\ServedAssetFieldType;
use Google\AdsApi\AdWords\v201809\cm\TextAsset;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds a responsive search ad to a given ad group. To get ad
 * groups, run GetAdGroups.php.
 */
class AddResponsiveSearchAd
{

    const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $adGroupId
    ) {
        $adGroupAdService =
            $adWordsServices->get($session, AdGroupAdService::class);

        // Create a responsive search ad.
        $responsiveSearchAd = new ResponsiveSearchAd();
        $responsiveSearchAd->setFinalUrls(['http://www.example.com/cruise']);
        $responsiveSearchAd->setPath1('all-inclusive');
        $responsiveSearchAd->setPath2('deals');

        // Create text assets for headlines.
        $headline1 = new TextAsset();
        $headline1->setAssetText('Cruise to Mars #' . uniqid());
        $headline2 = new TextAsset();
        $headline2->setAssetText('Best Space Cruise Line');
        $headline3 = new TextAsset();
        $headline3->setAssetText('Experience the Stars');
        $responsiveSearchAd->setHeadlines(
            [
                // Set a pinning to always choose this asset for HEADLINE_1.
                // Pinning is optional; if no pinning is set, then headlines
                // and descriptions will be rotated and the ones that perform
                // best will be used more often.
                new AssetLink($headline1, ServedAssetFieldType::HEADLINE_1),
                new AssetLink($headline2),
                new AssetLink($headline3)
            ]
        );

        // Create text assets for descriptions.
        $description1 = new TextAsset();
        $description1->setAssetText('Buy your tickets now');
        $description2 = new TextAsset();
        $description2->setAssetText('Visit the Red Planet');
        $responsiveSearchAd->setDescriptions(
            [new AssetLink($description1), new AssetLink($description2)]
        );

        // Create ad group ad.
        $adGroupAd = new AdGroupAd();
        $adGroupAd->setAdGroupId($adGroupId);
        $adGroupAd->setAd($responsiveSearchAd);

        // Optional: Set additional settings.
        $adGroupAd->setStatus(AdGroupAdStatus::PAUSED);

        // Create ad group ad operation and add it to the list.
        $operation = new AdGroupAdOperation();
        $operation->setOperand($adGroupAd);
        $operation->setOperator(Operator::ADD);

        // Add the responsive search ad on the server.
        $result = $adGroupAdService->mutate([$operation]);

        // Print out some information for the created ad.
        /** @var AdGroupAd $adGroupAd */
        foreach ($result->getValue() as $adGroupAd) {
            /** @var ResponsiveSearchAd $ad */
            $ad = $adGroupAd->getAd();
            printf(
                'New responsive search ad with ID %d was added.%s',
                $ad->getId(),
                PHP_EOL
            );
            print 'Headlines:' . PHP_EOL;
            foreach ($ad->getHeadlines() as $headline) {
                /** @var TextAsset $textAsset */
                $textAsset = $headline->getAsset();
                $pinnedField = $headline->getPinnedField();
                printf('    %s%s', $textAsset->getAssetText(), PHP_EOL);
                if (!is_null($pinnedField)) {
                    printf('      (pinned to %s)%s', $pinnedField, PHP_EOL);
                }
            }
            print 'Descriptions:' . PHP_EOL;
            foreach ($ad->getDescriptions() as $description) {
                /** @var TextAsset $textAsset */
                $textAsset = $description->getAsset();
                $pinnedField = $description->getPinnedField();
                printf('    %s%s', $textAsset->getAssetText(), PHP_EOL);
                if (!is_null($pinnedField)) {
                    printf('      (pinned to %s)%s', $pinnedField, PHP_EOL);
                }
            }
        }
        if (empty($result->getValue())) {
            print 'No ads were added.';
        }
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

AddResponsiveSearchAd::main();
