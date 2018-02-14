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
use Google\AdsApi\AdWords\v201710\cm\Ad;
use Google\AdsApi\AdWords\v201710\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201710\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201710\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201710\cm\AdGroupAdStatus;
use Google\AdsApi\AdWords\v201710\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example pauses an ad. To get expanded text ads, run
 * GetExpandedTextAds.php.
 */
class PauseAd
{

    const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';
    const AD_ID = 'INSERT_AD_ID_HERE';

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $adGroupId,
        $adId
    ) {
        $adGroupAdService = $adWordsServices->get($session, AdGroupAdService::class);

        $operations = [];
        // Create ad using an existing ID. Use the base class Ad instead of TextAd
        // to avoid having to set ad-specific fields.
        $ad = new Ad();
        $ad->setId($adId);

        // Create ad group ad.
        $adGroupAd = new AdGroupAd();
        $adGroupAd->setAdGroupId($adGroupId);
        $adGroupAd->setAd($ad);

        // Update the status to PAUSED.
        $adGroupAd->setStatus(AdGroupAdStatus::PAUSED);

        // Create ad group ad operation and add it to the list.
        $operation = new AdGroupAdOperation();
        $operation->setOperand($adGroupAd);
        $operation->setOperator(Operator::SET);
        $operations[] = $operation;

        // Pause the ad on the server.
        $adGroupAd = $adGroupAdService->mutate($operations)->getValue()[0];
        printf(
            "Ad of type '%s' with ID %d has updated status '%s'.\n",
            $adGroupAd->getAd()->getType(),
            $adGroupAd->getAd()->getId(),
            $adGroupAd->getStatus()
        );
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()->withOAuth2Credential($oAuth2Credential)->build();
        self::runExample(
            new AdWordsServices(),
            $session,
            intval(self::AD_GROUP_ID),
            intval(self::AD_ID)
        );
    }
}

PauseAd::main();
