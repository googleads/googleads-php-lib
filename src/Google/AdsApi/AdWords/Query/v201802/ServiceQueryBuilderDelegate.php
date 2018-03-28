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

use Google\AdsApi\AdWords\Query\WhereBuilderInterface;
use Google\AdsApi\AdWords\Query\WhereClauseAppender;
use InvalidArgumentException;
use RuntimeException;

/**
 * A delegate of `ServiceQueryBuilder`, which shouldn't be used directly.
 * Use `ServiceQueryBuilder` to build a `ServiceQuery` object.
 */
final class ServiceQueryBuilderDelegate
{

    private $startIndex;
    private $pageSize;
    private $orderByFields;
    private $selectFields;

    /**
     * @var WhereBuilderInterface[] an array of builders to build individual
     *     logic expressions of the WHERE clause
     */
    private $whereBuilders;

    /**
     * Validates a field name.
     *
     * @param string $field the field name to be validated
     * @throws InvalidArgumentException if the field name is null or empty
     */
    private static function validateFieldName($field)
    {
        if (empty($field)) {
            throw new InvalidArgumentException('The field name must not be'
                . ' null or empty.');
        }
    }

    /**
     * Sets the fields for the SELECT clause. Repeated field names will be
     * included exactly once.
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
            self::validateFieldName($field);
        }

        // Flipping an array will create a new associative array. The keys of
        // the new associative array make a set of distinct fields.
        $distinctFields = array_flip($fields);
        $this->selectFields = array_keys($distinctFields);
    }

    /**
     * Sets the field name to be added to the WHERE clause. Every time this
     * function is called, it will add a new condition to the WHERE clause.
     * All conditions are connected using the AND operator.
     *
     * @param string $field a field name to be added to the WHERE clause
     * @param ServiceQueryBuilder $serviceQueryBuilder the query builder
     *     object for building other parts of the AWQL string
     * @return ServiceQueryWhereBuilder a builder object for setting a logic
     *     operation and argument in the WHERE clause
     */
    public function where($field, ServiceQueryBuilder $serviceQueryBuilder)
    {
        if (is_null($this->whereBuilders)) {
            $this->whereBuilders = [];
        }

        $whereBuilder = ServiceQueryWhereBuilder::createWithField(
            $field,
            $serviceQueryBuilder
        );
        $this->whereBuilders[] = $whereBuilder;
        return $whereBuilder;
    }

    /**
     * Adds a field name with an ordering direction (DESC or ASC) to the ORDER
     *     BY clause.
     *
     * @param string $field a field name to be added to the ORDER BY clause
     * @param string $descOrAsc an ordering direction, either DESC or ASC
     */
    private function orderBy($field, $descOrAsc)
    {
        self::validateFieldName($field);

        if (!isset($this->orderByFields)) {
            $this->orderByFields = [];
        }

        if (array_key_exists($field, $this->orderByFields)) {
            throw new InvalidArgumentException('The same field name was added' .
                ' to the ORDER BY prior to this call. Field names must not' .
                ' be repeated.');
        }

        $this->orderByFields[$field] = sprintf('%s %s', $field, $descOrAsc);
    }

    /**
     * Adds a field name with the ascending direction (ASC) to the ORDER BY
     *     clause.
     *
     * @param string $field a field name to be added to the ORDER BY clause
     */
    public function orderByAsc($field)
    {
        $this->orderBy($field, 'ASC');
    }

    /**
     * Adds a field name with the descending direction (DESC) to the ORDER BY
     *     clause.
     *
     * @param string $field a field name to be added to the ORDER BY clause
     */
    public function orderByDesc($field)
    {
        $this->orderBy($field, 'DESC');
    }

    /**
     * Sets the start index and page size for the LIMIT clause.
     *
     * @param int $startIndex the start index of the first page
     * @param int $pageSize the count of entries to be fetched in each page
     */
    public function limit($startIndex, $pageSize)
    {
        $this->startIndex = $startIndex;
        $this->pageSize = $pageSize;
    }

    /**
     * Builds the SELECT clause of the AWQL string.
     *
     * @return string the SELECT clause
     */
    private function buildSelectClause()
    {
        return 'SELECT ' . implode(', ', $this->selectFields);
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
     * Appends the ORDER BY clause to a partial AWQL string.
     *
     * @param string $awqlString a partial AWQL string to append an ORDER BY
     *     clause
     * @return string the complete AWQL string with the ORDER BY clause
     */
    private function appendOrderByClause($awqlString)
    {
        if (empty($this->orderByFields)) {
            return $awqlString;
        }

        return sprintf(
            '%s ORDER BY %s',
            $awqlString,
            implode(', ', $this->orderByFields)
        );
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
        if (is_null($this->selectFields)) {
            throw new RuntimeException('The `select()` function must be' .
                ' called prior to this function');
        }

        $awql = $this->buildSelectClause();
        $awql = $this->appendWhereClause($awql);
        $awql = $this->appendOrderByClause($awql);

        if (is_null($this->startIndex) && is_null($this->pageSize)) {
            return new ServiceQuery($awql);
        }
        return new ServiceQuery(
            $awql,
            $this->startIndex,
            $this->pageSize
        );
    }
}
