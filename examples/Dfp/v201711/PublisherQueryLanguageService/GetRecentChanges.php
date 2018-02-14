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

namespace Google\AdsApi\Examples\Dfp\v201711\PublisherQueryLanguageService;

require __DIR__ . '/../../../../vendor/autoload.php';

use DateTime;
use DateTimeZone;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201711\DfpDateTimes;
use Google\AdsApi\Dfp\Util\v201711\Pql;
use Google\AdsApi\Dfp\Util\v201711\StatementBuilder;
use Google\AdsApi\Dfp\v201711\PublisherQueryLanguageService;

/**
 * Gets recent changes in your network using the `Change_History` table and
 * writes them to a file in your system's temp directory. This example may take
 * a while to run.
 *
 * Note: this example loads all results into memory, you may need to raise your
 * PHP memory_limit for this example to work.
 *
 * @see
 *     https://developers.google.com/doubleclick-publishers/docs/reference/latest/PublisherQueryLanguageService#Change_History
 */
class GetRecentChanges
{

    public static function runExample(DfpServices $dfpServices, DfpSession $session)
    {
        $pqlService = $dfpServices->get($session, PublisherQueryLanguageService::class);

        // Create statement to select recent changes. Change_History only supports
        // ordering by descending ChangeDateTime. Offsets are not supported. IDs are
        // used as continuation tokens for paging. A date time range is required
        // when querying this table.
        $startDateTime = new DateTime('-1 day', new DateTimeZone('America/New_York'));
        $endDateTime = new DateTime('now', new DateTimeZone('America/New_York'));
        $statementBuilder = new StatementBuilder();
        $statementBuilder->select('Id, ChangeDateTime, EntityId, EntityType, Operation, UserId')
            ->from('Change_History')
            ->where(
                'ChangeDateTime < :endDateTime AND ChangeDateTime > :startDateTime'
            )
            ->orderBy('ChangeDateTime DESC')
            ->withBindVariableValue(
                'startDateTime',
                DfpDateTimes::fromDateTime($startDateTime)
            )
            ->withBindVariableValue(
                'endDateTime',
                DfpDateTimes::fromDateTime($endDateTime)
            )
            ->limit(StatementBuilder::SUGGESTED_PAGE_LIMIT);

        // Retrieve a small amount of changes at a time, paging through until all
        // changes have been retrieved.
        $combinedResultSet = null;
        $resultSet = null;
        $i = 0;

        do {
            $resultSet = $pqlService->select($statementBuilder->toStatement());

            // Combine result sets with previous ones.
            $combinedResultSet = $combinedResultSet === null
                ? $resultSet
                : Pql::combineResultSets(
                    $combinedResultSet,
                    $resultSet
                );

            $rows = $resultSet->getRows();
            if ($rows !== null && count($rows) > 0) {
                // Get the earliest change ID in the result set.
                $lastRow = $rows[count($rows) - 1];
                $lastId = $lastRow->getValues()[0]->getValue();

                printf(
                    "%d) %d changes prior to ID '%s' were found.\n",
                    $i++,
                    count($rows),
                    $lastId
                );

                // Use the earliest change ID in the result set to page.
                $statementBuilder->where(
                    'Id < :id AND ChangeDateTime < :endDateTime AND '
                    . 'ChangeDateTime > :startDateTime'
                )
                    ->withBindVariableValue('id', $lastId);
            }
        } while ($rows !== null && count($rows) > 0);

        // Write to system temp directory by default.
        $filePath = sprintf(
            '%s.csv',
            tempnam(sys_get_temp_dir(), 'change-history-')
        );

        $fp = fopen($filePath, 'w');
        // Write the result set to a CSV.
        fputcsv($fp, Pql::getColumnLabels($combinedResultSet));
        if ($combinedResultSet->getRows() !== null) {
            foreach ($combinedResultSet->getRows() as $row) {
                fputcsv($fp, Pql::getRowStringValues($row));
            }
        }
        fclose($fp);

        printf("Recent changes saved to %s\n", $filePath);
    }

    public static function main()
    {
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()
            ->build();
        $session = (new DfpSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();
        self::runExample(new DfpServices(), $session);
    }
}

GetRecentChanges::main();
