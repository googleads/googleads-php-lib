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

namespace Google\AdsApi\Examples\AdWords\v201809\BasicOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201809\cm\AdGroupCriterionOperation;
use Google\AdsApi\AdWords\v201809\cm\AdGroupCriterionService;
use Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion;
use Google\AdsApi\AdWords\v201809\cm\Criterion;
use Google\AdsApi\AdWords\v201809\cm\Operator;
use Google\AdsApi\AdWords\v201809\cm\UrlList;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example updates the final URL of a keyword. To get keywords, run
 * GetKeywords.php.
 */
class UpdateKeyword
{

    const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';
    const CRITERION_ID = 'INSERT_KEYWORD_CRITERION_ID_HERE';

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $adGroupId,
        $criterionId
    ) {
        $adGroupCriterionService = $adWordsServices->get($session, AdGroupCriterionService::class);

        $operations = [];

        // Create ad group criterion.
        $adGroupCriterion = new BiddableAdGroupCriterion();
        $adGroupCriterion->setAdGroupId($adGroupId);
        // Create criterion using an existing ID. Use the base class Criterion
        // instead of Keyword to avoid having to set keyword-specific fields.
        $adGroupCriterion->setCriterion(new Criterion($criterionId));

        // Update final URL.
        $adGroupCriterion->setFinalUrls(
            new UrlList(['http://www.example.com/new'])
        );

        // Create ad group criterion operation and add it to the list.
        $operation = new AdGroupCriterionOperation();
        $operation->setOperand($adGroupCriterion);
        $operation->setOperator(Operator::SET);
        $operations[] = $operation;

        // Update the keyword on the server.
        $result = $adGroupCriterionService->mutate($operations);

        $adGroupCriterion = $result->getValue()[0];
        printf(
            "Keyword with ID %d has updated final URL '%s'.\n",
            $adGroupCriterion->getCriterion()->getId(),
            $adGroupCriterion->getFinalUrls()->getUrls()[0]
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
            intval(self::CRITERION_ID)
        );
    }
}

UpdateKeyword::main();
