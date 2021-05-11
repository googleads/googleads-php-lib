<?php
/**
 * Copyright 2018 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\AdsApi\Examples\AdWords\v201809\ShoppingCampaigns;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201809\cm\AdGroup;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201809\cm\AdGroupCriterionOperation;
use Google\AdsApi\AdWords\v201809\cm\AdGroupCriterionService;
use Google\AdsApi\AdWords\v201809\cm\AdGroupOperation;
use Google\AdsApi\AdWords\v201809\cm\AdGroupService;
use Google\AdsApi\AdWords\v201809\cm\AdGroupType;
use Google\AdsApi\AdWords\v201809\cm\AdvertisingChannelSubType;
use Google\AdsApi\AdWords\v201809\cm\AdvertisingChannelType;
use Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion;
use Google\AdsApi\AdWords\v201809\cm\BiddingStrategyConfiguration;
use Google\AdsApi\AdWords\v201809\cm\BiddingStrategyType;
use Google\AdsApi\AdWords\v201809\cm\Budget;
use Google\AdsApi\AdWords\v201809\cm\BudgetBudgetDeliveryMethod;
use Google\AdsApi\AdWords\v201809\cm\BudgetOperation;
use Google\AdsApi\AdWords\v201809\cm\BudgetService;
use Google\AdsApi\AdWords\v201809\cm\Campaign;
use Google\AdsApi\AdWords\v201809\cm\CampaignOperation;
use Google\AdsApi\AdWords\v201809\cm\CampaignService;
use Google\AdsApi\AdWords\v201809\cm\CampaignStatus;
use Google\AdsApi\AdWords\v201809\cm\GoalOptimizedShoppingAd;
use Google\AdsApi\AdWords\v201809\cm\Money;
use Google\AdsApi\AdWords\v201809\cm\Operator;
use Google\AdsApi\AdWords\v201809\cm\ProductPartition;
use Google\AdsApi\AdWords\v201809\cm\ProductPartitionType;
use Google\AdsApi\AdWords\v201809\cm\ShoppingSetting;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds a Smart Shopping campaign with an ad group, and ad group
 * ad.
 */
class AddSmartShoppingAd
{

    const MERCHANT_ID = 'INSERT_MERCHANT_ID_HERE';

    // If set to true, a default partition will be created.
    // Set it to false if you plan to run the AddProductPartitionTree.php
    // example right after this example.
    const SHOULD_CREATE_DEFAULT_PARTITION = true;

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $merchantId,
        $shouldCreateDefaultPartition
    ) {
        $budgetId = self::createBudget($adWordsServices, $session);
        $campaignId = self::createSmartCampaign(
            $adWordsServices,
            $session,
            $budgetId,
            $merchantId
        );
        $adGroupId = self::createSmartShoppingAdGroup(
            $adWordsServices,
            $session,
            $campaignId
        );
        self::createSmartShoppingAd($adWordsServices, $session, $adGroupId);

        if ($shouldCreateDefaultPartition) {
            self::createDefaultPartition(
                $adWordsServices,
                $session,
                $adGroupId
            );
        }
    }

    /**
     * Creates a non-shared budget for a Smart Shopping campaign. Smart Shopping
     * campaigns support only non-shared budgets.
     *
     * @param AdWordsServices $adWordsServices
     * @param AdWordsSession $session
     * @return int the created budget ID
     */
    private static function createBudget(
        AdWordsServices $adWordsServices,
        AdWordsSession $session
    ) {
        $budgetService = $adWordsServices->get($session, BudgetService::class);

        $budget = new Budget();
        $budget->setName('Interplanetary Cruise Budget #' . uniqid());
        $money = new Money();
        // This budget equals 50.00 units of your account's currency, e.g.,
        // 50 USD if your currency is USD.
        $money->setMicroAmount(50000000);
        $budget->setAmount($money);
        $budget->setDeliveryMethod(BudgetBudgetDeliveryMethod::STANDARD);
        // Non-shared budgets are required for Smart Shopping campaigns.
        $budget->setIsExplicitlyShared(false);

        // Create a budget operation.
        $operation = new BudgetOperation();
        $operation->setOperand($budget);
        $operation->setOperator(Operator::ADD);

        // Create the budget on the server.
        $addedBudget = $budgetService->mutate([$operation])->getValue()[0];

        printf(
            "Budget with name '%s' and ID %d was created.%s",
            $addedBudget->getName(),
            $addedBudget->getBudgetId(),
            PHP_EOL
        );

        return $addedBudget->getBudgetId();
    }

    /**
     * Creates a Smart Shopping campaign.
     *
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $session the AdWords session
     * @param int $budgetId the budget ID
     * @param int $merchantId the Merchant center ID
     * @return int the created campaign ID
     */
    private static function createSmartCampaign(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $budgetId,
        $merchantId
    ) {
        $campaignService =
            $adWordsServices->get($session, CampaignService::class);

        // Create a campaign with required and optional settings.
        $campaign = new Campaign();
        $campaign->setName('Smart Shopping campaign #' . uniqid());
        // The advertisingChannelType is what makes this a Shopping campaign.
        $campaign->setAdvertisingChannelType(AdvertisingChannelType::SHOPPING);
        // Sets the advertisingChannelSubType to SHOPPING_GOAL_OPTIMIZED_ADS to
        // make this a Smart Shopping campaign.
        $campaign->setAdvertisingChannelSubType(
            AdvertisingChannelSubType::SHOPPING_GOAL_OPTIMIZED_ADS
        );
        // Recommendation: Set the campaign to PAUSED when creating it to stop
        // the ads from immediately serving. Set to ENABLED once you've added
        // targeting and the ads are ready to serve.
        $campaign->setStatus(CampaignStatus::PAUSED);

        // Set a budget.
        $budget = new Budget();
        $budget->setBudgetId($budgetId);
        $campaign->setBudget($budget);

        // Set a bidding strategy. Only MAXIMIZE_CONVERSION_VALUE is supported.
        $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
        $biddingStrategyConfiguration->setBiddingStrategyType(
            BiddingStrategyType::MAXIMIZE_CONVERSION_VALUE
        );

        $campaign->setBiddingStrategyConfiguration(
            $biddingStrategyConfiguration
        );

        // All Shopping campaigns need a ShoppingSetting.
        $shoppingSetting = new ShoppingSetting();
        $shoppingSetting->setSalesCountry('US');
        $shoppingSetting->setMerchantId($merchantId);
        $campaign->setSettings([$shoppingSetting]);

        // Create a campaign operation and add it to the operations list.
        $operation = new CampaignOperation();
        $operation->setOperand($campaign);
        $operation->setOperator(Operator::ADD);

        // Create the campaign on the server and print out some information.
        $addedCampaign = $campaignService->mutate([$operation])->getValue()[0];
        printf(
            "Smart Shopping campaign with name '%s' and ID %d was added.%s",
            $addedCampaign->getName(),
            $addedCampaign->getId(),
            PHP_EOL
        );

        return $addedCampaign->getId();
    }

    /**
     * Creates a Smart Shopping ad group by setting the ad group type to
     * SHOPPING_GOAL_OPTIMIZED_ADS.
     *
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $session the AdWords session
     * @param int $campaignId the campaign ID
     * @return int the ad group ID
     */
    private static function createSmartShoppingAdGroup(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $campaignId
    ) {
        $adGroupService =
            $adWordsServices->get($session, AdGroupService::class);

        // Create an ad group.
        $adGroup = new AdGroup();
        $adGroup->setCampaignId($campaignId);
        $adGroup->setName('Smart Shopping ad group #' . uniqid());

        // Set the ad group type to SHOPPING_GOAL_OPTIMIZED_ADS.
        $adGroup->setAdGroupType(AdGroupType::SHOPPING_GOAL_OPTIMIZED_ADS);

        // Create operation.
        $adGroupOperation = new AdGroupOperation();
        $adGroupOperation->setOperand($adGroup);
        $adGroupOperation->setOperator(Operator::ADD);

        // Create the ad group on the server and print out some information.
        $addedAdGroup = $adGroupService->mutate([$adGroupOperation])
            ->getValue()[0];
        printf(
            "Smart Shopping ad group with name '%s' and ID %d was added.%s",
            $addedAdGroup->getName(),
            $addedAdGroup->getId(),
            PHP_EOL
        );

        return $addedAdGroup->getId();
    }

    /**
     * Creates a Smart Shopping ad.
     *
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $session the AdWords session
     * @param int $adGroupId the ad group ID
     */
    private static function createSmartShoppingAd(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $adGroupId
    ) {
        $adGroupAdService =
            $adWordsServices->get($session, AdGroupAdService::class);

        // Create a Smart Shopping ad (Goal-optimized Shopping ad).
        $smartShoppingAd = new GoalOptimizedShoppingAd();

        // Create an ad group ad.
        $adGroupAd = new AdGroupAd();
        $adGroupAd->setAdGroupId($adGroupId);
        $adGroupAd->setAd($smartShoppingAd);

        // Create an ad group ad operation and add it to the operations list.
        $operation = new AdGroupAdOperation();
        $operation->setOperand($adGroupAd);
        $operation->setOperator(Operator::ADD);

        // Create the ad group ad on the server and print out some information.
        $addedAdGroupAd = $adGroupAdService->mutate([$operation])
            ->getValue()[0];
        printf(
            "Smart Shopping ad with ID %d was added.%s",
            $addedAdGroupAd->getAd()->getId(),
            PHP_EOL
        );
    }

    /**
     * Creates a default product partition as an ad group criterion.
     *
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $session the AdWords session
     * @param int $adGroupId the ad group ID
     */
    private static function createDefaultPartition(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $adGroupId
    ) {
        $adGroupCriterionService =
            $adWordsServices->get($session, AdGroupCriterionService::class);

        // Creates an ad group criterion for 'All products'.
        $productPartition = new ProductPartition();
        $productPartition->setPartitionType(ProductPartitionType::UNIT);

        // Creates a biddable ad group criterion.
        $criterion = new BiddableAdGroupCriterion();
        $criterion->setAdGroupId($adGroupId);
        $criterion->setCriterion($productPartition);

        // Creates an ad group criterion operation.
        $operation = new AdGroupCriterionOperation();
        $operation->setOperand($criterion);
        $operation->setOperator(Operator::ADD);

        $addedAdGroupCriterion = $adGroupCriterionService->mutate([$operation])
            ->getValue()[0];
        printf(
            "Ad group criterion with ID %d in ad group with ID %d"
            . " was added.%s",
            $addedAdGroupCriterion->getCriterion()->getId(),
            $addedAdGroupCriterion->getAdGroupId(),
            PHP_EOL
        );
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();
        self::runExample(
            new AdWordsServices(),
            $session,
            intval(self::MERCHANT_ID),
            boolval(self::SHOULD_CREATE_DEFAULT_PARTITION)
        );
    }
}

AddSmartShoppingAd::main();
