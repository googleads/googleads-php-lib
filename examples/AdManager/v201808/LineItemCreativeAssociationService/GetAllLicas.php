<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
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

namespace Google\AdsApi\Examples\AdManager\v201808\LineItemCreativeAssociationService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v201808\StatementBuilder;
use Google\AdsApi\AdManager\v201808\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets all line item creative associations.
 *
 * <p>It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class GetAllLicas
{

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session
    ) {
        $lineItemCreativeAssociationService =
            $serviceFactory->createLineItemCreativeAssociationService($session);

        // Create a statement to select line item creative associations.
        $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
        $statementBuilder = (new StatementBuilder())
            ->orderBy('lineItemId ASC, creativeId ASC')
            ->limit($pageSize);

        // Retrieve a small amount of line item creative associations at a time,
        // paging through until all line item creative associations have been
        // retrieved.
        $totalResultSetSize = 0;
        do {
            $page = $lineItemCreativeAssociationService
                ->getLineItemCreativeAssociationsByStatement(
                    $statementBuilder->toStatement()
                );

            // Print out some information for each line item creative
            // association.
            if ($page->getResults() !== null) {
                $totalResultSetSize = $page->getTotalResultSetSize();
                $i = $page->getStartIndex();
                foreach ($page->getResults() as $lica) {
                    if ($lica->getCreativeSetId() !== null) {
                        printf(
                            "%d) LICA with line item ID %d and creative set"
                            . " ID %d was found.%s",
                            $i++,
                            $lica->getLineItemId(),
                            $lica->getCreativeSetId(),
                            PHP_EOL
                        );
                    } else {
                        printf(
                            "%d) LICA with line item ID %d and creative ID %d"
                            . " was found.%s",
                            $i++,
                            $lica->getLineItemId(),
                            $lica->getCreativeId(),
                            PHP_EOL
                        );
                    }
                }
            }

            $statementBuilder->increaseOffsetBy($pageSize);
        } while ($statementBuilder->getOffset() < $totalResultSetSize);

        printf("Number of results found: %d%s", $totalResultSetSize, PHP_EOL);
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

        self::runExample(new ServiceFactory(), $session);
    }
}

GetAllLicas::main();
