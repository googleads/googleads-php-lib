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

namespace Google\AdsApi\AdWords\Testing\BatchJobs\v201809;

/**
 * Provides test data for `BatchJobs` tests.
 */
class BatchJobsTestProvider
{

    /**
     * Gets the contents of a batch job mutate request for testing.
     *
     * @return string
     */
    public static function getBatchJobMutateRequestXml()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR
            . 'batch-job-mutate-request.xml'
        );
    }

    /**
     * Gets the contents of a batch job mutate response for testing.
     *
     * @return string
     */
    public static function getBatchJobMutateResponseXml()
    {
        return file_get_contents(
            dirname(__FILE__) . DIRECTORY_SEPARATOR
            . 'batch-job-mutate-response.xml'
        );
    }

    /**
     * Gets a batch job operations for testing.
     *
     * @return FakeCampaignOperation[] the operations to be uploaded by
     *     BatchJobs
     */
    public static function getBatchJobOperations()
    {
        $operations = [];

        $campaign1 = new FakeCampaign();
        $campaign1->setId(-1);
        $campaign1->setName('Test campaign&<>"\'');
        $campaign1->setIsServing(true);
        $campaignOperation1 = new FakeCampaignOperation();
        $campaignOperation1->setOperand($campaign1);
        $campaignOperation1->setOperator('ADD');
        $operations[] = $campaignOperation1;

        $campaign2 = new FakeCampaign();
        $campaign2->setId(-2);
        $campaign2->setName('Test campaign 2 &<>"\'');
        $campaign2->setIsServing(0);
        $campaignOperation2 = new FakeCampaignOperation();
        $campaignOperation2->setOperand($campaign2);
        $campaignOperation2->setOperator('SET');
        $operations[] = $campaignOperation2;

        return $operations;
    }

    /**
     * Gets an array of batch job mutate result objects for testing.
     *
     * @return FakeMutateResult[] the array of mutate result object
     */
    public static function getMutateResultArray()
    {
        $apiError = new FakeValueViolationError();
        $apiError->setFieldPath('operations[0].operand.criterion.text');
        $apiError->setTrigger('text');
        $apiError->setErrorString('CriterionPolicyError.POLICY_ERROR');
        $apiError->setKey(2);
        $apiError->setIsExemptable(true);
        $apiError->setValue(1.5);
        $errorList = new FakeErrorList();
        $errorList->setErrors([$apiError]);

        $mutateResult1 = new FakeMutateResult();
        $mutateResult1->setErrorList($errorList);
        $mutateResult1->setIndex(0);

        $campaign = new FakeCampaign();
        $campaign->setId(12345);
        $campaign->setName('Test Campaign&<>"\'');
        $campaign->setIsServing(true);
        $campaign->setOperandType('');
        $operand = new FakeOperand();
        $operand->setCampaign($campaign);

        $mutateResult2 = new FakeMutateResult();
        $mutateResult2->setResult($operand);
        $mutateResult2->setIndex(1);

        $campaign = new FakeCampaign();
        $campaign->setId(9223372036854775900);
        $campaign->setName('Test large ID');
        $operand = new FakeOperand();
        $operand->setCampaign($campaign);

        $mutateResult3 = new FakeMutateResult();
        $mutateResult3->setResult($operand);
        $mutateResult3->setIndex(2);

        return [$mutateResult1, $mutateResult2, $mutateResult3];
    }
}
