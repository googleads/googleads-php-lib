<?php
/**
 * Copyright 2017 Google Inc. All Rights Reserved.
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

namespace Google\AdsApi\Examples\AdWords\v201802\CampaignManagement;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\BatchJobs\BatchJobUploadStatus;
use Google\AdsApi\AdWords\BatchJobs\v201802\BatchJobs;
use Google\AdsApi\AdWords\v201802\cm\AdGroupCriterionOperation;
use Google\AdsApi\AdWords\v201802\cm\ApiException;
use Google\AdsApi\AdWords\v201802\cm\BatchJob;
use Google\AdsApi\AdWords\v201802\cm\BatchJobError;
use Google\AdsApi\AdWords\v201802\cm\BatchJobErrorReason;
use Google\AdsApi\AdWords\v201802\cm\BatchJobOperation;
use Google\AdsApi\AdWords\v201802\cm\BatchJobService;
use Google\AdsApi\AdWords\v201802\cm\BatchJobStatus;
use Google\AdsApi\AdWords\v201802\cm\BiddableAdGroupCriterion;
use Google\AdsApi\AdWords\v201802\cm\Keyword;
use Google\AdsApi\AdWords\v201802\cm\KeywordMatchType;
use Google\AdsApi\AdWords\v201802\cm\Operator;
use Google\AdsApi\AdWords\v201802\cm\Predicate;
use Google\AdsApi\AdWords\v201802\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201802\cm\Selector;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use UnexpectedValueException;

/**
 * This code sample illustrates how to perform multiple requests using the
 * BatchJobService using incremental uploads.
 */
class AddKeywordsUsingIncrementalBatchJob
{

    const NUMBER_OF_KEYWORDS_TO_ADD = 100;
    const POLL_FREQUENCY_SECONDS = 30;
    const MAX_POLL_ATTEMPTS = 5;

    const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $adGroupId
    ) {
        $batchJobService = $adWordsServices->get($session, BatchJobService::class);

        // Create a BatchJob.
        $addOp = new BatchJobOperation();
        $addOp->setOperator(Operator::ADD);
        $addOp->setOperand(new BatchJob());

        $result = $batchJobService->mutate([$addOp]);
        $batchJob = $result->getValue()[0];

        // Get the upload URL from the new job.
        $uploadUrl = $batchJob->getUploadUrl()->getUrl();
        printf(
            "Created BatchJob with ID %d, status '%s' and upload URL '%s'.\n",
            $batchJob->getId(),
            $batchJob->getStatus(),
            $uploadUrl
        );

        // Use BatchJobs to upload all operations.
        $batchJobs = new BatchJobs($session);

        // Generate and upload the first set of operations.
        $adGroupCriterionOperations = self::buildAdGroupCriterionOperations($adGroupId);
        $batchJobUploadStatus = $batchJobs->uploadIncrementalBatchJobOperations(
            $adGroupCriterionOperations,
            new BatchJobUploadStatus($uploadUrl, $session)
        );
        printf(
            "Uploaded %d operations for batch job with ID %d.\n",
            count($adGroupCriterionOperations),
            $batchJob->getId()
        );

        // Generate and upload the second set of operations.
        $adGroupCriterionOperations = self::buildAdGroupCriterionOperations($adGroupId);
        $batchJobUploadStatus = $batchJobs->uploadIncrementalBatchJobOperations(
            $adGroupCriterionOperations,
            $batchJobUploadStatus
        );
        printf(
            "Uploaded %d operations for batch job with ID %d.\n",
            count($adGroupCriterionOperations),
            $batchJob->getId()
        );

        // Generate and upload the third and final set of operations.
        $adGroupCriterionOperations = self::buildAdGroupCriterionOperations($adGroupId);
        $batchJobUploadStatus = $batchJobs->uploadIncrementalBatchJobOperations(
            $adGroupCriterionOperations,
            $batchJobUploadStatus
        );
        printf(
            "Uploaded %d operations for batch job with ID %d.\n",
            count($adGroupCriterionOperations),
            $batchJob->getId()
        );
        $batchJobs->closeIncrementalUpload($batchJobUploadStatus);

        // Poll for completion of the batch job using an exponential back off.
        $pollAttempts = 0;
        $isPending = true;
        $wasCancelRequested = false;

        $selector = new Selector();
        $selector->setFields(
            ['Id', 'Status', 'DownloadUrl', 'ProcessingErrors', 'ProgressStats']
        );
        $selector->setPredicates(
            [
                new Predicate('Id', PredicateOperator::EQUALS, [$batchJob->getId()])
            ]
        );
        do {
            $sleepSeconds = self::POLL_FREQUENCY_SECONDS * pow(2, $pollAttempts);
            printf("Sleeping %d seconds...\n", $sleepSeconds);
            sleep($sleepSeconds);

            $batchJob = $batchJobService->get($selector)->getEntries()[0];
            printf(
                "Batch job ID %d has status '%s'.\n",
                $batchJob->getId(),
                $batchJob->getStatus()
            );

            $pollAttempts++;
            if ($batchJob->getStatus() !== BatchJobStatus::ACTIVE
                && $batchJob->getStatus() !== BatchJobStatus::AWAITING_FILE
                && $batchJob->getStatus() !== BatchJobStatus::CANCELING) {
                $isPending = false;
            }

            // Optional: Cancel the job if it has not completed after polling
            // MAX_POLL_ATTEMPTS times.
            if ($isPending && !$wasCancelRequested
                && $pollAttempts === self::MAX_POLL_ATTEMPTS) {
                $batchJob->setStatus(BatchJobStatus::CANCELING);
                $batchJobSetOperation = new BatchJobOperation();
                $batchJobSetOperation->setOperand($batchJob);
                $batchJobSetOperation->setOperator(Operator::SET);

                // Only request cancellation once per job.
                $wasCancelRequested = true;
                try {
                    $batchJob = $batchJobService->mutate([$batchJobSetOperation])->getValue()[0];
                    printf(
                        "Requested cancellation of batch job with ID %d.\n",
                        $batchJob->getId()
                    );
                    // Reset the poll attempt counter to wait for cancellation.
                    $pollAttempts = 0;
                } catch (ApiException $e) {
                    $errors = $e->getErrors();
                    if ($errors !== null
                        && count($errors) > 0
                        && $errors[0] instanceof BatchJobError) {
                        $batchJobError = $errors[0];
                        if ($batchJobError->getReason() === BatchJobErrorReason::INVALID_STATE_CHANGE) {
                            printf(
                                "Attempt to cancel batch job with ID %d was rejected because"
                                . " the job already completed or was canceled.\n",
                                $batchJob->getId()
                            );
                            continue;
                        }
                    }
                    throw $e;
                } finally {
                    // Reset the poll attempt counter to wait for cancellation.
                    $pollAttempts = 0;
                }
            }
        } while ($isPending && $pollAttempts <= self::MAX_POLL_ATTEMPTS);

        if ($isPending) {
            throw new UnexpectedValueException(
                sprintf(
                    'Job is still pending state after polling %d times.',
                    self::MAX_POLL_ATTEMPTS
                )
            );
        }

        if ($batchJob->getProcessingErrors() !== null) {
            $i = 0;
            foreach ($batchJob->getProcessingErrors() as $processingError) {
                printf(
                    " Processing error [%d]: errorType=%s, trigger=%s, errorString=%s, fieldPath=%s, reason=%s\n",
                    $i++,
                    $processingError->getApiErrorType(),
                    $processingError->getTrigger(),
                    $processingError->getErrorString(),
                    $processingError->getFieldPath(),
                    $processingError->getReason()
                );
            }
        } else {
            printf("No processing errors found.\n");
        }

        if ($batchJob->getDownloadUrl() !== null
            && $batchJob->getDownloadUrl()->getUrl() !== null) {
            $mutateResults = $batchJobs->downloadBatchJobResults(
                $batchJob->getDownloadUrl()->getUrl()
            );
            printf(
                "Downloaded results from %s:\n",
                $batchJob->getDownloadUrl()->getUrl()
            );

            if (count($mutateResults) === 0) {
                printf("  No results available.\n");
            } else {
                foreach ($mutateResults as $mutateResult) {
                    $outcome = $mutateResult->getErrorList() === null ? 'SUCCESS' : 'FAILURE';
                    printf(
                        "  Operation [%d] - %s\n",
                        $mutateResult->getIndex(),
                        $outcome
                    );
                }
            }
        } else {
            printf("No results available for download.\n");
        }
    }

    /**
     * Builds objects of AdGroupCriterionOperation for creating biddable criteria
     * (as keywords) for ad groups with the specified ID. 10% of keywords are
     * created with some invalid characters to demonstrate how `BatchJobService`
     * returns information about such errors.
     *
     * @param string $adGroupId the ID of the ad group to add the keywords to
     * @return array an array of AdGroupCriterionOperation
     */
    private static function buildAdGroupCriterionOperations($adGroupId)
    {
        $adGroupCriteriaOperations = [];

        $suffix = uniqid();
        // Create AdGroupCriterionOperations to add keywords.
        for ($i = 0; $i < self::NUMBER_OF_KEYWORDS_TO_ADD; $i++) {
            // Create Keyword.
            $text = sprintf("mars%s-%d", $suffix, $i);

            // Make 10% of keywords invalid to demonstrate error handling.
            if ($i % 10 === 0) {
                $text = $text . '!!!';
            }
            $keyword = new Keyword();
            $keyword->setText($text);
            $keyword->setMatchType(KeywordMatchType::BROAD);

            // Create BiddableAdGroupCriterion.
            $biddableAdGroupCriterion = new BiddableAdGroupCriterion();
            $biddableAdGroupCriterion->setAdGroupId($adGroupId);
            $biddableAdGroupCriterion->setCriterion($keyword);

            // Create AdGroupCriterionOperation.
            $operation = new AdGroupCriterionOperation();
            $operation->setOperand($biddableAdGroupCriterion);
            $operation->setOperator(Operator::ADD);

            // Add to list.
            $adGroupCriteriaOperations[] = $operation;
        }

        return $adGroupCriteriaOperations;
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()->withOAuth2Credential($oAuth2Credential)->build();
        self::runExample(
            new AdWordsServices(),
            $session,
            intval(self::AD_GROUP_ID)
        );
    }
}

AddKeywordsUsingIncrementalBatchJob::main();
