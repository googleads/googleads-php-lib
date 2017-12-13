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
namespace Google\AdsApi\AdWords\Reporting;

use Google\AdsApi\AdWords\Testing\Reporting\ReportDownloadResultTestProvider;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use RuntimeException;

/**
 * Unit tests for `ReportDownloadResultDelegate`.
 *
 * @see ReportDownloadResultDelegate
 * @small
 */
class ReportDownloadResultDelegateTest extends TestCase {

  private $fakeReport;
  private $reportDownloadResultDelegate;

  /**
   * @see PHPUnit\Framework\TestCase::setUp
   */
  protected function setUp() {
    $this->fakeReport =
        ReportDownloadResultTestProvider::getFakeCampaignReport();
    $this->reportDownloadResultDelegate = new ReportDownloadResultDelegate(
        new Response(200, [], $this->fakeReport));
  }

  /**
   * @covers Google\AdsApi\AdWords\Reporting\ReportDownloadResultDelegate::getStream
   */
  public function testGetStream() {
    $responseStream = $this->reportDownloadResultDelegate->getStream();
    $this->assertFalse($responseStream->eof());
    $this->assertTrue($responseStream->isReadable());

    $response = \GuzzleHttp\Psr7\copy_to_string($responseStream);
    $responseStream->close();
    $this->assertSame($this->fakeReport, $response);
  }

  /**
   * @covers Google\AdsApi\AdWords\Reporting\ReportDownloadResultDelegate::getAsString
   */
  public function testGetAsString() {
    $response = $this->reportDownloadResultDelegate->getAsString();
    $this->assertSame($this->fakeReport, $response);
  }

  /**
   * @covers Google\AdsApi\AdWords\Reporting\ReportDownloadResultDelegate::getAsString
   * @expectedException RuntimeException
   */
  public function testGetAsStringTwiceThrowsException() {
    $this->reportDownloadResultDelegate->getAsString();
    // Consuming the result stream twice should throw RuntimeException.
    $this->reportDownloadResultDelegate->getAsString();
  }

  /**
   * @covers Google\AdsApi\AdWords\Reporting\ReportDownloadResultDelegate::saveToFile
   */
  public function testSaveToFile() {
    $filePath = sprintf(
        '%s.csv',
        tempnam(sys_get_temp_dir(), 'criteria-report-')
    );
    $this->reportDownloadResultDelegate->saveToFile($filePath);
    $this->assertStringEqualsFile($filePath, $this->fakeReport);
  }

  /**
   * @covers Google\AdsApi\AdWords\Reporting\ReportDownloadResultDelegate::saveToFile
   * @expectedException RuntimeException
   */
  public function testSaveToFileTwiceThrowsException() {
    $filePath = sprintf(
        '%s.csv',
        tempnam(sys_get_temp_dir(), 'criteria-report-')
    );
    $this->reportDownloadResultDelegate->saveToFile($filePath);
    // Consuming the result stream twice should throw RuntimeException.
    $this->reportDownloadResultDelegate->saveToFile($filePath);
  }

  /**
   * @covers Google\AdsApi\AdWords\Reporting\ReportDownloadResultDelegate::saveToFile
   * @covers Google\AdsApi\AdWords\Reporting\ReportDownloadResultDelegate::getAsString
   * @expectedException RuntimeException
   */
  public function testConsumeStreamTwiceByAnyMeansThrowsException() {
    $filePath = sprintf(
        '%s.csv',
        tempnam(sys_get_temp_dir(), 'criteria-report-')
    );
    $this->reportDownloadResultDelegate->saveToFile($filePath);
    // Consuming the result stream twice should throw RuntimeException.
    $this->reportDownloadResultDelegate->getAsString();
  }
}
