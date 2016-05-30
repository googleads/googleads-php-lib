<?php
/**
 * This example gets all AdWords Express businesses in the account. To add
 * an express business, run AddExpressBusinesses.php.
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
 * @subpackage v201605
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
function GetExpressBusinessesExample(AdWordsUser $user) {
  // Get the service, which loads the required classes.
  $businessService = $user->GetService('ExpressBusinessService',
    ADWORDS_VERSION);

  // Create selector.
  $selector = new Selector();
  $selector->fields = array('Id', 'Name', 'Website', 'Status');
  $selector->ordering[] = new OrderBy('Name', 'ASCENDING');

  // Create paging controls.
  $selector->paging = new Paging(0, AdWordsConstants::RECOMMENDED_PAGE_SIZE);

  do {
    // Make the get request.
    $page = $businessService->get($selector);

    // Display results.
    if (isset($page->entries)) {
      foreach ($page->entries as $business) {
        printf(
            "Express business found with name '%s' id %s website: %s "
                . "status: %s\n",
            $business->name,
            $business->id,
            $business->website,
            $business->status
        );
      }
    } else {
      print "No express businesses were found.\n";
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
  GetExpressBusinessesExample($user);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
