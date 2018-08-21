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

namespace Google\AdsApi\AdManager\Util\v201802;

use Google\AdsApi\Common\AdsGuzzleHttpClientFactory;
use Google\AdsApi\Common\GuzzleHttpClientFactory;
use Google\AdsApi\AdManager\AdManagerGuzzleLogMessageFormatterProvider;
use Google\AdsApi\AdManager\AdManagerHeaderHandler;
use Google\AdsApi\AdManager\v201802\ReportJobStatus;
use Google\AdsApi\AdManager\v201802\ReportService;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\StreamInterface;
use UnexpectedValueException;

/**
 * Provides functionality to help with retrieving a report. Encapsulates common
 * tasks, such as polling for a report's status until it is ready to be
 * downloaded and downloading the report.
 */
class ReportDownloader
{

    /**
     * @var int the default time to sleep, in seconds, when polling for a
     *     report's status
     */
    const DEFAULT_POLL_SECONDS = 30;

    private static $REDACTED_DATA_MESSAGE = 'REDACTED REPORT DATA';

    private $logger;
    private $reportService;
    private $reportJobId;
    private $pollTimeSeconds;
    private $httpClient;

    /**
     * Creates a downloader for the specified report job ID and requires an
     * instance of a report service for making API calls on the report.
     *
     * @param ReportService $reportService
     * @param int $reportJobId
     * @param int|null $pollTimeSeconds optional, specify the time to sleep, in
     *     seconds, when polling for a report's status
     * @param Client|null $httpClient optional, the Guzzle HTTP client whose
     *     handler stacks this library's logging middleware will be pushed to
     * @param GuzzleHttpClientFactory|null $httpClientFactory optional,
     *     the Guzzle HTTP client factory that will generate a client handling
     *     HTTP calls
     */
    public function __construct(
        ReportService $reportService,
        $reportJobId,
        $pollTimeSeconds = null,
        Client $httpClient = null,
        GuzzleHttpClientFactory $httpClientFactory = null
    ) {
        $this->logger = $reportService->getAdsSession()
            ->getReportDownloaderLogger();
        $this->reportService = $reportService;
        $this->reportJobId = $reportJobId;
        $this->pollTimeSeconds = $pollTimeSeconds === null
            ? self::DEFAULT_POLL_SECONDS
            : $pollTimeSeconds;

        if ($httpClientFactory === null) {
            $logMessageFormatterProvider =
                new AdManagerGuzzleLogMessageFormatterProvider(
                    $reportService->getAdsSession(),
                    false,
                    self::$REDACTED_DATA_MESSAGE
                );
            $httpClientFactory = new AdsGuzzleHttpClientFactory(
                $this->logger,
                $logMessageFormatterProvider->getGuzzleLogMessageFormatter(),
                $httpClient
            );
        }
        $this->httpClient = $httpClientFactory->generateHttpClient();
    }

    /**
     * Blocks and waits for the report to finish running by polling for the
     * report's status and sleeping in between polls.
     *
     * @return bool whether or not the report finished successfully
     */
    public function waitForReportToFinish()
    {
        $reportJobStatus = $this->reportService
            ->getReportJobStatus($this->reportJobId);
        while ($reportJobStatus === ReportJobStatus::IN_PROGRESS) {
            $this->logger->info(
                sprintf(
                    'Report job ID %d has status %s. Sleeping for %d seconds '
                    . 'before polling again for report status.',
                    $this->reportJobId,
                    $reportJobStatus,
                    $this->pollTimeSeconds
                )
            );
            sleep($this->pollTimeSeconds);
            $reportJobStatus = $this->reportService
                ->getReportJobStatus($this->reportJobId);
        }

        return $reportJobStatus === ReportJobStatus::COMPLETED;
    }

    /**
     * Downloads the report with the specified export format.
     *
     * @param string $exportFormat the export format of the report
     * @param string $filePath an optional file path to download the report to
     * @return void|StreamInterface nothing if a file path is specified,
     *     otherwise report contents as a stream
     * @throws UnexpectedValueException if the report is still in progress or
     *     has failed
     */
    public function downloadReport($exportFormat, $filePath = null)
    {
        $downloadUrl = $this->getDownloadUrl($exportFormat);

        $requestOptions = [];
        $requestOptions[RequestOptions::HEADERS] = [
            'User-Agent' => $this->getFormattedUserAgent()
        ];
        $proxy = $this->reportService->getAdsSession()->getConnectionSettings()
            ->getProxyUrl();
        if (!empty($proxy)) {
            $requestOptions[RequestOptions::PROXY] = ['https' => $proxy];
        }
        if ($filePath !== null) {
            $requestOptions[RequestOptions::SINK] = $filePath;
            $this->httpClient->request('GET', $downloadUrl, $requestOptions);
        } else {
            $requestOptions[RequestOptions::STREAM] = true;
            $response = $this->httpClient->request(
                'GET',
                $downloadUrl,
                $requestOptions
            );

            return $response->getBody();
        }
    }

    /**
     * Gets the download URL for the report.
     *
     * @param string $exportFormat the export format of the report
     * @return string the download URL for the report
     * @throws UnexpectedValueException if the report is still in progress or
     *     has failed
     */
    private function getDownloadUrl($exportFormat)
    {
        $reportJobStatus = $this->reportService
            ->getReportJobStatus($this->reportJobId);
        if ($reportJobStatus === ReportJobStatus::IN_PROGRESS) {
            throw new UnexpectedValueException(
                sprintf(
                    'Report %d must be completed before downloading. '
                    . 'Report is still %s.',
                    $this->reportJobId,
                    ReportJobStatus::IN_PROGRESS
                )
            );
        } elseif ($reportJobStatus === ReportJobStatus::FAILED) {
            throw new UnexpectedValueException(
                sprintf(
                    'Cannot download report %d because it has a status of %s.',
                    $this->reportJobId,
                    ReportJobStatus::FAILED
                )
            );
        }

        return $this->reportService->getReportDownloadURL(
            $this->reportJobId,
            $exportFormat
        );
    }

    private function getFormattedUserAgent()
    {
        $session = $this->reportService->getAdsSession();

        return $session->getAdsHeaderFormatter()
            ->formatApplicationNameForGuzzleHeader(
                $session->getApplicationName(),
                AdManagerHeaderHandler::PRODUCT_NAME_FOR_SOAP_HEADER,
                false
            );
    }
}
