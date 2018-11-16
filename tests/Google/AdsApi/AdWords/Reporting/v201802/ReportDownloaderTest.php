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

namespace Google\AdsApi\AdWords\Reporting\v201802;

use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\Query\v201802\ReportQueryBuilder;
use Google\AdsApi\AdWords\ReportSettingsBuilder;
use Google\AdsApi\AdWords\Testing\Reporting\v201802\ReportingTestProvider;
use Google\AdsApi\AdWords\v201802\cm\ReportDefinitionReportType;
use Google\AdsApi\AdWords\v201802\cm\Selector;
use Google\AdsApi\Common\AdsUtility;
use Google\AdsApi\Common\AdsUtilityRegistry;
use Google\AdsApi\Common\SoapSettingsBuilder;
use Google\Auth\FetchAuthTokenInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use InvalidArgumentException;
use Monolog\Handler\NullHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `ReportDownloader`.
 *
 * @see ReportDownloader
 * @small
 */
class ReportDownloaderTest extends TestCase
{

    private $adWordsSession;

    /**
     * @see PHPUnit\Framework\TestCase::setUp
     */
    protected function setUp()
    {
        $fetchAuthTokenInterfaceStub = $this
            ->getMockBuilder(FetchAuthTokenInterface::class)
            ->disableOriginalConstructor()
            ->getMock();
        $fetchAuthTokenInterfaceStub
            ->method('fetchAuthToken')
            ->willReturn(['access_token' => 'abc123']);
        $reportSettings = (new ReportSettingsBuilder())
            ->skipReportHeader(true)
            ->skipColumnHeader(true)
            ->skipReportSummary(false)
            ->useRawEnumValues(false)
            ->includeZeroImpressions(true)
            ->build();

        $this->adWordsSession = (new AdWordsSessionBuilder())
            ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
            ->withClientCustomerId('123-456-7890')
            ->withUserAgent('report downloader')
            ->withOAuth2Credential($fetchAuthTokenInterfaceStub)
            ->withReportDownloaderLogger(new Logger('', [new NullHandler()]))
            ->withReportSettings($reportSettings)
            ->build();
    }

    /**
     * @see PHPUnit\Framework\TestCase::tearDown
     */
    protected function tearDown()
    {
        AdsUtilityRegistry::getInstance()->popAllUtilities();
    }

        /**
     * @covers Google\AdsApi\AdWords\Reporting\v201802\ReportDownloader::downloadReport
     */
    public function testDownloadReportUsingReportDefinition()
    {
        // Setup the Guzzle HTTP client to mock a request to return the report
        // contents.
        $fakeReport = ReportingTestProvider::getFakeCriteriaReport();
        $mockHandler = new MockHandler([new Response(200, [], $fakeReport)]);
        $handler = HandlerStack::create($mockHandler);
        $httpClient = new Client(['handler' => $handler]);

        $selector = new Selector();
        $selector->setFields(
            [
                'CampaignId',
                'AdGroupId',
                'Id',
                'Criteria',
                'CriteriaType',
                'Impressions',
                'Clicks',
                'Cost'
            ]
        );
        $reportDefinition = new ReportDefinition();
        $reportDefinition->setSelector($selector);
        $reportDefinition->setReportName('CRITERIA_PERFORMANCE_REPORT');
        $reportDefinition->setReportType(
            ReportDefinitionReportType::CRITERIA_PERFORMANCE_REPORT
        );
        $reportDefinition->setDownloadFormat(DownloadFormat::CSV);

        $reportDownloader =
            new ReportDownloader($this->adWordsSession, null, $httpClient);
        $downloadResult = $reportDownloader->downloadReport($reportDefinition);

        $this->assertNotNull($downloadResult);
    }

    /**
     * @covers Google\AdsApi\AdWords\Reporting\v201802\ReportDownloader::downloadReportWithAwql
     */
    public function testDownloadReportUsingAwql()
    {
        // Setup the Guzzle HTTP client to mock a request to return the report
        // contents.
        $fakeReport = ReportingTestProvider::getFakeCriteriaReport();
        $mockHandler = new MockHandler([new Response(200, [], $fakeReport)]);
        $handler = HandlerStack::create($mockHandler);
        $httpClient = new Client(['handler' => $handler]);

        $reportQuery =
            'SELECT CampaignId, AdGroupId, Id, Criteria, CriteriaType, '
            . 'Impressions, Clicks, Cost FROM CRITERIA_PERFORMANCE_REPORT';
        $reportDownloader =
            new ReportDownloader($this->adWordsSession, null, $httpClient);
        $downloadResult =
            $reportDownloader->downloadReportWithAwql($reportQuery, 'CSV');

        $this->assertNotNull($downloadResult);
    }

    /**
     * @covers Google\AdsApi\AdWords\Reporting\v201802\ReportDownloader::downloadReport
     * @expectedException Google\AdsApi\AdWords\v201802\cm\ApiException
     */
    public function testDownloadReportFailedWithClientError()
    {
        // Setup the Guzzle HTTP client to mock a request to return the report
        // error and throw a client exception with code 400.
        $fakeApiErrorResponse =
            ReportingTestProvider::getFakeReportErrorResponse();
        $mockHandler = new MockHandler(
            [
                new ClientException(
                    'Client error: 400',
                    new Request('POST', 'https://abc.xyz'),
                    new Response(400, [], $fakeApiErrorResponse)
                )
            ]
        );
        $handler = HandlerStack::create($mockHandler);
        $httpClient = new Client(['handler' => $handler]);

        $selector = new Selector();
        $selector->setFields(
            [
                'CampaignId',
                'AdGroupId',
                'Id',
                'Criteria',
                'CriteriaType',
                'Impressions',
                'Clicks',
                'Cost'
            ]
        );
        $reportDefinition = new ReportDefinition();
        $reportDefinition->setSelector($selector);
        $reportDefinition->setReportName('CRITERIA_PERFORMANCE_REPORT');
        $reportDefinition->setReportType(
            ReportDefinitionReportType::CRITERIA_PERFORMANCE_REPORT
        );
        $reportDefinition->setDownloadFormat(DownloadFormat::CSV);

        $reportDownloader =
            new ReportDownloader($this->adWordsSession, null, $httpClient);
        $reportDownloader->downloadReport($reportDefinition);
    }

    /**
     * @covers Google\AdsApi\AdWords\Reporting\v201802\ReportDownloader::downloadReportWithAwql
     * @expectedException Google\AdsApi\AdWords\v201802\cm\ApiException
     */
    public function testDownloadReportFailedWithServerError()
    {
        // Setup the Guzzle HTTP client to mock a request to throw a server
        // exception with code 500.
        $mockHandler = new MockHandler(
            [
                new ServerException(
                    'Server error: 500',
                    new Request('POST', 'https://abc.xyz'),
                    new Response(500)
                )
            ]
        );
        $handler = HandlerStack::create($mockHandler);
        $httpClient = new Client(['handler' => $handler]);

        $reportQuery =
            'SELECT CampaignId, AdGroupId, Id, Criteria, CriteriaType, '
            . 'Impressions, Clicks, Cost FROM CRITERIA_PERFORMANCE_REPORT';
        $reportDownloader =
            new ReportDownloader($this->adWordsSession, null, $httpClient);
        $reportDownloadResult =
            $reportDownloader->downloadReportWithAwql($reportQuery, 'CSV');
    }

    /**
     * @covers Google\AdsApi\AdWords\Reporting\v201802\ReportDownloader::downloadReportWithAwql
     */
    public function testDownloadReportUsingAwqlWithRequestOptionsFactory()
    {
        // Setup the Guzzle HTTP client to mock a request to return the report
        // contents.
        $fakeReport = ReportingTestProvider::getFakeCriteriaReport();
        $mockHandler = new MockHandler([new Response(200, [], $fakeReport)]);
        $handler = HandlerStack::create($mockHandler);
        $httpClient = new Client(['handler' => $handler]);

        $reportQuery =
            'SELECT CampaignId, AdGroupId, Id, Criteria, CriteriaType, '
            . 'Impressions, Clicks, Cost FROM CRITERIA_PERFORMANCE_REPORT';
        $reportFormat = 'CSV';

        $requestOptionsFactory = $this
            ->getMockBuilder(RequestOptionsFactory::class)
            ->disableOriginalConstructor()
            ->getMock();
        $requestOptionsFactory
            ->method('createRequestOptionsWithAwqlQuery')
            ->willReturn(
                [
                    '__rdquery' => $reportQuery,
                    '__fmt' => $reportFormat,
                    'stream_context' => [
                        'http' => ['timeout' => 480]
                    ]
                ]
            );

        $reportDownloader = new ReportDownloader(
            $this->adWordsSession,
            $requestOptionsFactory,
            $httpClient
        );
        $downloadResult =
            $reportDownloader->downloadReportWithAwql(
                $reportQuery,
                $reportFormat
            );

        $this->assertNotNull($downloadResult);
    }

    /**
     * @covers Google\AdsApi\AdWords\Reporting\v201802\ReportDownloader::downloadReportWithAwql
     *
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage report query
     */
    public function testDownloadReportUsingAwqlShouldRejectReportQueryObject()
    {
        // Setup the Guzzle HTTP client to mock a request to return the report
        // contents.
        $fakeReport = ReportingTestProvider::getFakeCriteriaReport();
        $mockHandler = new MockHandler([new Response(200, [], $fakeReport)]);
        $handler = HandlerStack::create($mockHandler);
        $httpClient = new Client(['handler' => $handler]);

        $reportQuery = (new ReportQueryBuilder())
            ->select(['Id'])
            ->from(ReportDefinitionReportType::CRITERIA_PERFORMANCE_REPORT)
            ->build();
        $reportDownloader =
            new ReportDownloader($this->adWordsSession, null, $httpClient);
        $reportDownloader->downloadReportWithAwql($reportQuery, 'CSV');
    }

    /**
     * @covers Google\AdsApi\AdWords\Reporting\v201802\ReportDownloader::downloadReportWithReportQuery
     */
    public function testDownloadReportUsingReportQueryObject()
    {
        // Setup the Guzzle HTTP client to mock a request to return the report
        // contents.
        $fakeReport = ReportingTestProvider::getFakeCriteriaReport();
        $mockHandler = new MockHandler([new Response(200, [], $fakeReport)]);
        $handler = HandlerStack::create($mockHandler);
        $httpClient = new Client(['handler' => $handler]);

        $reportQuery = (new ReportQueryBuilder())
            ->select([
                'CampaignId',
                'AdGroupId',
                'Id',
                'Criteria',
                'CriteriaType',
                'Impressions',
                'Clicks',
                'Cost'
            ])
            ->from(ReportDefinitionReportType::CRITERIA_PERFORMANCE_REPORT)
            ->build();
        $reportDownloader =
            new ReportDownloader($this->adWordsSession, null, $httpClient);
        $downloadResult =
            $reportDownloader->downloadReportWithReportQuery(
                $reportQuery,
                'CSV'
            );

        $this->assertNotNull($downloadResult);
    }
}
