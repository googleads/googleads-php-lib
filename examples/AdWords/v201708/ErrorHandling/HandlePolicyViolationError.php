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
namespace Google\AdsApi\Examples\AdWords\v201708\ErrorHandling;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201708\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201708\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201708\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201708\cm\ApiException;
use Google\AdsApi\AdWords\v201708\cm\ExemptionRequest;
use Google\AdsApi\AdWords\v201708\cm\ExpandedTextAd;
use Google\AdsApi\AdWords\v201708\cm\Operator;
use Google\AdsApi\AdWords\v201708\cm\PolicyViolationError;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example demonstrates how to handle policy violation errors when creating
 * text ads.
 */
class HandlePolicyViolationError {

  const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $adGroupId) {
    $session->setValidateOnly(true);
    $adGroupAdService =
        $adWordsServices->get($session, AdGroupAdService::class);

    // Create text ad that violates an exemptable policy.
    $expandedTextAd = new ExpandedTextAd();
    $expandedTextAd->setHeadlinePart1('Mars Cruise !!!');
    $expandedTextAd->setHeadlinePart2('Visit the Red Planet in style.');
    $expandedTextAd->setDescription('Low-gravity fun for everyone!');
    $expandedTextAd->setFinalUrls(['http://www.example.com']);

    // Create ad group ad.
    $adGroupAd = new AdGroupAd();
    $adGroupAd->setAdGroupId($adGroupId);
    $adGroupAd->setAd($expandedTextAd);

    // Create ad group ad operation and add it to the list.
    $operations = [];
    $operation = new AdGroupAdOperation();
    $operation->setOperand($adGroupAd);
    $operation->setOperator(Operator::ADD);
    $operations[] = $operation;

    try {
      // Try creating an ad group ad on the server.
      $adGroupAdService->mutate($operations);
    } catch (ApiException $apiException) {
      $operationIndicesToRemove = [];
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
        if ($error instanceof PolicyViolationError) {
          printf("Ad with headline part 1 '%s' violated %s policy '%s'.\n",
              $operation->getOperand()->getAd()->getHeadlinePart1(),
              $error->getIsExemptable() ? 'exemptable' : 'non-exemptable',
              $error->getExternalPolicyName()
          );
          if ($error->getIsExemptable() === true) {
            // Add exemption request to the operation.
            printf(
                "Adding exemption request for policy name '%s' on text "
                    ."'%s'.\n",
                $error->getKey()->getPolicyName(),
                $error->getKey()->getViolatingText()
            );
            $operation->setExemptionRequests(
                [new ExemptionRequest($error->getKey())]);
          } else {
            // Remove non-exemptable operation.
          print "Removing non-exemptable operation from the request.\n";
            $operationIndicesToRemove[] = $operationIndex;
          }
        } else {
          // Non-policy error returned.
          printf(
              "Ad with headline part 1 '%s' created non-policy error '%s'.\n",
              $operation->getOperand()->getAd()->getHeadlinePart1(),
              $error->getErrorString()
          );
          print "Removing the operation causing non-policy error from the "
              . "request.\n";
          $operationIndicesToRemove[] = $operationIndex;
        }
      }
      $operationIndicesToRemove = array_unique($operationIndicesToRemove);
      rsort($operationIndicesToRemove, SORT_NUMERIC);
      foreach ($operationIndicesToRemove as $operationIndex) {
        unset($operations[$operationIndex]);
      }
    }

    if (count($operations) > 0) {
      // Make the mutate request to really add an ad group ad.
      $session->setValidateOnly(false);
      $result = $adGroupAdService->mutate($operations);

      // Print out some information about the created ad group ad.
      foreach ($result->getValue() as $adGroupAd) {
        printf(
            "Expanded text ad with headline part 1 '%s' and ID '%s' was added."
                . "\n",
            $adGroupAd->getAd()->getHeadlinePart1(),
            $adGroupAd->getAd()->getId()
        );
      }
    } else {
      print "All the operations were invalid with non-exemptable errors.\n";
    }
  }

  public static function main() {
    // Generate a refreshable OAuth2 credential for authentication.
    $oAuth2Credential = (new OAuth2TokenBuilder())
        ->fromFile()
        ->build();

    // Construct an API session configured from a properties file and the OAuth2
    // credentials above.
    // Partial failure behavior is also enabled in this example.
    $session = (new AdWordsSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential)
        ->build();
    self::runExample(
        new AdWordsServices(), $session, intval(self::AD_GROUP_ID));
  }
}

HandlePolicyViolationError::main();
