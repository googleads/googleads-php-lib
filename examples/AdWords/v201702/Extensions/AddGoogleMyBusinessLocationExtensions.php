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
namespace Google\AdsApi\Examples\AdWords\v201702\Extensions;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201702\cm\ApiException;
use Google\AdsApi\AdWords\v201702\cm\ConstantOperand;
use Google\AdsApi\AdWords\v201702\cm\ConstantOperandConstantType;
use Google\AdsApi\AdWords\v201702\cm\CustomerFeed;
use Google\AdsApi\AdWords\v201702\cm\CustomerFeedOperation;
use Google\AdsApi\AdWords\v201702\cm\CustomerFeedService;
use Google\AdsApi\AdWords\v201702\cm\Feed;
use Google\AdsApi\AdWords\v201702\cm\MatchingFunction;
use Google\AdsApi\AdWords\v201702\cm\FeedOrigin;
use Google\AdsApi\AdWords\v201702\cm\FeedOperation;
use Google\AdsApi\AdWords\v201702\cm\FeedService;
use Google\AdsApi\AdWords\v201702\cm\FunctionOperator;
use Google\AdsApi\AdWords\v201702\cm\OAuthInfo;
use Google\AdsApi\AdWords\v201702\cm\Operator;
use Google\AdsApi\AdWords\v201702\cm\PlacesLocationFeedData;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use RuntimeException;

/**
 * This example adds a feed that syncs feed items from a Google
 * My Business (GMB) account and associates the feed with a customer.
 */
class AddGoogleMyBusinessLocationExtensions {

  // The placeholder type for location extensions.
  // See the Placeholder reference page for a list of all the placeholder types
  // and fields.
  // https://developers.google.com/adwords/api/docs/appendix/placeholders
  const PLACEHOLDER_LOCATION = 7;

  // The maximum number of CustomerFeed ADD operation attempts to make before
  // throwing an exception.
  const MAX_CUSTOMER_FEED_ADD_ATTEMPTS = 10;

  // The email address of either an owner or a manager of the GMB account.
  const GMB_EMAIL_ADDRESS = 'INSERT_GMB_EMAIL_ADDRESS';

  // If the gmbEmailAddress above is for a GMB manager instead of the GMB
  // account owner, then set businessAccountIdentifier to the +Page ID of a
  // location for which the manager has access. See the location extensions
  // guide at https://developers.google.com/adwords/api/docs/guides/feed-services-locations
  // for details.
  const BUSINESS_ACCOUNT_IDENTIFIER = null;

  public static function runExample(
      AdWordsServices $adWordsServices,
      AdWordsSession $session,
      $gmbEmailAddress,
      $gmbAccessToken,
      $gmbBusinessAccountId
  ) {
    $feedService = $adWordsServices->get($session, FeedService::class);

    // Create a feed that will sync to the Google My Business account specified
    // by $gmbEmailAddress. Do not add FeedAttributes to this object, as AdWords
    // will add them automatically because this will be a system generated feed.
    $gmbFeed = new Feed();
    $gmbFeed->setName('Google My Business feed #' . uniqid());

    $feedData = new PlacesLocationFeedData();
    $feedData->setEmailAddress($gmbEmailAddress);
    $feedData->setBusinessAccountIdentifier($gmbBusinessAccountId);

    // Optional: specify labels to filter Google My Business listings. If
    // specified, only listings that have any of the labels set are
    // synchronized into FeedItems.
    $feedData->setLabelFilters(['Stores in New York City']);

    $oAuthInfo = new OAuthInfo();
    $oAuthInfo->setHttpMethod('GET');
    $oAuthInfo->setHttpRequestUrl('https://www.googleapis.com/auth/adwords');
    $oAuthInfo->setHttpAuthorizationHeader(
        sprintf('Bearer %s', $gmbAccessToken));
    $feedData->setOAuthInfo($oAuthInfo);

    $gmbFeed->setSystemFeedGenerationData($feedData);

    // Since this feed's feed items will be managed by AdWords,
    // you must set its origin to ADWORDS.
    $gmbFeed->setOrigin(FeedOrigin::ADWORDS);

    // Create a feed operation and add it to the list.
    $operation = new FeedOperation();
    $operation->setOperator(Operator::ADD);
    $operation->setOperand($gmbFeed);
    $operations = [$operation];

    // Add the feed on the server. Since it is a system generated feed, AdWords
    // will automatically:
    // 1. Set up the FeedAttributes on the feed.
    // 2. Set up a FeedMapping that associates the FeedAttributes of the feed
    // with the placeholder fields of the LOCATION placeholder type.
    $addedFeed = $feedService->mutate($operations)->getValue()[0];
    printf("Added GMB feed with ID %d\n", $addedFeed->getId());

    $customerFeedService =
        $adWordsServices->get($session, CustomerFeedService::class);

    // Add a CustomerFeed that associates the feed with this customer for
    // the LOCATION placeholder type.
    $customerFeed = new CustomerFeed();
    $customerFeed->setFeedId($addedFeed->getId());
    $customerFeed->setPlaceholderTypes([self::PLACEHOLDER_LOCATION]);

    // Create a matching function that will always evaluate to true.
    $customerMatchingFunction = new MatchingFunction();
    $constOperand = new ConstantOperand();
    $constOperand->setType(ConstantOperandConstantType::BOOLEAN);
    $constOperand->setBooleanValue(true);
    $customerMatchingFunction->setLhsOperand([$constOperand]);
    $customerMatchingFunction->setOperator(FunctionOperator::IDENTITY);
    $customerFeed->setMatchingFunction($customerMatchingFunction);

    // Create a customer feed operation and add it to the list.
    $operation = new CustomerFeedOperation();
    $operation->setOperand($customerFeed);
    $operation->setOperator(Operator::ADD);
    $operations = [$operation];

    // After the completion of the Feed ADD operation above the added feed will
    // not be available for usage in a CustomerFeed until the sync between the
    // AdWords and GMB accounts completes. The loop below will retry adding
    // the CustomerFeed up to ten times with an exponential back-off policy.
    $addedCustomerFeed = null;
    $numberOfAttempts = 0;
    do {
      $numberOfAttempts++;
      try {
        $addedCustomerFeed =
            $customerFeedService->mutate($operations)->getValue()[0];
        printf("Attempt #%d to add the CustomerFeed was successful\n",
            $numberOfAttempts);
      } catch (ApiException $e) {
        // Wait using exponential backoff policy
        $sleepSeconds = 5 * pow(2, $numberOfAttempts);
        printf(
            "Attempt #%d to add the CustomerFeed was not successful. "
                . "Waiting %d seconds before trying again.\n",
            $numberOfAttempts,
            $sleepSeconds
        );
        sleep($sleepSeconds);
      }
    } while ($numberOfAttempts < self::MAX_CUSTOMER_FEED_ADD_ATTEMPTS
        && $addedCustomerFeed === null);

    if ($addedCustomerFeed === null) {
      throw new RuntimeException('Could not create the CustomerFeed after '
          . self::MAX_CUSTOMER_FEED_ADD_ATTEMPTS . ' attempts. Please retry '
          . 'the CustomerFeed ADD operation later.');
    }

    printf(
        "Added CustomerFeed for feed ID %d and placeholder type %d\n",
        $addedCustomerFeed->getFeedId(),
        $addedCustomerFeed->getPlaceholderTypes()[0]
    );

    // OPTIONAL: Create a CampaignFeed to specify which FeedItems to use at the
    // Campaign level.  This will be similar to the CampaignFeed in the
    // AddSitelinks example, except you can also filter based on the business
    // name and category of each FeedItem by using a FeedAttributeOperand in
    // your matching function.

    // OPTIONAL: Create an AdGroupFeed for even more fine grained control over
    // which feed items are used at the AdGroup level.
  }

  public static function main() {
    // Generate a refreshable OAuth2 credential for authentication.
    $oAuth2Credential = (new OAuth2TokenBuilder())
        ->fromFile()
        ->build();

    // If the GMB_EMAIL_ADDRESS is the same user you used to generate your
    // AdWords API refresh token, leave the assignment below unchanged.
    // Otherwise, to obtain an access token for your GMB account, run the
    // Auth/GetRefreshToken example. Make sure you are logged in as the same
    // user as GMB_EMAIL_ADDRESS above when you follow the link provided by the
    // example then call fetchAuthToken on the generated oAuth2 object and copy
    // and paste its 'access_token' value into the assignment below.
    $gmbAccessToken = $oAuth2Credential->fetchAuthToken()['access_token'];

    // Construct an API session configured from a properties file and the OAuth2
    // credentials above.
    $session = (new AdWordsSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential)
        ->build();
    self::runExample(
        new AdWordsServices(),
        $session,
        self::GMB_EMAIL_ADDRESS,
        $gmbAccessToken,
        (self::BUSINESS_ACCOUNT_IDENTIFIER === null) ? null
            : intval(self::BUSINESS_ACCOUNT_IDENTIFIER)
    );
  }
}

AddGoogleMyBusinessLocationExtensions::main();
