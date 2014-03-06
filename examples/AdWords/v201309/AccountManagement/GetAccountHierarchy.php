<?php
/**
 * This example gets the account hierarchy under the current account. Note: this
 * example must be run using the credentials of an MCC account.
 *
 * Tags: ManagedCustomerService.get
 * Restriction: adwords-only
 *
 * PHP version 5
 *
 * Copyright 2012, Google Inc. All Rights Reserved.
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
 * @subpackage v201309
 * @category   WebServices
 * @copyright  2012, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda <api.ekoleda@gmail.com>
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
  $selector->fields = array('Login', 'CustomerId',  'Name');

  // Make the get request.
  $graph = $managedCustomerService->get($selector);

  // Display serviced account graph.
  if (isset($graph->entries)) {
    // Create map from customerId to parent and child links.
    $childLinks = array();
    $parentLinks = array();
    if (isset($graph->links)) {
      foreach ($graph->links as $link) {
        $childLinks[$link->managerCustomerId][] = $link;
        $parentLinks[$link->clientCustomerId][] = $link;
      }
    }
    // Create map from customerID to account, and find root account.
    $accounts = array();
    $rootAccount = NULL;
    foreach ($graph->entries as $account) {
      $accounts[$account->customerId] = $account;
      if (!array_key_exists($account->customerId, $parentLinks)) {
        $rootAccount = $account;
      }
    }
    // The root account may not be returned in the sandbox.
    if (!isset($rootAccount)) {
      $rootAccount = new Account();
      $rootAccount->customerId = 0;
      $rootAccount->login = $user->GetEmail();
    }
    // Display account tree.
    print "(Customer Id, Account Name/Login)\n";
    DisplayAccountTree($rootAccount, NULL, $accounts, $childLinks, 0);
  } else {
    print "No serviced accounts were found.\n";
  }
}

/**
 * Displays an account tree, starting at the account and link provided, and
 * recursing to all child accounts.
 * @param Account $account the account to display
 * @param Link $link the link used to reach this account
 * @param array $accounts a map from customerId to account
 * @param array $links a map from customerId to child links
 * @param int $depth the depth of the current account in the tree
 */
function DisplayAccountTree($account, $link, $accounts, $links, $depth) {
  print str_repeat('-', $depth * 2);
  printf("%s, %s\n", $account->customerId,
      !empty($link->descriptiveName) ? $link->descriptiveName :$account->login);
  if (array_key_exists($account->customerId, $links)) {
    foreach ($links[$account->customerId] as $childLink) {
      $childAccount = $accounts[$childLink->clientCustomerId];
      DisplayAccountTree($childAccount, $childLink, $accounts, $links,
          $depth +1);
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
