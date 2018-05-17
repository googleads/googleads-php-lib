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

namespace Google\AdsApi\AdWords\Query;

use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `QueryValidator`.
 *
 * @see QueryValidator
 * @small
 */
class QueryValidatorTest extends TestCase
{

    /**
     * @covers Google\AdsApi\AdWords\Query\QueryValidator::validateFieldName
     */
    public function testValidateFieldName()
    {
        $validationResult = QueryValidator::validateFieldName('id');
        $this->assertTrue($validationResult->isPassed());
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\QueryValidator::validateFieldName
     */
    public function testValidateFieldNameWithNull()
    {
        $validationResult = QueryValidator::validateFieldName(null);
        $this->assertFalse($validationResult->isPassed());
        $this->assertTrue($validationResult->isFailed());
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\QueryValidator::validateFieldName
     */
    public function testValidateFieldNameWithZeroString()
    {
        $validationResult = QueryValidator::validateFieldName('0');
        $this->assertFalse($validationResult->isPassed());
        $this->assertTrue($validationResult->isFailed());
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\QueryValidator::validateFieldName
     */
    public function testValidateFieldNameWithEmptyString()
    {
        $validationResult = QueryValidator::validateFieldName('');
        $this->assertFalse($validationResult->isPassed());
        $this->assertTrue($validationResult->isFailed());
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\QueryValidator::validateFieldName
     */
    public function testValidateFieldNameWithWhitespaceString()
    {
        $validationResult = QueryValidator::validateFieldName(" \t \r \n ");
        $this->assertFalse($validationResult->isPassed());
        $this->assertTrue($validationResult->isFailed());
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\QueryValidator::validateFieldName
     */
    public function testValidateFieldNameWithArray()
    {
        $validationResult = QueryValidator::validateFieldName(['id']);
        $this->assertFalse($validationResult->isPassed());
        $this->assertTrue($validationResult->isFailed());
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\QueryValidator::validateCustomDateRange
     */
    public function testValidateCustomDateRangeWithWrongFormatStartDate()
    {
        $validationResult = QueryValidator::validateCustomDateRange(
            '2018-02-01',
            '20180401'
        );
        $this->assertFalse($validationResult->isPassed());
        $this->assertTrue($validationResult->isFailed());
        $this->assertEquals(
            'The start date must be a valid date and follow YYYYMMDD format.',
            $validationResult->getFailReason()
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\QueryValidator::validateCustomDateRange
     */
    public function testValidateCustomDateRangeWithInvalidStartDate()
    {
        $validationResult = QueryValidator::validateCustomDateRange(
            '20180231',
            '20180401'
        );
        $this->assertFalse($validationResult->isPassed());
        $this->assertTrue($validationResult->isFailed());
        $this->assertEquals(
            'The start date must be a valid date and follow YYYYMMDD format.',
            $validationResult->getFailReason()
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\QueryValidator::validateCustomDateRange
     */
    public function testValidateCustomDateRangeWithWrongFormatEndDate()
    {
        $validationResult = QueryValidator::validateCustomDateRange(
            '20180201',
            '2018/04/01'
        );
        $this->assertFalse($validationResult->isPassed());
        $this->assertTrue($validationResult->isFailed());
        $this->assertEquals(
            'The end date must be a valid date and follow YYYYMMDD format.',
            $validationResult->getFailReason()
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\QueryValidator::validateCustomDateRange
     */
    public function testValidateCustomDateRangeWithInvalidEndDate()
    {
        $validationResult = QueryValidator::validateCustomDateRange(
            '20180101',
            '20180231'
        );
        $this->assertFalse($validationResult->isPassed());
        $this->assertTrue($validationResult->isFailed());
        $this->assertEquals(
            'The end date must be a valid date and follow YYYYMMDD format.',
            $validationResult->getFailReason()
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\QueryValidator::validateCustomDateRange
     */
    public function testValidateCustomDateRangeWithEndDatePriorToStartDate()
    {
        $validationResult = QueryValidator::validateCustomDateRange(
            '20180331',
            '20170331'
        );
        $this->assertFalse($validationResult->isPassed());
        $this->assertTrue($validationResult->isFailed());
        $this->assertEquals(
            'The end date must not be prior to the start date.',
            $validationResult->getFailReason()
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\QueryValidator::validateServiceQuery
     */
    public function testValidateServiceQuery()
    {
        $validationResult = QueryValidator::validateServiceQuery(
            'SELECT Id, Name
             WHERE Status = \'ENABLED\'
             ORDER BY Name DESC
             LIMIT 0,50'
        );
        $this->assertTrue($validationResult->isPassed());
        $this->assertFalse($validationResult->isFailed());
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\QueryValidator::validateServiceQuery
     */
    public function testValidateServiceQueryMissingSelectClause()
    {
        $validationResult = QueryValidator::validateServiceQuery(
            'WHERE Status = \'ENABLED\'
             ORDER BY Name DESC
             LIMIT 0,50'
        );
        $this->assertFalse($validationResult->isPassed());
        $this->assertTrue($validationResult->isFailed());
        $this->assertEquals(
            'The AWQL string must contain SELECT clause(s).',
            $validationResult->getFailReason()
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\QueryValidator::validateServiceQuery
     */
    public function testValidateServiceQueryWithExtraneousFromClause()
    {
        $validationResult = QueryValidator::validateServiceQuery(
            'SELECT Id, Name
             FROM KEYWORDS_PERFORMANCE_REPORT
             WHERE Status = \'ENABLED\'
             ORDER BY Name DESC
             LIMIT 0,50'
        );
        $this->assertFalse($validationResult->isPassed());
        $this->assertTrue($validationResult->isFailed());
        $this->assertEquals(
            'The AWQL string must not contain FROM, DURING clauses.',
            $validationResult->getFailReason()
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\QueryValidator::validateServiceQuery
     */
    public function testValidateServiceQueryWithExtraneousDuringClause()
    {
        $validationResult = QueryValidator::validateServiceQuery(
            'SELECT Id, Name
             DURING 20160101,20160325'
        );
        $this->assertFalse($validationResult->isPassed());
        $this->assertTrue($validationResult->isFailed());
        $this->assertEquals(
            'The AWQL string must not contain FROM, DURING clauses.',
            $validationResult->getFailReason()
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\QueryValidator::validateReportQuery
     */
    public function testValidateReportQuery()
    {
        $validationResult = QueryValidator::validateReportQuery(
            'SELECT Id, Criteria, AdGroupName ' .
            'FROM KEYWORDS_PERFORMANCE_REPORT ' .
            'DURING 20160101,20160325'
        );
        $this->assertTrue($validationResult->isPassed());
        $this->assertFalse($validationResult->isFailed());
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\QueryValidator::validateReportQuery
     */
    public function testValidateReportQueryMissingSelectClause()
    {
        $validationResult = QueryValidator::validateReportQuery(
            'FROM KEYWORDS_PERFORMANCE_REPORT ' .
            'DURING 20160101,20160325'
        );
        $this->assertFalse($validationResult->isPassed());
        $this->assertTrue($validationResult->isFailed());
        $this->assertEquals(
            'The AWQL string must contain SELECT, FROM clause(s).',
            $validationResult->getFailReason()
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\QueryValidator::validateReportQuery
     */
    public function testValidateReportQueryMissingFromClause()
    {
        $validationResult = QueryValidator::validateReportQuery(
            'SELECT Id, Criteria, AdGroupName ' .
            'DURING 20160101,20160325'
        );
        $this->assertFalse($validationResult->isPassed());
        $this->assertTrue($validationResult->isFailed());
        $this->assertEquals(
            'The AWQL string must contain SELECT, FROM clause(s).',
            $validationResult->getFailReason()
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\QueryValidator::validateReportQuery
     */
    public function testValidateReportQueryMissingDuringClause()
    {
        $validationResult = QueryValidator::validateReportQuery(
            'SELECT Id, Criteria, AdGroupName ' .
            'FROM KEYWORDS_PERFORMANCE_REPORT '
        );
        $this->assertTrue($validationResult->isPassed());
        $this->assertFalse($validationResult->isFailed());
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\QueryValidator::validateReportQuery
     */
    public function testValidateReportQueryWithExtraneousOrderByClause()
    {
        $validationResult = QueryValidator::validateReportQuery(
            'SELECT Id, Criteria, AdGroupName ' .
            'FROM KEYWORDS_PERFORMANCE_REPORT ' .
            'DURING 20160101,20160325 ' .
            'ORDER BY Name'
        );
        $this->assertFalse($validationResult->isPassed());
        $this->assertTrue($validationResult->isFailed());
        $this->assertEquals(
            'The AWQL string must not contain ORDER BY, LIMIT clauses.',
            $validationResult->getFailReason()
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\QueryValidator::validateReportQuery
     */
    public function testValidateReportQueryWithExtraneousLimitClause()
    {
        $validationResult = QueryValidator::validateReportQuery(
            'SELECT Id, Criteria, AdGroupName ' .
            'FROM KEYWORDS_PERFORMANCE_REPORT ' .
            'DURING 20160101,20160325 ' .
            'LIMIT 0,50'
        );
        $this->assertFalse($validationResult->isPassed());
        $this->assertTrue($validationResult->isFailed());
        $this->assertEquals(
            'The AWQL string must not contain ORDER BY, LIMIT clauses.',
            $validationResult->getFailReason()
        );
    }
}
