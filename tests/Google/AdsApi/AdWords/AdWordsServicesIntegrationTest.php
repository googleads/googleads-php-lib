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

use Google\AdsApi\AdWords\Testing\AdWordsServicesIntegrationTestProvider;
use Google\AdsApi\AdWords\v201809\cm\Campaign;
use Google\AdsApi\AdWords\v201809\cm\CampaignService;
use Google\AdsApi\AdWords\v201809\cm\Selector;
use Google\AdsApi\Common\AdsSoapClientFactory;
use Google\AdsApi\Common\SoapSettingsBuilder;
use Google\AdsApi\Common\Testing\ApplicationNames;
use Google\AdsApi\Common\Util\Reflection;
use Google\Auth\FetchAuthTokenInterface;
use Monolog\Handler\NullHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;

/**
 * Integration test for `AdWordsServices`.
 *
 * Tests end to end calls to the `CampaignService` with the XML response mocked
 * out so the API call never reaches the live service. Note however that the PHP
 * SOAP client still requires a live WSDL to validate against.
 *
 * @see AdWordsServices
 * @large
 */
class AdWordsServicesIntegrationTest extends TestCase
{

    private static $WSDL_FILE_DIR;

    private $applicationNames;
    private $adWordsSession;
    private $campaignServiceMock;
    private $reflectionMock;
    private $adWordsServices;

    /**
     * @see PHPUnit\Framework\TestCase::setUp
     */
    protected function setUp()
    {
        error_reporting(E_ALL & ~E_USER_NOTICE);
        self::$WSDL_FILE_DIR = __DIR__ . '/../../../../';
        $this->applicationNames = new ApplicationNames();

        $fetchAuthTokenInterfaceMock = $this
            ->getMockBuilder(FetchAuthTokenInterface::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->adWordsSession = (new AdWordsSessionBuilder())
            ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
            ->withUserAgent('report downloader')
            ->withOAuth2Credential($fetchAuthTokenInterfaceMock)
            ->withSoapLogger(new Logger('', [new NullHandler()]))
            ->build();

        // Mock the SOAP XML response from the HTTP request to the campaign service
        // using a partial mock.
        $this->campaignServiceMock = $this
            ->getMockBuilder(CampaignService::class)
            ->setMethods(['__doRequest', '__construct'])
            ->setConstructorArgs(
                [
                    [],
                    self::$WSDL_FILE_DIR
                    . 'src/Google/AdsApi/AdWords/Testing/campaign-service.wsdl'
                ]
            )
            ->getMock();
        // "Inject" the mock campaign service.
        $this->reflectionMock = $this
            ->getMockBuilder(Reflection::class)
            ->getMock();
        $this->reflectionMock->expects($this->once())
            ->method('createInstance')
            ->will($this->returnValue($this->campaignServiceMock));
        $soapClientFactory = new AdsSoapClientFactory(
            (new AdWordsSoapLogMessageFormatterProvider())
                ->getSoapLogMessageFormatter(),
            $this->reflectionMock
        );

        $this->adWordsServices = new AdWordsServices($soapClientFactory);
    }

    /**
     * @param Campaign[] $expectedCampaigns the expected campaigns
     * @covers       Google\AdsApi\AdWords\AdWordsServices::get
     * @dataProvider campaignProvider
     */
    public function testGetCallToCampaignServiceReturnsResults(
        array $expectedCampaigns
    ) {
        // Test that the application name is formatted correctly in the outgoing
        // SOAP XML request header.
        $this->campaignServiceMock->expects($this->once())
            ->method('__doRequest')
            ->with(
                $this->matchesRegularExpression(
                    $this->applicationNames
                        ->getRegexForFormattedApplicationName(
                            'report downloader'
                        )
                )
            )
            ->will(
                $this->returnValue(
                    AdWordsServicesIntegrationTestProvider
                        ::getFakeGetCampaignsResponse()
                )
            );

        // Use AdWords services to get an instance of a campaign service, which
        // will configure and return the mock campaign service.
        $campaignService = $this->adWordsServices->get(
            $this->adWordsSession,
            CampaignService::class
        );

        // Make an API call where the mock campaign service will return a mocked
        // SOAP XML response.
        $selector = new Selector();
        $selector->setFields(['Id', 'Name', 'Status', 'StartDate', 'EndDate']);
        $page = $campaignService->get($selector);

        // Check that the campaign service (which is a SOAP client) has deserialized
        // the SOAP XML response to the Campaign object correctly.
        $actualCampaigns = $page->getEntries();
        $this->assertCount(count($expectedCampaigns), $actualCampaigns);

        for ($i = 0; $i < count($actualCampaigns); $i++) {
            $expectedCampaign = $expectedCampaigns[$i];
            $actualCampaign = $actualCampaigns[$i];
            $this->assertSame(
                $expectedCampaign->getId(),
                $actualCampaign->getId(),
                'Campaign ID does not match.'
            );
            $this->assertSame(
                $expectedCampaign->getName(),
                $actualCampaign->getName(),
                'Campaign name does not match.'
            );
            $this->assertSame(
                $expectedCampaign->getStatus(),
                $actualCampaign->getStatus(),
                'Campaign status does not match.'
            );
            $this->assertSame(
                $expectedCampaign->getStartDate(),
                $actualCampaign->getStartDate(),
                'Campaign start date does not match.'
            );
            $this->assertSame(
                $expectedCampaign->getEndDate(),
                $actualCampaign->getEndDate(),
                'Campaign end date does not match.'
            );
        }
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsServices::get
     */
    public function testGetCallToCampaignServiceValidateOnlyReturnsNullResult()
    {
        $this->campaignServiceMock->expects($this->once())
            ->method('__doRequest')
            ->will(
                $this->returnValue(
                    AdWordsServicesIntegrationTestProvider
                        ::getFakeGetCampaignsValidateOnlyResponse()
                )
            );

        // Use AdWords services to get an instance of a campaign service, which
        // will configure and return the mock campaign service.
        $this->adWordsSession->setValidateOnly(true);
        $campaignService = $this->adWordsServices->get(
            $this->adWordsSession,
            CampaignService::class
        );

        // Make an API call where the mock campaign service will return a mocked
        // SOAP XML response.
        $selector = new Selector();
        $selector->setFields(['Id', 'Name', 'Status', 'StartDate', 'EndDate']);
        $page = $campaignService->get($selector);

        $this->assertNull($page);
    }

    /**
     * @covers Google\AdsApi\AdWords\AdWordsServices::get
     * @expectedException Google\AdsApi\AdWords\v201809\cm\ApiException
     * @expectedExceptionMessage [SelectorError.INVALID_FIELD_NAME @
     *     serviceSelector; trigger:'asDEEf'; errorDetails:asDEEf]
     */
    public function testGetCallToCampaignServiceExpectFault()
    {
        $this->campaignServiceMock->expects($this->once())
            ->method('__doRequest')
            ->will(
                $this->returnValue(
                    AdWordsServicesIntegrationTestProvider
                        ::getFakeGetCampaignsSoapFault()
                )
            );

        // Use AdWords services to get an instance of a campaign service, which
        // will configure and return the mock campaign service.
        $campaignService = $this->adWordsServices->get(
            $this->adWordsSession,
            CampaignService::class
        );

        // Make an API call where the mock campaign service will return a mocked
        // SOAP XML response.
        $selector = new Selector();
        $selector->setFields(['Id', 'Name', 'Status', 'StartDate', 'EndDate']);
        $campaignService->get($selector);
    }

    /**
     * Provides expected campaign objects.
     *
     * @return array an array of arrays of expected campaign objects
     */
    public function campaignProvider()
    {
        $campaign1 = new Campaign();
        $campaign1->setId(9223372036854775808);
        $campaign1->setName('Summer shoes');
        $campaign1->setStatus('ENABLED');
        $campaign1->setStartDate('20120701');
        $campaign1->setEndDate('20120825');

        $campaign2 = new Campaign();
        $campaign2->setId(123456789);
        $campaign2->setName('Fall clothing');
        $campaign2->setStatus('ENABLED');
        $campaign2->setStartDate('20120901');
        $campaign2->setEndDate('20121215');

        return [[[$campaign1, $campaign2]]];
    }
}
