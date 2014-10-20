<?php
/**
 * This example adds a feed that syncs feed items from a Google
 * Places account and associates the feed with a customer.
 *
 * Tags: CampaignFeedService.mutate, FeedItemService.mutate
 * Tags: FeedMappingService.mutate, FeedService.mutate
 * Restriction: adwords-only
 *
 * Copyright 2014, Google Inc. All Rights Reserved.
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
 * @subpackage v201406
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Ray Tsang
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
// You will need to obtain an access token for your Places account with scope
// "https://www.google.com/local/add" and capture the Credential's access token.
define('PLACES_EMAIL_ADDRESS', 'INSERT_PLACES_EMAIL_ADDRESS');
define('PLACES_ACCESS_TOKEN', 'INSERT_PLACES_ACCESS_TOKEN');

// The placeholder type for location extensions.
// See the Placeholder reference page for a list of all the placeholder types
// and fields.
// https://developers.google.com/adwords/api/docs/appendix/placeholders
define('PLACEHOLDER_LOCATION', 7);

// The maximum number of CustomerFeed ADD operation attempts to make before
// throwing an exception.
define('MAX_CUSTOMER_FEED_ADD_ATTEMPTS', 10);

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $placesEmailAddress E-Mail address associated with Places login
 * @param string $placesAccessToken Access token for the Places account
 */
function AddPlacesLocationExtensionsExample(AdWordsUser $user,
    $placesEmailAddress, $placesAccessToken) {
  $feedService = $user->GetService('FeedService');

  // Create a feed that will sync to the Google Places account specified
  // by placesEmailAddress. Do not add FeedAttributes to this object,
  // as AdWords will add them automatically because this will be a
  // system generated feed.
  $placesFeed = new Feed();
  $placesFeed->name = 'Places feed #' . uniqid();

  $feedData = new PlacesLocationFeedData();
  $feedData->emailAddress = $placesEmailAddress;
  $oAuthInfo = new OAuthInfo();
  $oAuthInfo->httpMethod = 'GET';
  $oAuthInfo->httpRequestUrl = 'https://www.google.com/local/add';
  $oAuthInfo->httpAuthorizationHeader = sprintf('Bearer %s',
      $placesAccessToken);
  $feedData->oAuthInfo = $oAuthInfo;

  $placesFeed->systemFeedGenerationData = $feedData;

  // Since this feed's feed items will be managed by AdWords,
  // you must set its origin to ADWORDS.
  $placesFeed->origin = 'ADWORDS';

  // Create an operation to add the feed.
  $feedOperation = new FeedOperation();
  $feedOperation->operand = $placesFeed;
  $feedOperation->operator = 'ADD';

  // Add the feed. Since it is a system generated feed, AdWords will
  // automatically:
  // 1. Set up the FeedAttributes on the feed.
  // 2. Set up a FeedMapping that associates the FeedAttributes of the feed
  // with the placeholder fields of the LOCATION placeholder type.
  $addFeedResult = $feedService->mutate(array($feedOperation));
  $addedFeed = $addFeedResult->value[0];
  printf("Added places feed with ID %d\n", $addedFeed->id);

  $customerFeedService = $user->GetService('CustomerFeedService');

  // Add a CustomerFeed that associates the feed with this customer for
  // the LOCATION placeholder type.
  $customerFeed = new CustomerFeed();
  $customerFeed->feedId = $addedFeed->id;
  $customerFeed->placeholderTypes = array(PLACEHOLDER_LOCATION);

  // Create a matching function that will always evaluate to true.
  $customerMatchingFunction = new FeedFunction();
  $constOperand = new ConstantOperand();
  $constOperand->type = 'BOOLEAN';
  $constOperand->booleanValue = true;
  $customerMatchingFunction->lhsOperand = array($constOperand);
  $customerMatchingFunction->operator = 'IDENTITY';
  $customerFeed->matchingFunction = $customerMatchingFunction;

  // Create an operation to add the customer feed.
  $customerFeedOperation = new CustomerFeedOperation();
  $customerFeedOperation->operand = $customerFeed;
  $customerFeedOperation->operator = 'ADD';


  // After the completion of the Feed ADD operation above the added feed will
  // not be available for usage in a CustomerFeed until the sync between the
  // AdWords and Places accounts completes.  The loop below will retry adding
  // the CustomerFeed up to ten times with an exponential back-off policy.
  $addedCustomerFeed = NULL;
  $numberOfAttempts = 0;
  do {
    $numberOfAttempts++;
    try {
      $customerFeedResult =
          $customerFeedService->mutate(array($customerFeedOperation));
      $addedCustomerFeed = $customerFeedResult->value[0];
      printf("Attempt #%d to add the CustomerFeed was successful\n",
          $numberOfAttempts);
    } catch (Exception $e) {
      // Wait using exponential backoff policy
      $sleepSeconds = 5 * pow(2, $numberOfAttempts);
      printf("Attempt #%d to add the CustomerFeed was not successful. "
          . "Waiting %d seconds before trying again.\n", $numberOfAttempts,
          $sleepSeconds);
      sleep($sleepSeconds);
    }
  } while ($numberOfAttempts < MAX_CUSTOMER_FEED_ADD_ATTEMPTS
      && $addedCustomerFeed == NULL);

  if($addedCustomerFeed == null) {
    throw new Exception('Could not create the CustomerFeed after '
       . MAX_CUSTOMER_FEED_ADD_ATTEMPTS . ' attempts. Please retry '
       . 'the CustomerFeed ADD operation later.');
  }

  printf("Added CustomerFeed for feed ID %d and placeholder type %d\n",
      $addedCustomerFeed->feedId, $addedCustomerFeed->placeholderTypes[0]);

  // OPTIONAL: Create a CampaignFeed to specify which FeedItems to use at the
  // Campaign level.  This will be similar to the CampaignFeed in the
  // AddSiteLinks example, except you can also filter based on the business
  // name and category of each FeedItem by using a FeedAttributeOperand in
  // your matching function.

  // OPTIONAL: Create an AdGroupFeed for even more fine grained control over
  // which feed items are used at the AdGroup level.

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
  AddPlacesLocationExtensionsExample($user, PLACES_EMAIL_ADDRESS,
      PLACES_ACCESS_TOKEN);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
