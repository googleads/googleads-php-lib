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
use Google\AdsApi\AdWords\v201710\cm\AdvertisingChannelType;
use Google\AdsApi\AdWords\v201710\cm\BiddingStrategyConfiguration;
use Google\AdsApi\AdWords\v201710\cm\BiddingStrategyOperation;
use Google\AdsApi\AdWords\v201710\cm\BiddingStrategyService;
use Google\AdsApi\AdWords\v201710\cm\Budget;
use Google\AdsApi\AdWords\v201710\cm\BudgetBudgetDeliveryMethod;
use Google\AdsApi\AdWords\v201710\cm\BudgetOperation;
use Google\AdsApi\AdWords\v201710\cm\BudgetService;
use Google\AdsApi\AdWords\v201710\cm\Campaign;
use Google\AdsApi\AdWords\v201710\cm\CampaignOperation;
use Google\AdsApi\AdWords\v201710\cm\CampaignService;
use Google\AdsApi\AdWords\v201710\cm\CampaignStatus;
use Google\AdsApi\AdWords\v201710\cm\Money;
use Google\AdsApi\AdWords\v201710\cm\NetworkSetting;
use Google\AdsApi\AdWords\v201710\cm\Operator;
use Google\AdsApi\AdWords\v201710\cm\SharedBiddingStrategy;
use Google\AdsApi\AdWords\v201710\cm\TargetSpendBiddingScheme;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds a portfolio bidding strategy and uses it to
 * construct a campaign.
 */
class UsePortfolioBiddingStrategy {

  // Enter the budget ID to be used or leave as null to create a new one.
  const BUDGET_ID = null;

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $sharedBudgetId = null) {
    $biddingStrategy = self::createBiddingStrategy($adWordsServices, $session);

    if ($sharedBudgetId === null) {
      $budget = self::createSharedBudget($adWordsServices, $session);
      $sharedBudgetId = $budget->getBudgetId();
    }
    self::createCampaignWithBiddingStrategy(
        $adWordsServices,
        $session,
        $biddingStrategy->getId(),
        $sharedBudgetId
    );
  }

  /**
   * Creates a shared bidding strategy.
   */
  private static function createBiddingStrategy(
      AdWordsServices $adWordsServices,
      AdWordsSession $session
  ) {
    $biddingStrategyService =
        $adWordsServices->get($session, BiddingStrategyService::class);

    // Create a portfolio bidding strategy.
    $biddingStrategy = new SharedBiddingStrategy();
    $biddingStrategy->setName("Maximize Clicks " . uniqid());

    $biddingScheme = new TargetSpendBiddingScheme();
    // Optionally set additional bidding scheme parameters.
    $bidCeiling = new Money();
    $bidCeiling->setMicroAmount(2000000);
    $biddingScheme->setBidCeiling($bidCeiling);
    $spendTarget = new Money();
    $spendTarget->setMicroAmount(20000000);
    $biddingScheme->setSpendTarget($spendTarget);

    $biddingStrategy->setBiddingScheme($biddingScheme);

    // Create the bidding strategy operation.
    $operation = new BiddingStrategyOperation();
    $operation->setOperator(Operator::ADD);
    $operation->setOperand($biddingStrategy);

    $result = $biddingStrategyService->mutate([$operation]);
    $newBiddingStrategy = $result->getValue()[0];
    printf(
        "Portfolio bidding strategy with name '%s' and ID %d of type %s was "
            . "created.\n",
        $newBiddingStrategy->getName(),
        $newBiddingStrategy->getId(),
        $newBiddingStrategy->getType()
    );

    return $newBiddingStrategy;
  }

  /**
   * Creates an explicit budget to be used to create a campaign.
   */
  private static function createSharedBudget(AdWordsServices $adWordsServices,
      AdWordsSession $session) {
    $budgetService = $adWordsServices->get($session, BudgetService::class);

    // Create the shared budget.
    $budget = new Budget();
    $budget->setName('Shared Interplanetary Budget #' . uniqid());
    $money = new Money();
    $money->setMicroAmount(50000000);
    $budget->setAmount($money);
    $budget->setDeliveryMethod(BudgetBudgetDeliveryMethod::STANDARD);
    $budget->setIsExplicitlyShared(true);

    $operations = [];

    // Create a budget operation.
    $operation = new BudgetOperation();
    $operation->setOperand($budget);
    $operation->setOperator(Operator::ADD);
    $operations[] = $operation;

    // Create the budget on the server.
    $result = $budgetService->mutate($operations);

    return $result->getValue()[0];
  }

  /**
   * Create a campaign with a portfolio bidding strategy.
   */
  private static function createCampaignWithBiddingStrategy(
      AdWordsServices $adWordsServices,
      AdWordsSession $session,
      $biddingStrategyId,
      $sharedBudgetId
  ) {
    $campaignService = $adWordsServices->get($session, CampaignService::class);

    // Create campaign with some properties set.
    $campaign = new Campaign();
    $campaign->setName('Interplanetary Cruise #' . uniqid());

    // Set the budget.
    $campaign->setBudget(new Budget());
    $campaign->getBudget()->setBudgetId($sharedBudgetId);
    $campaign->setAdvertisingChannelType(AdvertisingChannelType::SEARCH);

    // Set the campaign's bidding strategy.
    $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
    $biddingStrategyConfiguration->setBiddingStrategyId($biddingStrategyId);

    $campaign->setBiddingStrategyConfiguration($biddingStrategyConfiguration);

    // Set network targeting (recommended).
    $networkSetting = new NetworkSetting();
    $networkSetting->setTargetGoogleSearch(true);
    $networkSetting->setTargetSearchNetwork(true);
    $networkSetting->setTargetContentNetwork(true);
    $campaign->setNetworkSetting($networkSetting);

    // Recommendation: Set the campaign to PAUSED when creating it to stop
    // the ads from immediately serving. Set to ENABLED once you've added
    // targeting and the ads are ready to serve.
    $campaign->setStatus(CampaignStatus::PAUSED);

    // Create a campaign operation.
    $operation = new CampaignOperation();
    $operation->setOperand($campaign);
    $operation->setOperator(Operator::ADD);

    // Create the campaign on the server and print out some information for the
    // campaign.
    $result = $campaignService->mutate([$operation]);
    $newCampaign = $result->getValue()[0];
    printf(
        "Campaign with name '%s', ID %d and bidding scheme ID %d was "
            . "created.\n",
        $newCampaign->getName(),
        $newCampaign->getId(),
        $newCampaign->getBiddingStrategyConfiguration()->getBiddingStrategyId()
    );
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
        self::BUDGET_ID === null ? null : intval(self::BUDGET_ID));
  }
}

UsePortfolioBiddingStrategy::main();
