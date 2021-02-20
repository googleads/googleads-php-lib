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

namespace Google\AdsApi\Examples\AdManager\v202008\ProposalLineItemService;

require __DIR__ . '/../../../../vendor/autoload.php';

use DateTime;
use DateTimeZone;
use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v202008\AdManagerDateTimes;
use Google\AdsApi\AdManager\v202008\AdExchangeEnvironment;
use Google\AdsApi\AdManager\v202008\AdUnitTargeting;
use Google\AdsApi\AdManager\v202008\CreativePlaceholder;
use Google\AdsApi\AdManager\v202008\DeliveryRateType;
use Google\AdsApi\AdManager\v202008\DeviceCapability;
use Google\AdsApi\AdManager\v202008\DeviceCapabilityTargeting;
use Google\AdsApi\AdManager\v202008\Goal;
use Google\AdsApi\AdManager\v202008\InventoryTargeting;
use Google\AdsApi\AdManager\v202008\LineItemType;
use Google\AdsApi\AdManager\v202008\Money;
use Google\AdsApi\AdManager\v202008\ProposalLineItem;
use Google\AdsApi\AdManager\v202008\ProposalLineItemMarketplaceInfo;
use Google\AdsApi\AdManager\v202008\RateType;
use Google\AdsApi\AdManager\v202008\ServiceFactory;
use Google\AdsApi\AdManager\v202008\Size;
use Google\AdsApi\AdManager\v202008\Targeting;
use Google\AdsApi\AdManager\v202008\TechnologyTargeting;
use Google\AdsApi\AdManager\v202008\UnitType;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Creates a proposal line item.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateProposalLineItems
{

    // Set the proposal ID to use when creating the proposal line item.
    const PROPOSAL_ID = 'INSERT_PROPOSAL_ID_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        int $proposalId
    ) {
        $proposalLineItemService =
            $serviceFactory->createProposalLineItemService($session);
        $networkService = $serviceFactory->createNetworkService($session);

        // Create a standard proposal line item.
        $proposalLineItem = new ProposalLineItem();
        $proposalLineItem->setName('Proposal line item #' . uniqid());
        $proposalLineItem->setProposalId($proposalId);
        $proposalLineItem->setLineItemType(LineItemType::STANDARD);

        // Set required Marketplace information.
        $proposalLineItemMarketplaceInfo =
            new ProposalLineItemMarketplaceInfo();
        $proposalLineItemMarketplaceInfo->setAdExchangeEnvironment(
            AdExchangeEnvironment::DISPLAY
        );
        $proposalLineItem->setMarketplaceInfo($proposalLineItemMarketplaceInfo);

        // Set the length of the proposal line item to run.
        $proposalLineItem->setStartDateTime(
            AdManagerDateTimes::fromDateTime(
                new DateTime('now', new DateTimeZone('America/New_York'))
            )
        );
        $proposalLineItem->setEndDateTime(
            AdManagerDateTimes::fromDateTime(
                new DateTime('+1 month', new DateTimeZone('America/New_York'))
            )
        );

        // Set delivery specifications for the proposal line item.
        $proposalLineItem->setDeliveryRateType(DeliveryRateType::EVENLY);

        // Set pricing for the proposal line item for 1000 impressions at a CPM
        // of $2 for a total value of $2.
        $goal = new Goal();
        $goal->setUnits(1000);
        $goal->setUnitType(UnitType::IMPRESSIONS);
        $proposalLineItem->setGoal($goal);
        $proposalLineItem->setNetRate(new Money('USD', 2000000));
        $proposalLineItem->setRateType(RateType::CPM);

        // Set the size of creatives that can be associated with the proposal
        // line item.
        $creativePlaceholder = new CreativePlaceholder();
        $creativePlaceholder->setSize(new Size(300, 250, false));
        $proposalLineItem->setCreativePlaceholders([$creativePlaceholder]);

        // Create ad unit targeting for the root ad unit (i.e. the whole
        // network).
        $rootAdUnitId = $networkService->getCurrentNetwork()
            ->getEffectiveRootAdUnitId();
        $inventoryTargeting = new InventoryTargeting();
        $adUnitTargeting = new AdUnitTargeting();
        $adUnitTargeting->setAdUnitId($rootAdUnitId);
        $adUnitTargeting->setIncludeDescendants(true);
        $inventoryTargeting->setTargetedAdUnits([$adUnitTargeting]);

        $deviceCapabilityTargeting = new DeviceCapabilityTargeting();
        // Target Display environment by excluding Mobile Apps.
        // DeviceCapabilities can be obtained though the Device_Capability PQL
        // table:
        // https://developers.google.com/ad-manager/api/reference/v201808/PublisherQueryLanguageService#device_capability
        $mobileApps = new DeviceCapability();
        $mobileApps->setId(5001);
        $deviceCapabilityTargeting->setExcludedDeviceCapabilities(
            [$mobileApps]
        );
        $technologyTargeting = new TechnologyTargeting(
            $deviceCapabilityTargeting
        );

        // Create targeting.
        $targeting = new Targeting();
        $targeting->setInventoryTargeting($inventoryTargeting);
        $targeting->setTechnologyTargeting($technologyTargeting);
        $proposalLineItem->setTargeting($targeting);

        // Create the proposal line items on the server.
        $results = $proposalLineItemService->createProposalLineItems(
            [$proposalLineItem]
        );

        // Print out some information for each created proposal line item.
        foreach ($results as $i => $proposalLineItem) {
            printf(
                "%d) Proposal line item with ID %d and name '%s'"
                . " was created.%s",
                $i,
                $proposalLineItem->getId(),
                $proposalLineItem->getName(),
                PHP_EOL
            );
        }
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()
            ->build();

        // Construct an API session configured from an `adsapi_php.ini` file
        // and the OAuth2 credentials above.
        $session = (new AdManagerSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        self::runExample(
            new ServiceFactory(),
            $session,
            intval(self::PROPOSAL_ID)
        );
    }
}

CreateProposalLineItems::main();
