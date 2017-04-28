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
namespace Google\AdsApi\AdWords\Reporting\v201702;

use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\ReportSettingsBuilder;
use Google\AdsApi\AdWords\Testing\Reporting\v201702\ReportingTestProvider;
use Google\AdsApi\Common\SoapSettingsBuilder;
use Google\AdsApi\AdWords\v201702\cm\ReportDefinitionReportType;
use Google\AdsApi\AdWords\v201702\cm\Selector;
use Google\Auth\FetchAuthTokenInterface;
use Monolog\Handler\NullHandler;
use Monolog\Logger;
use PHPUnit_Framework_TestCase;

/**
 * Unit tests for `RequestOptionsFactory`.
 *
 * @see RequestOptionsFactory
 * @small
 */
class RequestOptionsFactoryTest extends PHPUnit_Framework_TestCase {

  private static $DEFAULT_TIMEOUT_IN_SECONDS = 120;

  private $adWordsSession;
  private $requestOptionsFactory;

  /**
   * @see PHPUnit_Framework_TestCase::setUp
   */
  protected function setUp() {
    $fetchAuthTokenInterfaceMock = $this
        ->getMockBuilder(FetchAuthTokenInterface::class)
        ->disableOriginalConstructor()
        ->getMock();
    $fetchAuthTokenInterfaceMock->expects($this->once())
        ->method('fetchAuthToken')
        ->will($this->returnValue(['access_token' => 'abc123']));
    $reportSettings = (new ReportSettingsBuilder())
        ->skipReportHeader(true)
        ->skipColumnHeader(true)
        ->skipReportSummary(false)
        ->useRawEnumValues(true)
        ->includeZeroImpressions(false)
        ->build();

    $this->adWordsSession = (new AdWordsSessionBuilder())
        ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
        ->withClientCustomerId('123-456-7890')
        ->withUserAgent('request options factory')
        ->withOAuth2Credential($fetchAuthTokenInterfaceMock)
        ->withReportDownloaderLogger(new Logger('', [new NullHandler()]))
        ->withReportSettings($reportSettings)
        ->build();

    $this->requestOptionsFactory =
        new RequestOptionsFactory($this->adWordsSession);
  }

  /**
   * @covers Google\AdsApi\AdWords\Reporting\v201702\RequestOptionsFactory::createRequestOptionsWithReportDefinition
   */
  public function testCreateRequestOptionsWithReportDefinition() {
    $fakeReportDefinitionPayload =
        ReportingTestProvider::getFakeReportDefinition();
    $selector = new Selector();
    $selector->setFields(['CampaignId', 'AdGroupId', 'Id', 'Criteria',
        'CriteriaType', 'Impressions', 'Clicks', 'Cost']);
    $reportDefinition = new ReportDefinition();
    $reportDefinition->setSelector($selector);
    $reportDefinition->setReportName('CRITERIA_PERFORMANCE_REPORT');
    $reportDefinition->setReportType(
        ReportDefinitionReportType::CRITERIA_PERFORMANCE_REPORT);
    $reportDefinition->setDownloadFormat(DownloadFormat::CSV);

    $expectedRequestOptions = [
        'headers' => [
            'Authorization' => 'Bearer abc123',
            'developerToken' => 'ABcdeFGH93KL-NOPQ_STUv',
            'clientCustomerId' => '123-456-7890',
            'skipReportHeader' => 'true',
            'skipColumnHeader' => 'true',
            'skipReportSummary' => 'false',
            'useRawEnumValues' => 'true',
            'includeZeroImpressions' => 'false',
        ],
        'form_params' => ['__rdxml' => $fakeReportDefinitionPayload],
        'stream' => true,
        'stream_context' => [
            'http' => ['timeout' => self::$DEFAULT_TIMEOUT_IN_SECONDS]
        ]
    ];
    $actualRequestOptions = $this->requestOptionsFactory
        ->createRequestOptionsWithReportDefinition($reportDefinition);
    $this->assertSame($expectedRequestOptions['headers'],
        $actualRequestOptions['headers']);
    $this->assertXmlStringEqualsXmlString(
        $expectedRequestOptions['form_params']['__rdxml'],
        $actualRequestOptions['form_params']['__rdxml']
    );
    $this->assertSame($expectedRequestOptions['stream_context']['http'],
        $actualRequestOptions['stream_context']['http']);
  }

  /**
   * @covers Google\AdsApi\AdWords\Reporting\v201702\RequestOptionsFactory::createRequestOptionsWithAwqlQuery
   */
  public function testCreateRequestOptionsWithAwqlQuery() {
    $reportQuery = 'SELECT CampaignId, AdGroupId, Id, Criteria, CriteriaType, '
        . 'Impressions, Clicks, Cost FROM CRITERIA_PERFORMANCE_REPORT';

    $expectedRequestOptions = [
        'headers' => [
            'Authorization' => 'Bearer abc123',
            'developerToken' => 'ABcdeFGH93KL-NOPQ_STUv',
            'clientCustomerId' => '123-456-7890',
            'skipReportHeader' => 'true',
            'skipColumnHeader' => 'true',
            'skipReportSummary' => 'false',
            'useRawEnumValues' => 'true',
            'includeZeroImpressions' => 'false',
        ],
        'form_params' => [
            '__rdquery' => $reportQuery,
            '__fmt' => 'CSV'
        ],
        'stream' => true,
        'stream_context' => [
            'http' => ['timeout' => self::$DEFAULT_TIMEOUT_IN_SECONDS]
        ]
    ];
    $actualRequestOptions = $this->requestOptionsFactory
        ->createRequestOptionsWithAwqlQuery($reportQuery, 'CSV');
    $this->assertSame($expectedRequestOptions['headers'],
        $actualRequestOptions['headers']);
    $this->assertSame($expectedRequestOptions['form_params']['__rdquery'],
        $actualRequestOptions['form_params']['__rdquery']);
    $this->assertSame($expectedRequestOptions['form_params']['__fmt'],
        $actualRequestOptions['form_params']['__fmt']);
    $this->assertSame($expectedRequestOptions['stream_context']['http'],
        $actualRequestOptions['stream_context']['http']);
  }

  /**
   * @covers Google\AdsApi\AdWords\Reporting\v201702\RequestOptionsFactory::createRequestOptionsWithReportDefinition
   */
  public function testCreateRequestOptionsWithAdditionalRequestOptions() {
    $fakeReportDefinitionPayload =
        ReportingTestProvider::getFakeReportDefinition();
    $expectedTimeout = 300;
    $expectedRequestOptions = [
        'headers' => [
            'Authorization' => 'Bearer abc123',
            'developerToken' => 'ABcdeFGH93KL-NOPQ_STUv',
            'clientCustomerId' => '123-456-7890',
            'skipReportHeader' => 'true',
            'skipColumnHeader' => 'true',
            'skipReportSummary' => 'false',
            'useRawEnumValues' => 'true',
            'includeZeroImpressions' => 'false',
        ],
        'form_params' => ['__rdxml' => $fakeReportDefinitionPayload],
        'stream' => true,
        'stream_context' => [
            'http' => ['timeout' => $expectedTimeout]
        ]
    ];

    $selector = new Selector();
    $selector->setFields(['CampaignId', 'AdGroupId', 'Id', 'Criteria',
        'CriteriaType', 'Impressions', 'Clicks', 'Cost']);
    $reportDefinition = new ReportDefinition();
    $reportDefinition->setSelector($selector);
    $reportDefinition->setReportName('CRITERIA_PERFORMANCE_REPORT');
    $reportDefinition->setReportType(
        ReportDefinitionReportType::CRITERIA_PERFORMANCE_REPORT);
    $reportDefinition->setDownloadFormat(DownloadFormat::CSV);

    $streamContextOptions = [
        'stream_context' => [
            'http' => ['timeout' => $expectedTimeout]
        ]
    ];
    $requestOptionsFactory =
        new RequestOptionsFactory($this->adWordsSession, $streamContextOptions);
    $actualRequestOptions = $requestOptionsFactory
        ->createRequestOptionsWithReportDefinition($reportDefinition);

    $this->assertSame($expectedRequestOptions['headers'],
        $actualRequestOptions['headers']);
    $this->assertXmlStringEqualsXmlString(
        $expectedRequestOptions['form_params']['__rdxml'],
        $actualRequestOptions['form_params']['__rdxml']
    );
    $this->assertSame($expectedRequestOptions['stream_context'],
        $actualRequestOptions['stream_context']);
  }
}
