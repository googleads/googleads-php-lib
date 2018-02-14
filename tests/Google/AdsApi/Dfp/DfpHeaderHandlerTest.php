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

use Google\Auth\FetchAuthTokenInterface;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `DfpHeaderHandler`.
 *
 * @see DfpHeaderHandler
 * @small
 */
class DfpHeaderHandlerTest extends TestCase
{

    private $dfpHeaderHandler;
    private $dfpSessionBuilder;

    /**
     * @see PHPUnit\Framework\TestCase::setUp
     */
    protected function setUp()
    {
        $this->dfpHeaderHandler = new DfpHeaderHandler();
        $this->dfpSessionBuilder = new DfpSessionBuilder();

        $fetchAuthTokenInterfaceMock =
            $this->getMockBuilder(FetchAuthTokenInterface::class)
                ->disableOriginalConstructor()->getMock();
        $fetchAuthTokenInterfaceMock->expects($this->once())
            ->method('fetchAuthToken')
            ->will($this->returnValue(['access_token' => 'abc123']));
        $this->dfpSessionBuilder->withNetworkCode('12345678')
            ->withApplicationName('Google report runner')
            ->withOAuth2Credential($fetchAuthTokenInterfaceMock);
    }

    /**
     * @covers Google\AdsApi\Dfp\DfpHeaderHandler::generateHttpHeaders
     */
    public function testGenerateHttpHeaders()
    {
        $expectedHttpHeaders = ['Authorization' => 'Bearer abc123'];
        $dfpSession = $this->dfpSessionBuilder->build();
        $httpHeaders =
            $this->dfpHeaderHandler->generateHttpHeaders($dfpSession);
        $this->assertSame($expectedHttpHeaders, $httpHeaders);
    }
}
