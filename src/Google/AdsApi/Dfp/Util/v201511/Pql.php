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
namespace Google\AdsApi\Dfp\Util\v201511;

use Google\AdsApi\Dfp\v201511\BooleanValue;
use Google\AdsApi\Dfp\v201511\Date;
use Google\AdsApi\Dfp\v201511\DateTime as DfpDateTime;
use Google\AdsApi\Dfp\v201511\DateTimeValue;
use Google\AdsApi\Dfp\v201511\DateValue;
use Google\AdsApi\Dfp\v201511\NumberValue;
use Google\AdsApi\Dfp\v201511\ResultSet;
use Google\AdsApi\Dfp\v201511\Row;
use Google\AdsApi\Dfp\v201511\SetValue;
use Google\AdsApi\Dfp\v201511\Targeting;
use Google\AdsApi\Dfp\v201511\TargetingValue;
use Google\AdsApi\Dfp\v201511\TextValue;
use Google\AdsApi\Dfp\v201511\Value;
use InvalidArgumentException;

/**
 * A utility class for handling PQL objects.
 */
class Pql {

  /**
   * {@link Pql} is meant to be used statically.
   */
  private function __construct() {}

  /**
   * Creates a PQL `Value` from the specified value.
   *
   * <p>For example:
   *  - A `TextValue` for a value of type `string`.
   *  - A `BooleanValue` for type `bool`.
   *  - A `NumberValue` for type `float` or `int`.
   *  - A `DateTimeValue` for type DFP `DateTime`
   *  - A `DateValue` for type DFP `Date`
   *  - A `SetValue` for type `array`.
   *
   * <p>If the specified value is already a PQL `Value`, the value is returned.
   *
   * @param mixed $value the value to convert to a PQL value
   * @return Value a PQL value of the appropriate type
   * @throws InvalidArgumentException if value cannot be converted
   */
  public static function createValue($value) {
    if ($value instanceof Value) {
      return $value;
    } else if (is_bool($value)) {
      return new BooleanValue($value);
    } else if (is_float($value) || is_int($value)) {
      return new NumberValue(strval($value));
    } else if (is_string($value)) {
      return new TextValue($value);
    } else if ($value instanceof DfpDateTime) {
      return new DateTimeValue($value);
    } else if ($value instanceof Date) {
      return new DateValue($value);
    } else if (is_array($value)) {
      $values = array();
      foreach ($value as $valueEntry) {
        $values[] = self::createValue($valueEntry);
      }
      $setValue = new SetValue();
      $setValue->setValues($values);
      return $setValue;
    } else if ($value instanceof Targeting) {
      return new TargetingValue($value);
    } else {
      throw new InvalidArgumentException(sprintf("Unsupported value type "
          . "[%s]", get_class($value)));
    }
  }

  /**
   * Creates a string from the Value.
   *
   * @param Value $value the value to convert
   * @return string the string representation of the value
   * @throws InvalidArgumentException if value cannot be converted
   */
  public static function toString(Value $value) {
    if ($value instanceof BooleanValue) {
      return $value->getValue() ? 'true' : 'false';
    } else if ($value instanceof NumberValue || $value instanceof TextValue) {
      return strval($value->getValue());
    } else if ($value instanceof DateTimeValue) {
      return $value->getValue() !== null
          ? DateTimeUtils::toStringWithTimeZone($value->getValue()) : '';
    } else if ($value instanceof DateValue) {
      return DateTimeUtils::toString($value->getValue());
    } else if ($value instanceof SetValue) {
      $pqlValues = $value->getValues();
      if ($pqlValues !== null) {
        $valuesAsStrings = array();
        foreach ($pqlValues as $pqlValue) {
          $valuesAsStrings[] = self::toString($pqlValue);
        }
        return implode(',', $valuesAsStrings);
      } else {
        return '';
      }
    } else {
      throw new InvalidArgumentException(sprintf("Unsupported Value type [%s]",
          get_class($value)));
    }
  }

  /**
   * Gets the column labels for the result set.
   *
   * @param ResultSet $resultSet the result set to get the column labels for
   * @return array the string list of column labels
   */
  public static function getColumnLabels(ResultSet $resultSet) {
    $columnLabels = array();
    foreach ($resultSet->getColumnTypes() as $columnType) {
      $columnLabels[] = $columnType->getLabelName();
    }
    return $columnLabels;
  }

  /**
   * Gets the values in a row of the result set in the form of a string list.
   *
   * @param Row $row the row to get the values for
   * @return array the string list of row labels
   */
  public static function getRowStringValues(Row $row) {
    return array_map(array('self', 'toString'), $row->getValues());
  }

  /**
   * Combines the first and second result sets, if and only if, the columns
   * of both result sets match.
   *
   * @throws InvalidArgumentException if the result sets to combine do not have
   *     identical column headers
   */
  public static function combineResultSets(ResultSet $first,
      ResultSet $second) {
    $firstColumns = self::getColumnLabels($first);
    $secondColumns = self::getColumnLabels($second);

    if ($firstColumns !== $secondColumns) {
      throw new InvalidArgumentException(sprintf("First result set columns "
          . "[%s] do not match second result set columns [%s]", implode(', ',
          $firstColumns), implode(', ', $secondColumns)));
    }

    $combinedRows = $first->getRows();
    if ($second->getRows() !== null) {
      $combinedRows = array_merge($combinedRows, $second->getRows());
    }

    return new ResultSet($first->getColumnTypes(), $combinedRows);
  }
}

