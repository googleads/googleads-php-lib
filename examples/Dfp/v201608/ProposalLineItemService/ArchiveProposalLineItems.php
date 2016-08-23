<?php
/**
 * This example archives a proposal line item. To determine which proposal line
 * items exist, run GetAllProposalLineItems.php.
 *
 * PHP version 5
 *
 * Copyright 2014, Google Inc. All Rights Reserved.
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
 * @subpackage v201608
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
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
require_once 'Google/Api/Ads/Dfp/Util/v201608/StatementBuilder.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

// Set the ID of the proposal line item to archive.
$proposalLineItemId = 'INSERT_PROPOSAL_LINE_ITEM_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the ProposalLineItemService.
  $proposalLineItemService = $user->GetService('ProposalLineItemService',
      'v201608');

  // Create a statement to select a single proposal line item by ID.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->Where('id = :id')
      ->OrderBy('id ASC')
      ->Limit(1)
      ->WithBindVariableValue('id', $proposalLineItemId);

  // Default for total result set size.
  $totalResultSetSize = 0;

  do {
    // Get proposal line items by statement.
    $page = $proposalLineItemService->getProposalLineItemsByStatement(
        $statementBuilder->ToStatement());

    // Display results.
    if (isset($page->results)) {
      $totalResultSetSize = $page->totalResultSetSize;
      $i = $page->startIndex;
      foreach ($page->results as $proposalLineItem) {
        printf("%d) Proposal line item with ID %d and name '%s' will be "
            . "archived.\n",
            $i++,
            $proposalLineItem->id,
            $proposalLineItem->name
        );
      }
    }

    $statementBuilder->IncreaseOffsetBy(StatementBuilder::SUGGESTED_PAGE_LIMIT);
  } while ($statementBuilder->GetOffset() < $totalResultSetSize);

  printf("Number of proposal line items to be archived: %d\n",
      $totalResultSetSize);

  if ($totalResultSetSize > 0) {
    // Remove limit and offset from statement.
    $statementBuilder->RemoveLimitAndOffset();

    // Create action.
    $action = new ArchiveProposalLineItems();

    // Perform action.
    $result = $proposalLineItemService->performProposalLineItemAction($action,
        $statementBuilder->ToStatement());

    // Display results.
    if (isset($result) && $result->numChanges > 0) {
      printf("Number of proposal line items archived: %d\n",
          $result->numChanges);
    } else {
      printf("No proposal line items were archived.\n");
    }
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

