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

namespace Google\AdsApi\AdManager\Util\v202302;

use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Testing\ReportDownloaderTestProvider;
use Google\AdsApi\AdManager\v202302\ExportFormat;
use Google\AdsApi\AdManager\v202302\ReportJobStatus;
use Google\AdsApi\AdManager\v202302\ReportService;
use Google\Auth\FetchAuthTokenInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use Monolog\Handler\NullHandler;
use Monolog\Logger;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use UnexpectedValueException;

/**
 * Unit tests for `ReportDownloader`.
 *
 * @see ReportDownloader
 * @small
 */
class ReportDownloaderTest extends TestCase
{

    /**
     * @var MockObject|ReportService a mock object for ReportService
     */
    private $reportServiceMock;

    /**
     * @see \PHPUnit\Framework\TestCase::setUp
     */
    protected function setUp(): void
    {
        /** @var MockObject|FetchAuthTokenInterface $fetchAuthTokenInterfaceStub */
        $fetchAuthTokenInterfaceStub =
            $this->getMockBuilder(FetchAuthTokenInterface::class)
                ->disableOriginalConstructor()->getMock();
        $fetchAuthTokenInterfaceStub->method('fetchAuthToken')->willReturn(
            ['access_token' => 'abc123']
        );
        $adManagerSession =
            (new AdManagerSessionBuilder())->withNetworkCode('12345678')
                ->withApplicationName('Google report runner')
                ->withOAuth2Credential($fetchAuthTokenInterfaceStub)
                ->withReportDownloaderLogger(
                    new Logger('', [new NullHandler()])
                )->build();

        $this->reportServiceMock = $this->getMockBuilder(ReportService::class)
            ->disableOriginalConstructor()->getMock();
        $this->reportServiceMock->method('getAdsSession')->willReturn(
            $adManagerSession
        );
    }

    /**
     * @covers \Google\AdsApi\AdManager\Util\v202302\ReportDownloader::waitForReportToFinish
     */
    public function testWaitForReportToFinishFinishesImmediatelySuccess()
    {
        $this->reportServiceMock->method('getReportJobStatus')->willReturn(
            ReportJobStatus::COMPLETED
        );
        $reportDownloader =
            new ReportDownloader($this->reportServiceMock, 123456);
        $this->assertTrue($reportDownloader->waitForReportToFinish());
    }

    /**
     * @covers \Google\AdsApi\AdManager\Util\v202302\ReportDownloader::waitForReportToFinish
     */
    public function testWaitForReportToFinishFinishesImmediatelyFailed()
    {
        $this->reportServiceMock->method('getReportJobStatus')->willReturn(
            ReportJobStatus::FAILED
        );
        $reportDownloader =
            new ReportDownloader($this->reportServiceMock, 123456);
        $this->assertFalse($reportDownloader->waitForReportToFinish());
    }

    /**
     * @covers \Google\AdsApi\AdManager\Util\v202302\ReportDownloader::waitForReportToFinish
     */
    public function testWaitForReportToFinishPollsOnceSuccess()
    {
        $this->reportServiceMock->method('getReportJobStatus')->will(
            $this->onConsecutiveCalls(
                ReportJobStatus::IN_PROGRESS,
                ReportJobStatus::COMPLETED
            )
        );
        $reportDownloader =
            new ReportDownloader($this->reportServiceMock, 123456, 1);
        $this->assertTrue($reportDownloader->waitForReportToFinish());
    }

    /**
     * @covers \Google\AdsApi\AdManager\Util\v202302\ReportDownloader::downloadReport
     */
    public function testDownloadReportAsStream()
    {
        $this->reportServiceMock->method('getReportJobStatus')->willReturn(
            ReportJobStatus::COMPLETED
        );
        $this->reportServiceMock->method('getReportDownloadURL')->willReturn(
            'https://storage.googleapis.com/adManager-report-export/abc123xyz'
        );

        // Setup the Guzzle HTTP client to mock a request to the report URL to
        // return the file contents of a test report.
        $fakeReport = ReportDownloaderTestProvider::getFakeReport();
        $mockHandler = new MockHandler([new Response(200, [], $fakeReport)]);
        $handler = HandlerStack::create($mockHandler);
        $httpClient = new Client(['handler' => $handler]);

        $reportDownloader = new ReportDownloader(
            $this->reportServiceMock,
            123456,
            1,
            $httpClient
        );
        $responseStream =
            $reportDownloader->downloadReport(ExportFormat::CSV_DUMP);
        $response = Utils::copyToString($responseStream);
        $responseStream->close();

        $this->assertSame($fakeReport, $response);
    }

    /**
     * @covers \Google\AdsApi\AdManager\Util\v202302\ReportDownloader::downloadReport
     */
    public function testDownloadReportBeforeCompleteThrowsEx()
    {
        $this->expectException(UnexpectedValueException::class);
        $this->reportServiceMock->method('getReportJobStatus')->willReturn(
            ReportJobStatus::IN_PROGRESS
        );
        $reportDownloader =
            new ReportDownloader($this->reportServiceMock, 123456);
        $reportDownloader->downloadReport(ExportFormat::CSV_DUMP);
    }
}
