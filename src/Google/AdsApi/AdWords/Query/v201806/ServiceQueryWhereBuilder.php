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
use Google\AdsApi\AdWords\Query\WhereBuilderInterface;
use InvalidArgumentException;

/**
 * Builds a logic expression in the WHERE clause of an AWQL string and returns a
 * `ServiceQueryBuilder` object for chaining.
 */
final class ServiceQueryWhereBuilder implements WhereBuilderInterface
{
    /**
     * @var ServiceQueryBuilder the query builder object for continuation of
     *     building a complete AWQL string
     */
    private $queryBuilder;

    /**
     * @var ExpressionBuilder the expression builder to build a logic
     *     expression in the WHERE clause
     */
    private $expressionBuilder;

    /**
     * Creates a where builder object to build a logic expression in the WHERE
     * clause of an AWQL string.
     *
     * @param ServiceQueryBuilder $queryBuilder the query builder object for
     *     continuation of building a complete AWQL string
     * @param ExpressionBuilder $expressionBuilder the expression builder to
     *     build the logic expression
     */
    private function __construct(
        ServiceQueryBuilder $queryBuilder,
        ExpressionBuilder $expressionBuilder
    ) {
        $this->queryBuilder = $queryBuilder;
        $this->expressionBuilder = $expressionBuilder;
    }

    /**
     * Creates a where builder object to start a logic expression with a
     * field name.
     *
     * @param string $field name of the field to be used as the left-hand
     *     operand of a logic expression
     * @param ServiceQueryBuilder $queryBuilder the query builder object for
     *     continuation of building a complete AWQL string
     * @return ServiceQueryWhereBuilder a where builder object to build a logic
     *     expression starting with the given field name
     */
    public static function createWithField(
        $field,
        ServiceQueryBuilder $queryBuilder
    ) {
        $validationResult = QueryValidator::validateFieldName($field);
        if ($validationResult->isFailed()) {
            throw new InvalidArgumentException(
                'The field name for building the WHERE clause is invalid.' .
                ' Validation fail reason: ' .
                $validationResult->getFailReason()
            );
        }
        return new self($queryBuilder, new ExpressionBuilder($field));
    }

    /**
     * Creates a new where builder object by copying the logic expression from
     * another where builder object.
     *
     * @param ServiceQueryWhereBuilder $otherInstance the other where builder
     *     object for copying the logic expression
     * @param ServiceQueryBuilder $queryBuilder the query builder object for
     *     continuation of building a complete AWQL string
     * @return ServiceQueryWhereBuilder a new where builder object that
     *     copies from the input one
     */
    public static function copyFrom(
        ServiceQueryWhereBuilder $otherInstance,
        ServiceQueryBuilder $queryBuilder
    ) {
        return new self(
            $queryBuilder,
            ExpressionBuilder::copyFrom($otherInstance->expressionBuilder)
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
    public function buildWhere()
    {
        return $this->expressionBuilder->buildExpression();
    }

    /**
     * Sets the value that follows the equal (=) operator.
     *
     * @param string $value represents the value for comparison
     * @return ServiceQueryBuilder the `ServiceQueryBuilder` object for
     *     continuation of building a complete AWQL string
     */
    public function equalTo($value)
    {
        $this->expressionBuilder->equalTo($value);
        return $this->queryBuilder;
    }

    /**
     * Sets the value that follows the not equal (!=) operator.
     *
     * @param string $value represents the value for comparison
     * @return ServiceQueryBuilder the `ServiceQueryBuilder` object for
     *     continuation of building a complete AWQL string
     */
    public function notEqualTo($value)
    {
        $this->expressionBuilder->notEqualTo($value);
        return $this->queryBuilder;
    }

    /**
     * Sets the value that follows the greater than (>) operator.
     *
     * @param string $value represents the value for comparison
     * @return ServiceQueryBuilder the `ServiceQueryBuilder` object for
     *     continuation of building a complete AWQL string
     */
    public function greaterThan($value)
    {
        $this->expressionBuilder->greaterThan($value);
        return $this->queryBuilder;
    }

    /**
     * Sets the value that follows the greater than or equal (>=) operator.
     *
     * @param string $value represents the value for comparison
     * @return ServiceQueryBuilder the `ServiceQueryBuilder` object for
     *     continuation of building a complete AWQL string
     */
    public function greaterThanOrEqualTo($value)
    {
        $this->expressionBuilder->greaterThanOrEqualTo($value);
        return $this->queryBuilder;
    }

    /**
     * Sets the value that follows the less than (<) operator.
     *
     * @param string $value represents the value for comparison
     * @return ServiceQueryBuilder the `ServiceQueryBuilder` object for
     *     continuation of building a complete AWQL string
     */
    public function lessThan($value)
    {
        $this->expressionBuilder->lessThan($value);
        return $this->queryBuilder;
    }

    /**
     * Sets the value that follows the less than or equal (<=) operator.
     *
     * @param string $value represents the value for comparison
     * @return ServiceQueryBuilder the `ServiceQueryBuilder` object for
     *     continuation of building a complete AWQL string
     */
    public function lessThanOrEqualTo($value)
    {
        $this->expressionBuilder->lessThanOrEqualTo($value);
        return $this->queryBuilder;
    }

    /**
     * Sets the value that follows the STARTS_WITH operator.
     *
     * @param string $value represents the value for comparison
     * @return ServiceQueryBuilder the `ServiceQueryBuilder` object for
     *     continuation of building a complete AWQL string
     */
    public function startsWith($value)
    {
        $this->expressionBuilder->startsWith($value);
        return $this->queryBuilder;
    }

    /**
     * Sets the value that follows the STARTS_WITH_IGNORE_CASE operator.
     *
     * @param string $value represents the value for comparison
     * @return ServiceQueryBuilder the `ServiceQueryBuilder` object for
     *     continuation of building a complete AWQL string
     */
    public function startsWithIgnoreCase($value)
    {
        $this->expressionBuilder->startsWithIgnoreCase($value);
        return $this->queryBuilder;
    }

    /**
     * Sets the value that follows the CONTAINS operator.
     *
     * @param string $value represents the value for comparison
     * @return ServiceQueryBuilder the `ServiceQueryBuilder` object for
     *     continuation of building a complete AWQL string
     */
    public function contains($value)
    {
        $this->expressionBuilder->contains($value);
        return $this->queryBuilder;
    }

    /**
     * Sets the value that follows the CONTAINS_IGNORE_CASE operator.
     *
     * @param string $value represents the value for comparison
     * @return ServiceQueryBuilder the `ServiceQueryBuilder` object for
     *     continuation of building a complete AWQL string
     */
    public function containsIgnoreCase($value)
    {
        $this->expressionBuilder->containsIgnoreCase($value);
        return $this->queryBuilder;
    }

    /**
     * Sets the value that follows the DOES_NOT_CONTAIN operator.
     *
     * @param string $value represents the value for comparison
     * @return ServiceQueryBuilder the `ServiceQueryBuilder` object for
     *     continuation of building a complete AWQL string
     */
    public function doesNotContain($value)
    {
        $this->expressionBuilder->doesNotContain($value);
        return $this->queryBuilder;
    }

    /**
     * Sets the value that follows the DOES_NOT_CONTAIN_IGNORE_CASE operator.
     *
     * @param string $value represents the value for comparison
     * @return ServiceQueryBuilder the `ServiceQueryBuilder` object for
     *     continuation of building a complete AWQL string
     */
    public function doesNotContainIgnoreCase($value)
    {
        $this->expressionBuilder->doesNotContainIgnoreCase(
            $value
        );
        return $this->queryBuilder;
    }

    /**
     * Sets the list of values that follows the IN operator.
     *
     * @param array $values the list of values that follows the IN operator
     * @return ServiceQueryBuilder the `ServiceQueryBuilder` object for
     *     continuation of building a complete AWQL string
     */
    public function in(array $values)
    {
        $this->expressionBuilder->in($values);
        return $this->queryBuilder;
    }

    /**
     * Sets the list of values that follows the NOT_IN operator.
     *
     * @param array $values the list of values that follows the NOT_IN operator
     * @return ServiceQueryBuilder the `ServiceQueryBuilder` object for
     *     continuation of building a complete AWQL string
     */
    public function notIn(array $values)
    {
        $this->expressionBuilder->notIn($values);
        return $this->queryBuilder;
    }

    /**
     * Sets the list of values that follows the CONTAINS_ANY operator.
     *
     * @param array $values the list of values that follows the CONTAINS_ANY
     *     operator
     * @return ServiceQueryBuilder the `ServiceQueryBuilder` object for
     *     continuation of building a complete AWQL string
     */
    public function containsAny(array $values)
    {
        $this->expressionBuilder->containsAny($values);
        return $this->queryBuilder;
    }

    /**
     * Sets the list of values that follows the CONTAINS_NONE operator.
     *
     * @param array $values the list of values that follows the CONTAINS_NONE
     *     operator
     * @return ServiceQueryBuilder the `ServiceQueryBuilder` object for
     *     continuation of building a complete AWQL string
     */
    public function containsNone(array $values)
    {
        $this->expressionBuilder->containsNone($values);
        return $this->queryBuilder;
    }

    /**
     * Sets the list of values that follows the CONTAINS_ALL operator.
     *
     * @param array $values the list of values that follows the CONTAINS_ALL
     *     operator
     * @return ServiceQueryBuilder the `ServiceQueryBuilder` object for
     *     continuation of building a complete AWQL string
     */
    public function containsAll(array $values)
    {
        $this->expressionBuilder->containsAll($values);
        return $this->queryBuilder;
    }
}
