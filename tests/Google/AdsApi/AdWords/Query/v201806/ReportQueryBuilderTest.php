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
use Google\AdsApi\Common\AdsUtilityRegistryInterface;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `ReportQueryBuilder`.
 *
 * @see ReportQueryBuilder
 * @small
 */
class ReportQueryBuilderTest extends TestCase
{

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilder::__construct
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
                $this->equalTo('ReportQueryBuilder')
            );

        $builder = new ReportQueryBuilder(null, $mockRegistry);
        $builder
            ->select(['Id'])
            ->from(ReportDefinitionDateRangeType::LAST_WEEK_SUN_SAT)
            ->build();
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilder::copyFrom
     */
    public function testCopyFromEmptyReportQueryBuilder()
    {
        $originalBuilder = new ReportQueryBuilder();
        $copyBuilder = ReportQueryBuilder::copyFrom($originalBuilder);
        $this->assertInstanceOf(ReportQueryBuilder::class, $copyBuilder);
        $this->assertNotSame($originalBuilder, $copyBuilder);
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilder::copyFrom
     */
    public function testCopyFromShouldCopyValuesOfAllClauses()
    {
        $originalBuilder = (new ReportQueryBuilder())
            ->select(['Id'])
            ->from(ReportDefinitionReportType::ADGROUP_PERFORMANCE_REPORT)
            ->where('Id')->notEqualTo('0')
            ->during('20180101', '20180315');

        $copyBuilder = ReportQueryBuilder::copyFrom($originalBuilder);

        // Making changes to values in any clauses of the original builder
        // should not impact the copy builder.
        $originalBuilder
            ->select(['Id'])
            ->from(ReportDefinitionReportType::ADGROUP_PERFORMANCE_REPORT)
            ->where('Id')->notIn(['0'])
            ->duringDateRange(ReportDefinitionDateRangeType::LAST_30_DAYS);

        $reportQuery = $copyBuilder->build();
        $this->assertEquals(
            'SELECT Id ' .
            'FROM ADGROUP_PERFORMANCE_REPORT ' .
            'WHERE Id != \'0\' ' .
            'DURING 20180101,20180315',
            "$reportQuery"
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilder::copyFrom
     */
    public function testCopyFromShouldAllowWhereClauseExpansion()
    {
        $originalBuilder = (new ReportQueryBuilder())
            ->select(['Id', 'Criteria', 'AdGroupName'])
            ->from(ReportDefinitionReportType::ADGROUP_PERFORMANCE_REPORT)
            ->where('Id')->notEqualTo('0')
            ->during('20180101', '20180315');

        $copyBuilder = ReportQueryBuilder::copyFrom($originalBuilder);
        $reportQuery = $copyBuilder
            ->where('AdGroupName')->doesNotContainIgnoreCase('test')
            ->build();
        $this->assertEquals(
            'SELECT Id, Criteria, AdGroupName ' .
            'FROM ADGROUP_PERFORMANCE_REPORT ' .
            'WHERE Id != \'0\'' .
            ' AND AdGroupName DOES_NOT_CONTAIN_IGNORE_CASE \'test\' ' .
            'DURING 20180101,20180315',
            "$reportQuery"
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilder::__construct
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilder::copyFrom
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
                $this->equalTo('ReportQueryBuilder')
            );

        $originalBuilder = new ReportQueryBuilder(null, $mockRegistry);
        $originalBuilder->select(['Id'])
            ->from(ReportDefinitionReportType::ADGROUP_PERFORMANCE_REPORT)
            ->build();

        $copyBuilder = ReportQueryBuilder::copyFrom($originalBuilder);
        $copyBuilder->build();
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilder::select
     */
    public function testSelectShouldReturnSameReportQueryBuilder()
    {
        $builder = new ReportQueryBuilder();
        $this->assertSame($builder, $builder->select(['Id', 'Name']));
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilder::from
     */
    public function testFromShouldReturnSameReportQueryBuilder()
    {
        $builder = new ReportQueryBuilder();
        $this->assertSame(
            $builder,
            $builder->from(
                ReportDefinitionReportType::ADGROUP_PERFORMANCE_REPORT
            )
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilder::where
     */
    public function testWhereShouldReturnWhereBuilder()
    {
        $builder = new ReportQueryBuilder();
        $this->assertInstanceOf(
            ReportQueryWhereBuilder::class,
            $builder->where('Id')
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilder::duringDateRange
     */
    public function testDuringDateRangeShouldReturnSameReportQueryBuilder()
    {
        $builder = new ReportQueryBuilder();
        $this->assertSame(
            $builder,
            $builder->duringDateRange(
                ReportDefinitionDateRangeType::LAST_14_DAYS
            )
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilder::during
     */
    public function testDuringShouldReturnSameReportQueryBuilder()
    {
        $builder = new ReportQueryBuilder();
        $this->assertSame($builder, $builder->during('20180101', '20180215'));
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\v201806\ReportQueryBuilder::build
     */
    public function testBuildShouldReturnReportQuery()
    {
        $builder = new ReportQueryBuilder();
        $this->assertInstanceOf(
            ReportQuery::class,
            $builder
                ->select(['Id'])
                ->from(ReportDefinitionDateRangeType::LAST_14_DAYS)
                ->build()
        );
    }
}
