<?php
/**
 * This code example adds demographic target criteria to an ad group. To get
 * ad groups, run AddAdGroup.php.
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
 * @subpackage v201609
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
$adGroupId = 'INSERT_AD_GROUP_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 */
function AddAdGroupDemographicCriteriaExample(AdWordsUser $user, $adGroupId) {
  // Get the AdGroupCriterionService, which loads the required classes.
  $adGroupCriterionService = $user->GetService('AdGroupCriterionService',
      ADWORDS_VERSION);

  // Create biddable ad group criterion for gender
  $genderTarget = new Gender();
  // Criterion Id for male. The IDs can be found here
  // https://developers.google.com/adwords/api/docs/appendix/genders
  $genderTarget->id = 10;

  $genderBiddableAdGroupCriterion = new BiddableAdGroupCriterion();
  $genderBiddableAdGroupCriterion->adGroupId = $adGroupId;
  $genderBiddableAdGroupCriterion->criterion = $genderTarget;

  // Create negative ad group criterion for age range
  $ageRangeNegative = new AgeRange();
  // Criterion Id for age 18 to 24. The IDs can be found here
  // https://developers.google.com/adwords/api/docs/appendix/ages

  $ageRangeNegative->id = 503001;
  $ageRangeNegativeAdGroupCriterion = new NegativeAdGroupCriterion();
  $ageRangeNegativeAdGroupCriterion->adGroupId = $adGroupId;
  $ageRangeNegativeAdGroupCriterion->criterion = $ageRangeNegative;

  $operations = array();

  // Create operations.
  $genderBiddableAdGroupCriterionOperation = new AdGroupCriterionOperation();
  $genderBiddableAdGroupCriterionOperation->operand =
      $genderBiddableAdGroupCriterion;
  $genderBiddableAdGroupCriterionOperation->operator = 'ADD';
  $operations[] = $genderBiddableAdGroupCriterionOperation;

  $ageRangeNegativeAdGroupCriterionOperation = new AdGroupCriterionOperation();
  $ageRangeNegativeAdGroupCriterionOperation->operand =
      $ageRangeNegativeAdGroupCriterion;
  $ageRangeNegativeAdGroupCriterionOperation->operator = 'ADD';
  $operations[] = $ageRangeNegativeAdGroupCriterionOperation;

  // Make the mutate request.
  $result = $adGroupCriterionService->mutate($operations);

  // Display results.
  foreach ($result->value as $adGroupCriterion) {
    printf("Ad group criterion with ad group ID '%s', criterion ID '%s' " .
        "and type '%s' was added.\n", $adGroupCriterion->adGroupId,
         $adGroupCriterion->criterion->id,
         $adGroupCriterion->criterion->CriterionType);
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
  AddAdGroupDemographicCriteriaExample($user, $adGroupId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
