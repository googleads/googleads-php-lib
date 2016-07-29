<?php
/**
 * This example gets the account hierarchy under the current account. Note: this
 * example must be run using the credentials of an AdWords manager account.
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
 * @package    GoogleApiAdsAdWords
 * @subpackage v201607
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 */
function GetAccountHierarchyExample(AdWordsUser $user) {
  // Get the service, which loads the required classes.
  $managedCustomerService =
      $user->GetService('ManagedCustomerService', ADWORDS_VERSION);

  // Create selector.
  $selector = new Selector();
  // Specify the fields to retrieve.
  $selector->fields = array('CustomerId',  'Name');
  $selector->paging = new Paging(0, AdWordsConstants::RECOMMENDED_PAGE_SIZE);

  // Create map from customerID to account.
  $accounts = array();
  // Create map from customerId to parent and child links.
  $childLinks = array();
  $parentLinks = array();
  do {
    // Make the get request.
    $graph = $managedCustomerService->get($selector);

    // Create links between manager and clients.
    if (isset($graph->entries)) {
      if (isset($graph->links)) {
        foreach ($graph->links as $link) {
          $childLinks[$link->managerCustomerId][] = $link;
          $parentLinks[$link->clientCustomerId] = $link;
        }
      }
      foreach ($graph->entries as $account) {
        $accounts[$account->customerId] = $account;
      }
    }
    $selector->paging->startIndex += AdWordsConstants::RECOMMENDED_PAGE_SIZE;
  } while ($selector->paging->startIndex < $graph->totalNumEntries);

  $rootAccount = null;
  foreach ($accounts as $account) {
    if (!array_key_exists($account->customerId, $parentLinks)) {
      $rootAccount = $account;
      break;
    }
  }

  if ($rootAccount !== null) {
    // Display account tree.
    print "(Customer Id, Account Name)\n";
    DisplayAccountTree($rootAccount, $accounts, $childLinks, 0);
  } else {
    printf("No accounts were found.\n");
  }
}

/**
 * Displays an account tree, starting at the account provided, and recursing to
 * all child accounts.
 * @param ManagedCustomer $account the account to display
 * @param array $accounts a map from customerId to account
 * @param array $links a map from customerId to child links
 * @param int $depth the depth of the current account in the tree
 */
function DisplayAccountTree($account, $accounts, $links, $depth) {
  print str_repeat('-', $depth * 2);
  printf("%s, %s\n", $account->customerId, $account->name);
  if (array_key_exists($account->customerId, $links)) {
    foreach ($links[$account->customerId] as $childLink) {
      $childAccount = $accounts[$childLink->clientCustomerId];
      DisplayAccountTree($childAccount, $accounts, $links, $depth + 1);
    }
  }
}

// Don't run the example if the file is being included.
if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
  return;
}

try {
  // Get AdWordsUser from credentials in "../auth.ini"
  // relative to the AdWordsUser.php file's directory.
  $user = new AdWordsUser();

  // Log every SOAP XML request and response.
  $user->LogAll();

  // Run the example.
  GetAccountHierarchyExample($user);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
