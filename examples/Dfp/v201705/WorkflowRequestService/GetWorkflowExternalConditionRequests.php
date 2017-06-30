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
namespace Google\AdsApi\Examples\Dfp\v201705\WorkflowRequestService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201705\StatementBuilder;
use Google\AdsApi\Dfp\v201705\WorkflowRequestType;
use Google\AdsApi\Dfp\v201705\WorkflowRequestService;

/**
 * This example gets workflow external condition requests. Workflow external condition requests must be triggered or skipped for a workflow to finish.
 *
 * <p>It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class GetWorkflowExternalConditionRequests {

  public static function runExample(DfpServices $dfpServices,
      DfpSession $session) {
    $workflowRequestService =
        $dfpServices->get($session, WorkflowRequestService::class);

    // Create a statement to select workflow requests.
    $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
    $statementBuilder = (new StatementBuilder())
        ->where('type = :type')
        ->orderBy('id ASC')
        ->limit($pageSize)
        ->withBindVariableValue('type', WorkflowRequestType::WORKFLOW_EXTERNAL_CONDITION_REQUEST);

    // Retrieve a small amount of workflow requests at a time, paging
    // through until all workflow requests have been retrieved.
    $totalResultSetSize = 0;
    do {
      $page = $workflowRequestService->getWorkflowRequestsByStatement(
          $statementBuilder->toStatement());

      // Print out some information for each workflow request.
      if ($page->getResults() !== null) {
        $totalResultSetSize = $page->getTotalResultSetSize();
        $i = $page->getStartIndex();
        foreach ($page->getResults() as $workflowRequest) {
          printf(
              "%d) Workflow request with ID %d, entity type '%s', and entity ID %d was found.\n",
              $i++,
              $workflowRequest->getId(),
              $workflowRequest->getEntityType(),
              $workflowRequest->getEntityId()
          );
        }
      }

      $statementBuilder->increaseOffsetBy($pageSize);
    } while ($statementBuilder->getOffset() < $totalResultSetSize);

    printf("Number of results found: %d\n", $totalResultSetSize);
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

    self::runExample(new DfpServices(), $session);
  }
}

GetWorkflowExternalConditionRequests::main();
