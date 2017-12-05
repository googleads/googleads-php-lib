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
namespace Google\AdsApi\Examples\AdWords\v201710\ShoppingCampaigns;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201710\cm\CampaignCriterion;
use Google\AdsApi\AdWords\v201710\cm\CampaignCriterionOperation;
use Google\AdsApi\AdWords\v201710\cm\CampaignCriterionService;
use Google\AdsApi\AdWords\v201710\cm\Operator;
use Google\AdsApi\AdWords\v201710\cm\ProductBiddingCategory;
use Google\AdsApi\AdWords\v201710\cm\ProductBrand;
use Google\AdsApi\AdWords\v201710\cm\ProductCanonicalCondition;
use Google\AdsApi\AdWords\v201710\cm\ProductCanonicalConditionCondition;
use Google\AdsApi\AdWords\v201710\cm\ProductCustomAttribute;
use Google\AdsApi\AdWords\v201710\cm\ProductDimensionType;
use Google\AdsApi\AdWords\v201710\cm\ProductOfferId;
use Google\AdsApi\AdWords\v201710\cm\ProductScope;
use Google\AdsApi\AdWords\v201710\cm\ProductType;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example restricts the products that will be included in the campaign by
 * setting a ProductScope.
 */
class AddProductScope {

  const CAMPAIGN_ID = 'INSERT_CAMPAIGN_ID_HERE';

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $campaignId) {
    $campaignCriterionService =
        $adWordsServices->get($session, CampaignCriterionService::class);

    $productScope = new ProductScope();
    // This set of dimensions is for demonstration purposes only. It would be
    // extremely unlikely that you want to include so many dimensions in your
    // product scope.
    $productBrand = new ProductBrand();
    $productBrand->setValue('Nexus');

    $productCanonicalCondition = new ProductCanonicalCondition();
    $productCanonicalCondition->setCondition(
        ProductCanonicalConditionCondition::NEW_VALUE);

    $productCustomAttribute = new ProductCustomAttribute();
    $productCustomAttribute->setType(ProductDimensionType::CUSTOM_ATTRIBUTE_0);
    $productCustomAttribute->setValue('my attribute value');

    $productOfferId = new ProductOfferId();
    $productOfferId->setValue('book1');

    $productType1 = new ProductType();
    $productType1->setType(ProductDimensionType::PRODUCT_TYPE_L1);
    $productType1->setValue('Media');

    $productType2 = new ProductType();
    $productType2->setType(ProductDimensionType::PRODUCT_TYPE_L2);
    $productType2->setValue('Books');

    // The value for the bidding category is a fixed ID for the 'Luggage & Bags'
    // category. You can retrieve IDs for categories from the
    // ConstantDataService.
    // See the 'GetProductCategoryTaxonomy' example for more details.
    $productBiddingCategory = new ProductBiddingCategory();
    $productBiddingCategory->setType(ProductDimensionType::BIDDING_CATEGORY_L1);
    $productBiddingCategory->setValue(-5914235892932915235);

    $productScope->setDimensions([
        $productBrand,
        $productCanonicalCondition,
        $productCustomAttribute,
        $productOfferId,
        $productType1,
        $productType2,
        $productBiddingCategory
    ]);

    $campaignCriterion = new CampaignCriterion();
    $campaignCriterion->setCampaignId($campaignId);
    $campaignCriterion->setCriterion($productScope);

    // Create a campaign criterion operation and add it to the operations list.
    $operations = [];
    $operation = new CampaignCriterionOperation();
    $operation->setOperand($campaignCriterion);
    $operation->setOperator(Operator::ADD);
    $operations[] = $operation;

    // Create the campaign criterion on the server and print out some
    // information.
    $campaignCriterionService->mutate($operations);
    printf("Created a ProductScope criterion with ID %d.\n",
        $campaignCriterion->getCriterion()->getId());
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
        intval(self::CAMPAIGN_ID));
  }
}

AddProductScope::main();
