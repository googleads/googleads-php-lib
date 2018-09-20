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

namespace Google\AdsApi\AdWords\BatchJobs\v201809;

use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\BatchJobs\BatchJobUploadStatus;
use Google\AdsApi\AdWords\v201809\cm\ApiException;
use Google\AdsApi\AdWords\v201809\cm\MutateResult;
use Google\AdsApi\AdWords\v201809\cm\Operation;
use Google\AdsApi\Common\AdsUtility;
use Google\AdsApi\Common\AdsUtilityRegistry;
use GuzzleHttp\Client;

/**
 * Provides methods for uploading operations and downloading results using a
 * batch job upload URL generated from creating a new batch job using the
 * `BatchJobService`.
 *
 * @see BatchJobService
 * @see https://developers.google.com/adwords/api/docs/guides/batch-jobs
 */
final class BatchJobs
{

    private $batchJobsDelegate;
    private $adsUtilityRegistry;

    /**
     * Creates a `BatchJobs` object with the specified parameters.
     *
     * @param AdWordsSession $session the session used to connect to AdWords
     *     API
     * @param Client|null $httpClient optional, the Guzzle HTTP client whose
     *     handler stacks this library's logging middleware will be pushed to
     * @param string|null $mutateResultClassName the root class name for
     *     denormalization
     * @param BatchJobsDelegate|null $batchJobsDelegate the batch jobs
     *     delegate that uploads batch job operations and downloads the
     *     results
     * @param AdsUtilityRegistry|null $adsUtilityRegistry the ads utility
     *     registry
     */
    public function __construct(
        AdWordsSession $session,
        Client $httpClient = null,
        $mutateResultClassName = null,
        BatchJobsDelegate $batchJobsDelegate = null,
        AdsUtilityRegistry $adsUtilityRegistry = null
    ) {
        $this->batchJobsDelegate = ($batchJobsDelegate === null)
            ? new BatchJobsDelegate(
                $session,
                $httpClient,
                $mutateResultClassName
            )
            : $batchJobsDelegate;
        $this->adsUtilityRegistry = ($adsUtilityRegistry === null)
            ? AdsUtilityRegistry::getInstance()
            : $adsUtilityRegistry;
    }

    /**
     * Uploads all batch job operations to the specified upload URL.
     *
     * @param array $operations operations to be uploaded via the upload URL
     *     $uploadUrl
     * @param string $uploadUrl the upload URL for uploading operations
     * @return BatchJobUploadStatus the updated batch job upload status
     * @throws ApiException if the upload process failed
     */
    public function uploadBatchJobOperations(array $operations, $uploadUrl)
    {
        $this->adsUtilityRegistry->addUtility(AdsUtility::BATCH_JOBS);

        return $this->batchJobsDelegate->uploadBatchJobOperations(
            $operations,
            $uploadUrl
        );
    }

    /**
     * Uploads batch job operations incrementally to the specified upload URL.
     *
     * @param Operation[] $operations operations to be uploaded via the upload
     *     URL
     * @param BatchJobUploadStatus $batchJobUploadStatus the batch job upload
     *     status
     * @return BatchJobUploadStatus the updated batch job upload status
     * @throws ApiException if the upload process failed
     */
    public function uploadIncrementalBatchJobOperations(
        array $operations,
        BatchJobUploadStatus $batchJobUploadStatus
    ) {
        $this->adsUtilityRegistry->addUtility(AdsUtility::BATCH_JOBS);

        return $this->batchJobsDelegate->uploadIncrementalBatchJobOperations(
            $operations,
            $batchJobUploadStatus
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
        BatchJobUploadStatus $batchJobUploadStatus
    ) {
        $this->adsUtilityRegistry->addUtility(AdsUtility::BATCH_JOBS);

        return $this->batchJobsDelegate->closeIncrementalUpload(
            $batchJobUploadStatus
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
    public function downloadBatchJobResults($downloadUrl)
    {
        $this->adsUtilityRegistry->addUtility(AdsUtility::BATCH_JOBS);

        return $this->batchJobsDelegate->downloadBatchJobResults($downloadUrl);
    }
}
