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
namespace Google\AdsApi\AdWords\BatchJobs\v201607;

use Google\AdsApi\AdWords\AdWordsNormalizer;
use Google\AdsApi\AdWords\BatchJobs\BatchJobUploadStatus;
use Google\AdsApi\AdWords\BatchJobs\DotRemoverNameConverter;
use Google\AdsApi\AdWords\v201607\cm\ApiException;
use Google\AdsApi\AdWords\v201607\cm\MutateResult;
use Google\AdsApi\AdWords\v201607\cm\Operation;
use Google\AdsApi\Common\Util\MapUtils;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Provides methods for uploading operations and downloading results using a
 * batch job upload URL generated from creating a new batch job using the
 * `BatchJobService`.
 *
 * @see BatchJobService
 * @see https://developers.google.com/adwords/api/docs/guides/batch-jobs
 */
final class BatchJobs {

  /**
   * For incremental uploads, each request's contents must have a length in
   * bytes divisible by 256K, per Google Cloud Storage's requirement:
   * https://cloud.google.com/storage/docs/xml-api/resumable-upload#step_3wzxhzdk34upload_the_file_blocks.
   */
  private static $REQUIRED_CONTENT_BYTES_INCREMENT = 262144;
  private static $MUTATE_RESULT_CLASS_NAME =
      'Google\AdsApi\AdWords\v201607\cm\MutateResult';

  private $httpClient;
  private $batchJobSerializer;
  private $mutateResultClassName;

  /**
   * Creates a `BatchJobs` object with the specified parameters.
   *
   * @param Client|null $httpClient optional, the Guzzle HTTP client that will
   *     handle HTTP calls
   * @param string|null $mutateResultClassName the root class name for
   *     denormalization
   */
  public function __construct(Client $httpClient = null,
      $mutateResultClassName = null) {
    $this->httpClient = ($httpClient === null) ? new Client() : $httpClient;
    $this->mutateResultClassName = ($mutateResultClassName === null)
        ? self::$MUTATE_RESULT_CLASS_NAME
        : $mutateResultClassName;

    $adWordsNormalizer =
        new AdWordsNormalizer(null, new DotRemoverNameConverter());
    // Set callbacks for the normalizer to specially handle serialization and
    // deserialization of boolean variables.
    $adWordsNormalizer->setCallbacks([
        'normalize' => function($value, $type) {
          if ($type === 'bool' || $type === 'boolean') {
            return ($value) ? 'true' : 'false';
          } else {
            return $value;
          }
        },
        'denormalize' => function($value, $type) {
          if ($type === 'int' || $type === 'integer') {
            return intval($value);
          } else if ($type === 'float' || $type === 'double') {
            return floatval($value);
          } else if ($type === 'bool' || $type === 'boolean') {
            return ($value === 'true') ? true : false;
          } else {
            return $value;
          }
        }
    ]);
    $this->batchJobSerializer = new Serializer(
        [$adWordsNormalizer, new ArrayDenormalizer()],
        [new XmlEncoder('ns1:mutate')]
    );
  }

  /**
   * Uploads batch job operations to the specified upload URL.
   *
   * @param array $operations operations to be uploaded via the upload URL
   *     $uploadUrl
   * @param string $uploadUrl the upload URL for uploading operations
   * @return BatchJobUploadStatus the updated batch job upload status
   * @throws ApiException if the upload process failed
   */
  public function uploadBatchJobOperations(array $operations, $uploadUrl) {
    // Starting with v201601, all uploads must go through the incremental
    // upload workflow.
    return $this->closeIncrementalUpload(
        $this->uploadIncrementalBatchJobOperations(
            $operations,
            new BatchJobUploadStatus($uploadUrl)
        )
    );
  }

  /**
   * Uploads batch job operations incrementally to the specified upload URL.
   *
   * @param Operation[] $operations operations to be uploaded via the upload URL
   * @param BatchJobUploadStatus $batchJobUploadStatus the batch job upload
   *     status
   * @return BatchJobUploadStatus the updated batch job upload status
   * @throws ApiException if the upload process failed
   */
  public function uploadIncrementalBatchJobOperations(array $operations,
      BatchJobUploadStatus $batchJobUploadStatus) {
    $serializedContent = $this->batchJobSerializer->serialize([
        'operations' => $operations,
        '@xmlns:ns1' =>
            'https://adwords.google.com/api/adwords/cm/v201607',
        '@xmlns:xsi' => 'http://www.w3.org/2001/XMLSchema-instance'
    ], 'xml');

    // Remove the XML opening tag in case this is not the first request.
    if ($batchJobUploadStatus->getTotalContentBytes() > 0) {
      $serializedContent =
          preg_replace('/^.*?<operations/s', '<operations', $serializedContent);
    }
    // Always remove the XML closing tag. It will be added when
    // closeIncrementalUpload is called.
    $serializedContent =
        preg_replace('/<\/ns1:mutate>\s*$/s', '', $serializedContent);
    $serializedContent = $this->padContent($serializedContent);

    $contentLength = mb_strlen($serializedContent, '8bit');
    $lowerBound = $batchJobUploadStatus->getTotalContentBytes();
    $upperBound =
        $batchJobUploadStatus->getTotalContentBytes() + $contentLength - 1;
    $contentRange = sprintf('bytes %d-%d/*', $lowerBound, $upperBound);
    try {
      $response = $this->httpClient->request(
          'PUT',
          $batchJobUploadStatus->getResumableUploadUrl(),
          [
              RequestOptions::BODY => $serializedContent,
              RequestOptions::HEADERS => [
                  'Content-Length' => $contentLength,
                  'Content-Range' => $contentRange,
                  'Content-Type' => 'application/xml'
              ]
          ]
      );
    } catch (ServerException $e) {
      throw new ApiException(sprintf(
          'Failed response status from batch upload URL, error message: %s,'
              . ' HTTP code %d.',
          $e->getResponse()->getReasonPhrase(),
          $e->getResponse()->getStatusCode()
      ));
    }

    return new BatchJobUploadStatus(
        $batchJobUploadStatus->getResumableUploadUrl(),
        $batchJobUploadStatus->getTotalContentBytes() + $contentLength
    );
  }

  /**
   * Close incremental upload by sending the closing tag of ns1:mutate.
   *
   * @param BatchJobUploadStatus $batchJobUploadStatus the batch job upload
   *     status
   * @return BatchJobUploadStatus the updated batch job upload status
   */
  public function closeIncrementalUpload(
      BatchJobUploadStatus $batchJobUploadStatus) {
    $content = '</ns1:mutate>';
    $contentLength = mb_strlen($content, '8bit');
    // On the last request, specify the total number of bytes.
    // e.g., bytes 500-999/1000
    $lowerBound = $batchJobUploadStatus->getTotalContentBytes();
    $upperBound =
        $batchJobUploadStatus->getTotalContentBytes() + $contentLength - 1;
    $totalBytes = strval($upperBound + 1);
    $contentRange =
        sprintf('bytes %d-%d/%s', $lowerBound, $upperBound, $totalBytes);

    try {
      $response = $this->httpClient->request(
          'PUT',
          $batchJobUploadStatus->getResumableUploadUrl(),
          [
              RequestOptions::BODY => $content,
              RequestOptions::HEADERS => [
                  'Content-Length' => $contentLength,
                  'Content-Range' => $contentRange,
                  'Content-Type' => 'application/xml'
              ]
          ]
      );
    } catch (ServerException $e) {
      throw new ApiException(sprintf(
          'Failed response status from batch upload URL, error message: %s,'
              . ' HTTP code %d.',
          $e->getResponse()->getReasonPhrase(),
          $e->getResponse()->getStatusCode()
      ));
    }
    return new BatchJobUploadStatus(
        $batchJobUploadStatus->getResumableUploadUrl(),
        $batchJobUploadStatus->getTotalContentBytes() + $contentLength
    );
  }

  /**
   * Downloads the results of batch processing from the download URL.
   *
   * @param string $downloadUrl the download URL from which the results are
   *     downloaded
   * @return MutateResult[] the array of results from batch processing
   * @throws ApiException if the download process failed
   */
  public function downloadBatchJobResults($downloadUrl) {
    try {
      $response = $this->httpClient->request('GET', $downloadUrl, [
          RequestOptions::HEADERS => ['Accept-Encoding' => 'gzip']
      ]);
    } catch (ServerException $e) {
      throw new ApiException(sprintf(
          'Failed response status from batch download URL, error message: %s,'
              . ' HTTP code %d.',
          $e->getResponse()->getReasonPhrase(),
          $e->getResponse()->getStatusCode()
      ));
    }

    $mutateResponse = $this->batchJobSerializer->decode(
        $response->getBody()->getContents(), 'xml');
    $rval = MapUtils::isMap($mutateResponse['rval'])
        ? [$mutateResponse['rval']] : $mutateResponse['rval'];

    return $this->batchJobSerializer->denormalize(
        $rval, $this->mutateResultClassName . '[]');
  }

  /**
   * Pads the request content to conform to the requirements of
   * Google Cloud Storage.
   *
   * @param string $content the request content
   * @return string the post-processed content
   */
  private function padContent($content) {
    // The request is part of a set of incremental uploads, so pad to the
    // required content length. This is not necessary if all operations for the
    // job are being uploaded in a single request.
    $numBytes = mb_strlen($content, '8bit');
    $remainder = $numBytes % self::$REQUIRED_CONTENT_BYTES_INCREMENT;
    if ($remainder > 0) {
      $targetLength = $numBytes +
          (self::$REQUIRED_CONTENT_BYTES_INCREMENT - $remainder);
      $content = str_pad($content, $targetLength, ' ');
    }

    return $content;
  }
}
