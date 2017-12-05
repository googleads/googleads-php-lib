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
namespace Google\AdsApi\Examples\AdWords\v201710\Targeting;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201710\cm\ContentLabel;
use Google\AdsApi\AdWords\v201710\cm\ContentLabelType;
use Google\AdsApi\AdWords\v201710\cm\CustomerNegativeCriterion;
use Google\AdsApi\AdWords\v201710\cm\CustomerNegativeCriterionOperation;
use Google\AdsApi\AdWords\v201710\cm\CustomerNegativeCriterionService;
use Google\AdsApi\AdWords\v201710\cm\Operator;
use Google\AdsApi\AdWords\v201710\cm\Placement;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds various types of negative criteria to a customer. These
 * criteria will be applied to all campaigns for the customer.
 */
class AddCustomerNegativeCriteria {

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session) {
    $customerNegativeCriterionService = $adWordsServices->get($session,
        CustomerNegativeCriterionService::class);

    $criteria = [];

    // Exclude tragedy & conflict content.
    $tragedyContentLabel = new ContentLabel();
    $tragedyContentLabel->setContentLabelType(ContentLabelType::TRAGEDY);
    $criteria[] = $tragedyContentLabel;

    // Exclude a specific placement.
    $placement = new Placement();
    $placement->setUrl('http://www.example.com');
    $criteria[] = $placement;

    // Additional criteria types are available for this service. See the types
    // listed under Criterion here:
    // https://developers.google.com/adwords/api/docs/reference/latest/CustomerNegativeCriterionService.Criterion

    // Create operations to add each of the criteria above.
    $operations = [];
    foreach ($criteria as $criterion) {
      $negativeCriterion = new CustomerNegativeCriterion();
      $negativeCriterion->setCriterion($criterion);
      $operation = new CustomerNegativeCriterionOperation();
      $operation->setOperator(Operator::ADD);
      $operation->setOperand($negativeCriterion);
      $operations[] = $operation;
    }

    // Add the criteria on the server and print out some information.
    $result = $customerNegativeCriterionService->mutate($operations);
    foreach ($result->getValue() as $negativeCriterion) {
      printf(
          "Customer negative criterion with criterion ID %d and type '%s' was"
              . " added.\n",
          $negativeCriterion->getCriterion()->getId(),
          $negativeCriterion->getCriterion()->getType()
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
    self::runExample(new AdWordsServices(), $session);
  }
}

AddCustomerNegativeCriteria::main();
