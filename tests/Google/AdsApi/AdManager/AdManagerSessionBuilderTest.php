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

namespace Google\AdsApi\AdManager;

use Google\AdsApi\Common\Configuration;
use Google\Auth\FetchAuthTokenInterface;
use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

/**
 * Unit tests for `AdManagerSessionBuilder`.
 *
 * @see AdManagerSessionBuilder
 * @small
 */
class AdManagerSessionBuilderTest extends TestCase
{

    private $adManagerSessionBuilder;
    private $fetchAuthTokenInterfaceMock;

    /**
     * @see PHPUnit\Framework\TestCase::setUp
     */
    protected function setUp()
    {
        $this->adManagerSessionBuilder = new AdManagerSessionBuilder();
        $this->fetchAuthTokenInterfaceMock =
            $this->getMockBuilder(FetchAuthTokenInterface::class)
                ->disableOriginalConstructor()->getMock();
    }

    /**
     * @covers Google\AdsApi\AdManager\AdManagerSessionBuilder::from
     */
    public function testBuildFrom()
    {
        $valueMap = [
            ['networkCode', 'AD_MANAGER', '12345678'],
            ['applicationName', 'AD_MANAGER', 'google report runner'],
            ['endpoint', 'AD_MANAGER', 'https://abc.xyz'],
            ['soapLogFilePath', 'LOGGING', '/dev/null'],
            ['soapLogLevel', 'LOGGING', 'DEBUG']
        ];
        $configurationMock = $this->getMockBuilder(Configuration::class)
            ->disableOriginalConstructor()->getMock();
        $configurationMock->expects($this->any())->method('getConfiguration')
            ->will($this->returnValueMap($valueMap));

        $adManagerSession = $this->adManagerSessionBuilder
            ->from($configurationMock)
            ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
            ->build();
        $this->assertSame('12345678', $adManagerSession->getNetworkCode());
        $this->assertSame(
            'google report runner',
            $adManagerSession->getApplicationName()
        );
        $this->assertSame('https://abc.xyz', $adManagerSession->getEndpoint());

        $this->assertCount(
            1,
            $adManagerSession->getSoapLogger()->getHandlers()
        );
        $this->assertInstanceOf(
            StreamHandler::class,
            $adManagerSession->getSoapLogger()->getHandlers()[0]
        );
        $this->assertSame(
            Logger::DEBUG,
            $adManagerSession->getSoapLogger()->getHandlers()[0]->getLevel()
        );
    }

    /**
     * @covers Google\AdsApi\AdManager\AdManagerSessionBuilder::from
     */
    public function testBuildFromDefaults()
    {
        $valueMap = [
            ['networkCode', 'AD_MANAGER', '12345678'],
            ['applicationName', 'AD_MANAGER', 'google report runner']
        ];
        $configurationMock = $this->getMockBuilder(Configuration::class)
            ->disableOriginalConstructor()->getMock();
        $configurationMock->expects($this->any())->method('getConfiguration')
            ->will($this->returnValueMap($valueMap));

        $adManagerSession = $this->adManagerSessionBuilder
            ->from($configurationMock)
            ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
            ->build();
        $this->assertSame('12345678', $adManagerSession->getNetworkCode());
        $this->assertSame(
            'google report runner',
            $adManagerSession->getApplicationName()
        );
        $this->assertNotFalse(
            filter_var($adManagerSession->getEndpoint(), FILTER_VALIDATE_URL)
        );
        $this->assertNotNull($adManagerSession->getSoapSettings());
    }

    /**
     * @covers Google\AdsApi\AdManager\AdManagerSessionBuilder::from
     */
    public function testBuildFromWithCustomLogger()
    {
        $valueMap = [
            ['networkCode', 'AD_MANAGER', '12345678'],
            ['applicationName', 'AD_MANAGER', 'google report runner']
        ];
        $configurationMock = $this->getMockBuilder(Configuration::class)
            ->disableOriginalConstructor()->getMock();
        $configurationMock->expects($this->any())->method('getConfiguration')
            ->will($this->returnValueMap($valueMap));

        $adManagerSession = $this->adManagerSessionBuilder
            ->from($configurationMock)
            ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
            ->withSoapLogger(new Logger('', [new NullHandler()]))
            ->build();

        $this->assertCount(
            1,
            $adManagerSession->getSoapLogger()->getHandlers()
        );
        $this->assertInstanceOf(
            NullHandler::class,
            $adManagerSession->getSoapLogger()->getHandlers()[0]
        );
    }

    /**
     * @covers Google\AdsApi\AdManager\AdManagerSessionBuilder::build
     * @expectedException InvalidArgumentException
     */
    public function testBuildFailsWithoutNetworkCode()
    {
        $this->adManagerSessionBuilder
            ->withApplicationName('Google report runner')
            ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
            ->build();
    }

    /**
     * @covers Google\AdsApi\AdManager\AdManagerSessionBuilder::build
     * @expectedException InvalidArgumentException
     */
    public function testBuildFailsWithoutApplicationName()
    {
        $this->adManagerSessionBuilder->withNetworkCode('12345678')
            ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
            ->build();
    }

    /**
     * @covers Google\AdsApi\AdManager\AdManagerSessionBuilder::build
     * @expectedException InvalidArgumentException
     */
    public function testBuildFailsWithDefaultApplicationName()
    {
        $this->adManagerSessionBuilder->withNetworkCode('12345678')
            ->withApplicationName(
                AdManagerSessionBuilder::DEFAULT_APPLICATION_NAME
            )
            ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
            ->build();
    }

    /**
     * @covers Google\AdsApi\AdManager\AdManagerSessionBuilder::build
     * @expectedException InvalidArgumentException
     */
    public function testBuildFailsWithInvalidEndpointUrl()
    {
        $this->adManagerSessionBuilder->withNetworkCode('12345678')
            ->withApplicationName('Google report runner')->withEndpoint(
                'abcxyz'
            )->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
            ->build();
    }

    /**
     * @covers Google\AdsApi\AdManager\AdManagerSessionBuilder::build
     * @expectedException InvalidArgumentException
     */
    public function testBuildFailsWithoutOAuth2Credential()
    {
        $this->adManagerSessionBuilder->withNetworkCode('12345678')
            ->withApplicationName('Google report runner')->build();
    }

    /**
     * @covers Google\AdsApi\AdManager\AdManagerSessionBuilder::build
     */
    public function testBuild()
    {
        $adManagerSession = $this->adManagerSessionBuilder
            ->withNetworkCode('12345678')
            ->withApplicationName('Google report runner')
            ->withEndpoint('https://abc.xyz/')
            ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
            ->build();
        $this->assertSame('12345678', $adManagerSession->getNetworkCode());
        $this->assertSame('https://abc.xyz/', $adManagerSession->getEndpoint());
        $this->assertSame(
            'Google report runner',
            $adManagerSession->getApplicationName()
        );
        $this->assertInstanceOf(
            FetchAuthTokenInterface::class,
            $adManagerSession->getOAuth2Credential()
        );
    }

    /**
     * @covers Google\AdsApi\AdManager\AdManagerSessionBuilder::build
     */
    public function testBuildDefaults()
    {
        $adManagerSession = $this->adManagerSessionBuilder
            ->withNetworkCode('12345678')
            ->withApplicationName('Google report runner')
            ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
            ->build();

        $this->assertInstanceOf(
            LoggerInterface::class,
            $adManagerSession->getSoapLogger()
        );
        $this->assertSame('12345678', $adManagerSession->getNetworkCode());
        $this->assertSame(
            'Google report runner',
            $adManagerSession->getApplicationName()
        );
        $this->assertNotFalse(
            filter_var($adManagerSession->getEndpoint(), FILTER_VALIDATE_URL)
        );
        $this->assertInstanceOf(
            FetchAuthTokenInterface::class,
            $adManagerSession->getOAuth2Credential()
        );
        $this->assertNotNull($adManagerSession->getSoapSettings());
    }
}
