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

namespace Google\AdsApi\Examples\Dfp\v201802\ProductTemplateService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201802\StatementBuilder;
use Google\AdsApi\Dfp\v201802\LineItemType;
use Google\AdsApi\Dfp\v201802\ProductTemplateService;

/**
 * This example gets all sponsorship product templates.
 *
 * <p>It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class GetSponsorshipProductTemplates
{

    public static function runExample(
        DfpServices $dfpServices,
        DfpSession $session
    ) {
        $productTemplateService = $dfpServices->get($session, ProductTemplateService::class);

        // Create a statement to select product templates.
        $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
        $statementBuilder = (new StatementBuilder())->where('lineItemType = :lineItemType')
            ->orderBy('id ASC')
            ->limit($pageSize)
            ->withBindVariableValue('lineItemType', LineItemType::SPONSORSHIP);

        // Retrieve a small amount of product templates at a time, paging
        // through until all product templates have been retrieved.
        $totalResultSetSize = 0;
        do {
            $page = $productTemplateService->getProductTemplatesByStatement(
                $statementBuilder->toStatement()
            );

            // Print out some information for each product template.
            if ($page->getResults() !== null) {
                $totalResultSetSize = $page->getTotalResultSetSize();
                $i = $page->getStartIndex();
                foreach ($page->getResults() as $productTemplate) {
                    printf(
                        "%d) Product template with ID %d and name '%s' was found.\n",
                        $i++,
                        $productTemplate->getId(),
                        $productTemplate->getName()
                    );
                }
            }

            $statementBuilder->increaseOffsetBy($pageSize);
        } while ($statementBuilder->getOffset() < $totalResultSetSize);

        printf("Number of results found: %d\n", $totalResultSetSize);
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

        self::runExample(new DfpServices(), $session);
    }
}

GetSponsorshipProductTemplates::main();
