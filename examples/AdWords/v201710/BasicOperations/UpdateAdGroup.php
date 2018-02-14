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
use Google\AdsApi\AdWords\v201710\cm\AdGroup;
use Google\AdsApi\AdWords\v201710\cm\AdGroupOperation;
use Google\AdsApi\AdWords\v201710\cm\AdGroupService;
use Google\AdsApi\AdWords\v201710\cm\BiddingStrategyConfiguration;
use Google\AdsApi\AdWords\v201710\cm\CpcBid;
use Google\AdsApi\AdWords\v201710\cm\Money;
use Google\AdsApi\AdWords\v201710\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example updates the CPC bid and status for a given ad group. To get ad
 * groups, run GetAdGroups.php.
 */
class UpdateAdGroup
{

    const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';

    // Set this to a micro amount of the CPC bid if you want to update it.
    // Leave this to null if you don't want to update.
    const CPC_BID_MICRO_AMOUNT = null;

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $adGroupId,
        $cpcBidMicroAmount
    ) {
        $adGroupService = $adWordsServices->get($session, AdGroupService::class);

        $operations = [];
        // Create ad group with the specified ID.
        $adGroup = new AdGroup();
        $adGroup->setId($adGroupId);

        // Update the CPC bid if specified.
        if (!is_null($cpcBidMicroAmount)) {
            $bid = new CpcBid();
            $money = new Money();
            $money->setMicroAmount($cpcBidMicroAmount);
            $bid->setBid($money);
            $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
            $biddingStrategyConfiguration->setBids([$bid]);
            $adGroup->setBiddingStrategyConfiguration($biddingStrategyConfiguration);
        }

        // Create ad group operation and add it to the list.
        $operation = new AdGroupOperation();
        $operation->setOperand($adGroup);
        $operation->setOperator(Operator::SET);
        $operations[] = $operation;

        // Update the ad group on the server.
        $result = $adGroupService->mutate($operations);

        $adGroup = $result->getValue()[0];
        $biddingStrategyConfiguration = $adGroup->getBiddingStrategyConfiguration();
        // Find the CpcBid in the bidding strategy configuration's bids collection.
        $cpcBidMicros = null;
        if (!empty($biddingStrategyConfiguration)
            && !empty($biddingStrategyConfiguration->getBids())) {
            foreach ($biddingStrategyConfiguration->getBids() as $bid) {
                if ($bid instanceof CpcBid) {
                    $cpcBidMicros = $bid->getBid()->getMicroAmount();
                }
            }
        }
        printf(
            "Ad group with ID %d and name '%s' updated to have status '%s' and CPC bid %d.\n",
            $adGroup->getId(),
            $adGroup->getName(),
            $adGroup->getStatus(),
            $cpcBidMicros
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
            intval(self::AD_GROUP_ID),
            is_null(self::CPC_BID_MICRO_AMOUNT) ? null : intval(self::CPC_BID_MICRO_AMOUNT)
        );
    }
}

UpdateAdGroup::main();
