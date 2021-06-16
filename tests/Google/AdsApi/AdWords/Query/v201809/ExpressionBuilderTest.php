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

namespace Google\AdsApi\AdWords\Query\v201809;

use BadFunctionCallException;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `ExpressionBuilder`.
 *
 * @see ExpressionBuilder
 * @small
 */
class ExpressionBuilderTest extends TestCase
{

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::__construct
     */
    public function testConstructorWithEmptyFieldName()
    {
        $this->expectExceptionMessage("field name");
        $this->expectException(InvalidArgumentException::class);
        $queryBuilder = new ServiceQueryBuilder();
        $queryBuilder->where('');
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::buildExpression
     */
    public function testBuildExpressionWithoutSettingOperator()
    {
        $this->expectExceptionMessage("operator must be set");
        $this->expectException(BadFunctionCallException::class);
        $delegate = new ExpressionBuilder('Id');
        $delegate->buildExpression();
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::__construct
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::equalTo
     */
    public function testEqualToSupportForChaining()
    {
        $queryBuilder = new ServiceQueryBuilder();

        // The `ExpressionBuilder::equalTo()` function is supposed to return the same
        // instance of the `ServiceQueryBuilder` for chaining.
        // For example:
        //     $queryBuilder
        //         ->where('Id')->equalTo('9223372036854775807')
        //         ->limit(0, 1)

        $this->assertSame(
            $queryBuilder,
            $queryBuilder->where('Id')->equalTo('9223372036854775807')
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::equalTo
     */
    public function testEqualToEmptyString()
    {
        $this->expectExceptionMessage("value string");
        $this->expectException(InvalidArgumentException::class);
        $queryBuilder = new ServiceQueryBuilder();
        $queryBuilder->where('Id')->equalTo('');
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::equalTo
     */
    public function testEqualToNull()
    {
        $this->expectExceptionMessage("value string");
        $this->expectException(InvalidArgumentException::class);
        $queryBuilder = new ServiceQueryBuilder();
        $queryBuilder->where('Id')->equalTo(null);
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::notEqualTo
     */
    public function testNotEqualToZeroInt()
    {
        $queryBuilder = new ServiceQueryBuilder();
        $query = $queryBuilder
            ->select(['Id'])
            ->where('Id')->notEqualTo(0)
            ->build();
        $this->assertEquals(
            'SELECT Id WHERE Id != 0',
            "$query"
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::notEqualTo
     */
    public function testNotEqualToZeroString()
    {
        $queryBuilder = new ServiceQueryBuilder();
        $query = $queryBuilder
            ->select(['Id'])
            ->where('Id')->notEqualTo('0')
            ->build();
        $this->assertEquals(
            'SELECT Id WHERE Id != \'0\'',
            "$query"
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::notEqualTo
     */
    public function testNotEqualTo()
    {
        $queryBuilder = new ServiceQueryBuilder();
        $query = $queryBuilder
            ->select(['Id'])
            ->where('Id')->notEqualTo('9223372036854775807')
            ->build();
        $this->assertEquals(
            'SELECT Id WHERE Id != \'9223372036854775807\'',
            "$query"
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::greaterThan
     */
    public function testGreaterThan()
    {
        $queryBuilder = new ServiceQueryBuilder();
        $query = $queryBuilder
            ->select(['Id'])
            ->where('Id')->greaterThan('9223372036854775807')
            ->build();
        $this->assertEquals(
            'SELECT Id WHERE Id > \'9223372036854775807\'',
            "$query"
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::greaterThanOrEqualTo
     */
    public function testGreaterThanOrEqualTo()
    {
        $queryBuilder = new ServiceQueryBuilder();
        $query = $queryBuilder
            ->select(['Id'])
            ->where('Id')->greaterThanOrEqualTo('9223372036854775807')
            ->build();
        $this->assertEquals(
            'SELECT Id WHERE Id >= \'9223372036854775807\'',
            "$query"
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::lessThan
     */
    public function testLessThan()
    {
        $queryBuilder = new ServiceQueryBuilder();
        $query = $queryBuilder
            ->select(['Id'])
            ->where('Id')->lessThan('9223372036854775807')
            ->build();
        $this->assertEquals(
            'SELECT Id WHERE Id < \'9223372036854775807\'',
            "$query"
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::lessThanOrEqualTo
     */
    public function tesLessThanOrEqualTo()
    {
        $queryBuilder = new ServiceQueryBuilder();
        $query = $queryBuilder
            ->select(['Id'])
            ->where('Id')->lessThanOrEqualTo('9223372036854775807')
            ->build();
        $this->assertEquals(
            'SELECT Id WHERE Id <= \'9223372036854775807\'',
            "$query"
        );
    }


    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::startsWith
     */
    public function testStartsWith()
    {
        $queryBuilder = new ServiceQueryBuilder();
        $query = $queryBuilder
            ->select(['Name'])
            ->where('Name')->startsWith('O\'Reilly')
            ->build();
        $this->assertEquals(
            'SELECT Name WHERE Name STARTS_WITH \'O\\\'Reilly\'',
            "$query"
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::startsWithIgnoreCase
     */
    public function testStartsWithIgnoreCase()
    {
        $queryBuilder = new ServiceQueryBuilder();
        $query = $queryBuilder
            ->select(['Name'])
            ->where('Name')->startsWithIgnoreCase('O\'Reilly')
            ->build();
        $this->assertEquals(
            'SELECT Name WHERE Name STARTS_WITH_IGNORE_CASE \'O\\\'Reilly\'',
            "$query"
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::contains
     */
    public function testContains()
    {
        $queryBuilder = new ServiceQueryBuilder();
        $query = $queryBuilder
            ->select(['Name'])
            ->where('Name')->contains('O\'Reilly')
            ->build();
        $this->assertEquals(
            'SELECT Name WHERE Name CONTAINS \'O\\\'Reilly\'',
            "$query"
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::containsIgnoreCase
     */
    public function testContainsIgnoreCase()
    {
        $queryBuilder = new ServiceQueryBuilder();
        $query = $queryBuilder
            ->select(['Name'])
            ->where('Name')->containsIgnoreCase('O\'Reilly')
            ->build();
        $this->assertEquals(
            'SELECT Name WHERE Name CONTAINS_IGNORE_CASE \'O\\\'Reilly\'',
            "$query"
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::doesNotContain
     */
    public function testDoesNotContain()
    {
        $queryBuilder = new ServiceQueryBuilder();
        $query = $queryBuilder
            ->select(['Name'])
            ->where('Name')->doesNotContain('O\'Reilly')
            ->build();
        $this->assertEquals(
            'SELECT Name WHERE Name DOES_NOT_CONTAIN \'O\\\'Reilly\'',
            "$query"
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::doesNotContainIgnoreCase
     */
    public function testDoesNotContainIgnoreCase()
    {
        $queryBuilder = new ServiceQueryBuilder();
        $query = $queryBuilder
            ->select(['Name'])
            ->where('Name')->doesNotContainIgnoreCase('O\'Reilly')
            ->build();
        $this->assertEquals(
            'SELECT Name WHERE Name DOES_NOT_CONTAIN_IGNORE_CASE' .
            ' \'O\\\'Reilly\'',
            "$query"
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::in
     */
    public function testIn()
    {
        $queryBuilder = new ServiceQueryBuilder();
        $query = $queryBuilder
            ->select(['Name'])
            ->where('LabelNames')->in(['O\'Reilly', 123])
            ->build();
        $this->assertEquals(
            'SELECT Name WHERE LabelNames IN [\'O\\\'Reilly\', 123]',
            "$query"
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::in
     */
    public function testInWithEmptyArray()
    {
        $this->expectExceptionMessage("list");
        $this->expectException(InvalidArgumentException::class);
        $queryBuilder = new ServiceQueryBuilder();
        $queryBuilder
            ->select(['Name'])
            ->where('LabelNames')->in([])
            ->build();
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::notIn
     */
    public function testNotIn()
    {
        $queryBuilder = new ServiceQueryBuilder();
        $query = $queryBuilder
            ->select(['Name'])
            ->where('LabelNames')->notIn(['O\'Reilly', 123])
            ->build();
        $this->assertEquals(
            'SELECT Name WHERE LabelNames NOT_IN [\'O\\\'Reilly\', 123]',
            "$query"
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::containsAny
     */
    public function testContainsAny()
    {
        $queryBuilder = new ServiceQueryBuilder();
        $query = $queryBuilder
            ->select(['Name'])
            ->where('LabelNames')->containsAny(['O\'Reilly', 123])
            ->build();
        $this->assertEquals(
            'SELECT Name WHERE LabelNames CONTAINS_ANY [\'O\\\'Reilly\', 123]',
            "$query"
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::containsNone
     */
    public function testContainsNone()
    {
        $queryBuilder = new ServiceQueryBuilder();
        $query = $queryBuilder
            ->select(['Name'])
            ->where('LabelNames')->containsNone(['O\'Reilly', 123])
            ->build();
        $this->assertEquals(
            'SELECT Name WHERE LabelNames CONTAINS_NONE [\'O\\\'Reilly\', 123]',
            "$query"
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::containsAll
     */
    public function testContainsAll()
    {
        $queryBuilder = new ServiceQueryBuilder();
        $query = $queryBuilder
            ->select(['Name'])
            ->where('LabelNames')->containsAll(['O\'Reilly', 123])
            ->build();
        $this->assertEquals(
            'SELECT Name WHERE LabelNames CONTAINS_ALL [\'O\\\'Reilly\', 123]',
            "$query"
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::startsWithIgnoreCase
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::doesNotContainIgnoreCase
     */
    public function testCombining2SingleOperators()
    {
        $queryBuilder = new ServiceQueryBuilder();
        $query = $queryBuilder
            ->select(['Name'])
            ->where('Name')->startsWithIgnoreCase('O\'Reilly')
            ->where('Name')->doesNotContainIgnoreCase('test')
            ->build();
        $this->assertEquals(
            'SELECT Name WHERE Name STARTS_WITH_IGNORE_CASE \'O\\\'Reilly\'' .
            ' AND Name DOES_NOT_CONTAIN_IGNORE_CASE \'test\'',
            "$query"
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::containsAll
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::containsNone
     */
    public function testCombining2ListOperators()
    {
        $queryBuilder = new ServiceQueryBuilder();
        $query = $queryBuilder
            ->select(['Name'])
            ->where('LabelNames')->containsAll(['O\'Reilly', 123])
            ->where('LabelNames')->containsNone(['test', 456])
            ->build();
        $this->assertEquals(
            'SELECT Name WHERE LabelNames CONTAINS_ALL [\'O\\\'Reilly\', 123]' .
            ' AND LabelNames CONTAINS_NONE [\'test\', 456]',
            "$query"
        );
    }



    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::startsWithIgnoreCase
     * @covers \Google\AdsApi\AdWords\Query\v201809\ExpressionBuilder::containsNone
     */
    public function testCombiningSingleAndListOperators()
    {
        $queryBuilder = new ServiceQueryBuilder();
        $query = $queryBuilder
            ->select(['Name'])
            ->where('Name')->startsWithIgnoreCase('O\'Reilly')
            ->where('LabelNames')->containsNone(['test', 456])
            ->build();
        $this->assertEquals(
            'SELECT Name WHERE Name STARTS_WITH_IGNORE_CASE \'O\\\'Reilly\'' .
            ' AND LabelNames CONTAINS_NONE [\'test\', 456]',
            "$query"
        );
    }
}
