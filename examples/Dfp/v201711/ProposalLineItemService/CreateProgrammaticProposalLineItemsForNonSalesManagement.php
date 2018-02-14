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

namespace Google\AdsApi\Examples\Dfp\v201711\ProposalLineItemService;

require __DIR__ . '/../../../../vendor/autoload.php';

use DateTime;
use DateTimeZone;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201711\DfpDateTimes;
use Google\AdsApi\Dfp\v201711\AdExchangeEnvironment;
use Google\AdsApi\Dfp\v201711\AdUnitTargeting;
use Google\AdsApi\Dfp\v201711\CreativePlaceholder;
use Google\AdsApi\Dfp\v201711\DeliveryRateType;
use Google\AdsApi\Dfp\v201711\Goal;
use Google\AdsApi\Dfp\v201711\InventoryTargeting;
use Google\AdsApi\Dfp\v201711\LineItemType;
use Google\AdsApi\Dfp\v201711\Money;
use Google\AdsApi\Dfp\v201711\NetworkService;
use Google\AdsApi\Dfp\v201711\ProposalLineItem;
use Google\AdsApi\Dfp\v201711\ProposalLineItemMarketplaceInfo;
use Google\AdsApi\Dfp\v201711\ProposalLineItemService;
use Google\AdsApi\Dfp\v201711\RateType;
use Google\AdsApi\Dfp\v201711\Size;
use Google\AdsApi\Dfp\v201711\Targeting;
use Google\AdsApi\Dfp\v201711\UnitType;

/**
 * Creates a programmatic proposal line item for a non-sales-enabled network.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateProgrammaticProposalLineItemsForNonSalesManager
{

    // Set the proposal ID to use when creating the proposal line item.
    const PROPOSAL_ID = 'INSERT_PROPOSAL_ID_HERE';

    public static function runExample(
        DfpServices $dfpServices,
        DfpSession $session,
        $proposalId
    ) {
        $proposalLineItemService = $dfpServices->get($session, ProposalLineItemService::class);
        $networkService = $dfpServices->get($session, NetworkService::class);

        // Create a standard proposal line item.
        $proposalLineItem = new ProposalLineItem();
        $proposalLineItem->setName('Proposal line item #' . uniqid());
        $proposalLineItem->setProposalId($proposalId);
        $proposalLineItem->setLineItemType(LineItemType::STANDARD);

        // Set required Marketplace information.
        $proposalLineItemMarketplaceInfo = new ProposalLineItemMarketplaceInfo();
        $proposalLineItemMarketplaceInfo->setAdExchangeEnvironment(AdExchangeEnvironment::DISPLAY);
        $proposalLineItem->setMarketplaceInfo($proposalLineItemMarketplaceInfo);

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

        // Set delivery specifications for the proposal line item.
        $proposalLineItem->setDeliveryRateType(DeliveryRateType::EVENLY);

        // Set pricing for the proposal line item for 1000 impressions at a CPM of
        // $2 for a total value of $2.
        $goal = new Goal();
        $goal->setUnits(1000);
        $goal->setUnitType(UnitType::IMPRESSIONS);
        $proposalLineItem->setGoal($goal);
        $proposalLineItem->setNetCost(new Money('USD', 2000000));
        $proposalLineItem->setNetRate(new Money('USD', 2000000));
        $proposalLineItem->setRateType(RateType::CPM);

        // Set the size of creatives that can be associated with the proposal line
        // item.
        $creativePlaceholder = new CreativePlaceholder();
        $creativePlaceholder->setSize(new Size(300, 250, false));
        $proposalLineItem->setCreativePlaceholders([$creativePlaceholder]);

        // Create ad unit targeting for the root ad unit (i.e. the whole network).
        $rootAdUnitId = $networkService->getCurrentNetwork()
            ->getEffectiveRootAdUnitId();
        $inventoryTargeting = new InventoryTargeting();
        $adUnitTargeting = new AdUnitTargeting();
        $adUnitTargeting->setAdUnitId($rootAdUnitId);
        $adUnitTargeting->setIncludeDescendants(true);
        $inventoryTargeting->setTargetedAdUnits([$adUnitTargeting]);

        // Create targeting.
        $targeting = new Targeting();
        $targeting->setInventoryTargeting($inventoryTargeting);
        $proposalLineItem->setTargeting($targeting);

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

        self::runExample(new DfpServices(), $session, intval(self::PROPOSAL_ID));
    }
}

CreateProgrammaticProposalLineItemsForNonSalesManager::main();
