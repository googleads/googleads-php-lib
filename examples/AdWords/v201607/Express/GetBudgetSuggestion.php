<?php
/**
 * This example shows how to retrieve an AdWords Express budget suggestion.
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

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 */
function GetBudgetSuggestionExample(AdWordsUser $user) {
  // Get the service, which loads the required classes.
  $budgetSuggestionService = $user->GetService('BudgetSuggestionService',
    ADWORDS_VERSION);

  $criteria = array();

  // Create selector.
  $selector = new BudgetSuggestionSelector();

  // Criterion - Travel Agency product/service.
  // See GetProductServicesExample.php for an example of how to get valid
  // product/service settings.
  $productService = new ProductService();
  $productService->text = "Travel Agency";
  $productService->locale = "en_US";
  $criteria[] = $productService;

  // Criterion - English language.
  // The ID can be found in the documentation:
  // https://developers.google.com/adwords/api/docs/appendix/languagecodes
  $language = new Language();
  $language->id = 1000;
  $criteria[] = $language;

  // Criterion - Mountain View, California location.
  // The ID can be found in the documentation:
  // https://developers.google.com/adwords/api/docs/appendix/geotargeting
  // https://developers.google.com/adwords/api/docs/appendix/cities-DMAregions
  $location = new Location();
  $location->id = 1014044;
  $criteria[] = $location;

  $selector->criteria = $criteria;

  $budgetSuggestion = $budgetSuggestionService->get($selector);

  printf(
      "Budget suggestion for criteria is:\n" .
          "  SuggestedBudget=%s\n" .
          "  Min/MaxBudget=%s/%s\n" .
          "  Min/MaxCpc=%s/%s\n" .
          "  CPM=%s\n" .
          "  CPC=%s\n" .
          "  Impressions=%d\n",
      toString($budgetSuggestion->suggestedBudget),
      toString($budgetSuggestion->minBudget),
      toString($budgetSuggestion->maxBudget),
      toString($budgetSuggestion->minCpc),
      toString($budgetSuggestion->maxCpc),
      toString($budgetSuggestion->cpm),
      toString($budgetSuggestion->cpc),
      $budgetSuggestion->impressions
  );
}

function toString($money) {
  if (!$money) return '';
  return strval($money->microAmount);
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
  GetBudgetSuggestionExample($user);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
