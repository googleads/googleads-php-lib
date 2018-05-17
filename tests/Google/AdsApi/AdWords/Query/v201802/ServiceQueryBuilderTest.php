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

use Google\AdsApi\Common\AdsUtilityRegistryInterface;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `ServiceQueryBuilder`.
 *
 * @see ServiceQueryBuilder
 * @small
 */
class ServiceQueryBuilderTest extends TestCase
{

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryBuilder::__construct
     */
    public function testBuildWithUtilityTracking()
    {
        $mockRegistry = $this
            ->getMockBuilder(AdsUtilityRegistryInterface::class)
            ->setMethods(['addUtility', 'popAllUtilities'])
            ->getMock();

        $mockRegistry->expects($this->once())
            ->method('addUtility')
            ->with(
                $this->equalTo('ServiceQueryBuilder')
            );

        $builder = new ServiceQueryBuilder(null, $mockRegistry);
        $builder->select(['Id'])->build();
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryBuilder::copyFrom
     */
    public function testCopyFromEmptyServiceQueryBuilder()
    {
        $originalBuilder = new ServiceQueryBuilder();
        $copyBuilder = ServiceQueryBuilder::copyFrom($originalBuilder);
        $this->assertInstanceOf(ServiceQueryBuilder::class, $copyBuilder);
        $this->assertNotSame($originalBuilder, $copyBuilder);
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryBuilder::copyFrom
     */
    public function testCopyFromShouldCopyValuesOfAllClauses()
    {
        $originalBuilder = new ServiceQueryBuilder();
        $originalBuilder
            ->select(['Id', 'Name'])
            ->where('Id')->notEqualTo('0')
            ->orderByDesc('Name')
            ->orderByAsc('Id')
            ->limit(1, 2);

        $copyBuilder = ServiceQueryBuilder::copyFrom($originalBuilder);

        // Making changes to values in any clauses of the original builder
        // should not impact the copy builder.
        $originalBuilder
            ->select(['Status'])
            ->where('Status')->notIn(['Enabled'])
            ->orderByDesc('Status')
            ->limit(4, 3);

        $serviceQuery = $copyBuilder->build();
        $this->assertEquals(
            'SELECT Id, Name WHERE Id != \'0\'' .
            ' ORDER BY Name DESC, Id ASC LIMIT 1,2',
            "$serviceQuery"
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryBuilder::copyFrom
     */
    public function testCopyFromShouldAllowWhereClauseExpansion()
    {
        $originalBuilder = new ServiceQueryBuilder();
        $originalBuilder
            ->select(['Id', 'Name'])
            ->where('Id')->notEqualTo('0');

        $copyBuilder = ServiceQueryBuilder::copyFrom($originalBuilder);
        $serviceQuery = $copyBuilder
            ->where('Name')->doesNotContainIgnoreCase('test')
            ->build();
        $this->assertEquals(
            'SELECT Id, Name ' .
            'WHERE Id != \'0\'' .
            ' AND Name DOES_NOT_CONTAIN_IGNORE_CASE \'test\'',
            "$serviceQuery"
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryBuilder::__construct
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryBuilder::copyFrom
     */
    public function testCopyFromShouldReuseUtilityRegistry()
    {
        $mockRegistry = $this
            ->getMockBuilder(AdsUtilityRegistryInterface::class)
            ->setMethods(['addUtility', 'popAllUtilities'])
            ->getMock();

        $mockRegistry->expects($this->exactly(2))
            ->method('addUtility')
            ->with(
                $this->equalTo('ServiceQueryBuilder')
            );

        $originalBuilder = new ServiceQueryBuilder(null, $mockRegistry);
        $originalBuilder->select(['Id'])->build();

        $copyBuilder = ServiceQueryBuilder::copyFrom($originalBuilder);
        $copyBuilder->build();
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryBuilder::select
     */
    public function testSelectShouldReturnSameServiceQueryBuilder()
    {
        $builder = new ServiceQueryBuilder();
        $this->assertSame($builder, $builder->select(['Id', 'Name']));
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryBuilder::where
     */
    public function testWhereShouldReturnWhereBuilder()
    {
        $builder = new ServiceQueryBuilder();
        $this->assertInstanceOf(
            ServiceQueryWhereBuilder::class,
            $builder->where('Id')
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryBuilder::orderByAsc
     */
    public function testOrderByAscShouldReturnSameServiceQueryBuilder()
    {
        $builder = new ServiceQueryBuilder();
        $this->assertSame($builder, $builder->orderByAsc('Id'));
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryBuilder::orderByDesc
     */
    public function testOrderByDescShouldReturnSameServiceQueryBuilder()
    {
        $builder = new ServiceQueryBuilder();
        $this->assertSame($builder, $builder->orderByDesc('Id'));
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryBuilder::limit
     */
    public function testLimitShouldReturnSameServiceQueryBuilder()
    {
        $builder = new ServiceQueryBuilder();
        $this->assertSame($builder, $builder->limit(0, 1));
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201802\ServiceQueryBuilder::build
     */
    public function testBuildShouldReturnServiceQuery()
    {
        $builder = new ServiceQueryBuilder();
        $this->assertInstanceOf(ServiceQuery::class, $builder->select(['Id'])
            ->build());
    }
}
