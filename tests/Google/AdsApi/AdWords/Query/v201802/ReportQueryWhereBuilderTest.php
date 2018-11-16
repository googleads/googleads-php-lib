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
 * Unit tests for `ReportQueryWhereBuilder`.
 *
 * @see ReportQueryWhereBuilder
 * @small
 */
class ReportQueryWhereBuilderTest extends TestCase
{

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ReportQueryWhereBuilder::createWithField
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage field name
     */
    public function testCreateWithFieldAsNull()
    {
        ReportQueryWhereBuilder::createWithField(
            null,
            new ReportQueryBuilder()
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ReportQueryWhereBuilder::createWithField
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage field name
     */
    public function testCreateWithFieldAsEmptyString()
    {
        ReportQueryWhereBuilder::createWithField(
            '',
            new ReportQueryBuilder()
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ReportQueryWhereBuilder::createWithField
     * @covers Google\AdsApi\AdWords\Query\v201802\ReportQueryWhereBuilder::__construct
     * @covers Google\AdsApi\AdWords\Query\v201802\ReportQueryWhereBuilder::buildWhere
     */
    public function testCreateWithField()
    {
        $builder = ReportQueryWhereBuilder::createWithField(
            'Id',
            new ReportQueryBuilder()
        );
        $builder->notEqualTo('0');

        $where = $builder->buildWhere();
        $this->assertEquals('Id != \'0\'', $where);
    }


    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ReportQueryWhereBuilder::createWithField
     * @covers Google\AdsApi\AdWords\Query\v201802\ReportQueryWhereBuilder::copyFrom
     * @covers Google\AdsApi\AdWords\Query\v201802\ReportQueryWhereBuilder::__construct
     * @covers Google\AdsApi\AdWords\Query\v201802\ReportQueryWhereBuilder::buildWhere
     */
    public function testCopyFromShouldCopyPartialExpressions()
    {
        $builder = ReportQueryWhereBuilder::createWithField(
            'Id',
            new ReportQueryBuilder()
        );

        $copyBuilder = ReportQueryWhereBuilder::copyFrom(
            $builder,
            new ReportQueryBuilder()
        );
        $copyBuilder->notEqualTo('0');

        $where = $copyBuilder->buildWhere();
        $this->assertEquals('Id != \'0\'', $where);
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ReportQueryWhereBuilder::createWithField
     * @covers Google\AdsApi\AdWords\Query\v201802\ReportQueryWhereBuilder::copyFrom
     * @covers Google\AdsApi\AdWords\Query\v201802\ReportQueryWhereBuilder::__construct
     * @covers Google\AdsApi\AdWords\Query\v201802\ReportQueryWhereBuilder::buildWhere
     */
    public function testCopyFromShouldCopyCompleteExpressions()
    {
        $whereBuilder = ReportQueryWhereBuilder::createWithField(
            'Id',
            new ReportQueryBuilder()
        );
        $whereBuilder->notEqualTo('0');

        $copyWhereBuilder = ReportQueryWhereBuilder::copyFrom(
            $whereBuilder,
            new ReportQueryBuilder()
        );

        $where = $copyWhereBuilder->buildWhere();
        $this->assertEquals('Id != \'0\'', $where);
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ReportQueryWhereBuilder::createWithField
     * @covers Google\AdsApi\AdWords\Query\v201802\ReportQueryWhereBuilder::copyFrom
     * @covers Google\AdsApi\AdWords\Query\v201802\ReportQueryWhereBuilder::__construct
     * @covers Google\AdsApi\AdWords\Query\v201802\ReportQueryWhereBuilder::buildWhere
     */
    public function testCopyFromShouldOverwritePreviousExpression()
    {
        $whereBuilder = ReportQueryWhereBuilder::createWithField(
            'Id',
            new ReportQueryBuilder()
        );
        $whereBuilder->notEqualTo('0');

        $copyWhereBuilder = ReportQueryWhereBuilder::copyFrom(
            $whereBuilder,
            new ReportQueryBuilder()
        );
        $copyWhereBuilder->notEqualTo('9223372036854775807');

        $where = $copyWhereBuilder->buildWhere();
        $this->assertEquals('Id != \'9223372036854775807\'', $where);
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ReportQueryWhereBuilder::createWithField
     * @covers Google\AdsApi\AdWords\Query\v201802\ReportQueryWhereBuilder::copyFrom
     * @covers Google\AdsApi\AdWords\Query\v201802\ReportQueryWhereBuilder::__construct
     * @covers Google\AdsApi\AdWords\Query\v201802\ReportQueryWhereBuilder::buildWhere
     */
    public function testCopyFromShouldNotShareQueryBuilder()
    {
        $queryBuilder1 = new ReportQueryBuilder();
        $whereBuilder = ReportQueryWhereBuilder::createWithField(
            'Id',
            $queryBuilder1
        );

        $queryBuilder2 = new ReportQueryBuilder();
        $copyWhereBuilder = ReportQueryWhereBuilder::copyFrom(
            $whereBuilder,
            $queryBuilder2
        );
        $returnedQueryBuilder = $copyWhereBuilder
            ->notEqualTo('9223372036854775807');

        $this->assertNotSame($queryBuilder1, $returnedQueryBuilder);
        $this->assertSame($queryBuilder2, $returnedQueryBuilder);
    }
}
