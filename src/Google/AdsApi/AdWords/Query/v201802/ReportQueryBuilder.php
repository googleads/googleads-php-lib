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

namespace Google\AdsApi\AdWords\Query\v201802;

use Google\AdsApi\Common\AdsUtility;
use Google\AdsApi\Common\AdsUtilityRegistry;
use Google\AdsApi\Common\AdsUtilityRegistryInterface;
use RuntimeException;

/**
 * Uses a delegate to build a `ReportQuery` object and records utility of
 * itself.
 */
final class ReportQueryBuilder
{
    private $delegate;
    private $utilityRegistry;

    /**
     * Creates a new `ReportQueryBuilder` object.
     *
     * @param ReportQueryBuilderDelegate|null $delegate a delegate to build
     *     a `ReportQuery` object
     * @param AdsUtilityRegistryInterface|null $utilityRegistry a registry to
     *     register this utility class
     */
    public function __construct(
        ReportQueryBuilderDelegate $delegate = null,
        AdsUtilityRegistryInterface $utilityRegistry = null
    ) {
        $this->delegate = is_null($delegate)
            ? new ReportQueryBuilderDelegate()
            : $delegate;

        $this->utilityRegistry = is_null($utilityRegistry)
            ? AdsUtilityRegistry::getInstance()
            : $utilityRegistry;
    }

    /**
     * Creates a new query builder object by copying each clauses from another
     * query builder object.
     *
     * @param ReportQueryBuilder $otherInstance the other query builder object
     *     for copying its clauses
     * @return ReportQueryBuilder a new builder object that copies from the
     *     input one
     */
    public static function copyFrom(ReportQueryBuilder $otherInstance)
    {
        $copyBuilder = new self(null, $otherInstance->utilityRegistry);
        $copyDelegate = ReportQueryBuilderDelegate::copyFrom(
            $otherInstance->delegate,
            $copyBuilder
        );
        $copyBuilder->delegate = $copyDelegate;
        return $copyBuilder;
    }

    /**
     * Sets the fields for the SELECT clause. Field names can be repeated and
     * their order will be preserved.
     *
     * @param array $fields the fields for building the SELECT clause
     * @return ReportQueryBuilder the current instance of
     *     `ReportQueryBuilder` for chaining
     */
    public function select(array $fields)
    {
        $this->delegate->select($fields);
        return $this;
    }

    /**
     * Sets the report type to be added to the FROM clause of an AWQL string.
     *
     * @param string $reportType name of a report type to be added to the
     *     FROM clause of an AWQL string, as defined in
     *     `ReportDefinitionReportType`
     * @see Google\AdsApi\AdWords\v201802\cm\ReportDefinitionReportType
     *
     * @return ReportQueryBuilder the current instance of
     *     `ReportQueryBuilder` for chaining
     */
    public function from($reportType)
    {
        $this->delegate->from($reportType);
        return $this;
    }

    /**
     * Sets the field name to be added to the WHERE clause. Every time this
     * function is called, it will add a new condition to the WHERE clause.
     * All conditions are connected using the AND operator.
     *
     * @param string $field a field name to be added to the WHERE clause
     * @return ReportQueryWhereBuilder a builder object for building the
     *     WHERE clause
     */
    public function where($field)
    {
        return $this->delegate->where($field, $this);
    }

    /**
     * Sets the date range type for the DURING clause.
     *
     * @param string $dateRangeType a date range type to be added to the
     *     DURING clause of an AWQL string, as defined in
     *     `ReportDefinitionDateRangeType`
     * @see Google\AdsApi\AdWords\Reporting\v201802\ReportDefinitionDateRangeType
     *
     * @return ReportQueryBuilder the current instance of
     *     `ReportQueryBuilder` for chaining
     */
    public function duringDateRange($dateRangeType)
    {
        $this->delegate->duringDateRange($dateRangeType);
        return $this;
    }

    /**
     * Sets a custom date range by specifying the start and end dates.
     *
     * @param string $startDate the start date for the DURING clause of an
     *     AWQL string
     * @param string $endDate the end date for the DURING clause of an AWQL
     *     string
     * @return ReportQueryBuilder the current instance of
     *     `ReportQueryBuilder` for chaining
     */
    public function during($startDate, $endDate)
    {
        $this->delegate->during($startDate, $endDate);
        return $this;
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
        $query = $this->delegate->build();
        $this->utilityRegistry->addUtility(AdsUtility::REPORT_QUERY_BUILDER);
        return $query;
    }
}
