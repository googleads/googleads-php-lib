<?php
/**
 * This example adds an ad customizer feed and associates it with the customer.
 * Then it adds an ad that uses the feed to populate dynamic data.
 *
 * Tags: CustomerFeedService.mutate
 * Tags: FeedItemService.mutate
 * Tags: FeedMappingService.mutate
 * Tags: FeedService.mutate
 * Tags: AdGroupAdService.mutate
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
 * @subpackage v201409
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Ray Tsang
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
$adGroupIds = array('INSERT_AD_GROUP_ID_HERE', 'INSERT_AD_GROUP_ID_HERE');

// See the Placeholder reference page for a list of all the placeholder types
// and fields.
// https://developers.google.com/adwords/api/docs/appendix/placeholders.html
define('PLACEHOLDER_AD_CUSTOMIZER', 10);
define('PLACEHOLDER_FIELD_PRICE', 3);
define('PLACEHOLDER_FIELD_DATE', 4);
define('PLACEHOLDER_FIELD_STRING', 5);

/**
 * Runs the example.
 *
 * @param AdWordsUser $user the user to run the example with
 * @param array $adGroupIds the IDs of the ad groups to target with the FeedItem
 */
function AddAdCustomizerExample(AdWordsUser $user, $adGroupIds) {
  // Create a customizer feed. One feed per account can be used for all ads.
  $dataHolder = CreateCustomizerFeed($user);

  // Create a feed mapping to map the fields with customizer IDs.
  CreateFeedMapping($user, $dataHolder);

  // Add feed items containing the values we'd like to place in ads.
  CreateCustomizerFeedItems($user, $adGroupIds, $dataHolder);

  // Create a customer (account-level) feed with a matching function that
  // determines when to use this feed. For this case we use the "IDENTITY"
  // matching function that is always true just to associate this feed with the
  // customer. The targeting is done within the feed items using the
  // campaignTargeting, adGroupTargeting, or keywordTargeting attributes.
  CreateCustomerFeed($user, $dataHolder);

  // All set! We can now create ads with customizations.
  CreateAdsWithCustomizations($user, $adGroupIds);
}

/**
 * Creates a new Feed for ad customizers.
 *
 * @param AdWordsUser $user the user to run the example with
 */
function CreateCustomizerFeed(AdWordsUser $user) {
  // Map that holds IDs associated to the feeds metadata.
  $dataHolder = array();

  // Get the FeedService, which loads the required classes.
  $feedService = $user->GetService('FeedService', ADWORDS_VERSION);

  // Create attributes.
  $nameAttribute = new FeedAttribute();
  $nameAttribute->type = 'STRING';
  $nameAttribute->name = 'Name';
  $priceAttribute = new FeedAttribute();
  $priceAttribute->type = 'STRING';
  $priceAttribute->name = 'Price';
  $dateAttribute = new FeedAttribute();
  $dateAttribute->type = 'DATE_TIME';
  $dateAttribute->name = 'Date';

  // Create the feed.
  $customizerFeed = new Feed();
  $customizerFeed->name = 'CustomizerFeed';
  $customizerFeed->attributes = array($nameAttribute, $priceAttribute,
      $dateAttribute);
  $customizerFeed->origin = 'USER';

  // Create operation.
  $operation = new FeedOperation();
  $operation->operator = 'ADD';
  $operation->operand = $customizerFeed;

  $operations = array($operation);

  // Add the feed.
  $result = $feedService->mutate($operations);

  $savedFeed = $result->value[0];
  $dataHolder['feedId'] = $savedFeed->id;
  $savedAttributes = $savedFeed->attributes;
  $dataHolder['nameFeedAttributeId'] = $savedAttributes[0]->id;
  $dataHolder['priceFeedAttributeId'] = $savedAttributes[1]->id;
  $dataHolder['dateFeedAttributeId'] = $savedAttributes[2]->id;

  printf('Feed with name "%s" and ID %d with nameAttributeId %d'
      . ", priceAttributeId %d, and dateAttribute %d were created.\n",
      $savedFeed->name,
      $savedFeed->id,
      $savedAttributes[0]->id,
      $savedAttributes[1]->id,
      $savedAttributes[2]->id);

  return $dataHolder;
}

/**
 * Creates a new FeedMapping that indicates how the data holder's feed should
 * be interpreted in the context of ad customizers.
 *
 * @param AdWordsUser $user the user to run the example with
 * @param array $dataHolder IDs associated to created customizer feed metadata
 */
function CreateFeedMapping($user, $dataHolder) {
  // Get the FeedMappingService, which loads the required classes.
  $feedMappingService = $user->GetService('FeedMappingService',
      ADWORDS_VERSION);

  // Map the FeedAttributeIds to the fieldId constants.
  $nameFieldMapping = new AttributeFieldMapping();
  $nameFieldMapping->feedAttributeId =
      $dataHolder['nameFeedAttributeId'];
  $nameFieldMapping->fieldId = PLACEHOLDER_FIELD_STRING;
  $priceFieldMapping = new AttributeFieldMapping();
  $priceFieldMapping->feedAttributeId =
      $dataHolder['priceFeedAttributeId'];
  $priceFieldMapping->fieldId = PLACEHOLDER_FIELD_PRICE;
  $dateFieldMapping = new AttributeFieldMapping();
  $dateFieldMapping->feedAttributeId = $dataHolder['dateFeedAttributeId'];
  $dateFieldMapping->fieldId = PLACEHOLDER_FIELD_DATE;

  // Create the FieldMapping and operation.
  $feedMapping = new FeedMapping();
  $feedMapping->placeholderType = PLACEHOLDER_AD_CUSTOMIZER;
  $feedMapping->feedId = $dataHolder['feedId'];
  $feedMapping->attributeFieldMappings =
      array($nameFieldMapping, $priceFieldMapping, $dateFieldMapping);
  $operation = new FeedMappingOperation();
  $operation->operand = $feedMapping;
  $operation->operator = 'ADD';

  $operations = array($operation);

  // Save the field mapping.
  $result = $feedMappingService->mutate($operations);
  foreach ($result->value as $feedMapping) {
    printf('Feed mapping with ID %d and placeholderType %d was saved for ' .
        "feed with ID %d.\n",
        $feedMapping->feedMappingId,
        $feedMapping->placeholderType,
        $feedMapping->feedId);
  }
}

/**
 * Creates FeedItems with the values to use in ad customizations for each ad
 * group in adGroupIds
 *
 * @param AdWordsUser $user the user to run the example with
 * @param array $adGroupIds the IDs of the ad groups to target with the FeedItem
 * @param array $dataHolder IDs associated to created customizer feed metadata
 */
function CreateCustomizerFeedItems(AdWordsUser $user, $adGroupIds,
    $dataHolder) {
  // Get the FeedItemService, which loads the required classes.
  $feedItemService = $user->GetService('FeedItemService', ADWORDS_VERSION);

  $operations = array();

  // Create operations to add FeedItems.
  $operations[] = CreateFeedItemAddOperation('Mars', '$1234.56',
      '20140601 000000', $adGroupIds[0], $dataHolder);
  $operations[] = CreateFeedItemAddOperation('Venus', '$1450.00',
      '20140615 120000', $adGroupIds[1], $dataHolder);

  $result = $feedItemService->mutate($operations);

  foreach ($result->value as $feedItem) {
    printf("FeedItem with feedItemId %d was added.\n", $feedItem->feedItemId);
  }

  return $dataHolder;
}

/**
 * Creates a FeedItemOperation that will create a FeedItem with the specified
 * values and ad group target when sent to FeedItemService.mutate.
 *
 * @param string $name the value for the name attribute of the FeedItem
 * @param string $price the value for the price attribute of the FeedItem
 * @param string $date the value for the date attribute of the FeedItem
 * @param string $adGroupId the ID of the ad group to target with the FeedItem
 * @param array $dataHolder IDs associated to created customizer feed metadata
 */
function CreateFeedItemAddOperation($name, $price, $date, $adGroupId,
    $dataHolder) {
  // Create the FeedItemAttributeValues for our text values.
  $nameAttributeValue = new FeedItemAttributeValue();
  $nameAttributeValue->feedAttributeId =
      $dataHolder['nameFeedAttributeId'];
  $nameAttributeValue->stringValue = $name;
  $priceAttributeValue = new FeedItemAttributeValue();
  $priceAttributeValue->feedAttributeId =
      $dataHolder['priceFeedAttributeId'];
  $priceAttributeValue->stringValue = $price;
  $dateAttributeValue = new FeedItemAttributeValue();
  $dateAttributeValue->feedAttributeId = $dataHolder['dateFeedAttributeId'];
  $dateAttributeValue->stringValue = $date;

  // Create the feed item and operation.
  $item = new FeedItem();
  $item->feedId = $dataHolder['feedId'];
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
 * Creates a CustomerFeed that will associate the Feed with the ad customizers
 * placeholder type.
 *
 * @param AdWordsUser $user the user to run the example with
 * @param map $dataHolder IDs associated to created customizer feed metadata
 */
function CreateCustomerFeed($user, $dataHolder) {
  // Get the CustomerFeedService, which loads the required classes.
  $customerFeedService = $user->GetService('CustomerFeedService',
      ADWORDS_VERSION);

  $customerFeed = new CustomerFeed();
  $customerFeed->feedId = $dataHolder['feedId'];
  $customerFeed->placeholderTypes = array(PLACEHOLDER_AD_CUSTOMIZER);

  // Create a matching function that will always evaluate to true.
  $customerMatchingFunction = new FeedFunction();
  $constOperand = new ConstantOperand();
  $constOperand->type = 'BOOLEAN';
  $constOperand->booleanValue = 'TRUE';
  $customerMatchingFunction->lhsOperand = array($constOperand);
  $customerMatchingFunction->operator = 'IDENTITY';
  $customerFeed->matchingFunction = $customerMatchingFunction;

  // Create an operation to add the customer feed.
  $customerFeedOperation = new CustomerFeedOperation();
  $customerFeedOperation->operand = $customerFeed;
  $customerFeedOperation->operator = 'ADD';

  $operations = array($customerFeedOperation);

  $result = $customerFeedService->mutate($operations);
  foreach ($result->value as $savedCustomerFeed) {
    printf("Created a new CustomerFeed that's associated with feed ID %d.\n",
        $savedCustomerFeed->feedId);
  }
}

/**
 * Creates text ads that use ad customizations for the specified ad group IDs.
 *
 * @param AdWordsUser $user the user to run the example with
 * @param array $adGroupIds the IDs of the ad groups to target with the FeedItem
 */
function CreateAdsWithCustomizations(AdWordsUser $user, $adGroupIds) {
  // Get the service, which loads the required classes.
  $adGroupAdService = $user->GetService('AdGroupAdService', ADWORDS_VERSION);

  $textAd = new TextAd();
  $textAd->headline = 'Luxury Cruise to {=CustomizerFeed.Name}';
  $textAd->description1 = 'Only {=CustomizerFeed.Price}';
  $textAd->description2 = 'Offer ends in {=countdown(CustomizerFeed.Date)}!';
  $textAd->finalUrls = array('http://www.example.com');
  $textAd->displayUrl = 'www.example.com';

  // We add the same ad to both ad groups. When they serve, they will show
  // different values, since they match different feed items.
  $operations = array();

  foreach ($adGroupIds as $adGroupId) {
    // Create ad group ad.
    $adGroupAd = new AdGroupAd();
    $adGroupAd->adGroupId = $adGroupId;
    $adGroupAd->ad = $textAd;

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
    printf("Text ad with headline '%s' and ID '%s' was added.\n",
        $adGroupAd->ad->headline, $adGroupAd->ad->id);
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
  AddAdCustomizerExample($user, $adGroupIds);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
