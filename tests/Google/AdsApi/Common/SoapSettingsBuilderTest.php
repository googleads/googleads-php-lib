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


use Google\AdsApi\Common\SoapSettingsBuilder;
use PHPUnit_Framework_TestCase;

/**
 * Unit tests for SoapSettingsBuilder.
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
    $valueMap = array(
        array('COMPRESSION_LEVEL', 'SOAP', '2'),
        array('WSDL_CACHE', 'SOAP', '3'),
        array('HOST', 'PROXY', 'https://abc.xyz'),
        array('PORT', 'PROXY', '2021'),
        array('USER', 'PROXY', 'jane.doe@gmail.com'),
        array('PASSWORD', 'PROXY', 'abc123yxz456'),
        array('VERIFY_PEER', 'SSL', '1'),
        array('VERIFY_HOST', 'SSL', '1'),
        array('CA_PATH', 'SSL', '/tmp/ca'),
        array('CA_FILE', 'SSL', 'cacert.pem')
    );
    $configurationMock =
        $this->getMockBuilder('Google\AdsApi\Common\Configuration')
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
    $this->assertSame(true, $soapSettings->getSslVerifyPeer());
    $this->assertSame(true, $soapSettings->getSslVerifyHost());
    $this->assertSame('/tmp/ca', $soapSettings->getSslCaPath());
    $this->assertSame('cacert.pem', $soapSettings->getSslCaFile());
  }

  /**
   * @covers Google\AdsApi\Common\SoapSettingsBuilder::build
   * @expectedException Google\AdsApi\Common\ValidationException
   */
  public function testBuildFailsWithInvalidProxyHost() {
    $this->soapSettingsBuilder
        ->withProxyHost('abcxyz')
        ->build();
  }

  /**
   * @covers Google\AdsApi\Common\SoapSettingsBuilder::build
   */
  public function testBuild() {
    $soapSettings = $this->soapSettingsBuilder
        ->withCompressionLevel(SOAP_COMPRESSION_GZIP)
        ->withWsdlCacheType(WSDL_CACHE_DISK)
        ->withProxyHost('https://abc.xyz')
        ->withProxyPort(2021)
        ->withProxyUser('jane.doe@gmail.com')
        ->withProxyPassword('abc123yxz456')
        ->enableSslVerifyPeer()
        ->enableSslVerifyHost()
        ->withSslCaPath('/tmp/ca')
        ->withSslCaFile('cacert.pem');
    $this->assertSame(
        SOAP_COMPRESSION_GZIP, $soapSettings->getCompressionLevel());
    $this->assertSame(WSDL_CACHE_DISK, $soapSettings->getWsdlCacheType());
    $this->assertSame('https://abc.xyz', $soapSettings->getProxyHost());
    $this->assertSame(2021, $soapSettings->getProxyPort());
    $this->assertSame('jane.doe@gmail.com', $soapSettings->getProxyUser());
    $this->assertSame('abc123yxz456', $soapSettings->getProxyPassword());
    $this->assertSame(true, $soapSettings->getSslVerifyPeer());
    $this->assertSame(true, $soapSettings->getSslVerifyHost());
    $this->assertSame('/tmp/ca', $soapSettings->getSslCaPath());
    $this->assertSame('cacert.pem', $soapSettings->getSslCaFile());
  }
}

