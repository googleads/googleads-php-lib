<?php
/**
 * A collection of utility methods for working with BatchJobService to upload
 * batch operations and download the results of batch processing.
 *
 * PHP version 5
 *
 * Copyright 2015, Google Inc. All Rights Reserved.
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
 * @subpackage v201509
 * @category   WebServices
 * @copyright  2015, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
require_once 'Google/Api/Ads/AdWords/Lib/AdWordsUser.php';
require_once 'Google/Api/Ads/AdWords/Util/BatchJobException.php';
require_once 'Google/Api/Ads/AdWords/Util/v201509/BatchJobClasses.php';
require_once 'Google/Api/Ads/AdWords/Util/XmlDeserializer.php';
require_once 'Google/Api/Ads/AdWords/Util/XmlSerializer.php';
require_once 'Google/Api/Ads/Common/Util/CurlUtils.php';
require_once 'Google/Api/Ads/Common/Util/Logger.php';
require_once 'Google/Api/Ads/Common/Util/XmlUtils.php';

/**
 * A collection of utiltiy method for working with BatchJobService to upload
 * batch operations and download the results of batch processing.
 *
 * @package GoogleApiAdsAdWordsUtil
 * @subpackage v201509
 */
class BatchJobUtils {

  private static $UPLOAD_URL_HEADER_CONTENT_TYPE = 'application/xml';
  private static $DOWNLOAD_URL_ACCEPT_ENCODING = 'gzip';

  public static $CLASS_MAP = array(
      "ErrorList" => "ErrorList",
      "MutateResult" => "MutateResult",
      "Operand" => "Operand",
      "mutate" => "BatchJobOpsMutate",
      "mutateResponse" => "BatchJobOpsMutateResponse",
  );

  private $curlUtils;

  /**
   * Create an instance of BatchJobUtils with passed CurlUtils objects as its
   * properties.
   *
   * @param CurlUtils $curlUtils the CurlUtils object for uploading batch
   *     job operations and downloading the results of batch job processing
   */
  public function __construct(CurlUtils $curlUtils = null) {
    $this->curlUtils = ($curlUtils === null) ? new CurlUtils() : $curlUtils;
  }

  /**
   * Uploads batch job operations to the specified upload URL.
   *
   * @param array $operations operations to be uploaded via the upload URL
   *     $uploadUrl
   * @param string $uploadUrl the upload URL to which the operations are
   *     uploaded
   * @throws BatchJobException if the HTTP code is not equal to 200
   */
  public function UploadBatchJobOperations(array $operations,
      $uploadUrl) {
    $uploadRequest = $this->PrepareUploadRequest($operations);
    $flatHeaders = array();
    foreach ($uploadRequest['headers'] as $name => $value) {
      $flatHeaders[] = sprintf('%s: %s', $name, $value);
    }

    $ch = $this->curlUtils->CreateSession($uploadUrl);
    $this->curlUtils->SetOpt($ch, CURLOPT_POST, true);
    $this->curlUtils->SetOpt($ch, CURLINFO_HEADER_OUT, true);
    $this->curlUtils->SetOpt($ch, CURLOPT_HTTPHEADER, $flatHeaders);
    $this->curlUtils->SetOpt($ch, CURLOPT_POSTFIELDS,
        $uploadRequest['body']);

    $response = $this->curlUtils->Exec($ch);
    $errorMessage = $this->curlUtils->Error($ch);
    $httpCode = $this->curlUtils->GetInfo($ch, CURLINFO_HTTP_CODE);

    $this->curlUtils->Close($ch);

    if ($httpCode != 200) {
      throw new BatchJobException(
        sprintf("Error message: %s, HTTP code %d.", $errorMessage, $httpCode));
    }
  }

  /**
   * Creates the headers and body of HTTP upload request that will be used to
   * upload batch operations to.
   *
   * @param array $operations operations to be uploaded to the upload URL
   * @return array an associative array containing the headers and body of HTTP
   *     upload request
   */
  private function PrepareUploadRequest(array $operations) {
    $headers = array('Content-Type' => self::$UPLOAD_URL_HEADER_CONTENT_TYPE);

    $batchJobOpsMutate = new BatchJobOpsMutate();
    $batchJobOpsMutate->operations = $operations;
    // Get body of this HTTP upload request.
    $serializer = new XmlSerializer();
    $xml = $serializer->ConvertObjectToXml($batchJobOpsMutate, 'ns1:mutate',
        true);
    return array('headers' => $headers, 'body' => $xml);
  }

  /**
   * Downloads the results of batch processing from $downloadUrl.
   *
   * @param string $downloadUrl the download URL from which the results are
   *     downloaded
   * @throws BatchJobException if the HTTP code is not equal to 200
   * @return string the contents of returned HTTP response
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
}
