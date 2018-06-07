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

use Google\Auth\FetchAuthTokenInterface;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `OAuth2TokenRefresher`.
 *
 * @see OAuth2TokenRefresher
 * @small
 */
class OAuth2TokenRefresherTest extends TestCase
{

    private $fetchAuthTokenInterfaceMock;
    private $oAuth2TokenRefresher;

  /**
   * @see PHPUnit\Framework\TestCase::setUp
   */
    protected function setUp()
    {
        $this->fetchAuthTokenInterfaceMock = $this
        ->getMockBuilder(FetchAuthTokenInterface::class)
        ->disableOriginalConstructor()
        ->getMock();
        $this->oAuth2TokenRefresher = new OAuth2TokenRefresher();
    }

  /**
   * @covers Google\AdsApi\Common\Util\OAuth2TokenRefresher::getOrFetchAccessToken
   */
    public function testGetOrFetchAccessNoExistingToken()
    {
        $this->fetchAuthTokenInterfaceMock->expects($this->once())
        ->method('fetchAuthToken')
        ->will($this->returnValue(['access_token' => 'newabc123']));
        $this->fetchAuthTokenInterfaceMock->expects($this->once())
        ->method('getLastReceivedToken')
        ->will($this->returnValue(null));

        $this->assertSame(
            'newabc123',
            $this->oAuth2TokenRefresher->getOrFetchAccessToken(
                $this->fetchAuthTokenInterfaceMock
            )
        );
    }

  /**
   * @covers Google\AdsApi\Common\Util\OAuth2TokenRefresher::getOrFetchAccessToken
   */
    public function testGetOrFetchAccessExistingTokenNotExpiringSoon()
    {
        $expiresAt = time() + 9000;
        $this->fetchAuthTokenInterfaceMock->expects($this->never())
        ->method('fetchAuthToken');
        $this->fetchAuthTokenInterfaceMock->expects($this->exactly(2))
        ->method('getLastReceivedToken')
        ->will($this->onConsecutiveCalls(
            ['access_token' => 'existingabc123', 'expires_at' => $expiresAt],
            ['access_token' => 'existingabc123', 'expires_at' => $expiresAt]
        ));

        $this->assertSame(
            'existingabc123',
            $this->oAuth2TokenRefresher->getOrFetchAccessToken(
                $this->fetchAuthTokenInterfaceMock
            )
        );
    }

  /**
   * @covers Google\AdsApi\Common\Util\OAuth2TokenRefresher::getOrFetchAccessToken
   */
    public function testGetOrFetchAccessExistingTokenExpiringSoon()
    {
        $this->fetchAuthTokenInterfaceMock->expects($this->once())
        ->method('fetchAuthToken')
        ->will($this->returnValue(['access_token' => 'newabc123']));
        $this->fetchAuthTokenInterfaceMock->expects($this->once())
        ->method('getLastReceivedToken')
        ->will($this->returnValue(
            ['access_token' => 'existingabc123', 'expires_at' => time() + 30]
        ));

        $this->assertSame(
            'newabc123',
            $this->oAuth2TokenRefresher->getOrFetchAccessToken(
                $this->fetchAuthTokenInterfaceMock
            )
        );
    }

  /**
   * @covers Google\AdsApi\Common\Util\OAuth2TokenRefresher::getOrFetchAccessToken
   */
    public function testGetOrFetchAccessExistingTokenExpired()
    {
        $this->fetchAuthTokenInterfaceMock->expects($this->once())
        ->method('fetchAuthToken')
        ->will($this->returnValue(['access_token' => 'newabc123']));
        $this->fetchAuthTokenInterfaceMock->expects($this->once())
        ->method('getLastReceivedToken')
        ->will($this->returnValue(
            ['access_token' => 'existingabc123', 'expires_at' => time() - 9000]
        ));

        $this->assertSame(
            'newabc123',
            $this->oAuth2TokenRefresher->getOrFetchAccessToken(
                $this->fetchAuthTokenInterfaceMock
            )
        );
    }
}
