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
 * Builds an AWQL string for querying AdWords SOAP services.
 */
final class ServiceQueryBuilder
{
    private $delegate;
    private $utilityRegistry;

    /**
     * Creates a new `ServiceQueryBuilder` object.
     *
     * @param ServiceQueryBuilderDelegate|null $delegate a delegate to build
     *     a `ServiceQuery` object
     * @param AdsUtilityRegistryInterface|null $utilityRegistry a registry to
     *     register this utility class
     */
    public function __construct(
        ServiceQueryBuilderDelegate $delegate = null,
        AdsUtilityRegistryInterface $utilityRegistry = null
    ) {
        $this->delegate = is_null($delegate)
            ? new ServiceQueryBuilderDelegate()
            : $delegate;

        $this->utilityRegistry = is_null($utilityRegistry)
            ? AdsUtilityRegistry::getInstance()
            : $utilityRegistry;
    }

    /**
     * Creates a new query builder object by copying each clauses from another
     * query builder object.
     *
     * @param ServiceQueryBuilder $otherInstance the other query builder object
     *     for copying its clauses
     * @return ServiceQueryBuilder a new builder object that copies from the
     *     input one
     */
    public static function copyFrom(ServiceQueryBuilder $otherInstance)
    {
        $copyBuilder = new self(null, $otherInstance->utilityRegistry);
        $copyDelegate = ServiceQueryBuilderDelegate::copyFrom(
            $otherInstance->delegate,
            $copyBuilder
        );
        $copyBuilder->delegate = $copyDelegate;
        return $copyBuilder;
    }

    /**
     * Sets the fields for the SELECT clause. Repeated field names will be
     * included exactly once.
     *
     * @param array $fields the fields for building the SELECT clause
     * @return ServiceQueryBuilder the current instance of
     *     `ServiceQueryBuilder` for chaining
     */
    public function select(array $fields)
    {
        $this->delegate->select($fields);
        return $this;
    }

    /**
     * Sets the field name to be added to the WHERE clause. Every time this
     * function is called, it will add a new condition to the WHERE clause.
     * All conditions are connected using the AND operator.
     *
     * @param string $field a field name to be added to the WHERE clause
     * @return ServiceQueryWhereBuilder a builder object for building the
     *     WHERE clause
     */
    public function where($field)
    {
        return $this->delegate->where($field, $this);
    }

    /**
     * Adds a field name with the ascending direction (ASC) to the ORDER BY
     *     clause.
     *
     * @param string $field a field name to be added to the ORDER BY clause
     * @return ServiceQueryBuilder the current instance of
     *     `ServiceQueryBuilder` for chaining
     */
    public function orderByAsc($field)
    {
        $this->delegate->orderByAsc($field);
        return $this;
    }

    /**
     * Adds a field name with the descending direction (DESC) to the ORDER BY
     *     clause.
     *
     * @param string $field a field name to be added to the ORDER BY clause
     * @return ServiceQueryBuilder the current instance of
     *     `ServiceQueryBuilder` for chaining
     */
    public function orderByDesc($field)
    {
        $this->delegate->orderByDesc($field);
        return $this;
    }


    /**
     * Sets the start index and page size for the LIMIT clause.
     *
     * @param int $startIndex the start index of the first page
     * @param int $pageSize the count of entries to be fetched in each page
     * @return ServiceQueryBuilder the current instance of
     *     `ServiceQueryBuilder` for chaining
     */
    public function limit($startIndex, $pageSize)
    {
        $this->delegate->limit($startIndex, $pageSize);
        return $this;
    }

    /**
     * Builds a new `ServiceQuery` object.
     *
     * @return ServiceQuery a new `ServiceQuery` object
     * @throws RuntimeException if the `select()` function was not called prior
     *     to this function
     */
    public function build()
    {
        $query = $this->delegate->build();
        $this->utilityRegistry->addUtility(AdsUtility::SERVICE_QUERY_BUILDER);
        return $query;
    }
}
