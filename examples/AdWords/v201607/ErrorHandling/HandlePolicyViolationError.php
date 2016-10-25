<?php
/**
 * This example demonstrates how to handle policy violation errors when creating
 * text ads.
 *
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
 * @package    GoogleApiAdsAdWords
 * @subpackage v201607
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

require_once UTIL_PATH . '/ErrorUtils.php';

// Enter parameters required by the code example.
$adGroupId = 'INSERT_AD_GROUP_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $adGroupId the if the ad group to add the text ads to
 */
function HandlePolicyViolationErrorExample(AdWordsUser $user, $adGroupId) {
  // Get the service, which loads the required classes.
  $adGroupAdService = $user->GetService('AdGroupAdService', ADWORDS_VERSION);

  // Get validateOnly version of the AdGroupAdService.
  $adGroupAdValidationService =
      $user->GetService('AdGroupAdService', ADWORDS_VERSION, null, null, true);

  // Create text ad that violates an exemptable policy. This ad will only
  // trigger an error in the production environment.
  $textAd = new TextAd();
  $textAd->headline = 'Mars Cruise !!!';
  $textAd->description1 = 'Visit the Red Planet in style.';
  $textAd->description2 = 'Low-gravity fun for everyone!';
  $textAd->displayUrl = 'www.example.com';
  $textAd->finalUrls = array('http://www.example.com/');

  // Create ad group ad.
  $adGroupAd = new AdGroupAd();
  $adGroupAd->adGroupId = $adGroupId;
  $adGroupAd->ad = $textAd;

  // Create operation.
  $operation = new AdGroupAdOperation();
  $operation->operand = $adGroupAd;
  $operation->operator = 'ADD';

  $operations = array($operation);

  try {
    // Make the mutate request.
    $result = $adGroupAdValidationService->mutate($operations);
  } catch (SoapFault $fault) {
    $errors = ErrorUtils::GetApiErrors($fault);
    if (sizeof($errors) == 0) {
      // Not an API error, so throw fault.
      throw $fault;
    }
    $operationIndicesToRemove = array();
    foreach ($errors as $error) {
      if ($error->ApiErrorType == 'PolicyViolationError') {
        $operationIndex = ErrorUtils::GetSourceOperationIndex($error);
        $operation = $operations[$operationIndex];
        printf("Ad with headline '%s' violated %s policy '%s'.\n",
            $operation->operand->ad->headline,
            $error->isExemptable ? 'exemptable' : 'non-exemptable',
            $error->externalPolicyName);
        if ($error->isExemptable) {
          // Add exemption request to the operation.
          printf("Adding exemption request for policy name '%s' on text "
              ."'%s'.\n", $error->key->policyName, $error->key->violatingText);
          $operation->exemptionRequests[] = new ExemptionRequest($error->key);
        } else {
          // Remove non-exemptable operation.
          print "Removing the operation from the request.\n";
          $operationIndicesToRemove[] = $operationIndex;
        }
      } else {
        // Non-policy error returned, throw fault.
        throw $fault;
      }
    }
    $operationIndicesToRemove = array_unique($operationIndicesToRemove);
    rsort($operationIndicesToRemove, SORT_NUMERIC);
    foreach ($operationIndicesToRemove as $operationIndex) {
      unset($operations[$operationIndex]);
    }
  }

  if (sizeof($operations) > 0) {
    // Retry the mutate request.
    $result = $adGroupAdService->mutate($operations);

    // Display results.
    foreach ($result->value as $adGroupAd) {
      printf("Text ad with headline '%s' and ID '%s' was added.\n",
          $adGroupAd->ad->headline, $adGroupAd->ad->id);
    }
  } else {
    print "All the operations were invalid with non-exemptable errors.\n";
  }
}

// Don't run the example if the file is being included.
if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
  return;
}

try {
  // Get AdWordsUser from credentials in "../auth.ini"
  // relative to the AdWordsUser.php file's directory.
  $user = new AdWordsUser();

  // Log every SOAP XML request and response.
  $user->LogAll();

  // Run the example.
  HandlePolicyViolationErrorExample($user, $adGroupId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
