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

namespace Google\AdsApi\AdWords\Query\v201806;

use Google\AdsApi\AdWords\Reporting\v201806\ReportDefinitionDateRangeType;
use Google\AdsApi\AdWords\v201806\cm\ReportDefinitionReportType;
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
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::copyFrom
     *
     * @expectedException RuntimeException
     * @expectedExceptionMessage select
     */
    public function testCopyFromEmptyObject()
    {
        $originalDelegate = new ReportQueryBuilderDelegate();
        $copyDelegate = ReportQueryBuilderDelegate::copyFrom(
            $originalDelegate,
            new ReportQueryBuilder()
        );
        $copyDelegate->build();
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::copyFrom
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::select
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
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::select
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::from
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::where
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::during
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::copyFrom
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
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::select
     *
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage field
     */
    public function testSelectWithEmptyArray()
    {
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->select([]);
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::select
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::from
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
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::select
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::from
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
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::select
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::from
     *
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage report type
     */
    public function testFromWithEmptyStringValue()
    {
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->select(['Status', 'Name', 'Status']);
        $delegate->from('');
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::select
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::from
     *
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage report type
     */
    public function testFromWithNullValue()
    {
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->select(['Status', 'Name', 'Status']);
        $delegate->from(null);
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::where
     */
    public function testWhereShouldReturnReportQueryWhereBuilder()
    {
        $delegate = new ReportQueryBuilderDelegate();
        $where = $delegate->where('Name', new ReportQueryBuilder());
        $this->assertInstanceOf(ReportQueryWhereBuilder::class, $where);
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::duringDateRange
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage date range type
     */
    public function testDuringDateRangeWithEmptyString()
    {
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->duringDateRange('');
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::duringDateRange
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage date range type
     */
    public function testDuringDateRangeWithNull()
    {
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->duringDateRange(null);
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::during
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage start
     */
    public function testDuringWithNullValues()
    {
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->during(null, null);
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::during
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage start
     */
    public function testDuringWithEmptyStrings()
    {
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->during('', '');
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::during
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage start
     */
    public function testDuringWithIntValues()
    {
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->during(1, 2);
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::during
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage start
     * @expectedExceptionMessage YYYYMMDD
     */
    public function testDuringWithInvalidDates()
    {
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->during('11111', '222222');
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::during
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage end
     * @expectedExceptionMessage YYYYMMDD
     */
    public function testDuringWithInvalidEndDate()
    {
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->during('20180315', '222222');
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::select
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::build
     *
     * @expectedException RuntimeException
     * @expectedExceptionMessage select()
     */
    public function testBuildWithoutSelect()
    {
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->from(
            ReportDefinitionReportType::KEYWORDS_PERFORMANCE_REPORT
        );
        $delegate->build();
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::from
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::build
     *
     * @expectedException RuntimeException
     * @expectedExceptionMessage from()
     */
    public function testBuildWithoutFrom()
    {
        $delegate = new ReportQueryBuilderDelegate();
        $delegate->select(['Status', 'Name', 'Status']);
        $delegate->build();
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::select
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::from
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::where
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::duringDateRange
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::build
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
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::select
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::from
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::where
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::during
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilderDelegate::build
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
