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


use Google\AdsApi\Common\AdsSoapClientLogMessageHandler;
use PHPUnit_Framework_TestCase;
use SoapFault;

/**
 * Unit tests for AdsSoapClientLogMessageHandler.
 * @see AdsSoapClientLogMessageHandler
 * @small
 */
class AdsSoapClientLogMessageHandlerTest extends PHPUnit_Framework_TestCase {

  private $adsSoapClientLogMessageHandler;
  private $requestHttpHeadersMock;
  private $requestSoapXmlMock;
  private $responseHttpHeadersMock;
  private $responseSoapXmlMock;

  /**
   * @see PHPUnit_Framework_TestCase::setUp
   */
  protected function setUp() {
    $this->adsSoapClientLogMessageHandler =
        new AdsSoapClientLogMessageHandler();

    set_include_path(get_include_path() . PATH_SEPARATOR
        . __DIR__ . '/../../../../src/Google/AdsApi/Common/Testing');
    $this->requestHttpHeadersMock = file_get_contents(
        'getCreativesByStatement_request_httpheaders.txt',
        FILE_USE_INCLUDE_PATH
    );
    $this->requestSoapXmlMock = file_get_contents(
        'getCreativesByStatement_request.xml',
        FILE_USE_INCLUDE_PATH
    );
    $this->responseHttpHeadersMock = file_get_contents(
        'getCreativesByStatement_response_httpheaders.txt',
        FILE_USE_INCLUDE_PATH
    );
    $this->responseSoapXmlMock = file_get_contents(
        'getCreativesByStatement_response.xml',
        FILE_USE_INCLUDE_PATH
    );
  }

  /**
   * @see PHPUnit_Framework_TestCase::tearDown
   */
  protected function tearDown() {
    restore_include_path();
  }

  /**
   * @covers
   *     Google\AdsApi\Common\AdsSoapClientLogMessageHandler::generateRequestInfoMessage
   */
  public function testGenerateRequestInfoMessage() {
    $infoMessage =
        $this->adsSoapClientLogMessageHandler->generateRequestInfoMessage(
            'CreativeService',
            'getCreativesByStatement',
            $this->requestHttpHeadersMock,
            $this->responseSoapXmlMock
        );
    $this->assertSame(
        'service=CreativeService method=getCreativesByStatement '
            . 'responseTime=226 requestId=123abc456xyz server=ads.google.com '
            . 'isFault=0 faultMessage=',
        $infoMessage
    );
  }

  /**
   * @covers
   *     Google\AdsApi\Common\AdsSoapClientLogMessageHandler::generateRequestInfoMessage
   */
  public function testGenerateRequestInfoMessageWithFault() {
    $infoMessage =
        $this->adsSoapClientLogMessageHandler->generateRequestInfoMessage(
            'CreativeService',
            'getCreativesByStatement',
            $this->requestHttpHeadersMock,
            $this->responseSoapXmlMock,
            new SoapFault('SERVER', 'Could not contact server.')
        );
    $this->assertSame(
        'service=CreativeService method=getCreativesByStatement '
            . 'responseTime=226 requestId=123abc456xyz server=ads.google.com '
            . 'isFault=1 faultMessage=Could not contact server.',
        $infoMessage
    );
  }

  /**
   * @covers
   *     Google\AdsApi\Common\AdsSoapClientLogMessageHandler::generateSoapXmlLogMessage
   */
  public function testGenerateSoapXmlLogMessage() {
    // Mock the HTTP and SOAP header scrubbers to leave the headers unchanged
    // (no-op).
    $scrubHttpHeadersValueMap = [
        [
            trim($this->requestHttpHeadersMock),
            trim($this->requestHttpHeadersMock)
        ], [
            trim($this->responseHttpHeadersMock),
            trim($this->responseHttpHeadersMock)
        ]
    ];
    $scrubSoapHeadersValueMap = [
        [
            $this->requestSoapXmlMock,
            $this->requestSoapXmlMock
        ], [
            $this->responseSoapXmlMock,
            $this->responseSoapXmlMock
        ]
    ];
    $adsHeaderHandlerMock =
        $this->getMock('Google\AdsApi\Common\AdsHeaderHandler');
    $adsHeaderHandlerMock->expects($this->any())
        ->method('scrubHttpHeaders')
        ->will($this->returnValueMap($scrubHttpHeadersValueMap));
    $adsHeaderHandlerMock->expects($this->any())
        ->method('scrubSoapHeaders')
        ->will($this->returnValueMap($scrubSoapHeadersValueMap));

    $actualSoapLogs =
        $this->adsSoapClientLogMessageHandler->generateSoapXmlLogMessage(
            $this->requestHttpHeadersMock,
            $this->requestSoapXmlMock,
            $this->responseHttpHeadersMock,
            $this->responseSoapXmlMock,
            $adsHeaderHandlerMock
        );
    $expectedSoapLogs = file_get_contents(
        'getCreativesByStatement_expected_soapxmllog.txt',
        FILE_USE_INCLUDE_PATH
    );
    $this->assertSame(trim($expectedSoapLogs), trim($actualSoapLogs));
  }
}

