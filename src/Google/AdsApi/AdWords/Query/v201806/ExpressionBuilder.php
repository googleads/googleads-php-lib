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

namespace Google\AdsApi\AdWords\Query\v201806;

use BadFunctionCallException;
use Google\AdsApi\AdWords\Query\QueryValidator;
use Google\AdsApi\AdWords\v201806\cm\PredicateOperator;
use InvalidArgumentException;

/**
 * Builds a logic expression in the WHERE clause of an AWQL query.
 */
final class ExpressionBuilder
{
    private $fieldName;
    private $simpleOperator;
    private $simpleValue;
    private $listOperator;
    private $listValues;

    /**
     * Creates an expression builder and sets the field name which is the
     * left-hand operand of a logic expression.
     *
     * @param string $fieldName the field name to be used as the left-hand
     *     operand of a logic expression
     */
    public function __construct($fieldName)
    {
        $validationResult = QueryValidator::validateFieldName($fieldName);
        if ($validationResult->isFailed()) {
            throw new InvalidArgumentException(
                'The field name for building a logic expression in the WHERE' .
                ' clause is invalid. Validation fail reason: ' .
                $validationResult->getFailReason()
            );
        }

        $this->fieldName = $fieldName;
    }

    /**
     * Creates a new expression builder object by copying the operands and
     * operators from another expression builder object.
     *
     * @param ExpressionBuilder $otherInstance the other expression builder
     *     object for copying the operands and operators
     * @return ExpressionBuilder a new expression builder object that copies
     *     from the input one
     */
    public static function copyFrom(ExpressionBuilder $otherInstance)
    {
        $copyingInstance = new self($otherInstance->fieldName);
        $copyingInstance->simpleOperator = $otherInstance->simpleOperator;
        $copyingInstance->simpleValue = $otherInstance->simpleValue;
        $copyingInstance->listOperator = $otherInstance->listOperator;
        $copyingInstance->listValues = $otherInstance->listValues;
        return $copyingInstance;
    }

    /**
     * Sets an operator and a single value that follows the operator.
     *
     * @param string $operator the operator that works with a single value
     * @param string $value a number or string that follows the operator
     */
    private function setSimpleOperator($operator, $value)
    {
        if (empty($operator)) {
            throw new InvalidArgumentException('The operator must not be null' .
                ' or empty.');
        }

        if (is_null($value) || $value === '') {
            throw new InvalidArgumentException('The value string must not be' .
                ' null or empty');
        }

        $this->simpleOperator = $operator;
        $this->simpleValue = $value;
    }

    /**
     * If the input value is not numeric, escape all quotes, then wrap the
     * string in a pair of quotes.
     *
     * @param mixed $value a value to be formatted
     * @return int|string a number if the input is a numeric value; Otherwise,
     *     returns a quoted string
     */
    private static function formatValue($value)
    {
        // The `$value` argument could be a number (example: 123) or a numeric
        // string (example: '123'). A numeric string is recommended for
        // 32-bit systems to prevent unexpected truncation.
        //
        // To use a numeric string in a WHERE condition, it needs to be
        // wrapped in a pair of quotes.
        // For example:
        //     SELECT Id WHERE Id = '9223372036854775807'
        if (is_numeric($value) && !is_string($value)) {
            return $value;
        }

        return sprintf('\'%s\'', addslashes($value));
    }

    /**
     * Formats each individual value in an array.
     *
     * @param array $listValues the array containing values to be formatted
     * @return array a new array containing formatted values
     */
    private static function formatValues($listValues)
    {
        $formattedValues = [];
        foreach ($listValues as $value) {
            $formattedValues[] = self::formatValue($value);
        }
        return $formattedValues;
    }

    /**
     * Sets the value that follows the equal (=) operator.
     *
     * @param string $value represents the value for comparison
     */
    public function equalTo($value)
    {
        $this->setSimpleOperator('=', $value);
    }

    /**
     * Sets the value that follows the not equal (!=) operator.
     *
     * @param string $value represents the value for comparison
     */
    public function notEqualTo($value)
    {
        $this->setSimpleOperator('!=', $value);
    }

    /**
     * Sets the value that follows the greater than (>) operator.
     *
     * @param string $value represents the value for comparison
     */
    public function greaterThan($value)
    {
        $this->setSimpleOperator('>', $value);
    }

    /**
     * Sets the value that follows the greater than or equal (>=) operator.
     *
     * @param string $value represents the value for comparison
     */
    public function greaterThanOrEqualTo($value)
    {
        $this->setSimpleOperator('>=', $value);
    }

    /**
     * Sets the value that follows the less than (<) operator.
     *
     * @param string $value represents the value for comparison
     */
    public function lessThan($value)
    {
        $this->setSimpleOperator('<', $value);
    }

    /**
     * Sets the value that follows the less than or equal (<=) operator.
     *
     * @param string $value represents the value for comparison
     */
    public function lessThanOrEqualTo($value)
    {
        $this->setSimpleOperator('<=', $value);
    }

    /**
     * Sets the value that follows the STARTS_WITH operator.
     *
     * @param string $value represents the value for comparison
     */
    public function startsWith($value)
    {
        $this->setSimpleOperator(
            PredicateOperator::STARTS_WITH,
            $value
        );
    }

    /**
     * Sets the value that follows the STARTS_WITH_IGNORE_CASE operator.
     *
     * @param string $value represents the value for comparison
     */
    public function startsWithIgnoreCase($value)
    {
        $this->setSimpleOperator(
            PredicateOperator::STARTS_WITH_IGNORE_CASE,
            $value
        );
    }

    /**
     * Sets the value that follows the CONTAINS operator.
     *
     * @param string $value represents the value for comparison
     */
    public function contains($value)
    {
        $this->setSimpleOperator(
            PredicateOperator::CONTAINS,
            $value
        );
    }

    /**
     * Sets the value that follows the CONTAINS_IGNORE_CASE operator.
     *
     * @param string $value represents the value for comparison
     */
    public function containsIgnoreCase($value)
    {
        $this->setSimpleOperator(
            PredicateOperator::CONTAINS_IGNORE_CASE,
            $value
        );
    }

    /**
     * Sets the value that follows the DOES_NOT_CONTAIN operator.
     *
     * @param string $value represents the value for comparison
     */
    public function doesNotContain($value)
    {
        $this->setSimpleOperator(
            PredicateOperator::DOES_NOT_CONTAIN,
            $value
        );
    }

    /**
     * Sets the value that follows the DOES_NOT_CONTAIN_IGNORE_CASE operator.
     *
     * @param string $value represents the value for comparison
     */
    public function doesNotContainIgnoreCase($value)
    {
        $this->setSimpleOperator(
            PredicateOperator::DOES_NOT_CONTAIN_IGNORE_CASE,
            $value
        );
    }

    /**
     * Sets the list operator and values; Also, adds quotes to string values.
     *
     * @param string $listOperator an operator that works with a list of values
     * @param array $values the list of values that follows the operator
     */
    private function setListOperator($listOperator, array $values)
    {
        if (empty($listOperator)) {
            throw new InvalidArgumentException('The list operator must not' .
                ' be null or empty.');
        }

        if (empty($values)) {
            throw new InvalidArgumentException('The list of values must not' .
                ' be null or empty.');
        }

        $this->listOperator = $listOperator;
        $this->listValues = $values;
    }

    /**
     * Sets the list of values that follows the IN operator.
     *
     * @param array $values the list of values that follows the IN operator
     */
    public function in(array $values)
    {
        $this->setListOperator(
            PredicateOperator::IN,
            $values
        );
    }

    /**
     * Sets the list of values that follows the NOT_IN operator.
     *
     * @param array $values the list of values that follows the NOT_IN operator
     */
    public function notIn(array $values)
    {
        $this->setListOperator(
            PredicateOperator::NOT_IN,
            $values
        );
    }

    /**
     * Sets the list of values that follows the CONTAINS_ANY operator.
     *
     * @param array $values the list of values that follows the CONTAINS_ANY
     *     operator
     */
    public function containsAny(array $values)
    {
        $this->setListOperator(
            PredicateOperator::CONTAINS_ANY,
            $values
        );
    }

    /**
     * Sets the list of values that follows the CONTAINS_NONE operator.
     *
     * @param array $values the list of values that follows the CONTAINS_NONE
     *     operator
     */
    public function containsNone(array $values)
    {
        $this->setListOperator(
            PredicateOperator::CONTAINS_NONE,
            $values
        );
    }

    /**
     * Sets the list of values that follows the CONTAINS_ALL operator.
     *
     * @param array $values the list of values that follows the CONTAINS_ALL
     *     operator
     */
    public function containsAll(array $values)
    {
        $this->setListOperator(
            PredicateOperator::CONTAINS_ALL,
            $values
        );
    }

    /**
     * Builds a logic expression in the WHERE clause of an AWQL string.
     *
     * @return string a logic expression in the WHERE clause of an AWQL string
     *
     * @throws BadFunctionCallException when no operators was specified prior
     *     to calling this function
     */
    public function buildExpression()
    {
        if (isset($this->simpleOperator)) {
            return sprintf(
                '%s %s %s',
                $this->fieldName,
                $this->simpleOperator,
                self::formatValue($this->simpleValue)
            );
        }

        if (isset($this->listOperator)) {
            return sprintf(
                '%s %s [%s]',
                $this->fieldName,
                $this->listOperator,
                implode(', ', self::formatValues($this->listValues))
            );
        }

        throw new BadFunctionCallException('An operator must be set' .
            ' prior to calling this function.');
    }
}
