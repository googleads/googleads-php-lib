<?php
/**
 * A builder that allows for PQL statements to be constructed in parts.
 *
 * PHP version 5
 *
 * Copyright 2016, Google Inc. All Rights Reserved.
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
 *
 * @package    GoogleApiAdsDfp
 * @subpackage Util
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
require_once 'Google/Api/Ads/Common/Lib/ValidationException.php';
require_once 'Google/Api/Ads/Dfp/Util/v201611/Pql.php';

/**
 * {@code StatementBuilder} allows for statements to be constructed in parts.
 * <p>
 * Typical usage is:
 * <pre>
 * $statementBuilder = new StatementBuilder()
 *     ->Where("lastModifiedDateTime > :yesterday AND type = :type")
 *     ->OrderBy("name DESC")
 *     ->Limit(200)
 *     ->Offset(20)
 *     ->WithBindVariableValue("yesterday",
 *         date(DateTimeUtils::$DFP_DATE_TIME_STRING_FORMAT,
 *             strtotime('-1 day'))
 *     ->WithBindVariableValue("type", "Type")
 *
 * $statement = $statementBuilder->ToStatement();
 * //...
 * $statementBuilder->IncreaseOffsetBy(20);
 * $statement = $statementBuilder->ToStatement();
 * </pre>
 *
 * @package GoogleApiAdsDfp
 * @subpackage Util
 */
class StatementBuilder {

  const SUGGESTED_PAGE_LIMIT = 500;

  const SELECT = "SELECT";
  const FROM = "FROM";
  const WHERE = "WHERE";
  const LIMIT = "LIMIT";
  const OFFSET = "OFFSET";
  const ORDER_BY = "ORDER BY";

  private $select;
  private $from;
  private $where;
  private $limit;
  private $offset;
  private $orderBy;

  private $valueMap;

  /**
   * Constructs a new instance of this statement builder.
   */
  public function __construct() {
    $this->valueMap = array();
  }

  /**
   * Adds a value to the statement in the form of a {@code Value}.
   *
   * @param string $key the value key
   * @param mixed $value the value either as a primitive, which will be
   *     converted to a PQL Value object, or a PQL Value object
   * @return StatementBuilder a reference to this object
   */
  public function WithBindVariableValue($key, $value) {
    $this->valueMap[$key] = Pql::CreateValue($value);
    return $this;
  }

  /**
   * Gets the {@link Statement} representing the state of this statement
   * builder.
   *
   * @return Statement the {@link Statement}
   */
  public function ToStatement() {
    $statement = new Statement();
    $statement->query = $this->buildQuery();
    $statement->values = MapUtils::GetMapEntries($this->GetBindVariableMap());
    return $statement;
  }

  /**
   * Removes the {@code keyword} from the {@code clause} if present. Will remove
   * {@code keyword + " "}.
   *
   * @param string $clause the clause to remove from
   * @param string $keyword the keyword to remove
   * @return string a new string with the keyword + " " removed
   */
  private static function removeKeyword($clause, $keyword) {
    $keyword .= ' ';
    if (stristr(substr($clause, 0, strlen($keyword)), $keyword) !== false) {
      return substr($clause, strlen($keyword));
    }
    return $clause;
  }

  /**
   * Sets the statement SELECT clause in the form of "a,b" or "*".
   * Only necessary for statements being sent to the
   * {@code PublisherQueryLanguageService}. The "SELECT " keyword will be
   * ignored.
   *
   * @param string $columns the statement select clause without "SELECT"
   * @return StatementBuilder a reference to this object
   */
  public function Select($columns) {
    $columns = self::removeKeyword($columns, self::SELECT);
    $this->select = $columns;
    return $this;
  }

  /**
   * Sets the statement FROM clause in the form of "table".
   * Only necessary for statements being sent to the
   * {@code PublisherQueryLanguageService}. The "FROM " keyword will be
   * ignored.
   *
   * @param string $table the statement from clause without "FROM"
   * @return StatementBuilder a reference to this object
   */
  public function From($table) {
    $table = self::removeKeyword($table, self::FROM);
    $this->from = $table;
    return $this;
  }

  /**
   * Sets the statement WHERE clause in the form of<br><br>
   * <code>"WHERE &lt;condition&gt; {[AND | OR] &lt;condition&gt; ...}"</code>
   * <br><br>
   * e.g. "a = b OR b = c". The "WHERE " keyword will be ignored.
   *
   * @param string $conditions the statement query without "WHERE"
   * @return StatementBuilder a reference to this object
   */
  public function Where($conditions) {
    $conditions = self::removeKeyword($conditions, self::WHERE);
    $this->where = $conditions;
    return $this;
  }

  /**
   * Sets the statement LIMIT clause in the form of<br><br>
   * <code>"LIMIT &lt;count&gt;"</code>
   * <br><br>
   * e.g. 1000.
   *
   * @param int $count the statement limit
   * @return StatementBuilder a reference to this object
   */
  public function Limit($count) {
    $this->limit = $count;
    return $this;
  }

  /**
   * Sets the statement OFFSET clause in the form of<br><br>
   * <code>"OFFSET &lt;count&gt;"</code>
   * <br><br>
   * e.g. 200.
   *
   * @param int $count the statement offset
   * @return StatementBuilder a reference to this object
   */
  public function Offset($count) {
    $this->offset = $count;
    return $this;
  }

  /**
   * Increases the offset by the {@code amount}.
   *
   * @param int $amount the amount to increase the offset
   * @return StatementBuilder a reference to this object
   */
  public function IncreaseOffsetBy($amount) {
    if (!isset($this->offset)) {
      $this->offset = 0;
    }
    $this->offset += $amount;
    return $this;
  }

  /**
   * Gets the current offset.
   * @return int the current offset
   */
  public function GetOffset() {
    return $this->offset;
  }

  /**
   * Removes the limit and offset from the query.
   * @return StatementBuilder a reference to this object
   */
  public function RemoveLimitAndOffset() {
    $this->offset = null;
    $this->limit = null;
    return $this;
  }

  /**
   * Sets the statement ORDER BY clause in the form of<br><br>
   * <code>"ORDER BY &lt;property&gt; [ASC | DESC]"</code>
   * <br><br>
   * e.g. "type ASC, lastModifiedDateTime DESC". The "ORDER BY " keyword will be
   * ignored.
   *
   * @param string $orderBy the statement order by without "ORDER BY"
   * @return StatementBuilder a reference to this object
   */
  public function OrderBy($orderBy) {
    $orderBy = self::removeKeyword($orderBy, self::ORDER_BY);
    $this->orderBy = $orderBy;
    return $this;
  }

  /**
   * Returns the key to value map.
   */
  public function GetBindVariableMap() {
    return $this->valueMap;
  }

  /**
   * Checks that the query is valid.
   * @throws ValidationException if the query is invalid
   */
  private function validateQuery() {
    if (isset($this->offset) && !isset($this->limit)) {
      throw new ValidationException(self::OFFSET, $this->offset,
          'OFFSET cannot be set if LIMIT is not set.');
    }
  }

  /**
   * Builds the query from the clauses.
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

