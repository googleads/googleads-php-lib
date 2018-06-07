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
 * Unit tests for `SoapHeaders`.
 *
 * @see SoapHeaders
 * @small
 */
class SoapHeadersTest extends TestCase
{

  /**
   * @covers Google\AdsApi\Common\Util\SoapHeaders::getSoapHeaderValue
   */
    public function testGetSoapHeaderValueEmptyXml()
    {
        $this->assertSame(
            '',
            SoapHeaders::getSoapHeaderValue('', 'networkCode')
        );
    }

  /**
   * @covers Google\AdsApi\Common\Util\SoapHeaders::getSoapHeaderValue
   */
    public function testGetSoapHeaderValueNullXml()
    {
        $this->assertSame(
            '',
            SoapHeaders::getSoapHeaderValue(null, 'networkCode')
        );
    }

  /**
   * @covers Google\AdsApi\Common\Util\SoapHeaders::getSoapHeaderValue
   */
    public function testGetSoapHeaderValueCannotFindHeader()
    {
        $requestXml = FakeSoapPayloadsAndLogsProvider::getFakeGetCreativesRequest();
        $this->assertSame(
            '',
            SoapHeaders::getSoapHeaderValue($requestXml, 'animal')
        );
    }

  /**
   * @covers Google\AdsApi\Common\Util\SoapHeaders::getSoapHeaderValue
   */
    public function testGetSoapHeaderValueFindsRequestHeaderWithAttr()
    {
        $requestXml = FakeSoapPayloadsAndLogsProvider::getFakeGetCreativesRequest();
        $this->assertSame(
            '888888',
            SoapHeaders::getSoapHeaderValue($requestXml, 'networkCode')
        );
    }

  /**
   * @covers Google\AdsApi\Common\Util\SoapHeaders::getSoapHeaderValue
   */
    public function testGetSoapHeaderValueFindsRequestHeaderWithoutAttr()
    {
        $requestXml = FakeSoapPayloadsAndLogsProvider::getFakeGetCreativesRequest();
        $this->assertSame(
            '123-777-999',
            SoapHeaders::getSoapHeaderValue($requestXml, 'clientCustomerId')
        );
    }

  /**
   * @covers Google\AdsApi\Common\Util\SoapHeaders::getSoapHeaderValue
   */
    public function testGetSoapHeaderValueFindsResponseHeader()
    {
        $responseXml =
        FakeSoapPayloadsAndLogsProvider::getFakeGetCreativesResponse();
        $this->assertSame(
            '123abc456xyz',
            SoapHeaders::getSoapHeaderValue($responseXml, 'requestId')
        );
    }

  /**
   * @covers Google\AdsApi\Common\Util\SoapHeaders::getSoapResponseHeaderValues
   */
    public function testGetSoapResponseHeaderValuesEmptyXml()
    {
        $this->assertSame(
            [],
            SoapHeaders::getSoapResponseHeaderValues('')
        );
    }

  /**
   * @covers Google\AdsApi\Common\Util\SoapHeaders::getSoapResponseHeaderValues
   */
    public function testGetSoapResponseHeaderValuesNullXml()
    {
        $this->assertSame(
            [],
            SoapHeaders::getSoapResponseHeaderValues(null)
        );
    }

  /**
   * @covers Google\AdsApi\Common\Util\SoapHeaders::getSoapResponseHeaderValues
   */
    public function testGetSoapResponseHeaderValues()
    {
        $responseXml =
        FakeSoapPayloadsAndLogsProvider::getFakeGetCreativesResponse();
        $this->assertSame(
            [
            'requestId' => '123abc456xyz',
            'responseTime' => '226',
            'operations' => '9'
            ],
            SoapHeaders::getSoapResponseHeaderValues($responseXml)
        );
    }
}
