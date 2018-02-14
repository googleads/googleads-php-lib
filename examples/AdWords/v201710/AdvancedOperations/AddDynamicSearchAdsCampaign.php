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

namespace Google\AdsApi\Examples\AdWords\v201710\AdvancedOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201710\cm\AdGroup;
use Google\AdsApi\AdWords\v201710\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201710\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201710\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201710\cm\AdGroupAdStatus;
use Google\AdsApi\AdWords\v201710\cm\AdGroupCriterionOperation;
use Google\AdsApi\AdWords\v201710\cm\AdGroupCriterionService;
use Google\AdsApi\AdWords\v201710\cm\AdGroupOperation;
use Google\AdsApi\AdWords\v201710\cm\AdGroupService;
use Google\AdsApi\AdWords\v201710\cm\AdGroupStatus;
use Google\AdsApi\AdWords\v201710\cm\AdGroupType;
use Google\AdsApi\AdWords\v201710\cm\AdvertisingChannelType;
use Google\AdsApi\AdWords\v201710\cm\BiddableAdGroupCriterion;
use Google\AdsApi\AdWords\v201710\cm\BiddingStrategyConfiguration;
use Google\AdsApi\AdWords\v201710\cm\BiddingStrategyType;
use Google\AdsApi\AdWords\v201710\cm\Budget;
use Google\AdsApi\AdWords\v201710\cm\BudgetBudgetDeliveryMethod;
use Google\AdsApi\AdWords\v201710\cm\BudgetOperation;
use Google\AdsApi\AdWords\v201710\cm\BudgetService;
use Google\AdsApi\AdWords\v201710\cm\Campaign;
use Google\AdsApi\AdWords\v201710\cm\CampaignOperation;
use Google\AdsApi\AdWords\v201710\cm\CampaignService;
use Google\AdsApi\AdWords\v201710\cm\CampaignStatus;
use Google\AdsApi\AdWords\v201710\cm\CpcBid;
use Google\AdsApi\AdWords\v201710\cm\DynamicSearchAdsSetting;
use Google\AdsApi\AdWords\v201710\cm\ExpandedDynamicSearchAd;
use Google\AdsApi\AdWords\v201710\cm\Money;
use Google\AdsApi\AdWords\v201710\cm\Operator;
use Google\AdsApi\AdWords\v201710\cm\UserStatus;
use Google\AdsApi\AdWords\v201710\cm\Webpage;
use Google\AdsApi\AdWords\v201710\cm\WebpageCondition;
use Google\AdsApi\AdWords\v201710\cm\WebpageConditionOperand;
use Google\AdsApi\AdWords\v201710\cm\WebpageParameter;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This code example adds a Dynamic Search Ads campaign. To get campaigns,
 * run GetCampaigns.php.
 */
class AddDynamicSearchAdsCampaign
{

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session
    ) {
        $budget = self::createBudget($adWordsServices, $session);

        $campaign = self::createCampaign($adWordsServices, $session, $budget);
        $adGroup = self::createAdGroup($adWordsServices, $session, $campaign);
        self::createExpandedDSA($adWordsServices, $session, $adGroup);
        self::addWebPageCriteria($adWordsServices, $session, $adGroup);
    }

    /**
     * Creates the budget.
     */
    private static function createBudget(
        AdWordsServices $adWordsServices,
        AdWordsSession $session
    ) {
        $budgetService = $adWordsServices->get($session, BudgetService::class);

        // Create a budget, which can be shared by multiple campaigns.
        $sharedBudget = new Budget();
        $sharedBudget->setName('Interplanetary Cruise #' . uniqid());
        $money = new Money();
        $money->setMicroAmount(50000000);
        $sharedBudget->setAmount($money);
        $sharedBudget->setDeliveryMethod(BudgetBudgetDeliveryMethod::STANDARD);

        // Create a budget operation.
        $operation = new BudgetOperation();
        $operation->setOperand($sharedBudget);
        $operation->setOperator(Operator::ADD);

        // Create the budget on the server.
        $result = $budgetService->mutate([$operation]);
        $sharedBudget = $result->getValue()[0];

        return $sharedBudget;
    }

    /**
     * Creates the campaign.
     */
    private static function createCampaign(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        Budget $budget
    ) {
        $campaignService = $adWordsServices->get($session, CampaignService::class);

        // Create campaign with some properties set.
        $campaign = new Campaign();
        $campaign->setName('Interplanetary Cruise #' . uniqid());
        $campaign->setAdvertisingChannelType(AdvertisingChannelType::SEARCH);

        // Recommendation: Set the campaign to PAUSED when creating it to prevent
        // the ads from immediately serving. Set to ENABLED once you've added
        // targeting and the ads are ready to serve.
        $campaign->setStatus(CampaignStatus::PAUSED);

        $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
        $biddingStrategyConfiguration->setBiddingStrategyType(
            BiddingStrategyType::MANUAL_CPC
        );
        $campaign->setBiddingStrategyConfiguration($biddingStrategyConfiguration);

        // Only the budgetId should be sent, all other fields will be ignored by
        // CampaignService.
        $campaignBudget = new Budget();
        $campaignBudget->setBudgetId($budget->getBudgetId());
        $campaign->setBudget($campaignBudget);

        // Required: Set the campaign's Dynamic Search Ads settings.
        $dynamicSearchAdsSetting = new DynamicSearchAdsSetting();
        // Required: Set the domain name and language.
        $dynamicSearchAdsSetting->setDomainName('example.com');
        $dynamicSearchAdsSetting->setLanguageCode('en');

        // Set the campaign settings.
        $campaign->setSettings([$dynamicSearchAdsSetting]);

        // Optional: Set the start date.
        $campaign->setStartDate(date('Ymd', strtotime('+1 day')));
        // Optional: Set the end date.
        $campaign->setEndDate(date('Ymd', strtotime('+1 year')));

        // Create a campaign operation.
        $operation = new CampaignOperation();
        $operation->setOperand($campaign);
        $operation->setOperator(Operator::ADD);

        // Create the campaign on the server and print out some information.
        $result = $campaignService->mutate([$operation]);
        $campaign = $result->getValue()[0];
        printf(
            "Campaign with name '%s' and ID %d was added.\n",
            $campaign->getName(),
            $campaign->getId()
        );

        return $campaign;
    }

    /**
     * Creates the ad group.
     */
    private static function createAdGroup(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        Campaign $campaign
    ) {
        $adGroupService = $adWordsServices->get($session, AdGroupService::class);

        // Create the ad group.
        $adGroup = new AdGroup();

        // Required: Set the ad group's type to Dynamic Search Ads.
        $adGroup->setAdGroupType(AdGroupType::SEARCH_DYNAMIC_ADS);

        $adGroup->setName('Interplanetary Cruise #' . uniqid());
        $adGroup->setCampaignId($campaign->getId());
        $adGroup->setStatus(AdGroupStatus::PAUSED);

        // Recommended: Set a tracking URL template for your ad group if you want to
        // use URL tracking software.
        $adGroup->setTrackingUrlTemplate(
            'http://tracker.example.com/traveltracker/{escapedlpurl}'
        );

        // Set the ad group bids.
        $biddingStrategyConfiguration = new BiddingStrategyConfiguration();

        $cpcBid = new CpcBid();
        $money = new Money();
        $money->setMicroAmount(3000000);
        $cpcBid->setBid($money);
        $biddingStrategyConfiguration->setBids([$cpcBid]);

        $adGroup->setBiddingStrategyConfiguration($biddingStrategyConfiguration);

        // Create an ad group operation.
        $operation = new AdGroupOperation();
        $operation->setOperand($adGroup);
        $operation->setOperator(Operator::ADD);

        // Create the ad group on the server and print out some information.
        $result = $adGroupService->mutate([$operation]);
        $adGroup = $result->getValue()[0];
        printf(
            "Ad group with name '%s' and ID %d was added.\n",
            $adGroup->getName(),
            $adGroup->getId()
        );

        return $adGroup;
    }

    /**
     * Creates the expanded Dynamic Search Ad.
     */
    private static function createExpandedDSA(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        AdGroup $adGroup
    ) {
        $adGroupAdService = $adWordsServices->get($session, AdGroupAdService::class);

        // Create the expanded Dynamic Search Ad. This ad will have its headline
        // and final URL auto-generated at serving time according to domain name
        // specific information provided by DynamicSearchAdsSetting at the
        // campaign level.
        $expandedDSA = new ExpandedDynamicSearchAd();
        // Set the ad description.
        $expandedDSA->setDescription('Buy your tickets now!');

        // Create the ad group ad.
        $adGroupAd = new AdGroupAd();
        $adGroupAd->setAdGroupId($adGroup->getId());
        $adGroupAd->setAd($expandedDSA);

        // Optional: Set the status.
        $adGroupAd->setStatus(AdGroupAdStatus::PAUSED);

        // Create the operation.
        $operation = new AdGroupAdOperation();
        $operation->setOperator(Operator::ADD);
        $operation->setOperand($adGroupAd);

        // Create the ad on the server and print some information.
        $result = $adGroupAdService->mutate([$operation]);
        $newAdGroupAd = $result->getValue()[0];
        $expandedDSA = $newAdGroupAd->getAd();
        printf(
            "Expanded Dynamic Search Ad with ID %d and description '%s' was added.\n",
            $expandedDSA->getId(),
            $expandedDSA->getDescription()
        );
    }

    /**
     * Adds a web page criteria to target Dynamic Search Ads.
     */
    private static function addWebPageCriteria(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        AdGroup $adGroup
    ) {
        $adGroupCriterionService = $adWordsServices->get($session, AdGroupCriterionService::class);

        // Create a webpage criterion for special offers.
        $param = new WebpageParameter();
        $param->setCriterionName('Special offers');

        // Create a webpage criterion for special offers.
        $urlCondition = new WebpageCondition();
        $urlCondition->setOperand(WebpageConditionOperand::URL);
        $urlCondition->setArgument('/specialoffers');

        $titleCondition = new WebpageCondition();
        $titleCondition->setOperand(WebpageConditionOperand::PAGE_TITLE);
        $titleCondition->setArgument('Special Offer');

        $param->setConditions([$urlCondition, $titleCondition]);

        $webpage = new Webpage();
        $webpage->setParameter($param);

        // Create a biddable ad group criterion.
        $biddableAdGroupCriterion = new BiddableAdGroupCriterion();
        $biddableAdGroupCriterion->setAdGroupId($adGroup->getId());
        $biddableAdGroupCriterion->setCriterion($webpage);
        $biddableAdGroupCriterion->setUserStatus(UserStatus::PAUSED);

        // Set a custom bid for this criterion.
        $biddingStrategyConfiguration = new BiddingStrategyConfiguration();

        // Optional: set a custom bid.
        $cpcBid = new CpcBid();
        $money = new Money();
        $money->setMicroAmount(10000000);
        $cpcBid->setBid($money);
        $biddingStrategyConfiguration->setBids([$cpcBid]);
        $biddableAdGroupCriterion->setBiddingStrategyConfiguration(
            $biddingStrategyConfiguration
        );

        $operation = new AdGroupCriterionOperation();
        $operation->setOperand($biddableAdGroupCriterion);
        $operation->setOperator(Operator::ADD);

        // Create the criterion on the server and print out some information.
        $result = $adGroupCriterionService->mutate([$operation]);
        $adGroupCriterion = $result->getValue()[0];
        printf(
            "Web page criterion with ID %d was added to ad group ID %d.\n",
            $adGroupCriterion->getCriterion()->getId(),
            $adGroupCriterion->getAdGroupId()
        );
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()->withOAuth2Credential($oAuth2Credential)->build();
        self::runExample(new AdWordsServices(), $session);
    }
}

AddDynamicSearchAdsCampaign::main();
