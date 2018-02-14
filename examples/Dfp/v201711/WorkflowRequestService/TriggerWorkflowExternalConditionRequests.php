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

namespace Google\AdsApi\Examples\Dfp\v201711\WorkflowRequestService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201711\StatementBuilder;
use Google\AdsApi\Dfp\v201711\TriggerWorkflowExternalConditionRequests as TriggerWorkflowExternalConditionRequestsAction;
use Google\AdsApi\Dfp\v201711\WorkflowEntityType;
use Google\AdsApi\Dfp\v201711\WorkflowRequestService;
use Google\AdsApi\Dfp\v201711\WorkflowRequestType;

/**
 * Triggers workflow external condition requests.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class TriggerWorkflowExternalConditionRequests
{

    const PROPOSAL_ID = 'INSERT_PROPOSAL_ID_HERE';

    public static function runExample(
        DfpServices $dfpServices,
        DfpSession $session,
        $proposalId
    ) {
        $workflowRequestService = $dfpServices->get($session, WorkflowRequestService::class);

        // Create a statement to select the workflow external condition requests to
        // trigger.
        $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
        $statementBuilder = (new StatementBuilder())->where(
            'WHERE entityId = :entityId and entityType = :entityType and type = :type'
        )
            ->orderBy('id ASC')
            ->limit($pageSize)
            ->withBindVariableValue('entityId', $proposalId)
            ->withBindVariableValue('entityType', WorkflowEntityType::PROPOSAL)
            ->withBindVariableValue(
                'type',
                WorkflowRequestType::WORKFLOW_EXTERNAL_CONDITION_REQUEST
            );

        // Retrieve a small amount of workflow external condition requests at a
        // time, paging through until all workflow requests have been retrieved.
        $totalResultSetSize = 0;
        do {
            $page = $workflowRequestService->getWorkflowRequestsByStatement(
                $statementBuilder->toStatement()
            );

            // Print out some information for the workflow requests to be triggered.
            if ($page->getResults() !== null) {
                $totalResultSetSize = $page->getTotalResultSetSize();
                $i = $page->getStartIndex();
                foreach ($page->getResults() as $workflowRequest) {
                    printf(
                        "%d) Workflow external condition request with ID %d, for '%s', "
                        . "and ID %d will be triggered.\n",
                        $i++,
                        $workflowRequest->getId(),
                        $workflowRequest->getEntityType(),
                        $workflowRequest->getEntityId()
                    );
                }
            }

            $statementBuilder->increaseOffsetBy($pageSize);
        } while ($statementBuilder->getOffset() < $totalResultSetSize);

        printf(
            "Total number of workflow external condition requests to be triggered: %d\n",
            $totalResultSetSize
        );

        if ($totalResultSetSize > 0) {
            // Remove limit and offset from statement so we can reuse the statement.
            $statementBuilder->removeLimitAndOffset();

            // Create and perform action.
            $action = new TriggerWorkflowExternalConditionRequestsAction();
            $result = $workflowRequestService->performWorkflowRequestAction(
                $action,
                $statementBuilder->toStatement()
            );

            if ($result !== null && $result->getNumChanges() > 0) {
                printf(
                    "Number of workflow external condition requests triggered: %d\n",
                    $result->getNumChanges()
                );
            } else {
                printf("No workflow external condition requests were triggered.\n");
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

        self::runExample(new DfpServices(), $session, intval(self::PROPOSAL_ID));
    }
}

TriggerWorkflowExternalConditionRequests::main();
