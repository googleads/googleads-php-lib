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
use Google\AdsApi\AdWords\v201802\cm\Budget;
use Google\AdsApi\AdWords\v201802\cm\BudgetBudgetDeliveryMethod;
use Google\AdsApi\AdWords\v201802\cm\BudgetOperation;
use Google\AdsApi\AdWords\v201802\cm\BudgetService;
use Google\AdsApi\AdWords\v201802\cm\Money;
use Google\AdsApi\AdWords\v201802\cm\Operator;
use Google\AdsApi\AdWords\v201802\cm\Trial;
use Google\AdsApi\AdWords\v201802\cm\TrialOperation;
use Google\AdsApi\AdWords\v201802\cm\TrialService;
use Google\AdsApi\AdWords\v201802\cm\TrialStatus;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example shows how to graduate a trial.
 * See the Campaign Drafts and Experiments guide for more information:
 * https://developers.google.com/adwords/api/docs/guides/campaign-drafts-experiments
 */
class GraduateTrial
{

    const TRIAL_ID = 'INSERT_TRIAL_ID_HERE';

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $trialId
    ) {
        $trialService = $adWordsServices->get($session, TrialService::class);
        $budgetService = $adWordsServices->get($session, BudgetService::class);

        // To graduate a trial, you must specify a different budget from the base
        // campaign. The base campaign (in order to have had a trial based on it)
        // must have a non-shared budget, so it cannot be shared with the new
        // independent campaign created by graduation.
        $budget = new Budget();
        $budget->setName('Trial Budget #' . uniqid());
        $money = new Money();
        $money->setMicroAmount(50000000);
        $budget->setAmount($money);
        $budget->setDeliveryMethod(BudgetBudgetDeliveryMethod::STANDARD);

        // Create a budget operation and add it to the operations list.
        $operations = [];
        $operation = new BudgetOperation();
        $operation->setOperand($budget);
        $operation->setOperator(Operator::ADD);
        $operations[] = $operation;

        // Create the budget on the server.
        $budget = $budgetService->mutate($operations)->getValue()[0];

        // Create a trial.
        $trial = new Trial();
        $trial->setId($trialId);
        $trial->setBudgetId($budget->getBudgetId());
        $trial->setStatus(TrialStatus::GRADUATED);

        // Create a trial operation and add it to the operations list.
        $operations = [];
        $operation = new TrialOperation();
        $operation->setOperand($trial);
        $operation->setOperator(Operator::SET);
        $operations[] = $operation;

        // Update the trial on the server.
        $trial = $trialService->mutate($operations)->getValue()[0];

        // Graduation is a synchronous operation, so the campaign is already ready.
        // If you promote instead, make sure to see the polling scheme demonstrated
        // in AddTrial.php to wait for the asynchronous operation to finish.
        printf(
            "Trial with ID %d graduated. Campaign with ID %d was given a new budget"
            . " ID %d and is no longer dependent on this trial.\n",
            $trial->getId(),
            $trial->getTrialCampaignId(),
            $budget->getBudgetId()
        );
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()->withOAuth2Credential($oAuth2Credential)->build();
        self::runExample(new AdWordsServices(), $session, intval(self::TRIAL_ID));
    }
}

GraduateTrial::main();
