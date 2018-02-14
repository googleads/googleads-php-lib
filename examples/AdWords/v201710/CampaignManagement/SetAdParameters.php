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

namespace Google\AdsApi\Examples\AdWords\v201710\CampaignManagement;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201710\cm\AdParam;
use Google\AdsApi\AdWords\v201710\cm\AdParamOperation;
use Google\AdsApi\AdWords\v201710\cm\AdParamService;
use Google\AdsApi\AdWords\v201710\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example sets ad parameters for a keyword. To get keywords, run
 * BasicOperations/GetKeywords.php.
 */
class SetAdParameters
{

    const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';
    const KEYWORD_ID = 'INSERT_KEYWORD_ID_HERE';

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $adGroupId,
        $keywordId
    ) {
        $adParamService = $adWordsServices->get($session, AdParamService::class);

        // Create ad parameters.
        $adParam1 = new AdParam($adGroupId, $keywordId, '100', 1);
        $adParam2 = new AdParam($adGroupId, $keywordId, '$40', 2);

        $adParamOperations = [];

        $adParamOperation1 = new AdParamOperation();
        $adParamOperation1->setOperand($adParam1);
        $adParamOperation1->setOperator(Operator::SET);
        $adParamOperations[] = $adParamOperation1;

        $adParamOperation2 = new AdParamOperation();
        $adParamOperation2->setOperand($adParam2);
        $adParamOperation2->setOperator(Operator::SET);
        $adParamOperations[] = $adParamOperation2;

        // Add ad params on the server.
        $adParams = $adParamService->mutate($adParamOperations);

        // Print out some information about added ad parameters.
        foreach ($adParams as $adParam) {
            printf(
                "Ad parameter with insertion text '%s' and parameter index %d was set.\n",
                $adParam->getInsertionText(),
                $adParam->getParamIndex()
            );
        }
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
            intval(self::KEYWORD_ID)
        );
    }
}

SetAdParameters::main();
