<?php
/**
 * This example creates a ProductPartition tree.
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
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

$adGroupId = 'INSERT_AD_GROUP_ID_HERE';

/**
 * A helper for creating ProductPartition trees
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201605
 */
class ProductPartitionHelper {
  /**
   * The next temporary criterion ID to be used.
   *
   * When creating our tree we need to specify the parent-child relationships
   * between nodes. However, until a criterion has been created on the server
   * we do not have a criterionId with which to refer to it.
   *
   * Instead we can specify temporary IDs that are specific to a single mutate
   * request. Once the criteria have been created they are assigned an ID as
   * normal and the temporary ID will no longer refer to it.
   *
   * A valid temporary ID is any negative integer.
   * @var integer
   */
  private $nextId = -1;

  /**
   * The set of mutate operations needed to create the current tree.
   * @var array
   */
  private $operations = array();

  /**
   * The ID of the AdGroup that we wish to attach the partition tree to.
   * @var int
   */
  private $adGroupId;

  /**
   * Constructor
   * @param int $adGroupId The ID of the AdGroup that we wish to attach the
   *                       partition tree to.
   */
  public function __construct($adGroupId) {
    $this->adGroupId = $adGroupId;
  }

  /**
   * Creates a subdivision node
   * @param  ProductPartition $parent The node that should be this node's parent
   * @param  ProductDimension $value The value being partitioned on
   * @return ProductPartition A new subdivision node
   */
  public function createSubdivision(ProductPartition $parent = null,
      ProductDimension $value = null) {
    $division = new ProductPartition('SUBDIVISION');
    $division->id = $this->nextId--;

    // The root node has neither a parent nor a value
    if (!is_null($parent)) {
      $division->parentCriterionId = $parent->id;
      $division->caseValue = $value;
    }

    $criterion = new BiddableAdGroupCriterion();
    $criterion->adGroupId = $this->adGroupId;
    $criterion->criterion = $division;

    $this->createAddOperation($criterion);

    return $division;
  }

  /**
   * Creates a unit node.
   * @param  ProductPartition $parent The node that should be this node's parent
   * @param  ProductDimension $value The value being partitioned on
   * @param  int $bid_amount The amount to bid for matching products, in micros
   * @return ProductPartition A new unit node
   */
  public function createUnit(ProductPartition $parent = null,
      ProductDimension $value = null, $bid_amount = null) {
    $unit = new ProductPartition('UNIT');

    // The root node has neither a parent nor a value
    if (!is_null($parent)) {
      $unit->parentCriterionId = $parent->id;
      $unit->caseValue = $value;
    }

    if (!is_null($bid_amount) && $bid_amount > 0) {
      $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
      $biddingStrategyConfiguration->bids = array();
      $cpcBid = new CpcBid();
      $cpcBid->bid = new Money($bid_amount);
      $biddingStrategyConfiguration->bids[] = $cpcBid;

      $criterion = new BiddableAdGroupCriterion();
      $criterion->biddingStrategyConfiguration = $biddingStrategyConfiguration;
    } else {
      $criterion = new NegativeAdGroupCriterion();
    }

    $criterion->adGroupId = $this->adGroupId;
    $criterion->criterion = $unit;

    $this->createAddOperation($criterion);

    return $unit;
  }

  /**
   * Returns the set of mutate operations needed to create the current tree.
   * @return array The set of operations
   */
  public function getOperations() {
    return $this->operations;
  }

  /**
   * Creates an AdGroupCriterionOperation for the given criterion
   * @param  AdGroupCriterion $criterion The criterion we want to add
   */
  private function createAddOperation(AdGroupCriterion $criterion) {
    $operation = new AdGroupCriterionOperation();
    $operation->operand = $criterion;
    $operation->operator = 'ADD';
    $this->operations[] = $operation;
  }
}

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param int $adGroupId the ad group to add the tree to
 */
function addProductPartitionTreeExample(AdWordsUser $user, $adGroupId) {
  // Get the AdGroupCriterionService, which loads the required classes.
  $adGroupCriterionService = $user->GetService('AdGroupCriterionService',
        ADWORDS_VERSION);

  $helper = new ProductPartitionHelper($adGroupId);

  // The most trivial partition tree has only a unit node as the root:
  //   $helper->createUnit(null, null, 100000);

  $root = $helper->createSubdivision();

  $helper->createUnit($root, new ProductCanonicalCondition('NEW'), 200000);
  $helper->createUnit($root, new ProductCanonicalCondition('USED'), 100000);
  $otherCondition = $helper->createSubdivision($root,
      new ProductCanonicalCondition());

  $helper->createUnit($otherCondition, new ProductBrand('CoolBrand'), 900000);
  $helper->createUnit($otherCondition, new ProductBrand('CheapBrand'), 10000);
  $otherBrand =
      $helper->createSubdivision($otherCondition, new ProductBrand());

  // The value for the bidding category is a fixed ID for the 'Luggage & Bags'
  // category. You can retrieve IDs for categories from the ConstantDataService.
  // See the 'GetProductCategoryTaxonomy' example for more details.
  $helper->createUnit($otherBrand,
      new ProductBiddingCategory('BIDDING_CATEGORY_L1',
      '-5914235892932915235'), 750000);
  $helper->createUnit($otherBrand,
      new ProductBiddingCategory('BIDDING_CATEGORY_L1'), 110000);

  // Make the mutate request.
  $result = $adGroupCriterionService->mutate($helper->getOperations());

  $children = array();
  $rootNode = null;
  // For each criterion, make an array containing each of its children
  // We always create the parent before the child, so we can rely on that here
  foreach ($result->value as $adGroupCriterion) {
    $children[$adGroupCriterion->criterion->id] = array();

    if (isset($adGroupCriterion->criterion->parentCriterionId)) {
      $children[$adGroupCriterion->criterion->parentCriterionId][] =
          $adGroupCriterion->criterion;
    } else {
      $rootNode = $adGroupCriterion->criterion;
    }
  }

  // Show the tree
  displayTree($rootNode, $children);
}

function displayTree($node, $children, $level = 0) {
  // Recursively display a node and each of its children
  $value = "";
  $type = "";

  if (isset($node->caseValue)) {
    $type = $node->caseValue->ProductDimensionType;
    switch ($type) {
      case 'ProductCanonicalCondition':
        $value = $node->caseValue->condition;
        break;

      case 'ProductBiddingCategory':
        $value = $node->caseValue->type . "(" . $node->caseValue->value . ")";
        break;

      default:
        $value = $node->caseValue->value;
        break;
    }
  }

  printf("%sid: %s, type: %s, value: %s\n", str_repeat("  ", $level),
      $node->id, $type, $value);
  foreach ($children[$node->id] as $childNode) {
    displayTree($childNode, $children, $level + 1);
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
  addProductPartitionTreeExample($user, $adGroupId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
