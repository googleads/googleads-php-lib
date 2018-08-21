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

namespace Google\AdsApi\Examples\AdManager\v201802\ReconciliationLineItemReportService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerServices;
use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v201802\StatementBuilder;
use Google\AdsApi\AdManager\v201802\ReconciliationLineItemReportService;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets a reconciliation report's data for line items that served
 * through AdManager.
 *
 * It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class GetReconciliationLineItemReportsForReconciliationReport
{

    const RECONCILIATION_REPORT_ID = 'INSERT_RECONCILIATION_REPORT_ID_HERE';

    public static function runExample(
        AdManagerServices $adManagerServices,
        AdManagerSession $session,
        $reconciliationReportId
    ) {
        $reconciliationLineItemReportService = $adManagerServices->get(
            $session,
            ReconciliationLineItemReportService::class
        );

        // Create a statement to select reconciliation line item reports.
        $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
        $statementBuilder = (new StatementBuilder())->where(
            'reconciliationReportId = :reconciliationReportId AND '
            . 'lineItemId != :lineItemId'
        )
            ->orderBy('lineItemId ASC')
            ->limit($pageSize)
            ->withBindVariableValue(
                'reconciliationReportId',
                $reconciliationReportId
            )
            ->withBindVariableValue('lineItemId', 0);

        // Retrieve a small amount of reconciliation line item reports at a
        // time, paging through until all reconciliation line item reports have
        // been retrieved.
        $totalResultSetSize = 0;
        do {
            $page =
                $reconciliationLineItemReportService
                    ->getReconciliationLineItemReportsByStatement(
                        $statementBuilder->toStatement()
                    );

            // Print out some information for each reconciliation line item
            // report.
            if ($page->getResults() !== null) {
                $totalResultSetSize = $page->getTotalResultSetSize();
                $i = $page->getStartIndex();
                foreach ($page->getResults() as $report) {
                    printf(
                        "%d) Reconciliation line item report with ID %d, line "
                        . "item ID %d, reconciliation source '%s', and "
                        . "reconciled volume %d was found.\n",
                        $i++,
                        $report->getId(),
                        $report->getLineItemId(),
                        $report->getReconciliationSource(),
                        $report->getReconciledVolume()
                    );
                }
            }

            $statementBuilder->increaseOffsetBy($pageSize);
        } while ($statementBuilder->getOffset() < $totalResultSetSize);

        printf("Number of results found: %d\n", $totalResultSetSize);
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()
            ->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdManagerSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        self::runExample(
            new AdManagerServices(),
            $session,
            intval(self::RECONCILIATION_REPORT_ID)
        );
    }
}

GetReconciliationLineItemReportsForReconciliationReport::main();
