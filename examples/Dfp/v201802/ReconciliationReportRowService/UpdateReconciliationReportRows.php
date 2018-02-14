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

namespace Google\AdsApi\Examples\Dfp\v201802\ReconciliationReportRowService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201802\StatementBuilder;
use Google\AdsApi\Dfp\v201802\BillFrom;
use Google\AdsApi\Dfp\v201802\ReconciliationReportRowService;

/**
 * Updates a reconciliation report row.
 *
 * It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class UpdateReconciliationReportRows
{

    const RECONCILIATION_REPORT_ID = 'INSERT_RECONCILIATION_REPORT_ID_HERE';
    const RECONCILIATION_REPORT_ROW_ID = 'INSERT_RECONCILIATION_REPORT_ROW_ID_HERE';

    public static function runExample(
        DfpServices $dfpServices,
        DfpSession $session,
        $reconciliationReportId,
        $reconciliationReportRowId
    ) {
        $reconciliationReportRowService = $dfpServices->get(
            $session,
            ReconciliationReportRowService::class
        );

        // Create a statement to select the reconciliation report rows to update.
        $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
        $statementBuilder = (new StatementBuilder())->where(
            'reconciliationReportId = :reconciliationReportId AND id = '
            . ':reconciliationReportRowId'
        )
            ->orderBy('id ASC')
            ->limit($pageSize)
            ->withBindVariableValue(
                'reconciliationReportId',
                $reconciliationReportId
            )
            ->withBindVariableValue(
                'reconciliationReportRowId',
                $reconciliationReportRowId
            );

        $page = $reconciliationReportRowService->getReconciliationReportRowsByStatement(
            $statementBuilder->toStatement()
        );
        $row = $page->getResults()[0];

        // Set a comment on the reconciliation report row.
        $row->setComments(
            'Third party volume didn\'t match DFP - we agreed to split the difference'
        );

        // Set and use a manual volume for billing.
        $row->setManualVolume(
            ($row->getDfpVolume() + $row->getThirdPartyVolume()) / 2
        );
        $row->setReconciliationSource(BillFrom::MANUAL);

        // Update the reconciliation report rows on the server.
        $updatedRows = $reconciliationReportRowService->updateReconciliationReportRows([$row]);

        // Print out some information for each updated reconciliation report row.
        foreach ($updatedRows as $reconciliationReportRow) {
            printf(
                "Reconciliation report row with ID %d for line item ID %d and "
                . "creative ID %d was updated with manual volume %d.\n",
                $reconciliationReportRow->getId(),
                $reconciliationReportRow->getLineItemId(),
                $reconciliationReportRow->getCreativeId(),
                $reconciliationReportRow->getManualVolume()
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
        $session = (new DfpSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        self::runExample(
            new DfpServices(),
            $session,
            intval(self::RECONCILIATION_REPORT_ID),
            intval(self::RECONCILIATION_REPORT_ROW_ID)
        );
    }
}

UpdateReconciliationReportRows::main();
