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
namespace Google\AdsApi\AdWords\Reporting\v201607;

use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\ReportSettingsBuilder;
use Google\AdsApi\AdWords\Testing\ReportingTestProvider;
use Google\AdsApi\AdWords\v201607\cm\ReportDefinitionReportType;
use Google\AdsApi\AdWords\v201607\cm\Selector;
use Google\AdsApi\Common\SoapSettingsBuilder;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Monolog\Handler\NullHandler;
use Monolog\Logger;
use PHPUnit_Framework_TestCase;

/**
 * Unit tests for ReportDownloader.
 * @see ReportDownloader
 * @group small
 */
class ReportDownloaderTest extends PHPUnit_Framework_TestCase {

  private $adWordsSession;

  /**
   * @see PHPUnit_Framework_TestCase::setUp
   */
  protected function setUp() {
    $fetchAuthTokenInterfaceMock = $this
        ->getMockBuilder('Google\Auth\FetchAuthTokenInterface')
        ->disableOriginalConstructor()
        ->getMock();
    $fetchAuthTokenInterfaceMock->expects($this->once())
        ->method('fetchAuthToken')
        ->will($this->returnValue(['access_token' => 'abc123']));
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
        ->withOAuth2Credential($fetchAuthTokenInterfaceMock)
        ->withLogger(new Logger('', [new NullHandler()]))
        ->withReportSettings($reportSettings)
        ->build();
  }

  /**
   * @covers Google\AdsApi\AdWords\Reporting\v201607\ReportDownloader::downloadReport
   */
  public function testDownloadReportAsStreamUsingReportDefinition() {
    // Setup the Guzzle HTTP client to mock a request to return the report
    // contents.
    $fakeReport = ReportingTestProvider::getFakeCriteriaReport();
    $mockHandler = new MockHandler([new Response(200, [], $fakeReport)]);
    $handler = HandlerStack::create($mockHandler);
    $httpClient = new Client(['handler' => $handler]);

    $selector = new Selector();
    $selector->setFields(['CampaignId', 'AdGroupId', 'Id', 'Criteria',
        'CriteriaType', 'Impressions', 'Clicks', 'Cost']);
    $reportDefinition = new ReportDefinition();
    $reportDefinition->setSelector($selector);
    $reportDefinition->setReportName('CRITERIA_PERFORMANCE_REPORT');
    $reportDefinition->setReportType(
        ReportDefinitionReportType::CRITERIA_PERFORMANCE_REPORT);
    $reportDefinition->setDownloadFormat(DownloadFormat::CSV);

    $reportDownloader =
        new ReportDownloader($this->adWordsSession, $httpClient);
    $responseStream =
        $reportDownloader->downloadReport($reportDefinition);
    $response = \GuzzleHttp\Psr7\copy_to_string($responseStream);
    $responseStream->close();

    $this->assertSame($fakeReport, $response);
  }

  /**
   * @covers Google\AdsApi\AdWords\Reporting\v201607\ReportDownloader::downloadReportWithAwql
   */
  public function testDownloadReportAsStreamUsingAwql() {
    // Setup the Guzzle HTTP client to mock a request to return the report
    // contents.
    $fakeReport = ReportingTestProvider::getFakeCriteriaReport();
    $mockHandler = new MockHandler([new Response(200, [], $fakeReport)]);
    $handler = HandlerStack::create($mockHandler);
    $httpClient = new Client(['handler' => $handler]);

    $reportQuery = 'SELECT CampaignId, AdGroupId, Id, Criteria, CriteriaType, '
        . 'Impressions, Clicks, Cost FROM CRITERIA_PERFORMANCE_REPORT';
    $reportDownloader =
        new ReportDownloader($this->adWordsSession, $httpClient);
    $responseStream =
        $reportDownloader->downloadReportWithAwql($reportQuery, 'CSV');
    $response = \GuzzleHttp\Psr7\copy_to_string($responseStream);
    $responseStream->close();

    $this->assertSame($fakeReport, $response);
  }

  /**
   * @covers Google\AdsApi\AdWords\Reporting\v201607\ReportDownloader::downloadReport
   * @expectedException Google\AdsApi\AdWords\v201607\cm\ApiException
   */
  public function testDownloadReportFailedWithClientError() {
    // Setup the Guzzle HTTP client to mock a request to return the report
    // error and throw a client exception with code 400.
    $fakeApiErrorResponse = ReportingTestProvider::getFakeReportErrorResponse();
    $mockHandler = new MockHandler([
        new ClientException(
            'Client error: 400',
            new Request('POST', 'https://abc.xyz'),
            new Response(400, [], $fakeApiErrorResponse))
    ]);
    $handler = HandlerStack::create($mockHandler);
    $httpClient = new Client(['handler' => $handler]);

    $selector = new Selector();
    $selector->setFields(['CampaignId', 'AdGroupId', 'Id', 'Criteria',
        'CriteriaType', 'Impressions', 'Clicks', 'Cost']);
    $reportDefinition = new ReportDefinition();
    $reportDefinition->setSelector($selector);
    $reportDefinition->setReportName('CRITERIA_PERFORMANCE_REPORT');
    $reportDefinition->setReportType(
        ReportDefinitionReportType::CRITERIA_PERFORMANCE_REPORT);
    $reportDefinition->setDownloadFormat(DownloadFormat::CSV);

    $reportDownloader =
        new ReportDownloader($this->adWordsSession, $httpClient);
    $responseStream =
        $reportDownloader->downloadReport($reportDefinition);
  }

  /**
   * @covers Google\AdsApi\AdWords\Reporting\v201607\ReportDownloader::downloadReportWithAwql
   * @expectedException Google\AdsApi\AdWords\v201607\cm\ApiException
   */
  public function testDownloadReportFailedWithServerError() {
    // Setup the Guzzle HTTP client to mock a request to throw a server
    // exception with code 500.
    $mockHandler = new MockHandler([
        new ServerException(
            'Server error: 500',
            new Request('POST', 'https://abc.xyz'),
            new Response(500))
    ]);
    $handler = HandlerStack::create($mockHandler);
    $httpClient = new Client(['handler' => $handler]);

    $reportQuery = 'SELECT CampaignId, AdGroupId, Id, Criteria, CriteriaType, '
        . 'Impressions, Clicks, Cost FROM CRITERIA_PERFORMANCE_REPORT';
    $reportDownloader =
        new ReportDownloader($this->adWordsSession, $httpClient);
    $responseStream =
        $reportDownloader->downloadReportWithAwql($reportQuery, 'CSV');
  }
}
