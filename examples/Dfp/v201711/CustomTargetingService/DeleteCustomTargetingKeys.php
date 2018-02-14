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

namespace Google\AdsApi\Examples\Dfp\v201711\CustomTargetingService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201711\StatementBuilder;
use Google\AdsApi\Dfp\v201711\CustomTargetingService;
use Google\AdsApi\Dfp\v201711\DeleteCustomTargetingKeys as DeleteCustomTargetingKeysAction;

/**
 * Deletes custom targeting keys.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class DeleteCustomTargetingKeys
{

    const CUSTOM_TARGETING_KEY_ID = 'INSERT_CUSTOM_TARGETING_KEY_ID_HERE';

    public static function runExample(
        DfpServices $dfpServices,
        DfpSession $session,
        $customTargetingKeyId
    ) {
        $customTargetingService = $dfpServices->get($session, CustomTargetingService::class);

        // Create a statement to select the custom targeting keys to delete.
        $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
        $statementBuilder = (new StatementBuilder())->where('id = :id')
            ->orderBy('id ASC')
            ->limit($pageSize)
            ->withBindVariableValue('id', $customTargetingKeyId);

        // Retrieve a small amount of custom targeting keys at a time, paging
        // through until all custom targeting keys have been retrieved.
        $totalResultSetSize = 0;
        do {
            $page = $customTargetingService->getCustomTargetingKeysByStatement(
                $statementBuilder->toStatement()
            );

            // Print out some information for the custom targeting keys to be deleted.
            if ($page->getResults() !== null) {
                $totalResultSetSize = $page->getTotalResultSetSize();
                $i = $page->getStartIndex();
                foreach ($page->getResults() as $customTargetingKey) {
                    printf(
                        "%d) Custom targeting key with ID %d, name '%s', "
                        . "and display name '%s' will be deleted.\n",
                        $i++,
                        $customTargetingKey->getId(),
                        $customTargetingKey->getName(),
                        $customTargetingKey->getDisplayName()
                    );
                }
            }

            $statementBuilder->increaseOffsetBy($pageSize);
        } while ($statementBuilder->getOffset() < $totalResultSetSize);

        printf(
            "Total number of custom targeting keys to be deleted: %d\n",
            $totalResultSetSize
        );

        if ($totalResultSetSize > 0) {
            // Remove limit and offset from statement so we can reuse the statement.
            $statementBuilder->removeLimitAndOffset();

            // Create and perform action.
            $action = new DeleteCustomTargetingKeysAction();
            $result = $customTargetingService->performCustomTargetingKeyAction(
                $action,
                $statementBuilder->toStatement()
            );

            if ($result !== null && $result->getNumChanges() > 0) {
                printf(
                    "Number of custom targeting keys deleted: %d\n",
                    $result->getNumChanges()
                );
            } else {
                printf("No custom targeting keys were deleted.\n");
            }
        }
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

        self::runExample(
            new DfpServices(),
            $session,
            intval(self::CUSTOM_TARGETING_KEY_ID)
        );
    }
}

DeleteCustomTargetingKeys::main();
