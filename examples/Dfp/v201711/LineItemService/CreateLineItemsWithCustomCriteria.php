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
namespace Google\AdsApi\Examples\Dfp\v201711\LineItemService;

require __DIR__ . '/../../../../vendor/autoload.php';

use DateTime;
use DateTimeZone;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201711\DfpDateTimes;
use Google\AdsApi\Dfp\v201711\AdUnitTargeting;
use Google\AdsApi\Dfp\v201711\CostType;
use Google\AdsApi\Dfp\v201711\CreativePlaceholder;
use Google\AdsApi\Dfp\v201711\CreativeRotationType;
use Google\AdsApi\Dfp\v201711\CustomCriteria;
use Google\AdsApi\Dfp\v201711\CustomCriteriaComparisonOperator;
use Google\AdsApi\Dfp\v201711\CustomCriteriaSet;
use Google\AdsApi\Dfp\v201711\CustomCriteriaSetLogicalOperator;
use Google\AdsApi\Dfp\v201711\Goal;
use Google\AdsApi\Dfp\v201711\GoalType;
use Google\AdsApi\Dfp\v201711\InventoryTargeting;
use Google\AdsApi\Dfp\v201711\LineItem;
use Google\AdsApi\Dfp\v201711\LineItemService;
use Google\AdsApi\Dfp\v201711\LineItemType;
use Google\AdsApi\Dfp\v201711\Money;
use Google\AdsApi\Dfp\v201711\NetworkService;
use Google\AdsApi\Dfp\v201711\Size;
use Google\AdsApi\Dfp\v201711\StartDateTimeType;
use Google\AdsApi\Dfp\v201711\Targeting;
use Google\AdsApi\Dfp\v201711\UnitType;

/**
 * This example creates a new line item that targets custom criteria in
 * addition to the whole network. To determine which line items exist,
 * run GetAllLineItems.php. To determine which orders exist, run
 * GetAllOrders.php. To determine which custom criteria key and values exist,
 * run GetAllCustomTargetingKeysAndValues.php. To create custom criteria key
 * and values, run CreateCustomTargetingKeysAndValues.php.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateLineItemsWithCustomCriteria {

  // Set the order that all created line items will belong to and the
  // placement ID to target.
  const ORDER_ID = 'INSERT_ORDER_ID_HERE';
  const PLACEMENT_ID = 'INSERT_PLACEMENT_ID_HERE';

  const CUSTOM_TARGETING_KEY_ID_1 = 'INSERT_CUSTOM_TARGETING_KEY_ID_1_HERE';
  const CUSTOM_TARGETING_KEY_ID_2 = 'INSERT_CUSTOM_TARGETING_KEY_ID_2_HERE';
  const CUSTOM_TARGETING_KEY_ID_3 = 'INSERT_CUSTOM_TARGETING_KEY_ID_3_HERE';
  const CUSTOM_TARGETING_VALUE_ID_1 = 'INSERT_CUSTOM_TARGETING_VALUE_ID_1_HERE';
  const CUSTOM_TARGETING_VALUE_ID_2A =
      'INSERT_CUSTOM_TARGETING_VALUE_ID_2A_HERE';
  const CUSTOM_TARGETING_VALUE_ID_2B =
      'INSERT_CUSTOM_TARGETING_VALUE_ID_2B_HERE';
  const CUSTOM_TARGETING_VALUE_ID_3 = 'INSERT_CUSTOM_TARGETING_VALUE_ID_3_HERE';

  public static function runExample(
      DfpServices $dfpServices,
      DfpSession $session,
      $orderId,
      $customTargetingKeyId1,
      $customTargetingKeyId2,
      $customTargetingKeyId3,
      $customTargetingValueId1,
      $customTargetingValueId2a,
      $customTargetingValueId2b,
      $customTargetingValueId3
  ) {

    // Get the LineItemService.
    $lineItemService =
        $dfpServices->get($session, LineItemService::class);

    // Get the NetworkService.
    $networkService =
        $dfpServices->get($session, NetworkService::class);

    // Get the root ad unit ID used to target the whole site.
    $rootAdUnitId = $networkService->getCurrentNetwork()
        ->getEffectiveRootAdUnitId();

    // Create inventory targeting.
    $inventoryTargeting = new InventoryTargeting();

    // Create ad unit targeting for the root ad unit (i.e. the whole network).
    $adUnitTargeting = new AdUnitTargeting();
    $adUnitTargeting->setAdUnitId($rootAdUnitId);
    $adUnitTargeting->setIncludeDescendants(true);

    $inventoryTargeting->setTargetedAdUnits([$adUnitTargeting]);

    // Create targeting.
    $targeting = new Targeting();
    $targeting->setInventoryTargeting($inventoryTargeting);

    // Create the expression:
    //
    // TARGETING_KEY_ID_1 == TARGETING_VALUE_ID_1
    $customCriteria1 = new CustomCriteria();
    $customCriteria1->setKeyId($customTargetingKeyId1);
    $customCriteria1->setOperator(CustomCriteriaComparisonOperator::IS);
    $customCriteria1->setValueIds([$customTargetingValueId1]);

    // Create the expression:
    //
    // TARGETING_KEY_ID_2 !=
    //     (TARGETING_VALUE_IDS_2[0] OR TARGETING_VALUE_IDS_2[1] ...))
    $customCriteria2 = new CustomCriteria();
    $customCriteria2->setKeyId($customTargetingKeyId2);
    $customCriteria2->setOperator(CustomCriteriaComparisonOperator::IS_NOT);
    $customCriteria2->setValueIds([
        $customTargetingValueId2a,
        $customTargetingValueId2b
    ]);

    // Create the expression:
    //
    // TARGETING_KEY_ID_3 = TARGETING_VALUE_ID_3
    $customCriteria3 = new CustomCriteria();
    $customCriteria3->setKeyId($customTargetingKeyId3);
    $customCriteria3->setOperator(CustomCriteriaComparisonOperator::IS);
    $customCriteria3->setValueIds([$customTargetingValueId3]);

    // Create the custom criteria set that will resemble:
    //
    // (TARGETING_KEY_ID_1 == TARGETING_VALUE_ID_1 AND
    // (TARGETING_KEY_ID_2 !=
    //     (TARGETING_VALUE_IDS_2[0] OR TARGETING_VALUE_IDS_2[1] ...))
    // OR
    // (TARGETING_KEY_ID_3 = TARGETING_VALUE_ID_3)
    $topCustomCriteriaSet = new CustomCriteriaSet();
    $topCustomCriteriaSet->setLogicalOperator(
        CustomCriteriaSetLogicalOperator::OR_VALUE);

    // Create the sub expression:
    //
    // (TARGETING_KEY_ID_1 == TARGETING_VALUE_ID_1 AND
    // (TARGETING_KEY_ID_2 !=
    //     (TARGETING_VALUE_IDS_2[0] OR TARGETING_VALUE_IDS_2[1] ...))
    $subCustomCriteriaSet = new CustomCriteriaSet();
    $subCustomCriteriaSet->setLogicalOperator(
        CustomCriteriaSetLogicalOperator::AND_VALUE);
    $subCustomCriteriaSet->setChildren(
        [$customCriteria1, $customCriteria2]);

    // Combine the expression
    // (TARGETING_KEY_ID_3 = TARGETING_VALUE_ID_3) with
    // $subCustomCriteriaSet.
    $topCustomCriteriaSet->setChildren(
        [$subCustomCriteriaSet, $customCriteria3]);

    // Set the custom targeting.
    $targeting->setCustomTargeting($topCustomCriteriaSet);

    // Create a line item.
    $lineItem = new LineItem();
    $lineItem->setName("Line item #" . uniqid());
    $lineItem->setOrderId($orderId);
    $lineItem->setTargeting($targeting);

    // Allow the line item to be booked even if there is not enough inventory.
    $lineItem->setAllowOverbook(true);

    // Set the line item type to STANDARD and priority to High. In this case,
    // 8 would be Normal, and 10 would be Low.
    $lineItem->setLineItemType(LineItemType::STANDARD);
    $lineItem->setPriority(6);

    // Set the creative rotation type to even.
    $lineItem->setCreativeRotationType(CreativeRotationType::EVEN);

    // Create creative placeholder size.
    $size = new Size();
    $size->setWidth(300);
    $size->setHeight(250);
    $size->setIsAspectRatio(false);

    // Create the creative placeholder.
    $creativePlaceholder = new CreativePlaceholder();
    $creativePlaceholder->setSize($size);

    // Set the size of creatives that can be associated with this line item.
    $lineItem->setCreativePlaceholders([$creativePlaceholder]);

    // Set the length of the line item to run.
    $lineItem->setStartDateTimeType(StartDateTimeType::IMMEDIATELY);
    $lineItem->setEndDateTime(DfpDateTimes::fromDateTime(
        new DateTime('+1 month', new DateTimeZone('America/New_York'))));

    // Set the cost per unit to $2.
    $lineItem->setCostType(CostType::CPM);
    $lineItem->setCostPerUnit(new Money('USD', 2000000));

    // Set the number of units bought to 500,000 so that the budget is
    // $1,000.
    $goal = new Goal();
    $goal->setUnits(500000);
    $goal->setUnitType(UnitType::IMPRESSIONS);
    $goal->setGoalType(GoalType::LIFETIME);
    $lineItem->setPrimaryGoal($goal);

    // Create the line item on the server.
    $results = $lineItemService->createLineItems([$lineItem]);

    // Print out some information for each created line item.
    foreach ($results as $i => $lineItem) {
      printf(
          "%d) Line item with ID %d, belonging to order ID %d, and name '%s' "
              . "was created.\n",
          $i,
          $lineItem->getId(),
          $lineItem->getOrderId(),
          $lineItem->getName()
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
    $session = (new DfpSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential)
        ->build();

    self::runExample(
        new DfpServices(),
        $session,
        intval(self::ORDER_ID),
        intval(self::CUSTOM_TARGETING_KEY_ID_1),
        intval(self::CUSTOM_TARGETING_KEY_ID_2),
        intval(self::CUSTOM_TARGETING_KEY_ID_3),
        intval(self::CUSTOM_TARGETING_VALUE_ID_1),
        intval(self::CUSTOM_TARGETING_VALUE_ID_2A),
        intval(self::CUSTOM_TARGETING_VALUE_ID_2B),
        intval(self::CUSTOM_TARGETING_VALUE_ID_3)
    );
  }
}

CreateLineItemsWithCustomCriteria::main();
