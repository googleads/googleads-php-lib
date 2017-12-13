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
namespace Google\AdsApi\Dfp;

use Google\AdsApi\Common\Configuration;
use Google\Auth\FetchAuthTokenInterface;
use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

/**
 * Unit tests for `DfpSessionBuilder`.
 *
 * @see DfpSessionBuilder
 * @small
 */
class DfpSessionBuilderTest extends TestCase {

  private $dfpSessionBuilder;
  private $fetchAuthTokenInterfaceMock;

  /**
   * @see PHPUnit\Framework\TestCase::setUp
   */
  protected function setUp() {
    $this->dfpSessionBuilder = new DfpSessionBuilder();
    $this->fetchAuthTokenInterfaceMock = $this
        ->getMockBuilder(FetchAuthTokenInterface::class)
        ->disableOriginalConstructor()
        ->getMock();
  }

  /**
   * @covers Google\AdsApi\Dfp\DfpSessionBuilder::from
   */
  public function testBuildFrom() {
    $valueMap = [
        ['networkCode', 'DFP', '12345678'],
        ['applicationName', 'DFP', 'google report runner'],
        ['endpoint', 'DFP', 'https://abc.xyz'],
        ['soapLogFilePath', 'LOGGING', '/dev/null'],
        ['soapLogLevel', 'LOGGING', 'DEBUG']
    ];
    $configurationMock = $this->getMockBuilder(Configuration::class)
        ->disableOriginalConstructor()
        ->getMock();
    $configurationMock->expects($this->any())
        ->method('getConfiguration')
        ->will($this->returnValueMap($valueMap));

    $dfpSession = $this->dfpSessionBuilder
        ->from($configurationMock)
        ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
        ->build();
    $this->assertSame('12345678', $dfpSession->getNetworkCode());
    $this->assertSame(
        'google report runner', $dfpSession->getApplicationName());
    $this->assertSame('https://abc.xyz', $dfpSession->getEndpoint());

    $this->assertCount(1, $dfpSession->getSoapLogger()->getHandlers());
    $this->assertInstanceOf(
        StreamHandler::class, $dfpSession->getSoapLogger()->getHandlers()[0]);
    $this->assertSame(Logger::DEBUG,
        $dfpSession->getSoapLogger()->getHandlers()[0]->getLevel());
  }

  /**
   * @covers Google\AdsApi\Dfp\DfpSessionBuilder::from
   */
  public function testBuildFromDefaults() {
    $valueMap = [
        ['networkCode', 'DFP', '12345678'],
        ['applicationName', 'DFP', 'google report runner']
    ];
    $configurationMock = $this->getMockBuilder(Configuration::class)
        ->disableOriginalConstructor()
        ->getMock();
    $configurationMock->expects($this->any())
        ->method('getConfiguration')
        ->will($this->returnValueMap($valueMap));

    $dfpSession = $this->dfpSessionBuilder
        ->from($configurationMock)
        ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
        ->build();
    $this->assertSame('12345678', $dfpSession->getNetworkCode());
    $this->assertSame(
        'google report runner', $dfpSession->getApplicationName());
    $this->assertNotFalse(
        filter_var($dfpSession->getEndpoint(), FILTER_VALIDATE_URL));
    $this->assertNotNull($dfpSession->getSoapSettings());
  }

  /**
   * @covers Google\AdsApi\Dfp\DfpSessionBuilder::from
   */
  public function testBuildFromWithCustomLogger() {
    $valueMap = [
        ['networkCode', 'DFP', '12345678'],
        ['applicationName', 'DFP', 'google report runner']
    ];
    $configurationMock = $this->getMockBuilder(Configuration::class)
        ->disableOriginalConstructor()
        ->getMock();
    $configurationMock->expects($this->any())
        ->method('getConfiguration')
        ->will($this->returnValueMap($valueMap));

    $dfpSession = $this->dfpSessionBuilder
        ->from($configurationMock)
        ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
        ->withSoapLogger(new Logger('', [new NullHandler()]))
        ->build();

    $this->assertCount(1, $dfpSession->getSoapLogger()->getHandlers());
    $this->assertInstanceOf(
        NullHandler::class, $dfpSession->getSoapLogger()->getHandlers()[0]);
  }

  /**
   * @covers Google\AdsApi\Dfp\DfpSessionBuilder::build
   * @expectedException InvalidArgumentException
   */
  public function testBuildFailsWithoutNetworkCode() {
    $this->dfpSessionBuilder
        ->withApplicationName('Google report runner')
        ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
        ->build();
  }

  /**
   * @covers Google\AdsApi\Dfp\DfpSessionBuilder::build
   * @expectedException InvalidArgumentException
   */
  public function testBuildFailsWithoutApplicationName() {
    $this->dfpSessionBuilder
        ->withNetworkCode('12345678')
        ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
        ->build();
  }

  /**
   * @covers Google\AdsApi\Dfp\DfpSessionBuilder::build
   * @expectedException InvalidArgumentException
   */
  public function testBuildFailsWithDefaultApplicationName() {
    $this->dfpSessionBuilder
        ->withNetworkCode('12345678')
        ->withApplicationName(DfpSessionBuilder::DEFAULT_APPLICATION_NAME)
        ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
        ->build();
  }

  /**
   * @covers Google\AdsApi\Dfp\DfpSessionBuilder::build
   * @expectedException InvalidArgumentException
   */
  public function testBuildFailsWithInvalidEndpointUrl() {
    $this->dfpSessionBuilder
        ->withNetworkCode('12345678')
        ->withApplicationName('Google report runner')
        ->withEndpoint('abcxyz')
        ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
        ->build();
  }

  /**
   * @covers Google\AdsApi\Dfp\DfpSessionBuilder::build
   * @expectedException InvalidArgumentException
   */
  public function testBuildFailsWithoutOAuth2Credential() {
    $this->dfpSessionBuilder
        ->withNetworkCode('12345678')
        ->withApplicationName('Google report runner')
        ->build();
  }

  /**
   * @covers Google\AdsApi\Dfp\DfpSessionBuilder::build
   */
  public function testBuild() {
    $dfpSession = $this->dfpSessionBuilder
        ->withNetworkCode('12345678')
        ->withApplicationName('Google report runner')
        ->withEndpoint('https://abc.xyz/')
        ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
        ->build();
    $this->assertSame('12345678', $dfpSession->getNetworkCode());
    $this->assertSame('https://abc.xyz/', $dfpSession->getEndpoint());
    $this->assertSame(
        'Google report runner', $dfpSession->getApplicationName());
    $this->assertInstanceOf(FetchAuthTokenInterface::class,
        $dfpSession->getOAuth2Credential());
  }

  /**
   * @covers Google\AdsApi\Dfp\DfpSessionBuilder::build
   */
  public function testBuildDefaults() {
    $dfpSession = $this->dfpSessionBuilder
        ->withNetworkCode('12345678')
        ->withApplicationName('Google report runner')
        ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
        ->build();

    $this->assertInstanceOf(
        LoggerInterface::class, $dfpSession->getSoapLogger());
    $this->assertSame('12345678', $dfpSession->getNetworkCode());
    $this->assertSame(
        'Google report runner', $dfpSession->getApplicationName());
    $this->assertNotFalse(
        filter_var($dfpSession->getEndpoint(), FILTER_VALIDATE_URL));
    $this->assertInstanceOf(FetchAuthTokenInterface::class,
        $dfpSession->getOAuth2Credential());
    $this->assertNotNull($dfpSession->getSoapSettings());
  }
}
