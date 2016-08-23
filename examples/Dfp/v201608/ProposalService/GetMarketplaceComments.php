<?php
/**
 * This example gets the Marketplace comments for a programmatic proposal.
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
 * @subpackage v201608
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
require_once 'Google/Api/Ads/Dfp/Util/v201608/DateTimeUtils.php';
require_once 'Google/Api/Ads/Dfp/Util/v201608/StatementBuilder.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

$proposalId = 'INSERT_PROGRAMMATIC_PROPOSAL_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  $proposalService = $user->GetService('ProposalService', 'v201608');

  // Create a statement to select Marketplace comments.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->Where('proposalId = :proposalId')
      ->WithBindVariableValue('proposalId', $proposalId);

  // Retrieve a small amount of Marketplace comments at a time, paging through
  // until all comments have been retrieved.
  $totalResultSetSize = 0;
  do {
    $page = $proposalService->getMarketplaceCommentsByStatement(
        $statementBuilder->ToStatement());

    if ($page->results !== null) {
      // Print out some information for each Marketplace comment.
      $totalResultSetSize = $page->totalResultSetSize;
      $i = $page->startIndex;
      foreach ($page->results as $marketplaceComment) {
        printf(
            "%d) Marketplace comment with creation time '%s' and comment '%s' "
                . "was found.\n",
            $i++,
            DateTimeUtils::ToStringWithTimeZone(
                $marketplaceComment->creationTime),
            $marketplaceComment->comment
        );
      }
    }

    $statementBuilder->IncreaseOffsetBy(StatementBuilder::SUGGESTED_PAGE_LIMIT);
  } while ($statementBuilder->GetOffset() < $totalResultSetSize);

  printf("Number of results found: %d\n", $totalResultSetSize);
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}
