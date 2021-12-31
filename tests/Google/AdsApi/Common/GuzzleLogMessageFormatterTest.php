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

use Google\AdsApi\Common\Testing\FakeHttpPayloadsAndLogsProvider;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\NoSeekStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `GuzzleLogMessageFormatter`.
 *
 * @see GuzzleLogMessageFormatter
 * @small
 */
class GuzzleLogMessageFormatterTest extends TestCase
{

    private $reportDownloadResult;
    private $reportDownloadError;

    private $scrubbedReportDownloadLog;
    private $nonRedactedScrubbedReportDownloadLog;
    private $reportDownloadLogWithErrors;
    private $nonRedactedReportDownloadLogWithErrors;
    private $awql;
    private $encodedReportDefinition;
    private $reportDownloadLogOfAwql;
    private $reportDownloadLogOfReportDefinition;
    private $nonRedactedReportDownloadLogOfReportDefinition;

    /**
     * @see \PHPUnit\Framework\TestCase::setUp
     */
    protected function setUp(): void
    {
        $this->reportDownloadResult =
            FakeHttpPayloadsAndLogsProvider::getFakeDownloadReportResult();
        $this->reportDownloadError =
            FakeHttpPayloadsAndLogsProvider::getFakeDownloadReportError();
        $this->scrubbedReportDownloadLog =
            FakeHttpPayloadsAndLogsProvider::getScrubbedFakeReportDownloadLog();
        $this->nonRedactedScrubbedReportDownloadLog =
            FakeHttpPayloadsAndLogsProvider::getFakeNonRedactedScrubbedReportDownloadLog();
        $this->awql = trim(FakeHttpPayloadsAndLogsProvider::getFakeAwql());
        $this->encodedReportDefinition = trim(
            FakeHttpPayloadsAndLogsProvider::getFakeEncodedReportDefinition()
        );
        $this->reportDownloadLogOfAwql =
            FakeHttpPayloadsAndLogsProvider::getFakeReportDownloadLogOfAwql();
        $this->reportDownloadLogOfReportDefinition =
            FakeHttpPayloadsAndLogsProvider::getFakeReportDownloadLogOfReportDefinition();
        $this->reportDownloadLogWithErrors =
            FakeHttpPayloadsAndLogsProvider::getFakeReportDownloadLogWithErrors();
        $this->nonRedactedReportDownloadLogWithErrors =
            FakeHttpPayloadsAndLogsProvider::getFakeNonRedactedReportDownloadLogWithErrors();
        $this->nonRedactedReportDownloadLogOfReportDefinition =
            FakeHttpPayloadsAndLogsProvider::getFakeNonRedactedReportDownloadLogOfReportDefinition();
    }

    /**
     * @covers \Google\AdsApi\Common\GuzzleLogMessageFormatter::formatSummary
     */
    public function testFormatSummary()
    {
        $guzzleLogMessageFormatter = new GuzzleLogMessageFormatter(
            [],
            ['clientCustomerId' => '111-222-3333'],
            false,
            'REDACTED REPORT DATA'
        );
        $headers = [
            'User-Agent' => 'Test App (AwApi-PHP, googleads-php-lib/25.0.0, '
                . 'PHP/5.5.9, GuzzleHttp/6.0.0, curl/7.52.0)',
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Host' => 'adwords.google.com',
            'Authorization' => 'Bearer 123.abc.456.xyz',
            'developerToken' => 'ABcdeFGH93KL-NOPQ_STUv',
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
            'POST',
            '/api/adwords/reportdownload/v201702',
            $headers,
            $body
        );
        $response = new Response(200, [], $this->reportDownloadResult);
        $this->assertSame(
            'clientCustomerId=111-222-3333 Test App (AwApi-PHP, googleads-php-lib/'
            . '25.0.0, PHP/5.5.9, GuzzleHttp/6.0.0, curl/7.52.0)'
            . ' "POST /api/adwords/reportdownload/v201702 HTTP/1.1"'
            . ' Status: 200 ',
            $guzzleLogMessageFormatter->formatSummary($request, $response)
        );
    }

    /**
     * @covers \Google\AdsApi\Common\GuzzleLogMessageFormatter::formatSummary
     */
    public function testFormatSummary_responseIsNull()
    {
        $guzzleLogMessageFormatter = new GuzzleLogMessageFormatter(
            [],
            ['clientCustomerId' => '111-222-3333'],
            false,
            'REDACTED REPORT DATA'
        );
        $headers = [
            'User-Agent' => 'Test App (AwApi-PHP, googleads-php-lib/25.0.0, '
                . 'PHP/5.5.9, GuzzleHttp/6.0.0, curl/7.52.0)',
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Host' => 'adwords.google.com',
            'Authorization' => 'Bearer 123.abc.456.xyz',
            'developerToken' => 'ABcdeFGH93KL-NOPQ_STUv',
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
            'POST',
            '/api/adwords/reportdownload/v201702',
            $headers,
            $body
        );
        $response = null;
        $this->assertSame(
            'clientCustomerId=111-222-3333 Test App (AwApi-PHP, googleads-php-lib/'
            . '25.0.0, PHP/5.5.9, GuzzleHttp/6.0.0, curl/7.52.0)'
            . ' "POST /api/adwords/reportdownload/v201702 HTTP/1.1"'
            . ' Status: NULL ',
            $guzzleLogMessageFormatter->formatSummary($request, $response)
        );
    }

    /**
     * @covers \Google\AdsApi\Common\GuzzleLogMessageFormatter::formatDetailed
     */
    public function testFormatDetailedWithAwql_redactReportData()
    {
        $expectedDetailedLog = $this->reportDownloadLogOfAwql;

        $headers = [
            'User-Agent' => 'Test App (AwApi-PHP, googleads-php-lib/25.0.0, '
                . 'PHP/5.5.9, GuzzleHttp/6.0.0, curl/7.52.0)',
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Host' => 'adwords.google.com',
            'Authorization' => 'Bearer 123.abc.456.xyz',
            'developerToken' => 'ABcdeFGH93KL-NOPQ_STUv',
            'clientCustomerId' => '111-222-3333',
            'skipReportHeader' => 'false',
            'skipColumnHeader' => 'false',
            'skipReportSummary' => 'false',
            'useRawEnumValues' => 'true',
            'includeZeroImpressions' => 'false'
        ];
        $body = http_build_query([
            '__rdquery' => $this->awql,
            '__fmt' => 'CSV'
        ]);
        $request = new Request(
            'POST',
            '/api/adwords/reportdownload/v201702',
            $headers,
            $body
        );
        $response = new Response(200, [], $this->reportDownloadResult);
        $guzzleLogMessageFormatter = new GuzzleLogMessageFormatter(
            [],
            [],
            false,
            'REDACTED REPORT DATA'
        );
        $actualDetailedLog = $this->removeCarriageReturns(
            $guzzleLogMessageFormatter->formatDetailed($request, $response)
        );

        $this->assertSame(trim($expectedDetailedLog), trim($actualDetailedLog));
    }

    /**
     * @covers \Google\AdsApi\Common\GuzzleLogMessageFormatter::formatDetailed
     */
    public function testFormatDetailedWithReportDefinition_redactReportData()
    {
        $expectedDetailedLog = $this->reportDownloadLogOfReportDefinition;

        $headers = [
            'User-Agent' => 'Test App (AwApi-PHP, googleads-php-lib/25.0.0, '
                . 'PHP/5.5.9, GuzzleHttp/6.0.0, curl/7.52.0)',
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Host' => 'adwords.google.com',
            'Authorization' => 'Bearer 123.abc.456.xyz',
            'developerToken' => 'ABcdeFGH93KL-NOPQ_STUv',
            'clientCustomerId' => '111-222-3333',
            'skipReportHeader' => 'false',
            'skipColumnHeader' => 'false',
            'skipReportSummary' => 'false',
            'useRawEnumValues' => 'true',
            'includeZeroImpressions' => 'false'
        ];
        $body = '__rdxml=' . $this->encodedReportDefinition;
        $request = new Request(
            'POST',
            '/api/adwords/reportdownload/v201702',
            $headers,
            $body
        );
        $response = new Response(200, [], $this->reportDownloadResult);
        $guzzleLogMessageFormatter = new GuzzleLogMessageFormatter(
            [],
            [],
            false,
            'REDACTED REPORT DATA'
        );
        $actualDetailedLog = $this->removeCarriageReturns(
            $guzzleLogMessageFormatter->formatDetailed($request, $response)
        );

        $this->assertSame(trim($expectedDetailedLog), trim($actualDetailedLog));
    }

    /**
     * @covers \Google\AdsApi\Common\GuzzleLogMessageFormatter::formatDetailed
     */
    public function testFormatDetailedWithReportDefinition_logReportData_noSeekStream()
    {
        $expectedDetailedLog =
            $this->nonRedactedReportDownloadLogOfReportDefinition;

        $headers = [
            'User-Agent' => 'Test App (AwApi-PHP, googleads-php-lib/25.0.0, '
                . 'PHP/5.5.9, GuzzleHttp/6.0.0, curl/7.52.0)',
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Host' => 'adwords.google.com',
            'Authorization' => 'Bearer 123.abc.456.xyz',
            'developerToken' => 'ABcdeFGH93KL-NOPQ_STUv',
            'clientCustomerId' => '111-222-3333',
            'skipReportHeader' => 'false',
            'skipColumnHeader' => 'false',
            'skipReportSummary' => 'false',
            'useRawEnumValues' => 'true',
            'includeZeroImpressions' => 'false'
        ];
        $body = '__rdxml=' . $this->encodedReportDefinition;
        $request = new Request(
            'POST',
            '/api/adwords/reportdownload/v201702',
            $headers,
            $body
        );
        $response = new Response(
            200,
            [],
            new NoSeekStream(
                \GuzzleHttp\Psr7\Utils::streamFor($this->reportDownloadResult)
            )
        );
        $guzzleLogMessageFormatter = new GuzzleLogMessageFormatter(
            [],
            [],
            true
        );

        // The message must be formatted correctly.
        $actualDetailedLog = $this->removeCarriageReturns(
            $guzzleLogMessageFormatter->formatDetailed($request, $response)
        );
        $this->assertSame(trim($expectedDetailedLog), trim($actualDetailedLog));

        // The response body must be re-readable and have the expected content.
        $this->assertSame(
            trim($this->reportDownloadResult),
            trim($response->getBody()->getContents())
        );
    }

    /**
     * @covers \Google\AdsApi\Common\GuzzleLogMessageFormatter::formatDetailed
     */
    public function testFormatDetailed_redactReportData_scrubHeaders()
    {
        $expectedDetailedLog = $this->scrubbedReportDownloadLog;

        $headers = [
            'User-Agent' => 'Test App (AwApi-PHP, googleads-php-lib/25.0.0, '
                . 'PHP/5.5.9, GuzzleHttp/6.0.0, curl/7.52.0)',
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Host' => 'adwords.google.com',
            'Authorization' => 'Bearer 123.abc.456.xyz',
            'developerToken' => 'ABcdeFGH93KL-NOPQ_STUv',
            'clientCustomerId' => '111-222-3333',
            'skipReportHeader' => 'false',
            'skipColumnHeader' => 'false',
            'skipReportSummary' => 'false',
            'useRawEnumValues' => 'true',
            'includeZeroImpressions' => 'false'
        ];
        $body = http_build_query([
            '__rdquery' => $this->awql,
            '__fmt' => 'CSV'
        ]);
        $request = new Request(
            'POST',
            '/api/adwords/reportdownload/v201702',
            $headers,
            $body
        );
        $response = new Response(200, [], $this->reportDownloadResult);
        $guzzleLogMessageFormatter = new GuzzleLogMessageFormatter(
            ['Authorization', 'developerToken'],
            [],
            false,
            'REDACTED REPORT DATA'
        );
        $actualDetailedLog = $this->removeCarriageReturns(
            $guzzleLogMessageFormatter->formatDetailed($request, $response)
        );

        $this->assertSame(trim($expectedDetailedLog), trim($actualDetailedLog));
    }

    /**
     * @covers \Google\AdsApi\Common\GuzzleLogMessageFormatter::formatDetailed
     */
    public function testFormatDetailed_logReportData_scrubHeaders()
    {
        $expectedDetailedLog = $this->nonRedactedScrubbedReportDownloadLog;

        $headers = [
            'User-Agent' => 'Test App (AwApi-PHP, googleads-php-lib/25.0.0, '
                . 'PHP/5.5.9, GuzzleHttp/6.0.0, curl/7.52.0)',
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Host' => 'adwords.google.com',
            'Authorization' => 'Bearer 123.abc.456.xyz',
            'developerToken' => 'ABcdeFGH93KL-NOPQ_STUv',
            'clientCustomerId' => '111-222-3333',
            'skipReportHeader' => 'false',
            'skipColumnHeader' => 'false',
            'skipReportSummary' => 'false',
            'useRawEnumValues' => 'true',
            'includeZeroImpressions' => 'false'
        ];
        $body = http_build_query([
            '__rdquery' => $this->awql,
            '__fmt' => 'CSV'
        ]);
        $request = new Request(
            'POST',
            '/api/adwords/reportdownload/v201702',
            $headers,
            $body
        );
        $response = new Response(200, [], $this->reportDownloadResult);
        $guzzleLogMessageFormatter = new GuzzleLogMessageFormatter(
            ['Authorization', 'developerToken'],
            [],
            true
        );

        // The message must be formatted correctly.
        $actualDetailedLog = $this->removeCarriageReturns(
            $guzzleLogMessageFormatter->formatDetailed($request, $response)
        );
        $this->assertSame(trim($expectedDetailedLog), trim($actualDetailedLog));

        // The response body must be re-readable and have the expected content.
        $this->assertSame(
            trim($this->reportDownloadResult),
            trim($response->getBody()->getContents())
        );
    }

    /**
     * @covers \Google\AdsApi\Common\GuzzleLogMessageFormatter::formatDetailed
     */
    public function testFormatDetailed_redactReportData_withErrors()
    {
        $expectedDetailedLog = $this->reportDownloadLogWithErrors;

        $headers = [
            'User-Agent' => 'Test App (AwApi-PHP, googleads-php-lib/25.0.0, '
                . 'PHP/5.5.9, GuzzleHttp/6.0.0, curl/7.52.0)',
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Host' => 'adwords.google.com',
            'Authorization' => 'Bearer 123.abc.456.xyz',
            'developerToken' => 'ABcdeFGH93KL-NOPQ_STUv',
            'clientCustomerId' => '111-222-3333',
            'skipReportHeader' => 'false',
            'skipColumnHeader' => 'false',
            'skipReportSummary' => 'false',
            'useRawEnumValues' => 'true',
            'includeZeroImpressions' => 'false'
        ];
        $body = http_build_query([
            '__rdquery' => $this->awql,
            '__fmt' => 'CSV'
        ]);
        $request = new Request(
            'POST',
            '/api/adwords/reportdownload/v201702',
            $headers,
            $body
        );
        $response = new Response(400, [], $this->reportDownloadResult);
        $error = new ClientException('Client error: 400', $request, $response);
        $guzzleLogMessageFormatter = new GuzzleLogMessageFormatter(
            ['Authorization', 'developerToken'],
            [],
            false,
            'REDACTED REPORT DATA'
        );
        $actualDetailedLog = $this->removeCarriageReturns(
            $guzzleLogMessageFormatter->formatDetailed($request, $response, $error)
        );

        $this->assertSame(trim($expectedDetailedLog), trim($actualDetailedLog));
    }

    /**
     * @covers \Google\AdsApi\Common\GuzzleLogMessageFormatter::formatDetailed
     */
    public function testFormatDetailed_logReportData_withErrors()
    {
        $expectedDetailedLog = $this->nonRedactedReportDownloadLogWithErrors;

        $headers = [
            'User-Agent' => 'Test App (AwApi-PHP, googleads-php-lib/25.0.0, '
                . 'PHP/5.5.9, GuzzleHttp/6.0.0, curl/7.52.0)',
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Host' => 'adwords.google.com',
            'Authorization' => 'Bearer 123.abc.456.xyz',
            'developerToken' => 'ABcdeFGH93KL-NOPQ_STUv',
            'clientCustomerId' => '111-222-3333',
            'skipReportHeader' => 'false',
            'skipColumnHeader' => 'false',
            'skipReportSummary' => 'false',
            'useRawEnumValues' => 'true',
            'includeZeroImpressions' => 'false'
        ];
        $body = http_build_query([
            '__rdquery' => $this->awql,
            '__fmt' => 'CSV'
        ]);
        $request = new Request(
            'POST',
            '/api/adwords/reportdownload/v201809',
            $headers,
            $body
        );
        $response = new Response(
            400,
            [],
            new NoSeekStream(
                \GuzzleHttp\Psr7\Utils::streamFor($this->reportDownloadError)
            )
        );
        $error = new ClientException('Client error: 400', $request, $response);
        $guzzleLogMessageFormatter = new GuzzleLogMessageFormatter(
            ['Authorization', 'developerToken'],
            [],
            true
        );

        // The message must be formatted correctly.
        $actualDetailedLog = $this->removeCarriageReturns(
            $guzzleLogMessageFormatter->formatDetailed(
                $request,
                $response,
                $error
            )
        );
        $this->assertSame(trim($expectedDetailedLog), trim($actualDetailedLog));

        // The response body must be re-readable and have the expected content.
        $this->assertSame(
            trim($this->reportDownloadError),
            trim($error->getResponse()->getBody()->getContents())
        );
    }

    private function removeCarriageReturns($string)
    {
        return preg_replace('/\r\n/', "\n", $string);
    }
}
