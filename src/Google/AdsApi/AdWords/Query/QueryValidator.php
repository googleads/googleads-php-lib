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

namespace Google\AdsApi\AdWords\Query;

use DateTime;

/**
 * Validates parts of an AWQL string.
 */
final class QueryValidator
{
    /**
     * The regular expression pattern to identify whether an AWQL string
     * contains literal strings by searching for single and double quotes.
     *
     * For example, the AWQL string below contains a double quoted
     * literal string:
     *     SELECT Id WHERE Name = "I'M THE LIMIT INC"
     */
    const PATTERN_LITERAL_STRING = '/([\'].*?(?<!\\\\)\')|(["].*?(?<!\\\\)")/i';

    /**
     * The replacement for any literal strings found in an AWQL string.
     */
    const REDACTED_LITERAL_STRING = 'redacted_literal_string';

    /**
     * Validates a field name for using in the SELECT, WHERE or ORDER BY
     * clauses of an AWQL string.
     *
     * @param string $fieldName the field name to be validated
     * @return ValidationResult the object containing whether the validation
     *     is passed or failed with detail explanation
     */
    public static function validateFieldName($fieldName)
    {
        if (!is_string($fieldName)) {
            return ValidationResult::fail('The field name must be a' .
                ' string.');
        }

        if (empty(trim($fieldName))) {
            return ValidationResult::fail('The field name must not be' .
                ' null, empty, white spaces or zero.');
        }

        return ValidationResult::pass();
    }

    /**
     * Validates the start and end dates of a custom date range in the DURING
     * clause of an AWQL string.
     *
     * @param string $startDateString the start date string
     * @param string $endDateString the end date string
     * @return ValidationResult the object containing whether the validation
     *     is passed or failed with detail explanation
     */
    public static function validateCustomDateRange(
        $startDateString,
        $endDateString
    ) {
        $startDate = DateTime::createFromFormat('Ymd', $startDateString);
        $warningsFound = !empty(DateTime::getLastErrors()['warnings']);

        // If parsing fails with errors, the `$startDate` will be `false`.
        // If parsing succeeds, there could still be warnings indicating that
        // the parsed result might not be what the original string represents.
        //
        // For example: the string '20180231' will be parsed as March 3rd
        // 2018 with a warning of 'The parsed date is invalid'.
        if (false === $startDate || $warningsFound) {
            return ValidationResult::fail('The start date must be a valid' .
                ' date and follow YYYYMMDD format.');
        }

        $endDate = DateTime::createFromFormat('Ymd', $endDateString);
        $warningsFound = !empty(DateTime::getLastErrors()['warnings']);
        if (false === $endDate || $warningsFound) {
            return ValidationResult::fail('The end date must be a valid date' .
                ' and follow YYYYMMDD format.');
        }

        if ($endDate < $startDate) {
            return ValidationResult::fail('The end date must not be prior to' .
                ' the start date.');
        }

        return ValidationResult::pass();
    }

    /**
     * Checks if an AWQL string contains certain clauses by searching for
     * the clause opening keywords.
     *
     * @param string $awqlString the AWQL string to check
     * @param string[] $clauseKeywords the clause opening keywords (e.g. SELECT,
     *     FROM, WHERE, ORDER BY) to search
     * @param bool $containAll whether the AWQL string should contain all of
     *     the given keywords. Set to false for checking whether the AWQL
     *     string should contain any of the given keywords
     * @return bool true if the AWQL string contains all or any the clause
     *     keywords accordingly to the `$containAll` parameter; Otherwise,
     *     returns false
     */
    private static function containKeywords(
        $awqlString,
        $clauseKeywords,
        $containAll
    ) {
        // The AWQL string may contain the clause opening keywords in literal
        // strings.
        //
        // For example:
        //     SELECT Id
        //     WHERE Name = 'THE LIMIT INC'
        //
        // This function concerns about the LIMIT keyword outside of all literal
        // strings. Redacting all literal strings before scanning for the
        // keywords will avoid false positive results.
        //
        // Redacted example:
        //     SELECT Id
        //     WHERE Name = redacted_literal_string

        $awqlStringWithoutLiteralStrings = preg_replace(
            self::PATTERN_LITERAL_STRING,
            self::REDACTED_LITERAL_STRING,
            $awqlString
        );

        $count = 0;
        foreach ($clauseKeywords as $clause) {
            if (false !== stripos($awqlStringWithoutLiteralStrings, $clause)) {
                if (!$containAll) {
                    return true;
                }
                $count++;
            }
        }
        return $count === count($clauseKeywords);
    }

    /**
     * Checks if the AWQL string contains all of the clause opening keywords.
     *
     * @param string $awqlString the AWQL string to check
     * @param string[] $clauseKeywords the clause opening keywords (e.g. SELECT,
     *     FROM, WHERE, ORDER BY) to search
     * @return bool true if the AWQL string contains all of the given keywords;
     *     Otherwise, returns false
     */
    private static function containAllKeywords($awqlString, $clauseKeywords)
    {
        return self::containKeywords(
            $awqlString,
            $clauseKeywords,
            true
        );
    }

    /**
     * Checks if the AWQL string contains any of the given clause opening
     * keywords.
     *
     * @param string $awqlString the AWQL string to check
     * @param string[] $clauseKeywords the clause opening keywords (e.g. SELECT,
     *     FROM, WHERE, ORDER BY) to search
     * @return bool true if the AWQL string contains any of the given keywords;
     *     Otherwise, returns false
     */
    private static function containAnyKeywords($awqlString, $clauseKeywords)
    {
        return self::containKeywords(
            $awqlString,
            $clauseKeywords,
            false
        );
    }

    /**
     * Checks if the AWQL string contains the required clause opening keywords,
     * but not the forbidden ones.
     *
     * @param string $awqlString the AWQL string to check
     * @param string[] $requiredKeywords the opening keywords (e.g. SELECT,
     *     FROM, WHERE, ORDER BY) for the required clauses
     * @param string[] $forbiddenKeywords the opening keywords (e.g. SELECT,
     *     FROM, WHERE, ORDER BY) for the forbidden clauses
     * @return ValidationResult the object containing whether the validation
     *     is passed or failed with detail explanation
     */
    private static function validateQuery(
        $awqlString,
        $requiredKeywords,
        $forbiddenKeywords
    ) {
        if (empty($awqlString)) {
            return ValidationResult::fail('The AWQL string must not be' .
                ' null or empty');
        }

        if (!self::containAllKeywords($awqlString, $requiredKeywords)) {
            return ValidationResult::fail(
                sprintf(
                    'The AWQL string must contain %s clause(s).',
                    implode(', ', $requiredKeywords)
                )
            );
        }

        if (self::containAnyKeywords($awqlString, $forbiddenKeywords)) {
            return ValidationResult::fail(
                sprintf(
                    'The AWQL string must not contain %s clauses.',
                    implode(', ', $forbiddenKeywords)
                )
            );
        }

        return ValidationResult::pass();
    }

    /**
     * Validates a service query AWQL string.
     *
     * @param string $awqlString the AWQL string to be validated
     * @param bool|null $allowPagination optional, indicates whether the AWQL
     *     is allowed to have the pagination (LIMIT) clause
     * @return ValidationResult the object containing whether the validation
     *     is passed or failed with detail explanation
     */
    public static function validateServiceQuery(
        $awqlString,
        $allowPagination = true
    ) {
        $forbiddenKeywords = ['FROM', 'DURING'];
        if (!$allowPagination) {
            $forbiddenKeywords []= 'LIMIT';
        }
        return self::validateQuery(
            $awqlString,
            ['SELECT'],
            $forbiddenKeywords
        );
    }

    /**
     * Validates a report query AWQL string.
     *
     * @param string $awqlString the AWQL string to be validated
     * @return ValidationResult the object containing whether the validation
     *     is passed or failed with detail explanation
     */
    public static function validateReportQuery($awqlString)
    {
        return self::validateQuery(
            $awqlString,
            ['SELECT', 'FROM'],
            ['ORDER BY', 'LIMIT']
        );
    }
}
