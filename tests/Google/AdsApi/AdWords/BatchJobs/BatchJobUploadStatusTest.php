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

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit_Framework_TestCase;

/**
 * Unit tests for `BatchJobUploadStatus`.
 *
 * @see BatchJobUploadStatus
 * @small
 */
class BatchJobUploadStatusTest extends PHPUnit_Framework_TestCase {

  private static $DUMMY_UPLOAD_URL = 'https://www.googleapis.com/upload';
  private static $DUMMY_RESUMABLE_UPLOAD_URL =
      'https://www.googleapis.com/resume-upload';
  private static $BYTES_OF_256K = 262144;

  /**
   * @covers Google\AdsApi\AdWords\BatchJobs\BatchJobUploadStatus::__construct
   * @covers Google\AdsApi\AdWords\BatchJobs\BatchJobUploadStatus::initiateResumableUpload
   */
  public function testCreateBatchJobUploadStatus_withZeroBytes() {
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
    $this->assertSame(0, $batchJobUploadStatus->getTotalContentBytes());
  }

  /**
   * @covers Google\AdsApi\AdWords\BatchJobs\BatchJobUploadStatus::__construct
   */
  public function testCreateBatchJobUploadStatus_withNonZeroBytes() {
    $batchJobUploadStatus =
        new BatchJobUploadStatus(self::$DUMMY_UPLOAD_URL,
            self::$BYTES_OF_256K);
    $this->assertSame(self::$DUMMY_UPLOAD_URL,
        $batchJobUploadStatus->getResumableUploadUrl());
    $this->assertSame(self::$BYTES_OF_256K,
        $batchJobUploadStatus->getTotalContentBytes());
  }
}
