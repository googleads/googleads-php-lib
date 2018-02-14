<?php
/**
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
 */

namespace Google\AdsApi\AdWords\Reporting\v201710;

use Google\AdsApi\AdWords\AdWordsGuzzleLogMessageFormatterProvider;
use Google\AdsApi\AdWords\AdWordsNormalizer;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\Reporting\ApiErrorFieldNameConverter;
use Google\AdsApi\AdWords\Reporting\ReportDownloadResult;
use Google\AdsApi\AdWords\ReportSettings;
use Google\AdsApi\AdWords\v201710\cm\ApiException;
use Google\AdsApi\Common\AdsGuzzleHttpClientFactory;
use Google\AdsApi\Common\GuzzleHttpClientFactory;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\RequestOptions;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Provides functionality to help with retrieving a report.
 */
final class ReportDownloader
{

    private static $REPORT_DOWNLOAD_URL_PATH =
        '/api/adwords/reportdownload/v201710';
    private static $REDACTED_DATA_MESSAGE = 'REDACTED REPORT DATA';

    private $session;
    private $httpClient;
    private $requestOptionsFactory;
    private $apiErrorSerializer;

    /**
     * Creates a report downloader with the specified parameters.
     *
     * @param AdWordsSession $session the session used to connect to AdWords
     *     API
     * @param RequestOptionsFactory|null $requestOptionsFactory optional, the
     *     factory to create report requests
     * @param Client|null $httpClient optional, the Guzzle HTTP client whose
     *     handler stacks this library's logging middleware will be pushed to
     * @param GuzzleHttpClientFactory|null $httpClientFactory optional, the
     *     Guzzle HTTP client factory that will generate a client handling HTTP
     *     calls
     */
    public function __construct(
        AdWordsSession $session,
        RequestOptionsFactory $requestOptionsFactory = null,
        Client $httpClient = null,
        GuzzleHttpClientFactory $httpClientFactory = null
    ) {
        $this->session = $session;

        if ($httpClientFactory === null) {
            $logMessageFormatterProvider =
                new AdWordsGuzzleLogMessageFormatterProvider(
                    $session,
                    false,
                    self::$REDACTED_DATA_MESSAGE
                );
            $httpClientFactory = new AdsGuzzleHttpClientFactory(
                $this->session->getReportDownloaderLogger(),
                $logMessageFormatterProvider->getGuzzleLogMessageFormatter(),
                $httpClient
            );
        }
        $this->httpClient = $httpClientFactory->generateHttpClient();

        $this->requestOptionsFactory = ($requestOptionsFactory === null)
            ? new RequestOptionsFactory($session) : $requestOptionsFactory;
        $this->apiErrorSerializer = new Serializer(
            [
                new GetSetMethodNormalizer(
                    null,
                    new ApiErrorFieldNameConverter()
                ),
                new ArrayDenormalizer()
            ],
            [new XmlEncoder()]
        );
    }

    /**
     * Downloads a report using report definition.
     *
     * @param ReportDefinition $reportDefinition the report definition to
     *     download
     * @param null|ReportSettings $reportSettingsOverride the report settings
     *     used to override the report settings of the AdWords session for this
     *     request
     * @return ReportDownloadResult the report download result
     * @throws ApiException if there are errors during downloading reports
     */
    public function downloadReport(
        ReportDefinition $reportDefinition,
        ReportSettings $reportSettingsOverride = null
    ) {
        return $this->makeReportRequest(
            $this->requestOptionsFactory
                ->createRequestOptionsWithReportDefinition(
                    $reportDefinition,
                    $reportSettingsOverride
                )
        );
    }

    /**
     * Downloads a report using AWQL.
     *
     * @param string $reportQuery the query to use for the report
     * @param string $reportFormat the report format to request
     * @param null|ReportSettings $reportSettingsOverride the report settings
     *     used to override the report settings of the AdWords session for this
     *     request
     * @return ReportDownloadResult the report download result
     * @throws ApiException if there are errors during downloading reports
     */
    public function downloadReportWithAwql(
        $reportQuery,
        $reportFormat,
        ReportSettings $reportSettingsOverride = null
    ) {
        return $this->makeReportRequest(
            $this->requestOptionsFactory
                ->createRequestOptionsWithAwqlQuery(
                    $reportQuery,
                    $reportFormat,
                    $reportSettingsOverride
                )
        );
    }

    /**
     * Make an HTTP request to download a report with the specified request
     * options.
     *
     * @param array $requestOptions the options for making HTTP request via
     *     Guzzle
     * @return ReportDownloadResult the report download result
     * @throws ApiException if there are errors during downloading reports
     */
    private function makeReportRequest(array $requestOptions)
    {
        $requestOptions[RequestOptions::STREAM] = true;
        $proxy = $this->session->getConnectionSettings()->getProxyUrl();
        if (!empty($proxy)) {
            $requestOptions[RequestOptions::PROXY] = ['https' => $proxy];
        }
        if ($this->session->getConnectionSettings()->isReportingGzipEnabled()
            === true) {
            $requestOptions[RequestOptions::DECODE_CONTENT] = 'gzip';
        }

        try {
            $response = $this->httpClient->request(
                'POST',
                rtrim($this->session->getEndpoint(), '/')
                . self::$REPORT_DOWNLOAD_URL_PATH,
                $requestOptions
            );
        } catch (ClientException $e) {
            $decodedResponse = $this->apiErrorSerializer->decode(
                $e->getResponse()->getBody()->getContents(),
                'xml'
            );

            // If the decoded response is an associative array, this means there is
            // only one error and the members of the array are the fields of ApiError.
            $apiErrorList =
                AdWordsNormalizer::isOneOrMany($decodedResponse['ApiError'])
                    ? [$decodedResponse['ApiError']]
                    : $decodedResponse['ApiError'];
            $reportDownloadErrors =
                $this->apiErrorSerializer->denormalize(
                    $apiErrorList,
                    'Google\AdsApi\AdWords\Reporting\v201710\ReportDownloadError[]'
                );
            $reportDownloadException = new ApiException(
                sprintf('Details: [%s]', implode(', ', $reportDownloadErrors))
            );
            $reportDownloadException->setErrors($reportDownloadErrors);
            throw $reportDownloadException;
        } catch (ServerException $e) {
            throw new ApiException(
                'Temporary problem with the server. Please retry the request'
                . ' after a few moments'
            );
        }

        return new ReportDownloadResult($response);
    }
}
