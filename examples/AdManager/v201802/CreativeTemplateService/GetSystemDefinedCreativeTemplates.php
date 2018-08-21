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

namespace Google\AdsApi\Examples\AdManager\v201802\CreativeTemplateService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerServices;
use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v201802\StatementBuilder;
use Google\AdsApi\AdManager\v201802\CreativeTemplateService;
use Google\AdsApi\AdManager\v201802\CreativeTemplateType;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets all system defined creative templates.
 *
 * <p>It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class GetSystemDefinedCreativeTemplates
{

    public static function runExample(
        AdManagerServices $adManagerServices,
        AdManagerSession $session
    ) {
        $creativeTemplateService = $adManagerServices->get(
            $session,
            CreativeTemplateService::class
        );

        // Create a statement to select creative templates.
        $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
        $statementBuilder = (new StatementBuilder())->where('type = :type')
            ->orderBy('id ASC')
            ->limit($pageSize)
            ->withBindVariableValue(
                'type',
                CreativeTemplateType::SYSTEM_DEFINED
            );

        // Retrieve a small amount of creative templates at a time, paging
        // through until all creative templates have been retrieved.
        $totalResultSetSize = 0;
        do {
            $page = $creativeTemplateService->getCreativeTemplatesByStatement(
                $statementBuilder->toStatement()
            );

            // Print out some information for each creative template.
            if ($page->getResults() !== null) {
                $totalResultSetSize = $page->getTotalResultSetSize();
                $i = $page->getStartIndex();
                foreach ($page->getResults() as $creativeTemplate) {
                    printf(
                        "%d) Creative template with ID %d and name '%s' was "
                        . "found.\n",
                        $i++,
                        $creativeTemplate->getId(),
                        $creativeTemplate->getName()
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
        $session = (new AdManagerSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        self::runExample(new AdManagerServices(), $session);
    }
}

GetSystemDefinedCreativeTemplates::main();
