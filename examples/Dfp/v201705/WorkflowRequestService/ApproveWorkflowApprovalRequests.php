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
namespace Google\AdsApi\Examples\Dfp\v201705\WorkflowRequestService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201705\StatementBuilder;
use Google\AdsApi\Dfp\v201705\ApproveWorkflowApprovalRequests as ApproveWorkflowApprovalRequestsAction;
use Google\AdsApi\Dfp\v201705\WorkflowEntityType;
use Google\AdsApi\Dfp\v201705\WorkflowRequestService;
use Google\AdsApi\Dfp\v201705\WorkflowRequestType;

/**
 * Approves workflow approval requests.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class ApproveWorkflowApprovalRequests {

  const PROPOSAL_ID = 'INSERT_PROPOSAL_ID_HERE';

  public static function runExample(DfpServices $dfpServices,
      DfpSession $session, $proposalId) {
    $workflowRequestService =
        $dfpServices->get($session, WorkflowRequestService::class);

    // Create a statement to select the workflow approval requests to approve.
    $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
    $statementBuilder = (new StatementBuilder())
        ->where('WHERE entityId = :entityId and entityType = :entityType and '
            . 'type = :type')
        ->orderBy('id ASC')
        ->limit($pageSize)
        ->withBindVariableValue('entityId', $proposalId)
        ->withBindVariableValue('entityType', WorkflowEntityType::PROPOSAL)
        ->withBindVariableValue(
            'type', WorkflowRequestType::WORKFLOW_APPROVAL_REQUEST);

    // Retrieve a small amount of workflow approval requests at a time, paging
    // through until all workflow requests have been retrieved.
    $totalResultSetSize = 0;
    do {
      $page = $workflowRequestService->getWorkflowRequestsByStatement(
          $statementBuilder->toStatement());

      // Print out some information for the workflow approval requests to be
      // approved.
      if ($page->getResults() !== null) {
        $totalResultSetSize = $page->getTotalResultSetSize();
        $i = $page->getStartIndex();
        foreach ($page->getResults() as $workflowRequest) {
          printf(
              "%d) Workflow approval request with ID %d, " .
                  "for '%s', " .
                  "and ID %d will be approved.\n",
              $i++,
              $workflowRequest->getId(),
              $workflowRequest->getEntityType(),
              $workflowRequest->getEntityId()
          );
        }
      }

      $statementBuilder->increaseOffsetBy($pageSize);
    } while ($statementBuilder->getOffset() < $totalResultSetSize);

    printf("Total number of workflow approval requests to be approved: %d\n",
        $totalResultSetSize);

    if ($totalResultSetSize > 0) {
      // Remove limit and offset from statement so we can reuse the statement.
      $statementBuilder->removeLimitAndOffset();

      // Create and perform action, adding a comment for approval.
      $action = new ApproveWorkflowApprovalRequestsAction();
      $action->setComment('The proposal looks good to me. Approved.');
      $result = $workflowRequestService->performWorkflowRequestAction($action,
          $statementBuilder->toStatement());

      if ($result !== null && $result->getNumChanges() > 0) {
        printf("Number of workflow approval requests approved: %d\n",
            $result->getNumChanges());
      } else {
        printf("No workflow approval requests were approved.\n");
      }
    }
  }

  public static function main() {
    // Generate a refreshable OAuth2 credential for authentication.
    $oAuth2Credential = (new OAuth2TokenBuilder())
        ->fromFile()
        ->build();

    // Construct an API session configured from a properties file and the OAuth2
    // credentials above.
    $session = (new DfpSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential)
        ->build();

    self::runExample(new DfpServices(), $session, intval(self::PROPOSAL_ID));
  }
}

ApproveWorkflowApprovalRequests::main();
