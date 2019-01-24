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

namespace Google\AdsApi\AdWords\BatchJobs\v201806;

use Google\AdsApi\AdWords\AdWordsGuzzleLogMessageFormatterProvider;
use Google\AdsApi\AdWords\AdWordsNormalizer;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\BatchJobs\BatchJobUploadStatus;
use Google\AdsApi\AdWords\BatchJobs\DotRemoverNameConverter;
use Google\AdsApi\AdWords\v201806\cm\ApiException;
use Google\AdsApi\Common\AdsGuzzleHttpClientFactory;
use Google\AdsApi\Common\GuzzleHttpClientFactory;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\RequestOptions;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * A delegate of `BatchJobs`, which shouldn't be used directly.
 * Use `BatchJobs` to upload batch operations and download the results of batch
 * processing.
 */
final class BatchJobsDelegate
{

    /**
     * For incremental uploads, each request's contents must have a length in
     * bytes divisible by 256K, per Google Cloud Storage's requirement:
     * https://cloud.google.com/storage/docs/xml-api/resumable-upload#step_3wzxhzdk34upload_the_file_blocks.
     */
    private static $REQUIRED_CONTENT_BYTES_INCREMENT = 262144;
    private static $MUTATE_RESULT_CLASS_NAME =
        'Google\AdsApi\AdWords\v201806\cm\MutateResult';

    private $session;
    private $httpClient;
    private $httpClientFactory;
    private $batchJobSerializer;
    private $mutateResultClassName;

    /**
     * Creates a `BatchJobsDelegate` object with the specified parameters.
     *
     * @param AdWordsSession $session the session used to connect to AdWords
     *     API
     * @param Client|null $httpClient optional, the Guzzle HTTP client whose
     *     handler stacks this library's logging middleware will be pushed to
     * @param string|null $mutateResultClassName the root class name for
     *     denormalization
     * @param GuzzleHttpClientFactory|null $httpClientFactory optional, the
     *     Guzzle HTTP client factory that will generate a client handling HTTP
     *     calls
     */
    public function __construct(
        AdWordsSession $session,
        Client $httpClient = null,
        $mutateResultClassName = null,
        GuzzleHttpClientFactory $httpClientFactory = null
    ) {
        $this->session = $session;
        if ($httpClientFactory === null) {
            $logMessageFormatterProvider =
                new AdWordsGuzzleLogMessageFormatterProvider($session, true);
            $this->httpClientFactory = new AdsGuzzleHttpClientFactory(
                $session->getBatchJobsUtilLogger(),
                $logMessageFormatterProvider->getGuzzleLogMessageFormatter(),
                $httpClient
            );
        } else {
            $this->httpClientFactory = $httpClientFactory;
        }
        $this->httpClient = $this->httpClientFactory->generateHttpClient();

        $this->mutateResultClassName = ($mutateResultClassName === null)
            ? self::$MUTATE_RESULT_CLASS_NAME
            : $mutateResultClassName;

        $adWordsNormalizer =
            new AdWordsNormalizer(null, new DotRemoverNameConverter());
        // Set callbacks for the normalizer to specially handle serialization and
        // deserialization of boolean variables.
        $adWordsNormalizer->setCallbacks(
            [
                'normalize' => function ($value, $type) {
                    if ($type === 'bool' || $type === 'boolean') {
                        return ($value) ? 'true' : 'false';
                    } else {
                        return $value;
                    }
                },
                'denormalize' => function ($value, $type) {
                    if ($type === 'int' || $type === 'integer') {
                        return $value + 0;
                    } elseif ($type === 'float' || $type === 'double') {
                        return floatval($value);
                    } elseif ($type === 'bool' || $type === 'boolean') {
                        return ($value === 'true') ? true : false;
                    } else {
                        return $value;
                    }
                }
            ]
        );
        $this->batchJobSerializer = new Serializer(
            [$adWordsNormalizer, new ArrayDenormalizer()],
            [new XmlEncoder('ns1:mutate')]
        );
    }

    /**
     * @see BatchJobs::uploadBatchJobOperations
     */
    public function uploadBatchJobOperations(array $operations, $uploadUrl)
    {
        return $this->closeIncrementalUpload(
            $this->uploadIncrementalBatchJobOperations(
                $operations,
                new BatchJobUploadStatus(
                    $uploadUrl,
                    $this->session,
                    0,
                    $this->httpClient,
                    $this->httpClientFactory
                )
            )
        );
    }

    /**
     * @see BatchJobs::uploadIncrementalBatchJobOperations
     */
    public function uploadIncrementalBatchJobOperations(
        array $operations,
        BatchJobUploadStatus $batchJobUploadStatus
    ) {
        $serializedContent = $this->batchJobSerializer->serialize(
            [
                'operations' => $operations,
                '@xmlns:ns1' =>
                    'https://adwords.google.com/api/adwords/cm/v201806',
                '@xmlns:xsi' => 'http://www.w3.org/2001/XMLSchema-instance'
            ],
            'xml'
        );

        // Remove the XML opening tag in case this is not the first request.
        if ($batchJobUploadStatus->getTotalContentBytes() > 0) {
            $serializedContent =
                preg_replace(
                    '/^.*?<operations/s',
                    '<operations',
                    $serializedContent
                );
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
            $requestOptions = [];
            $requestOptions[RequestOptions::BODY] = $serializedContent;
            $requestOptions[RequestOptions::HEADERS] = [
                'Content-Length' => $contentLength,
                'Content-Range' => $contentRange,
                'Content-Type' => 'application/xml'
            ];
            $proxy = $this->session->getConnectionSettings()->getProxyUrl();
            if (!empty($proxy)) {
                $requestOptions[RequestOptions::PROXY] = ['https' => $proxy];
            }

            $this->httpClient->request(
                'PUT',
                $batchJobUploadStatus->getResumableUploadUrl(),
                $requestOptions
            );
        } catch (ServerException $e) {
            throw new ApiException(
                sprintf(
                    'Failed response status from batch upload URL, error message: %s,'
                    . ' HTTP code %d.',
                    $e->getResponse()->getReasonPhrase(),
                    $e->getResponse()->getStatusCode()
                )
            );
        }

        return new BatchJobUploadStatus(
            $batchJobUploadStatus->getResumableUploadUrl(),
            $this->session,
            $batchJobUploadStatus->getTotalContentBytes() + $contentLength,
            $this->httpClient,
            $this->httpClientFactory
        );
    }

    /**
     * @see BatchJobs::closeIncrementalUpload
     */
    public function closeIncrementalUpload(
        BatchJobUploadStatus $batchJobUploadStatus
    ) {
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
            $requestOptions = [];
            $requestOptions[RequestOptions::BODY] = $content;
            $requestOptions[RequestOptions::HEADERS] = [
                'Content-Length' => $contentLength,
                'Content-Range' => $contentRange,
                'Content-Type' => 'application/xml'
            ];
            $proxy = $this->session->getConnectionSettings()->getProxyUrl();
            if (!empty($proxy)) {
                $requestOptions[RequestOptions::PROXY] = ['https' => $proxy];
            }
            $this->httpClient->request(
                'PUT',
                $batchJobUploadStatus->getResumableUploadUrl(),
                $requestOptions
            );
        } catch (ServerException $e) {
            throw new ApiException(
                sprintf(
                    'Failed response status from batch upload URL, error message: %s,'
                    . ' HTTP code %d.',
                    $e->getResponse()->getReasonPhrase(),
                    $e->getResponse()->getStatusCode()
                )
            );
        }

        return new BatchJobUploadStatus(
            $batchJobUploadStatus->getResumableUploadUrl(),
            $this->session,
            $batchJobUploadStatus->getTotalContentBytes() + $contentLength,
            $this->httpClient,
            $this->httpClientFactory
        );
    }

    /**
     * @see BatchJobs::downloadBatchJobResults
     */
    public function downloadBatchJobResults($downloadUrl)
    {
        try {
            $requestOptions = [];
            $requestOptions[RequestOptions::HEADERS] =
                ['Accept-Encoding' => 'gzip'];
            $proxy = $this->session->getConnectionSettings()->getProxyUrl();
            if (!empty($proxy)) {
                $requestOptions[RequestOptions::PROXY] = ['https' => $proxy];
            }
            $response = $this->httpClient->request(
                'GET',
                $downloadUrl,
                $requestOptions
            );
        } catch (ServerException $e) {
            throw new ApiException(
                sprintf(
                    'Failed response status from batch download URL, error message: %s,'
                    . ' HTTP code %d.',
                    $e->getResponse()->getReasonPhrase(),
                    $e->getResponse()->getStatusCode()
                )
            );
        }

        $mutateResponse = $this->batchJobSerializer->decode(
            $response->getBody()->getContents(),
            'xml'
        );
        if ($mutateResponse === '') {
            return [];
        }

        $rval = AdWordsNormalizer::isOneOrMany($mutateResponse['rval'])
            ? [$mutateResponse['rval']] : $mutateResponse['rval'];

        return $this->batchJobSerializer->denormalize(
            $rval,
            $this->mutateResultClassName . '[]'
        );
    }

    /**
     * Pads the request content to conform to the requirements of
     * Google Cloud Storage.
     *
     * @param string $content the request content
     * @return string the post-processed content
     */
    private function padContent($content)
    {
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
