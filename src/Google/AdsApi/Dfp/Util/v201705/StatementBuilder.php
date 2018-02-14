<?php
/**
 * Copyright 2017 Google Inc. All Rights Reserved.
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

namespace Google\AdsApi\Dfp\Util\v201705;

use Google\AdsApi\Common\Util\MapEntries;
use Google\AdsApi\Dfp\v201705\Statement;
use InvalidArgumentException;

/**
 * Builds statements that can be used in PQL queries.
 *
 * Typical usage:
 *
 * ```
 * $statementBuilder = (new StatementBuilder())
 *     ->where('lastModifiedDateTime > :yesterday AND status = :status')
 *     ->orderBy('id ASC')
 *     ->limit(200)
 *     ->withBindVariableValue(
 *         'yesterday',
 *         DfpDateTimes::fromDateTime(new DateTime(
 *             '-1 day',
 *             new DateTimeZone('America/New_York')
 *         )))
 *     ->withBindVariableValue('status', SomeStatus::STATUS);
 *
 * $statement = $statementBuilder->toStatement();
 * //...
 * $statementBuilder->increaseOffsetBy(200);
 * $statement = $statementBuilder->toStatement();
 * ```
 */
class StatementBuilder
{

    const SUGGESTED_PAGE_LIMIT = 500;

    const SELECT = 'SELECT';
    const FROM = 'FROM';
    const WHERE = 'WHERE';
    const LIMIT = 'LIMIT';
    const OFFSET = 'OFFSET';
    const ORDER_BY = 'ORDER BY';

    private $select;
    private $from;
    private $where;
    private $limit;
    private $offset;
    private $orderBy;

    private $valueMap;

    /**
     * Creates an empty statement builder ready to have statement parts added to
     * it.
     */
    public function __construct()
    {
        $this->valueMap = [];
    }

    /**
     * Adds a bind variable value to the statement.
     *
     * @param string $key the value key
     * @param mixed $value the value either as a primitive, which will be
     *     converted to a PQL `Value` object, or a PQL `Value` object
     * @return StatementBuilder this builder
     */
    public function withBindVariableValue($key, $value)
    {
        $this->valueMap[$key] = Pql::createValue($value);

        return $this;
    }

    /**
     * Gets the statement representing the state of this statement builder.
     *
     * @return Statement
     */
    public function toStatement()
    {
        $statement = new Statement();
        $statement->setQuery($this->buildQuery());
        $statement->setValues(
            MapEntries::fromAssociativeArray(
                $this->getBindVariableMap(),
                'Google\AdsApi\Dfp\v201705\String_ValueMapEntry'
            )
        );

        return $statement;
    }

    /**
     * Removes the specified keyword from the clause, if present. Will remove
     * `keyword + ' '`.
     *
     * @param string $clause
     * @param string $keyword
     * @return string a new string with the `keyword + ' '` removed
     */
    private static function removeKeyword($clause, $keyword)
    {
        $keyword .= ' ';
        if (stristr(substr($clause, 0, strlen($keyword)), $keyword) !== false) {
            return substr($clause, strlen($keyword));
        }

        return $clause;
    }

    /**
     * Sets the statement `SELECT` clause in the form of 'a, b, ...'.
     *
     * Only necessary for statements being sent to the
     * `PublisherQueryLanguageService`. The 'SELECT ' keyword will be ignored.
     *
     * @param string $columns the statement select clause without `SELECT`
     * @return StatementBuilder this builder
     */
    public function select($columns)
    {
        $columns = self::removeKeyword($columns, self::SELECT);
        $this->select = $columns;

        return $this;
    }

    /**
     * Sets the statement `FROM` clause in the form of 'table'.
     *
     * Only necessary for statements being sent to the
     * `PublisherQueryLanguageService`. The 'FROM ' keyword will be ignored.
     *
     * @param string $table the statement from clause without `FROM`
     * @return StatementBuilder this builder
     */
    public function from($table)
    {
        $table = self::removeKeyword($table, self::FROM);
        $this->from = $table;

        return $this;
    }

    /**
     * Sets the statement `WHERE` clause in the form of `'WHERE <condition> {[AND
     * | OR] <condition> ...}'`. E.g., 'a = b OR b = c'. The 'WHERE ' keyword will
     * be ignored.
     *
     * @param string $conditions the statement query without `WHERE`
     * @return StatementBuilder this builder
     */
    public function where($conditions)
    {
        $conditions = self::removeKeyword($conditions, self::WHERE);
        $this->where = $conditions;

        return $this;
    }

    /**
     * Sets the statement `LIMIT` clause in the form of `'LIMIT <count>'`. E.g.,
     * 1000.
     *
     * @param int $count the statement limit
     * @return StatementBuilder this builder
     */
    public function limit($count)
    {
        $this->limit = $count;

        return $this;
    }

    /**
     * Sets the statement `OFFSET` clause in the form of `'OFFSET <count>'`. E.g.,
     * 200.
     *
     * @param int $count the statement offset
     * @return StatementBuilder this builder
     */
    public function offset($count)
    {
        $this->offset = $count;

        return $this;
    }

    /**
     * Increases the offset by the specified amount.
     *
     * @param int $amount
     * @return StatementBuilder this builder
     */
    public function increaseOffsetBy($amount)
    {
        if ($this->offset === null) {
            $this->offset = 0;
        }
        $this->offset += $amount;

        return $this;
    }

    /**
     * Gets the current offset.
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Removes the limit and offset from the query.
     *
     * @return StatementBuilder this builder
     */
    public function removeLimitAndOffset()
    {
        $this->offset = null;
        $this->limit = null;

        return $this;
    }

    /**
     * Sets the statement `ORDER BY` clause in the form of `'ORDER BY <property>
     * [ASC | DESC]'`. E.g., 'type ASC, lastModifiedDateTime DESC'. The 'ORDER BY'
     * keyword will be ignored.
     *
     * @param string $orderBy the statement order by without `ORDER BY`
     * @return StatementBuilder this builder
     */
    public function orderBy($orderBy)
    {
        $orderBy = self::removeKeyword($orderBy, self::ORDER_BY);
        $this->orderBy = $orderBy;

        return $this;
    }

    /**
     * Returns the key to value bind variable map.
     *
     * @return array
     */
    public function getBindVariableMap()
    {
        return $this->valueMap;
    }

    /**
     * Checks that the query is valid.
     *
     * @throws InvalidArgumentException if the query is invalid
     */
    private function validateQuery()
    {
        if ($this->offset !== null && $this->limit === null) {
            throw new InvalidArgumentException(
                'OFFSET cannot be set if LIMIT is not set.'
            );
        }
    }

    /**
     * Builds the query from the clauses.
     *
     * @return string the query
     */
    private function buildQuery()
    {
        $this->validateQuery();

        $statement = "";
        if ($this->select !== null) {
            $statement .= sprintf("%s %s ", self::SELECT, $this->select);
        }
        if ($this->from !== null) {
            $statement .= sprintf("%s %s ", self::FROM, $this->from);
        }
        if ($this->where !== null) {
            $statement .= sprintf("%s %s ", self::WHERE, $this->where);
        }
        if ($this->orderBy !== null) {
            $statement .= sprintf("%s %s ", self::ORDER_BY, $this->orderBy);
        }
        if ($this->limit !== null) {
            $statement .= sprintf("%s %s ", self::LIMIT, $this->limit);
        }
        if ($this->offset !== null) {
            $statement .= sprintf("%s %s ", self::OFFSET, $this->offset);
        }

        return trim($statement);
    }
}
