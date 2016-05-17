<?php
/**
 * This example fetches and creates match table files from the Line_Item and
 * Ad_Unit tables. This example may take a while to run.
 *
 * NOTE: Since this example loads all results into memory, your PHP memory_limit
 *       may need to be raised for this example to work properly.
 *
 * A full list of available tables can be found at:
 * https://developers.google.com/doubleclick-publishers/docs/reference/v201605/PublisherQueryLanguageService
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
 * @subpackage v201605
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
require_once 'Google/Api/Ads/Dfp/Util/v201605/Pql.php';
require_once 'Google/Api/Ads/Dfp/Util/v201605/StatementBuilder.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the PublisherQueryLanguageService.
  $pqlService = $user->GetService('PublisherQueryLanguageService', 'v201605');

  // Create statement to select all line items.
  $lineItemStatementBuilder = new StatementBuilder();
  $lineItemStatementBuilder->Select('Id, Name, Status')
      ->From('Line_Item')
      ->OrderBy('Id ASC')
      ->Limit(StatementBuilder::SUGGESTED_PAGE_LIMIT);

  // Create statement to select all ad units.
  $adUnitStatementBuilder = new StatementBuilder();
  $adUnitStatementBuilder->Select('Id, Name')
      ->From('Ad_Unit')
      ->OrderBy('Id ASC')
      ->Limit(StatementBuilder::SUGGESTED_PAGE_LIMIT);

  $lineItemFilePath = fetchMatchTable($lineItemStatementBuilder, $pqlService,
      "Line-Item-Matchtable");
  $adUnitFilePath = fetchMatchTable($adUnitStatementBuilder, $pqlService,
      "Ad-Unit-Matchtable");

  printf("Line items saved to %s\n", $lineItemFilePath);
  printf("Ad units saved to %s\n", $adUnitFilePath);
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

/**
 * Fetches a match table from a PQL statement and writes it to a file.
 */
function fetchMatchTable($statementBuilder, $pqlService, $fileName) {
  $resultSet = null;
  $combinedResultSet = null;

  do {
    $resultSet = $pqlService->select($statementBuilder->ToStatement());

    // Combine result sets with previous ones.
    $combinedResultSet = (!isset($combinedResultSet))
        ? $resultSet
        : Pql::CombineResultSets($combinedResultSet, $resultSet);

    $statementBuilder->IncreaseOffsetBy(StatementBuilder::SUGGESTED_PAGE_LIMIT);
  } while (isset($resultSet->rows) && count($resultSet->rows) > 0);

  // Change to your file location.
  $filePath = sprintf("%s/%s-%s.csv", sys_get_temp_dir(), $fileName, uniqid());
  $fp = fopen($filePath, 'w');

  // Write the result set to a CSV.
  fputcsv($fp, Pql::GetColumnLabels($combinedResultSet));
  foreach ($combinedResultSet->rows as $row) {
     fputcsv($fp, Pql::GetRowStringValues($row));
  }
  fclose($fp);

  return $filePath;
}

