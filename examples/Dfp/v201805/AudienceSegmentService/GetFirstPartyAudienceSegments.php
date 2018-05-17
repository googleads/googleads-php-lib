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

namespace Google\AdsApi\Examples\Dfp\v201805\AudienceSegmentService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201805\StatementBuilder;
use Google\AdsApi\Dfp\v201805\AudienceSegmentService;
use Google\AdsApi\Dfp\v201805\AudienceSegmentType;

/**
 * This example gets all first party audience segments.
 *
 * <p>It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class GetFirstPartyAudienceSegments
{

    public static function runExample(
        DfpServices $dfpServices,
        DfpSession $session
    ) {
        $audienceSegmentService = $dfpServices->get($session, AudienceSegmentService::class);

        // Create a statement to select audience segments.
        $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
        $statementBuilder = (new StatementBuilder())->where('type = :type')
            ->orderBy('id ASC')
            ->limit($pageSize)
            ->withBindVariableValue('type', AudienceSegmentType::FIRST_PARTY);

        // Retrieve a small amount of audience segments at a time, paging
        // through until all audience segments have been retrieved.
        $totalResultSetSize = 0;
        do {
            $page = $audienceSegmentService->getAudienceSegmentsByStatement(
                $statementBuilder->toStatement()
            );

            // Print out some information for each audience segment.
            if ($page->getResults() !== null) {
                $totalResultSetSize = $page->getTotalResultSetSize();
                $i = $page->getStartIndex();
                foreach ($page->getResults() as $audienceSegment) {
                    printf(
                        "%d) Audience segment with ID %d, name '%s', and size %d was found.\n",
                        $i++,
                        $audienceSegment->getId(),
                        $audienceSegment->getName(),
                        $audienceSegment->getSize()
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

GetFirstPartyAudienceSegments::main();
