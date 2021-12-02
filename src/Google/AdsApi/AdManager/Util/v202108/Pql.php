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

namespace Google\AdsApi\AdManager\Util\v202108;

use Google\AdsApi\AdManager\v202108\BooleanValue;
use Google\AdsApi\AdManager\v202108\Date;
use Google\AdsApi\AdManager\v202108\DateTime as AdManagerDateTime;
use Google\AdsApi\AdManager\v202108\DateTimeValue;
use Google\AdsApi\AdManager\v202108\DateValue;
use Google\AdsApi\AdManager\v202108\NumberValue;
use Google\AdsApi\AdManager\v202108\ResultSet;
use Google\AdsApi\AdManager\v202108\Row;
use Google\AdsApi\AdManager\v202108\SetValue;
use Google\AdsApi\AdManager\v202108\Targeting;
use Google\AdsApi\AdManager\v202108\TargetingValue;
use Google\AdsApi\AdManager\v202108\TextValue;
use Google\AdsApi\AdManager\v202108\Value;
use InvalidArgumentException;

/**
 * Static utility methods for working with PQL.
 */
class Pql
{

    private function __construct()
    {
    }

    /**
     * Creates a PQL `Value` from the specified value.
     *
     * For example:
     *  - A `TextValue` for a value of type `string`.
     *  - A `BooleanValue` for type `bool`.
     *  - A `NumberValue` for type `float` or `int`.
     *  - A `DateTimeValue` for type Ad Manager `DateTime`
     *  - A `DateValue` for type Ad Manager `Date`
     *  - A `SetValue` for type `array`.
     *
     * If the specified value is already a PQL `Value`, the value is returned.
     *
     * @param mixed $value the value to convert to a PQL value
     * @return Value a PQL value of the appropriate type
     * @throws InvalidArgumentException if value cannot be converted
     */
    public static function createValue($value)
    {
        if ($value instanceof Value) {
            return $value;
        } elseif (is_bool($value)) {
            return new BooleanValue($value);
        } elseif (is_float($value) || is_int($value)) {
            return new NumberValue(strval($value));
        } elseif (is_string($value)) {
            return new TextValue($value);
        } elseif ($value instanceof AdManagerDateTime) {
            return new DateTimeValue($value);
        } elseif ($value instanceof Date) {
            return new DateValue($value);
        } elseif (is_array($value)) {
            $values = [];
            foreach ($value as $valueEntry) {
                $values[] = self::createValue($valueEntry);
            }
            $setValue = new SetValue();
            $setValue->setValues($values);

            return $setValue;
        } elseif ($value instanceof Targeting) {
            return new TargetingValue($value);
        } else {
            throw new InvalidArgumentException(
                sprintf(
                    'Unsupported value type [%s]',
                    is_object($value) ? get_class($value) : gettype($value)
                )
            );
        }
    }

    /**
     * Creates a string from the Value.
     *
     * @param Value $value the value to convert
     * @return string the string representation of the value
     * @throws InvalidArgumentException if value cannot be converted
     */
    public static function toString(Value $value)
    {
        if ($value instanceof BooleanValue) {
            return $value->getValue() ? 'true' : 'false';
        } elseif ($value instanceof NumberValue || $value instanceof TextValue) {
            return strval($value->getValue());
        } elseif ($value instanceof DateTimeValue) {
            return $value->getValue() !== null
                ? AdManagerDateTimes::toDateTimeString($value->getValue()) : '';
        } elseif ($value instanceof DateValue) {
            return AdManagerDates::toDateString($value->getValue());
        } elseif ($value instanceof SetValue) {
            $pqlValues = $value->getValues();
            if ($pqlValues !== null) {
                $valuesAsStrings = [];
                foreach ($pqlValues as $pqlValue) {
                    $valuesAsStrings[] = self::toString($pqlValue);
                }

                return implode(',', $valuesAsStrings);
            } else {
                return '';
            }
        } else {
            throw new InvalidArgumentException(
                sprintf('Unsupported value type [%s]', get_class($value))
            );
        }
    }

    /**
     * Gets the column labels for the result set.
     *
     * @param ResultSet $resultSet the result set to get the column labels for
     * @return string[] the string list of column labels
     */
    public static function getColumnLabels(ResultSet $resultSet)
    {
        $columnLabels = [];
        foreach ($resultSet->getColumnTypes() as $columnType) {
            $columnLabels[] = $columnType->getLabelName();
        }

        return $columnLabels;
    }

    /**
     * Gets the values in a row of the result set in the form of a string list.
     *
     * @param Row $row the row to get the values for
     * @return string[] the string list of row labels
     */
    public static function getRowStringValues(Row $row)
    {
        return array_map(['self', 'toString'], $row->getValues());
    }

    /**
     * Combines the first and second result sets, if and only if, the columns
     * of both result sets match.
     *
     * @param ResultSet $first the first result set
     * @param ResultSet $second the second result set
     * @return ResultSet the combined result set
     * @throws InvalidArgumentException if the result sets to combine do not
     *     have identical column headers
     */
    public static function combineResultSets(
        ResultSet $first,
        ResultSet $second
    ) {
        $firstColumns = self::getColumnLabels($first);
        $secondColumns = self::getColumnLabels($second);

        if ($firstColumns !== $secondColumns) {
            throw new InvalidArgumentException(
                sprintf(
                    'First result set columns [%s] do not match second result '
                    . 'set columns [%s]',
                    implode(
                        ', ',
                        $firstColumns
                    ),
                    implode(', ', $secondColumns)
                )
            );
        }

        $combinedRows = $first->getRows();
        if (!empty($second->getRows())) {
            $combinedRows = array_merge($combinedRows, $second->getRows());
        }

        return new ResultSet($first->getColumnTypes(), $combinedRows);
    }

    /**
     * Gets the result set as a two dimension string array, which can be
     * transformed to a CSV using {@see CsvFiles} such as
     * <pre>
     * <code>
     * $combinedResultSet = Pql::combineResultSet($resultSet1, $resultSet2);
     * //...
     * $combinedResultSet = Pql::combineResultSet(
     *     $combinedResultSet,
     *     $resultSet3);
     * CsvFiles::writeCsv(
     *     Pql::resultSetTo2DimensionStringArray($combinedResultSet),
     *     $filePath);
     * </code>
     * </pre>
     *
     * @param ResultSet $resultSet the result set to convert to a CSV compatible
     *     format
     * @return string[][] a 2 dimension array of strings representing the result
     *     set
     */
    public static function resultSetTo2DimensionStringArray(
        ResultSet $resultSet
    ) {
        $array2D = [];
        $array2D[] = self::getColumnLabels($resultSet);
        if (!is_null($resultSet->getRows())) {
            foreach ($resultSet->getRows() as $row) {
                $array2D[] = self::getRowStringValues($row);
            }
        }

        return $array2D;
    }
}
