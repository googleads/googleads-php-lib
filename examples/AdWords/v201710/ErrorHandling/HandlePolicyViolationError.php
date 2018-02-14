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

namespace Google\AdsApi\Examples\AdWords\v201710\ErrorHandling;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201710\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201710\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201710\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201710\cm\ApiError;
use Google\AdsApi\AdWords\v201710\cm\ApiException;
use Google\AdsApi\AdWords\v201710\cm\ExemptionRequest;
use Google\AdsApi\AdWords\v201710\cm\ExpandedTextAd;
use Google\AdsApi\AdWords\v201710\cm\Operator;
use Google\AdsApi\AdWords\v201710\cm\PolicyViolationError;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example demonstrates how to handle policy violation errors when creating
 * text ads.
 */
class HandlePolicyViolationError
{

    const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $adGroupId
    ) {
        $session->setValidateOnly(true);
        $adGroupAdService = $adWordsServices->get($session, AdGroupAdService::class);

        $operations = [];

        // Create text ad that violates an exemptable policy.
        $exemptableExpandedTextAd = new ExpandedTextAd();
        $exemptableExpandedTextAd->setHeadlinePart1('Mars Cruise !!!');
        $exemptableExpandedTextAd->setHeadlinePart2('Best space cruise line.');
        $exemptableExpandedTextAd->setDescription(
            'Visit the Red Planet in style.'
        );
        $exemptableExpandedTextAd->setFinalUrls(['http://www.example.com']);

        // Create ad group ad.
        $exemptableAdGroupAd = new AdGroupAd();
        $exemptableAdGroupAd->setAdGroupId($adGroupId);
        $exemptableAdGroupAd->setAd($exemptableExpandedTextAd);

        // Create ad group ad operation and add it to the list.
        $exemptableOperation = new AdGroupAdOperation();
        $exemptableOperation->setOperand($exemptableAdGroupAd);
        $exemptableOperation->setOperator(Operator::ADD);
        $operations[] = $exemptableOperation;

        // Create text ad that violates a non-exemptable policy.
        $nonExemptableExpandedTextAd = new ExpandedTextAd();
        $nonExemptableExpandedTextAd->setHeadlinePart1(
            'Mars Cruise with too long of a headline.'
        );
        $nonExemptableExpandedTextAd->setHeadlinePart2('Best space cruise line.');
        $nonExemptableExpandedTextAd->setDescription(
            'Visit the Red Planet in style.'
        );
        $nonExemptableExpandedTextAd->setFinalUrls(['http://www.example.com']);

        // Create ad group ad.
        $nonExemptableAdGroupAd = new AdGroupAd();
        $nonExemptableAdGroupAd->setAdGroupId($adGroupId);
        $nonExemptableAdGroupAd->setAd($nonExemptableExpandedTextAd);

        // Create ad group ad operation and add it to the list.
        $nonExemptableOperation = new AdGroupAdOperation();
        $nonExemptableOperation->setOperand($nonExemptableAdGroupAd);
        $nonExemptableOperation->setOperator(Operator::ADD);
        $operations[] = $nonExemptableOperation;

        $operationIndicesToRetryBucket = [];
        try {
            // Validate the ads.
            $adGroupAdService->mutate($operations);
        } catch (ApiException $apiException) {
            foreach ($apiException->getErrors() as $error) {
                // Get the index of the failed operation from the error's field path
                // elements.
                $fieldPathElements = $error->getFieldPathElements();
                $firstFieldPathElement = null;
                if ($fieldPathElements !== null && count($fieldPathElements) > 0) {
                    $firstFieldPathElement = $fieldPathElements[0];
                }
                if ($firstFieldPathElement === null
                    || $firstFieldPathElement->getField() !== 'operations'
                    || $firstFieldPathElement->getIndex() === null) {
                    // If the operation index is not present on the first error field
                    // path element, then there's no way to determine which operation to
                    // remove, so simply throw the exception.
                    throw $apiException;
                }
                $operationIndex = $firstFieldPathElement->getIndex();
                $operation = $operations[$operationIndex];
                if (self::handleApiError($error, $operationIndex, $operation)) {
                    // Store the index of operations we want to retry as indices of the
                    // bucket.
                    $operationIndicesToRetryBucket[$operationIndex] = 1;
                } else {
                    printf(
                        "Removing operation with non-exemptable error at index %d.\n",
                        $operationIndex
                    );
                }
            }
            $operationsToRetry = [];
            foreach (array_keys($operationIndicesToRetryBucket) as $operationIndexToRetry) {
                $operationsToRetry[] = $operations[$operationIndexToRetry];
            }
        }

        if (count($operationsToRetry) > 0) {
            // Make the mutate request to really add an ad group ad.
            $session->setValidateOnly(false);
            $result = $adGroupAdService->mutate($operationsToRetry);

            // Print out some information about the created ad group ad.
            foreach ($result->getValue() as $adGroupAd) {
                printf(
                    "Expanded text ad with headline '%s - %s' and ID '%s' was added.\n",
                    $adGroupAd->getAd()->getHeadlinePart1(),
                    $adGroupAd->getAd()->getHeadlinePart2(),
                    $adGroupAd->getAd()->getId()
                );
            }
        } else {
            print "No ads were added.\n";
        }
    }

    /**
     * Checks the given error and performs the appropriate action based on
     * whether it is an exemptable policy violation error.
     */
    private static function handleApiError(
        ApiError $apiError,
        $operationIndex,
        AdGroupAdOperation $operation
    ) {
        $isExemptableError = false;
        $policyViolationError = null;

        $expandedTextAd = $operation->getOperand()->getAd();
        if ($apiError instanceof PolicyViolationError) {
            printf(
                "Ad with headline '%s - %s' violated %s policy '%s'.\n",
                $expandedTextAd->getHeadlinePart1(),
                $expandedTextAd->getHeadlinePart2(),
                $apiError->getIsExemptable() ? 'exemptable' : 'non-exemptable',
                $apiError->getExternalPolicyName()
            );
            $isExemptableError = $apiError->getIsExemptable();
        }

        if ($isExemptableError) {
            // Add exemption request to the operation.
            printf(
                "Adding exemption request for policy name '%s' on text '%s' to operation at index %d.\n",
                $apiError->getKey()->getPolicyName(),
                $apiError->getKey()->getViolatingText(),
                $operationIndex
            );
            if ($operation->getExemptionRequests() === null) {
                $exemptionRequests = [];
            } else {
                $exemptionRequests = $operation->getExemptionRequests();
            }
            $exemptionRequests[] = new ExemptionRequest($apiError->getKey());
            $operation->setExemptionRequests($exemptionRequests);
        }

        return $isExemptableError;
    }


    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        // Partial failure behavior is also enabled in this example.
        $session = (new AdWordsSessionBuilder())->fromFile()->withOAuth2Credential($oAuth2Credential)->build();
        self::runExample(
            new AdWordsServices(),
            $session,
            intval(self::AD_GROUP_ID)
        );
    }
}

HandlePolicyViolationError::main();
