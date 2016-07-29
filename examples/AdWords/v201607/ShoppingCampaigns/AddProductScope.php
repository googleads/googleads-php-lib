<?php
/**
 * This example restricts the products that will be included in the campaign by
 * setting a ProductScope.
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
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

$campaignId = 'INSERT_CAMPAIGN_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param int $campaignId the campaign to modify
 */
function addProductScopeExample(AdWordsUser $user, $campaignId) {
  // Get the CampaignCriterionService, which loads the required classes.
  $campaignCriterionService = $user->GetService('CampaignCriterionService',
        ADWORDS_VERSION);

  $productScope = new ProductScope();
  // This set of dimensions is for demonstration purposes only. It would be
  // extremely unlikely that you want to include so many dimensions in your
  // product scope.
  $productScope->dimensions[] = new ProductBrand('Nexus');
  $productScope->dimensions[] = new ProductCanonicalCondition('NEW');
  $productScope->dimensions[] =
      new ProductCustomAttribute('CUSTOM_ATTRIBUTE_0', 'my attribute value');
  $productScope->dimensions[] = new ProductOfferId('book1');
  $productScope->dimensions[] = new ProductType('PRODUCT_TYPE_L1', 'Media');
  $productScope->dimensions[] = new ProductType('PRODUCT_TYPE_L2', 'Books');
  // The value for the bidding category is a fixed ID for the 'Luggage & Bags'
  // category. You can retrieve IDs for categories from the ConstantDataService.
  // See the 'GetProductCategoryTaxonomy' example for more details.
  $productScope->dimensions[] =
      new ProductBiddingCategory('BIDDING_CATEGORY_L1', '-5914235892932915235');

  $campaignCriterion = new CampaignCriterion();
  $campaignCriterion->campaignId = $campaignId;
  $campaignCriterion->criterion = $productScope;

  // Create operation.
  $operation = new CampaignCriterionOperation();
  $operation->operand = $campaignCriterion;
  $operation->operator = 'ADD';

  // Make the mutate request.
  $result = $campaignCriterionService->mutate(array($operation));

  printf("Created a ProductScope criterion with ID '%s'",
        $result->value[0]->criterion->id);
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
  addProductScopeExample($user, $campaignId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
