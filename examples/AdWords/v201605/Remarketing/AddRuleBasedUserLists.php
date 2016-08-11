<?php
/**
 * This example adds two rule-based remarketing user lists: one with no site
 * visit date restrictions, and another that will only include users who visit
 * your site in the next six months.
 *
 * PHP version 5
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

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 */
function AddRuleBasedUserLists(AdWordsUser $user) {
  // Get the services, which loads the required classes.
  $userListService = $user->GetService('AdwordsUserListService',
      ADWORDS_VERSION);

  // First rule item group - users who visited the checkout page and had more
  // than one item in their shopping cart.
  $checkoutStringRuleItem = new StringRuleItem();
  $checkoutStringKey = new StringKey();
  $checkoutStringKey->name = 'ecomm_pagetype';
  $checkoutStringRuleItem->key = $checkoutStringKey;
  $checkoutStringRuleItem->op = 'EQUALS';
  $checkoutStringRuleItem->value = 'checkout';
  $checkoutRuleItem = new RuleItem();
  $checkoutRuleItem->StringRuleItem = $checkoutStringRuleItem;

  $cartSizeNumberRuleItem = new NumberRuleItem();
  $cartSizeNumberKey = new NumberKey();
  $cartSizeNumberKey->name = 'cartsize';
  $cartSizeNumberRuleItem->key = $cartSizeNumberKey;
  $cartSizeNumberRuleItem->op = 'GREATER_THAN';
  $cartSizeNumberRuleItem->value = 1.0;
  $cartSizeRuleItem = new RuleItem();
  $cartSizeRuleItem->NumberRuleItem = $cartSizeNumberRuleItem;

  // Combine the two rule items into a RuleItemGroup so AdWords will AND their
  // rules together.
  $checkoutMultipleItemGroup = new RuleItemGroup();
  $checkoutMultipleItemGroup->items = array($checkoutRuleItem,
      $cartSizeRuleItem);

  // Second rule item group - users who checked out within the next 3 months.
  $today = new DateTime();
  $startDateDateRuleItem = new DateRuleItem();
  $startDateDateKey = new DateKey();
  $startDateDateKey->name = 'checkoutdate';
  $startDateDateRuleItem->key = $startDateDateKey;
  $startDateDateRuleItem->op = 'AFTER';
  $startDateDateRuleItem->value = $today->format('Ymd');
  $startDateRuleItem = new RuleItem();
  $startDateRuleItem->DateRuleItem = $startDateDateRuleItem;

  $threeMonthsLater = clone($today);
  $threeMonthsLater->modify('+3 month');
  $endDateDateRuleItem = new DateRuleItem();
  $endDateDateKey = new DateKey();
  $endDateDateKey->name = 'checkoutdate';
  $endDateDateRuleItem->key = $endDateDateKey;
  $endDateDateRuleItem->op = 'BEFORE';
  $endDateDateRuleItem->value = $threeMonthsLater->format('Ymd');
  $endDateRuleItem = new RuleItem();
  $endDateRuleItem->DateRuleItem = $endDateDateRuleItem;

  // Combine the date rule items into a RuleItemGroup.
  $checkedOutDateRangeItemGroup = new RuleItemGroup();
  $checkedOutDateRangeItemGroup->items = array($startDateRuleItem,
      $endDateRuleItem);

  // Combine the rule item groups into a Rule so AdWords will OR the groups
  // together.
  $rule = new Rule();
  $rule->groups = array($checkoutMultipleItemGroup,
      $checkedOutDateRangeItemGroup);

  // Create the user list with no restrictions on site visit date.
  $expressionUserList = new ExpressionRuleUserList();
  $expressionUserList->name = sprintf('Expression based user list created at '
      . '%s', date('Y-m-d_His'));
  $expressionUserList->description = 'Users who checked out in three month '
      . 'window OR visited the checkout page with more than one item in '
      . 'their cart';
  $expressionUserList->rule = $rule;

  // Create the user list restricted to users who visit your site within the
  // next six months.
  $startDate = clone($today);
  $endDate = clone($today);
  $endDate->modify('+6 month');

  $dateUserList = new DateSpecificRuleUserList();
  $dateUserList->name = sprintf('Date rule user list created at %s',
      date('Y-m-d_His'));
  $dateUserList->description = sprintf('Users who visited the site between %s '
      . 'and %s and checked out in three month window OR visited the checkout '
      . 'page with more than one item in their cart',
      $startDate->format('Ymd'),
      $endDate->format('Ymd'));
  $dateUserList->rule = $rule;

  // Set the start and end dates of the user list.
  $dateUserList->startDate = $startDate->format('Ymd');
  $dateUserList->endDate = $endDate->format('Ymd');

  // Create operations to add the user lists.
  $operations = array();
  foreach (array($expressionUserList, $dateUserList) as $userList) {
    $operation = new UserListOperation();
    $operation->operand = $userList;
    $operation->operator = 'ADD';
    $operations[] = $operation;
  }

  // Submit the operations.
  $result = $userListService->mutate($operations);

  // Display the results.
  foreach ($result->value as $userListResult) {
    printf("User list added with ID %d, name '%s', status '%s', list type '%s'"
        . ", accountUserListStatus '%s', description '%s'.\n",
    $userListResult->id,
    $userListResult->name,
    $userListResult->status,
    $userListResult->listType,
    $userListResult->accountUserListStatus,
    $userListResult->description);
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
  AddRuleBasedUserLists($user);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
