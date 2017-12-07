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
namespace Google\AdsApi\Common;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Unit tests for `AdsGuzzleProxyHttpHandler`.
 *
 * @see AdsGuzzleProxyHttpHandler
 * @small
 */
class AdsGuzzleProxyHttpHandlerTest extends TestCase {

  /**
   * @see PHPUnit\Framework\TestCase::setUp
   */
  protected function setUp() {
    $this->mockRequest =
        $this->getMockBuilder(RequestInterface::class)->getMock();
    $this->mockClient = $this->getMockBuilder(Client::class)->getMock();
    $this->mockClient
        ->expects($this->any())
        ->method('send')
        ->will($this->returnValue(new Response(200)));
  }

  /**
   * @covers Google\AdsApi\Common\AdsGuzzleProxyHttpHandler::__invoke()
   */
  public function testSendRequest_emptyProxyUrl() {
    $mockSession = $this->getMockBuilder(AdsSession::class)->getMock();
    $connectionSettings = (new ConnectionSettingsBuilder())
        ->withProxyUrl('')
        ->build();
    $mockSession
        ->expects($this->any())
        ->method('getConnectionSettings')
        ->will($this->returnValue($connectionSettings));

    $handler = new AdsGuzzleProxyHttpHandler($mockSession, $this->mockClient);
    $response = $handler($this->mockRequest);
    $this->assertInstanceOf(ResponseInterface::class, $response);
  }

  /**
   * @covers Google\AdsApi\Common\AdsGuzzleProxyHttpHandler::__invoke()
   */
  public function testSendRequest_withProxyUrl() {
    $mockSession = $this->getMockBuilder(AdsSession::class)->getMock();
    $connectionSettings = (new ConnectionSettingsBuilder())
        ->withProxyUrl('127.0.0.1')
        ->build();
    $mockSession
        ->expects($this->any())
        ->method('getConnectionSettings')
        ->will($this->returnValue($connectionSettings));

    $handler = new AdsGuzzleProxyHttpHandler($mockSession, $this->mockClient);
    $response = $handler($this->mockRequest);
    $this->assertInstanceOf(ResponseInterface::class, $response);
  }
}
