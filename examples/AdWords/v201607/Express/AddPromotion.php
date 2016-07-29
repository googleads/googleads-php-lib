<?php
/**
 * This example adds a new promotion to an express businesses. To get
 * promotions, run GetPromotions.php.
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

// Enter parameters required by the code example.
$businessId = 'INSERT_BUSINESS_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 */
function AddPromotionExample(AdWordsUser $user, $businessId) {
  // PromotionService requires the businessId on the user.
  $user->SetExpressBusinessId($businessId);

  // Get the promotion service.
  $promotionService = $user->GetService('PromotionService',
    ADWORDS_VERSION);

  // Set up the new Promotion.
  $marsTourPromotion = new Promotion();
  $budget = new Money();
  $budget->microAmount = 1000000;
  $marsTourPromotion->name = 'Mars Tour Promotion ' . uniqid();
  $marsTourPromotion->status = 'PAUSED';
  $marsTourPromotion->destinationUrl = 'http://www.example.com';
  $marsTourPromotion->budget = $budget;
  $marsTourPromotion->callTrackingEnabled = true;

  // Criteria
  $criteria = array();

  // Criterion - Travel Agency product service
  $productService = new ProductService();
  $productService->text = 'Travel Agency';
  $criteria[] = $productService;

  // Criterion - English language
  // The ID can be found in the documentation:
  // https://developers.google.com/adwords/api/docs/appendix/languagecodes
  $language = new Language();
  $language->id = 1000;
  $criteria[] = $language;

  // Criterion - City of California
  $location = new Location();
  $location->id = 21137;
  $criteria[] = $location;

  $marsTourPromotion->criteria = $criteria;

  // Creatives
  $creatives = array();

  $creative1 = new Creative('Standard Mars Trip', 'Fly coach to Mars',
      'Free in-flight pretzels');
  $creatives[] = $creative1;

  $creative2 = new Creative('Deluxe Mars Trip', 'Fly first class to Mars',
      'Unlimited powdered orange drink');
  $creatives[] = $creative2;

  $marsTourPromotion->creatives = $creatives;

  $operations = array();

  $operation = new PromotionOperation();
  $operation->operand = $marsTourPromotion;
  $operation->operator = 'ADD';
  $operations[] = $operation;

  $result = $promotionService->mutate($operations);
  $addedPromotion = $result[0];

  printf("Added promotion ID %d with name '%s' to business ID %d\n",
      $addedPromotion->id, $addedPromotion->name, $businessId);
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
  AddPromotionExample($user, $businessId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
