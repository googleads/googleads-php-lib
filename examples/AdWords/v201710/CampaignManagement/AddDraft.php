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

namespace Google\AdsApi\Examples\AdWords\v201710\CampaignManagement;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201710\cm\CampaignCriterion;
use Google\AdsApi\AdWords\v201710\cm\CampaignCriterionOperation;
use Google\AdsApi\AdWords\v201710\cm\CampaignCriterionService;
use Google\AdsApi\AdWords\v201710\cm\Draft;
use Google\AdsApi\AdWords\v201710\cm\DraftOperation;
use Google\AdsApi\AdWords\v201710\cm\DraftService;
use Google\AdsApi\AdWords\v201710\cm\Language;
use Google\AdsApi\AdWords\v201710\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example shows how to create a draft and access its associated
 * draft campaign.
 */
class AddDraft
{

    const BASE_CAMPAIGN_ID = 'INSERT_BASE_CAMPAIGN_ID_HERE';

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $baseCampaignId
    ) {
        $draftService = $adWordsServices->get($session, DraftService::class);

        $operations = [];
        // Create a draft.
        $draft = new Draft();
        $draft->setBaseCampaignId($baseCampaignId);
        $draft->setDraftname('Test Draft #' . uniqid());

        // Create a draft operation and add it to the operations list.
        $operation = new DraftOperation();
        $operation->setOperand($draft);
        $operation->setOperator(Operator::ADD);
        $operations[] = $operation;

        // Create the draft on the server and print out some information for
        // the created draft.
        $result = $draftService->mutate($operations);
        $draft = $result->getValue()[0];
        printf(
            "Draft with ID %d, base campaign ID %d, and draft campaign ID %d was added.\n",
            $draft->getDraftId(),
            $draft->getBaseCampaignId(),
            $draft->getDraftCampaignId()
        );

        // Once the draft is created, you can modify the draft campaign as if it
        // were a real campaign. For example, you may add criteria, adjust bids, or
        // even include additional ads. Adding a criterion is shown here.
        $campaignCriterionService = $adWordsServices->get($session, CampaignCriterionService::class);

        // Create a criterion.
        $language = new Language();
        $language->setId(1003); // Spanish
        $campaignCriterion = new CampaignCriterion();
        $campaignCriterion->setCampaignId($draft->getDraftCampaignId());
        $campaignCriterion->setCriterion($language);

        // Create a campaign criterion operation and add it to the operations list.
        $operations = [];
        $operation = new CampaignCriterionOperation();
        $operation->setOperand($campaignCriterion);
        $operation->setOperator(Operator::ADD);
        $operations[] = $operation;

        // Create a campaign criterion on the server.
        $campaignCriterionService->mutate($operations);

        printf(
            "Draft updated to include criteria in the campaign with ID %d.\n",
            $draft->getDraftCampaignId()
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
            intval(self::BASE_CAMPAIGN_ID)
        );
    }
}

AddDraft::main();
