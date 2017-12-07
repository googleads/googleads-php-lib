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
namespace Google\AdsApi\Common;

use Google\AdsApi\Common\Testing\FakeSoapPayloadsAndLogsProvider;
use PHPUnit\Framework\TestCase;
use SoapFault;

/**
 * Unit tests for `SoapLogMessageFormatter`.
 *
 * @see SoapLogMessageFormatter
 * @small
 */
class SoapLogMessageFormatterTest extends TestCase {

  private $soapLogMessageFormatter;
  private $requestHttpHeadersMock;
  private $requestSoapXmlMock;
  private $responseHttpHeadersMock;
  private $responseSoapXmlMock;
  private $mutateRequestHttpHeadersMock;
  private $mutateRequestSoapXmlMock;
  private $mutateResponseHttpHeadersMock;
  private $mutateResponseSoapXmlMock;

  /**
   * @see PHPUnit\Framework\TestCase::setUp
   */
  protected function setUp() {
    $this->soapLogMessageFormatter = new SoapLogMessageFormatter();
    $this->requestHttpHeadersMock = FakeSoapPayloadsAndLogsProvider
        ::getFakeGetCreativesRequestHttpHeaders();
    $this->requestSoapXmlMock = FakeSoapPayloadsAndLogsProvider
        ::getFakeGetCreativesRequest();
    $this->responseHttpHeadersMock = FakeSoapPayloadsAndLogsProvider
        ::getFakeGetCreativesResponseHttpHeaders();
    $this->responseSoapXmlMock = FakeSoapPayloadsAndLogsProvider
        ::getFakeGetCreativesResponse();

    $this->mutateRequestHttpHeadersMock = FakeSoapPayloadsAndLogsProvider
        ::getFakeMutateRequestHttpHeaders();
    $this->mutateRequestSoapXmlMock = FakeSoapPayloadsAndLogsProvider
        ::getFakeMutateRequest();
    $this->mutateResponseHttpHeadersMock = FakeSoapPayloadsAndLogsProvider
        ::getFakeMutateResponseHttpHeaders();
    $this->mutateResponseSoapXmlMock = FakeSoapPayloadsAndLogsProvider
        ::getFakeMutateResponse();
  }

  /**
   * @covers Google\AdsApi\Common\SoapLogMessageFormatter::formatSummary
   */
  public function testFormatSummary() {
    $this->assertSame(
        'service=CreativeService method=getCreativesByStatement '
            . 'responseTime=226 requestId=123abc456xyz server=ads.google.com '
            . 'isFault=0 faultMessage=',
        $this->soapLogMessageFormatter->formatSummary(
            'CreativeService',
            'getCreativesByStatement',
            $this->requestHttpHeadersMock,
            $this->requestSoapXmlMock,
            $this->responseSoapXmlMock
        )
    );
  }

  /**
   * @covers Google\AdsApi\Common\SoapLogMessageFormatter::formatSummary
   */
  public function testFormatSummaryWithFault() {
    $this->assertSame(
        'service=CreativeService method=getCreativesByStatement '
            . 'responseTime=226 requestId=123abc456xyz server=ads.google.com '
            . 'isFault=1 faultMessage=Could not contact server.',
        $this->soapLogMessageFormatter->formatSummary(
           'CreativeService',
            'getCreativesByStatement',
            $this->requestHttpHeadersMock,
            $this->requestSoapXmlMock,
            $this->responseSoapXmlMock,
            new SoapFault('SERVER', 'Could not contact server.')
        )
    );
  }

  /**
   * @covers Google\AdsApi\Common\SoapLogMessageFormatter::formatSummary
   */
  public function testFormatSummaryWithLongFaultIsTruncated() {
    $soapLogMessageFormatter = new SoapLogMessageFormatter(
        null,
        null,
        null,
        null,
        null,
        34
    );
    $this->assertSame(
        'service=CreativeService method=getCreativesByStatement '
            . 'responseTime=226 requestId=123abc456xyz server=ads.google.com '
            . 'isFault=1 faultMessage=Could not contact server. See 熊羊 f...',
        $soapLogMessageFormatter->formatSummary(
            'CreativeService',
            'getCreativesByStatement',
            $this->requestHttpHeadersMock,
            $this->requestSoapXmlMock,
            $this->responseSoapXmlMock,
            new SoapFault('SERVER',
                "Could not \r\rcontact \nserver.\n See 熊羊 for details.\n")
        )
    );
  }

  /**
   * @covers Google\AdsApi\Common\SoapLogMessageFormatter::formatDetailed
   */
  public function testFormatDetailed() {
    $actualDetailedLog = $this->soapLogMessageFormatter->formatDetailed(
        $this->requestHttpHeadersMock,
        $this->requestSoapXmlMock,
        $this->responseHttpHeadersMock,
        $this->responseSoapXmlMock
    );
    $expectedDetailedLog =
        FakeSoapPayloadsAndLogsProvider::getFakeSoapXmlLog();
    $this->assertSame(trim($expectedDetailedLog), trim($actualDetailedLog));
  }

  /**
   * @covers Google\AdsApi\Common\SoapLogMessageFormatter::formatDetailed
   */
  public function testFormatDetailedWithScrubbing() {
    $soapLogMessageFormatter = new SoapLogMessageFormatter(
        ['Authorization'],
        ['networkCode', 'clientCustomerId'],
        ['httpAuthorizationHeader']
    );
    $actualDetailedLog = $soapLogMessageFormatter->formatDetailed(
        $this->mutateRequestHttpHeadersMock,
        $this->mutateRequestSoapXmlMock,
        $this->mutateResponseHttpHeadersMock,
        $this->mutateResponseSoapXmlMock
    );
    $expectedDetailedLog =
        FakeSoapPayloadsAndLogsProvider::getScrubbedFakeMutateSoapXmlLog();
    $this->assertSame(trim($expectedDetailedLog), trim($actualDetailedLog));
  }
}
