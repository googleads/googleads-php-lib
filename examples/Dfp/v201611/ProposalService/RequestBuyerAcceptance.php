<?php
/**
 * This example sends programmatic proposals to Marketplace to request buyer
 * acceptance.
 *
 * PHP version 5
 *
 * Copyright 2016, Google Inc. All Rights Reserved.
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
 *
 * @package    GoogleApiAdsDfp
 * @subpackage v201611
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
error_reporting(E_STRICT | E_ALL);

// You can set the include path to src directory or reference
// DfpUser.php directly via require_once.
// $path = '/path/to/dfp_api_php_lib/src';
$path = dirname(__FILE__) . '/../../../../src';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

require_once 'Google/Api/Ads/Dfp/Lib/DfpUser.php';
require_once 'Google/Api/Ads/Dfp/Util/v201611/StatementBuilder.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

$proposalId = 'INSERT_PROGRAMMATIC_PROPOSAL_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  $proposalService = $user->GetService('ProposalService', 'v201611');

  // Create a statement to select a single proposal by ID.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->Where('id = :id')
      ->OrderBy('id ASC')
      ->Limit(1)
      ->WithBindVariableValue('id', $proposalId);

  // Retrieve a small amount of proposals at a time, paging through until all
  // proposals have been retrieved.
  $totalResultSetSize = 0;
  do {
    $page = $proposalService->getProposalsByStatement(
        $statementBuilder->ToStatement());

    // Print out some information for each proposal.
    if ($page->results !== null) {
      $totalResultSetSize = $page->totalResultSetSize;
      $i = $page->startIndex;
      foreach ($page->results as $proposal) {
        printf(
            "%d) Proposal with ID %d and name '%s' will be sent to Marketplace "
                . "for buyer acceptance.\n",
            $i++,
            $proposal->id,
            $proposal->name
        );
      }
    }

    $statementBuilder->IncreaseOffsetBy(StatementBuilder::SUGGESTED_PAGE_LIMIT);
  } while ($statementBuilder->GetOffset() < $totalResultSetSize);

  printf(
      "Number of proposals to be sent to Marketplace for buyer acceptance: "
          . "%d\n",
      $totalResultSetSize
  );

  if ($totalResultSetSize > 0) {
    // Remove limit and offset from statement.
    $statementBuilder->RemoveLimitAndOffset();

    // Create action.
    $action = new RequestBuyerAcceptance();

    // Perform action.
    $result = $proposalService->performProposalAction($action,
        $statementBuilder->ToStatement());

    // Display results.
    if ($result !== null && $result->numChanges > 0) {
      printf(
          "Number of proposals that were sent to Marketplace for buyer "
              . "acceptance: %d\n",
          $result->numChanges
      );
    } else {
      printf("No proposals were sent to Marketplace for buyer acceptance.\n");
    }
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}
