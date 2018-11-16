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

namespace Google\AdsApi\Examples\AdWords\v201806\BasicOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201806\cm\Ad;
use Google\AdsApi\AdWords\v201806\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201806\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201806\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201806\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example removes an ad. To get text ads, run GetExpandedTextAds.php.
 */
class RemoveAd
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

        // Create ad group ad operation and add it to the list.
        $operation = new AdGroupAdOperation();
        $operation->setOperand($adGroupAd);
        $operation->setOperator(Operator::REMOVE);
        $operations[] = $operation;

        // Remove the ad on the server.
        $result = $adGroupAdService->mutate($operations);

        $adGroupAd = $result->getValue()[0];
        printf("Ad with ID %d was removed.\n", $adGroupAd->getAd()->getId());
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

RemoveAd::main();
