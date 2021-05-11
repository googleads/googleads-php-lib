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

namespace Google\AdsApi\Examples\AdWords\v201809\ErrorHandling;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201809\cm\AdGroupCriterionOperation;
use Google\AdsApi\AdWords\v201809\cm\AdGroupCriterionService;
use Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion;
use Google\AdsApi\AdWords\v201809\cm\Keyword;
use Google\AdsApi\AdWords\v201809\cm\KeywordMatchType;
use Google\AdsApi\AdWords\v201809\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example demonstrates how to handle partial failures when adding
 * keywords. To get ad groups run BasicOperations/GetAdGroups.php.
 */
class HandlePartialFailures
{

    const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $adGroupId
    ) {
        $adGroupCriterionService = $adWordsServices->get($session, AdGroupCriterionService::class);

        $keywords = [];

        $keyword = new Keyword();
        $keyword->setText('mars cruise');
        $keyword->setMatchType(KeywordMatchType::BROAD);
        $keywords[] = $keyword;

        $keyword = new Keyword();
        $keyword->setText('inv@lid cruise');
        $keyword->setMatchType(KeywordMatchType::BROAD);
        $keywords[] = $keyword;

        $keyword = new Keyword();
        $keyword->setText('venus cruise');
        $keyword->setMatchType(KeywordMatchType::BROAD);
        $keywords[] = $keyword;

        $keyword = new Keyword();
        $keyword->setText('b(a)d keyword cruise');
        $keyword->setMatchType(KeywordMatchType::BROAD);
        $keywords[] = $keyword;

        // Create ad group criteria and ad group criterion operations.
        $operations = [];
        foreach ($keywords as $keyword) {
            $adGroupCriterion = new BiddableAdGroupCriterion();
            $adGroupCriterion->setAdGroupId($adGroupId);
            $adGroupCriterion->setCriterion($keyword);

            $operation = new AdGroupCriterionOperation();
            $operation->setOperand($adGroupCriterion);
            $operation->setOperator(Operator::ADD);

            $operations[] = $operation;
        }

        // Create ad group criteria on the server.
        $result = $adGroupCriterionService->mutate($operations);

        // Print out some information about ad group criteria.
        foreach ($result->getValue() as $adGroupCriterion) {
            if ($adGroupCriterion->getCriterion() !== null) {
                printf(
                    "Keyword with text '%s', match type '%s', and ID %d was added.\n",
                    $adGroupCriterion->getCriterion()->getText(),
                    $adGroupCriterion->getCriterion()->getMatchType(),
                    $adGroupCriterion->getCriterion()->getId()
                );
            }
        }

        // Check for partial failures.
        if ($result->getPartialFailureErrors() !== null) {
            foreach ($result->getPartialFailureErrors() as $error) {
                // Get the index of the failed operation from the error's field path
                // elements.
                $fieldPathElements = $error->getFieldPathElements();
                $firstFieldPathElement = null;
                if ($fieldPathElements !== null && count($fieldPathElements) > 0) {
                    $firstFieldPathElement = $fieldPathElements[0];
                }
                if ($firstFieldPathElement !== null
                    && $firstFieldPathElement->getField() === 'operations'
                    && $firstFieldPathElement->getIndex() !== null) {
                    $index = $firstFieldPathElement->getIndex();
                    $adGroupCriterion = $operations[$index]->getOperand();
                    printf(
                        "Keyword with text '%s' and match type '%s' failed with error '%s'.\n",
                        $adGroupCriterion->getCriterion()->getText(),
                        $adGroupCriterion->getCriterion()->getMatchType(),
                        $error->getErrorString()
                    );
                } else {
                    printf(
                        "Operations failed with error '%s'.\n",
                        $error->getErrorString()
                    );
                }
            }
        }
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        // Partial failure behavior is also enabled in this example.
        $session =
            (new AdWordsSessionBuilder())->fromFile()->withOAuth2Credential($oAuth2Credential)->enablePartialFailure()
                ->build();
        self::runExample(
            new AdWordsServices(),
            $session,
            intval(self::AD_GROUP_ID)
        );
    }
}

HandlePartialFailures::main();
