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
namespace Google\AdsApi\AdWords\BatchJobs\v201607;

use Google\AdsApi\AdWords\BatchJobs\BatchJobUploadStatus;
use Google\AdsApi\AdWords\BatchJobs\DotRemoverNameConverter;
use Google\AdsApi\AdWords\Testing\BatchJobs\v201607\BatchJobsTestProvider;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit_Framework_TestCase;

/**
 * Unit tests for BatchJobs.
 * @see BatchJobs
 * @group small
 */
class BatchJobsTest extends PHPUnit_Framework_TestCase {

  private static $DUMMY_UPLOAD_URL = 'https://www.googleapis.com/upload';
  private static $DUMMY_RESUMABLE_UPLOAD_URL =
      'https://www.googleapis.com/resume-upload';
  private static $DUMMY_DOWNLOAD_URL =
      'https://batch-job-download.google.com/result';
  private static $BYTES_OF_256K = 262144;

  /**
   * @covers Google\AdsApi\AdWords\BatchJobs\v201607\BatchJobs::uploadIncrementalBatchJobOperations
   */
  public function testUploadIncrementalBatchJobOperations_firstRequest() {
    // Setup the Guzzle HTTP client to mock a request to return the resumable
    // upload URL.
    $mockHandler = new MockHandler(
        [new Response(200,
            ['Location' => [self::$DUMMY_RESUMABLE_UPLOAD_URL]])]);
    $handler = HandlerStack::create($mockHandler);
    $httpClient = new Client(['handler' => $handler]);
    $batchJobUploadStatus =
        new BatchJobUploadStatus(self::$DUMMY_UPLOAD_URL, 0, $httpClient);
    $this->assertSame(self::$DUMMY_RESUMABLE_UPLOAD_URL,
        $batchJobUploadStatus->getResumableUploadUrl());

    // uploadIncrementalBatchJobOperations returns 308 in successful cases.
    $mockHandler = new MockHandler([new Response(308)]);
    $handler = HandlerStack::create($mockHandler);
    $httpClient = new Client(['handler' => $handler]);
    $batchJobs = new BatchJobs($httpClient);
    $batchJobUploadStatus = $batchJobs->uploadIncrementalBatchJobOperations(
        BatchJobsTestProvider::getBatchJobOperations(), $batchJobUploadStatus);

    $this->assertXmlStringEqualsXmlString(
        BatchJobsTestProvider::getBatchJobMutateRequestXml(),
        trim($mockHandler->getLastRequest()->getBody()->getContents())
            . '</ns1:mutate>'
    );
    $this->assertSame(self::$DUMMY_RESUMABLE_UPLOAD_URL,
        $batchJobUploadStatus->getResumableUploadUrl());
    $this->assertSame(self::$BYTES_OF_256K,
        $batchJobUploadStatus->getTotalContentBytes());
  }

  /**
   * @covers Google\AdsApi\AdWords\BatchJobs\v201607\BatchJobs::uploadIncrementalBatchJobOperations
   */
  public function
      testUploadIncrementalBatchJobOperations_intermediateRequest() {
    $batchJobUploadStatus = new BatchJobUploadStatus(
        self::$DUMMY_RESUMABLE_UPLOAD_URL, self::$BYTES_OF_256K);
    $this->assertSame(self::$DUMMY_RESUMABLE_UPLOAD_URL,
        $batchJobUploadStatus->getResumableUploadUrl());

    // uploadIncrementalBatchJobOperations returns 308 in successful cases.
    $mockHandler = new MockHandler([new Response(308)]);
    $handler = HandlerStack::create($mockHandler);
    $httpClient = new Client(['handler' => $handler]);
    $batchJobs = new BatchJobs($httpClient);
    $batchJobUploadStatus = $batchJobs->uploadIncrementalBatchJobOperations(
        BatchJobsTestProvider::getBatchJobOperations(), $batchJobUploadStatus);

    $this->assertXmlStringEqualsXmlString(
        BatchJobsTestProvider::getBatchJobMutateRequestXml(),
        sprintf(
            '<ns1:mutate xmlns:ns1="https://adwords.google.com/api/adwords/cm/'
                . 'v201607" xmlns:xsi="http://www.w3.org/2001/'
                . 'XMLSchema-instance">%s</ns1:mutate>',
            trim($mockHandler->getLastRequest()->getBody()->getContents())
        )
    );
    $this->assertSame(self::$DUMMY_RESUMABLE_UPLOAD_URL,
        $batchJobUploadStatus->getResumableUploadUrl());
    $this->assertSame(self::$BYTES_OF_256K * 2,
        $batchJobUploadStatus->getTotalContentBytes());
  }

  /**
   * @covers Google\AdsApi\AdWords\BatchJobs\v201607\BatchJobs::uploadIncrementalBatchJobOperations
   * @expectedException Google\AdsApi\AdWords\v201607\cm\ApiException
   */
  public function testUploadIncrementalBatchJobOperationsFails() {
    $batchJobUploadStatus = new BatchJobUploadStatus(
        self::$DUMMY_RESUMABLE_UPLOAD_URL, self::$BYTES_OF_256K);

    $mockHandler = new MockHandler([
        new ServerException(
            'Server error: 500',
            new Request('PUT', self::$DUMMY_RESUMABLE_UPLOAD_URL),
            new Response(500))
    ]);
    $handler = HandlerStack::create($mockHandler);
    $httpClient = new Client(['handler' => $handler]);
    $batchJobs = new BatchJobs($httpClient);
    $batchJobs->uploadIncrementalBatchJobOperations(
        BatchJobsTestProvider::getBatchJobOperations(), $batchJobUploadStatus);
  }

  /**
   * @covers Google\AdsApi\AdWords\BatchJobs\v201607\BatchJobs::closeIncrementalUpload
   */
  public function testCloseIncrementalUpload() {
    $batchJobUploadStatus = new BatchJobUploadStatus(
        self::$DUMMY_RESUMABLE_UPLOAD_URL, self::$BYTES_OF_256K);
    $this->assertSame(self::$DUMMY_RESUMABLE_UPLOAD_URL,
        $batchJobUploadStatus->getResumableUploadUrl());

    $mockHandler = new MockHandler([new Response(200)]);
    $handler = HandlerStack::create($mockHandler);
    $httpClient = new Client(['handler' => $handler]);
    $batchJobs = new BatchJobs($httpClient);
    $batchJobUploadStatus =
        $batchJobs->closeIncrementalUpload($batchJobUploadStatus);

    $this->assertSame('</ns1:mutate>',
        trim($mockHandler->getLastRequest()->getBody()->getContents()));
    $this->assertSame(self::$BYTES_OF_256K + mb_strlen('</ns1:mutate>', '8bit'),
        $batchJobUploadStatus->getTotalContentBytes());
  }

  /**
   * @covers Google\AdsApi\AdWords\BatchJobs\v201607\BatchJobs::closeIncrementalUpload
   * @expectedException Google\AdsApi\AdWords\v201607\cm\ApiException
   */
  public function testCloseIncrementalUploadFails() {
    $batchJobUploadStatus = new BatchJobUploadStatus(
        self::$DUMMY_RESUMABLE_UPLOAD_URL, self::$BYTES_OF_256K);

    $mockHandler = new MockHandler([
        new ServerException(
            'Server error: 500',
            new Request('PUT', self::$DUMMY_RESUMABLE_UPLOAD_URL),
            new Response(500))
    ]);
    $handler = HandlerStack::create($mockHandler);
    $httpClient = new Client(['handler' => $handler]);
    $batchJobs = new BatchJobs($httpClient);
    $batchJobs->closeIncrementalUpload($batchJobUploadStatus);
  }

  /**
   * @covers Google\AdsApi\AdWords\BatchJobs\v201607\BatchJobs::downloadBatchJobResults
   */
  public function testDownloadBatchJobResults() {
    $mockHandler = new MockHandler(
        [new Response(200, [],
            BatchJobsTestProvider::getBatchJobMutateResponseXml())]);
    $handler = HandlerStack::create($mockHandler);
    $httpClient = new Client(['handler' => $handler]);
    $batchJobs = new BatchJobs($httpClient,
        'Google\AdsApi\AdWords\Testing\BatchJobs\v201607\FakeMutateResult');

    $expectedMutateResults = BatchJobsTestProvider::getMutateResultArray();
    $actualMutateResults =
        $batchJobs->downloadBatchJobResults(self::$DUMMY_DOWNLOAD_URL);
    $this->assertCount(count($expectedMutateResults), $actualMutateResults);
    $this->assertSame($expectedMutateResults[0]->getIndex(),
        $actualMutateResults[0]->getIndex());
    $this->assertCount(
        count($expectedMutateResults[0]->getErrorList()->getErrors()),
        $actualMutateResults[0]->getErrorList()->getErrors()
    );

    $expectedApiError =
        $expectedMutateResults[0]->getErrorList()->getErrors()[0];
    $actualApiError = $actualMutateResults[0]->getErrorList()->getErrors()[0];
    $this->assertSame($expectedApiError->getFieldPath(),
        $actualApiError->getFieldPath());
    $this->assertSame($expectedApiError->getTrigger(),
        $actualApiError->getTrigger());
    $this->assertSame($expectedApiError->getErrorString(),
        $actualApiError->getErrorString());
    $this->assertSame($expectedApiError->getKey(),
        $actualApiError->getKey());
    $this->assertSame($expectedApiError->getIsExemptable(),
        $actualApiError->getIsExemptable());
    $this->assertSame($expectedApiError->getValue(),
        $actualApiError->getValue());

    $this->assertSame($expectedMutateResults[1]->getIndex(),
        $actualMutateResults[1]->getIndex());
    $expectedCampaign = $expectedMutateResults[1]->getResult()->getCampaign();
    $actualCampaign = $actualMutateResults[1]->getResult()->getCampaign();
    $this->assertSame($expectedCampaign->getId(), $actualCampaign->getId());
    $this->assertSame($expectedCampaign->getName(), $actualCampaign->getName());
    $this->assertSame($expectedCampaign->getIsServing(),
        $actualCampaign->getIsServing());
    $this->assertSame($expectedCampaign->getOperandType(),
        $actualCampaign->getOperandType());
  }

  /**
   * @covers Google\AdsApi\AdWords\BatchJobs\v201607\BatchJobs::downloadBatchJobResults
   * @expectedException Google\AdsApi\AdWords\v201607\cm\ApiException
   */
  public function testDownloadBatchJobResultsFails() {
    $mockHandler = new MockHandler([
        new ServerException(
            'Server error: 500',
            new Request('PUT', self::$DUMMY_RESUMABLE_UPLOAD_URL),
            new Response(500))
    ]);
    $handler = HandlerStack::create($mockHandler);
    $httpClient = new Client(['handler' => $handler]);
    $batchJobs = new BatchJobs($httpClient,
        'Google\AdsApi\AdWords\Testing\BatchJobs\v201607\FakeMutateResult');
    $mutateResults =
        $batchJobs->downloadBatchJobResults(self::$DUMMY_DOWNLOAD_URL);
  }
}
