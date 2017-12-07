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

use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `ConnectionSettingsBuilder`.
 *
 * @see ConnectionSettingsBuilder
 * @small
 */
class ConnectionSettingsBuilderTest extends TestCase {

  private $connectionSettingsBuilder;

  /**
   * @see PHPUnit\Framework\TestCase::setUp
   */
  protected function setUp() {
    $this->connectionSettingsBuilder = new ConnectionSettingsBuilder();
  }

  /**
   * @covers Google\AdsApi\Common\ConnectionSettingsBuilder::from
   */
  public function testBuildFrom() {
    $valueMap = [
        ['proxy', 'CONNECTION',
            'https://jane.doe@gmail.com:abc123yxz456@abc.xyz:2021'],
        ['enableReportingGzip', 'CONNECTION', 'true']
    ];
    $configurationMock = $this->getMockBuilder(Configuration::class)
        ->disableOriginalConstructor()
        ->getMock();
    $configurationMock->expects($this->any())
        ->method('getConfiguration')
        ->will($this->returnValueMap($valueMap));

    $connectionSettings = $this->connectionSettingsBuilder
        ->from($configurationMock)
        ->build();
    $this->assertSame('https://jane.doe@gmail.com:abc123yxz456@abc.xyz:2021',
        $connectionSettings->getProxyUrl());
    $this->assertTrue($connectionSettings->isReportingGzipEnabled());
  }

  /**
   * @covers Google\AdsApi\Common\ConnectionSettingsBuilder::build
   */
  public function testBuildWithIpAsProxyHost() {
    $connectionSettings = $this->connectionSettingsBuilder
        ->withProxyUrl('127.0.0.1')
        ->build();
    $this->assertSame('127.0.0.1', $connectionSettings->getProxyUrl());
  }

  /**
   * @covers Google\AdsApi\Common\ConnectionSettingsBuilder::build
   */
  public function testBuildWithNoProxyUserPassword() {
    $connectionSettings = $this->connectionSettingsBuilder
        ->withProxyUrl('https://localhost:999')
        ->build();
    $this->assertSame('https://localhost:999',
        $connectionSettings->getProxyUrl());
  }

  /**
   * @covers Google\AdsApi\Common\ConnectionSettingsBuilder::build
   */
  public function testBuildWithNoProxyPassword() {
    $connectionSettings = $this->connectionSettingsBuilder
        ->withProxyUrl('https://user@localhost:999')
        ->build();
    $this->assertSame('https://user@localhost:999',
        $connectionSettings->getProxyUrl());
  }

  /**
   * @covers Google\AdsApi\Common\ConnectionSettingsBuilder::from
   */
  public function testBuildFromDefaults() {
    $configurationMock = $this->getMockBuilder(Configuration::class)
        ->disableOriginalConstructor()
        ->getMock();
    $configurationMock->expects($this->any())
        ->method('getConfiguration')
        ->will($this->returnValueMap([]));

    $connectionSettings = $this->connectionSettingsBuilder
        ->from($configurationMock)
        ->build();
    $this->assertNull($connectionSettings->getProxyUrl());
    $this->assertFalse($connectionSettings->isReportingGzipEnabled());
  }

  /**
   * @covers Google\AdsApi\Common\ConnectionSettingsBuilder::build
   */
  public function testBuild() {
    $connectionSettings = $this->connectionSettingsBuilder
        ->withProxyUrl('https://jane.doe@gmail.com:abc123yxz456@abc.xyz:2021')
        ->enableReportingGzip(true)
        ->build();
    $this->assertSame('https://jane.doe@gmail.com:abc123yxz456@abc.xyz:2021',
        $connectionSettings->getProxyUrl());
    $this->assertTrue($connectionSettings->isReportingGzipEnabled());
  }

  /**
   * @covers Google\AdsApi\Common\ConnectionSettingsBuilder::build
   */
  public function testBuildDefaults() {
    $connectionSettings = $this->connectionSettingsBuilder->build();
    $this->assertNull($connectionSettings->getProxyUrl());
    $this->assertFalse($connectionSettings->isReportingGzipEnabled());
  }

  /**
   * @covers Google\AdsApi\Common\ConnectionSettingsBuilder::validate
   * @expectedException \InvalidArgumentException
   */
  public function testValidateFails() {
    $this->connectionSettingsBuilder
        ->withProxyUrl('       ')
        ->build();
  }
}
