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

namespace Google\AdsApi\Examples\AdManager\v201808\ProposalService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\v201808\Proposal;
use Google\AdsApi\AdManager\v201808\ProposalCompanyAssociation;
use Google\AdsApi\AdManager\v201808\ProposalMarketplaceInfo;
use Google\AdsApi\AdManager\v201808\SalespersonSplit;
use Google\AdsApi\AdManager\v201808\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Creates a programmatic proposal for a non-sales-enabled network.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateProgrammaticProposalsForNonSalesManagement
{

    // Set the buyer, salesperson, and trafficker IDs for creating the
    // programmatic proposal. Buyer IDs can be obtained from the
    // Programmatic_Buyer PQL table (BuyerAccountId column).
    const BUYER_ID = 'INSERT_BUYER_ID_HERE';
    const PRIMARY_SALESPERSON_ID = 'INSERT_PRIMARY_SALESPERSON_ID_HERE';
    const PRIMARY_TRAFFICKER_ID = 'INSERT_PRIMARY_TRAFFICKER_ID_HERE';
    const ADVERTISER_ID = 'INSERT_ADVERTISER_ID_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        $buyerId,
        $primarySalespersonId,
        $primaryTraffickerId,
        $advertiserId
    ) {
        $proposalService = $serviceFactory->createProposalService($session);

        $proposal = new Proposal();
        $proposal->setName('Proposal #' . uniqid());
        $proposal->setIsProgrammatic(true);

        // Set the required Marketplace information.
        $proposalMarketplaceInfo = new ProposalMarketplaceInfo();
        $proposalMarketplaceInfo->setBuyerAccountId($buyerId);
        $proposal->setMarketplaceInfo($proposalMarketplaceInfo);

        // Create salesperson splits for the primary salesperson.
        $primarySalesperson = new SalespersonSplit();
        $primarySalesperson->setUserId($primarySalespersonId);
        $primarySalesperson->setSplit(100000);
        $proposal->setPrimarySalesperson($primarySalesperson);

        // Set the primary trafficker on the proposal for when it becomes an
        // order.
        $proposal->setPrimaryTraffickerId($primaryTraffickerId);

        $advertiser = new ProposalCompanyAssociation();
        $advertiser->setProposalCompanyAssociationType(
            ProposalCompanyAssociationType.ADVERTISER
        );
        $advertiser->setCompanyId($advertiserId);
        $proposal->setAdvertiser(advertiser);

        // Create the proposals on the server.
        $results = $proposalService->createProposals([$proposal]);

        // Print out some information for each created proposal.
        foreach ($results as $i => $proposal) {
            printf(
                "%d) Programmatic proposal with ID %d and name '%s' was"
                . " created.%s",
                $i,
                $proposal->getId(),
                $proposal->getName(),
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
            intval(self::BUYER_ID),
            intval(self::PRIMARY_SALESPERSON_ID),
            intval(self::PRIMARY_TRAFFICKER_ID),
            intval(self::ADVERTISER_ID)
        );
    }
}

CreateProgrammaticProposalsForNonSalesManagement::main();
