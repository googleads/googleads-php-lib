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
namespace Google\AdsApi\AdWords\Reporting\v201605;

use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\Reporting\ApiErrorFieldNameConverter;
use Google\AdsApi\AdWords\v201605\cm\ApiError;
use Google\AdsApi\AdWords\v201605\cm\ApiException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\MessageFormatter;
use GuzzleHttp\RequestOptions;
use Psr\Log\LoggerInterface;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Provides functionality to help with retrieving a report.
 */
class ReportDownloader {

  private static $REPORT_DOWNLOAD_URL_PATH =
      '/api/adwords/reportdownload/v201605';

  private $session;
  private $httpClient;
  private $requestOptionsFactory;
  private $apiErrorSerializer;

  /**
   * Creates a report downloader with the specified parameters.
   *
   * @param AdWordsSession $session the session used to connect to AdWords API
   * @param Client|null $httpClient optional, the Guzzle HTTP client that will
   *     handle HTTP calls
   * @param RequestOptionsFactory|null $requestOptionsFactory optional, the
   *     factory to create report requests
   */
  public function __construct(
      AdWordsSession $session,
      Client $httpClient = null,
      RequestOptionsFactory $requestOptionsFactory = null
  ) {
    $this->session = $session;
    $stack = HandlerStack::create();
    $stack->before('http_errors',
        self::middlewareLog($this->session->getLogger()));
    $this->httpClient = ($httpClient === null)
        ? new Client(['handler' => $stack]) : $httpClient;
    $this->requestOptionsFactory = ($requestOptionsFactory === null)
        ? new RequestOptionsFactory($session) : $requestOptionsFactory;
    $this->apiErrorSerializer = new Serializer(
        [new ObjectNormalizer(null, new ApiErrorFieldNameConverter()),
            new ArrayDenormalizer()],
        [new XmlEncoder()]
    );
  }

  /**
   * Downloads a new instance of an existing report definition. If the path
   * parameter is specified it will be downloaded to the file at that path,
   * otherwise it will be returned as a stream.
   *
   * @param ReportDefinition $reportDefinition the report definition to
   *     download
   * @param string|null $filePath an optional path of the file to download the
   *     report to
   * @return void|StreamInterface nothing if a path is specified, otherwise
   *     report contents as a stream
   * @throws ApiException if there are errors during downloading reports
   */
  public function downloadReport(ReportDefinition $reportDefinition,
      $filePath = null) {
    return $this->makeReportRequest(
        $this->requestOptionsFactory
            ->createRequestOptionsWithReportDefinition($reportDefinition),
        $filePath
    );
  }

  /**
   * Downloads a report with AWQL. If the path parameter is specified it will be
   * downloaded to the file at that path, otherwise it will be returned as a
   * stream.
   *
   * @param string $reportQuery the query to use for the report
   * @param string $reportFormat the report format to request
   * @param string|null $filePath an optional path of the file to download the
   *     report to
   * @return void|StreamInterface nothing if a path is specified, otherwise
   *     report contents as a stream
   * @throws ApiException if there are errors during downloading reports
   */
  public function downloadReportWithAwql($reportQuery, $reportFormat,
      $filePath = null) {
    return $this->makeReportRequest(
        $this->requestOptionsFactory
            ->createRequestOptionsWithAwqlQuery($reportQuery, $reportFormat),
        $filePath
    );
  }

  /**
   * Make an HTTP request to download a report with the specified request
   * options.
   *
   * @param array $requestOptions the options for making HTTP request via Guzzle
   * @param string|null $filePath optional, the path to download the report to
   * @return void|StreamInterface nothing if a path is specified, otherwise
   *     report contents as a stream
   * @throws ApiException if there are errors during downloading reports
   */
  private function makeReportRequest(array $requestOptions, $filePath = null) {
    $requestOptions[RequestOptions::STREAM] = true;
    try {
      $response = $this->httpClient->request(
          'POST',
          rtrim($this->session->getEndpoint(), '/')
              . self::$REPORT_DOWNLOAD_URL_PATH,
          $requestOptions
      );
    } catch (ClientException $e) {
      $decodedResponse = $this->apiErrorSerializer->decode(
          $e->getResponse()->getBody()->getContents(), 'xml');

      // If the decoded response is an associative array, this means there is
      // only one error and the members of the array are the fields of ApiError.
      $apiErrorList = $this->isAssociativeArray($decodedResponse['ApiError'])
          ? [$decodedResponse['ApiError']]
          : $decodedResponse['ApiError'];
      $reportDownloadErrors =
          $this->apiErrorSerializer->denormalize($apiErrorList,
              'Google\AdsApi\AdWords\Reporting\v201605\ReportDownloadError[]');
      $reportDownloadException = new ApiException(
          sprintf('Details: [%s]', implode(', ', $reportDownloadErrors)));
      $reportDownloadException->setErrors($reportDownloadErrors);
      throw $reportDownloadException;
    } catch (ServerException $e) {
      throw new ApiException(
          'Temporary problem with the server. Please retry the request'
              . ' after a few moments');
    }

    $result = $response->getBody();
    if ($filePath === null) {
      return $result;
    }
    $destStream = \GuzzleHttp\Psr7\stream_for(
        \GuzzleHttp\Psr7\try_fopen($filePath, 'w'));
    \GuzzleHttp\Psr7\copy_to_stream($result, $destStream);
    $destStream->close();
    $result->close();
  }

  private function isAssociativeArray($array) {
    // Check if there is at least one array key that is string.
    // If so, this means the array is associative array, not sequential one.
    return count(array_filter(array_keys($array), 'is_string')) > 0;
  }

  private static function middlewareLog(LoggerInterface $logger) {
    return function (callable $handler) use ($logger) {
      return function ($request, array $options) use ($handler, $logger) {
        return $handler($request, $options)->then(
            function ($response) use ($request, $logger) {
              // For logging purpose, gets a new request whose body (an XML
              // or AWQL report definition) is human-readable string and whose
              // access token in HTTP headers is scrubbed.
              $changes = [
                  'set_headers' => ['Authorization' => '*****'],
                  'body' => urldecode($request->getBody())
              ];
              $clonedRequest =
                  \GuzzleHttp\Psr7\modify_request($request, $changes);

              $logger->info(
                  (new MessageFormatter())->format($clonedRequest, $response));
              $logger->debug(
                  (new MessageFormatter(MessageFormatter::DEBUG))
                      ->format($clonedRequest, $response));
              return $response;
            },
            function ($reason) use ($request, $logger) {
              $response =
                  is_subclass_of($reason,
                      'GuzzleHttp\Exception\RequestException')
                  ? $reason->getResponse()
                  : null;

              // For logging purpose, gets a new request whose body (an XML
              // or AWQL report definition) is human-readable string and whose
              // access token in HTTP headers is scrubbed.
              $changes = [
                  'set_headers' => ['Authorization' => '*****'],
                  'body' => urldecode($request->getBody())
              ];
              $clonedRequest =
                  \GuzzleHttp\Psr7\modify_request($request, $changes);

              $logger->info(
                  (new MessageFormatter())->format($clonedRequest, $response));
              $logger->error(
                  (new MessageFormatter(MessageFormatter::DEBUG))
                      ->format($clonedRequest, $response, $reason));
              return \GuzzleHttp\Promise\rejection_for($reason);
            }
        );
      };
    };
  }
}
