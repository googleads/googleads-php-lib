<?php
/**
 * Retrieves reports using a {@link ReportService}.
 *
 * PHP version 5
 *
 * Copyright 2016, Google Inc. All Rights Reserved.
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
 *
 * @package    GoogleApiAdsDfp
 * @subpackage Util
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
require_once 'Google/Api/Ads/Common/Util/CurlUtils.php';

/**
 * Retrieves reports using a {@link ReportService}.
 * @package GoogleApiAdsDfp
 * @subpackage Util
 */
class ReportDownloader {

  /** The time to sleep in seconds before each request to the service. */
  const SLEEP_DURATION = 30;

  private $reportService;
  private $reportJobId;

  /**
   * Constructs a {@code ReportDownloader} object for a {@link ReportService}
   * and a report job id that the the class works on.
   *
   * @param ReportService $reportService an instance of the report service
   * @param float $reportJobId the report job ID
   */
  public function __construct($reportService, $reportJobId) {
    $this->reportService = $reportService;
    $this->reportJobId = $reportJobId;
  }

  /**
   * Blocks and waits for a report to be ready. When a report's job status is
   * received that is not 'PENDING' or 'IN_PROGRESS', the report is considered
   * finished, and the method is returned with a {@code true} if the report was
   * successful, or an {@code false} otherwise.
   *
   * @return bool {@code true} if the report was successful, {@code false}
   *     otherwise
   */
  public function waitForReportReady() {
    $reportJobStatus =
        $this->reportService->getReportJobStatus($this->reportJobId);
    while ($reportJobStatus === 'IN_PROGRESS') {
      sleep(self::SLEEP_DURATION);
      $reportJobStatus =
          $this->reportService->getReportJobStatus($this->reportJobId);
    }

    return $reportJobStatus === 'COMPLETED';
  }

  /**
   * Downloads a Gzip report from an URL. to file located at {@code fileName}.
   * If the {@code filePath} is specified the report will be downloaded to the
   * file at that path, otherwise it will be downloaded to memory and
   * returned as a string.
   *
   * @param string $exportFormat the export format of the report
   * @param string $filePath an optional file path to download the report to
   * @return mixed report contents as a string if {@code filePath} isn't
   *     specified, otherwise the size of the downloaded report in bytes
   * @throws InvalidArgumentException if the report download URL is invalid
   */
  public function downloadReport($exportFormat, $filePath = null) {
    $downloadUrl = $this->getDownloadUrl($exportFormat);
    $curlUtils = new CurlUtils();
    $ch = $curlUtils->CreateSession($downloadUrl);

    if (isset($filePath)) {
      $file = fopen($filePath, 'w');
      $curlUtils->SetOpt($ch, CURLOPT_FILE, $file);
    } else {
      $curlUtils->SetOpt($ch, CURLOPT_RETURNTRANSFER, 1);
    }

    $result = $curlUtils->Exec($ch);
    $httpCode = $curlUtils->GetInfo($ch, CURLINFO_HTTP_CODE);
    $error = $curlUtils->Error($ch);
    $downloadSize = $curlUtils->GetInfo($ch, CURLINFO_SIZE_DOWNLOAD);

    $curlUtils->Close($ch);
    if (isset($file)) {
      fclose($file);
    }

    if ($httpCode != 200) {
      $message = sprintf('Invalid report download URL: %s', $downloadUrl);
      throw new InvalidArgumentException($message, $httpCode);
    }

    if (isset($filePath)) {
      return $downloadSize;
    } else {
      return $result;
    }
  }

  /**
   * Gets the download URL for a GZip or plain-text format report.
   *
   * @param string $exportFormat the export format of the report
   * @return string the URL for the report download
   * @throws ValidationException if the report is not completed
   */
  private function getDownloadUrl($exportFormat) {
    $reportJobStatus =
        $this->reportService->getReportJobStatus($this->reportJobId);
    if ($reportJobStatus !== 'COMPLETED') {
      throw new ValidationException('reportJobStatus', $reportJobStatus,
          sprintf('Report %d must be completed before downloading.',
              $this->reportJobId));
    }
    return $this->reportService->getReportDownloadURL($this->reportJobId,
        $exportFormat);
  }
}

