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
use Google\AdsApi\Common\SoapSettingsBuilder;
use Google\AdsApi\Common\Testing\AdsBuildersTestProvider;
use PHPUnit_Framework_TestCase;

/**
 * Unit tests for `SoapSettingsBuilder`.
 *
 * @see SoapSettingsBuilder
 * @small
 */
class SoapSettingsBuilderTest extends PHPUnit_Framework_TestCase {

  private $soapSettingsBuilder;

  /**
   * @see PHPUnit_Framework_TestCase::setUp
   */
  protected function setUp() {
    $this->soapSettingsBuilder = new SoapSettingsBuilder();
  }

  /**
   * @covers Google\AdsApi\Common\SoapSettingsBuilder::from
   */
  public function testBuildFrom() {
    $valueMap = [
        ['compressionLevel', 'SOAP', '2'],
        ['wsdlCache', 'SOAP', '3'],
        ['host', 'PROXY', 'https://abc.xyz'],
        ['port', 'PROXY', '2021'],
        ['user', 'PROXY', 'jane.doe@gmail.com'],
        ['password', 'PROXY', 'abc123yxz456']
    ];
    $configurationMock = $this->getMockBuilder(Configuration::class)
        ->disableOriginalConstructor()
        ->getMock();
    $configurationMock->expects($this->any())
        ->method('getConfiguration')
        ->will($this->returnValueMap($valueMap));

    $soapSettings = $this->soapSettingsBuilder
        ->from($configurationMock)
        ->build();
    $this->assertSame(2, $soapSettings->getCompressionLevel());
    $this->assertSame(3, $soapSettings->getWsdlCacheType());
    $this->assertSame('https://abc.xyz', $soapSettings->getProxyHost());
    $this->assertSame(2021, $soapSettings->getProxyPort());
    $this->assertSame('jane.doe@gmail.com', $soapSettings->getProxyUser());
    $this->assertSame('abc123yxz456', $soapSettings->getProxyPassword());
  }

  /**
   * @covers Google\AdsApi\Common\SoapSettingsBuilder::build
   */
  public function testBuildWithIpAsProxyHost() {
    $soapSettings = $this->soapSettingsBuilder
        ->withProxyHost('127.0.0.1')
        ->build();
    $this->assertSame('127.0.0.1', $soapSettings->getProxyHost());
  }

  /**
   * @covers Google\AdsApi\Common\SoapSettingsBuilder::from
   */
  public function testBuildFromDefaults() {
    $configurationMock = $this->getMockBuilder(Configuration::class)
        ->disableOriginalConstructor()
        ->getMock();
    $configurationMock->expects($this->any())
        ->method('getConfiguration')
        ->will($this->returnValueMap([]));

    $soapSettings = $this->soapSettingsBuilder
        ->from($configurationMock)
        ->build();
    $this->assertNull($soapSettings->getCompressionLevel());
    $this->assertNull($soapSettings->getWsdlCacheType());
    $this->assertNull($soapSettings->getProxyHost());
    $this->assertNull($soapSettings->getProxyPort());
    $this->assertNull($soapSettings->getProxyUser());
    $this->assertNull($soapSettings->getProxyPassword());
  }

  /**
   * @covers Google\AdsApi\Common\SoapSettingsBuilder::build
   */
  public function testBuild() {
    $caCertFile = AdsBuildersTestProvider::getFakeCertsFilePath();

    $soapSettings = $this->soapSettingsBuilder
        ->withCompressionLevel(SOAP_COMPRESSION_GZIP)
        ->withWsdlCacheType(WSDL_CACHE_DISK)
        ->withProxyHost('https://abc.xyz')
        ->withProxyPort(2021)
        ->withProxyUser('jane.doe@gmail.com')
        ->withProxyPassword('abc123yxz456')
        ->disableSslVerify()
        ->withSslCaFile($caCertFile)
        ->build();
    $this->assertSame(
        SOAP_COMPRESSION_GZIP, $soapSettings->getCompressionLevel());
    $this->assertSame(WSDL_CACHE_DISK, $soapSettings->getWsdlCacheType());
    $this->assertSame('https://abc.xyz', $soapSettings->getProxyHost());
    $this->assertSame(2021, $soapSettings->getProxyPort());
    $this->assertSame('jane.doe@gmail.com', $soapSettings->getProxyUser());
    $this->assertSame('abc123yxz456', $soapSettings->getProxyPassword());
    $this->assertSame(false, $soapSettings->getSslVerify());
    $this->assertSame($caCertFile, $soapSettings->getSslCaFile());
  }

  /**
   * @covers Google\AdsApi\Common\SoapSettingsBuilder::build
   */
  public function testBuildDefaults() {
    $soapSettings = $this->soapSettingsBuilder->build();
    $this->assertNull($soapSettings->getCompressionLevel());
    $this->assertNull($soapSettings->getWsdlCacheType());
    $this->assertNull($soapSettings->getProxyHost());
    $this->assertNull($soapSettings->getProxyPort());
    $this->assertNull($soapSettings->getProxyUser());
    $this->assertNull($soapSettings->getProxyPassword());
    $this->assertNotNull($soapSettings->getSslVerify());
    $this->assertNull($soapSettings->getSslCaFile());
  }
}
