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
namespace Google\AdsApi\AdWords\BatchJobs;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

/**
 * Status of the upload process for a batch job.
 *
 * @see BatchJobService
 */
final class BatchJobUploadStatus {

  private $totalContentBytes;
  private $resumableUploadUrl;
  private $httpClient;

  /**
   * Creates a `BatchJobUploadStatus` object with the specified parameters.
   *
   * @param string $url the resumable upload URL or an upload URL if
   *     $totalContentBytes is 0
   * @param int|null $totalContentBytes the total content bytes uploaded so far
   * @param Client|null $httpClient optional, the Guzzle HTTP client that will
   *     handle HTTP calls
   */
  public function __construct($url, $totalContentBytes = null,
      $httpClient = null) {
    $this->httpClient = ($httpClient === null) ? new Client() : $httpClient;
    $this->totalContentBytes =
        ($totalContentBytes === null) ? 0 : $totalContentBytes;
    // If this is the first upload, then issue a request to get the resumable
    // session URI from Google Cloud Storage.
    $this->resumableUploadUrl = ($this->totalContentBytes === 0) ?
        $this->initiateResumableUpload($url) : $url;
  }

  /**
   * Initiates the resumable upload by sending a request to Google Cloud
   * Storage.
   *
   * @param string $uploadUrl the upload URL of a batch job
   * @return string the URL for the initiated resumable upload
   */
  private function initiateResumableUpload($uploadUrl) {
    // This follows the Google Cloud Storage guidelines for initiating
    // resumable uploads:
    // https://cloud.google.com/storage/docs/resumable-uploads-xml
    $response = $this->httpClient->request('POST', $uploadUrl, [
        RequestOptions::HEADERS => [
            'Content-Type' => 'application/xml',
            'Content-Length' => 0,
            'x-goog-resumable' => 'start'
        ]
    ]);

    return $response->getHeader('Location')[0];
  }

  /**
   * @return int the total content bytes uploaded so far
   */
  public function getTotalContentBytes() {
    return $this->totalContentBytes;
  }

  /**
   * @return string the resumable upload URL for incremental upload
   */
  public function getResumableUploadUrl() {
    return $this->resumableUploadUrl;
  }
}
