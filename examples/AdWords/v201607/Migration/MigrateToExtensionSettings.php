<?php
/**
 * This code example migrates your feed based sitelinks at campaign level to
 * use extension settings. To learn more about extensionsettings, see
 * https://developers.google.com/adwords/api/docs/guides/extension-settings
 * To learn more about migrating Feed based extensions to extension
 * settings, see
 * https://developers.google.com/adwords/api/docs/guides/migrate-to-extension-settings
 *
 * Copyright 2015, Google Inc. All Rights Reserved.
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
 * @subpackage v201607
 * @category   WebServices
 * @copyright  2015, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

// The placeholder type for sitelinks. See
// https://developers.google.com/adwords/api/docs/appendix/placeholders
// for the list of all supported placeholder types.
define('PLACEHOLDER_TYPE_SITELINKS', 1);

// Placeholder field IDs for sitelinks. See
// https://developers.google.com/adwords/api/docs/appendix/placeholders
// for the list of all supported placeholder types.
define('PLACEHOLDER_FIELD_TEXT', 1);
define('PLACEHOLDER_FIELD_URL', 2);
define('PLACEHOLDER_FIELD_LINE2', 3);
define('PLACEHOLDER_FIELD_LINE3', 4);
define('PLACEHOLDER_FIELD_FINAL_URLS', 5);
define('PLACEHOLDER_FIELD_FINAL_MOBILE_URLS', 6);
define('PLACEHOLDER_FIELD_TRACKING_URL_TEMPLATE', 7);

class SitelinkFromFeed {
  public $feedId;
  public $feedItemId;
  public $text;
  public $url;
  public $finalUrls;
  public $finalMobileUrls;
  public $trackingUrlTemplate;
  public $line2;
  public $line3;
  public $scheduling;

  public function __construct($feedId = null, $feedItemId = null) {
    $this->feedId = $feedId;
    $this->feedItemId = $feedItemId;
  }
}

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 */
function MigrateToExtensionSettingsExample(AdWordsUser $user) {
  $feeds = GetFeeds($user);
  foreach ($feeds as $feed) {
    // Retrieve all the sitelinks from the current feed.
    $feedItems = GetSitelinksFromFeed($user, $feed->id);
    printf("Loaded %d sitelinks for feed ID %d.\n",
           count($feedItems), $feed->id);

    // Get all the instances where a sitelink from this feed has been added
    // to a campaign.
    $campaignFeeds =
        GetCampaignFeeds($user, $feed->id, PLACEHOLDER_TYPE_SITELINKS);
    printf("Loaded %d sitelink to campaign mappings for feed ID %d.\n",
           count($campaignFeeds), $feed->id);

    if (!empty($campaignFeeds)) {
      $allFeedItemsToDelete = array();
      foreach ($campaignFeeds as $campaignFeed) {
        // Retrieve the sitelinks that have been associated with this campaign.
        $feedItemIds = GetFeedItemsForCampaign($campaignFeed);
        $platformRestrictions =
            GetPlatformRestrictionsForCampaign($campaignFeed);

        if(empty($feedItemIds)) {
          printf("Skipping feed ID %d for campaign %d -- matching function is "
              . "missing or too complex for this script.\n",
              $campaignFeed->feedId, $campaignFeed->campaignId);
          continue;
        }

        // Delete the campaign feed that associates the sitelinks from the feed
        // to the campaign.
        DeleteCampaignFeed($user, $campaignFeed);

        // Mark the sitelinks from the feed for deletion.
        $allFeedItemsToDelete =
            array_merge($allFeedItemsToDelete, $feedItemIds);

        // Create extension settings instead of sitelinks.
        CreateExtensionSetting(
            $user, $feedItems, $campaignFeed->campaignId, $feedItemIds,
            $platformRestrictions);
      }
      // Delete all the sitelinks from the feed.
      $allFeedItemsToDelete = array_unique($allFeedItemsToDelete);
      DeleteOldFeedItems($user, $allFeedItemsToDelete, $feed->id);

    }
  }
}

function GetFeeds($user) {
  $feedService = $user->GetService('FeedService', ADWORDS_VERSION);
  $page = $feedService->query('SELECT Id, Name, Attributes WHERE '
      . 'Origin="USER" AND FeedStatus="ENABLED"');
  return $page->entries;
}

function GetFeedItems($user, $feedId) {
  $feedItemService = $user->GetService('FeedItemService', ADWORDS_VERSION);
  $page = $feedItemService->query(
      sprintf('SELECT FeedItemId, AttributeValues, Scheduling WHERE '
          . 'Status = "ENABLED" AND FeedId = %d', $feedId));
  return $page->entries;
}

function GetCampaignFeeds($user, $feedId, $placeholderId) {
  $campaignFeedService =
      $user->GetService('CampaignFeedService', ADWORDS_VERSION);

  $page = $campaignFeedService->query(
      sprintf('SELECT CampaignId, MatchingFunction, PlaceholderTypes WHERE '
          . 'Status="ENABLED" AND FeedId = %d AND PlaceholderTypes '
          . 'CONTAINS_ANY[%d]', $feedId, $placeholderId));
  return $page->entries;
}

function GetFeedMapping($user, $feedId, $placeholderTypeId) {
  $feedMappingService =
      $user->GetService('FeedMappingService', ADWORDS_VERSION);
  $page = $feedMappingService->query(
      sprintf('SELECT FeedMappingId, AttributeFieldMappings WHERE FeedId="%d" '
          . 'AND PlaceholderType="%d" AND Status="ENABLED"',
          $feedId, $placeholderTypeId));
  $attributeMappings = array();
  if (!empty($page->entries)) {
    // Normally, a feed attribute is mapped only to one field. However,
    // you may map it to more than one field if needed.
    foreach ($page->entries as $feedMapping) {
      foreach ($feedMapping->attributeFieldMappings as $attributeMapping) {
        if (!isset($attributeMappings[$attributeMapping->feedAttributeId])) {
          $attributeMappings[$attributeMapping->feedAttributeId] = array();
        }
        $attributeMappings[$attributeMapping->feedAttributeId][] =
            $attributeMapping->fieldId;
      }
    }
  }
  return $attributeMappings;
}

function GetSitelinksFromFeed($user, $feedId) {
  printf("Processing feed ID %d...\n", $feedId);
  $sitelinks = array();

  // Retrieve all the feed items from the feed.
  $feedItems = GetFeedItems($user, $feedId);

  if (!empty($feedItems)) {
    // Retrieve the feed's attribute mapping.
    $feedMappings = GetFeedMapping($user, $feedId, PLACEHOLDER_TYPE_SITELINKS);

    foreach ($feedItems as $feedItem) {
      $sitelinkFromFeed =
          new SitelinkFromFeed($feedItem->feedId, $feedItem->feedItemId);

      foreach ($feedItem->attributeValues as $attributeValue) {
        // This attribute hasn't been mapped to a field.
        if (!isset($feedMappings[$attributeValue->feedAttributeId])) {
          continue;
        }
        // Get the list of all the fields to which this attribute has been
        //  mapped.
        foreach ($feedMappings[$attributeValue->feedAttributeId] as $fieldId) {
          // Read the appropriate value depending on the ID of the mapped field.
          switch ($fieldId) {
            case PLACEHOLDER_FIELD_TEXT:
              $sitelinkFromFeed->text = $attributeValue->stringValue;
              break;
            case PLACEHOLDER_FIELD_URL:
              $sitelinkFromFeed->url = $attributeValue->stringValue;
              break;
            case PLACEHOLDER_FIELD_FINAL_URLS:
              $sitelinkFromFeed->finalUrls = $attributeValue->stringValues;
              break;
            case PLACEHOLDER_FIELD_FINAL_MOBILE_URLS:
              $sitelinkFromFeed->finalMobileUrls =
                  $attributeValue->stringValues;
              break;
            case PLACEHOLDER_FIELD_TRACKING_URL_TEMPLATE:
              $sitelinkFromFeed->trackingUrlTemplate =
                  $attributeValue->stringValue;
              break;
            case PLACEHOLDER_FIELD_LINE2:
              $sitelinkFromFeed->line2 = $attributeValue->stringValue;
              break;
            case PLACEHOLDER_FIELD_LINE3:
              $sitelinkFromFeed->line3 = $attributeValue->stringValue;
              break;
          }
        }
      }
      $sitelinkFromFeed->scheduling = $feedItem->scheduling;
      $sitelinks[$feedItem->feedItemId] = $sitelinkFromFeed;
    }
  }
  return $sitelinks;
}

function GetPlatformRestrictionsForCampaign($campaignFeed) {
  $platformRestrictions = 'NONE';
  if ($campaignFeed->matchingFunction->operator == 'AND') {
    foreach ($campaignFeed->matchingFunction->lhsOperand as $argument) {
      if (get_class($argument) == 'FunctionOperand') {
        if ($argument->value->operator == 'EQUALS' &&
            get_class($argument->value->lhsOperand[0]) ==
            'RequestContextOperand') {
          $requestContextOperand = $argument->value->lhsOperand[0];
          if ($requestContextOperand->contextType == 'DEVICE_PLATFORM') {
            $platformRestrictions =
                strtoupper($argument->value->rhsOperand[0]->stringValue);
          }
        }
      }
    }
  }
  return $platformRestrictions;
}

function GetFeedItemsForCampaign($campaignFeed) {
  $feedItems = array();

  if ($campaignFeed->matchingFunction->operator == 'IN') {
    // Check if matchingFunction is of the form IN(FEED_ITEM_ID,{xxx,xxx}).
    // Extract feed items if applicable.
    $feedItems = array_merge($feedItems,
        GetFeedItemsFromArgument($campaignFeed->matchingFunction));
  } else if ($campaignFeed->matchingFunction->operator == 'AND') {
    foreach ($campaignFeed->matchingFunction->lhsOperand as $argument) {
      // Check if matchingFunction is of the form IN(FEED_ITEM_ID,{xxx,xxx}).
      // Extract feed items if applicable.
      if (get_class($argument) == 'FunctionOperand') {
        if ($argument->value->operator == 'IN') {
          $feedItems = array_merge($feedItems,
              GetFeedItemsFromArgument($argument->value));
        }
      }
    }
  }
  // There are no other matching functions involving feed item IDs.
  return $feedItems;
}

function GetFeedItemsFromArgument($function) {
  $feedItems = array();

  if (count($function->lhsOperand) == 1 &&
      get_class($function->lhsOperand[0]) ==
      'RequestContextOperand' &&
      $function->lhsOperand[0]->contextType ==
      'FEED_ITEM_ID' &&
      $function->operator == 'IN') {
    foreach ($function->rhsOperand as $argument) {
      $feedItems[] = $argument->longValue;
    }
  }
  return $feedItems;
}

function CreateExtensionSetting($user, $feedItems, $campaignId, $feedItemIds,
    $platformRestrictions) {
  $campaignExtensionSettingService =
      $user->GetService('CampaignExtensionSettingService', ADWORDS_VERSION);

  $extensionSetting = new CampaignExtensionSetting();
  $extensionSetting->campaignId = $campaignId;
  $extensionSetting->extensionType = 'SITELINK';
  $extensionSetting->extensionSetting = new ExtensionSetting();

  $extensionFeedItems = array();
  foreach ($feedItemIds as $feedItemId) {
    $feedItem = $feedItems[$feedItemId];
    $newFeedItem = new SitelinkFeedItem($feedItem->text, $feedItem->url,
        $feedItem->line2, $feedItem->line3, $feedItem->finalUrls,
        $feedItem->finalMobileUrls, $feedItem->trackingUrlTemplate, null, null,
        null, null, null, null, null, $feedItem->scheduling);
    $extensionFeedItems[] = $newFeedItem;
  }
  $extensionSetting->extensionSetting->extensions = $extensionFeedItems;
  $extensionSetting->extensionSetting->platformRestrictions =
      $platformRestrictions;
  $extensionSetting->extensionType = 'SITELINK';

  $operation = new CampaignExtensionSettingOperation($extensionSetting, 'ADD');

  printf("Adding %d sitelinks for campaign ID %d...\n",
      count($feedItemIds), $campaignId);

  return $campaignExtensionSettingService->mutate(array($operation));
}

function DeleteCampaignFeed($user, $campaignFeed) {
  $campaignFeedService =
      $user->GetService('CampaignFeedService', ADWORDS_VERSION);

  printf("Deleting association of feed ID %d and and campaign ID %d...\n",
      $campaignFeed->feedId, $campaignFeed->campaignId);

  $operation = new CampaignFeedOperation($campaignFeed, 'REMOVE');
  return $campaignFeedService->mutate(array($operation));
}

function DeleteOldFeedItems($user, $feedItemIds, $feedId) {
  if (empty($feedItemIds)) {
    return;
  }

  $feedItemService = $user->GetService('FeedItemService', ADWORDS_VERSION);

  $operations = array();
  foreach ($feedItemIds as $feedItemId) {
    $feedItem = new FeedItem();
    $feedItem->feedId = $feedId;
    $feedItem->feedItemId = $feedItemId;
    $operation = new FeedItemOperation($feedItem, 'REMOVE');
    $operations[] = $operation;
  }

  printf("Deleting %d old feed items from feed ID %d...\n",
      count($feedItemIds), $feedId);

  return $feedItemService->mutate($operations);
}

// Don't run the example if the file is being included.
if (__FILE__ != realpath($_SERVER['PHP_SELF'])) {
  return;
}

try {
  // Get AdWordsUser from credentials in '../auth.ini'
  // relative to the AdWordsUser.php file's directory.
  $user = new AdWordsUser();

  // Log every SOAP XML request and response.
  $user->LogAll();

  // Run the example.
  MigrateToExtensionSettingsExample($user);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
