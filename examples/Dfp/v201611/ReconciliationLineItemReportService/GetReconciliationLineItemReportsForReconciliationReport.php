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
namespace Google\AdsApi\Examples\Dfp\v201611\ReconciliationLineItemReportService;

require '../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201611\StatementBuilder;
use Google\AdsApi\Dfp\v201611\ReconciliationLineItemReportService;

/**
 * This example gets a reconciliation report's data for line items that served
 * through DFP.
 *
 * <p>It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class GetReconciliationLineItemReportsForReconciliationReport {

  const RECONCILIATION_REPORT_ID = 'INSERT_RECONCILIATION_REPORT_ID_HERE';

  public static function runExample(DfpServices $dfpServices,
      DfpSession $session, $reconciliationReportId) {
    $reconciliationLineItemReportService = $dfpServices->get(
        $session, ReconciliationLineItemReportService::class);

    // Create a statement to select reconciliation line item reports.
    $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
    $statementBuilder = (new StatementBuilder())
        ->where('reconciliationReportId = :reconciliationReportId AND '
            . 'lineItemId != :lineItemId')
        ->orderBy('lineItemId ASC')
        ->limit($pageSize)
        ->withBindVariableValue(
            'reconciliationReportId', $reconciliationReportId)
        ->withBindVariableValue('lineItemId', 0);

    // Retrieve a small amount of reconciliation line item reports at a time,
    // paging through until all reconciliation line item reports have been
    // retrieved.
    $totalResultSetSize = 0;
    do {
      $page = $reconciliationLineItemReportService
          ->getReconciliationLineItemReportsByStatement(
              $statementBuilder->toStatement());

      // Print out some information for each reconciliation line item report.
      if ($page->getResults() !== null) {
        $totalResultSetSize = $page->getTotalResultSetSize();
        $i = $page->getStartIndex();
        foreach ($page->getResults() as $reconciliationLineItemReport) {
          printf(
              "%d) Reconciliation line item report with ID %d, line item ID "
                  . "%d, reconciliation source '%s', and reconciled volume %d "
                  . "was found.\n",
              $i++,
              $reconciliationLineItemReport->getId(),
              $reconciliationLineItemReport->getLineItemId(),
              $reconciliationLineItemReport->getReconciliationSource(),
              $reconciliationLineItemReport->getReconciledVolume()
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

    self::runExample(
        new DfpServices(), $session, intval(self::RECONCILIATION_REPORT_ID));
  }
}

GetReconciliationLineItemReportsForReconciliationReport::main();
