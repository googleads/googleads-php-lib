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
namespace Google\AdsApi\AdWords;

use Google\AdsApi\Common\Testing\FakeHttpPayloadsAndLogsProvider;
use Google\Auth\FetchAuthTokenInterface;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `AdWordsGuzzleLogMessageFormatterProvider`.
 *
 * @see AdWordsGuzzleLogMessageFormatterProvider
 * @small
 */
class AdWordsGuzzleLogMessageFormatterProviderTest
    extends TestCase {

  private $adWordsGuzzleLogMessageFormatter;
  private $reportDownloadResult;
  private $awql;

  /**
   * @see PHPUnit\Framework\TestCase::setUp
   */
  protected function setUp() {
    $fetchAuthTokenInterfaceStub = $this
        ->getMockBuilder(FetchAuthTokenInterface::class)
        ->disableOriginalConstructor()
        ->getMock();
    $fetchAuthTokenInterfaceStub
        ->method('fetchAuthToken')
        ->willReturn(['access_token' => 'abc123']);
    $session = (new AdWordsSessionBuilder())
        ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
        ->withClientCustomerId('111-222-3333')
        ->withUserAgent('batch jobs delegate')
        ->withOAuth2Credential($fetchAuthTokenInterfaceStub)
        ->build();

    $this->adWordsGuzzleLogMessageFormatter =
        (new AdWordsGuzzleLogMessageFormatterProvider($session, false, ''))
            ->getGuzzleLogMessageFormatter();
    $this->reportDownloadResult = FakeHttpPayloadsAndLogsProvider
        ::getFakeDownloadReportResult();
    $this->awql = trim(FakeHttpPayloadsAndLogsProvider::getFakeAwql());
  }

  /**
   * @covers Google\AdsApi\AdWords\AdWordsGuzzleLogMessageFormatterProvider::getGuzzleLogMessageFormatter
   */
  public function testGetGuzzleLogMessageFormatterFormatsSummary() {
    $headers = [
        'User-Agent' => 'GuzzleHttp/6.1.0 curl/7.52.1-DEV PHP/5.5.38',
        'Content-Type' => 'application/x-www-form-urlencoded',
        'Host' => 'adwords.google.com',
        'Authorization' => 'REDACTED',
        'developerToken' => 'REDACTED',
        'clientCustomerId' => '111-222-3333',
        'skipReportHeader' => false,
        'skipColumnHeader' => false,
        'skipReportSummary' => false,
        'useRawEnumValues' => true,
        'includeZeroImpressions' => false
    ];
    $body = http_build_query([
        '__rdquery' => $this->awql,
        '__fmt' => 'CSV'
    ]);
    $request = new Request(
        'POST', '/api/adwords/reportdownload/v201702', $headers, $body);
    $response = new Response(200, [], $this->reportDownloadResult);
    $this->assertSame(
        'clientCustomerId=111-222-3333 GuzzleHttp/6.1.0 curl/7.52.1-DEV'
            . ' PHP/5.5.38 "POST /api/adwords/reportdownload/v201702 HTTP/1.1"'
            . ' Status: 200 ',
        $this->adWordsGuzzleLogMessageFormatter->formatSummary(
            $request, $response)
    );
  }
}
