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

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use RuntimeException;

/**
 * Unit tests for `ServiceQueryBuilderDelegate`.
 *
 * @see ServiceQueryBuilderDelegate
 * @small
 */
class ServiceQueryBuilderDelegateTest extends TestCase
{
    /**
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::copyFrom
     *
     * @expectedException RuntimeException
     * @expectedExceptionMessage select
     */
    public function testCopyFromEmptyObject()
    {
        $originalDelegate = new ServiceQueryBuilderDelegate();
        $copyDelegate = ServiceQueryBuilderDelegate::copyFrom(
            $originalDelegate,
            new ServiceQueryBuilder()
        );
        $copyDelegate->build();
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::copyFrom
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::select
     */
    public function testCopyFromShouldAllowSelectOverridePreviousSelect()
    {
        $originalDelegate = new ServiceQueryBuilderDelegate();
        $originalDelegate->select(['Name', 'Status']);
        $copyDelegate = ServiceQueryBuilderDelegate::copyFrom(
            $originalDelegate,
            new ServiceQueryBuilder()
        );
        $copyDelegate->select(['Id', 'Name']);
        $this->assertEquals(
            'SELECT Id, Name',
            sprintf('%s', $copyDelegate->build())
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::select
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::where
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::orderByDesc
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::orderByAsc
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::limit
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::build
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::copyFrom
     */
    public function testCopyFromShouldBuildSameAwqlStringAsOriginal()
    {
        $originalBuilder = new ServiceQueryBuilder();
        $originalDelegate = new ServiceQueryBuilderDelegate();
        $originalDelegate->select(['Id', 'Name']);
        $originalDelegate->where('Name', $originalBuilder)
            ->doesNotContainIgnoreCase('test');
        $originalDelegate->where('Id', $originalBuilder)
            ->notIn(['0', '-1']);
        $originalDelegate->orderByDesc('Name');
        $originalDelegate->orderByAsc('Id');
        $originalDelegate->limit(0, 500);
        $originalQuery = $originalDelegate->build();

        $copyDelegate = ServiceQueryBuilderDelegate::copyFrom(
            $originalDelegate,
            new ServiceQueryBuilder()
        );
        $copyQuery = $copyDelegate->build();

        $this->assertEquals(
            'SELECT Id, Name ' .
            'WHERE Name DOES_NOT_CONTAIN_IGNORE_CASE \'test\'' .
            ' AND Id NOT_IN [\'0\', \'-1\'] ' .
            'ORDER BY Name DESC, Id ASC ' .
            'LIMIT 0,500',
            "$copyQuery"
        );

        $this->assertEquals(
            "$originalQuery",
            "$copyQuery"
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::orderByAsc
     *
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage field name
     */
    public function testOrderByAscWithNullValue()
    {
        $builder = new ServiceQueryBuilderDelegate();
        $builder->orderByAsc(null);
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::orderByDesc
     *
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage field name
     */
    public function testOrderByDescWithNullValue()
    {
        $builder = new ServiceQueryBuilderDelegate();
        $builder->orderByDesc(null);
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::orderByAsc
     *
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage field name
     */
    public function testOrderByAscWithEmptyString()
    {
        $builder = new ServiceQueryBuilderDelegate();
        $builder->orderByAsc('');
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::orderByDesc
     *
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage field name
     */
    public function testOrderByDescWithEmptyString()
    {
        $builder = new ServiceQueryBuilderDelegate();
        $builder->orderByDesc('');
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::orderByAsc
     *
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage repeat
     */
    public function testOrderByAscWithDuplicateFieldName()
    {
        $builder = new ServiceQueryBuilderDelegate();
        $builder->orderByAsc('Name');
        $builder->orderByAsc('Name');
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::orderByDesc
     *
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage repeat
     */
    public function testOrderByDescWithDuplicateFieldName()
    {
        $builder = new ServiceQueryBuilderDelegate();
        $builder->orderByDesc('Status');
        $builder->orderByDesc('Status');
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::orderByAsc
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::orderByDesc
     *
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage repeat
     */
    public function testOrderByAscAndDescWithDuplicateFieldName()
    {
        $builder = new ServiceQueryBuilderDelegate();
        $builder->orderByAsc('Status');
        $builder->orderByDesc('Status');
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::select
     *
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage field
     */
    public function testSelectWithEmptyArray()
    {
        $builder = new ServiceQueryBuilderDelegate();
        $builder->select([]);
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::select
     */
    public function testSelectOverridePreviousSelect()
    {
        $builder = new ServiceQueryBuilderDelegate();
        $builder->select(['Name', 'Status']);
        $builder->select(['Id', 'Name']);
        $this->assertEquals(
            'SELECT Id, Name',
            sprintf('%s', $builder->build())
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::select
     */
    public function testDuplicatedSelectFields()
    {
        $builder = new ServiceQueryBuilderDelegate();
        $builder->select(['Status', 'Name', 'Status']);
        $query = $builder->build();
        $this->assertEquals('SELECT Status, Name', sprintf('%s', $query));
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::orderByDesc
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::orderByAsc
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::build
     *
     * @expectedException RuntimeException
     * @expectedExceptionMessage select
     */
    public function testBuildWithoutSelect()
    {
        $builder = new ServiceQueryBuilderDelegate();
        $builder->orderByDesc('Name');
        $builder->orderByAsc('Status');
        $builder->limit(0, 500);
        $builder->build();
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::select
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::orderByDesc
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::orderByAsc
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::build
     */
    public function testBuild()
    {
        $builder = new ServiceQueryBuilderDelegate();
        $builder->select(['Id', 'Name']);
        $builder->orderByDesc('Name');
        $builder->orderByAsc('Status');
        $builder->limit(0, 500);
        $query = $builder->build();
        $this->assertInstanceOf(ServiceQuery::class, $query);
        $this->assertEquals(
            'SELECT Id, Name ORDER BY Name DESC, Status ASC LIMIT 0,500',
            "$query"
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::select
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::orderByDesc
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::orderByAsc
     * @covers Google\AdsApi\AdWords\Query\v201809\ServiceQueryBuilderDelegate::build
     */
    public function testBuildWithoutPagination()
    {
        $builder = new ServiceQueryBuilderDelegate();
        $builder->select(['Id', 'Name']);
        $builder->orderByDesc('Name');
        $builder->orderByAsc('Status');
        $query = $builder->build();
        $this->assertInstanceOf(ServiceQuery::class, $query);
        $this->assertEquals(
            'SELECT Id, Name ORDER BY Name DESC, Status ASC',
            "$query"
        );
    }
}
