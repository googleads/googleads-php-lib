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
namespace Google\AdsApi\Examples\AdWords\v201710\BasicOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201710\cm\AdvertisingChannelType;
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
use Google\AdsApi\AdWords\v201710\cm\FrequencyCap;
use Google\AdsApi\AdWords\v201710\cm\GeoTargetTypeSetting;
use Google\AdsApi\AdWords\v201710\cm\GeoTargetTypeSettingNegativeGeoTargetType;
use Google\AdsApi\AdWords\v201710\cm\GeoTargetTypeSettingPositiveGeoTargetType;
use Google\AdsApi\AdWords\v201710\cm\Level;
use Google\AdsApi\AdWords\v201710\cm\ManualCpcBiddingScheme;
use Google\AdsApi\AdWords\v201710\cm\Money;
use Google\AdsApi\AdWords\v201710\cm\NetworkSetting;
use Google\AdsApi\AdWords\v201710\cm\Operator;
use Google\AdsApi\AdWords\v201710\cm\TimeUnit;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds campaigns.
 */
class AddCampaigns {

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session) {
    $budgetService = $adWordsServices->get($session, BudgetService::class);

    // Create the shared budget (required).
    $budget = new Budget();
    $budget->setName('Interplanetary Cruise Budget #' . uniqid());
    $money = new Money();
    $money->setMicroAmount(50000000);
    $budget->setAmount($money);
    $budget->setDeliveryMethod(BudgetBudgetDeliveryMethod::STANDARD);

    $operations = [];

    // Create a budget operation.
    $operation = new BudgetOperation();
    $operation->setOperand($budget);
    $operation->setOperator(Operator::ADD);
    $operations[] = $operation;

    // Create the budget on the server.
    $result = $budgetService->mutate($operations);
    $budget = $result->getValue()[0];

    $campaignService = $adWordsServices->get($session, CampaignService::class);

    $operations = [];

    // Create a campaign with required and optional settings.
    $campaign = new Campaign();
    $campaign->setName('Interplanetary Cruise #' . uniqid());
    $campaign->setAdvertisingChannelType(AdvertisingChannelType::SEARCH);

    // Set shared budget (required).
    $campaign->setBudget(new Budget());
    $campaign->getBudget()->setBudgetId($budget->getBudgetId());

    // Set bidding strategy (required).
    $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
    $biddingStrategyConfiguration->setBiddingStrategyType(
        BiddingStrategyType::MANUAL_CPC);

    // You can optionally provide a bidding scheme in place of the type.
    $biddingScheme = new ManualCpcBiddingScheme();
    $biddingScheme->setEnhancedCpcEnabled(false);
    $biddingStrategyConfiguration->setBiddingScheme($biddingScheme);

    $campaign->setBiddingStrategyConfiguration($biddingStrategyConfiguration);

    // Set network targeting (optional).
    $networkSetting = new NetworkSetting();
    $networkSetting->setTargetGoogleSearch(true);
    $networkSetting->setTargetSearchNetwork(true);
    $networkSetting->setTargetContentNetwork(true);
    $campaign->setNetworkSetting($networkSetting);

    // Set additional settings (optional).
    // Recommendation: Set the campaign to PAUSED when creating it to stop
    // the ads from immediately serving. Set to ENABLED once you've added
    // targeting and the ads are ready to serve.
    $campaign->setStatus(CampaignStatus::PAUSED);
    $campaign->setStartDate(date('Ymd', strtotime('+1 day')));
    $campaign->setEndDate(date('Ymd', strtotime('+1 month')));

    // Set frequency cap (optional).
    $frequencyCap = new FrequencyCap();
    $frequencyCap->setImpressions(5);
    $frequencyCap->setTimeUnit(TimeUnit::DAY);
    $frequencyCap->setLevel(Level::ADGROUP);
    $campaign->setFrequencyCap($frequencyCap);

    // Set advanced location targeting settings (optional).
    $geoTargetTypeSetting = new GeoTargetTypeSetting();
    $geoTargetTypeSetting->setPositiveGeoTargetType(
        GeoTargetTypeSettingPositiveGeoTargetType::DONT_CARE);
    $geoTargetTypeSetting->setNegativeGeoTargetType(
        GeoTargetTypeSettingNegativeGeoTargetType::DONT_CARE);
    $campaign->setSettings([$geoTargetTypeSetting]);

    // Create a campaign operation and add it to the operations list.
    $operation = new CampaignOperation();
    $operation->setOperand($campaign);
    $operation->setOperator(Operator::ADD);
    $operations[] = $operation;

    // Create a campaign with only required settings.
    $campaign = new Campaign();
    $campaign->setName('Interplanetary Cruise #' . uniqid());
    $campaign->setAdvertisingChannelType(AdvertisingChannelType::DISPLAY);

    // Set shared budget (required).
    $campaign->setBudget(new Budget());
    $campaign->getBudget()->setBudgetId($budget->getBudgetId());

    // Set bidding strategy (required).
    $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
    $biddingStrategyConfiguration->setBiddingStrategyType(
        BiddingStrategyType::MANUAL_CPC);
    $campaign->setBiddingStrategyConfiguration($biddingStrategyConfiguration);

    $campaign->setStatus(CampaignStatus::PAUSED);

    // Create a campaign operation and add it to the operations list.
    $operation = new CampaignOperation();
    $operation->setOperand($campaign);
    $operation->setOperator(Operator::ADD);
    $operations[] = $operation;

    // Create the campaigns on the server and print out some information for
    // each created campaign.
    $result = $campaignService->mutate($operations);
    foreach ($result->getValue() as $campaign) {
      printf("Campaign with name '%s' and ID %d was added.\n",
          $campaign->getName(),
          $campaign->getId()
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

AddCampaigns::main();

