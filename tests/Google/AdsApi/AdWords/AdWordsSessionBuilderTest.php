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

namespace Google\AdsApi\AdWords;

use Google\AdsApi\Common\Configuration;
use Google\Auth\FetchAuthTokenInterface;
use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

/**
 * Unit tests for `AdWordsSessionBuilder`.
 *
 * @see AdWordsSessionBuilder
 * @small
 */
class AdWordsSessionBuilderTest extends TestCase
{

    private $adWordsSessionBuilder;
    private $fetchAuthTokenInterfaceMock;

    /**
     * @see PHPUnit\Framework\TestCase::setUp
     */
    protected function setUp()
    {
        $this->adWordsSessionBuilder = new AdWordsSessionBuilder();
        $this->fetchAuthTokenInterfaceMock = $this
            ->getMockBuilder(FetchAuthTokenInterface::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsSessionBuilder::from
     */
    public function testBuildFrom()
    {
        $valueMap = [
            ['developerToken', 'ADWORDS', 'ABcdeFGH93KL-NOPQ_STUv'],
            ['userAgent', 'ADWORDS', 'report downloader'],
            ['endpoint', 'ADWORDS', 'https://abc.xyz'],
            ['clientCustomerId', 'ADWORDS', '123-456-7890'],
            ['isPartialFailure', 'ADWORDS', '1'],
            ['includeUtilitiesInUserAgent', 'ADWORDS', '1'],
            ['isSkipReportHeader', 'ADWORDS_REPORTING', '1'],
            ['isSkipColumnHeader', 'ADWORDS_REPORTING', '1'],
            ['isSkipReportSummary', 'ADWORDS_REPORTING', ''],
            ['isUseRawEnumValues', 'ADWORDS_REPORTING', ''],
            ['soapLogFilePath', 'LOGGING', '/dev/null'],
            ['soapLogLevel', 'LOGGING', 'DEBUG']
        ];
        $configurationMock = $this->getMockBuilder(Configuration::class)
            ->disableOriginalConstructor()
            ->getMock();
        $configurationMock->expects($this->any())
            ->method('getConfiguration')
            ->will($this->returnValueMap($valueMap));

        $adWordsSession = $this->adWordsSessionBuilder
            ->from($configurationMock)
            ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
            ->build();

        $this->assertSame(
            'ABcdeFGH93KL-NOPQ_STUv',
            $adWordsSession->getDeveloperToken()
        );
        $this->assertSame('report downloader', $adWordsSession->getUserAgent());
        $this->assertSame('https://abc.xyz', $adWordsSession->getEndpoint());
        $this->assertSame(
            '123-456-7890',
            $adWordsSession->getClientCustomerId()
        );
        $this->assertSame(true, $adWordsSession->isPartialFailure());
        $this->assertSame(
            true,
            $adWordsSession->isIncludeUtilitiesInUserAgent()
        );
        $this->assertSame(
            true,
            $adWordsSession->getReportSettings()->isSkipReportHeader()
        );
        $this->assertSame(
            true,
            $adWordsSession->getReportSettings()->isSkipColumnHeader()
        );
        $this->assertSame(
            false,
            $adWordsSession->getReportSettings()->isSkipReportSummary()
        );
        $this->assertSame(
            false,
            $adWordsSession->getReportSettings()->isUseRawEnumValues()
        );

        $this->assertCount(1, $adWordsSession->getSoapLogger()->getHandlers());
        $this->assertInstanceOf(
            StreamHandler::class,
            $adWordsSession->getSoapLogger()->getHandlers()[0]
        );
        $this->assertSame(
            Logger::DEBUG,
            $adWordsSession->getSoapLogger()->getHandlers()[0]->getLevel()
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsSessionBuilder::from
     */
    public function testBuildFromDefaults()
    {
        $valueMap = [
            ['developerToken', 'ADWORDS', 'ABcdeFGH93KL-NOPQ_STUv'],
            ['userAgent', 'ADWORDS', 'report downloader'],
        ];
        $configurationMock = $this->getMockBuilder(Configuration::class)
            ->disableOriginalConstructor()
            ->getMock();
        $configurationMock->expects($this->any())
            ->method('getConfiguration')
            ->will($this->returnValueMap($valueMap));

        $adWordsSession = $this->adWordsSessionBuilder
            ->from($configurationMock)
            ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
            ->build();

        $this->assertSame(
            'ABcdeFGH93KL-NOPQ_STUv',
            $adWordsSession->getDeveloperToken()
        );
        $this->assertSame('report downloader', $adWordsSession->getUserAgent());
        $this->assertNotFalse(
            filter_var(
                $adWordsSession->getEndpoint(),
                FILTER_VALIDATE_URL
            )
        );
        $this->assertNull($adWordsSession->getClientCustomerId());
        $this->assertNotNull($adWordsSession->isPartialFailure());
        $this->assertNotNull($adWordsSession->isIncludeUtilitiesInUserAgent());
        $this->assertNotNull(
            $adWordsSession->getReportSettings()->isSkipReportHeader()
        );
        $this->assertNotNull(
            $adWordsSession->getReportSettings()->isSkipColumnHeader()
        );
        $this->assertNotNull(
            $adWordsSession->getReportSettings()->isSkipReportSummary()
        );
        $this->assertNotNull(
            $adWordsSession->getReportSettings()->isUseRawEnumValues()
        );
        $this->assertNull(
            $adWordsSession->getReportSettings()->isIncludeZeroImpressions()
        );
        $this->assertNotNull($adWordsSession->getSoapSettings());
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsSessionBuilder::from
     */
    public function testBuildFromWithCustomLogger()
    {
        $valueMap = [
            ['developerToken', 'ADWORDS', 'ABcdeFGH93KL-NOPQ_STUv'],
            ['userAgent', 'ADWORDS', 'report downloader'],
        ];
        $configurationMock = $this->getMockBuilder(Configuration::class)
            ->disableOriginalConstructor()
            ->getMock();
        $configurationMock->expects($this->any())
            ->method('getConfiguration')
            ->will($this->returnValueMap($valueMap));

        $adWordsSession = $this->adWordsSessionBuilder
            ->from($configurationMock)
            ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
            ->withSoapLogger(new Logger('', [new NullHandler()]))
            ->build();

        $this->assertCount(1, $adWordsSession->getSoapLogger()->getHandlers());
        $this->assertInstanceOf(
            NullHandler::class,
            $adWordsSession->getSoapLogger()->getHandlers()[0]
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsSessionBuilder::build
     * @expectedException InvalidArgumentException
     */
    public function testBuildFailsWithoutDeveloperToken()
    {
        $this->adWordsSessionBuilder
            ->withUserAgent('report downloader')
            ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
            ->build();
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsSessionBuilder::build
     */
    public function testBuildWithNullOrEmptyUserAgent()
    {
        $adWordsSession = $this->adWordsSessionBuilder
            ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
            ->withUserAgent('')
            ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
            ->build();
        $this->assertSame('unknown', $adWordsSession->getUserAgent());
        $adWordsSession = $this->adWordsSessionBuilder
            ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
            ->withUserAgent(null)
            ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
            ->build();
        $this->assertSame('unknown', $adWordsSession->getUserAgent());
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsSessionBuilder::build
     * @expectedException InvalidArgumentException
     */
    public function testBuildFailsWithNonAsciiUserAgent()
    {
        $this->adWordsSessionBuilder
            ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
            ->withUserAgent('å∫ç∂´ƒ')
            ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
            ->build();
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsSessionBuilder::build
     * @expectedException InvalidArgumentException
     */
    public function testBuildFailsWithInvalidEndpointUrl()
    {
        $this->adWordsSessionBuilder
            ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
            ->withUserAgent('report downloader')
            ->withEndpoint('abcxyz')
            ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
            ->build();
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsSessionBuilder::build
     * @expectedException InvalidArgumentException
     */
    public function testBuildFailsWithoutOAuth2Credential()
    {
        $this->adWordsSessionBuilder
            ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
            ->withUserAgent('report downloader')
            ->build();
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsSessionBuilder::build
     */
    public function testBuild()
    {
        $adWordsSession = $this->adWordsSessionBuilder
            ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
            ->withUserAgent('report downloader')
            ->withEndpoint('https://abc.xyz/')
            ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
            ->build();

        $this->assertSame(
            'ABcdeFGH93KL-NOPQ_STUv',
            $adWordsSession->getDeveloperToken()
        );
        $this->assertSame('https://abc.xyz/', $adWordsSession->getEndpoint());
        $this->assertSame(
            'report downloader',
            $adWordsSession->getUserAgent()
        );
        $this->assertInstanceOf(
            FetchAuthTokenInterface::class,
            $adWordsSession->getOAuth2Credential()
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsSessionBuilder::build
     */
    public function testBuildDefaults()
    {
        $adWordsSession = $this->adWordsSessionBuilder
            ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
            ->withUserAgent('report downloader')
            ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
            ->build();

        $this->assertSame(
            'ABcdeFGH93KL-NOPQ_STUv',
            $adWordsSession->getDeveloperToken()
        );
        $this->assertSame('report downloader', $adWordsSession->getUserAgent());
        $this->assertInstanceOf(
            FetchAuthTokenInterface::class,
            $adWordsSession->getOAuth2Credential()
        );
        $this->assertInstanceOf(
            LoggerInterface::class,
            $adWordsSession->getSoapLogger()
        );
        $this->assertNotFalse(
            filter_var(
                $adWordsSession->getEndpoint(),
                FILTER_VALIDATE_URL
            )
        );
        $this->assertNull($adWordsSession->getClientCustomerId());
        $this->assertNotNull($adWordsSession->isPartialFailure());
        $this->assertNotNull($adWordsSession->isIncludeUtilitiesInUserAgent());
        $this->assertNotNull(
            $adWordsSession->getReportSettings()->isSkipReportHeader()
        );
        $this->assertNotNull(
            $adWordsSession->getReportSettings()->isSkipColumnHeader()
        );
        $this->assertNotNull(
            $adWordsSession->getReportSettings()->isSkipReportSummary()
        );
        $this->assertNotNull(
            $adWordsSession->getReportSettings()->isUseRawEnumValues()
        );
        $this->assertNull(
            $adWordsSession->getReportSettings()->isIncludeZeroImpressions()
        );
        $this->assertNotNull($adWordsSession->getSoapSettings());
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsSessionBuilder::build
     */
    public function testBuildWithClientCustomerId()
    {
        $adWordsSession = $this->adWordsSessionBuilder
            ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
            ->withUserAgent('report downloader')
            ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
            ->withClientCustomerId('123-456-7890')
            ->build();

        $this->assertSame(
            'ABcdeFGH93KL-NOPQ_STUv',
            $adWordsSession->getDeveloperToken()
        );
        $this->assertSame(
            'report downloader',
            $adWordsSession->getUserAgent()
        );
        $this->assertInstanceOf(
            FetchAuthTokenInterface::class,
            $adWordsSession->getOAuth2Credential()
        );
        $this->assertSame(
            '123-456-7890',
            $adWordsSession->getClientCustomerId()
        );
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsSessionBuilder::build
     */
    public function testBuildWithEnableAndValidateOnlyPartialFailure()
    {
        $adWordsSession = $this->adWordsSessionBuilder
            ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
            ->withUserAgent('report downloader')
            ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
            ->enableValidateOnly()
            ->enablePartialFailure()
            ->build();

        $this->assertSame(
            'ABcdeFGH93KL-NOPQ_STUv',
            $adWordsSession->getDeveloperToken()
        );
        $this->assertSame(
            'report downloader',
            $adWordsSession->getUserAgent()
        );
        $this->assertInstanceOf(
            FetchAuthTokenInterface::class,
            $adWordsSession->getOAuth2Credential()
        );
        $this->assertSame(true, $adWordsSession->isValidateOnly());
        $this->assertSame(true, $adWordsSession->isPartialFailure());
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsSessionBuilder::build
     */
    public function testBuildWithDisableIncludeUtilitiesInUserAgent()
    {
        $adWordsSession = $this->adWordsSessionBuilder
            ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
            ->withUserAgent('report downloader')
            ->withOAuth2Credential($this->fetchAuthTokenInterfaceMock)
            ->disableIncludeUtilitiesInUserAgent()
            ->build();

        $this->assertSame(
            'ABcdeFGH93KL-NOPQ_STUv',
            $adWordsSession->getDeveloperToken()
        );
        $this->assertSame(
            'report downloader',
            $adWordsSession->getUserAgent()
        );
        $this->assertInstanceOf(
            FetchAuthTokenInterface::class,
            $adWordsSession->getOAuth2Credential()
        );
        $this->assertSame(
            false,
            $adWordsSession->isIncludeUtilitiesInUserAgent()
        );
    }
}
