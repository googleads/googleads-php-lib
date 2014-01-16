<?php
/**
 * This example migrates legacy sitelinks to upgraded sitelinks for a list of
 * campaigns.
 *
 * Tags: CampaignAdExtensionService.get, CampaignAdExtensionService.mutate
 * Tags: FeedService.mutate, FeedItemService.mutate, FeedMappingService.mutate
 * Tags: CampaignFeedService.mutate
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
 * @subpackage v201306
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Paul Matthews
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

// See the Placeholder reference page for a list of all the placeholder
// types and fields:
// https://developers.google.com/adwords/api/docs/appendix/placeholders.html
define('PLACEHOLDER_SITELINKS', '1');
define('PLACEHOLDER_FIELD_SITELINK_LINK_TEXT', '1');
define('PLACEHOLDER_FIELD_SITELINK_LINK_URL', '2');

// Enter parameters required by the code example.
$campaignIds = array(
  'INSERT_FIRST_CAMPAIGN_ID_HERE',
  'INSERT_SECOND_CAMPAIGN_ID_HERE',
);

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param array $campaignIds the IDs of the campaign to add the sitelinks to
 */
function UpgradeLegacySitelinksExample(AdWordsUser $user, $campaignIds) {
  $campaignAdExtensionService =
      $user->getService('CampaignAdExtensionService', ADWORDS_VERSION);
  $feedService = $user->getService('FeedService', ADWORDS_VERSION);
  $feedItemService = $user->getService('FeedItemService', ADWORDS_VERSION);
  $feedMappingService =
      $user->getService('FeedMappingService', ADWORDS_VERSION);
  $campaignFeedService =
      $user->getService('CampaignFeedService', ADWORDS_VERSION);

  // Try to retrieve an existing feed that has been mapped for use with
  // sitelinks. if multiple such feeds exist, the first matching feed is
  // retrieved. You could modify this code example to retrieve all the feeds
  // and pick the appropriate feed based on user input.
  $siteLinksFeed = GetExistingFeed($feedMappingService);

  if (empty($siteLinksFeed)) {
    // Create a feed for storing sitelinks.
    $siteLinksFeed = CreateSiteLinksFeed($feedService);

    // Map the feed for using with sitelinks.
    CreateSiteLinksFeedMapping($feedMappingService, $siteLinksFeed);
  }

  foreach ($campaignIds as $campaignId) {
    // Get legacy sitelinks for the campaign.
    $extension = GetLegacySitelinksForCampaign($campaignAdExtensionService,
        $campaignId);

    if (!empty($extension)) {
      // Get the sitelinks.
      $legacySiteLinks = $extension->adExtension->sitelinks;

      // Add the sitelinks to the feed.
      $siteLinkFeedItemIds = CreateSiteLinkFeedItems(
          $feedItemService, $siteLinksFeed, $legacySiteLinks);

      // Associate feeditems to the campaign.
      AssociateSitelinkFeedItemsWithCampaign(
          $campaignFeedService, $siteLinksFeed, $siteLinkFeedItemIds,
          $campaignId);

      // Once the upgraded sitelinks are added to a campaign, the legacy
      // sitelinks will stop serving. You can delete the legacy sitelinks
      // once you have verified that the migration went fine. In case the
      // migration didn't succeed, you can roll back the migration by deleting
      // the CampaignFeed you created in the previous step.
      DeleteLegacySitelinks($campaignAdExtensionService, $extension);
    }
  }
}

/**
 * Retrieve an existing feed that is mapped to hold sitelinks.
 *
 * The first active sitelinks feed is retrieved by this method.
 *
 * @param FeedMappingService $fmService The FeedMappingService instance.
 * @return mixed represent a sitelinks feed if a feed was found,
 *     null otherwise.
 */
function GetExistingFeed(FeedMappingService $fmService) {
  // Create selector.
  $selector = new Selector();
  $selector->fields = array('FeedId', 'FeedMappingId',
      'AttributeFieldMappings');

  // Create predicates.
  $selector->predicates[] = new Predicate('Status', 'EQUALS', array('ACTIVE'));
  $selector->predicates[] =
      new Predicate('PlaceholderType', 'EQUALS',
      array(PLACEHOLDER_SITELINKS));

  // Create paging controls.
  $selector->paging = new Paging(0, AdWordsConstants::RECOMMENDED_PAGE_SIZE);

  // Make the get request.
  $page = $fmService->get($selector);
  // Display results.
  if (isset($page->entries)) {
    foreach ($page->entries as $mapping) {
      $feedId = $mapping->feedId;
      $textAttributeId = null;
      $urlAttributeId = null;
      foreach ($mapping->attributeFieldMappings as $attributeMapping) {
        switch($attributeMapping->fieldId) {
          case PLACEHOLDER_FIELD_SITELINK_LINK_TEXT:
            $textAttributeId = $attributeMapping->feedAttributeId;
            break;
          case PLACEHOLDER_FIELD_SITELINK_LINK_URL:
            $urlAttributeId = $attributeMapping->feedAttributeId;
            break;
        }
      }

      if (!empty($textAttributeId) && !empty($urlAttributeId)) {
        return array(
          'feedId' => $feedId,
          'textAttributeId' => $textAttributeId,
          'urlAttributeId' => $urlAttributeId,
        );
      }
    }
  }

  return null;
}

/**
 * Create a feed for holding upgraded sitelinks.
 * @param FeedService $feedService The FeedService instance.
 * @return array the SiteLinksFeed info
 */
function CreateSiteLinksFeed(FeedService $feedService) {
  // Create attributes.
  $textAttribute = new FeedAttribute();
  $textAttribute->type = 'STRING';
  $textAttribute->name = 'Link Text';
  $urlAttribute = new FeedAttribute();
  $urlAttribute->type = 'URL';
  $urlAttribute->name = 'Link URL';

  // Create the feed.
  $sitelinksFeed = new Feed();
  $sitelinksFeed->name = 'Feed For Site Links';
  $sitelinksFeed->attributes = array($textAttribute, $urlAttribute);
  $sitelinksFeed->origin = 'USER';

  // Create operation.
  $operation = new FeedOperation();
  $operation->operator = 'ADD';
  $operation->operand = $sitelinksFeed;

  $operations = array($operation);

  // Add the feed.
  $result = $feedService->mutate($operations);

  $savedFeed = $result->value[0];
  $savedAttributes = $savedFeed->attributes;

  return array(
    'feedId' => $savedFeed->id,
    'textAttributeId' => $savedAttributes[0]->id,
    'urlAttributeId' => $savedAttributes[1]->id,
  );
}

/**
 * Map the feed for use with Sitelinks.
 * @param FeedMappingService $fmService The FeedMappingService instance.
 * @param array $sitelinksData IDs associated to created sitelinks
 *                             feed metadata
 */
function CreateSiteLinksFeedMapping(FeedMappingService $fmService,
    $sitelinksData) {

  // Map the FeedAttributeIds to the fieldId constants.
  $linkTextFieldMapping = new AttributeFieldMapping();
  $linkTextFieldMapping->feedAttributeId =
      $sitelinksData['textAttributeId'];
  $linkTextFieldMapping->fieldId = PLACEHOLDER_FIELD_SITELINK_LINK_TEXT;

  $linkUrlFieldMapping = new AttributeFieldMapping();
  $linkUrlFieldMapping->feedAttributeId =
      $sitelinksData['urlAttributeId'];
  $linkUrlFieldMapping->fieldId = PLACEHOLDER_FIELD_SITELINK_LINK_URL;

  // Create the FieldMapping and operation.
  $feedMapping = new FeedMapping();
  $feedMapping->placeholderType = PLACEHOLDER_SITELINKS;
  $feedMapping->feedId = $sitelinksData['feedId'];
  $feedMapping->attributeFieldMappings =
      array($linkTextFieldMapping, $linkUrlFieldMapping);
  $operation = new FeedMappingOperation();
  $operation->operand = $feedMapping;
  $operation->operator = 'ADD';

  $operations = array($operation);

  // Save the field mapping.
  $fmService->mutate($operations);
}

/**
 * Get legacy sitelinks for a campaign.
 *
 * @param CampaignAdExtensionService $campaignAdExtensionService the service
 *        instance.
 * @param string $campaignId the campaign ID to get legacy sitelinks for.
 * @return CampaignAdExtension that contains the legacy sitelinks, or null
 *         if there are no legacy sitelinks in this campaign.
 */
function GetLegacySitelinksForCampaign(
    CampaignAdExtensionService $campaignAdExtensionService, $campaignId) {
  // Filter the results for specified campaign id.
  $campaignPredicate = new Predicate();
  $campaignPredicate->operator = 'EQUALS';
  $campaignPredicate->field = 'CampaignId';
  $campaignPredicate->values = array($campaignId);

  // Filter the results for active campaign ad extensions. You may add
  // additional filtering conditions here as required.
  $statusPredicate = new Predicate();
  $statusPredicate->operator = 'EQUALS';
  $statusPredicate->field = 'Status';
  $statusPredicate->values = array('ACTIVE');

  // Filter for sitelinks ad extension type.
  $typePredicate = new Predicate();
  $typePredicate->operator = 'EQUALS';
  $typePredicate->field = 'AdExtensionType';
  $typePredicate->values = array('SITELINKS_EXTENSION');

  // Create the selector.
  $selector = new Selector();
  $selector->fields = array('AdExtensionId', 'DisplayText', 'DestinationUrl');
  $selector->predicates = array($campaignPredicate, $statusPredicate,
      $typePredicate);

  $page = $campaignAdExtensionService->get($selector);

  if (!empty($page->entries)) {
    return $page->entries[0];
  }
  return null;
}

/**
 * Add legacy sitelinks to the sitelinks feed.
 *
 * @param FeedItemService $feedItemService The service instance.
 * @param array $siteLinksFeed The feed for adding sitelinks.
 * @param array $siteLinks legacySiteLinks the SiteLinksFeed info
 * @return array The list of feed items that were added to the feed.
 */
function CreateSiteLinkFeedItems(FeedItemService $feedItemService,
    $siteLinksFeed, $sitelinks) {
  $siteLinkFeedItemIds = array();

  // Create operation for adding each legacy sitelink to the sitelinks feed.
  $operations = array();

  foreach ($sitelinks as $siteLink) {
    $operations[] = NewSiteLinkFeedItemAddOperation($siteLinksFeed,
        $siteLink->displayText, $siteLink->destinationUrl);
  }
  $result = $feedItemService->mutate($operations);

  // Retrieve the feed item ids.
  foreach ($result->value as $item) {
    $siteLinkFeedItemIds[] = $item->feedItemId;
  }

  return $siteLinkFeedItemIds;
}

/**
 * Creates a SitelinkFeedItem and wraps it in an ADD operation.
 * @param array $sitelinksData IDs associated to created sitelinks
 *                             feed metadata
 * @param string $text text of the sitelink
 * @param string $url URL of the sitelink
 */
function NewSiteLinkFeedItemAddOperation($sitelinksData, $text, $url) {
  // Create the FeedItemAttributeValues for our text values.
  $linkTextAttributeValue = new FeedItemAttributeValue();
  $linkTextAttributeValue->feedAttributeId =
      $sitelinksData['textAttributeId'];
  $linkTextAttributeValue->stringValue = $text;
  $linkUrlAttributeValue = new FeedItemAttributeValue();
  $linkUrlAttributeValue->feedAttributeId =
      $sitelinksData['urlAttributeId'];
  $linkUrlAttributeValue->stringValue = $url;

  // Create the feed item and operation.
  $item = new FeedItem();
  $item->feedId = $sitelinksData['feedId'];
  $item->attributeValues =
      array($linkTextAttributeValue, $linkUrlAttributeValue);
  $operation = new FeedItemOperation();
  $operation->operand = $item;
  $operation->operator = 'ADD';
  return $operation;
}

/**
 * Associates sitelink feed items with a campaign.
 *
 * @param CampaignFeedService $campaignFeedService the service instance.
 * @param mixed $siteLinksFeed The feed for holding the sitelinks.
 * @param array $siteLinkFeedItemIds The list of feed item IDs to be
 *                                   associated with a campaign as sitelinks.
 * @param string $campaignId The campaign ID to which upgraded sitelinks
 *                           are added.
 */
function AssociateSitelinkFeedItemsWithCampaign(
    CampaignFeedService $campaignFeedService, $siteLinksFeed,
    $siteLinkFeedItemIds, $campaignId) {

  // Create a custom matching function that matches the given feed items to
  // the campaign.
  $requestContextOperand = new RequestContextOperand();
  $requestContextOperand->contextType = 'FEED_ITEM_ID';

  $operands = array();

  foreach ($siteLinkFeedItemIds as $feedItemId) {
    $constantOperand = new ConstantOperand();
    $constantOperand->longValue = $feedItemId;
    $constantOperand->type = 'LONG';

    $operands[] = $constantOperand;
  }

  $func = new FeedFunction();
  $func->lhsOperand = array($requestContextOperand);
  $func->rhsOperand = $operands;
  $func->operator = 'IN';

  // Create upgraded sitelinks for the campaign. Use the sitelinks feed we
  // created, and restrict feed items by matching function.
  $campaignFeed = new CampaignFeed();
  $campaignFeed->feedId = $siteLinksFeed['feedId'];
  $campaignFeed->campaignId = $campaignId;
  $campaignFeed->matchingFunction = $func;
  $campaignFeed->placeholderTypes = array(PLACEHOLDER_SITELINKS);

  $operation = new CampaignFeedOperation();
  $operation->operand = $campaignFeed;
  $operation->operator = 'ADD';

  $campaignFeedService->mutate(array($operation));
}

/**
 * Delete legacy sitelinks from a campaign.
 *
 * @param CampaignsAdExtensionService $campaignExtensionService the service
 *                                                              instance.
 * @param CampaignAdExtension $extensionToDelete The CampaignAdExtension that
 *                                               holds legacy sitelinks.
 */
function DeleteLegacySitelinks(
  CampaignAdExtensionService $campaignExtensionService, $extensionToDelete) {

  $operation = new CampaignAdExtensionOperation();
  $operation->operator = 'REMOVE';
  $operation->operand = $extensionToDelete;

  $campaignExtensionService->mutate(array($operation));
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
  UpgradeLegacySitelinksExample($user, $campaignIds);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
