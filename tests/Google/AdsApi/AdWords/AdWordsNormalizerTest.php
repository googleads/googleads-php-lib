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

namespace Google\AdsApi\AdWords;

use Google\AdsApi\AdWords\Testing\AdWordsNormalizerTestProvider;
use Google\AdsApi\AdWords\Testing\FakeAd;
use Google\AdsApi\AdWords\Testing\FakeBudget;
use Google\AdsApi\AdWords\Testing\FakeMoney;
use Google\AdsApi\AdWords\Testing\FakeMutateResult;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Unit tests for `AdWordsNormalizer`.
 *
 * @see AdWordsNormalizer
 * @small
 */
class AdWordsNormalizerTest extends TestCase
{

    private $serializer;

    /**
     * @see PHPUnit\Framework\TestCase::setUp
     */
    protected function setUp()
    {
        $this->serializer = new Serializer(
            [new AdWordsNormalizer(), new ArrayDenormalizer()]
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsNormalizer::normalize
     */
    public function testNormalizeObjectWithXsiType()
    {
        $actualNormalized = $this->serializer->normalize(
            AdWordsNormalizerTestProvider::getMoneyObject()
        );

        $this->assertSame(
            AdWordsNormalizerTestProvider::getNormalizedMoney(),
            $actualNormalized
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsNormalizer::normalize
     */
    public function testNormalizedNestedObject()
    {
        $actualNormalized = $this->serializer->normalize(
            AdWordsNormalizerTestProvider::getBudgetWithAllProperties()
        );

        $this->assertSame(
            AdWordsNormalizerTestProvider::getNormalizedBudgetWithAllProperties(
            ),
            $actualNormalized
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsNormalizer::normalize
     */
    public function testNormalizeObjectWithPrivateGetter()
    {
        $actualNormalized = $this->serializer->normalize(
            AdWordsNormalizerTestProvider::getOperandObjectWithEmptyBudget()
        );

        $this->assertSame(
            AdWordsNormalizerTestProvider::getNormalizedOperandWithEmptyBudget(
            ),
            $actualNormalized
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsNormalizer::normalize
     */
    public function testNormalizeObjectWithNullFieldsAreSkipped()
    {
        $actualNormalized = $this->serializer->normalize(
            AdWordsNormalizerTestProvider::getBudgetWithNoAmountObject()
        );

        $this->assertSame(
            AdWordsNormalizerTestProvider::getNormalizedBudgetWithNoAmount(),
            $actualNormalized
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsNormalizer::normalize
     */
    public function testSetNormalizeCallback()
    {
        $normalizer = new AdWordsNormalizer();
        $normalizer->setCallbacks(
            [
                'normalize' =>
                    function ($value, $type) {
                        if ($value !== null) {
                            return 'adwords';
                        }
                    }
            ]
        );
        $serializer = new Serializer([$normalizer]);
        $actualNormalized = $serializer->normalize(
            AdWordsNormalizerTestProvider::getBudgetWithNoAmountObject()
        );

        $this->assertSame(
            AdWordsNormalizerTestProvider::
            getTransformedNormalizedBudgetWithNoAmount(),
            $actualNormalized
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsNormalizer::normalize
     * @expectedException InvalidArgumentException
     */
    public function testSetInvalidCallbacks()
    {
        $normalizer = new AdWordsNormalizer();
        $normalizer->setCallbacks(
            [
                'normalize' =>
                    function ($value, $type, $format) {
                        return $value;
                    }
            ]
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsNormalizer::normalize
     */
    public function testNormalizeObjectWithArrayOfScalars()
    {
        $actualNormalized = $this->serializer->normalize(
            AdWordsNormalizerTestProvider::getFakeAdWithOneFinalUrl()
        );

        $this->assertSame(
            AdWordsNormalizerTestProvider::getNormalizedFakeAdWithOneFinalUrl(),
            $actualNormalized
        );

        $actualNormalized = $this->serializer->normalize(
            AdWordsNormalizerTestProvider::getFakeAdWithManyFinalUrls()
        );

        $this->assertSame(
            AdWordsNormalizerTestProvider::getNormalizedFakeAdWithManyFinalUrls(
            ),
            $actualNormalized
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsNormalizer::denormalize
     */
    public function testDenormalizeObjectUsingXsiType()
    {
        $expectedMoney = AdWordsNormalizerTestProvider::getMoneyObject();
        $actualMoney = $this->serializer->denormalize(
            AdWordsNormalizerTestProvider::getDecodedMoney(),
            FakeMoney::class
        );

        $this->assertSame(
            $expectedMoney->getMicroAmount(),
            $actualMoney->getMicroAmount()
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsNormalizer::denormalize
     */
    public function testDenormalizeObjectWithArrayOfScalars()
    {
        $expectedAd = AdWordsNormalizerTestProvider::getFakeAdWithOneFinalUrl();
        $actualAd = $this->serializer->denormalize(
            AdWordsNormalizerTestProvider::getNormalizedFakeAdWithOneFinalUrl(),
            FakeAd::class
        );
        $this->assertSame(
            $expectedAd->getFinalUrls(),
            $actualAd->getFinalUrls()
        );

        $expectedAd =
            AdWordsNormalizerTestProvider::getFakeAdWithManyFinalUrls();
        $actualAd = $this->serializer->denormalize(
            AdWordsNormalizerTestProvider::getNormalizedFakeAdWithManyFinalUrls(
            ),
            FakeAd::class
        );
        $this->assertSame(
            $expectedAd->getFinalUrls(),
            $actualAd->getFinalUrls()
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsNormalizer::denormalize
     */
    public function testDenormalizeNestedObject()
    {
        $expectedBudget =
            AdWordsNormalizerTestProvider::getBudgetWithAllProperties();
        $actualBudget = $this->serializer->denormalize(
            AdWordsNormalizerTestProvider::getDecodedBudgetWithAllProperties(),
            FakeBudget::class
        );

        $this->assertSame(
            $expectedBudget->getBudgetId(),
            $actualBudget->getBudgetId()
        );
        $this->assertSame($expectedBudget->getName(), $actualBudget->getName());
        $this->assertSame(
            $expectedBudget->getAmount()->getMicroAmount(),
            $actualBudget->getAmount()->getMicroAmount()
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsNormalizer::denormalize
     */
    public function testDenormalizeObjectWhoseMemberIsArrayOfOneObject()
    {
        $expectedMutateResult =
            AdWordsNormalizerTestProvider::getMutateResultWithOneResult();
        $actualMutateResult = $this->serializer->denormalize(
            AdWordsNormalizerTestProvider::getDecodedMutateResultWithOneResult(
            ),
            FakeMutateResult::class
        );

        $this->assertCount(
            count($expectedMutateResult->getResult()),
            $actualMutateResult->getResult()
        );
        $this->assertSame(
            $expectedMutateResult->getResult()[0]->getFakeBudget()->getBudgetId(
            ),
            $actualMutateResult->getResult()[0]->getFakeBudget()->getBudgetId()
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsNormalizer::denormalize
     */
    public function testDenormalizeObjectWhoseMemberIsArrayOfManyObjects()
    {
        $expectedMutateResult =
            AdWordsNormalizerTestProvider::getMutateResultWithArrayOfResults();
        $actualMutateResult = $this->serializer->denormalize(
            AdWordsNormalizerTestProvider::
            getDecodedMutateResultWithArrayOfResults(),
            FakeMutateResult::class
        );

        $this->assertCount(
            count($expectedMutateResult->getResult()),
            $actualMutateResult->getResult()
        );
        $this->assertSame(
            $expectedMutateResult->getResult()[0]->getFakeBudget()->getBudgetId(
            ),
            $actualMutateResult->getResult()[0]->getFakeBudget()->getBudgetId()
        );
        $this->assertSame(
            $expectedMutateResult->getResult()[1]->getFakeBudget()->getBudgetId(
            ),
            $actualMutateResult->getResult()[1]->getFakeBudget()->getBudgetId()
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsNormalizer::denormalize
     */
    public function testDenormalizeObjectUsingCallback()
    {
        $normalizer = new AdWordsNormalizer();
        $normalizer->setCallbacks(
            [
                'denormalize' => function ($value, $type) {
                    if ($value !== null) {
                        return 'adwords';
                    }
                }
            ]
        );
        $serializer = new Serializer([$normalizer]);

        $expectedBudget =
            AdWordsNormalizerTestProvider::getBudgetWithAllValuesAsAdwords();
        $actualBudget = $serializer->denormalize(
            AdWordsNormalizerTestProvider::
            getTransformedNormalizedBudgetWithNoAmount(),
            FakeBudget::class
        );

        $this->assertSame(
            $expectedBudget->getBudgetId(),
            $actualBudget->getBudgetId()
        );
        $this->assertSame($expectedBudget->getName(), $actualBudget->getName());
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsNormalizer::denormalize
     * @expectedException UnexpectedValueException
     */
    public function testDenormalizeObjectWithNotExistingProperties()
    {
        $this->serializer->denormalize(
            AdWordsNormalizerTestProvider::
            getDecodedMoneyWithNotExistingProperties(),
            FakeMoney::class
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsNormalizer::denormalize
     */
    public function testDenormalizeObjectWithNameConverter()
    {
        $serializer = new Serializer(
            [
                new AdWordsNormalizer(
                    null,
                    new CamelCaseToSnakeCaseNameConverter()
                ),
                new ArrayDenormalizer()
            ]
        );
        $expectedBudget =
            AdWordsNormalizerTestProvider::getBudgetWithNoAmountObject();
        $actualBudget = $serializer->denormalize(
            AdWordsNormalizerTestProvider::
            getNormalizedBudgetWithSnakeCaseAttributes(),
            FakeBudget::class
        );

        $this->assertSame(
            $expectedBudget->getBudgetId(),
            $actualBudget->getBudgetId()
        );
        $this->assertSame($expectedBudget->getName(), $actualBudget->getName());
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsNormalizer::denormalize
     */
    public function testDenormalizeObjectWithAttributesSkipped()
    {
        $expectedBudget =
            AdWordsNormalizerTestProvider::getBudgetWithNoAmountObject();
        $actualBudget = $this->serializer->denormalize(
            AdWordsNormalizerTestProvider::getNormalizedBudgetWithAttributes(),
            FakeBudget::class
        );

        $this->assertSame(
            $expectedBudget->getBudgetId(),
            $actualBudget->getBudgetId()
        );
        $this->assertSame($expectedBudget->getName(), $actualBudget->getName());
    }

    /**
     * @param array $value the array to evaluate
     * @param bool $expected the expected result of isOneOrMany()
     * @covers       Google\AdsApi\AdWords\AdWordsNormalizer::isOneOrMany
     * @dataProvider isOneOrManyProvider
     */
    public function testIsOneOrMany(array $value, $expected)
    {
        $result = AdWordsNormalizer::isOneOrMany($value);
        $this->assertSame($expected, $result);
    }

    /**
     * Provides arrays and the expected value of
     * AdWordsNormalizer::isOneOrMany().
     *
     * @return array an array or arrays of array and booleans
     */
    public function isOneOrManyProvider()
    {
        $data = [];

        // One object.
        $data[] = [['name' => 'pedals', 'animal' => 'bear'], true];
        $data[] = [['name' => 'sheep', 'animal' => 'sheep'], true];
        $data[] =
            [['name' => 'sheep', 'animal' => 'sheep', 2 => 'bravo'], true];
        $data[] = [[3 => 'bear'], true];
        $data[] = [['1' => 'bear'], true];

        // List of objects.
        $data[] = [[], false];
        $data[] = [['bear', 'sheep', 'sloth'], false];
        $data[] = [['0' => 'cow'], false];
        $data[] = [[0 => 'cow'], false];

        return $data;
    }
}
