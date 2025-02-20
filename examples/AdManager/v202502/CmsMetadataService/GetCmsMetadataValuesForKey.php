<?php
/**
 * Copyright 2019 Google LLC
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

namespace Google\AdsApi\Examples\AdManager\v202502\CmsMetadataService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v202502\StatementBuilder;
use Google\AdsApi\AdManager\v202502\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets all CMS metadata values for a given key.
 *
 * <p>It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class GetCmsMetadataValuesForKey
{

    // Set the CMS metadata key to retrieve values for.
    // Run GetAllCmsMetadataKeys.php to retrieve CMS metadata keys.
    const CMS_METADATA_KEY_NAME = 'INSERT_CMS_METADATA_KEY_NAME_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        $cmsMetadataKeyName
    ) {
        $cmsMetadataService =
            $serviceFactory->createCmsMetadataService($session);

        // Create a statement to select CMS metadata values.
        $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
        $statementBuilder = (new StatementBuilder())
            ->where("cmsKey = :cmsMetadataKeyName")
            ->orderBy('id ASC')
            ->limit($pageSize)
            ->withBindVariableValue("cmsMetadataKeyName", $cmsMetadataKeyName);

        // Retrieve a small amount of CMS metadata values at a time, paging
        // through until all CMS metadata values have been retrieved.
        $totalResultSetSize = 0;
        do {
            $page = $cmsMetadataService->getCmsMetadataValuesByStatement(
                $statementBuilder->toStatement()
            );

            // Print out some information for each CMS metadata value.
            if ($page->getResults() !== null) {
                $totalResultSetSize = $page->getTotalResultSetSize();
                $i = $page->getStartIndex();
                foreach ($page->getResults() as $cmsMetadataValue) {
                    printf(
                        "%d) CMS value with ID %d and name '%s' associated "
                        . "with key id %d and name '%s' was found.%s",
                        $i++,
                        $cmsMetadataValue->getCmsMetadataValueId(),
                        $cmsMetadataValue->getValueName(),
                        $cmsMetadataValue->getKey()->getId(),
                        $cmsMetadataValue->getKey()->getName(),
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

        self::runExample(
            new ServiceFactory(),
            $session,
            self::CMS_METADATA_KEY_NAME
        );
    }
}

GetCmsMetadataValuesForKey::main();
