<?php
/**
 * This example gets all alerts for all clients of an MCC account. Note: this
 * example must be run using the credentials of an MCC account.
 *
 * Tags: AlertService.get
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
 * @author     Eric Koleda
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 */
function GetAccountAlertsExample(AdWordsUser $user) {
  // Get the service, which loads the required classes.
  $alertService = $user->GetService('AlertService', ADWORDS_VERSION);

  // Create alert query.
  $alertQuery = new AlertQuery();
  $alertQuery->clientSpec = 'ALL';
  $alertQuery->filterSpec = 'ALL';
  $alertQuery->types = array('ACCOUNT_BUDGET_BURN_RATE','ACCOUNT_BUDGET_ENDING',
      'ACCOUNT_ON_TARGET','CAMPAIGN_ENDED','CAMPAIGN_ENDING',
      'CREDIT_CARD_EXPIRING','DECLINED_PAYMENT',
      'MANAGER_LINK_PENDING','MISSING_BANK_REFERENCE_NUMBER',
      'PAYMENT_NOT_ENTERED','TV_ACCOUNT_BUDGET_ENDING','TV_ACCOUNT_ON_TARGET',
      'TV_ZERO_DAILY_SPENDING_LIMIT','USER_INVITE_ACCEPTED',
      'USER_INVITE_PENDING','ZERO_DAILY_SPENDING_LIMIT');
  $alertQuery->severities = array('GREEN', 'YELLOW', 'RED');
  $alertQuery->triggerTimeSpec = 'ALL_TIME';

  // Create selector.
  $selector = new AlertSelector();
  $selector->query = $alertQuery;

  // Create paging controls.
  $selector->paging = new Paging(0, AdWordsConstants::RECOMMENDED_PAGE_SIZE);

  do {
    // Make the get request.
    $page = $alertService->get($selector);

    // Display results.
    if (isset($page->entries)) {
      foreach ($page->entries as $alert) {
        printf("Alert of type '%s' and severity '%s' for account '%d' was "
            . "found.\n", $alert->alertType, $alert->alertSeverity,
            $alert->clientCustomerId);
      }
    } else {
      print "No alerts were found.\n";
    }

    // Advance the paging index.
    $selector->paging->startIndex += AdWordsConstants::RECOMMENDED_PAGE_SIZE;
  } while ($page->totalNumEntries > $selector->paging->startIndex);
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
  GetAccountAlertsExample($user);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
