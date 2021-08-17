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

namespace Google\AdsApi\Examples\AdManager\v202108\ContentService;

require __DIR__ . '/../../../../vendor/autoload.php';

use DateTime;
use DateTimeZone;
use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v202108\AdManagerDateTimes;
use Google\AdsApi\AdManager\Util\v202108\StatementBuilder;
use Google\AdsApi\AdManager\v202108\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets recently modified content.
 *
 * <p>It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class GetRecentlyModifiedContent
{

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session
    ) {
        $contentService = $serviceFactory->createContentService($session);

        // Create a statement to get recently modified content based on
        // lastModifiedDateTime. Changes to content bundle associations will
        // update the lastModifiedDateTime, but CMS metadata changes may not
        // change the lastModifiedDateTime.
        $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
        $statementBuilder = (new StatementBuilder())
            ->where('lastModifiedDateTime > :lastModifiedDateTime')
            ->orderBy('id ASC')
            ->limit($pageSize)
            ->withBindVariableValue(
                    'lastModifiedDateTime',
                    AdManagerDateTimes::fromDateTime(
                        new DateTime(
                            '-1 day',
                            new DateTimeZone('America/New_York')
                        )
                    )
                );

        // Retrieve a small amount of content at a time, paging
        // through until all content have been retrieved.
        $totalResultSetSize = 0;
        do {
            $page = $contentService->getContentByStatement(
                $statementBuilder->toStatement()
            );

            // Print out some information for each content.
            if ($page->getResults() !== null) {
                $totalResultSetSize = $page->getTotalResultSetSize();
                $i = $page->getStartIndex();
                foreach ($page->getResults() as $content) {
                    $bundleIds = $content->getContentBundleIds() ?? [];
                    printf(
                      "%d) Content with ID %d and name '%s' belonging to
                      bundle IDs %s was found.%s",
                        $i++,
                        $content->getId(),
                        $content->getName(),
                        json_encode($bundleIds),
                        PHP_EOL
                    );
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

GetAllContent::main();
