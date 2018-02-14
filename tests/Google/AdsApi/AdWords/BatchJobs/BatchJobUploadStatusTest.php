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

namespace Google\AdsApi\AdWords\BatchJobs;

use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\Testing\BatchJobs\SimpleGuzzleHttpClientFactory;
use Google\Auth\FetchAuthTokenInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Monolog\Handler\NullHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `BatchJobUploadStatus`.
 *
 * @see BatchJobUploadStatus
 * @small
 */
class BatchJobUploadStatusTest extends TestCase
{

    private static $DUMMY_UPLOAD_URL = 'https://www.googleapis.com/upload';
    private static $DUMMY_RESUMABLE_UPLOAD_URL =
        'https://www.googleapis.com/resume-upload';
    private static $BYTES_OF_256K = 262144;

    private $adWordsSession;

    /**
     * @see PHPUnit\Framework\TestCase::setUp
     */
    protected function setUp()
    {
        $fetchAuthTokenInterfaceStub = $this
            ->getMockBuilder(FetchAuthTokenInterface::class)
            ->disableOriginalConstructor()
            ->getMock();
        $fetchAuthTokenInterfaceStub
            ->method('fetchAuthToken')
            ->willReturn(['access_token' => 'abc123']);
        $this->adWordsSession = (new AdWordsSessionBuilder())
            ->withDeveloperToken('ABcdeFGH93KL-NOPQ_STUv')
            ->withClientCustomerId('123-456-7890')
            ->withUserAgent('batch jobs delegate')
            ->withOAuth2Credential($fetchAuthTokenInterfaceStub)
            ->withBatchJobsUtilLogger(new Logger('', [new NullHandler()]))
            ->build();
    }

    /**
     * @covers Google\AdsApi\AdWords\BatchJobs\BatchJobUploadStatus::__construct
     * @covers Google\AdsApi\AdWords\BatchJobs\BatchJobUploadStatus::initiateResumableUpload
     */
    public function testCreateBatchJobUploadStatusWithZeroBytes()
    {
        // Setup the Guzzle HTTP client to mock a request to return the resumable
        // upload URL.
        $mockHandler = new MockHandler(
            [
                new Response(
                    200,
                    ['Location' => [self::$DUMMY_RESUMABLE_UPLOAD_URL]]
                )
            ]
        );
        $handler = HandlerStack::create($mockHandler);
        $httpClient = new Client(['handler' => $handler]);
        $batchJobUploadStatus = new BatchJobUploadStatus(
            self::$DUMMY_UPLOAD_URL,
            $this->adWordsSession,
            0,
            $httpClient,
            new SimpleGuzzleHttpClientFactory($httpClient)
        );
        $this->assertSame(
            self::$DUMMY_RESUMABLE_UPLOAD_URL,
            $batchJobUploadStatus->getResumableUploadUrl()
        );
        $this->assertSame(0, $batchJobUploadStatus->getTotalContentBytes());
    }

    /**
     * @covers Google\AdsApi\AdWords\BatchJobs\BatchJobUploadStatus::__construct
     */
    public function testCreateBatchJobUploadStatusWithNonZeroBytes()
    {
        $batchJobUploadStatus = new BatchJobUploadStatus(
            self::$DUMMY_UPLOAD_URL,
            $this->adWordsSession,
            self::$BYTES_OF_256K
        );
        $this->assertSame(
            self::$DUMMY_UPLOAD_URL,
            $batchJobUploadStatus->getResumableUploadUrl()
        );
        $this->assertSame(
            self::$BYTES_OF_256K,
            $batchJobUploadStatus->getTotalContentBytes()
        );
    }
}
