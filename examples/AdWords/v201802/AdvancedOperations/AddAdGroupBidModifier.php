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

namespace Google\AdsApi\Examples\AdWords\v201802\AdvancedOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201802\cm\AdGroupBidModifier;
use Google\AdsApi\AdWords\v201802\cm\AdGroupBidModifierOperation;
use Google\AdsApi\AdWords\v201802\cm\AdGroupBidModifierService;
use Google\AdsApi\AdWords\v201802\cm\Operator;
use Google\AdsApi\AdWords\v201802\cm\Platform;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This code example illustrates how to add ad group level mobile bid modifier
 * override for a campaign.
 */
class AddAdGroupBidModifier
{

    const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';
    const BID_MODIFIER = 'INSERT_BID_MODIFIER_HERE';

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $adGroupId,
        $bidModifier
    ) {
        $adGroupBidModifierService = $adWordsServices->get($session, AdGroupBidModifierService::class);

        $operations = [];

        // Mobile criterion ID.
        $criterionId = 30001;
        // Prepare to add an ad group level override.
        $adGroupBidModifier = new AdGroupBidModifier();
        $adGroupBidModifier->setAdGroupId($adGroupId);
        $adGroupBidModifier->setCriterion(new Platform());
        $adGroupBidModifier->getCriterion()->setId($criterionId);
        $adGroupBidModifier->setBidModifier($bidModifier);

        $operation = new AdGroupBidModifierOperation();

        // Create an ad group bid modifier operation and add it to the list.
        $operation->setOperator(Operator::ADD);
        $operation->setOperand($adGroupBidModifier);
        $operations[] = $operation;

        // Create the ad group bid modifier on the server and print out some
        // information for each created ad group criterion.
        $result = $adGroupBidModifierService->mutate($operations);
        foreach ($result->getValue() as $adGroupBidModifier) {
            printf(
                "Ad group ID %d, criterion ID %d was updated with ad group level modifier: %s\n",
                $adGroupBidModifier->getAdGroupId(),
                $adGroupBidModifier->getCriterion()->getId(),
                $adGroupBidModifier->getBidModifier()
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
            intval(self::AD_GROUP_ID),
            floatval(self::BID_MODIFIER)
        );
    }
}

AddAdGroupBidModifier::main();
