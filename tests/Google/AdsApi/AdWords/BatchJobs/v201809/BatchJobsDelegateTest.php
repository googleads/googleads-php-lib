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
namespace Google\AdsApi\AdWords\BatchJobs\v201809;

use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\BatchJobs\BatchJobUploadStatus;
use Google\AdsApi\AdWords\Testing\BatchJobs\SimpleGuzzleHttpClientFactory;
use Google\AdsApi\AdWords\Testing\BatchJobs\v201809\BatchJobsTestProvider;
use Google\AdsApi\AdWords\Testing\BatchJobs\v201809\FakeMutateResult;
use Google\Auth\FetchAuthTokenInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Monolog\Handler\NullHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `BatchJobsDelegate`.
 *
 * @see BatchJobsDelegate
 * @small
 */
class BatchJobsDelegateTest extends TestCase
{

    private static $DUMMY_UPLOAD_URL = 'https://www.googleapis.com/upload';
    private static $DUMMY_RESUMABLE_UPLOAD_URL =
      'https://www.googleapis.com/resume-upload';
    private static $DUMMY_DOWNLOAD_URL =
      'https://batch-job-download.google.com/result';
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
   * @covers Google\AdsApi\AdWords\BatchJobs\v201809\BatchJobsDelegate::uploadIncrementalBatchJobOperations
   */
    public function testUploadIncrementalBatchJobOperationsFirstRequest()
    {
        // Setup the Guzzle HTTP client to mock a request to return the resumable
        // upload URL.
        $mockHandler = new MockHandler(
            [new Response(
                200,
                ['Location' => [self::$DUMMY_RESUMABLE_UPLOAD_URL]]
            )]
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

    // uploadIncrementalBatchJobOperations returns 308 in successful cases.
        $mockHandler = new MockHandler([new Response(308)]);
        $handler = HandlerStack::create($mockHandler);
        $httpClient = new Client(['handler' => $handler]);
        $batchJobsDelegate = new BatchJobsDelegate(
            $this->adWordsSession,
            $httpClient,
            null,
            new SimpleGuzzleHttpClientFactory($httpClient)
        );
        $batchJobUploadStatus =
        $batchJobsDelegate->uploadIncrementalBatchJobOperations(
            BatchJobsTestProvider::getBatchJobOperations(),
            $batchJobUploadStatus
        );

        $this->assertXmlStringEqualsXmlString(
            BatchJobsTestProvider::getBatchJobMutateRequestXml(),
            trim($mockHandler->getLastRequest()->getBody()->getContents())
            . '</ns1:mutate>'
        );
        $this->assertSame(
            self::$DUMMY_RESUMABLE_UPLOAD_URL,
            $batchJobUploadStatus->getResumableUploadUrl()
        );
        $this->assertSame(
            self::$BYTES_OF_256K,
            $batchJobUploadStatus->getTotalContentBytes()
        );
    }

  /**
   * @covers Google\AdsApi\AdWords\BatchJobs\v201809\BatchJobsDelegate::uploadIncrementalBatchJobOperations
   */
    public function testUploadIncrementalBatchJobOperationsIntermediateRequest()
    {
        $batchJobUploadStatus = new BatchJobUploadStatus(
            self::$DUMMY_RESUMABLE_UPLOAD_URL,
            $this->adWordsSession,
            self::$BYTES_OF_256K,
            null,
            new SimpleGuzzleHttpClientFactory()
        );
        $this->assertSame(
            self::$DUMMY_RESUMABLE_UPLOAD_URL,
            $batchJobUploadStatus->getResumableUploadUrl()
        );

        // uploadIncrementalBatchJobOperations returns 308 in successful cases.
        $mockHandler = new MockHandler([new Response(308)]);
        $handler = HandlerStack::create($mockHandler);
        $httpClient = new Client(['handler' => $handler]);
        $batchJobsDelegate = new BatchJobsDelegate(
            $this->adWordsSession,
            $httpClient,
            null,
            new SimpleGuzzleHttpClientFactory($httpClient)
        );
        $batchJobUploadStatus =
        $batchJobsDelegate->uploadIncrementalBatchJobOperations(
            BatchJobsTestProvider::getBatchJobOperations(),
            $batchJobUploadStatus
        );

        $this->assertXmlStringEqualsXmlString(
            BatchJobsTestProvider::getBatchJobMutateRequestXml(),
            sprintf(
                '<ns1:mutate xmlns:ns1="https://adwords.google.com/api/adwords/cm/'
                . 'v201809" xmlns:xsi="http://www.w3.org/2001/'
                . 'XMLSchema-instance">%s</ns1:mutate>',
                trim($mockHandler->getLastRequest()->getBody()->getContents())
            )
        );
        $this->assertSame(
            self::$DUMMY_RESUMABLE_UPLOAD_URL,
            $batchJobUploadStatus->getResumableUploadUrl()
        );
        $this->assertSame(
            self::$BYTES_OF_256K * 2,
            $batchJobUploadStatus->getTotalContentBytes()
        );
    }

  /**
   * @covers Google\AdsApi\AdWords\BatchJobs\v201809\BatchJobsDelegate::uploadIncrementalBatchJobOperations
   * @expectedException Google\AdsApi\AdWords\v201809\cm\ApiException
   */
    public function testUploadIncrementalBatchJobOperationsFails()
    {
        $batchJobUploadStatus = new BatchJobUploadStatus(
            self::$DUMMY_RESUMABLE_UPLOAD_URL,
            $this->adWordsSession,
            self::$BYTES_OF_256K,
            null,
            new SimpleGuzzleHttpClientFactory()
        );

        $mockHandler = new MockHandler([
        new ServerException(
            'Server error: 500',
            new Request('PUT', self::$DUMMY_RESUMABLE_UPLOAD_URL),
            new Response(500)
        )
        ]);
        $handler = HandlerStack::create($mockHandler);
        $httpClient = new Client(['handler' => $handler]);
        $batchJobsDelegate = new BatchJobsDelegate(
            $this->adWordsSession,
            $httpClient,
            null,
            new SimpleGuzzleHttpClientFactory($httpClient)
        );
        $batchJobsDelegate->uploadIncrementalBatchJobOperations(
            BatchJobsTestProvider::getBatchJobOperations(),
            $batchJobUploadStatus
        );
    }

  /**
   * @covers Google\AdsApi\AdWords\BatchJobs\v201809\BatchJobsDelegate::closeIncrementalUpload
   */
    public function testCloseIncrementalUpload()
    {
        $batchJobUploadStatus = new BatchJobUploadStatus(
            self::$DUMMY_RESUMABLE_UPLOAD_URL,
            $this->adWordsSession,
            self::$BYTES_OF_256K,
            null,
            new SimpleGuzzleHttpClientFactory()
        );
        $this->assertSame(
            self::$DUMMY_RESUMABLE_UPLOAD_URL,
            $batchJobUploadStatus->getResumableUploadUrl()
        );

        $mockHandler = new MockHandler([new Response(200)]);
        $handler = HandlerStack::create($mockHandler);
        $httpClient = new Client(['handler' => $handler]);
        $batchJobsDelegate = new BatchJobsDelegate(
            $this->adWordsSession,
            $httpClient,
            null,
            new SimpleGuzzleHttpClientFactory($httpClient)
        );
        $batchJobUploadStatus =
        $batchJobsDelegate->closeIncrementalUpload($batchJobUploadStatus);

        $this->assertSame(
            '</ns1:mutate>',
            trim($mockHandler->getLastRequest()->getBody()->getContents())
        );
        $this->assertSame(
            self::$BYTES_OF_256K + mb_strlen('</ns1:mutate>', '8bit'),
            $batchJobUploadStatus->getTotalContentBytes()
        );
    }

  /**
   * @covers Google\AdsApi\AdWords\BatchJobs\v201809\BatchJobsDelegate::closeIncrementalUpload
   * @expectedException Google\AdsApi\AdWords\v201809\cm\ApiException
   */
    public function testCloseIncrementalUploadFails()
    {
        $batchJobUploadStatus = new BatchJobUploadStatus(
            self::$DUMMY_RESUMABLE_UPLOAD_URL,
            $this->adWordsSession,
            self::$BYTES_OF_256K,
            null,
            new SimpleGuzzleHttpClientFactory()
        );

        $mockHandler = new MockHandler([
        new ServerException(
            'Server error: 500',
            new Request('PUT', self::$DUMMY_RESUMABLE_UPLOAD_URL),
            new Response(500)
        )
        ]);
        $handler = HandlerStack::create($mockHandler);
        $httpClient = new Client(['handler' => $handler]);
        $batchJobsDelegate = new BatchJobsDelegate(
            $this->adWordsSession,
            $httpClient,
            null,
            new SimpleGuzzleHttpClientFactory($httpClient)
        );
        $batchJobsDelegate->closeIncrementalUpload($batchJobUploadStatus);
    }

  /**
   * @covers Google\AdsApi\AdWords\BatchJobs\v201809\BatchJobsDelegate::downloadBatchJobResults
   */
    public function testDownloadBatchJobResults()
    {
        $mockHandler = new MockHandler(
            [new Response(
                200,
                [],
                BatchJobsTestProvider::getBatchJobMutateResponseXml()
            )]
        );
        $handler = HandlerStack::create($mockHandler);
        $httpClient = new Client(['handler' => $handler]);
        $batchJobsDelegate = new BatchJobsDelegate(
            $this->adWordsSession,
            $httpClient,
            FakeMutateResult::class,
            new SimpleGuzzleHttpClientFactory($httpClient)
        );

        $expectedMutateResults = BatchJobsTestProvider::getMutateResultArray();
        $actualMutateResults =
        $batchJobsDelegate->downloadBatchJobResults(self::$DUMMY_DOWNLOAD_URL);
        $this->assertCount(count($expectedMutateResults), $actualMutateResults);
        $this->assertSame(
            $expectedMutateResults[0]->getIndex(),
            $actualMutateResults[0]->getIndex()
        );
        $this->assertCount(
            count($expectedMutateResults[0]->getErrorList()->getErrors()),
            $actualMutateResults[0]->getErrorList()->getErrors()
        );

        $expectedApiError =
        $expectedMutateResults[0]->getErrorList()->getErrors()[0];
        $actualApiError = $actualMutateResults[0]->getErrorList()->getErrors()[0];
        $this->assertSame(
            $expectedApiError->getFieldPath(),
            $actualApiError->getFieldPath()
        );
        $this->assertSame(
            $expectedApiError->getTrigger(),
            $actualApiError->getTrigger()
        );
        $this->assertSame(
            $expectedApiError->getErrorString(),
            $actualApiError->getErrorString()
        );
        $this->assertSame(
            $expectedApiError->getKey(),
            $actualApiError->getKey()
        );
        $this->assertSame(
            $expectedApiError->getIsExemptable(),
            $actualApiError->getIsExemptable()
        );
        $this->assertSame(
            $expectedApiError->getValue(),
            $actualApiError->getValue()
        );

        $this->assertSame(
            $expectedMutateResults[1]->getIndex(),
            $actualMutateResults[1]->getIndex()
        );
        $expectedCampaign = $expectedMutateResults[1]->getResult()->getCampaign();
        $actualCampaign = $actualMutateResults[1]->getResult()->getCampaign();
        $this->assertSame($expectedCampaign->getId(), $actualCampaign->getId());
        $this->assertSame($expectedCampaign->getName(), $actualCampaign->getName());
        $this->assertSame(
            $expectedCampaign->getIsServing(),
            $actualCampaign->getIsServing()
        );
        $this->assertSame(
            $expectedCampaign->getOperandType(),
            $actualCampaign->getOperandType()
        );

        $this->assertSame(
            $expectedMutateResults[2]->getIndex(),
            $actualMutateResults[2]->getIndex()
        );
        $expectedCampaign = $expectedMutateResults[2]->getResult()->getCampaign();
        $actualCampaign = $actualMutateResults[2]->getResult()->getCampaign();
        $this->assertSame($expectedCampaign->getId(), $actualCampaign->getId());
        $this->assertSame($expectedCampaign->getName(), $actualCampaign->getName());
    }

  /**
   * @covers Google\AdsApi\AdWords\BatchJobs\v201809\BatchJobsDelegate::downloadBatchJobResults
   * @expectedException Google\AdsApi\AdWords\v201809\cm\ApiException
   */
    public function testDownloadBatchJobResultsFails()
    {
        $mockHandler = new MockHandler([
        new ServerException(
            'Server error: 500',
            new Request('PUT', self::$DUMMY_RESUMABLE_UPLOAD_URL),
            new Response(500)
        )
        ]);
        $handler = HandlerStack::create($mockHandler);
        $httpClient = new Client(['handler' => $handler]);
        $batchJobsDelegate = new BatchJobsDelegate(
            $this->adWordsSession,
            $httpClient,
            FakeMutateResult::class,
            new SimpleGuzzleHttpClientFactory($httpClient)
        );
        $batchJobsDelegate->downloadBatchJobResults(self::$DUMMY_DOWNLOAD_URL);
    }
}
