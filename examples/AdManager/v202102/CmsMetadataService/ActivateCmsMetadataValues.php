<?php
/**
 * Copyright 2020 Google LLC
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

namespace Google\AdsApi\Examples\AdManager\v202102\CmsMetadataService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v202102\StatementBuilder;
use Google\AdsApi\AdManager\v202102\CmsMetadataKeyStatus;
use Google\AdsApi\AdManager\v202102\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example activates CMS Metadata Values for a particular CMS Metadata Key.
 *
 * <p>It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class ActivateCmsMetadataValues
{

    // Set the CMS metadata key to retrieve values for.
    // Run GetAllCmsMetadataKeys.php to retrieve CMS metadata keys.
    const CMS_METADATA_KEY_ID = 'INSERT_CMS_METADATA_KEY_ID_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        int $cmsMetadataKeyId
    )
    {
        $cmsMetadataService =
            $serviceFactory->createCmsMetadataService($session);

        // Create a statement to select CMS metadata values.
        $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
        $statementBuilder = (new StatementBuilder())
            ->where("cmsKeyId = :cmsKeyId AND status = :status")
            ->limit(StatementBuilder::SUGGESTED_PAGE_LIMIT)
            ->withBindVariableValue("cmsKeyId", $cmsMetadataKeyId)
            ->withBindVariableValue("status", CmsMetadataKeyStatus::INACTIVE);

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
                        "%d) CMS Metadata Value with ID %d will be " .
                        "activated.%s",
                        $i++,
                        $cmsMetadataValue->getCmsMetadataValueId(),
                        PHP_EOL
                    );
                }
            }

            $statementBuilder->increaseOffsetBy($pageSize);
        } while ($statementBuilder->getOffset() < $totalResultSetSize);

        printf("Number of CMS Metadata Values to be activated: %d%s",
            $totalResultSetSize, PHP_EOL);

        if ($totalResultSetSize > 0) {
            // Remove limit and offset from statement to activate all matching
            // values.
            $statementBuilder->removeLimitAndOffset();

            // Create an action.
            $action = new \Google\AdsApi\AdManager\v202102\ActivateCmsMetadataValues();

            // Perform the action.
            $result = $cmsMetadataService->performCmsMetadataValueAction(
                $action,
                $statementBuilder->toStatement()
            );

            if ($result != null && $result->getNumChanges() > 0) {
                printf(
                    "Number of items activated: %d%s",
                    $result->getNumChanges(),
                    PHP_EOL
                );
            } else {
                printf("No CMS Metadata Values were activated.%s", PHP_EOL);
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
            self::CMS_METADATA_KEY_ID
        );
    }
}

ActivateCmsMetadataValues::main();
