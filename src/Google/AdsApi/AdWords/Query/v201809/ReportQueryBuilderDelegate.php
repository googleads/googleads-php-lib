<?php
/**
 * Copyright 2018, Google Inc. All Rights Reserved.
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

use Google\AdsApi\AdWords\Query\QueryValidator;
use Google\AdsApi\AdWords\Query\WhereBuilderInterface;
use Google\AdsApi\AdWords\Query\WhereClauseAppender;
use InvalidArgumentException;
use RuntimeException;

/**
 * A delegate of `ReportQueryBuilder`, which shouldn't be used directly.
 * Use `ReportQueryBuilder` to build a `ReportQuery` object.
 */
final class ReportQueryBuilderDelegate
{

    private $selectFields;

    /**
     * @var WhereBuilderInterface[] an array of builders to build individual
     *     logic expressions of the WHERE clause
     */
    private $whereBuilders;
    private $fromReportType;
    private $duringDateRangeType;
    private $duringStartDate;
    private $duringEndDate;

    /**
     * Creates a new query builder delegate object by copying field names,
     * WHERE, FROM and DURING clauses from another query builder delegate
     * object.
     *
     * @param ReportQueryBuilderDelegate $otherInstance the other query
     *     builder delegate object for copying field names, FROM and DURING
     *     clauses
     * @param ReportQueryBuilder $queryBuilder the query builder object for
     *     continuation of building a complete AWQL string
     * @return ReportQueryBuilderDelegate a new query builder delegate object
     *     that copies from the input one
     */
    public static function copyFrom(
        ReportQueryBuilderDelegate $otherInstance,
        ReportQueryBuilder $queryBuilder
    ) {
        $copyingInstance = new self();

        // In PHP, array assignment always performs value copying.
        $copyingInstance->selectFields = $otherInstance->selectFields;

        $copyingInstance->fromReportType = $otherInstance->fromReportType;
        $copyingInstance->duringDateRangeType =
            $otherInstance->duringDateRangeType;
        $copyingInstance->duringStartDate = $otherInstance->duringStartDate;
        $copyingInstance->duringEndDate = $otherInstance->duringEndDate;

        if (isset($otherInstance->whereBuilders)) {
            $copyingInstance->whereBuilders = [];
            foreach ($otherInstance->whereBuilders as $whereBuilder) {
                $copyingInstance->whereBuilders[] =
                    ReportQueryWhereBuilder::copyFrom(
                        $whereBuilder,
                        $queryBuilder
                    );
            }
        }
        return $copyingInstance;
    }

    /**
     * Sets the fields for the SELECT clause. Field names can be repeated and
     * their order will be preserved.
     *
     * @param array $fields the fields for building the SELECT clause
     */
    public function select(array $fields)
    {
        if (empty($fields)) {
            throw new InvalidArgumentException('The field array must not be' .
                ' empty.');
        }

        foreach ($fields as $field) {
            $validationResult = QueryValidator::validateFieldName($field);
            if ($validationResult->isFailed()) {
                throw new InvalidArgumentException('The field array for' .
                    ' building the SELECT clause contains invalid field name.' .
                    ' Validation fail reason: ' .
                    $validationResult->getFailReason());
            }
        }

        $this->selectFields = $fields;
    }

    /**
     * Sets the report type for the FROM clause of an AWQL string.
     *
     * @param string $reportType name of a report type to be added to the
     *     FROM clause of an AWQL string, as defined in
     *     `ReportDefinitionReportType`
     * @see Google\AdsApi\AdWords\v201809\cm\ReportDefinitionReportType
     */
    public function from($reportType)
    {
        if (empty($reportType)) {
            throw new InvalidArgumentException('The report type must not be' .
                ' null or empty.');
        }
        $this->fromReportType = $reportType;
    }

    /**
     * Sets the field name to be added to the WHERE clause. Every time this
     * function is called, it will add a new condition to the WHERE clause.
     * All conditions are connected using the AND operator.
     *
     * @param string $field a field name to be added to the WHERE clause
     * @param ReportQueryBuilder $reportQueryBuilder the query builder
     *     object for building other parts of the AWQL string
     * @return ReportQueryWhereBuilder a builder object for setting a logic
     *     operation and argument in the WHERE clause
     */
    public function where($field, ReportQueryBuilder $reportQueryBuilder)
    {
        if (is_null($this->whereBuilders)) {
            $this->whereBuilders = [];
        }

        $whereBuilder = ReportQueryWhereBuilder::createWithField(
            $field,
            $reportQueryBuilder
        );
        $this->whereBuilders[] = $whereBuilder;
        return $whereBuilder;
    }

    /**
     * Sets the date range type for the DURING clause.
     *
     * @param string $dateRangeType a date range type to be added to the
     *     DURING clause of an AWQL string, as defined in
     *     `ReportDefinitionDateRangeType`
     * @see Google\AdsApi\AdWords\Reporting\v201809\ReportDefinitionDateRangeType
     */
    public function duringDateRange($dateRangeType)
    {
        if (empty($dateRangeType)) {
            throw new InvalidArgumentException('The date range type must not' .
                ' be null or empty.');
        }
        $this->duringDateRangeType = $dateRangeType;
    }

    /**
     * Sets a custom date range by specifying the start and end dates.
     *
     * @param string $startDate the start date for the DURING clause of an
     *     AWQL string
     * @param string $endDate the end date for the DURING clause of an AWQL
     *     string
     */
    public function during($startDate, $endDate)
    {
        $validationResult = QueryValidator::validateCustomDateRange(
            $startDate,
            $endDate
        );
        if ($validationResult->isFailed()) {
            throw new InvalidArgumentException('The start or end date is' .
                ' invalid. Validation fail reasons: ' .
                $validationResult->getFailReason());
        }

        $this->duringStartDate = $startDate;
        $this->duringEndDate = $endDate;
    }

    /**
     * Builds the SELECT clause of the AWQL string.
     *
     * @return string the SELECT clause
     */
    private function buildSelectClause()
    {
        return sprintf('SELECT %s', implode(', ', $this->selectFields));
    }


    /**
     * Appends the FROM clause to a partial AWQL string.
     *
     * @param string $awql a partial AWQL string without the FROM clause
     * @return string an AWQL string with the FROM clause
     */
    private function appendFromClause($awql)
    {
        return sprintf('%s FROM %s', $awql, $this->fromReportType);
    }

    /**
     * Appends the WHERE clause to a partial AWQL string if the `where()`
     * function was called prior to this function; Otherwise, this function
     * is a no-op.
     *
     * @param string $awql a partial AWQL string to append the WHERE clause
     * @return string the AWQL string with the WHERE clause if the `where()`
     *     function was called prior to this function; Otherwise, returns the
     *     AWQL without modifications
     */
    private function appendWhereClause($awql)
    {
        return WhereClauseAppender::appendWhereClause(
            $this->whereBuilders,
            $awql
        );
    }

    /**
     * Appends the DURING clause to a partial AWQL string if the
     * `duringDateRange()` or `during()` function was called prior to this
     * function; Otherwise, this function is a no-op.
     *
     * @param string $awql a partial AWQL string without a DURING clause
     * @return string an AWQL string with a DURING clause if a date range was
     *     specified; Otherwise, returns the input AWQL string without
     *     modifications
     */
    private function appendDuringClause($awql)
    {
        if (isset($this->duringDateRangeType)) {
            return sprintf('%s DURING %s', $awql, $this->duringDateRangeType);
        }

        if (isset($this->duringStartDate) && isset($this->duringEndDate)) {
            return sprintf(
                '%s DURING %s,%s',
                $awql,
                $this->duringStartDate,
                $this->duringEndDate
            );
        }

        return $awql;
    }

    /**
     * Builds a new `ReportQuery` object.
     *
     * @return ReportQuery a new `ReportQuery` object
     * @throws RuntimeException if the `select()` and `from()` functions were
     *     not called prior to this function
     */
    public function build()
    {
        if (is_null($this->selectFields) || is_null($this->fromReportType)) {
            throw new RuntimeException('The `select()` and `from()` functions' .
                ' must be called prior to this function');
        }

        $awql = $this->buildSelectClause();
        $awql = $this->appendFromClause($awql);
        $awql = $this->appendWhereClause($awql);
        $awql = $this->appendDuringClause($awql);

        return new ReportQuery(
            $awql
        );
    }
}
