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

namespace Google\AdsApi\Examples\AdWords\v201809\BasicOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201809\cm\AdGroup;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAdRotationMode;
use Google\AdsApi\AdWords\v201809\cm\AdGroupOperation;
use Google\AdsApi\AdWords\v201809\cm\AdGroupService;
use Google\AdsApi\AdWords\v201809\cm\AdGroupStatus;
use Google\AdsApi\AdWords\v201809\cm\AdRotationMode;
use Google\AdsApi\AdWords\v201809\cm\BiddingStrategyConfiguration;
use Google\AdsApi\AdWords\v201809\cm\CpcBid;
use Google\AdsApi\AdWords\v201809\cm\CriterionTypeGroup;
use Google\AdsApi\AdWords\v201809\cm\Money;
use Google\AdsApi\AdWords\v201809\cm\Operator;
use Google\AdsApi\AdWords\v201809\cm\TargetingSetting;
use Google\AdsApi\AdWords\v201809\cm\TargetingSettingDetail;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds ad groups to a campaign. To get campaigns, run
 * GetCampaigns.php.
 */
class AddAdGroups
{

    const CAMPAIGN_ID = 'INSERT_CAMPAIGN_ID_HERE';

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $campaignId
    ) {
        $adGroupService = $adWordsServices->get($session, AdGroupService::class);

        $operations = [];

        // Create an ad group with required and optional settings.
        $adGroup = new AdGroup();
        $adGroup->setCampaignId($campaignId);
        $adGroup->setName('Earth to Mars Cruise #' . uniqid());

        // Set bids (required).
        $bid = new CpcBid();
        $money = new Money();
        $money->setMicroAmount(1000000);
        $bid->setBid($money);
        $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
        $biddingStrategyConfiguration->setBids([$bid]);
        $adGroup->setBiddingStrategyConfiguration($biddingStrategyConfiguration);

        // Set additional settings (optional).
        $adGroup->setStatus(AdGroupStatus::ENABLED);

        // Targeting restriction settings. Depending on the criterionTypeGroup
        // value, most TargetingSettingDetail only affect Display campaigns.
        // However, the USER_INTEREST_AND_LIST value works for RLSA campaigns -
        // Search campaigns targeting using a remarketing list.
        $targetingSetting = new TargetingSetting();
        $details = [];
        // Restricting to serve ads that match your ad group placements.
        // This is equivalent to choosing "Target and bid" in the UI.
        $details[] = new TargetingSettingDetail(CriterionTypeGroup::PLACEMENT, false);
        // Using your ad group verticals only for bidding. This is equivalent
        // to choosing "Bid only" in the UI.
        $details[] = new TargetingSettingDetail(CriterionTypeGroup::VERTICAL, true);
        $targetingSetting->setDetails($details);
        $adGroup->setSettings([$targetingSetting]);

        // Set the rotation mode.
        $rotationMode = new AdGroupAdRotationMode(AdRotationMode::OPTIMIZE);
        $adGroup->setAdGroupAdRotationMode($rotationMode);

        // Create an ad group operation and add it to the operations list.
        $operation = new AdGroupOperation();
        $operation->setOperand($adGroup);
        $operation->setOperator(Operator::ADD);
        $operations[] = $operation;

        // Create an ad group with required settings and specified status.
        $adGroup = new AdGroup();
        $adGroup->setCampaignId($campaignId);
        $adGroup->setName('Earth to Venus Cruise #' . uniqid());
        $adGroup->setStatus(AdGroupStatus::ENABLED);

        // Create an ad group operation and add it to the operations list.
        $operation = new AdGroupOperation();
        $operation->setOperand($adGroup);
        $operation->setOperator(Operator::ADD);
        $operations[] = $operation;

        // Create the ad groups on the server and print out some information for
        // each created ad group.
        $result = $adGroupService->mutate($operations);
        foreach ($result->getValue() as $adGroup) {
            printf(
                "Ad group with name '%s' and ID %d was added.\n",
                $adGroup->getName(),
                $adGroup->getId()
            );
        }
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
            intval(self::CAMPAIGN_ID)
        );
    }
}

AddAdGroups::main();
