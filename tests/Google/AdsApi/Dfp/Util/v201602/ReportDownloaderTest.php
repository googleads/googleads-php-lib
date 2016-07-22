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
namespace Google\AdsApi\Dfp\Util\v201602;

use Google\AdsApi\Dfp\Util\v201602\ReportDownloader;
use Google\AdsApi\Dfp\v201602\ExportFormat;
use Google\AdsApi\Dfp\v201602\ReportJobStatus;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit_Framework_TestCase;


/**
 * Unit tests for ReportDownloader.
 * @see ReportDownloader
 * @group small
 */
class ReportDownloaderTest extends PHPUnit_Framework_TestCase {

  private $reportServiceMock;

  /**
   * @see PHPUnit_Framework_TestCase::setUp
   */
  protected function setUp() {
    $this->reportServiceMock =
        $this->getMockBuilder('Google\AdsApi\Dfp\v201602\ReportService')
        ->disableOriginalConstructor()
        ->getMock();
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201602\ReportDownloader::waitForReportToFinish
   */
  public function testWaitForReportToFinishFinishesImmediatelySuccess() {
    $this->reportServiceMock->expects($this->once())
        ->method('getReportJobStatus')
        ->will($this->returnValue(ReportJobStatus::COMPLETED));
    $reportDownloader = new ReportDownloader($this->reportServiceMock, 123456);
    $this->assertTrue($reportDownloader->waitForReportToFinish());
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201602\ReportDownloader::waitForReportToFinish
   */
  public function testWaitForReportToFinishFinishesImmediatelyFailed() {
    $this->reportServiceMock->expects($this->once())
        ->method('getReportJobStatus')
        ->will($this->returnValue(ReportJobStatus::FAILED));
    $reportDownloader = new ReportDownloader($this->reportServiceMock, 123456);
    $this->assertFalse($reportDownloader->waitForReportToFinish());
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201602\ReportDownloader::waitForReportToFinish
   */
  public function testWaitForReportToFinishPollsOnceSuccess() {
    $this->reportServiceMock->expects($this->exactly(2))
        ->method('getReportJobStatus')
        ->will($this->onConsecutiveCalls(
            ReportJobStatus::IN_PROGRESS,
            ReportJobStatus::COMPLETED
        ));
    $reportDownloader =
        new ReportDownloader($this->reportServiceMock, 123456, null, 1);
    $this->assertTrue($reportDownloader->waitForReportToFinish());
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201602\ReportDownloader::downloadReport
   */
  public function testDownloadReportAsStream() {
    $this->reportServiceMock->expects($this->once())
        ->method('getReportJobStatus')
        ->will($this->returnValue(ReportJobStatus::COMPLETED));
    $this->reportServiceMock->expects($this->once())
        ->method('getReportDownloadURL')
        ->will($this->returnValue(
            'https://storage.googleapis.com/dfp-report-export/abc123xyz'));

    // Setup the Guzzle HTTP client to mock a request to the report URL to
    // return the file contents of a test report.
    $fakeReport = file_get_contents(__DIR__ . '/../../../../../../src/Google/'
        . 'AdsApi/Dfp/Testing/inventory-report-A1bc23.csv.gz');
    $mockHandler = new MockHandler([new Response(200, [], $fakeReport)]);
    $handler = HandlerStack::create($mockHandler);
    $httpClient = new Client(['handler' => $handler]);

    $reportDownloader = new ReportDownloader(
        $this->reportServiceMock, 123456, null, 1, $httpClient);
    $responseStream = $reportDownloader->downloadReport(ExportFormat::CSV_DUMP);
    $response = \GuzzleHttp\Psr7\copy_to_string($responseStream);
    $responseStream->close();

    $this->assertSame($fakeReport, $response);
  }

  /**
   * @covers Google\AdsApi\Dfp\Util\v201602\ReportDownloader::downloadReport
   * @expectedException UnexpectedValueException
   */
  public function testDownloadReportBeforeCompleteThrowsEx() {
    $this->reportServiceMock->expects($this->once())
        ->method('getReportJobStatus')
        ->will($this->returnValue(ReportJobStatus::IN_PROGRESS));
    $reportDownloader =
        new ReportDownloader($this->reportServiceMock, 123456);
    $reportDownloader->downloadReport(ExportFormat::CSV_DUMP);
  }
}

