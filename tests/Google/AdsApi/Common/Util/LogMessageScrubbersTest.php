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
namespace Google\AdsApi\Common\Util;

use PHPUnit_Framework_TestCase;
use ReflectionClass;

/**
 * Unit tests for `LogMessageScrubbers`.
 *
 * @see LogMessageScrubbers
 * @small
 */
class LogMessageScrubbersTest extends PHPUnit_Framework_TestCase {

  /**
   * @covers Google\AdsApi\Common\Util\LogMessageScrubbers::scrubRequestHttpHeaders
   */
  public function testScrubOneHttpHeader() {
    $originalHttpHeaders = "server: https://abc.xyz\n"
        . "Authorization: Bearer 123.abc.456.xyz\n"
        . "Bear: Sheep";
    $expectedScrubbedHttpHeaders = "server: https://abc.xyz\n"
        . "Authorization: REDACTED\n"
        . "Bear: Sheep";
    $scrubbedHttpHeaders = LogMessageScrubbers::scrubRequestHttpHeaders(
        $originalHttpHeaders, ['Authorization']);
    $this->assertSame($expectedScrubbedHttpHeaders, $scrubbedHttpHeaders);
  }

  /**
   * @covers Google\AdsApi\Common\Util\LogMessageScrubbers::scrubRequestHttpHeaders
   */
  public function testScrubTwoHttpHeaders() {
    $originalHttpHeaders = "server: https://abc.xyz\n"
        . "Authorization: Bearer 123.abc.456.xyz\n"
        . "Bear: Sheep";
    $expectedScrubbedHttpHeaders = "server: https://abc.xyz\n"
        . "Authorization: REDACTED\n"
        . "Bear: REDACTED";
    $scrubbedHttpHeaders = LogMessageScrubbers::scrubRequestHttpHeaders(
        $originalHttpHeaders, ['Authorization', 'Bear']);
    $this->assertSame($expectedScrubbedHttpHeaders, $scrubbedHttpHeaders);
  }

  /**
   * @covers Google\AdsApi\Common\Util\LogMessageScrubbers::scrubRequestHttpHeaders
   */
  public function testScrubHttpHeadersNothingToScrubNoOp() {
    $originalHttpHeaders = "server: https://abc.xyz\n"
        . "Authorization: Bearer 123.abc.456.xyz\n"
        . "Bear: Sheep";
    $scrubbedHttpHeaders = LogMessageScrubbers::scrubRequestHttpHeaders(
        $originalHttpHeaders, []);
    $this->assertSame($originalHttpHeaders, $scrubbedHttpHeaders);
  }

  /**
   * @covers Google\AdsApi\Common\Util\LogMessageScrubbers::scrubRequestSoapHeaders
   */
  public function testScrubOneSoapHeader() {
    $originalSoapXml = '<xml><RequestHeader>'
        . '<developerToken>rawr</developerToken>'
        . '</RequestHeader></xml>';
    $expectedSoapXml = '<xml><RequestHeader>'
        . '<developerToken>REDACTED</developerToken>'
        . '</RequestHeader></xml>';
    $scrubbedSoapHeaders = LogMessageScrubbers::scrubRequestSoapHeaders(
        $originalSoapXml, ['developerToken']);
    $this->assertSame($expectedSoapXml, $scrubbedSoapHeaders);
  }

  /**
   * @covers Google\AdsApi\Common\Util\LogMessageScrubbers::scrubRequestSoapHeaders
   */
  public function testScrubTwoSoapHeaders() {
    $originalSoapXml = '<xml><RequestHeader>'
        . '<developerToken>rawr</developerToken>'
        . '<clientCustomerId>googs</clientCustomerId>'
        . '</RequestHeader></xml>';
    $expectedSoapXml = '<xml><RequestHeader>'
        . '<developerToken>REDACTED</developerToken>'
        . '<clientCustomerId>REDACTED</clientCustomerId>'
        . '</RequestHeader></xml>';
    $scrubbedSoapHeaders = LogMessageScrubbers::scrubRequestSoapHeaders(
        $originalSoapXml, ['developerToken', 'clientCustomerId']);
    $this->assertSame($expectedSoapXml, $scrubbedSoapHeaders);
  }

  /**
   * @covers Google\AdsApi\Common\Util\LogMessageScrubbers::scrubRequestSoapHeaders
   */
  public function testScrubSoapHeadersNothingToScrubNoOp() {
    $originalSoapXml = '<xml><RequestHeader><developerToken>rawr'
        . '</developerToken></RequestHeader></xml>';
    $scrubbedSoapHeaders = LogMessageScrubbers::scrubRequestSoapHeaders(
        $originalSoapXml, []);
    $this->assertSame($originalSoapXml, $scrubbedSoapHeaders);
  }
}
