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
namespace Google\AdsApi\Examples\AdWords\v201609\BasicOperations;

require '../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201609\cm\AdGroupCriterionOperation;
use Google\AdsApi\AdWords\v201609\cm\AdGroupCriterionService;
use Google\AdsApi\AdWords\v201609\cm\AgeRange;
use Google\AdsApi\AdWords\v201609\cm\BiddableAdGroupCriterion;
use Google\AdsApi\AdWords\v201609\cm\Gender;
use Google\AdsApi\AdWords\v201609\cm\NegativeAdGroupCriterion;
use Google\AdsApi\AdWords\v201609\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds demographic target criteria to an ad group.
 * To get ad groups, run AddAdGroup.php.
 */
class AddAdGroupDemographicCriteria {

  const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $adGroupId) {
    $adGroupCriterionService =
        $adWordsServices->get($session, AdGroupCriterionService::class);

    $operations = [];

    // Create biddable ad group criterion for gender.
    $genderTarget = new Gender();
    // ID for "male" criterion. The IDs can be found here:
    // https://developers.google.com/adwords/api/docs/appendix/genders
    $genderTarget->setId(10);
    $genderBiddableAdGroupCriterion = new BiddableAdGroupCriterion();
    $genderBiddableAdGroupCriterion->setAdGroupId($adGroupId);
    $genderBiddableAdGroupCriterion->setCriterion($genderTarget);

    // Create an ad group criterion operation and add it to the list.
    $genderBiddableAdGroupCriterionOperation = new AdGroupCriterionOperation();
    $genderBiddableAdGroupCriterionOperation->setOperand(
        $genderBiddableAdGroupCriterion);
    $genderBiddableAdGroupCriterionOperation->setOperator(Operator::ADD);
    $operations[] = $genderBiddableAdGroupCriterionOperation;

    // Create negative ad group criterion for age range.
    $ageRangeNegative = new AgeRange();
    // Criterion ID for age 18 to 24. The IDs can be found here:
    // https://developers.google.com/adwords/api/docs/appendix/ages
    $ageRangeNegative->setId(503001);
    $ageRangeNegativeAdGroupCriterion = new NegativeAdGroupCriterion();
    $ageRangeNegativeAdGroupCriterion->setAdGroupId($adGroupId);
    $ageRangeNegativeAdGroupCriterion->setCriterion($ageRangeNegative);

    // Create an ad group criterion operation and add it to the list.
    $ageRangeNegativeAdGroupCriterionOperation =
        new AdGroupCriterionOperation();
    $ageRangeNegativeAdGroupCriterionOperation->setOperand(
        $ageRangeNegativeAdGroupCriterion);
    $ageRangeNegativeAdGroupCriterionOperation->setOperator(Operator::ADD);
    $operations[] = $ageRangeNegativeAdGroupCriterionOperation;

    // Create the ad group criteria on the server and print out some information
    // for each created ad group criterion.
    $result = $adGroupCriterionService->mutate($operations);
    foreach ($result->getValue() as $adGroupCriterion) {
      printf(
          "Ad group criterion with ad group ID %d, criterion ID %d "
              . "and type '%s' was added.\n",
          $adGroupCriterion->getAdGroupId(),
          $adGroupCriterion->getCriterion()->getId(),
          $adGroupCriterion->getCriterion()->getType()
      );
    }
  }

  public static function main() {
    // Generate a refreshable OAuth2 credential for authentication.
    $oAuth2Credential = (new OAuth2TokenBuilder())
        ->fromFile()
        ->build();

    // Construct an API session configured from a properties file and the OAuth2
    // credentials above.
    $session = (new AdWordsSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential)
        ->build();
    self::runExample(
        new AdWordsServices(), $session, intval(self::AD_GROUP_ID));
  }
}

AddAdGroupDemographicCriteria::main();
