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
 * Unit tests for `AdsSoapClient`.
 *
 * @see AdsSoapClient
 * @small
 */
class AdsSoapClientTest extends TestCase
{

  /**
   * @covers Google\AdsApi\Common\AdsSoapClient::getLocalWsdlPath
   */
    public function testGetLocalWsdlPath()
    {
        $fakeLiveWsdlUri =
        'https://abc.xyz/api/adwords/cm/v201806/MockService?wsdl';
        $adsSoapClientMock = $this->getMockBuilder(AdsSoapClient::class)
        ->disableOriginalConstructor()
        ->getMock();

        $expectedResultRegex = sprintf(
            '|src%1$sGoogle%1$sAdsApi%1$sCommon%1$s'
            . '\.\.%1$s\.\.%1$s\.\.%1$s\.\.%1$sresources%1$swsdls'
            . '%1$sapi%1$sadwords%1$scm%1$sv201806%1$sMockService\.wsdl$|',
            DIRECTORY_SEPARATOR
        );

        $reflection = new \ReflectionClass(get_class($adsSoapClientMock));
        $method = $reflection->getMethod('getLocalWsdlPath');
        $method->setAccessible(true);
        $actualResult = $method->invokeArgs($adsSoapClientMock, [$fakeLiveWsdlUri]);

        $this->assertRegExp($expectedResultRegex, $actualResult);
        if (DIRECTORY_SEPARATOR === '\\') {
            $this->assertNotContains('/', $actualResult);
        }
        if (DIRECTORY_SEPARATOR === '/') {
            $this->assertNotContains('\\', $actualResult);
        }
    }
}
