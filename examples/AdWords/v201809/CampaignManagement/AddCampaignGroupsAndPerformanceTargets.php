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

namespace Google\AdsApi\Examples\AdWords\v201809\CampaignManagement;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201809\cm\Campaign;
use Google\AdsApi\AdWords\v201809\cm\CampaignGroup;
use Google\AdsApi\AdWords\v201809\cm\CampaignGroupOperation;
use Google\AdsApi\AdWords\v201809\cm\CampaignGroupPerformanceTarget;
use Google\AdsApi\AdWords\v201809\cm\CampaignGroupPerformanceTargetOperation;
use Google\AdsApi\AdWords\v201809\cm\CampaignGroupPerformanceTargetService;
use Google\AdsApi\AdWords\v201809\cm\CampaignGroupService;
use Google\AdsApi\AdWords\v201809\cm\CampaignOperation;
use Google\AdsApi\AdWords\v201809\cm\CampaignService;
use Google\AdsApi\AdWords\v201809\cm\EfficiencyTargetType;
use Google\AdsApi\AdWords\v201809\cm\Money;
use Google\AdsApi\AdWords\v201809\cm\Operator;
use Google\AdsApi\AdWords\v201809\cm\PerformanceTarget;
use Google\AdsApi\AdWords\v201809\cm\SpendTargetType;
use Google\AdsApi\AdWords\v201809\cm\VolumeGoalType;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This code example adds a campaign group and sets a performance target for
 * that group. To get campaigns, run GetCampaigns.php. To download reports, run
 * DownloadCriteriaReportWithAwql.php.
 */
class AddCampaignGroupsAndPerformanceTargets
{

    const CAMPAIGN_ID_1 = 'INSERT_CAMPAIGN_ID_1_HERE';
    const CAMPAIGN_ID_2 = 'INSERT_CAMPAIGN_ID_2_HERE';

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $campaignIds
    ) {
        $campaignGroup = self::createCampaignGroup($adWordsServices, $session);
        self::addCampaignsToGroup(
            $adWordsServices,
            $session,
            $campaignGroup,
            $campaignIds
        );
        self::createPerformanceTarget($adWordsServices, $session, $campaignGroup);
    }

    private static function createCampaignGroup(
        AdWordsServices $adWordsServices,
        AdWordsSession $session
    ) {
        $campaignGroupService = $adWordsServices->get($session, CampaignGroupService::class);

        // Create the campaign group.
        $campaignGroup = new CampaignGroup();
        $campaignGroup->setName('Mars campaign group #' . uniqid());

        // Create the operation.
        $operation = new CampaignGroupOperation();
        $operation->setOperand($campaignGroup);
        $operation->setOperator(Operator::ADD);

        $campaignGroup = $campaignGroupService->mutate([$operation])->getValue()[0];
        printf(
            "Campaign group with ID %d and name '%s' was created.\n",
            $campaignGroup->getId(),
            $campaignGroup->getName()
        );

        return $campaignGroup;
    }

    private static function addCampaignsToGroup(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $campaignGroup,
        $campaignIds
    ) {
        $campaignService = $adWordsServices->get($session, CampaignService::class);

        $operations = [];
        foreach ($campaignIds as $campaignId) {
            $campaign = new Campaign();
            $campaign->setId($campaignId);
            $campaign->setCampaignGroupId($campaignGroup->getId());

            $operation = new CampaignOperation();
            $operation->setOperand($campaign);
            $operation->setOperator(Operator::SET);
            $operations[] = $operation;
        }

        $campaigns = $campaignService->mutate($operations)->getValue();
        printf(
            "The following campaign IDs were added to the campaign group with ID %d:\n",
            $campaignGroup->getId()
        );
        foreach ($campaigns as $campaign) {
            printf("\t%d\n", $campaign->getId());
        }
    }

    private static function createPerformanceTarget(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        CampaignGroup $campaignGroup
    ) {
        $campaignGroupPerformanceTargetService = $adWordsServices->get(
            $session,
            CampaignGroupPerformanceTargetService::class
        );

        // Create the performance target.
        $performanceTarget = new PerformanceTarget();
        // Keep the CPC for the campaigns < $3.
        $performanceTarget->setEfficiencyTargetType(
            EfficiencyTargetType::CPC_LESS_THAN_OR_EQUAL_TO
        );
        $performanceTarget->setEfficiencyTargetValue(3000000);

        // Keep the maximum spend under $50.
        $performanceTarget->setSpendTargetType(SpendTargetType::MAXIMUM);
        $maxSpend = new Money();
        $maxSpend->setMicroAmount(500000000);
        $performanceTarget->setSpendTarget($maxSpend);

        // Aim for at least 3000 clicks.
        $performanceTarget->setVolumeTargetValue(3000);
        $performanceTarget->setVolumeGoalType(VolumeGoalType::MAXIMIZE_CLICKS);

        // Start the performance target today, and run it for the next 90 days.
        $startDate = date('Ymd', strtotime('now'));
        $endDate = date('Ymd', strtotime('+90 day'));

        $performanceTarget->setStartDate($startDate);
        $performanceTarget->setEndDate($endDate);

        // Create the campaign group performance target.
        $campaignGroupPerformanceTarget = new CampaignGroupPerformanceTarget();
        $campaignGroupPerformanceTarget->setCampaignGroupId(
            $campaignGroup->getId()
        );
        $campaignGroupPerformanceTarget->setPerformanceTarget($performanceTarget);

        // Create the operation.
        $operation = new CampaignGroupPerformanceTargetOperation();
        $operation->setOperand($campaignGroupPerformanceTarget);
        $operation->setOperator(Operator::ADD);

        $campaignGroupPerformanceTarget = $campaignGroupPerformanceTargetService->mutate([$operation])->getValue()[0];

        // Display the results.
        printf(
            "Campaign group performance target with ID %d was added for campaign group ID %d.\n",
            $campaignGroupPerformanceTarget->getId(),
            $campaignGroupPerformanceTarget->getCampaignGroupId()
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
            [intval(self::CAMPAIGN_ID_1), intval(self::CAMPAIGN_ID_2)]
        );
    }
}

AddCampaignGroupsAndPerformanceTargets::main();
