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
use Google\AdsApi\AdWords\v201609\cm\AdGroup;
use Google\AdsApi\AdWords\v201609\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201609\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201609\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201609\cm\AdGroupOperation;
use Google\AdsApi\AdWords\v201609\cm\AdGroupService;
use Google\AdsApi\AdWords\v201609\cm\AdvertisingChannelType;
use Google\AdsApi\AdWords\v201609\cm\BiddingStrategyConfiguration;
use Google\AdsApi\AdWords\v201609\cm\BiddingStrategyType;
use Google\AdsApi\AdWords\v201609\cm\Budget;
use Google\AdsApi\AdWords\v201609\cm\Campaign;
use Google\AdsApi\AdWords\v201609\cm\CampaignOperation;
use Google\AdsApi\AdWords\v201609\cm\CampaignService;
use Google\AdsApi\AdWords\v201609\cm\CampaignStatus;
use Google\AdsApi\AdWords\v201609\cm\Operator;
use Google\AdsApi\AdWords\v201609\cm\ProductAd;
use Google\AdsApi\AdWords\v201609\cm\ShoppingSetting;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds a shopping campaign.
 */
class AddShoppingCampaign {

  const BUDGET_ID = 'INSERT_BUDGET_ID_HERE';
  const MERCHANT_ID = 'INSERT_MERCHANT_ID_HERE';

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $budgetId, $merchantId) {
    $campaignService = $adWordsServices->get($session, CampaignService::class);
    $adGroupService = $adWordsServices->get($session, AdGroupService::class);
    $adGroupAdService =
        $adWordsServices->get($session, AdGroupAdService::class);

    // Create a campaign with required and optional settings.
    $campaign = new Campaign();
    $campaign->setName('Shopping campaign #' . uniqid());
    // The advertisingChannelType is what makes this a Shopping campaign
    $campaign->setAdvertisingChannelType(AdvertisingChannelType::SHOPPING);
    // Recommendation: Set the campaign to PAUSED when creating it to stop
    // the ads from immediately serving. Set to ENABLED once you've added
    // targeting and the ads are ready to serve.
    $campaign->setStatus(CampaignStatus::PAUSED);

    // Set portfolio budget (required).
    $campaign->setBudget(new Budget());
    $campaign->getBudget()->setBudgetId($budgetId);

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
    // Set to "true" to enable Local Inventory Ads in your campaign.
    $shoppingSetting->setEnableLocal(true);
    $campaign->setSettings([$shoppingSetting]);

    // Create a campaign operation and add it to the operations list.
    $operations = [];
    $operation = new CampaignOperation();
    $operation->setOperand($campaign);
    $operation->setOperator(Operator::ADD);
    $operations[] = $operation;

    // Create the campaign on the server and print out some information.
    $campaign = $campaignService->mutate($operations)->getValue()[0];
    printf("Campaign with name '%s' and ID %d was added.\n",
        $campaign->getName(),
        $campaign->getId()
    );

    // Create ad group.
    $adGroup = new AdGroup();
    $adGroup->setCampaignId($campaign->getId());
    $adGroup->setName('Ad Group #' . uniqid());

    // Create an ad group operation and add it to the operations list.
    $operations = [];
    $operation = new AdGroupOperation();
    $operation->setOperand($adGroup);
    $operation->setOperator(Operator::ADD);
    $operations[] = $operation;

    // Create the ad group on the server and print out some information.
    $adGroup = $adGroupService->mutate($operations)->getValue()[0];
    printf("Ad group with name '%s' and ID %d was added.\n",
        $adGroup->getName(),
        $adGroup->getId()
    );

    // Create product ad.
    $productAd = new ProductAd();

    // Create ad group ad.
    $adGroupAd = new AdGroupAd();
    $adGroupAd->setAdGroupId($adGroup->getId());
    $adGroupAd->setAd($productAd);

    // Create an ad group ad operation and add it to the operations list.
    $operations = [];
    $operation = new AdGroupAdOperation();
    $operation->setOperand($adGroupAd);
    $operation->setOperator(Operator::ADD);
    $operations[] = $operation;

    // Create the ad group ad on the server and print out some information.
    $adGroupAd = $adGroupAdService->mutate($operations)->getValue()[0];
    printf("Product ad with ID %d was added.\n", $adGroupAd->getAd()->getId());
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

AddShoppingCampaign::main();
