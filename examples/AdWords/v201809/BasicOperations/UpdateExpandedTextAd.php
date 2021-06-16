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
use Google\AdsApi\AdWords\v201809\cm\AdOperation;
use Google\AdsApi\AdWords\v201809\cm\AdService;
use Google\AdsApi\AdWords\v201809\cm\ExpandedTextAd;
use Google\AdsApi\AdWords\v201809\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example updates an expanded text ad. To get expanded text ads, run
 * GetExpandedTextAds.php.
 */
class UpdateExpandedTextAd
{

    const AD_ID = 'INSERT_AD_ID_HERE';

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $adId
    ) {
        $adService = $adWordsServices->get($session, AdService::class);

        $operations = [];
        // Creates an expanded text ad using the provided ad ID.
        $expandedTextAd = new ExpandedTextAd();
        $expandedTextAd->setId($adId);
        // Updates some properties of the expanded text ad.
        $expandedTextAd->setHeadlinePart1('Cruise to Pluto #' . uniqid());
        $expandedTextAd->setHeadlinePart2('Tickets on sale now');
        $expandedTextAd->setDescription('Best space cruise ever.');
        $expandedTextAd->setFinalUrls(['http://www.example.com/']);
        $expandedTextAd->setFinalMobileUrls(['http://www.example.com/mobile']);

        // Creates ad group ad operation and add it to the list.
        $operation = new AdOperation();
        $operation->setOperand($expandedTextAd);
        $operation->setOperator(Operator::SET);
        $operations[] = $operation;

        // Updates the ad on the server.
        $result = $adService->mutate($operations);
        $updatedAd = $result->getValue()[0];

        // Prints out some information.
        printf(
            'Expanded text ad with ID %d was updated.%s',
            $updatedAd->getId(),
            PHP_EOL
        );
        printf(
            'Headline part 1 is "%1$s".%4$sHeadline part 2 is "%2$s".'
             . '%4$sDescription is "%3$s".%4$s',
            $updatedAd->getHeadlinePart1(),
            $updatedAd->getHeadlinePart2(),
            $updatedAd->getDescription(),
            PHP_EOL
        );
        printf(
            'Final URL is "%1$s".%3$sFinal mobile URL is "%2$s".%3$s',
            $updatedAd->getFinalUrls()[0],
            $updatedAd->getFinalMobileUrls()[0],
            PHP_EOL
        );
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
            intval(self::AD_ID)
        );
    }
}

UpdateExpandedTextAd::main();
