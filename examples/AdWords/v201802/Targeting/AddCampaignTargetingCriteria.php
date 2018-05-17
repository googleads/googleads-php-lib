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

namespace Google\AdsApi\Examples\AdWords\v201802\Targeting;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201802\cm\CampaignCriterion;
use Google\AdsApi\AdWords\v201802\cm\CampaignCriterionOperation;
use Google\AdsApi\AdWords\v201802\cm\CampaignCriterionService;
use Google\AdsApi\AdWords\v201802\cm\ConstantOperand;
use Google\AdsApi\AdWords\v201802\cm\ConstantOperandConstantType;
use Google\AdsApi\AdWords\v201802\cm\ConstantOperandUnit;
use Google\AdsApi\AdWords\v201802\cm\FunctionOperator;
use Google\AdsApi\AdWords\v201802\cm\Keyword;
use Google\AdsApi\AdWords\v201802\cm\KeywordMatchType;
use Google\AdsApi\AdWords\v201802\cm\Language;
use Google\AdsApi\AdWords\v201802\cm\Location;
use Google\AdsApi\AdWords\v201802\cm\LocationExtensionOperand;
use Google\AdsApi\AdWords\v201802\cm\LocationGroups;
use Google\AdsApi\AdWords\v201802\cm\MatchingFunction;
use Google\AdsApi\AdWords\v201802\cm\NegativeCampaignCriterion;
use Google\AdsApi\AdWords\v201802\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds various types of targeting criteria to a campaign.
 * To get campaigns, run BasicOperations/GetCampaigns.php.
 */
class AddCampaignTargetingCrtieria
{

    const CAMPAIGN_ID = 'INSERT_CAMPAIGN_ID_HERE';
    // Replace the value below with the ID of a feed that has been configured for
    // location targeting, meaning it has an ENABLED FeedMapping with
    // criterionType of 77. Feeds linked to a GMB account automatically have this
    // FeedMapping. If you don't have such a feed, set this value to null.
    const LOCATION_FEED_ID = 'INSERT_LOCATION_FEED_ID_HERE';

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $campaignId,
        $locationFeedId
    ) {
        $campaignCriterionService = $adWordsServices->get($session, CampaignCriterionService::class);

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

        if ($locationFeedId !== null) {
            // Distance targeting. Area of 10 miles around targets above.
            $radius = new ConstantOperand();
            $radius->setType(ConstantOperandConstantType::DOUBLE);
            $radius->setUnit(ConstantOperandUnit::MILES);
            $radius->setDoubleValue(10.0);
            $distance = new LocationExtensionOperand();
            $distance->setRadius($radius);
            $locationGroup = new LocationGroups();
            $locationGroup->setFeedId(intval($locationFeedId));
            $locationGroup->setMatchingFunction(
                new MatchingFunction(FunctionOperator::IDENTITY, [$distance])
            );
            $campaignCriteria[] = new CampaignCriterion($campaignId, null, $locationGroup);
        }

        $operations = [];
        foreach ($campaignCriteria as $campaignCriterion) {
            $operation = new CampaignCriterionOperation();
            $operation->setOperator(Operator::ADD);
            $operation->setOperand($campaignCriterion);
            $operations[] = $operation;
        }

        // Add a negative campaign criterion.
        $negativeKeyword = new Keyword();
        $negativeKeyword->setText('jupiter cruise');
        $negativeKeyword->setMatchType(KeywordMatchType::BROAD);
        $negativeCriterion = new NegativeCampaignCriterion();
        $negativeCriterion->setCampaignId($campaignId);
        $negativeCriterion->setCriterion($negativeKeyword);

        $operation = new CampaignCriterionOperation();
        $operation->setOperator(Operator::ADD);
        $operation->setOperand($negativeCriterion);
        $operations[] = $operation;

        $result = $campaignCriterionService->mutate($operations);

        // Print out some information about added campaign criteria.
        foreach ($result->getValue() as $campaignCriterion) {
            printf(
                "Campaign targeting criterion with ID %d and type '%s' was added.\n",
                $campaignCriterion->getCriterion()->getId(),
                $campaignCriterion->getCriterion()->getType()
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
            intval(self::CAMPAIGN_ID),
            self::LOCATION_FEED_ID
        );
    }
}

AddCampaignTargetingCrtieria::main();
