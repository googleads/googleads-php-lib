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
namespace Google\AdsApi\Examples\AdWords\v201708\Remarketing;

require __DIR__ . '/../../../../vendor/autoload.php';

use DateTime;
use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201708\cm\Operator;
use Google\AdsApi\AdWords\v201708\rm\AdwordsUserListService;
use Google\AdsApi\AdWords\v201708\rm\CombinedRuleUserList;
use Google\AdsApi\AdWords\v201708\rm\CombinedRuleUserListRuleOperator;
use Google\AdsApi\AdWords\v201708\rm\DateKey;
use Google\AdsApi\AdWords\v201708\rm\DateRuleItem;
use Google\AdsApi\AdWords\v201708\rm\DateRuleItemDateOperator;
use Google\AdsApi\AdWords\v201708\rm\DateSpecificRuleUserList;
use Google\AdsApi\AdWords\v201708\rm\ExpressionRuleUserList;
use Google\AdsApi\AdWords\v201708\rm\NumberKey;
use Google\AdsApi\AdWords\v201708\rm\NumberRuleItem;
use Google\AdsApi\AdWords\v201708\rm\NumberRuleItemNumberOperator;
use Google\AdsApi\AdWords\v201708\rm\Rule;
use Google\AdsApi\AdWords\v201708\rm\RuleBasedUserListPrepopulationStatus;
use Google\AdsApi\AdWords\v201708\rm\RuleItem;
use Google\AdsApi\AdWords\v201708\rm\RuleItemGroup;
use Google\AdsApi\AdWords\v201708\rm\StringKey;
use Google\AdsApi\AdWords\v201708\rm\StringRuleItem;
use Google\AdsApi\AdWords\v201708\rm\StringRuleItemStringOperator;
use Google\AdsApi\AdWords\v201708\rm\UserListOperation;
use Google\AdsApi\AdWords\v201708\rm\UserListRuleTypeEnumsEnum;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds two rule-based remarketing user lists: one with no site
 * visit date restrictions, and another that will only include users who visit
 * your site in the next six months.
 */
class AddRuleBasedUserLists {

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session) {
    $userListService =
        $adWordsServices->get($session, AdwordsUserListService::class);

    // Create the user list with no restrictions on site visit date.
    $expressionUserList = new ExpressionRuleUserList();
    $expressionUserList->setName(
        sprintf('Expression based user list created at %s', date('Y-m-d_His')));
    $expressionUserList->setDescription('Users who checked out in three month '
        . 'window OR visited the checkout page with more than one item in '
        . 'their cart');
    $expressionUserList->setRule(self::createUserListRule());

    // Optional: Set the prepopulationStatus to REQUESTED to include past users
    // in the user list.
    $expressionUserList->setPrepopulationStatus(
        RuleBasedUserListPrepopulationStatus::REQUESTED);

    // Create the user list restricted to users who visit your site within the
    // next six months.
    $startDate = new DateTime();
    $endDate = new DateTime('+6 month');

    $dateUserList = new DateSpecificRuleUserList();
    $dateUserList->setName(
        sprintf('Date rule user list created at %s', date('Y-m-d_His')));
    $dateUserList->setDescription(sprintf(
        'Users who visited the site between %s '
            . 'and %s and checked out in three month window OR visited the '
            . 'checkout page with more than one item in their cart',
        $startDate->format('Ymd'),
        $endDate->format('Ymd')
    ));
    $dateUserList->setRule(self::createUserListRule());

    // Set the start and end dates of the user list.
    $dateUserList->setStartDate($startDate->format('Ymd'));
    $dateUserList->setEndDate($endDate->format('Ymd'));

    // Create the user list where "Visitors of a page who did visit another
    // page". To create a user list where "Visitors of a page who did not visit
    // another page", change the ruleOperator from AND to AND_NOT.
    $combinedUserList = new CombinedRuleUserList();
    $combinedUserList->setName(
        sprintf('Combined rule user list created at %s', date('Y-m-d_His')));
    $combinedUserList->setDescription('Users who visited two sites.');
    $operands = self::createCombinedUserListRules();
    $combinedUserList->setLeftOperand($operands[0]);
    $combinedUserList->setRightOperand($operands[1]);
    $combinedUserList->setRuleOperator(
        CombinedRuleUserListRuleOperator::AND_VALUE);

    // Create operations to add the user lists.
    $operations = [];
    foreach ([$expressionUserList, $dateUserList, $combinedUserList]
        as $userList) {
      $operation = new UserListOperation();
      $operation->setOperand($userList);
      $operation->setOperator(Operator::ADD);
      $operations[] = $operation;
    }

    // Create the user lists on the server.
    $result = $userListService->mutate($operations);

    // Print out some information about created user lists.
    foreach ($result->getValue() as $userListResult) {
      printf(
          "User list added with ID %d, name '%s', status '%s', list type '%s'"
              . ", account user list status '%s', description '%s'.\n",
          $userListResult->getId(),
          $userListResult->getName(),
          $userListResult->getStatus(),
          $userListResult->getListType(),
          $userListResult->getAccountUserListStatus(),
          $userListResult->getDescription()
      );
    }
  }

  /**
   * Create a user list rule composed of two rule item groups.
   *
   * @return Rule the created rule
   */
  private static function createUserListRule() {
    // First rule item group - users who visited the checkout page and had more
    // than one item in their shopping cart.
    $checkoutStringRuleItem = new StringRuleItem();
    $checkoutStringKey = new StringKey();
    $checkoutStringKey->setName('ecomm_pagetype');
    $checkoutStringRuleItem->setKey($checkoutStringKey);
    $checkoutStringRuleItem->setOp(StringRuleItemStringOperator::EQUALS);
    $checkoutStringRuleItem->setValue('checkout');
    $checkoutRuleItem = new RuleItem();
    $checkoutRuleItem->setStringRuleItem($checkoutStringRuleItem);

    $cartSizeNumberRuleItem = new NumberRuleItem();
    $cartSizeNumberKey = new NumberKey();
    $cartSizeNumberKey->setName('cartsize');
    $cartSizeNumberRuleItem->setKey($cartSizeNumberKey);
    $cartSizeNumberRuleItem->setOp(NumberRuleItemNumberOperator::GREATER_THAN);
    $cartSizeNumberRuleItem->setValue(1.0);
    $cartSizeRuleItem = new RuleItem();
    $cartSizeRuleItem->setNumberRuleItem($cartSizeNumberRuleItem);

    // Combine the two rule items into a RuleItemGroup so AdWords will AND their
    // rules together.
    $checkoutMultipleItemGroup = new RuleItemGroup();
    $checkoutMultipleItemGroup->setItems(
        [$checkoutRuleItem, $cartSizeRuleItem]);

    // Second rule item group - users who checked out within the next 3 months.
    $today = new DateTime();
    $startDateDateRuleItem = new DateRuleItem();
    $startDateDateKey = new DateKey();
    $startDateDateKey->setName('checkoutdate');
    $startDateDateRuleItem->setKey($startDateDateKey);
    $startDateDateRuleItem->setOp(DateRuleItemDateOperator::AFTER);
    $startDateDateRuleItem->setValue($today->format('Ymd'));
    $startDateRuleItem = new RuleItem();
    $startDateRuleItem->setDateRuleItem($startDateDateRuleItem);

    $threeMonthsLater = new DateTime('+3 month');
    $endDateDateRuleItem = new DateRuleItem();
    $endDateDateKey = new DateKey();
    $endDateDateKey->setName('checkoutdate');
    $endDateDateRuleItem->setKey($endDateDateKey);
    $endDateDateRuleItem->setOp(DateRuleItemDateOperator::BEFORE);
    $endDateDateRuleItem->setValue($threeMonthsLater->format('Ymd'));
    $endDateRuleItem = new RuleItem();
    $endDateRuleItem->setDateRuleItem($endDateDateRuleItem);

    // Combine the date rule items into a RuleItemGroup.
    $checkedOutDateRangeItemGroup = new RuleItemGroup();
    $checkedOutDateRangeItemGroup->setItems(
        [$startDateRuleItem, $endDateRuleItem]);

    // Combine the rule item groups into a Rule so AdWords knows how to apply
    // the rules.
    $rule = new Rule();
    $rule->setGroups(
        [$checkoutMultipleItemGroup, $checkedOutDateRangeItemGroup]);
    // ExpressionRuleUserLists can use either CNF or DNF for matching. CNF means
    // 'at least one item in each rule item group must match', and DNF means 'at
    // least one entire rule item group must match'. DateSpecificRuleUserList
    // only supports DNF. You can also omit the rule type altogether to default
    // to DNF.
    $rule->setRuleType(UserListRuleTypeEnumsEnum::DNF);

    return $rule;
  }

  /**
   * Create rules to be used as left and right operands of
   * a combined user list.
   *
   * @return Rule[] the array of created rules
   */
  private static function createCombinedUserListRules() {
    // Third and fourth rule item groups
    // Visitors of a page who visited another page.
    $site1StringRuleItem = new StringRuleItem();
    $site1StringKey = new StringKey();
    $site1StringKey->setName('url__');
    $site1StringRuleItem->setKey($site1StringKey);
    $site1StringRuleItem->setOp(StringRuleItemStringOperator::EQUALS);
    $site1StringRuleItem->setValue('example.com/example1');
    $site1RuleItem = new RuleItem();
    $site1RuleItem->setStringRuleItem($site1StringRuleItem);

    $site2StringRuleItem = new StringRuleItem();
    $site2StringKey = new StringKey();
    $site2StringKey->setName('url__');
    $site2StringRuleItem->setKey($site2StringKey);
    $site2StringRuleItem->setOp(StringRuleItemStringOperator::EQUALS);
    $site2StringRuleItem->setValue('example.com/example2');
    $site2RuleItem = new RuleItem();
    $site2RuleItem->setStringRuleItem($site2StringRuleItem);

    // Create two RuleItemGroups to show that a visitor browsed two sites.
    $site1ItemGroup = new RuleItemGroup();
    $site1ItemGroup->setItems([$site1RuleItem]);
    $site2ItemGroup = new RuleItemGroup();
    $site2ItemGroup->setItems([$site2RuleItem]);

    // Create two rules to show that a visitor browsed two sites.
    $userVisitedSite1Rule = new Rule();
    $userVisitedSite1Rule->setGroups([$site1ItemGroup]);
    $userVisitedSite2Rule = new Rule();
    $userVisitedSite2Rule->setGroups([$site2ItemGroup]);

    return [$userVisitedSite1Rule, $userVisitedSite2Rule];
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

AddRuleBasedUserLists::main();
