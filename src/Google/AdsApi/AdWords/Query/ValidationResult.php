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

use InvalidArgumentException;

/**
 * Indicates whether a validation has passed or failed with an explanation.
 *
 * @see Google\AdsApi\AdWords\Query\QueryValidator
 */
final class ValidationResult
{
    /**
     * @var ValidationResult represents a passed validation result. This
     *     result can be reused for all passed validations because it is always
     *     the same.
     */
    private static $passedResult;

    private $passed;
    private $failReason;

    /**
     * Creates a validation result object.
     *
     * @param boolean $passed whether the validation has passed
     * @param string|null $failReason optional, the reason why validation has
     *     failed
     */
    private function __construct($passed, $failReason = null)
    {
        if (empty($failReason) !== $passed) {
            throw new InvalidArgumentException('The fail reason must be' .
                ' specified if and only if the validation failed.');
        }

        if (!empty($failReason) && !is_string($failReason)) {
            throw new InvalidArgumentException('The fail reason must be a' .
                ' string.');
        }

        $this->passed = $passed;
        $this->failReason = $failReason;
    }

    /**
     * Creates a validation fail result with an explanation.
     *
     * @param string $reason the explanation of why validation has failed
     * @return ValidationResult the validation fail result with an
     *     explanation
     */
    public static function fail($reason)
    {
        return new self(false, $reason);
    }

    /**
     * Creates a validation pass result.
     *
     * @return ValidationResult the validation pass result
     */
    public static function pass()
    {
        if (is_null(self::$passedResult)) {
            self::$passedResult = new self(true);
        }

        return self::$passedResult;
    }

    /**
     * Gets validation result of whether it has passed or failed.
     *
     * @return boolean true if the validation has passed; Otherwise, returns
     *     false
     */
    public function isPassed()
    {
        return true === $this->passed;
    }

    /**
     * Gets validation result of whether it has failed.
     *
     * @return boolean true if the validation has failed; Otherwise, returns
     *     false
     */
    public function isFailed()
    {
        return false === $this->passed;
    }

    /**
     * Gets the explanation why the validation has failed.
     *
     * @return string|null a string to explain why validation has failed, or
     *     null if validation has passed
     */
    public function getFailReason()
    {
        return $this->failReason;
    }
}
