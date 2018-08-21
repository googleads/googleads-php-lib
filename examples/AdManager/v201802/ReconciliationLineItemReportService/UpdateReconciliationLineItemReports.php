<?php
/**
 * Copyright 2017 Google Inc. All Rights Reserved.
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
use Google\AdsApi\AdManager\v201802\BillFrom;
use Google\AdsApi\AdManager\v201802\ReconciliationLineItemReportService;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Updates a reconciliation line item report.
 *
 * It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class UpdateReconciliationLineItemReports
{

    const RECONCILIATION_LINE_ITEM_REPORT_ID =
        'INSERT_RECONCILIATION_LINE_ITEM_REPORT_ID_HERE';

    public static function runExample(
        AdManagerServices $adManagerServices,
        AdManagerSession $session,
        $reconciliationLineItemReportId
    ) {
        $reconciliationLineItemReportService = $adManagerServices->get(
            $session,
            ReconciliationLineItemReportService::class
        );

        // Create a statement to select the reconciliation line item reports to
        // update.
        $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
        $statementBuilder = (new StatementBuilder())
            ->where('id = :reconciliationLineItemReportId')
            ->orderBy(
                'id ASC'
            )
            ->limit($pageSize)
            ->withBindVariableValue(
                'reconciliationLineItemReportId',
                $reconciliationLineItemReportId
            );

        $page = $reconciliationLineItemReportService
            ->getReconciliationLineItemReportsByStatement(
                $statementBuilder->toStatement()
            );
        $lineItemReport = $page->getResults()[0];

        // Set and use a manual volume for billing. This example splits the
        // difference between Ad Manager and the third party volume.
        $adManagerVolume = $lineItemReport->getDfpVolume();
        $thirdPartyVolume = $lineItemReport->getThirdPartyVolume();
        $lineItemReport->setManualVolume(
            ($adManagerVolume + $thirdPartyVolume) / 2
        );
        $lineItemReport->setReconciliationSource(BillFrom::MANUAL);

        // Update the reconciliation line item report on the server.
        $updatedLineItemReports =
            $reconciliationLineItemReportService
                ->updateReconciliationLineItemReports(
                    [$lineItemReport]
                );

        // Print out some information for each updated reconciliation line item
        // report.
        foreach ($updatedLineItemReports as $reconciliationLineItemReport) {
            printf(
                "Reconciliation line item report with ID %d for line item ID %d"
                . " was updated with manual volume %d.\n",
                $reconciliationLineItemReport->getId(),
                $reconciliationLineItemReport->getLineItemId(),
                $reconciliationLineItemReport->getManualVolume()
            );
        }
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
            intval(self::RECONCILIATION_LINE_ITEM_REPORT_ID)
        );
    }
}

UpdateReconciliationLineItemReports::main();
