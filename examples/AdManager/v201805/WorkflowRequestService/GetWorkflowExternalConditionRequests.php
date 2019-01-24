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

namespace Google\AdsApi\Examples\AdManager\v201805\WorkflowRequestService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v201805\StatementBuilder;
use Google\AdsApi\AdManager\v201805\ServiceFactory;
use Google\AdsApi\AdManager\v201805\WorkflowRequestType;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets workflow external condition requests. Workflow external
 * condition requests must be triggered or skipped for a workflow to finish.
 *
 * <p>It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class GetWorkflowExternalConditionRequests
{

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session
    ) {
        $workflowRequestService = $serviceFactory->createWorkflowRequestService(
            $session
        );

        // Create a statement to select workflow requests.
        $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
        $statementBuilder = (new StatementBuilder())->where('type = :type')
            ->orderBy('id ASC')
            ->limit($pageSize)
            ->withBindVariableValue(
                'type',
                WorkflowRequestType::WORKFLOW_EXTERNAL_CONDITION_REQUEST
            );

        // Retrieve a small amount of workflow requests at a time, paging
        // through until all workflow requests have been retrieved.
        $totalResultSetSize = 0;
        do {
            $page = $workflowRequestService->getWorkflowRequestsByStatement(
                $statementBuilder->toStatement()
            );

            // Print out some information for each workflow request.
            if ($page->getResults() !== null) {
                $totalResultSetSize = $page->getTotalResultSetSize();
                $i = $page->getStartIndex();
                foreach ($page->getResults() as $workflowRequest) {
                    printf(
                        "%d) Workflow request with ID %d, entity type '%s',"
                        . " and entity ID %d was found.%s",
                        $i++,
                        $workflowRequest->getId(),
                        $workflowRequest->getEntityType(),
                        $workflowRequest->getEntityId(),
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

GetWorkflowExternalConditionRequests::main();
