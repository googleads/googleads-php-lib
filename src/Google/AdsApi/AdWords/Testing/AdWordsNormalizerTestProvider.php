<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
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

namespace Google\AdsApi\AdWords\Testing;

/**
 * Provides test data for AdWords normalizer tests.
 */
class AdWordsNormalizerTestProvider
{

    /**
     * Gets a fake budget object for testing.
     *
     * @return FakeBudget the fake budget object
     */
    public static function getBudgetWithNoAmountObject()
    {
        $budget = new FakeBudget();
        $budget->setBudgetId(-1);
        $budget->setName('Interplanetary Cruise #57a058e71f2b9');

        return $budget;
    }

    /**
     * Gets a normalized fake budget for testing.
     *
     * @return array the normalized fake budget
     */
    public static function getNormalizedBudgetWithNoAmount()
    {
        return [
            'budgetId' => -1,
            'name' => 'Interplanetary Cruise #57a058e71f2b9'
        ];
    }

    /**
     * Gets a transformed, normalized fake budget for testing.
     *
     * @return array the transformed, normalized fake budget
     */
    public static function getTransformedNormalizedBudgetWithNoAmount()
    {
        return [
            'budgetId' => 'adwords',
            'name' => 'adwords'
        ];
    }

    /**
     * Gets a normalized fake budget with snake case attributes for testing.
     *
     * @return array the normalized fake budget
     */
    public static function getNormalizedBudgetWithSnakeCaseAttributes()
    {
        return [
            'budget_id' => -1,
            'name' => 'Interplanetary Cruise #57a058e71f2b9'
        ];
    }

    /**
     * Gets a fake money object for testing.
     *
     * @return FakeMoney the fake money object
     */
    public static function getMoneyObject()
    {
        $money = new FakeMoney();
        $money->setMicroAmount(50000000);

        return $money;
    }

    /**
     * Gets a normalized fake money for testing.
     *
     * @return array the normalized fake money
     */
    public static function getNormalizedMoney()
    {
        return [
            '@xsi:type' => 'ns1:FakeMoney',
            'microAmount' => 50000000
        ];
    }

    /**
     * Gets a decoded fake money for testing.
     *
     * @return array the decoded fake money
     */
    public static function getDecodedMoney()
    {
        return [
            '@xsi:type' => 'FakeMoney',
            'microAmount' => 50000000
        ];
    }

    /**
     * Gets a fake operand object with empty budget for testing.
     *
     * @return FakeOperand the fake operand object
     */
    public static function getOperandObjectWithEmptyBudget()
    {
        $budget = new FakeBudget();
        $operand = new FakeOperand();
        $operand->setFakeBudget($budget);
        $operand->setType('fake');

        return $operand;
    }

    /**
     * Gets a normalized fake operand with empty budget for testing.
     *
     * @return array the normalized fake operand
     */
    public static function getNormalizedOperandWithEmptyBudget()
    {
        return [
            'FakeBudget' => []
        ];
    }

    /**
     * Gets a fake budget object with all values set to 'adwords' for testing.
     *
     * @return FakeBudget the fake budget object
     */
    public static function getBudgetWithAllValuesAsAdwords()
    {
        $budget = new FakeBudget();
        $budget->setBudgetId('adwords');
        $budget->setName('adwords');

        return $budget;
    }

    /**
     * Gets a fake budget object with all properites set for testing.
     *
     * @return FakeBudget the fake budget object
     */
    public static function getBudgetWithAllProperties()
    {
        $budget = new FakeBudget();
        $budget->setBudgetId(-1);
        $budget->setName('Test Budget');

        $money = new FakeMoney();
        $money->setMicroAmount(50000000);
        $budget->setAmount($money);

        return $budget;
    }

    /**
     * Gets a normalized fake budget with all properties set for testing.
     *
     * @return array the normalized fake budget
     */
    public static function getNormalizedBudgetWithAllProperties()
    {
        return [
            'budgetId' => -1,
            'name' => 'Test Budget',
            'amount' => [
                '@xsi:type' => 'ns1:FakeMoney',
                'microAmount' => 50000000
            ]
        ];
    }

    /**
     * Gets a decoded fake budget with all properties set for testing.
     *
     * @return array the decoded fake budget
     */
    public static function getDecodedBudgetWithAllProperties()
    {
        return [
            'budgetId' => -1,
            'name' => 'Test Budget',
            'amount' => [
                '@xsi:type' => 'FakeMoney',
                'microAmount' => 50000000
            ]
        ];
    }

    /**
     * Gets a normalized fake budget with @ attributes for testing.
     *
     * @return array the normalized fake budget
     */
    public static function getNormalizedBudgetWithAttributes()
    {
        return [
            'budgetId' => -1,
            'name' => 'Interplanetary Cruise #57a058e71f2b9',
            '@attribute' => 'test'
        ];
    }

    /**
     * Gets a normalized fake money with not existing properties for testing.
     *
     * @return array the normalized fake money
     */
    public static function getNormalizedMoneyWithNotExistingProperties()
    {
        return [
            '@xsi:type' => 'ns1:FakeMoney',
            'microAmount' => 50000000,
            'macroAmount' => 200000000
        ];
    }

    /**
     * Gets a decoded fake money with not existing properties for testing.
     *
     * @return array the decoded fake money
     */
    public static function getDecodedMoneyWithNotExistingProperties()
    {
        return [
            '@xsi:type' => 'FakeMoney',
            'microAmount' => 50000000,
            'macroAmount' => 200000000
        ];
    }

    /**
     * Gets a fake mutate result object with one result.
     *
     * @return FakeMutateResult the fake mutate result object
     */
    public static function getMutateResultWithOneResult()
    {
        $budget = new FakeBudget();
        $budget->setBudgetId(1);
        $operand = new FakeOperand();
        $operand->setFakeBudget($budget);
        $mutateResult = new FakeMutateResult();
        $mutateResult->setResult([$operand]);

        return $mutateResult;
    }

    /**
     * Gets a decoded fake mutate result with one result for testing.
     *
     * @return array the decoded fake mutate result
     */
    public static function getDecodedMutateResultWithOneResult()
    {
        return [
            'result' => [
                'FakeBudget' => [
                    'budgetId' => 1
                ]
            ]
        ];
    }

    /**
     * Gets a fake mutate result object with an array of results.
     *
     * @return FakeMutateResult the fake mutate result object
     */
    public static function getMutateResultWithArrayOfResults()
    {
        $budget1 = new FakeBudget();
        $budget1->setBudgetId(1);
        $operand1 = new FakeOperand();
        $operand1->setFakeBudget($budget1);

        $budget2 = new FakeBudget();
        $budget2->setBudgetId(2);
        $operand2 = new FakeOperand();
        $operand2->setFakeBudget($budget2);

        $mutateResult = new FakeMutateResult();
        $mutateResult->setResult([$operand1, $operand2]);

        return $mutateResult;
    }

    /**
     * Gets a decoded fake mutate result with array of results for testing.
     *
     * @return array the decoded fake mutate result
     */
    public static function getDecodedMutateResultWithArrayOfResults()
    {
        return [
            'result' => [
                [
                    'FakeBudget' => [
                        'budgetId' => 1
                    ]
                ],
                [
                    'FakeBudget' => [
                        'budgetId' => 2
                    ]
                ]
            ]
        ];
    }

    /**
     * Gets a fake ad object with an array of one final URL.
     *
     * @return FakeAd the fake ad object
     */
    public static function getFakeAdWithOneFinalUrl()
    {
        $ad = new FakeAd();
        $ad->setFinalUrls(['http://adwords.google.com']);

        return $ad;
    }

    /**
     * Gets a normalized fake ad with array of one final URL for testing.
     *
     * @return array the normalized fake ad
     */
    public static function getNormalizedFakeAdWithOneFinalUrl()
    {
        return [
            'finalUrls' => ['http://adwords.google.com']
        ];
    }

    /**
     * Gets a fake ad object with an array of many final URLs.
     *
     * @return FakeAd the fake ad object
     */
    public static function getFakeAdWithManyFinalUrls()
    {
        $ad = new FakeAd();
        $ad->setFinalUrls(
            [
                'https://adwords.google.com',
                'https://mail.google.com',
                'https://drive.google.com'
            ]
        );

        return $ad;
    }

    /**
     * Gets a normalized fake ad with array of many final URLs for testing.
     *
     * @return array the normalized fake ad
     */
    public static function getNormalizedFakeAdWithManyFinalUrls()
    {
        return [
            'finalUrls' => [
                'https://adwords.google.com',
                'https://mail.google.com',
                'https://drive.google.com'
            ]
        ];
    }
}
