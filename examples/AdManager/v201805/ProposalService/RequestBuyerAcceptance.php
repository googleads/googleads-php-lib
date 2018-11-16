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

namespace Google\AdsApi\Examples\AdManager\v201805\ProposalService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v201805\StatementBuilder;
use Google\AdsApi\AdManager\v201805\RequestBuyerAcceptance as RequestBuyerAcceptanceAction;
use Google\AdsApi\AdManager\v201805\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Requests buyer acceptance for proposals.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class RequestBuyerAcceptance
{

    const PROGRAMMATIC_PROPOSAL_ID = 'INSERT_PROGRAMMATIC_PROPOSAL_ID_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        $programmaticProposalId
    ) {
        $proposalService = $serviceFactory->createProposalService($session);

        // Create a statement to select the proposals to request buyer
        // acceptance for.
        $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
        $statementBuilder = (new StatementBuilder())->where('id = :id')
            ->orderBy('id ASC')
            ->limit($pageSize)
            ->withBindVariableValue('id', $programmaticProposalId);

        // Retrieve a small amount of proposals at a time, paging through until
        // all proposals have been retrieved.
        $totalResultSetSize = 0;
        do {
            $page = $proposalService->getProposalsByStatement(
                $statementBuilder->toStatement()
            );

            // Print out some information for the proposals to request buyer
            // acceptance for.
            if ($page->getResults() !== null) {
                $totalResultSetSize = $page->getTotalResultSetSize();
                $i = $page->getStartIndex();
                foreach ($page->getResults() as $proposal) {
                    printf(
                        "%d) Proposal with ID %d and name '%s' will be"
                        . " requested for buyer acceptance.%s",
                        $i++,
                        $proposal->getId(),
                        $proposal->getName(),
                        PHP_EOL
                    );
                }
            }

            $statementBuilder->increaseOffsetBy($pageSize);
        } while ($statementBuilder->getOffset() < $totalResultSetSize);

        printf(
            "Total number of proposals to request buyer acceptance for: %d%s",
            $totalResultSetSize,
            PHP_EOL
        );

        if ($totalResultSetSize > 0) {
            // Remove limit and offset from statement so we can reuse the
            // statement.
            $statementBuilder->removeLimitAndOffset();

            // Create and perform action.
            $action = new RequestBuyerAcceptanceAction();
            $result = $proposalService->performProposalAction(
                $action,
                $statementBuilder->toStatement()
            );

            if ($result !== null && $result->getNumChanges() > 0) {
                printf(
                    "Number of proposals requested for buyer acceptance: %d%s",
                    $result->getNumChanges(),
                    PHP_EOL
                );
            } else {
                printf(
                    "No proposals were requested for buyer acceptance.%s",
                    PHP_EOL
                );
            }
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
            intval(self::PROGRAMMATIC_PROPOSAL_ID)
        );
    }
}

RequestBuyerAcceptance::main();
