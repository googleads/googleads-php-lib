<?php
/**
 * This example gets all line items which have a name beginning with "line
 * item". This example may take a while to run.
 *
 * The Line_Item PQL table schema can be found here:
 * https://developers.google.com/doubleclick-publishers/docs/reference/v201405/PublisherQueryLanguageService#Line_Item
 *
 * Tags: PublisherQueryLanguageService.select
 *
 * PHP version 5
 *
 * Copyright 2013, Google Inc. All Rights Reserved.
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
 * @subpackage v201405
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Vincent Tsao
 */
error_reporting(E_STRICT | E_ALL);

// You can set the include path to src directory or reference
// DfpUser.php directly via require_once.
// $path = '/path/to/dfp_api_php_lib/src';
$path = dirname(__FILE__) . '/../../../../src';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

require_once 'Google/Api/Ads/Dfp/Lib/DfpUser.php';
require_once 'Google/Api/Ads/Dfp/Util/Pql.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the PublisherQueryLanguageService.
  $pqlService = $user->GetService('PublisherQueryLanguageService', 'v201405');

  // Statement parts to help build a statement to select all cities that start
  // with "Santa".
  $pqlTemplate = "SELECT Id, Name, Status FROM Line_Item WHERE Name LIKE 'line "
      . "item%%' ORDER BY Id ASC LIMIT %d OFFSET %d";
  $SUGGESTED_PAGE_LIMIT = 500;
  $offset = 0;
  $i = 0;

  do {
    // Get line items like 'line item%'.
    $resultSet = $pqlService->select(new Statement(sprintf($pqlTemplate,
        $SUGGESTED_PAGE_LIMIT, $offset)));

    // Combine result sets with previous ones.
    $combinedResultSet = (!isset($combinedResultSet))
        ? $resultSet
        : Pql::CombineResultSets($combinedResultSet, $resultSet);

    printf("%d) %d line items beginning at offset %d were found.\n", $i++,
        count($resultSet->rows), $offset);

    $offset += $SUGGESTED_PAGE_LIMIT;
  } while (isset($resultSet->rows) && count($resultSet->rows) > 0);

  // Change to your file location.
  $filePath = sprintf("%s/Line-Items-Named-Like-%s.csv", sys_get_temp_dir(),
      uniqid());
  ob_start();
  $fp = fopen($filePath, 'w');

  // Write the result set to a CSV.
  fputcsv($fp, Pql::GetColumnLabels($combinedResultSet));
  foreach ($combinedResultSet->rows as $row) {
     fputcsv($fp, Pql::GetRowStringValues($row));
  }
  fclose($fp);
  ob_end_clean();

  printf("Line items saved to %s\n", $filePath);
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

