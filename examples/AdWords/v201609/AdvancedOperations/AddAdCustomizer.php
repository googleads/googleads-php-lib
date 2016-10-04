<?php
/**
 * This example adds an ad customizer feed and associates it with the customer.
 * Then it adds an ad that uses the feed to populate dynamic data.
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
$adGroupIds = array('INSERT_AD_GROUP_ID_HERE', 'INSERT_AD_GROUP_ID_HERE');
$feedName = 'INSERT_FEED_NAME_HERE';

/**
 * Runs the example.
 *
 * @param AdWordsUser $user the user to run the example with
 * @param array $adGroupIds the IDs of the ad groups to target with the FeedItem
 * @param string $feedName the name of the new AdCustomizerFeed
 */
function AddAdCustomizerExample(AdWordsUser $user, $adGroupIds, $feedName) {
  // Create a customizer feed. One feed per account can be used for all ads.
  $adCustomizerFeed = CreateCustomizerFeed($user, $feedName);

  // Add feed items containing the values we'd like to place in ads.
  CreateCustomizerFeedItems($user, $adGroupIds, $adCustomizerFeed);

  // All set! We can now create ads with customizations.
  CreateAdsWithCustomizations($user, $adGroupIds, $feedName);
}

/**
 * Creates a new Feed for AdCustomizerFeed.
 *
 * @param AdWordsUser $user the user to run the example with
 * @param string $feedName the name of the new AdCustomizerFeed
 */
function CreateCustomizerFeed(AdWordsUser $user, $feedName) {
  // Map that holds IDs associated to the feeds metadata.
  $dataHolder = array();

  // Get the AdCustomizerFeedService, which loads the required classes.
  $adCustomizerFeedService = $user->GetService('AdCustomizerFeedService',
      ADWORDS_VERSION);

  $nameAttribute = new AdCustomizerFeedAttribute();
  $nameAttribute->name = 'Name';
  $nameAttribute->type = 'STRING';

  $priceAttribute = new AdCustomizerFeedAttribute();
  $priceAttribute->name = 'Price';
  $priceAttribute->type = 'STRING';

  $dateAttribute = new AdCustomizerFeedAttribute();
  $dateAttribute->name = 'Date';
  $dateAttribute->type = 'DATE_TIME';

  $customizerFeed = new AdCustomizerFeed();
  $customizerFeed->feedName = $feedName;
  $customizerFeed->feedAttributes = array($nameAttribute, $priceAttribute,
      $dateAttribute);

  $feedOperation = new AdCustomizerFeedOperation();
  $feedOperation->operand = $customizerFeed;
  $feedOperation->operator = 'ADD';

  $operations = array($feedOperation);

  // Add the feed.
  $result = $adCustomizerFeedService->mutate($operations);
  $addedFeed = $result->value[0];

  printf("Created ad customizer feed with ID %d and name '%s'.\n",
      $addedFeed->feedId, $addedFeed->feedName);

  return $addedFeed;
}

/**
 * Creates FeedItems with the values to use in ad customizations for each ad
 * group in adGroupIds
 *
 * @param AdWordsUser $user the user to run the example with
 * @param array $adGroupIds the IDs of the ad groups to target with the FeedItem
 * @param AdCustomizerFeed $adCustomizerFeed the customizer feed
 */
function CreateCustomizerFeedItems(AdWordsUser $user, $adGroupIds,
    $adCustomizerFeed) {
  // Get the FeedItemService, which loads the required classes.
  $feedItemService = $user->GetService('FeedItemService', ADWORDS_VERSION);

  $operations = array();

  $marsDate = mktime(0, 0, 0, date('m'), 1, date('Y'));
  $venusDate = mktime(0, 0, 0, date('m'), 15, date('Y'));
  // Create operations to add FeedItems.
  $operations[] = CreateFeedItemAddOperation('Mars', '$1234.56',
      date('Ymd His', $marsDate), $adGroupIds[0], $adCustomizerFeed);
  $operations[] = CreateFeedItemAddOperation('Venus', '$1450.00',
      date('Ymd His', $venusDate), $adGroupIds[1], $adCustomizerFeed);

  $result = $feedItemService->mutate($operations);

  foreach ($result->value as $feedItem) {
    printf("FeedItem with feedItemId %d was added.\n", $feedItem->feedItemId);
  }

  return $adCustomizerFeed;
}

/**
 * Creates a FeedItemOperation that will create a FeedItem with the specified
 * values and ad group target when sent to FeedItemService.mutate.
 *
 * @param string $name the value for the name attribute of the FeedItem
 * @param string $price the value for the price attribute of the FeedItem
 * @param string $date the value for the date attribute of the FeedItem
 * @param string $adGroupId the ID of the ad group to target with the FeedItem
 * @param AdCustomizerFeed $adCustomizerFeed the customizer feed
 */
function CreateFeedItemAddOperation($name, $price, $date, $adGroupId,
    $adCustomizerFeed) {
  // Create the FeedItemAttributeValues for our text values.
  $nameAttributeValue = new FeedItemAttributeValue();
  $nameAttributeValue->feedAttributeId =
      $adCustomizerFeed->feedAttributes[0]->id;
  $nameAttributeValue->stringValue = $name;
  $priceAttributeValue = new FeedItemAttributeValue();
  $priceAttributeValue->feedAttributeId =
      $adCustomizerFeed->feedAttributes[1]->id;
  $priceAttributeValue->stringValue = $price;
  $dateAttributeValue = new FeedItemAttributeValue();
  $dateAttributeValue->feedAttributeId =
      $adCustomizerFeed->feedAttributes[2]->id;
  $dateAttributeValue->stringValue = $date;

  // Create the feed item and operation.
  $item = new FeedItem();
  $item->feedId = $adCustomizerFeed->feedId;
  $item->attributeValues =
      array($nameAttributeValue, $priceAttributeValue, $dateAttributeValue);

  $adGroupTargeting = new FeedItemAdGroupTargeting();
  $adGroupTargeting->TargetingAdGroupId = $adGroupId;
  $item->adGroupTargeting = $adGroupTargeting;

  $operation = new FeedItemOperation();
  $operation->operand = $item;
  $operation->operator = 'ADD';
  return $operation;
}

/**
 * Creates text ads that use ad customizations for the specified ad group IDs.
 *
 * @param AdWordsUser $user the user to run the example with
 * @param array $adGroupIds the IDs of the ad groups to target with the FeedItem
 * @param string $feedName the name of the new AdCustomizerFeed
 */
function CreateAdsWithCustomizations(AdWordsUser $user, $adGroupIds,
    $feedName) {
  // Get the service, which loads the required classes.
  $adGroupAdService = $user->GetService('AdGroupAdService', ADWORDS_VERSION);

  $expandedTextAd = new ExpandedTextAd();
  $expandedTextAd->headlinePart1 =
      sprintf('Luxury Cruise to {=%s.Name}', $feedName);
  $expandedTextAd->headlinePart2 = sprintf('Only {=%s.Price}', $feedName);
  $expandedTextAd->description = sprintf('Offer ends in {=countdown(%s.Date)}!',
      $feedName);
  $expandedTextAd->finalUrls = array('http://www.example.com');

  // We add the same ad to both ad groups. When they serve, they will show
  // different values, since they match different feed items.
  $operations = array();

  foreach ($adGroupIds as $adGroupId) {
    // Create ad group ad.
    $adGroupAd = new AdGroupAd();
    $adGroupAd->adGroupId = $adGroupId;
    $adGroupAd->ad = $expandedTextAd;

    // Create operation.
    $operation = new AdGroupAdOperation();
    $operation->operand = $adGroupAd;
    $operation->operator = 'ADD';
    $operations[] = $operation;
  }

  // Make the mutate request.
  $result = $adGroupAdService->mutate($operations);

  // Display results.
  foreach ($result->value as $adGroupAd) {
    printf("Text ad with ID %d and status '%s' was added.\n",
        $adGroupAd->ad->id, $adGroupAd->status);
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
  AddAdCustomizerExample($user, $adGroupIds, $feedName);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
