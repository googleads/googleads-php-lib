<?php
/**
 * Copyright 2018 Google Inc. All Rights Reserved.
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
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `ValidationResult`.
 *
 * @see ValidationResult
 * @small
 */
class ValidationResultTest extends TestCase
{

    /**
     * @covers Google\AdsApi\AdWords\Query\ValidationResult::pass
     */
    public function testCreatePassedValidationResult()
    {
        $result = ValidationResult::pass();
        $this->assertTrue($result->isPassed());
        $this->assertFalse($result->isFailed());
        $this->assertTrue(is_null($result->getFailReason()));
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\ValidationResult::fail
     */
    public function testCreateFailedValidationResult()
    {
        $reason = 'The field name must not be null or empty';
        $result = ValidationResult::fail($reason);
        $this->assertFalse($result->isPassed());
        $this->assertTrue($result->isFailed());
        $this->assertEquals($reason, $result->getFailReason());
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\ValidationResult::fail
     *
     * @expectedException InvalidArgumentException
     */
    public function testCreateFailedValidationResultWithNullReason()
    {
        ValidationResult::fail(null);
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\ValidationResult::fail
     *
     * @expectedException InvalidArgumentException
     */
    public function testCreateFailedValidationResultWithEmptyReason()
    {
        ValidationResult::fail('');
    }

    /**
     * @covers Google\AdsApi\AdWords\Query\ValidationResult::fail
     *
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage must be a string
     */
    public function testCreateFailedValidationResultWithReasonArray()
    {
        ValidationResult::fail(['reason 1', 'reason 2']);
    }
}
