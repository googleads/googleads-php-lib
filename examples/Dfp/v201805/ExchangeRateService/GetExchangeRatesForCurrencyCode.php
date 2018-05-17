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

namespace Google\AdsApi\Examples\Dfp\v201805\ExchangeRateService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201805\StatementBuilder;
use Google\AdsApi\Dfp\v201805\ExchangeRateService;

/**
 * This example gets the exchange rate for a specific currency code.
 *
 * <p>It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class GetExchangeRatesForCurrencyCode
{

    const CURRENCY_CODE = 'INSERT_CURRENCY_CODE_HERE';

    public static function runExample(
        DfpServices $dfpServices,
        DfpSession $session,
        $currencyCode
    ) {
        $exchangeRateService = $dfpServices->get($session, ExchangeRateService::class);

        // Create a statement to select exchange rates.
        $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
        $statementBuilder = (new StatementBuilder())->where('currencyCode = :currencyCode')
            ->orderBy('id ASC')
            ->limit($pageSize)
            ->withBindVariableValue('currencyCode', $currencyCode);

        // Retrieve a small amount of exchange rates at a time, paging
        // through until all exchange rates have been retrieved.
        $totalResultSetSize = 0;
        do {
            $page = $exchangeRateService->getExchangeRatesByStatement(
                $statementBuilder->toStatement()
            );

            // Print out some information for each exchange rate.
            if ($page->getResults() !== null) {
                $totalResultSetSize = $page->getTotalResultSetSize();
                $i = $page->getStartIndex();
                foreach ($page->getResults() as $exchangeRate) {
                    printf(
                        "%d) Exchange rate with ID %d, currency code '%s', and exchange "
                        . "rate %.2f was found.\n",
                        $i++,
                        $exchangeRate->getId(),
                        $exchangeRate->getCurrencyCode(),
                        $exchangeRate->getExchangeRate() / 10000000000
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
        $session = (new DfpSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        self::runExample(new DfpServices(), $session, self::CURRENCY_CODE);
    }
}

GetExchangeRatesForCurrencyCode::main();
