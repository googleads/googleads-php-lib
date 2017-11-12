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

use Google\AdsApi\Common\Testing\FakeSoapPayloadsAndLogsProvider;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `SoapRequests`.
 *
 * @see SoapRequests
 * @small
 */
class SoapRequestsTest extends TestCase {

  /**
   * @covers Google\AdsApi\Common\Util\SoapRequests::replaceReferences
   */
  public function testReplaceReferencesInvalidXmlIsNoOp() {
    $invalidXml = 'hello world';
    $this->assertSame(
        $invalidXml,
        SoapRequests::replaceReferences($invalidXml)
    );
  }

  /**
   * @covers Google\AdsApi\Common\Util\SoapRequests::replaceReferences
   */
  public function testReplaceReferencesNullXmlIsNoOp() {
    $nullXml = null;
    $this->assertSame(
        $nullXml,
        SoapRequests::replaceReferences($nullXml)
    );
  }

  /**
   * @covers Google\AdsApi\Common\Util\SoapRequests::replaceReferences
   */
  public function testReplaceReferencesNoRefsIsNoOp() {
    $requestXml = FakeSoapPayloadsAndLogsProvider::getFakeGetCreativesRequest();
    $this->assertXmlStringEqualsXmlString(
        $requestXml,
        SoapRequests::replaceReferences($requestXml)
    );
  }

  /**
   * @covers Google\AdsApi\Common\Util\SoapRequests::replaceReferences
   */
  public function testReplaceReferencesAllRefsReplaced() {
    $requestXmlWithRefs =
        FakeSoapPayloadsAndLogsProvider::getFakeGetCreativesRequestWithRefs();
    $requestXmlWithRefsReplaced = FakeSoapPayloadsAndLogsProvider
        ::getFakeGetCreativesRequestWithRefsReplaced();
    $this->assertXmlStringEqualsXmlString(
        $requestXmlWithRefsReplaced,
        SoapRequests::replaceReferences($requestXmlWithRefs)
    );
  }
}
