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
namespace Google\AdsApi\Examples\Dfp\v201611\PublisherQueryLanguageService;

require '../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201611\Pql;
use Google\AdsApi\Dfp\Util\v201611\StatementBuilder;
use Google\AdsApi\Dfp\v201611\PublisherQueryLanguageService;

/**
 * This example gets all line items which have a name beginning with 'line
 * item' and writes them to a file in your system's temp directory. This example
 * may take a while to run.
 *
 * <p>NOTE: This example loads all results into memory, you may need to raise
 * your PHP memory_limit for this example to work.
 *
 * @see
 *     https://developers.google.com/doubleclick-publishers/docs/reference/v201611/PublisherQueryLanguageService#Line_Item
 */
class GetLineItemsNamedLike {

  public static function runExample(DfpServices $dfpServices,
      DfpSession $session) {
    $pqlService =
        $dfpServices->get($session, PublisherQueryLanguageService::class);

    // Create statement to select line items whose names begin with "line item".
    $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
    $statementBuilder = (new StatementBuilder())
        ->select('Id, Name, Status')
        ->from('Line_Item')
        ->where('Name LIKE \'line item%\'')
        ->orderBy('Id ASC')
        ->limit($pageSize);

    // Default for result sets.
    $combinedResultSet = null;
    $resultSet = null;
    $i = 0;

    do {
      // Get line items like 'line item%'.
      $resultSet = $pqlService->select($statementBuilder->toStatement());

      // Combine result sets with previous ones.
      $combinedResultSet = $combinedResultSet === null
          ? $resultSet
          : Pql::combineResultSets($combinedResultSet, $resultSet);

      printf(
          "%d) %d line items beginning at offset %d were found.\n",
          $i++,
          $resultSet->getRows() !== null ? count($resultSet->getRows()) : 0,
          $statementBuilder->getOffset()
      );

      $statementBuilder->increaseOffsetBy($pageSize);
    } while ($resultSet->getRows() !== null
        && count($resultSet->getRows()) > 0);

    // Write to system temp directory by default.
    $filePath = sprintf(
        '%s.csv',
        tempnam(sys_get_temp_dir(), 'line-items-named-like-')
    );

    $fp = fopen($filePath, 'w');
    // Write the result set to a CSV.
    fputcsv($fp, Pql::getColumnLabels($combinedResultSet));
    foreach ($combinedResultSet->getRows() as $row) {
      fputcsv($fp, Pql::getRowStringValues($row));
    }
    fclose($fp);

    printf("Line items saved to %s\n", $filePath);
  }

  public static function main() {
    $oAuth2Credential = (new OAuth2TokenBuilder())
        ->fromFile()
        ->build();
    $session = (new DfpSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential)
        ->build();
    self::runExample(new DfpServices(), $session);
  }
}

GetLineItemsNamedLike::main();

