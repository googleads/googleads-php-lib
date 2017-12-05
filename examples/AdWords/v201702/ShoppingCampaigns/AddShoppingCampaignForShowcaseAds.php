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
namespace Google\AdsApi\Examples\AdWords\v201702\ShoppingCampaigns;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\Shopping\v201702\ProductPartitions;
use Google\AdsApi\AdWords\v201702\cm\AdGroup;
use Google\AdsApi\AdWords\v201702\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201702\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201702\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201702\cm\AdGroupCriterionService;
use Google\AdsApi\AdWords\v201702\cm\AdGroupOperation;
use Google\AdsApi\AdWords\v201702\cm\AdGroupService;
use Google\AdsApi\AdWords\v201702\cm\AdGroupType;
use Google\AdsApi\AdWords\v201702\cm\AdvertisingChannelType;
use Google\AdsApi\AdWords\v201702\cm\BiddingStrategyConfiguration;
use Google\AdsApi\AdWords\v201702\cm\BiddingStrategyType;
use Google\AdsApi\AdWords\v201702\cm\Budget;
use Google\AdsApi\AdWords\v201702\cm\Campaign;
use Google\AdsApi\AdWords\v201702\cm\CampaignOperation;
use Google\AdsApi\AdWords\v201702\cm\CampaignService;
use Google\AdsApi\AdWords\v201702\cm\CampaignStatus;
use Google\AdsApi\AdWords\v201702\cm\CpcBid;
use Google\AdsApi\AdWords\v201702\cm\Image;
use Google\AdsApi\AdWords\v201702\cm\MediaMediaType;
use Google\AdsApi\AdWords\v201702\cm\MediaService;
use Google\AdsApi\AdWords\v201702\cm\Money;
use Google\AdsApi\AdWords\v201702\cm\Operator;
use Google\AdsApi\AdWords\v201702\cm\ProductCanonicalCondition;
use Google\AdsApi\AdWords\v201702\cm\ProductCanonicalConditionCondition;
use Google\AdsApi\AdWords\v201702\cm\ShoppingSetting;
use Google\AdsApi\AdWords\v201702\cm\ShowcaseAd;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds a Shopping campaign for Showcase ads.
 */
class AddShoppingCampaignForShowcaseAds {

  const BUDGET_ID = 'INSERT_BUDGET_ID_HERE';
  const MERCHANT_ID = 'INSERT_MERCHANT_ID_HERE';

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $budgetId, $merchantId) {
    $campaign = self::createCampaign(
        $adWordsServices, $session, $budgetId, $merchantId);
    printf("Campaign with name '%s' and ID %d was added.\n",
        $campaign->getName(), $campaign->getId());

    $adGroup = self::createAdGroup($adWordsServices, $session, $campaign);
    printf("Ad group with name '%s' and ID %d was added.\n",
        $adGroup->getName(), $adGroup->getId());

    $adGroupAd = self::createShowcaseAd($adWordsServices, $session, $adGroup);
    printf("Showcase ad with ID %d was added.\n", $adGroupAd->getAd()->getId());

    self::createProductPartitions(
        $adWordsServices, $session, $adGroup->getId());
    printf(
        "Product partition tree is:\n%s\n",
        ProductPartitions::showAdGroupTree(
            $adWordsServices, $session, $adGroup->getId())
    );
  }

  /** Creates a Shopping campaign. */
  private static function createCampaign(AdWordsServices $adWordsServices,
      AdWordsSession $session, $budgetId, $merchantId) {
    $campaignService = $adWordsServices->get($session, CampaignService::class);

    // Create a campaign.
    $campaign = new Campaign();
    $campaign->setName('Shopping campaign #' . uniqid());
    // The advertisingChannelType is what makes this a Shopping campaign.
    $campaign->setAdvertisingChannelType(AdvertisingChannelType::SHOPPING);

    // Recommendation: Set the campaign to PAUSED when creating it to prevent
    // the ads from immediately serving. Set to ENABLED once you've added
    // targeting and the ads are ready to serve.
    $campaign->setStatus(CampaignStatus::PAUSED);

    // Set shared budget (required).
    $budget = new Budget();
    $budget->setBudgetId($budgetId);
    $campaign->setBudget($budget);

    // Set bidding strategy (required).
    $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
    $biddingStrategyConfiguration->setBiddingStrategyType(
        BiddingStrategyType::MANUAL_CPC);
    $campaign->setBiddingStrategyConfiguration($biddingStrategyConfiguration);

    // All Shopping campaigns need a ShoppingSetting.
    $shoppingSetting = new ShoppingSetting();
    $shoppingSetting->setSalesCountry('US');
    $shoppingSetting->setCampaignPriority(0);
    $shoppingSetting->setMerchantId($merchantId);

    // Set to 'true' to enable Local Inventory Ads in your campaign.
    $shoppingSetting->setEnableLocal(true);

    $campaign->setSettings([$shoppingSetting]);

    // Create operation.
    $campaignOperation = new CampaignOperation();
    $campaignOperation->setOperand($campaign);
    $campaignOperation->setOperator(Operator::ADD);

    // Make the mutate request.
    $campaignAddResult = $campaignService->mutate([$campaignOperation]);
    $campaign = $campaignAddResult->getValue()[0];

    return $campaign;
  }

  /** Creates an ad group in the Shopping campaign. */
  private static function createAdGroup(
      AdWordsServices $adWordsServices,
      AdWordsSession $session,
      Campaign $campaign
  ) {
    $adGroupService = $adWordsServices->get($session, AdGroupService::class);

    // Create ad group.
    $adGroup = new AdGroup();
    $adGroup->setCampaignId($campaign->getId());
    $adGroup->setName('Ad Group #' . uniqid());

    // Required: Set the ad group type to SHOPPING_SHOWCASE_ADS.
    $adGroup->setAdGroupType(AdGroupType::SHOPPING_SHOWCASE_ADS);

    // Required: Set the ad group's bidding strategy configuration.
    $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
    // Showcase ads require either ManualCpc or EnhancedCpc.
    $biddingStrategyConfiguration->setBiddingStrategyType(
        BiddingStrategyType::MANUAL_CPC);

    // Optional: Set the bids.
    $bidAmount = new Money();
    $bidAmount->setMicroAmount(100000);
    $cpcBid = new CpcBid();
    $cpcBid->setBid($bidAmount);
    $biddingStrategyConfiguration->setBids([$cpcBid]);

    $adGroup->setBiddingStrategyConfiguration($biddingStrategyConfiguration);

    // Create operation.
    $adGroupOperation = new AdGroupOperation();
    $adGroupOperation->setOperand($adGroup);
    $adGroupOperation->setOperator(Operator::ADD);

    // Make the mutate request.
    $adGroupAddResult = $adGroupService->mutate([$adGroupOperation]);
    $adGroup = $adGroupAddResult->getValue()[0];

    return $adGroup;
  }

  /** Creates a Showcase ad. */
  private static function createShowcaseAd(
      AdWordsServices $adWordsServices,
      AdWordsSession $session,
      AdGroup $adGroup
  ) {
    // Create the Showcase ad.
    $adGroupAdService =
        $adWordsServices->get($session, AdGroupAdService::class);

    $showcaseAd = new ShowcaseAd();
    $showcaseAd->setName('Showcase ad #' . uniqid());
    $showcaseAd->setFinalUrls(['http://example.com/showcase']);
    $showcaseAd->setDisplayUrl('example.com');

    // Required: Set the ad's expanded image.
    $expandedImage = new Image();
    $expandedImage->setMediaId(self::uploadImage(
        $adWordsServices,
        $session,
        'https://goo.gl/IfVlpF'
    ));
    $showcaseAd->setExpandedImage($expandedImage);

    // Optional: Set the collapsed image.
    $collapsedImage = new Image();
    $collapsedImage->setMediaId(self::uploadImage(
        $adWordsServices,
        $session,
        'https://goo.gl/NqTxAE'
    ));
    $showcaseAd->setCollapsedImage($collapsedImage);

    // Create ad group ad.
    $adGroupAd = new AdGroupAd();
    $adGroupAd->setAdGroupId($adGroup->getId());
    $adGroupAd->setAd($showcaseAd);

    // Create an ad group ad operation.
    $adGroupAdOperation = new AdGroupAdOperation();
    $adGroupAdOperation->setOperand($adGroupAd);
    $adGroupAdOperation->setOperator(Operator::ADD);

    // Creates an ad group ad on the server.
    $adGroupAdAddResult = $adGroupAdService->mutate([$adGroupAdOperation]);
    $adGroupAd = $adGroupAdAddResult->getValue()[0];

    return $adGroupAd;
  }

  /** Creates the product partition tree for the ad group. */
  private static function createProductPartitions(
      AdWordsServices $adWordsServices, AdWordsSession $session, $adGroupId) {
    $operations = [];

    $root = ProductPartitions::createSubdivision();
    $criterion =
        ProductPartitions::asBiddableAdGroupCriterion($adGroupId, $root);
    $operation = ProductPartitions::createAddOperation($criterion);
    $operations[] = $operation;

    $newCondition = new ProductCanonicalCondition();
    $newCondition->setCondition(ProductCanonicalConditionCondition::NEW_VALUE);
    $newConditionUnit = ProductPartitions::createUnit($root, $newCondition);
    $criterion = ProductPartitions::asBiddableAdGroupCriterion(
        $adGroupId, $newConditionUnit);
    $operation = ProductPartitions::createAddOperation($criterion);
    $operations[] = $operation;

    $usedCondition = new ProductCanonicalCondition();
    $usedCondition->setCondition(ProductCanonicalConditionCondition::USED);
    $usedConditionUnit = ProductPartitions::createUnit($root, $usedCondition);
    $criterion = ProductPartitions::asBiddableAdGroupCriterion(
        $adGroupId, $usedConditionUnit);
    $operation = ProductPartitions::createAddOperation($criterion);
    $operations[] = $operation;

    // Exclude everything else.
    $excludedUnit =
        ProductPartitions::createUnit($root, new ProductCanonicalCondition());
    $criterion = ProductPartitions::asNegativeAdGroupCriterion(
        $adGroupId, $excludedUnit);
    $operation = ProductPartitions::createAddOperation($criterion);
    $operations[] = $operation;

    $adGroupCriterionService =
        $adWordsServices->get($session, AdGroupCriterionService::class);

    // Creates ad group criteria on the server.
    $adGroupCriterionService->mutate($operations);
  }

  /** Uploads an image. */
  private static function uploadImage(AdWordsServices $adWordsServices,
      AdWordsSession $session, $url) {
    $mediaService = $adWordsServices->get($session, MediaService::class);

    // Create image.
    $image = new Image();
    $image->setData(file_get_contents($url));
    $image->setType(MediaMediaType::IMAGE);

    // Upload image into the server.
    $result = $mediaService->upload([$image]);

    return $result[0]->getMediaId();
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
    self::runExample(
        new AdWordsServices(),
        $session,
        intval(self::BUDGET_ID),
        intval(self::MERCHANT_ID)
    );
  }
}

AddShoppingCampaignForShowcaseAds::main();
