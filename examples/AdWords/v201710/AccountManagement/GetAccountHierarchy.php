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

namespace Google\AdsApi\Examples\AdWords\v201710\AccountManagement;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201710\cm\OrderBy;
use Google\AdsApi\AdWords\v201710\cm\Paging;
use Google\AdsApi\AdWords\v201710\cm\Selector;
use Google\AdsApi\AdWords\v201710\cm\SortOrder;
use Google\AdsApi\AdWords\v201710\mcm\ManagedCustomer;
use Google\AdsApi\AdWords\v201710\mcm\ManagedCustomerService;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets the account hierarchy under the current account.
 */
class GetAccountHierarchy
{

    const PAGE_LIMIT = 500;

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session
    ) {
        $managedCustomerService = $adWordsServices->get(
            $session,
            ManagedCustomerService::class
        );

        // Create selector.
        $selector = new Selector();
        $selector->setFields(['CustomerId', 'Name']);
        $selector->setOrdering([new OrderBy('CustomerId', SortOrder::ASCENDING)]);
        $selector->setPaging(new Paging(0, self::PAGE_LIMIT));

        // Maps from customer IDs to accounts and links.
        $customerIdsToAccounts = [];
        $customerIdsToChildLinks = [];
        $customerIdsToParentLinks = [];

        $totalNumEntries = 0;
        do {
            // Make the get request.
            $page = $managedCustomerService->get($selector);

            // Create links between manager and clients.
            if ($page->getEntries() !== null) {
                $totalNumEntries = $page->getTotalNumEntries();
                if ($page->getLinks() !== null) {
                    foreach ($page->getLinks() as $link) {
                        // Cast the indexes to string to avoid the issue when 32-bit PHP
                        // automatically changes the IDs that are larger than the 32-bit max
                        // integer value to negative numbers.
                        $managerCustomerId = strval($link->getManagerCustomerId());
                        $customerIdsToChildLinks[$managerCustomerId][] = $link;
                        $clientCustomerId = strval($link->getClientCustomerId());
                        $customerIdsToParentLinks[$clientCustomerId] = $link;
                    }
                }
                foreach ($page->getEntries() as $account) {
                    $customerIdsToAccounts[strval($account->getCustomerId())] = $account;
                }
            }

            // Advance the paging index.
            $selector->getPaging()->setStartIndex(
                $selector->getPaging()->getStartIndex() + self::PAGE_LIMIT
            );
        } while ($selector->getPaging()->getStartIndex() < $totalNumEntries);

        // Find the root account.
        $rootAccount = null;
        foreach ($customerIdsToAccounts as $account) {
            if (!array_key_exists(
                $account->getCustomerId(),
                $customerIdsToParentLinks
            )) {
                $rootAccount = $account;
                break;
            }
        }

        if ($rootAccount !== null) {
            // Display results.
            self::printAccountHierarchy(
                $rootAccount,
                $customerIdsToAccounts,
                $customerIdsToChildLinks
            );
        } else {
            printf("No accounts were found.\n");
        }
    }

    /**
     * Prints the specified account's hierarchy using recursion.
     *
     * @param ManagedCustomer $account the account to print
     * @param array $customerIdsToAccounts a map from customer IDs to accounts
     * @param array $customerIdsToChildLinks a map from customer IDs to child
     *     links
     * @param int|null $depth the current depth we are printing from in the
     *     account hierarchy; i.e., how far we've recursed
     */
    private static function printAccountHierarchy(
        $account,
        $customerIdsToAccounts,
        $customerIdsToChildLinks,
        $depth = null
    ) {
        if ($depth === null) {
            print "(Customer ID, Account Name)\n";
            self::printAccountHierarchy(
                $account,
                $customerIdsToAccounts,
                $customerIdsToChildLinks,
                0
            );

            return;
        }

        print str_repeat('-', $depth * 2);
        $customerId = $account->getCustomerId();
        printf("%s, %s\n", $customerId, $account->getName());

        if (array_key_exists($customerId, $customerIdsToChildLinks)) {
            foreach ($customerIdsToChildLinks[strval($customerId)] as $childLink) {
                $childAccount = $customerIdsToAccounts[strval($childLink->getClientCustomerId())];
                self::printAccountHierarchy(
                    $childAccount,
                    $customerIdsToAccounts,
                    $customerIdsToChildLinks,
                    $depth + 1
                );
            }
        }
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()->withOAuth2Credential($oAuth2Credential)->build();
        self::runExample(new AdWordsServices(), $session);
    }
}

GetAccountHierarchy::main();
