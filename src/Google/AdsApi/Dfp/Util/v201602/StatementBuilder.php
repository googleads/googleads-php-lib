<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
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
namespace Google\AdsApi\Dfp\Util\v201602;

use Google\AdsApi\Common\Util\MapUtils;
use Google\AdsApi\Dfp\v201602\Statement;
use InvalidArgumentException;

/**
 * `StatementBuilder` allows for statements to be constructed in parts.
 *
 * <p>Typical usage is:
 *
 *     $statementBuilder = new StatementBuilder()
 *         ->where('lastModifiedDateTime > :yesterday AND type = :type')
 *         ->orderBy('name DESC')
 *         ->limit(200)
 *         ->offset(20)
 *         ->withBindVariableValue(
 *             'yesterday',
 *             DateTimeUtils::toDfpDateTime(new DateTime(
 *                 '-1 day',
 *                 new DateTimeZone('America/New_York')
 *             )))
 *         ->withBindVariableValue('type', 'SomeType')
 *
 *     $statement = $statementBuilder->toStatement();
 *     //...
 *     $statementBuilder->increaseOffsetBy(20);
 *     $statement = $statementBuilder->toStatement();
 */
class StatementBuilder {

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

  public function __construct() {
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
  public function withBindVariableValue($key, $value) {
    $this->valueMap[$key] = Pql::createValue($value);
    return $this;
  }

  /**
   * Gets the statement representing the state of this statement builder.
   *
   * @return Statement
   */
  public function toStatement() {
    $statement = new Statement();
    $statement->setQuery($this->buildQuery());
    $statement->setValues(MapUtils::toList(
        $this->getBindVariableMap(),
        'Google\AdsApi\Dfp\v201602\String_ValueMapEntry'
    ));
    return $statement;
  }

  /**
   * Removes the `keyword` from the `clause` if present. Will remove
   * `keyword + ' '`.
   *
   * @param string $clause the clause to remove from
   * @param string $keyword the keyword to remove
   * @return string a new string with the `keyword + ' '` removed
   */
  private static function removeKeyword($clause, $keyword) {
    $keyword .= ' ';
    if (stristr(substr($clause, 0, strlen($keyword)), $keyword) !== false) {
      return substr($clause, strlen($keyword));
    }
    return $clause;
  }

  /**
   * Sets the statement `SELECT` clause in the form of 'a,b' or '*'.
   *
   * <p>Only necessary for statements being sent to the
   * `PublisherQueryLanguageService`. The 'SELECT ' keyword will be ignored.
   *
   * @param string $columns the statement select clause without `SELECT`
   * @return StatementBuilder this builder
   */
  public function select($columns) {
    $columns = self::removeKeyword($columns, self::SELECT);
    $this->select = $columns;
    return $this;
  }

  /**
   * Sets the statement `FROM` clause in the form of 'table'.
   *
   * <p>Only necessary for statements being sent to the
   * `PublisherQueryLanguageService`. The 'FROM ' keyword will be ignored.
   *
   * @param string $table the statement from clause without `FROM`
   * @return StatementBuilder this builder
   */
  public function from($table) {
    $table = self::removeKeyword($table, self::FROM);
    $this->from = $table;
    return $this;
  }

  /**
   * Sets the statement `WHERE` clause in the form of
   * `'WHERE &lt;condition&gt; {[AND | OR] &lt;condition&gt; ...}'`.
   * E.g., 'a = b OR b = c'. The 'WHERE ' keyword will be ignored.
   *
   * @param string $conditions the statement query without `WHERE`
   * @return StatementBuilder this builder
   */
  public function where($conditions) {
    $conditions = self::removeKeyword($conditions, self::WHERE);
    $this->where = $conditions;
    return $this;
  }

  /**
   * Sets the statement `LIMIT` clause in the form of
   * `'LIMIT &lt;count&gt;'`. E.g., 1000.
   *
   * @param int $count the statement limit
   * @return StatementBuilder this builder
   */
  public function limit($count) {
    $this->limit = $count;
    return $this;
  }

  /**
   * Sets the statement `OFFSET` clause in the form of `'OFFSET &lt;count&gt;'`.
   * E.g., 200.
   *
   * @param int $count the statement offset
   * @return StatementBuilder this builder
   */
  public function offset($count) {
    $this->offset = $count;
    return $this;
  }

  /**
   * Increases the offset by the specified amount.
   *
   * @param int $amount
   * @return StatementBuilder this builder
   */
  public function increaseOffsetBy($amount) {
    if (!isset($this->offset)) {
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
  public function getOffset() {
    return $this->offset;
  }

  /**
   * Removes the limit and offset from the query.
   *
   * @return StatementBuilder this builder
   */
  public function removeLimitAndOffset() {
    $this->offset = null;
    $this->limit = null;
    return $this;
  }

  /**
   * Sets the statement `ORDER BY` clause in the form of
   * `'ORDER BY &lt;property&gt; [ASC | DESC]'`.
   * E.g., 'type ASC, lastModifiedDateTime DESC'. The 'ORDER BY ' keyword will
   * be ignored.
   *
   * @param string $orderBy the statement order by without `ORDER BY`
   * @return StatementBuilder this builder
   */
  public function orderBy($orderBy) {
    $orderBy = self::removeKeyword($orderBy, self::ORDER_BY);
    $this->orderBy = $orderBy;
    return $this;
  }

  /**
   * Returns the key to value bind variable map.
   *
   * @return array
   */
  public function getBindVariableMap() {
    return $this->valueMap;
  }

  /**
   * Checks that the query is valid.
   *
   * @throws InvalidArgumentException if the query is invalid
   */
  private function validateQuery() {
    if (isset($this->offset) && !isset($this->limit)) {
      throw new InvalidArgumentException(
          'OFFSET cannot be set if LIMIT is not set.');
    }
  }

  /**
   * Builds the query from the clauses.
   *
   * @return string the query
   */
  private function buildQuery() {
    $this->validateQuery();

    $statement = "";
    if (isset($this->select)) {
      $statement .= sprintf("%s %s ", self::SELECT, $this->select);
    }
    if (isset($this->from)) {
      $statement .= sprintf("%s %s ", self::FROM, $this->from);
    }
    if (isset($this->where)) {
      $statement .= sprintf("%s %s ", self::WHERE, $this->where);
    }
    if (isset($this->orderBy)) {
      $statement .= sprintf("%s %s ", self::ORDER_BY, $this->orderBy);
    }
    if (isset($this->limit)) {
      $statement .= sprintf("%s %s ", self::LIMIT, $this->limit);
    }
    if (isset($this->offset)) {
      $statement .= sprintf("%s %s ", self::OFFSET, $this->offset);
    }

    return trim($statement);
  }
}

