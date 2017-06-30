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
namespace Google\AdsApi\Examples\AdWords\v201702\AdvancedOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201702\cm\AdvertisingChannelSubType;
use Google\AdsApi\AdWords\v201702\cm\AdvertisingChannelType;
use Google\AdsApi\AdWords\v201702\cm\BiddingStrategyConfiguration;
use Google\AdsApi\AdWords\v201702\cm\BiddingStrategyType;
use Google\AdsApi\AdWords\v201702\cm\Budget;
use Google\AdsApi\AdWords\v201702\cm\BudgetBudgetDeliveryMethod;
use Google\AdsApi\AdWords\v201702\cm\BudgetOperation;
use Google\AdsApi\AdWords\v201702\cm\BudgetService;
use Google\AdsApi\AdWords\v201702\cm\Campaign;
use Google\AdsApi\AdWords\v201702\cm\CampaignCriterion;
use Google\AdsApi\AdWords\v201702\cm\CampaignCriterionOperation;
use Google\AdsApi\AdWords\v201702\cm\CampaignCriterionService;
use Google\AdsApi\AdWords\v201702\cm\CampaignOperation;
use Google\AdsApi\AdWords\v201702\cm\CampaignService;
use Google\AdsApi\AdWords\v201702\cm\CampaignStatus;
use Google\AdsApi\AdWords\v201702\cm\GeoTargetTypeSetting;
use Google\AdsApi\AdWords\v201702\cm\GeoTargetTypeSettingNegativeGeoTargetType;
use Google\AdsApi\AdWords\v201702\cm\Language;
use Google\AdsApi\AdWords\v201702\cm\Location;
use Google\AdsApi\AdWords\v201702\cm\Money;
use Google\AdsApi\AdWords\v201702\cm\Operator;
use Google\AdsApi\AdWords\v201702\cm\TargetCpaBiddingScheme;
use Google\AdsApi\AdWords\v201702\cm\UniversalAppBiddingStrategyGoalType;
use Google\AdsApi\AdWords\v201702\cm\UniversalAppCampaignSetting;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds a Universal App campaign. To get campaigns, run
 * GetCampaigns.php. To upload image assets for this campaign, run
 * UploadImage.php.
 */
class AddUniversalAppCampaign {

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session) {
    $campaignService = $adWordsServices->get($session, CampaignService::class);

    // Create campaign with some properties set.
    $campaign = new Campaign();
    $campaign->setName('Interplanetary Cruise #' . uniqid());
    // Recommendation: Set the campaign to PAUSED when creating it to stop
    // the ads from immediately serving. Set to ENABLED once you've added
    // targeting and the ads are ready to serve.
    $campaign->setStatus(CampaignStatus::PAUSED);

    // Set the advertising channel and subchannel types for Universal app
    // campaigns.
    $campaign->setAdvertisingChannelType(AdvertisingChannelType::MULTI_CHANNEL);
    $campaign->setAdvertisingChannelSubType(
        AdvertisingChannelSubType::UNIVERSAL_APP_CAMPAIGN);

    // Set the campaign's bidding strategy. Universal App campaigns
    // only support TARGET_CPA bidding strategy.
    $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
    $biddingStrategyConfiguration->setBiddingStrategyType(
        BiddingStrategyType::TARGET_CPA);

    // Set the target CPA to $1 / app install.
    $biddingScheme = new TargetCpaBiddingScheme();
    $money = new Money();
    $money->setMicroAmount(1000000);
    $biddingScheme->setTargetCpa($money);

    $biddingStrategyConfiguration->setBiddingScheme($biddingScheme);
    $campaign->setBiddingStrategyConfiguration($biddingStrategyConfiguration);

    // Set shared budget (required).
    $campaign->setBudget(new Budget());
    $campaign->getBudget()->setBudgetId(
        self::createBudget($adWordsServices, $session));

    // Optional: Set the start date.
    $campaign->setStartDate(date('Ymd', strtotime('+1 day')));

    // Optional: Set the end date.
    $campaign->setEndDate(date('Ymd', strtotime('+1 year')));

    // Set the campaign's assets and ad text ideas. These values will be used to
    // generate ads.
    $universalAppSetting = new UniversalAppCampaignSetting();
    $universalAppSetting->setAppId('com.labpixies.colordrips');
    $universalAppSetting->setDescription1('A cool puzzle game');
    $universalAppSetting->setDescription2('Remove connected blocks');
    $universalAppSetting->setDescription3('3 difficulty levels');
    $universalAppSetting->setDescription4('4 colorful fun skins');

    // Optional: You can set up to 10 image assets for your campaign.
    // See UploadImage.php for an example on how to upload images.
    //
    // $universalAppSetting->imageMediaIds = [INSERT_IMAGE_MEDIA_ID_HERE];

    // Optimize this campaign for getting new users for your app.
    $universalAppSetting->setUniversalAppBiddingStrategyGoalType(
        UniversalAppBiddingStrategyGoalType
            ::OPTIMIZE_FOR_INSTALL_CONVERSION_VOLUME);

    // If you select bidding strategy goal type as
    // OPTIMIZE_FOR_IN_APP_CONVERSION_VOLUME, then you may specify a set of
    // conversion types for in-app actions to optimize the campaign towards.
    // Conversion type IDs can be retrieved using ConversionTrackerService.get.
    //
    // $campaign->selectiveOptimization = new SelectiveOptimization();
    // $campaign->selectiveOptimization->conversionTypeIds = [
    //     INSERT_CONVERSION_TYPE_ID_1_HERE,
    //     INSERT_CONVERSION_TYPE_ID_2_HERE
    // ];

    // Optional: Set the campaign settings for Advanced location options.
    $geoTargetTypeSetting = new GeoTargetTypeSetting();
    $geoTargetTypeSetting->setNegativeGeoTargetType(
        GeoTargetTypeSettingNegativeGeoTargetType::LOCATION_OF_PRESENCE);
    $campaign->setSettings([$universalAppSetting, $geoTargetTypeSetting]);

    // Create a campaign operation and add it to the operations list.
    $operations = [];
    $operation = new CampaignOperation();
    $operation->setOperand($campaign);
    $operation->setOperator(Operator::ADD);
    $operations[] = $operation;

    // Create the campaign on the server and print out some information for the
    // campaign.
    $result = $campaignService->mutate($operations);
    foreach ($result->getValue() as $campaign) {
      printf("Universal App Campaign with name '%s' and ID %d was added.\n",
          $campaign->getName(), $campaign->getId());
      // Optional: Set the campaign's location and language targeting. No other
      // targeting criteria can be used for Universal App campaigns.
      self::setCampaignTargetingCriteria(
          $campaign->getId(), $adWordsServices, $session);
    }
  }

  /**
   * Creates the budget for the campaign.
   */
  private static function createBudget(AdWordsServices $adWordsServices,
      AdWordsSession $session) {
    $budgetService = $adWordsServices->get($session, BudgetService::class);

    // Create the shared budget (required).
    $budget = new Budget();
    $budget->setName('Interplanetary Cruise Budget #' . uniqid());
    $money = new Money();
    $money->setMicroAmount(50000000);
    $budget->setAmount($money);
    $budget->setDeliveryMethod(BudgetBudgetDeliveryMethod::STANDARD);

    // Universal App campaigns don't support shared budgets.
    $budget->setIsExplicitlyShared(false);
    $operations = [];

    // Create a budget operation.
    $operation = new BudgetOperation();
    $operation->setOperand($budget);
    $operation->setOperator(Operator::ADD);
    $operations[] = $operation;

    // Create the budget on the server.
    $result = $budgetService->mutate($operations);
    $budget = $result->getValue()[0];

    printf("Budget with name '%s' and ID %d was created.\n",
        $budget->getName(), $budget->getBudgetId());

    return $budget->getBudgetId();
  }

  /**
   * Sets the campaign's targeting criteria.
   */
  private static function setCampaignTargetingCriteria(
      $campaignId, AdWordsServices $adWordsServices, AdWordsSession $session) {
    $campaignCriterionService =
        $adWordsServices->get($session, CampaignCriterionService::class);

    $campaignCriteria = [];
    // Create locations. The IDs can be found in the documentation or retrieved
    // with the LocationCriterionService.
    $california = new Location();
    $california->setId(21137);
    $campaignCriteria[] = new CampaignCriterion($campaignId, null, $california);

    $mexico = new Location();
    $mexico->setId(2484);
    $campaignCriteria[] = new CampaignCriterion($campaignId, null, $mexico);

    // Create languages. The IDs can be found in the documentation or retrieved
    // with the ConstantDataService.
    $english = new Language();
    $english->setId(1000);
    $campaignCriteria[] = new CampaignCriterion($campaignId, null, $english);

    $spanish = new Language();
    $spanish->setId(1003);
    $campaignCriteria[] = new CampaignCriterion($campaignId, null, $spanish);

    // Create operations to add each of the criteria above.
    $operations = [];
    foreach ($campaignCriteria as $campaignCriterion) {
      $operation = new CampaignCriterionOperation();
      $operation->setOperand($campaignCriterion);
      $operation->setOperator(Operator::ADD);
      $operations[] = $operation;
    }

    // Set the campaign targets.
    $result = $campaignCriterionService->mutate($operations);

    // Display added campaign targets.
    foreach ($result->getValue() as $campaignCriterion) {
      printf("Campaign criterion of type '%s' and ID %d was added.\n",
          $campaignCriterion->getCriterion()->getType(),
          $campaignCriterion->getCriterion()->getId()
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
    $session = (new AdWordsSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential)
        ->build();
    self::runExample(new AdWordsServices(), $session);
  }
}

AddUniversalAppCampaign::main();
