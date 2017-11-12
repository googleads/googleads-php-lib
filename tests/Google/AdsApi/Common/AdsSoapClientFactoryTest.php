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

use Google\AdsApi\Common\Util\Reflection;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `AdsSoapClientFactory`.
 *
 * @see AdsSoapClientFactory
 * @small
 */
class AdsSoapClientFactoryTest extends TestCase {

  /**
   * @covers Google\AdsApi\Common\AdsSoapClientFactory::generateSoapClient
   */
  public function testGenerateSoapClientWithEndpointOverride() {
    // Mock the arguments the generate SOAP client method needs.
    $adsSessionMock = $this->getMock(AdsSession::class);
    $adsSessionMock->expects($this->once())
        ->method('getSoapSettings')
        ->will($this->returnValue(null));
    $adsSessionMock->expects($this->once())
        ->method('getEndpoint')
        ->will($this->returnValue('https://abc.xyz'));
    $adsHeaderHandlerMock = $this->getMock(AdsHeaderHandler::class);
    $adsServiceDescriptorMock = $this->getMock(AdsServiceDescriptor::class);

    // Return a partial mock for the ads SOAP client the factory creates to
    // suppress the SOAP client from looking for a live WSDL.
    $adsSoapClientMock = $this->getMockBuilder(AdsSoapClient::class)
        ->setMethods(['getWsdlUri'])
        ->disableOriginalConstructor()
        ->getMock();
    $adsSoapClientMock->expects($this->atLeastOnce())
        ->method('getWsdlUri')
        ->will($this->returnValue(
            'https://ads.google.com/apis/ads/publisher/MockService?wsdl'));
    $reflectionMock = $this->getMockBuilder(Reflection::class)
        ->getMock();
    $reflectionMock->expects($this->once())
        ->method('createInstance')
        ->will($this->returnValue($adsSoapClientMock));

    // Use the factory to create the SOAP client and test that the factory
    // set up the client correctly.
    $adsSoapClientFactory = new AdsSoapClientFactory(
        new SoapLogMessageFormatter(), $reflectionMock);
    $adsSoapClient = $adsSoapClientFactory->generateSoapClient(
        $adsSessionMock,
        $adsHeaderHandlerMock,
        $adsServiceDescriptorMock
    );
    $this->assertNotNull($adsSoapClient);
    $this->assertInstanceOf(AdsSoapClient::class, $adsSoapClient);
    $this->assertSame($adsSessionMock, $adsSoapClient->getAdsSession());
    $this->assertSame(
        $adsHeaderHandlerMock, $adsSoapClient->getHeaderHandler());
    $this->assertSame(
        $adsServiceDescriptorMock, $adsSoapClient->getServiceDescriptor());
    $this->assertSame(
        'https://ads.google.com/apis/ads/publisher/MockService?wsdl',
        $adsSoapClient->getWsdlUri()
    );
    // Test that the URL this SOAP clients will make API calls to has been
    // overriden by the one specified in the ads session. PHP's SOAP client
    // doesn't expose a getter for the location, but its setter returns the
    // previous location set with the setter.
    $this->assertSame('https://abc.xyz/apis/ads/publisher/MockService?wsdl',
        $adsSoapClient->__setLocation());
  }
}
