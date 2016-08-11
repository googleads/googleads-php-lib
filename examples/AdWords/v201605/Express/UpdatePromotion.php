<?php
/**
 * This example updates a promotion for an express businesses. To add a
 * promotion, run AddPromotion.php.
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
 * @subpackage v201605
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
$businessId = 'INSERT_BUSINESS_ID_HERE';
$promotionId = 'INSERT_PROMOTION_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 */
function UpdatePromotionExample(AdWordsUser $user, $businessId, $promotionId) {
  // PromotionService requires the businessId on the user.
  $user->SetExpressBusinessId($businessId);

  // Get the service, which loads the required classes.
  $promotionService = $user->GetService('PromotionService',
    ADWORDS_VERSION);

  // Update the budget for the promotion.
  $promotion = new Promotion();
  $promotion->id = $promotionId;
  $newBudget = new Money();
  $newBudget->microAmount = 2000000;
  $promotion->budget = $newBudget;

  $operations = array();

  $operation = new PromotionOperation();
  $operation->operand = $promotion;
  $operation->operator = 'SET';
  $operations[] = $operation;

  $result = $promotionService->mutate($operations);
  $mutatedPromotion = $result[0];

  printf("Promotion ID %d for business ID %d now has budget micro amount %d\n",
    $mutatedPromotion->id, $businessId,
    $mutatedPromotion->budget->microAmount);
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
  UpdatePromotionExample($user, $businessId, $promotionId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
