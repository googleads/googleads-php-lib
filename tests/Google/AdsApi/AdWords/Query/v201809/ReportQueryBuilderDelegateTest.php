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

use Google\AdsApi\AdWords\Reporting\v201809\ReportDefinitionDateRangeType;
use Google\AdsApi\AdWords\v201809\cm\ReportDefinitionReportType;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use RuntimeException;

/**
 * Unit tests for `ReportQueryBuilderDelegate`.
 *
 * @see ReportQueryBuilderDelegate
 * @small
 */
class ReportQueryBuilderDelegateTest extends TestCase
{
    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::copyFrom
     */
    public function testCopyFromEmptyObject()
    {
        $this->expectExceptionMessage("select");
        $this->expectException(RuntimeException::class);
        $originalDelegate = new ReportQueryBuilderDelegate();
        $copyDelegate = ReportQueryBuilderDelegate::copyFrom(
            $originalDelegate,
            new ReportQueryBuilder()
        );
        $copyDelegate->build();
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::copyFrom
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::select
     */
    public function testCopyFromShouldAllowSelectOverridePreviousSelect()
    {
        $originalDelegate = new ReportQueryBuilderDelegate();
        $originalDelegate->select(['Criteria']);
        $copyDelegate = ReportQueryBuilderDelegate::copyFrom(
            $originalDelegate,
            new ReportQueryBuilder()
        );
        $copyDelegate->select(['Id', 'AdGroupName']);
        $copyDelegate
            ->from(ReportDefinitionReportType::ADGROUP_PERFORMANCE_REPORT);
        $this->assertEquals(
            'SELECT Id, AdGroupName ' .
            'FROM ADGROUP_PERFORMANCE_REPORT',
            sprintf('%s', $copyDelegate->build())
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::select
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::from
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::where
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::during
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::copyFrom
     */
    public function testCopyFromShouldBuildSameAwqlStringAsOriginal()
    {
        $originalBuilder = new ReportQueryBuilder();
        $originalDelegate = new ReportQueryBuilderDelegate();
        $originalDelegate->select(['Id', 'AdGroupName']);
        $originalDelegate
            ->from(ReportDefinitionReportType::ADGROUP_PERFORMANCE_REPORT);
        $originalDelegate->where('AdGroupName', $originalBuilder)
            ->doesNotContainIgnoreCase('test');
        $originalDelegate->where('Id', $originalBuilder)
            ->notIn(['0', '-1']);
        $originalDelegate->during('20180101', '20180315');
        $originalQuery = $originalDelegate->build();

        $copyDelegate = ReportQueryBuilderDelegate::copyFrom(
            $originalDelegate,
            new ReportQueryBuilder()
        );
        $awql = sprintf('%s', $copyDelegate->build());

        $this->assertEquals(
            'SELECT Id, AdGroupName ' .
            'FROM ADGROUP_PERFORMANCE_REPORT ' .
            'WHERE AdGroupName DOES_NOT_CONTAIN_IGNORE_CASE \'test\'' .
            ' AND Id NOT_IN [\'0\', \'-1\'] ' .
            'DURING 20180101,20180315',
            $awql
        );

        $this->assertEquals(
            "$originalQuery",
            $awql
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::select
     */
    public function testSelectWithEmptyArray()
    {
        $this->expectExceptionMessage("field");
        $this->expectException(InvalidArgumentException::class);
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->select([]);
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::select
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::from
     */
    public function testSelectOverridePreviousSelect()
    {
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->select(['Name', 'Status']);
        $delegate->select(['Id', 'Name']);
        $delegate->from(
            ReportDefinitionReportType::KEYWORDS_PERFORMANCE_REPORT
        );
        $this->assertEquals(
            'SELECT Id, Name FROM KEYWORDS_PERFORMANCE_REPORT',
            sprintf('%s', $delegate->build())
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::select
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::from
     */
    public function testDuplicatedSelectFields()
    {
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->select(['Status', 'Name', 'Status']);
        $delegate->from(ReportDefinitionReportType::ACCOUNT_PERFORMANCE_REPORT);
        $query = $delegate->build();
        $this->assertEquals(
            'SELECT Status, Name, Status FROM ACCOUNT_PERFORMANCE_REPORT',
            sprintf('%s', $query)
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::select
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::from
     */
    public function testFromWithEmptyStringValue()
    {
        $this->expectExceptionMessage("report type");
        $this->expectException(InvalidArgumentException::class);
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->select(['Status', 'Name', 'Status']);
        $delegate->from('');
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::select
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::from
     */
    public function testFromWithNullValue()
    {
        $this->expectExceptionMessage("report type");
        $this->expectException(InvalidArgumentException::class);
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->select(['Status', 'Name', 'Status']);
        $delegate->from(null);
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::where
     */
    public function testWhereShouldReturnReportQueryWhereBuilder()
    {
        $delegate = new ReportQueryBuilderDelegate();
        $where = $delegate->where('Name', new ReportQueryBuilder());
        $this->assertInstanceOf(ReportQueryWhereBuilder::class, $where);
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::duringDateRange
     */
    public function testDuringDateRangeWithEmptyString()
    {
        $this->expectExceptionMessage("date range type");
        $this->expectException(InvalidArgumentException::class);
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->duringDateRange('');
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::duringDateRange
     */
    public function testDuringDateRangeWithNull()
    {
        $this->expectExceptionMessage("date range type");
        $this->expectException(InvalidArgumentException::class);
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->duringDateRange(null);
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::during
     */
    public function testDuringWithNullValues()
    {
        $this->expectExceptionMessage("start");
        $this->expectException(InvalidArgumentException::class);
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->during(null, null);
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::during
     */
    public function testDuringWithEmptyStrings()
    {
        $this->expectExceptionMessage("start");
        $this->expectException(InvalidArgumentException::class);
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->during('', '');
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::during
     */
    public function testDuringWithIntValues()
    {
        $this->expectExceptionMessage("start");
        $this->expectException(InvalidArgumentException::class);
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->during(1, 2);
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::during
     */
    public function testDuringWithInvalidDates()
    {
        $this->expectExceptionMessage("YYYYMMDD");
        $this->expectExceptionMessage("start");
        $this->expectException(InvalidArgumentException::class);
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->during('11111', '222222');
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::during
     */
    public function testDuringWithInvalidEndDate()
    {
        $this->expectExceptionMessage("YYYYMMDD");
        $this->expectExceptionMessage("end");
        $this->expectException(InvalidArgumentException::class);
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->during('20180315', '222222');
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::select
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::build
     */
    public function testBuildWithoutSelect()
    {
        $this->expectExceptionMessage("select()");
        $this->expectException(RuntimeException::class);
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->from(
            ReportDefinitionReportType::KEYWORDS_PERFORMANCE_REPORT
        );
        $delegate->build();
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::from
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::build
     */
    public function testBuildWithoutFrom()
    {
        $this->expectExceptionMessage("from()");
        $this->expectException(RuntimeException::class);
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->select(['Status', 'Name', 'Status']);
        $delegate->build();
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::select
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::from
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::where
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::duringDateRange
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::build
     */
    public function testBuildWithDateRangeType()
    {
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->select(['Status', 'Name', 'Status']);
        $delegate->from(
            ReportDefinitionReportType::KEYWORDS_PERFORMANCE_REPORT
        );
        $delegate->duringDateRange(ReportDefinitionDateRangeType::LAST_7_DAYS);
        $query = $delegate->build();
        $this->assertInstanceOf(ReportQuery::class, $query);
        $this->assertEquals(
            'SELECT Status, Name, Status ' .
            'FROM KEYWORDS_PERFORMANCE_REPORT ' .
            'DURING LAST_7_DAYS',
            "$query"
        );
    }

    /**
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::select
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::from
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::where
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::during
     * @covers \Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilderDelegate::build
     */
    public function testBuildWithCustomDateRange()
    {
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->select(['Status', 'Name', 'Status']);
        $delegate->from(
            ReportDefinitionReportType::KEYWORDS_PERFORMANCE_REPORT
        );
        $delegate->during('20180101', '20180315');
        $query = $delegate->build();
        $this->assertInstanceOf(ReportQuery::class, $query);
        $this->assertEquals(
            'SELECT Status, Name, Status ' .
            'FROM KEYWORDS_PERFORMANCE_REPORT ' .
            'DURING 20180101,20180315',
            "$query"
        );
    }
}
