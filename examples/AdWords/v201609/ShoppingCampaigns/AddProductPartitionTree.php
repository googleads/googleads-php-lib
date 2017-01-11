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
namespace Google\AdsApi\Examples\AdWords\v201609\ShoppingCampaigns;

require '../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201609\cm\AdGroupCriterion;
use Google\AdsApi\AdWords\v201609\cm\AdGroupCriterionOperation;
use Google\AdsApi\AdWords\v201609\cm\AdGroupCriterionService;
use Google\AdsApi\AdWords\v201609\cm\BiddableAdGroupCriterion;
use Google\AdsApi\AdWords\v201609\cm\BiddingStrategyConfiguration;
use Google\AdsApi\AdWords\v201609\cm\CpcBid;
use Google\AdsApi\AdWords\v201609\cm\Criterion;
use Google\AdsApi\AdWords\v201609\cm\Money;
use Google\AdsApi\AdWords\v201609\cm\NegativeAdGroupCriterion;
use Google\AdsApi\AdWords\v201609\cm\Operator;
use Google\AdsApi\AdWords\v201609\cm\ProductBiddingCategory;
use Google\AdsApi\AdWords\v201609\cm\ProductBrand;
use Google\AdsApi\AdWords\v201609\cm\ProductCanonicalCondition;
use Google\AdsApi\AdWords\v201609\cm\ProductCanonicalConditionCondition;
use Google\AdsApi\AdWords\v201609\cm\ProductDimension;
use Google\AdsApi\AdWords\v201609\cm\ProductDimensionType;
use Google\AdsApi\AdWords\v201609\cm\ProductPartition;
use Google\AdsApi\AdWords\v201609\cm\ProductPartitionType;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use ReflectionClass;

/**
 * This example creates a product partition tree.
 */
class AddProductPartitionTree {

  const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $adGroupId) {
    $adGroupCriterionService =
        $adWordsServices->get($session, AdGroupCriterionService::class);

    $helper = new ProductPartitionHelper($adGroupId);

    // The most trivial partition tree has only a unit node as the root:
    //   $helper->createUnit(null, null, 100000);

    $root = $helper->createSubdivision();

    $newCondition = new ProductCanonicalCondition();
    $newCondition->setCondition(ProductCanonicalConditionCondition::NEW_VALUE);
    $usedCondition = new ProductCanonicalCondition();
    $usedCondition->setCondition(ProductCanonicalConditionCondition::USED);
    $helper->createUnit($root, $newCondition, 200000);
    $helper->createUnit($root, $usedCondition, 100000);
    $otherCondition = $helper->createSubdivision($root,
        new ProductCanonicalCondition());

    $coolBrand = new ProductBrand();
    $coolBrand->setValue('CoolBrand');
    $helper->createUnit($otherCondition, $coolBrand, 900000);
    $cheapBrand = new ProductBrand();
    $cheapBrand->setValue('CheapBrand');
    $helper->createUnit($otherCondition, $cheapBrand, 10000);
    $otherBrand =
        $helper->createSubdivision($otherCondition, new ProductBrand());

    // The value for the bidding category is a fixed ID for the 'Luggage & Bags'
    // category. You can retrieve IDs for categories from the
    // ConstantDataService.
    // See the 'GetProductCategoryTaxonomy' example for more details.
    $productBiddingCategory = new ProductBiddingCategory();
    $productBiddingCategory->setType(ProductDimensionType::BIDDING_CATEGORY_L1);
    $productBiddingCategory->setValue(-5914235892932915235);
    $helper->createUnit($otherBrand, $productBiddingCategory, 750000);
    $productBiddingCategory = new ProductBiddingCategory();
    $productBiddingCategory->setType(ProductDimensionType::BIDDING_CATEGORY_L1);
    $helper->createUnit($otherBrand, $productBiddingCategory, 110000);

    // Create ad group criterion on the server.
    $result = $adGroupCriterionService->mutate($helper->getOperations());

    $children = [];
    $rootNode = null;
    // For each criterion, make an array containing each of its children.
    // We always create the parent before the child, so we can rely on that
    // here.
    foreach ($result->getValue() as $adGroupCriterion) {
      $children[$adGroupCriterion->getCriterion()->getId()] = [];

      if ($adGroupCriterion->getCriterion()->getParentCriterionId() !== null) {
        $children[$adGroupCriterion->getCriterion()->getParentCriterionId()][] =
            $adGroupCriterion->getCriterion();
      } else {
        $rootNode = $adGroupCriterion->getCriterion();
      }
    }

    // Print out the tree of product partitions.
    self::displayTree($rootNode, $children, 0);
  }

  /**
   * Recursively display a node and each of its children.
   */
  private static function displayTree(Criterion $node, array $children,
      $level) {
    $value = 'n/a';
    $type = 'n/a';

    if ($node->getCaseValue() !== null) {
      $type = (new ReflectionClass($node->getCaseValue()))->getShortName();
      if ($node->getCaseValue() instanceof ProductCanonicalCondition) {
        $value = $node->getCaseValue()->getCondition();
      } else if ($node->getCaseValue() instanceof ProductBiddingCategory) {
        $value = sprintf('%s (%s)', $node->getCaseValue()->getType(),
            $node->getCaseValue()->getValue());
      } else {
        $value = $node->getCaseValue()->getValue();
      }
    }

    printf(
        "%sID: %d, type: %s, value: %s\n",
        str_repeat("  ", $level),
        $node->getId(),
        $type,
        $value
    );
    foreach ($children[$node->getId()] as $childNode) {
      self::displayTree($childNode, $children, $level + 1);
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
    self::runExample(new AdWordsServices(), $session,
        intval(self::AD_GROUP_ID));
  }
}

/**
 * A helper class for creating product partition trees
 */
class ProductPartitionHelper {

  /**
   * The next temporary criterion ID to be used.
   *
   * When creating our tree we need to specify the parent-child relationships
   * between nodes. However, until a criterion has been created on the server
   * we do not have a criterion ID with which to refer to it.
   *
   * Instead we can specify temporary IDs that are specific to a single mutate
   * request. Once the criteria have been created they are assigned an ID as
   * normal and the temporary ID will no longer refer to it.
   *
   * A valid temporary ID is any negative integer.
   */
  private $nextId = -1;

  /**
   * The set of mutate operations needed to create the current tree.
   */
  private $operations = [];

  /**
   * The ID of the ad group that we wish to attach the partition tree to.
   */
  private $adGroupId;

  /**
   * Creates a helper class with specified ad group ID.
   */
  public function __construct($adGroupId) {
    $this->adGroupId = $adGroupId;
  }

  /**
   * Creates an ad group criterion operation for the given criterion.
   */
  private function createAddOperation(AdGroupCriterion $criterion) {
    $operation = new AdGroupCriterionOperation();
    $operation->setOperand($criterion);
    $operation->setOperator(Operator::ADD);
    $this->operations[] = $operation;
  }

  /**
   * Creates a subdivision node by specifying the parent node and the value
   * being partitioned on.
   */
  public function createSubdivision(ProductPartition $parent = null,
      ProductDimension $value = null) {
    $division = new ProductPartition();
    $division->setPartitionType(ProductPartitionType::SUBDIVISION);
    $division->setId($this->nextId--);

    // The root node has neither a parent nor a value
    if ($parent !== null) {
      $division->setParentCriterionId($parent->getId());
      $division->setCaseValue($value);
    }

    $criterion = new BiddableAdGroupCriterion();
    $criterion->setAdGroupId($this->adGroupId);
    $criterion->setCriterion($division);

    $this->createAddOperation($criterion);

    return $division;
  }

  /**
   * Creates a unit node by specifying the parent node, the value being
   * partitioned on and the amount to bid for matching products in micro
   * amount.
   */
  public function createUnit(ProductPartition $parent = null,
      ProductDimension $value = null, $bidAmount = null) {
    $unit = new ProductPartition();
    $unit->setPartitionType(ProductPartitionType::UNIT);

    // The root node has neither a parent nor a value
    if ($parent !== null) {
      $unit->setParentCriterionId($parent->getId());
      $unit->setCaseValue($value);
    }

    if ($bidAmount !== null && $bidAmount > 0) {
      $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
      $cpcBid = new CpcBid();
      $money = new Money();
      $money->setMicroAmount($bidAmount);
      $cpcBid->setBid($money);
      $biddingStrategyConfiguration->setBids([$cpcBid]);

      $criterion = new BiddableAdGroupCriterion();
      $criterion->setBiddingStrategyConfiguration(
          $biddingStrategyConfiguration);
    } else {
      $criterion = new NegativeAdGroupCriterion();
    }

    $criterion->setAdGroupId($this->adGroupId);
    $criterion->setCriterion($unit);

    $this->createAddOperation($criterion);

    return $unit;
  }

  /**
   * Returns the set of mutate operations needed to create the current tree.
   */
  public function getOperations() {
    return $this->operations;
  }
}

AddProductPartitionTree::main();
