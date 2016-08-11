<?php
/**
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
 * @subpackage v201607
 * @category   WebServices
 * @copyright  2015, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
require_once 'Google/Api/Ads/AdWords/Util/BatchJobException.php';
require_once 'Google/Api/Ads/AdWords/Util/v201607/BatchJobUtilsDelegate.php';
require_once 'Google/Api/Ads/Common/Util/AdsUtility.php';
require_once 'Google/Api/Ads/Common/Util/AdsUtilityRegistry.php';
require_once 'Google/Api/Ads/Common/Util/CurlUtils.php';

/**
 * A collection of utility methods for working with BatchJobService to upload
 * batch operations and download the results of batch processing.
 */
class BatchJobUtils {

  public static $CLASS_MAP = array(
      "ErrorList" => "ErrorList",
      "MutateResult" => "MutateResult",
      "Operand" => "Operand",
      "mutate" => "BatchJobOpsMutate",
      "mutateResponse" => "BatchJobOpsMutateResponse",
  );

  private $batchJobUtilsDelegate;
  private $adsUtilityRegistry;

  /**
   * Create an instance of BatchJobUtils with the specified upload URL, total
   * uploaded content bytes, CurlUtils object, BatchJobUtilsDelegate object and
   * ads utility registry.
   *
   * @param string $uploadUrl the upload URL to which the operations will be
   *     uploaded
   * @param int|null $totalContentBytes the total content bytes uploaded so far,
   *     used in incremental batch job uploads
   * @param CurlUtils|null $curlUtils the CurlUtils object for uploading batch
   *     job operations and downloading the results of batch job processing
   * @param BatchJobUtilsDelegate|null $batchJobUtilsDelegate the batch job
   *     utils delegate that uploads batch job operations and downloads the
   *     results
   * @param AdsUtilityRegistry|null $adsUtilityRegistry the ads utility registry
   */
  public function __construct(
      $uploadUrl,
      $totalContentBytes = null,
      CurlUtils $curlUtils = null,
      BatchJobUtilsDelegate $batchJobUtilsDelegate = null,
      AdsUtilityRegistry $adsUtilityRegistry = null
  ) {
    $this->batchJobUtilsDelegate = ($batchJobUtilsDelegate === null)
        ? new BatchJobUtilsDelegate($uploadUrl, $totalContentBytes, $curlUtils)
        : $batchJobUtilsDelegate;
    $this->adsUtilityRegistry = ($adsUtilityRegistry === null)
        ? AdsUtilityRegistry::getInstance()
        : $adsUtilityRegistry;
  }

  /**
   * Uploads batch job operations to the specified upload URL.
   *
   * @param array $operations operations to be uploaded via the upload URL
   *     $uploadUrl
   * @throws BatchJobException if the HTTP code is not equal to 200
   */
  public function UploadBatchJobOperations(array $operations) {
    // Starting with v201601, all uploads must go through the incremental
    // upload workflow.
    $this->UploadIncrementalBatchJobOperations($operations, true);
  }

  /**
   * Uploads batch job operations incrementally to the specified upload URL.
   *
   * @param array $operations operations to be uploaded via the upload URL
   * @param bool $isLastRequest if this is last upload request
   * @throws BatchJobException if the HTTP code is not equal to 200 and 308
   */
  public function UploadIncrementalBatchJobOperations(array $operations,
      $isLastRequest = null) {
    $this->adsUtilityRegistry->addUtility(AdsUtility::BATCHJOB_UTILS);
    $this->batchJobUtilsDelegate
        ->UploadIncrementalBatchJobOperations($operations, $isLastRequest);
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
    $this->adsUtilityRegistry->addUtility(AdsUtility::BATCHJOB_UTILS);
    return $this->batchJobUtilsDelegate->DownloadBatchJobResults($downloadUrl);
  }
}
