<?php
/**
 * This example accepts a pending invitation to link your AdWords account to a
 * Google Merchant Center account.
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
 * @subpackage v201609
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
$serviceLinkId = 'INSERT_SERVICE_LINK_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param int $serviceLinkId the service link ID to accept
 */
function AcceptServiceLinkExample(AdWordsUser $user, $serviceLinkId) {
  // Get the service, which loads the required classes.
  $customerService = $user->GetService('CustomerService', ADWORDS_VERSION);

  // Create service link and set the status to ACTIVE.
  $serviceLink = new ServiceLink();
  $serviceLink->serviceLinkId = $serviceLinkId;
  $serviceLink->serviceType = 'MERCHANT_CENTER';
  $serviceLink->linkStatus = 'ACTIVE';

  // Create operation.
  $operation = new ServiceLinkOperation();
  $operation->operator = 'SET';
  $operation->operand = $serviceLink;

  $operations = array($operation);

  // Make the mutate request.
  $serviceLinks = $customerService->mutateServiceLinks($operations);

  // Display the results.
  foreach ($serviceLinks as $serviceLink) {
    printf(
        "Service link with service link ID %d, type '%s' updated to status: %s."
            . "\n",
        $serviceLink->serviceLinkId,
        $serviceLink->serviceType,
        $serviceLink->linkStatus
    );
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
  AcceptServiceLinkExample($user, $serviceLinkId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
