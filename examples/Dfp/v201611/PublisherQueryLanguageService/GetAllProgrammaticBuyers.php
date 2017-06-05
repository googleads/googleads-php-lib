<?php
/**
 * This example gets all programmatic buyers in your network using the
 * Programmatic_Buyer table.
 *
 * A full list of available tables can be found at
 * https://developers.google.com/doubleclick-publishers/docs/reference/v201611/PublisherQueryLanguageService
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
require_once 'Google/Api/Ads/Dfp/Util/v201611/Pql.php';
require_once 'Google/Api/Ads/Dfp/Util/v201611/StatementBuilder.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  $pqlService = $user->GetService('PublisherQueryLanguageService', 'v201611');

  // Create statement to select all programmatic buyers.
  $statementBuilder = new StatementBuilder();
  $statementBuilder->Select('BuyerAccountId, Name')
      ->From('Programmatic_Buyer')
      ->OrderBy('BuyerAccountId ASC')
      ->Limit(StatementBuilder::SUGGESTED_PAGE_LIMIT);

  // Retrieve a small amount of rows at a time, paging through until all rows
  // have been retrieved.
  $resultSet = null;
  $combinedResultSet = null;
  $i = 0;
  do {
    $resultSet = $pqlService->select($statementBuilder->ToStatement());

    // Combine result sets with previous ones.
    $combinedResultSet = ($combinedResultSet !== null)
        ? $resultSet
        : Pql::CombineResultSets($combinedResultSet, $resultSet);

    printf(
        "%d) %d programmatic buyers beginning at offset %d were found.\n",
        $i++,
        $resultSet->rows !== null ? count($resultSet->rows) : 0,
        $statementBuilder->GetOffset()
    );

    $statementBuilder->IncreaseOffsetBy(StatementBuilder::SUGGESTED_PAGE_LIMIT);
  } while ($resultSet->rows !== null && count($resultSet->rows) > 0);

  // Change to another file location if desired.
  $filePath =
      sprintf("%s/programmatic-buyers-%s.csv", sys_get_temp_dir(), uniqid());
  $fp = fopen($filePath, 'w');

  // Write the result set to a CSV.
  fputcsv($fp, Pql::GetColumnLabels($combinedResultSet));
  foreach ($combinedResultSet->rows as $row) {
    fputcsv($fp, Pql::GetRowStringValues($row));
  }
  fclose($fp);

  printf("Programmatic buyers saved to %s\n", $filePath);
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}
