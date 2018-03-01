<?php
/**
 * Copyright 2017, Google Inc. All Rights Reserved.
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

namespace Google\AdsApi\AdWords\Shopping\v201802;

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\v201802\cm\AdGroupCriterion;
use Google\AdsApi\AdWords\v201802\cm\AdGroupCriterionOperation;
use Google\AdsApi\AdWords\v201802\cm\AdGroupCriterionService;
use Google\AdsApi\AdWords\v201802\cm\BiddableAdGroupCriterion;
use Google\AdsApi\AdWords\v201802\cm\BiddingStrategyConfiguration;
use Google\AdsApi\AdWords\v201802\cm\CpcBid;
use Google\AdsApi\AdWords\v201802\cm\Criterion;
use Google\AdsApi\AdWords\v201802\cm\Money;
use Google\AdsApi\AdWords\v201802\cm\NegativeAdGroupCriterion;
use Google\AdsApi\AdWords\v201802\cm\Operator;
use Google\AdsApi\AdWords\v201802\cm\ProductBiddingCategory;
use Google\AdsApi\AdWords\v201802\cm\ProductCanonicalCondition;
use Google\AdsApi\AdWords\v201802\cm\ProductDimension;
use Google\AdsApi\AdWords\v201802\cm\ProductPartition;
use Google\AdsApi\AdWords\v201802\cm\ProductPartitionType;
use ReflectionClass;

/**
 * Provides methods for creating product partition trees for specified ad group
 * IDs and for adding their corresponding ad group criteria on the server.
 */
final class ProductPartitions
{

    const PAGE_LIMIT = 500;

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
    private static $nextId = -1;

    /**
     * Creates a subdivision node (product partition) by specifying the parent
     * node and the value being partitioned on.
     *
     * @param null|ProductPartition $parent the parent product partition for a
     *     newly created subdivision
     * @param null|ProductDimension $value the case value for a newly created
     *     subdivision
     * @return ProductPartition the newly created product partition
     */
    public static function createSubdivision(
        ProductPartition $parent = null,
        ProductDimension $value = null
    ) {
        $division = new ProductPartition();
        $division->setPartitionType(ProductPartitionType::SUBDIVISION);
        $division->setId(self::$nextId--);

        // The root node has neither a parent nor a value
        if ($parent !== null) {
            $division->setParentCriterionId($parent->getId());
            $division->setCaseValue($value);
        }

        return $division;
    }

    /**
     * Creates a unit node (product partition) by specifying the parent node
     * and
     * the value being partitioned on.
     *
     * @param null|ProductPartition $parent the parent product partition for a
     *     newly created unit
     * @param null|ProductDimension $value the case value for a newly created
     *     unit
     * @return ProductPartition the newly created product partition
     */
    public static function createUnit(
        ProductPartition $parent = null,
        ProductDimension $value = null
    ) {
        $unit = new ProductPartition();
        $unit->setPartitionType(ProductPartitionType::UNIT);

        // The root node has neither a parent nor a value
        if ($parent !== null) {
            $unit->setParentCriterionId($parent->getId());
            $unit->setCaseValue($value);
        }

        return $unit;
    }

    /**
     * Returns the biddable ad group criterion with by specifying the product
     * partition and bid amount.
     *
     * @param int $adGroupId the ID of ad group that this ad group criterion is
     *     created under
     * @param ProductPartition $productPartition the product partition to create
     *     an ad group criterion
     * @param null|$bidAmount the bid for the product partition in micro amount
     * @return BiddableAdGroupCriterion the created biddable ad group criterion
     */
    public static function asBiddableAdGroupCriterion(
        $adGroupId,
        ProductPartition $productPartition,
        $bidAmount = null
    ) {
        $criterion = new BiddableAdGroupCriterion();

        if ($bidAmount !== null && $bidAmount > 0) {
            $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
            $cpcBid = new CpcBid();
            $money = new Money();
            $money->setMicroAmount($bidAmount);
            $cpcBid->setBid($money);
            $biddingStrategyConfiguration->setBids([$cpcBid]);

            $criterion->setBiddingStrategyConfiguration(
                $biddingStrategyConfiguration
            );
        }
        $criterion->setAdGroupId($adGroupId);
        $criterion->setCriterion($productPartition);

        return $criterion;
    }

    /**
     * Returns the negative ad group criterion with by specifying the product
     * partition.
     *
     * @param int $adGroupId the ID of ad group that this ad group criterion is
     *     created under
     * @param ProductPartition $productPartition the product partition to create
     *     an ad group criterion
     * @return NegativeAdGroupCriterion the created negative ad group criterion
     */
    public static function asNegativeAdGroupCriterion(
        $adGroupId,
        ProductPartition $productPartition
    ) {
        $criterion = new NegativeAdGroupCriterion();
        $criterion->setAdGroupId($adGroupId);
        $criterion->setCriterion($productPartition);

        return $criterion;
    }

    /**
     * Creates an ADD operation for the given ad group criterion.
     *
     * @param AdGroupCriterion $criterion the ad group criterion to create the
     *     ADD operation
     * @return AdGroupCriterionOperation the ADD ad group criterion operation
     */
    public static function createAddOperation(AdGroupCriterion $criterion)
    {
        return self::createAdGroupCriterionOperation($criterion, Operator::ADD);
    }

    /**
     * Creates a REMOVE operation for the given ad group criterion.
     *
     * @param AdGroupCriterion $criterion the ad group criterion to create the
     *     REMOVE operation
     * @return AdGroupCriterionOperation the REMOVE ad group criterion operation
     */
    public static function createRemoveOperation(AdGroupCriterion $criterion)
    {
        return self::createAdGroupCriterionOperation(
            $criterion,
            Operator::REMOVE
        );
    }

    /**
     * Creates a SET operation for the given ad group criterion.
     *
     * @param AdGroupCriterion $criterion the ad group criterion to create the
     *     SET operation
     * @return AdGroupCriterionOperation the SET ad group criterion operation
     */
    public static function createSetOperation(AdGroupCriterion $criterion)
    {
        return self::createAdGroupCriterionOperation($criterion, Operator::SET);
    }

    /**
     * Creates an ad group criterion operation for the given ad group criterion.
     *
     * @param AdGroupCriterion $criterion the ad group criterion
     * @param string $operator the operator for the operation
     * @return AdGroupCriterionOperation the ad group criterion operation
     */
    private static function createAdGroupCriterionOperation(
        AdGroupCriterion $criterion,
        $operator
    ) {
        $operation = new AdGroupCriterionOperation();
        $operation->setOperand($criterion);
        $operation->setOperator($operator);

        return $operation;
    }

    /**
     * Returns the string representation of ad group criteria of the specified
     * ad group ID by showing them hierarchically.
     *
     * @param AdWordsServices $adWordsServices the AdWords services used to send
     *     the operations to be created on the server
     * @param AdWordsSession $session the AdWords session used to call AdWords
     *     API server
     * @param int $adGroupId the ID of ad group whose members will be presented
     *     hierarchically
     * @return string the representation of the ad group criteria
     */
    public static function showAdGroupTree(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $adGroupId
    ) {
        $adGroupCriterionService =
            $adWordsServices->get($session, AdGroupCriterionService::class);

        $children = [];
        $rootNode = null;
        $totalNumEntries = 0;
        $offset = 0;
        do {
            $query = sprintf(
                'SELECT AdGroupId, Id, ParentCriterionId, CaseValue, PartitionType'
                . ' WHERE AdGroupId = %s AND CriteriaType = PRODUCT_PARTITION'
                . ' AND Status IN [ENABLED, PAUSED]',
                $adGroupId
            );
            // Retrieve ad group criteria one page at a time.
            $page = $adGroupCriterionService->query($query);

            // Print out some information for each keyword.
            if ($page->getEntries() !== null) {
                $totalNumEntries = $page->getTotalNumEntries();
                foreach ($page->getEntries() as $adGroupCriterion) {
                    $criterionId = $adGroupCriterion->getCriterion()->getId();
                    if (!array_key_exists($criterionId, $children)) {
                        $children[$criterionId] = [];
                    }

                    if ($adGroupCriterion->getCriterion()->getParentCriterionId()
                        !== null) {
                        $parentCriterionId =
                            $adGroupCriterion->getCriterion()
                                ->getParentCriterionId();
                        $children[$parentCriterionId][] =
                            $adGroupCriterion->getCriterion();
                    } else {
                        $rootNode = $adGroupCriterion->getCriterion();
                    }
                }
            }

            $offset += self::PAGE_LIMIT;
        } while ($offset < $totalNumEntries);

        if ($rootNode === null) {
            return 'Empty tree';
        }

        return self::traverseTree($rootNode, $children, 0);
    }

    /**
     * Recursively traverses this tree and returns its string representation.
     */
    private static function traverseTree(
        Criterion $node,
        array $children,
        $level
    ) {
        $type = 'n/a';
        $value = 'n/a';

        if ($node->getCaseValue() !== null) {
            $type =
                (new ReflectionClass($node->getCaseValue()))->getShortName();
            if ($node->getCaseValue() instanceof ProductCanonicalCondition) {
                $value = $node->getCaseValue()->getCondition();
            } else if ($node->getCaseValue() instanceof
                ProductBiddingCategory) {
                $value = sprintf(
                    '%s (%s)',
                    $node->getCaseValue()->getType(),
                    $node->getCaseValue()->getValue()
                );
            } else {
                $value = $node->getCaseValue()->getValue();
            }
        }

        $result = sprintf(
            "%sID: %d, type: %s, value: %s\n",
            str_repeat("  ", $level),
            $node->getId(),
            $type,
            $value
        );
        foreach ($children[$node->getId()] as $childNode) {
            $result .= self::traverseTree($childNode, $children, $level + 1);
        }

        return $result;
    }
}
