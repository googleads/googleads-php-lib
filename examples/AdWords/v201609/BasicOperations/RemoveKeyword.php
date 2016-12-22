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
use Google\AdsApi\AdWords\v201609\cm\AdGroupCriterion;
use Google\AdsApi\AdWords\v201609\cm\AdGroupCriterionOperation;
use Google\AdsApi\AdWords\v201609\cm\AdGroupCriterionService;
use Google\AdsApi\AdWords\v201609\cm\Criterion;
use Google\AdsApi\AdWords\v201609\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example removes a keyword.
 */
class RemoveKeyword {

  const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';
  const CRITERION_ID = 'INSERT_KEYWORD_CRITERION_ID_HERE';

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $adGroupId, $criterionId) {
    $adGroupCriterionService =
        $adWordsServices->get($session, AdGroupCriterionService::class);

    // Create criterion using an existing ID. Use the base class Criterion
    // instead of Keyword to avoid having to set keyword-specific fields.
    $criterion = new Criterion();
    $criterion->setId($criterionId);

    // Create an ad group criterion.
    $adGroupCriterion = new AdGroupCriterion();
    $adGroupCriterion->setAdGroupId($adGroupId);
    $adGroupCriterion->setCriterion($criterion);

    // Create an ad group criterion operation and add it the operations list.
    $operation = new AdGroupCriterionOperation();
    $operation->setOperand($adGroupCriterion);
    $operation->setOperator(Operator::REMOVE);
    $operations = [$operation];

    // Remove criterion on the server.
    $result = $adGroupCriterionService->mutate($operations);

    // Print out some information for the removed keyword.
    $adGroupCriterion = $result->getValue()[0];
    printf("Keyword with ID '%d' was removed.\n",
        $adGroupCriterion->getCriterion()->getId());
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
        new AdWordsServices(),
        $session,
        intval(self::AD_GROUP_ID),
        intval(self::CRITERION_ID)
    );
  }
}

RemoveKeyword::main();
