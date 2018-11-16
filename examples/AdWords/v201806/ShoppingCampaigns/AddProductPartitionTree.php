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

namespace Google\AdsApi\Examples\AdWords\v201806\ShoppingCampaigns;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\Shopping\v201806\ProductPartitions;
use Google\AdsApi\AdWords\v201806\cm\AdGroupCriterionService;
use Google\AdsApi\AdWords\v201806\cm\ProductBiddingCategory;
use Google\AdsApi\AdWords\v201806\cm\ProductBrand;
use Google\AdsApi\AdWords\v201806\cm\ProductCanonicalCondition;
use Google\AdsApi\AdWords\v201806\cm\ProductCanonicalConditionCondition;
use Google\AdsApi\AdWords\v201806\cm\ProductDimensionType;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example creates a product partition tree.
 */
class AddProductPartitionTree
{

    const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $adGroupId
    ) {
        // The most trivial partition tree has only a unit node as the root:
        //   $productPartitions->createBiddableUnit(null, null, 100000);

        $operations = [];
        $root = ProductPartitions::createSubdivision();
        $criterion = ProductPartitions::asBiddableAdGroupCriterion($adGroupId, $root);
        $operation = ProductPartitions::createAddOperation($criterion);
        $operations[] = $operation;

        $newCondition = new ProductCanonicalCondition();
        $newCondition->setCondition(ProductCanonicalConditionCondition::NEW_VALUE);
        $newConditionUnit = ProductPartitions::createUnit($root, $newCondition);
        $criterion = ProductPartitions::asBiddableAdGroupCriterion(
            $adGroupId,
            $newConditionUnit,
            200000
        );
        $operation = ProductPartitions::createAddOperation($criterion);
        $operations[] = $operation;

        $usedCondition = new ProductCanonicalCondition();
        $usedCondition->setCondition(ProductCanonicalConditionCondition::USED);
        $usedConditionUnit = ProductPartitions::createUnit($root, $usedCondition);
        $criterion = ProductPartitions::asBiddableAdGroupCriterion(
            $adGroupId,
            $usedConditionUnit,
            100000
        );
        $operation = ProductPartitions::createAddOperation($criterion);
        $operations[] = $operation;

        $otherCondition = ProductPartitions::createSubdivision(
            $root,
            new ProductCanonicalCondition()
        );
        $criterion = ProductPartitions::asBiddableAdGroupCriterion(
            $adGroupId,
            $otherCondition
        );
        $operation = ProductPartitions::createAddOperation($criterion);
        $operations[] = $operation;

        $coolBrand = new ProductBrand();
        $coolBrand->setValue('CoolBrand');
        $coolBrandUnit = ProductPartitions::createUnit($otherCondition, $coolBrand);
        $criterion = ProductPartitions::asBiddableAdGroupCriterion(
            $adGroupId,
            $coolBrandUnit,
            900000
        );
        $operation = ProductPartitions::createAddOperation($criterion);
        $operations[] = $operation;

        $cheapBrand = new ProductBrand();
        $cheapBrand->setValue('CheapBrand');
        $cheapBrandUnit = ProductPartitions::createUnit($otherCondition, $cheapBrand);
        $criterion = ProductPartitions::asBiddableAdGroupCriterion(
            $adGroupId,
            $cheapBrandUnit,
            10000
        );
        $operation = ProductPartitions::createAddOperation($criterion);
        $operations[] = $operation;

        $otherBrand = ProductPartitions::createSubdivision(
            $otherCondition,
            new ProductBrand()
        );
        $criterion = ProductPartitions::asBiddableAdGroupCriterion(
            $adGroupId,
            $otherBrand
        );
        $operation = ProductPartitions::createAddOperation($criterion);
        $operations[] = $operation;

        // The value for the bidding category is a fixed ID for the 'Luggage & Bags'
        // category. You can retrieve IDs for categories from the
        // ConstantDataService.
        // See the 'GetProductCategoryTaxonomy' example for more details.
        $productBiddingCategory = new ProductBiddingCategory();
        $productBiddingCategory->setType(ProductDimensionType::BIDDING_CATEGORY_L1);
        $productBiddingCategory->setValue(-5914235892932915235);
        $productBiddingCategoryUnit = ProductPartitions::createUnit($otherBrand, $productBiddingCategory);
        $criterion = ProductPartitions::asBiddableAdGroupCriterion(
            $adGroupId,
            $productBiddingCategoryUnit,
            750000
        );
        $operation = ProductPartitions::createAddOperation($criterion);
        $operations[] = $operation;

        $productBiddingCategory = new ProductBiddingCategory();
        $productBiddingCategory->setType(ProductDimensionType::BIDDING_CATEGORY_L1);
        $productBiddingCategoryUnit = ProductPartitions::createUnit($otherBrand, $productBiddingCategory);
        $criterion = ProductPartitions::asBiddableAdGroupCriterion(
            $adGroupId,
            $productBiddingCategoryUnit,
            110000
        );
        $operation = ProductPartitions::createAddOperation($criterion);
        $operations[] = $operation;

        $adGroupCriterionService = $adWordsServices->get($session, AdGroupCriterionService::class);

        // Creates ad group criteria on the server.
        $adGroupCriterionService->mutate($operations);

        // Display the production partition tree.
        printf(
            "%s\n",
            ProductPartitions::showAdGroupTree(
                $adWordsServices,
                $session,
                $adGroupId
            )
        );
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()->withOAuth2Credential($oAuth2Credential)->build();
        self::runExample(
            new AdWordsServices(),
            $session,
            intval(self::AD_GROUP_ID)
        );
    }
}

AddProductPartitionTree::main();
