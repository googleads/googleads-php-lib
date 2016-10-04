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
 *
 * @package    GoogleApiAdsAdWordsUtil
 * @subpackage v201609
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
require_once 'Google/Api/Ads/AdWords/Lib/AdWordsUser.php';
require_once 'Google/Api/Ads/AdWords/Util/BatchJobException.php';
require_once 'Google/Api/Ads/AdWords/Util/v201609/BatchJobClasses.php';
require_once 'Google/Api/Ads/AdWords/Util/XmlDeserializer.php';
require_once 'Google/Api/Ads/AdWords/Util/XmlSerializer.php';
require_once 'Google/Api/Ads/Common/Util/CurlUtils.php';
require_once 'Google/Api/Ads/Common/Util/Logger.php';
require_once 'Google/Api/Ads/Common/Util/XmlUtils.php';

/**
 * A delegate of BatchJobUtils, which shouldn't be used directly.
 * Use BatchJobUtils to upload batch operations and download the results of
 * batch processing.
 */
class BatchJobUtilsDelegate {

  private static $UPLOAD_URL_HEADER_CONTENT_TYPE = 'application/xml';
  private static $DOWNLOAD_URL_ACCEPT_ENCODING = 'gzip';

  /**
   * For incremental uploads, each request's contents must have a length in
   * bytes divisible by this size.
   */
  private static $REQUIRED_CONTENT_BYTES_INCREMENT = 262144;

  private $curlUtils;
  private $curlSession;
  private $uploadUrl;
  private $totalContentBytes;

  /**
   * Create an instance of BatchJobUtils with the specified upload URL, total
   * uploaded content bytes, and CurlUtils object.
   *
   * @param string $uploadUrl the upload URL to which the operations will be
   *     uploaded
   * @param int $totalContentBytes the total content bytes uploaded so far,
   *     used in incremental batch job uploads
   * @param CurlUtils $curlUtils the CurlUtils object for uploading batch
   *     job operations and downloading the results of batch job processing
   */
  public function __construct($uploadUrl, $totalContentBytes = null,
      CurlUtils $curlUtils = null) {
    if ($uploadUrl === null) {
      throw new BatchJobException('The upload URL cannot be null.');
    }
    $this->totalContentBytes =
        ($totalContentBytes === null) ? 0 : $totalContentBytes;
    $this->curlUtils = ($curlUtils === null) ? new CurlUtils() : $curlUtils;
    $this->curlSession = null;
    // If this is the first upload, then issue a request to get the resumable
    // session URI from Google Cloud Storage.
    $this->uploadUrl = ($this->totalContentBytes === 0) ?
        $this->InitiateResumableUpload($uploadUrl) :
        $this->uploadUrl;
  }

  /**
   * @see BatchJobUtils::UploadIncrementalBatchJobOperations
   */
  public function UploadIncrementalBatchJobOperations(array $operations,
      $isLastRequest = null) {
    if ($isLastRequest === null) {
      $isLastRequest = false;
    }

    $uploadRequest =
        $this->PrepareIncrementalUploadRequest($operations, $isLastRequest);

    $flatHeaders = array();
    foreach ($uploadRequest['headers'] as $name => $value) {
      $flatHeaders[] = sprintf('%s: %s', $name, $value);
    }

    // If this is the first upload request for this instance, initialize the
    // curl session object.
    if ($this->curlSession === null) {
      $this->curlSession = $this->curlUtils->CreateSession($this->uploadUrl);
      $this->curlUtils->SetOpt($this->curlSession, CURLOPT_CUSTOMREQUEST,
          'PUT');
      $this->curlUtils->SetOpt($this->curlSession, CURLINFO_HEADER_OUT, true);
    }
    $this->curlUtils->SetOpt($this->curlSession, CURLOPT_HTTPHEADER,
        $flatHeaders);
    $this->curlUtils->SetOpt($this->curlSession, CURLOPT_POSTFIELDS,
        $uploadRequest['body']);

    $response = $this->curlUtils->Exec($this->curlSession);
    $errorMessage = $this->curlUtils->Error($this->curlSession);
    $httpCode = $this->curlUtils->GetInfo($this->curlSession,
        CURLINFO_HTTP_CODE);

    if ($isLastRequest === true) {
      $this->curlUtils->Close($this->curlSession);
      $this->curlSession = null;
      $this->uploadUrl = null;
      $this->totalContentBytes = 0;
    } else {
      $this->totalContentBytes += $uploadRequest['length'];
    }

    // 308 also indicates that the incremental upload succeeded.
    if ($httpCode != 200 && $httpCode != 308) {
      $errorMessage .= ' Failed response status from batch upload URL.';
      throw new BatchJobException(sprintf(
          "Error message: %s, HTTP code %d.",
          $errorMessage,
          $httpCode
      ));
    }
  }

  /**
   * Creates the HTTP headers and body for incremental upload request that will
   * be used to upload batch operations to. Content-Length and Content-Range
   * are required for incremental upload.
   *
   * @param array $operations operations to be uploaded to the upload URL
   * @param bool $isLastRequest if this is last upload request
   * @return array an associative array containing the HTTP headers, body, and
   *     content length of incremental upload request
   */
  private function PrepareIncrementalUploadRequest(array $operations,
      $isLastRequest) {
    $headers = array('Content-Type' => self::$UPLOAD_URL_HEADER_CONTENT_TYPE);

    $batchJobOpsMutate = new BatchJobOpsMutate();
    $batchJobOpsMutate->operations = $operations;
    // Get body of this HTTP upload request.
    $serializer = new XmlSerializer();
    $content = $this->PostProcessContent(
        $serializer->ConvertObjectToXml($batchJobOpsMutate, 'ns1:mutate', true),
        $this->totalContentBytes == 0,
        $isLastRequest
    );
    $contentLength = mb_strlen($content, '8bit');
    $headers['Content-Length'] = $contentLength;

    // On the last request, specify the total number of bytes.
    // e.g., bytes 500-999/1000
    $lowerBound = $this->totalContentBytes;
    $upperBound = $this->totalContentBytes + $contentLength - 1;
    $totalBytes = ($isLastRequest) ? strval($upperBound + 1) : '*';
    $contentRange =
        sprintf('bytes %d-%d/%s', $lowerBound, $upperBound, $totalBytes);
    $headers['Content-Range'] = $contentRange;
    return array(
        'headers' => $headers,
        'body' => $content,
        'length' => $contentLength
    );
  }

  /**
   * @see BatchJobUtils::DownloadBatchJobResults
   */
  public function DownloadBatchJobResults($downloadUrl) {
    $downloadRequest = array(
        'headers' =>
            array('Accept-Encoding' => self::$DOWNLOAD_URL_ACCEPT_ENCODING)
    );
    $flatHeaders = array();
    foreach ($downloadRequest['headers'] as $name => $value) {
      $flatHeaders[] = sprintf('%s: %s', $name, $value);
    }

    $ch = $this->curlUtils->CreateSession($downloadUrl);
    $this->curlUtils->SetOpt($ch, CURLINFO_HEADER_OUT, true);
    $this->curlUtils->SetOpt($ch, CURLOPT_HTTPHEADER, $flatHeaders);

    $response = $this->curlUtils->Exec($ch);
    $errorMessage = $this->curlUtils->Error($ch);
    $httpCode = $this->curlUtils->GetInfo($ch, CURLINFO_HTTP_CODE);

    $this->curlUtils->Close($ch);

    if ($httpCode != 200) {
      throw new BatchJobException(
          sprintf("Error message: %s, HTTP code %d.", $errorMessage,
              $httpCode));
    } else {
      return $response;
    }
  }

  /**
   * Initiates the resumable upload by sending a request to Google Cloud
   * Storage.
   *
   * @param string $uploadUrl the upload URL of a batch job
   * @return string the URL for the initiated resumable upload
   */
  private function InitiateResumableUpload($uploadUrl) {
    // This follows the Google Cloud Storage guidelines for initiating
    // resumable uploads:
    // https://cloud.google.com/storage/docs/resumable-uploads-xml
    $headers = array(
        'Content-Type: ' . self::$UPLOAD_URL_HEADER_CONTENT_TYPE,
        'Content-Length: 0',
        'x-goog-resumable: start'
    );

    $ch = $this->curlUtils->CreateSession($uploadUrl);
    $this->curlUtils->SetOpt($ch, CURLOPT_POST, true);
    $this->curlUtils->SetOpt($ch, CURLOPT_HEADER, true);
    $this->curlUtils->SetOpt($ch, CURLINFO_HEADER_OUT, true);
    $this->curlUtils->SetOpt($ch, CURLOPT_HTTPHEADER, $headers);

    // Response returned is composed of only headers. Body is always empty.
    $response = $this->curlUtils->Exec($ch);
    $errorMessage = $this->curlUtils->Error($ch);
    $httpCode = $this->curlUtils->GetInfo($ch, CURLINFO_HTTP_CODE);

    $this->curlUtils->Close($ch);

    // A resumable upload URL is provided in the value of "Location".
    preg_match('/Location:\s([^\s]*)\s/', $response, $matches);
    if (!isset($matches[1]) || $matches[1] === '') {
      $message = 'Internal Google Cloud Storage error - cannot retrieve'
          . ' resumable upload URL at this time - please try again later.';
      throw new BatchJobException($message);
    } else {
      return $matches[1];
    }
  }

  /**
   * Post-processes the request content to conform to the requirements of
   * Google Cloud Storage.
   *
   * @param string $content the request content
   * @param bool $isFirstRequest if this is the first request of the batch job
   * @param bool $isLastRequest if this is the last request of the batch job
   * @return string the post-processed content
   */
  private function PostProcessContent($content, $isFirstRequest,
      $isLastRequest) {
    if (($isFirstRequest === true) && ($isLastRequest === true)) {
      return $content;
    }

    $content = $this->TrimStartEndElements($content, $isFirstRequest,
        $isLastRequest);

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

  /**
   * Returns the request content with the start or end mutate element removed,
   * depending on whether the request is the first and/or last request.
   *
   * @param string $content the request content
   * @param bool $isFirstRequest if this is the first request of the batch job
   * @param bool $isLastRequest if this is the last request of the batch job
   * @return string the trimmed request content
   */
  private function TrimStartEndElements($content, $isFirstRequest,
      $isLastRequest) {
    if ($isFirstRequest === false) {
      $content = preg_replace('/^.*?<operations/s', '<operations', $content);
    }
    if ($isLastRequest === false) {
      $content = preg_replace('/<\/ns1:mutate>\s*$/s', '', $content);
    }
    return $content;
  }
}
