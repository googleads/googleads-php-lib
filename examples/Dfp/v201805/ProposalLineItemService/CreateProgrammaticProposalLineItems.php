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

namespace Google\AdsApi\Examples\Dfp\v201805\ProposalLineItemService;

require __DIR__ . '/../../../../vendor/autoload.php';

use DateTime;
use DateTimeZone;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201805\DfpDateTimes;
use Google\AdsApi\Dfp\v201805\AdExchangeEnvironment;
use Google\AdsApi\Dfp\v201805\Goal;
use Google\AdsApi\Dfp\v201805\LineItemType;
use Google\AdsApi\Dfp\v201805\Money;
use Google\AdsApi\Dfp\v201805\ProposalLineItem;
use Google\AdsApi\Dfp\v201805\ProposalLineItemMarketplaceInfo;
use Google\AdsApi\Dfp\v201805\ProposalLineItemService;
use Google\AdsApi\Dfp\v201805\RateType;
use Google\AdsApi\Dfp\v201805\UnitType;

/**
 * Creates a programmatic proposal line item for a sales-enabled network.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateProgrammaticProposalLineItems
{

    // Set the proposal, product, and rate card ID to use when creating the
    // proposal line item.
    const PROPOSAL_ID = 'INSERT_PROPOSAL_ID_HERE';
    const PRODUCT_ID = 'INSERT_PRODUCT_ID_HERE';
    const RATE_CARD_ID = 'INSERT_RATE_CARD_ID_HERE';

    public static function runExample(
        DfpServices $dfpServices,
        DfpSession $session,
        $proposalId,
        $productId,
        $rateCardId
    ) {
        $proposalLineItemService = $dfpServices->get($session, ProposalLineItemService::class);

        // Create a standard proposal line item.
        $proposalLineItem = new ProposalLineItem();
        $proposalLineItem->setName('Proposal line item #' . uniqid());
        $proposalLineItem->setProposalId($proposalId);
        $proposalLineItem->setRateCardId($rateCardId);
        $proposalLineItem->setProductId($productId);
        $proposalLineItem->setLineItemType(LineItemType::STANDARD);

        // Set the Marketplace information.
        $marketplaceInfo = new ProposalLineItemMarketplaceInfo();
        $marketplaceInfo->setAdExchangeEnvironment(AdExchangeEnvironment::DISPLAY);
        $proposalLineItem->setMarketplaceInfo($marketplaceInfo);

        // Set the length of the proposal line item to run.
        $proposalLineItem->setStartDateTime(
            DfpDateTimes::fromDateTime(
                new DateTime('now', new DateTimeZone('America/New_York'))
            )
        );
        $proposalLineItem->setEndDateTime(
            DfpDateTimes::fromDateTime(
                new DateTime('+1 month', new DateTimeZone('America/New_York'))
            )
        );

        // Set pricing for the proposal line item for 1000 impressions at a CPM of
        // $2 for a total value of $2.
        $goal = new Goal();
        $goal->setUnits(1000);
        $goal->setUnitType(UnitType::IMPRESSIONS);
        $proposalLineItem->setGoal($goal);
        $proposalLineItem->setNetCost(new Money('USD', 2000000));
        $proposalLineItem->setNetRate(new Money('USD', 2000000));
        $proposalLineItem->setRateType(RateType::CPM);

        // Create the proposal line items on the server.
        $results = $proposalLineItemService->createProposalLineItems([$proposalLineItem]);

        // Print out some information for each created proposal line item.
        foreach ($results as $i => $proposalLineItem) {
            printf(
                "%d) Programmatic proposal line item with ID %d and name '%s' was created.\n",
                $i,
                $proposalLineItem->getId(),
                $proposalLineItem->getName()
            );
        }
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()
            ->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new DfpSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        self::runExample(
            new DfpServices(),
            $session,
            intval(self::PROPOSAL_ID),
            intval(self::PRODUCT_ID),
            intval(self::RATE_CARD_ID)
        );
    }
}

CreateProgrammaticProposalLineItems::main();
