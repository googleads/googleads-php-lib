<?php
/**
 * This example updates an existing sitelinks feed as follows:
 *
 * + Adds FeedItemAttributes for line 1 and line 2 descriptions to the Feed
 * + Populates the new FeedItemAttributes on FeedItems in the Feed</li>
 * + Replaces the Feed's existing FeedMapping with one that contains the new
 *   set of FeedItemAttributes
 *
 * The end result of this is that any campaign or ad group whose CampaignFeed
 * or AdGroupFeed points to the Feed's ID will now serve line 1 and line 2
 * descriptions in its sitelinks.
 *
 * Tags: FeedItemService.mutate, FeedMappingService.mutate, FeedService.mutate
 * Tags: FeedItemService.get, FeedMappingService.get, FeedService.get
 * Restriction: adwords-only
 *
 * Copyright 2013, Google Inc. All Rights Reserved.
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
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Paul Matthews
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

$feedId = (int) 'INSERT_FEED_ID';

$feedItemDescriptions = array(
  'INSERT_FEED_ITEM_A_ID_HERE' => array(
    'INSERT_FEED_ITEM_A_LINE1_DESC_HERE',
    'INSERT_FEED_ITEM_A_LINE2_DESC_HERE',
  ),
  'INSERT_FEED_ITEM_B_ID_HERE' => array(
    'INSERT_FEED_ITEM_B_LINE1_DESC_HERE',
    'INSERT_FEED_ITEM_B_LINE2_DESC_HERE',
  ),
);

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $feedId is the id of the feed to manipulate
 * @param array $feedItemDescriptions the 2d array of feedItemId to values
 */
function UpdateSitelinksExample(AdWordsUser $user, $feedId,
    $feedItemDescriptions) {
  $feedService = $user->GetService('FeedService', ADWORDS_VERSION);
  $feedItemService = $user->GetService('FeedItemService', ADWORDS_VERSION);
  $feedMappingService = $user->GetService('FeedMappingService',
      ADWORDS_VERSION);

  $selector = new Selector();
  $selector->fields = array('Id', 'Attributes');
  $selector->predicates = array();
  $selector->predicates[0] = new Predicate('Id', 'EQUALS', array($feedId));

  $response = $feedService->get($selector);
  $feed = $response->entries[0];

  // Add new attributes to the feed.
  $newAttributes = AddLine1AndLine2Attributes($feedService, $feed);
  $line1Attribute = $newAttributes[0];
  $line2Attribute = $newAttributes[1];

  // Update feed items.
  UpdateFeedItems($feedItemService, $feedId, $line1Attribute, $line2Attribute,
      $feedItemDescriptions);

  //  Update feed mappings.
  UpdateFeedMappings($feedMappingService, $feedId, $line1Attribute,
      $line2Attribute, $feedItemDescriptions);
}

/*
 * Adds a FeedAttribute for line 1 and line 2 descriptions to the Feed.
 *
 * @param AdWordsSoapClient $feedService the feed service
 * @param Feed $feed the feed to attach the attributes to
 * @return array containing the created feed attributes
 */
function AddLine1AndLine2Attributes(AdWordsSoapClient $feedService,
    Feed $feed) {
  // This will be the starting index for the new attributes created below.
  $nextAttributeIndex = count($feed->attributes);

  $line1Attribute = new FeedAttribute();
  $line1Attribute->type = 'STRING';
  $line1Attribute->name = 'Line 1 Description';
  $line2Attribute = new FeedAttribute();
  $line2Attribute->type = 'STRING';
  $line2Attribute->name = 'Line 2 Description';

  // When adding new attributes DO NOT send existing attributes
  // EVERY included attribute is to be added.
  $feed->attributes = array($line1Attribute, $line2Attribute);

  $result = $feedService->mutate(array(new FeedOperation($feed, 'SET')));

  // Get the new attributes from the mutated feed.
  $mutatedFeed = $result->value[0];
  return array(
    $mutatedFeed->attributes[$nextAttributeIndex],
    $mutatedFeed->attributes[$nextAttributeIndex + 1],
  );
}


/**
 * Updates FeedItems for the Feed, setting line 1 description and line 2
 * description from the contents of the feedItemDescriptions map.
 *
 * @param AdWordsSoapClient $feedService the feed service
 * @param string $feedId the feedId to attach the items to.
 * @param FeedAttribute $line1Attribute the FeedAttribute for line 1 description
 * @param FeedAttribute $line2Attribute the FeedAttribute for line 2 description
 * @param array $feedItemDescriptions the 2d array of feedItemId to values
 */
function UpdateFeedItems(AdWordsSoapClient $feedItemService, $feedId,
    $line1Attribute, $line2Attribute, $feedItemDescriptions) {
  $selector = new Selector();
  $selector->fields = array('FeedId', 'FeedItemId', 'AttributeValues');
  $selector->predicates = array();
  $selector->predicates[0] = new Predicate('FeedId', 'EQUALS', array($feedId));
  $selector->predicates[1] = new Predicate('FeedItemId', 'IN',
      array_keys($feedItemDescriptions));

  $feedItems = $feedItemService->get($selector)->entries;

  $itemOperations = array();
  foreach ($feedItems as $feedItem) {
    $feedItemDescription = $feedItemDescriptions[$feedItem->feedItemId];

    // Construct a FeedItemOperation that will set the line 1 and line 2
    // attribute values for this FeedItem.
    $itemAttributeValues = array();
    $itemAttributeValues[0] = new FeedItemAttributeValue();
    $itemAttributeValues[0]->feedAttributeId = $line1Attribute->id;
    $itemAttributeValues[0]->stringValue = $feedItemDescription[0];

    $itemAttributeValues[1] = new FeedItemAttributeValue();
    $itemAttributeValues[1]->feedAttributeId = $line2Attribute->id;
    $itemAttributeValues[1]->stringValue = $feedItemDescription[1];

    $feedItem->attributeValues = $itemAttributeValues;

    $itemOperations[] = new FeedItemOperation($feedItem, 'SET');
  }

  $response = $feedItemService->mutate($itemOperations);

  printf("Updated %d items.\n", count($response->value));
}

/*
 * See the Placeholder reference page for a list of all the placeholder types
 * and fields:
 *    https://developers.google.com/adwords/api/docs/appendix/placeholders
 */
define('PLACEHOLDER_FIELD_LINE_1_TEXT', 3);
define('PLACEHOLDER_FIELD_LINE_2_TEXT', 4);

/**
 * Updates the FeedMapping for the Feed to include AttributeFieldMappings for
 * the new line 1 and line 2 FeedAttributes.
 *
 * @param AdWordsSoapClient $feedMappingService the feed mapping service
 * @param string $feedId the feedId to attach the items to.
 * @param FeedAttribute $line1Attribute the FeedAttribute for line 1 description
 * @param FeedAttribute $line2Attribute the FeedAttribute for line 2 description
 */
function UpdateFeedMappings(AdWordsSoapClient $feedMappingService, $feedId,
    $line1Attribute, $line2Attribute) {
  $selector = new Selector();
  $selector->fields = array('FeedId', 'FeedMappingId', 'PlaceholderType',
      'AttributeFieldMappings');
  $selector->predicates = array();
  $selector->predicates[0] = new Predicate('FeedId', 'EQUALS', array($feedId));
  $selector->predicates[1] = new Predicate('Status', 'EQUALS', array('ACTIVE'));

  $feedMapping = $feedMappingService->get($selector)->entries[0];

  // Remove the existing mapping (FeedMapping is immutable).
  $feedMapping = $feedMappingService->mutate(array(
      new FeedMappingOperation($feedMapping, 'REMOVE')))->value[0];

  // Create line 1 and line 2 attribute field mappings.
  $line1FieldMapping = new AttributeFieldMapping();
  $line1FieldMapping->feedAttributeId = $line1Attribute->id;
  $line1FieldMapping->fieldId = PLACEHOLDER_FIELD_LINE_1_TEXT;

  $line2FieldMapping = new AttributeFieldMapping();
  $line2FieldMapping->feedAttributeId = $line2Attribute->id;
  $line2FieldMapping->fieldId = PLACEHOLDER_FIELD_LINE_2_TEXT;

  // Combine the existing field mappings with the new mappings.
  $feedMapping->attributeFieldMappings = array_merge(
      $feedMapping->attributeFieldMappings,
          array($line1FieldMapping, $line2FieldMapping));

  $response = $feedMappingService->mutate(array(
      new FeedMappingOperation($feedMapping, 'ADD')));
  $mutatedMapping = $response->value[0];

  printf("Updated field mappings for feedId %d and feedMappingId %d to:\n",
      $mutatedMapping->feedId, $mutatedMapping->feedMappingId);
  foreach ($mutatedMapping->attributeFieldMappings as $fieldMapping) {
    printf("  feedAttributeId %s --> fieldId %s\n",
        $fieldMapping->feedAttributeId, $fieldMapping->fieldId);
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
  UpdateSitelinksExample($user, $feedId, $feedItemDescriptions);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
