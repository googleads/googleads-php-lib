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

namespace Google\AdsApi\AdWords\Query\v201802;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `ServiceQueryWhereBuilder`.
 *
 * @see ServiceQueryWhereBuilder
 * @small
 */
class ServiceQueryWhereBuilderTest extends TestCase
{

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryWhereBuilder::createWithField
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage field name
     */
    public function testCreateWithFieldAsNull()
    {
        ServiceQueryWhereBuilder::createWithField(
            null,
            new ServiceQueryBuilder()
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryWhereBuilder::createWithField
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage field name
     */
    public function testCreateWithFieldAsEmptyString()
    {
        ServiceQueryWhereBuilder::createWithField(
            '',
            new ServiceQueryBuilder()
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryWhereBuilder::createWithField
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryWhereBuilder::__construct
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryWhereBuilder::buildWhere
     */
    public function testCreateWithField()
    {
        $builder = ServiceQueryWhereBuilder::createWithField(
            'Id',
            new ServiceQueryBuilder()
        );
        $builder->notEqualTo('0');

        $where = $builder->buildWhere();
        $this->assertEquals('Id != \'0\'', $where);
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryWhereBuilder::createWithField
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryWhereBuilder::copyFrom
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryWhereBuilder::__construct
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryWhereBuilder::buildWhere
     */
    public function testCopyFromShouldCopyPartialExpressions()
    {
        $builder = ServiceQueryWhereBuilder::createWithField(
            'Id',
            new ServiceQueryBuilder()
        );

        $copyBuilder = ServiceQueryWhereBuilder::copyFrom(
            $builder,
            new ServiceQueryBuilder()
        );
        $copyBuilder->notEqualTo('0');

        $where = $copyBuilder->buildWhere();
        $this->assertEquals('Id != \'0\'', $where);
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryWhereBuilder::createWithField
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryWhereBuilder::copyFrom
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryWhereBuilder::__construct
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryWhereBuilder::buildWhere
     */
    public function testCopyFromShouldCopyCompleteExpressions()
    {
        $whereBuilder = ServiceQueryWhereBuilder::createWithField(
            'Id',
            new ServiceQueryBuilder()
        );
        $whereBuilder->notEqualTo('0');

        $copyWhereBuilder = ServiceQueryWhereBuilder::copyFrom(
            $whereBuilder,
            new ServiceQueryBuilder()
        );

        $where = $copyWhereBuilder->buildWhere();
        $this->assertEquals('Id != \'0\'', $where);
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryWhereBuilder::createWithField
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryWhereBuilder::copyFrom
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryWhereBuilder::__construct
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryWhereBuilder::buildWhere
     */
    public function testCopyFromShouldOverwritePreviousExpression()
    {
        $whereBuilder = ServiceQueryWhereBuilder::createWithField(
            'Id',
            new ServiceQueryBuilder()
        );
        $whereBuilder->notEqualTo('0');

        $copyWhereBuilder = ServiceQueryWhereBuilder::copyFrom(
            $whereBuilder,
            new ServiceQueryBuilder()
        );
        $copyWhereBuilder->notEqualTo('9223372036854775807');

        $where = $copyWhereBuilder->buildWhere();
        $this->assertEquals('Id != \'9223372036854775807\'', $where);
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryWhereBuilder::createWithField
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryWhereBuilder::copyFrom
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryWhereBuilder::__construct
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryWhereBuilder::buildWhere
     */
    public function testCopyFromShouldNotShareQueryBuilder()
    {
        $queryBuilder1 = new ServiceQueryBuilder();
        $whereBuilder = ServiceQueryWhereBuilder::createWithField(
            'Id',
            $queryBuilder1
        );

        $queryBuilder2 = new ServiceQueryBuilder();
        $copyWhereBuilder = ServiceQueryWhereBuilder::copyFrom(
            $whereBuilder,
            $queryBuilder2
        );
        $returnedQueryBuilder = $copyWhereBuilder
            ->notEqualTo('9223372036854775807');

        $this->assertNotSame($queryBuilder1, $returnedQueryBuilder);
        $this->assertSame($queryBuilder2, $returnedQueryBuilder);
    }
}
