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

namespace Google\AdsApi\Examples\AdWords\v201802\CampaignManagement;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201802\cm\Operator;
use Google\AdsApi\AdWords\v201802\cm\Predicate;
use Google\AdsApi\AdWords\v201802\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201802\cm\Selector;
use Google\AdsApi\AdWords\v201802\cm\Trial;
use Google\AdsApi\AdWords\v201802\cm\TrialAsyncErrorService;
use Google\AdsApi\AdWords\v201802\cm\TrialOperation;
use Google\AdsApi\AdWords\v201802\cm\TrialService;
use Google\AdsApi\AdWords\v201802\cm\TrialStatus;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example shows how to create a trial and wait for it to complete.
 * See the Campaign Drafts and Experiments guide for more information:
 * https://developers.google.com/adwords/api/docs/guides/campaign-drafts-experiments
 */
class AddTrial
{

    const MAX_POLL_ATTEMPTS = 5;
    const POLL_FREQUENCY_SECONDS = 30;

    const DRAFT_ID = 'INSERT_DRAFT_ID_HERE';
    const BASE_CAMPAIGN_ID = 'INSERT_BASE_CAMPAIGN_ID_HERE';

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $draftId,
        $baseCampaignId
    ) {
        $trialService = $adWordsServices->get($session, TrialService::class);
        $trialAsynErrorService = $adWordsServices->get($session, TrialAsyncErrorService::class);

        // Create a trial.
        $trial = new Trial();
        $trial->setDraftId($draftId);
        $trial->setBaseCampaignId($baseCampaignId);
        $trial->setName('Test Trial #' . uniqid());
        $trial->setTrafficSplitPercent(50);

        // Create a trial operation and add it to the operations list.
        $operations = [];
        $operation = new TrialOperation();
        $operation->setOperand($trial);
        $operation->setOperator(Operator::ADD);
        $operations[] = $operation;

        // Create the trial on the server.
        $trial = $trialService->mutate($operations)->getValue()[0];

        $selector = new Selector();
        $selector->setFields(
            ['Id', 'Status', 'BaseCampaignId', 'TrialCampaignId']
        );
        $selector->setPredicates(
            [new Predicate('Id', PredicateOperator::IN, [$trial->getId()])]
        );

        // Since creating a trial is asynchronous, we have to poll it to wait for it
        // to finish.
        $pollAttempts = 0;
        $isPending = true;
        $trial = null;
        do {
            $sleepSeconds = self::POLL_FREQUENCY_SECONDS * pow(2, $pollAttempts);
            printf("Sleeping %d seconds...\n", $sleepSeconds);
            sleep($sleepSeconds);

            $trial = $trialService->get($selector)->getEntries()[0];
            printf(
                "Trial ID %d has status '%s'.\n",
                $trial->getId(),
                $trial->getStatus()
            );

            $pollAttempts++;
            $isPending = ($trial->getStatus() === TrialStatus::CREATING) ? true : false;
        } while ($isPending && $pollAttempts <= self::MAX_POLL_ATTEMPTS);

        if ($trial->getStatus() === TrialStatus::ACTIVE) {
            // The trial creation was successful.
            printf(
                "Trial created with ID %d and trial campaign ID %d\n",
                $trial->getId(),
                $trial->getTrialCampaignId()
            );
        } elseif ($trial->getStatus() === TrialStatus::CREATION_FAILED) {
            // The trial creation failed, and errors can be fetched from the
            // TrialAsyncErrorService.
            $selector = new Selector();
            $selector->setFields(['TrialId', 'AsyncError']);
            $selector->setPredicates(
                [new Predicate('TrialId', PredicateOperator::IN, [$trial->getId()])]
            );

            $errors = $trialAsynErrorService->get($selector)->getEntries();

            if (count($errors) === 0) {
                printf(
                    "Could not retrieve errors for the trial with ID %d\n",
                    $trial->getId()
                );
            } else {
                printf("Could not create trial due to the following errors:\n");
                $i = 0;
                foreach ($errors as $error) {
                    printf("Error #%d: %s\n", $i++, $error->getAsyncError());
                }
            }
        } else {
            // Most likely, the trial is still being created. You can continue
            // polling, but we have limited the number of attempts in the example.
            printf(
                "Timed out waiting to create trial from draft with ID %d with base campaign with ID %d\n",
                $draftId,
                $baseCampaignId
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
            intval(self::DRAFT_ID),
            intval(self::BASE_CAMPAIGN_ID)
        );
    }
}

AddTrial::main();
