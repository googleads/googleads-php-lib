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

namespace Google\AdsApi\Examples\AdWords\v201710\Migration;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201710\cm\CampaignExtensionSetting;
use Google\AdsApi\AdWords\v201710\cm\CampaignExtensionSettingOperation;
use Google\AdsApi\AdWords\v201710\cm\CampaignExtensionSettingService;
use Google\AdsApi\AdWords\v201710\cm\CampaignFeedOperation;
use Google\AdsApi\AdWords\v201710\cm\CampaignFeedService;
use Google\AdsApi\AdWords\v201710\cm\ExtensionSetting;
use Google\AdsApi\AdWords\v201710\cm\ExtensionSettingPlatform;
use Google\AdsApi\AdWords\v201710\cm\FeedItem;
use Google\AdsApi\AdWords\v201710\cm\FeedItemOperation;
use Google\AdsApi\AdWords\v201710\cm\FeedItemService;
use Google\AdsApi\AdWords\v201710\cm\FeedMappingService;
use Google\AdsApi\AdWords\v201710\cm\FeedService;
use Google\AdsApi\AdWords\v201710\cm\FeedType;
use Google\AdsApi\AdWords\v201710\cm\FunctionOperand;
use Google\AdsApi\AdWords\v201710\cm\FunctionOperator;
use Google\AdsApi\AdWords\v201710\cm\Operator;
use Google\AdsApi\AdWords\v201710\cm\RequestContextOperand;
use Google\AdsApi\AdWords\v201710\cm\RequestContextOperandContextType;
use Google\AdsApi\AdWords\v201710\cm\SitelinkFeedItem;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Migrates your feed based sitelinks at campaign level to
 * use extension settings. To learn more about extension settings, see
 * https://developers.google.com/adwords/api/docs/guides/extension-settings
 * To learn more about migrating feed based extensions to extension
 * settings, see
 * https://developers.google.com/adwords/api/docs/guides/migrate-to-extension-settings
 */
class MigrateToExtensionSettings
{

    const PAGE_LIMIT = 500;

    // The placeholder type for sitelinks. See
    // https://developers.google.com/adwords/api/docs/appendix/placeholders
    // for the list of all supported placeholder types.
    const PLACEHOLDER_TYPE_SITELINKS = 1;

    // Placeholder field IDs for sitelinks. See
    // https://developers.google.com/adwords/api/docs/appendix/placeholders
    // for the list of all supported placeholder types.
    const PLACEHOLDER_FIELD_TEXT = 1;
    const PLACEHOLDER_FIELD_URL = 2;
    const PLACEHOLDER_FIELD_LINE2 = 3;
    const PLACEHOLDER_FIELD_LINE3 = 4;
    const PLACEHOLDER_FIELD_FINAL_URLS = 5;
    const PLACEHOLDER_FIELD_FINAL_MOBILE_URLS = 6;
    const PLACEHOLDER_FIELD_TRACKING_URL_TEMPLATE = 7;


    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session
    ) {
        $feeds = self::getFeeds($adWordsServices, $session);
        foreach ($feeds as $feed) {
            // Retrieve all the sitelinks from the current feed.
            $sitelinksFromFeed = self::getSitelinksFromFeed(
                $adWordsServices,
                $session,
                $feed->getId()
            );
            printf(
                "Loaded %d sitelinks for feed ID %d.\n",
                count($sitelinksFromFeed),
                $feed->getId()
            );

            // Get all the instances where a sitelink from this feed has been added
            // to a campaign.
            $campaignFeeds = self::getCampaignFeeds(
                $adWordsServices,
                $session,
                $feed->getId(),
                self::PLACEHOLDER_TYPE_SITELINKS
            );
            printf(
                "Loaded %d sitelink to campaign mappings for feed ID %d.\n",
                count($campaignFeeds),
                $feed->getId()
            );

            if ($campaignFeeds !== null) {
                $allFeedItemsToDelete = [];
                foreach ($campaignFeeds as $campaignFeed) {
                    // Retrieve the sitelinks that have been associated with this
                    // campaign.
                    $feedItemIds = self::getFeedItemIdsForCampaignFeed($campaignFeed);
                    $platformRestrictions = self::getPlatformRestrictionsForCampaignFeed($campaignFeed);

                    if ($feedItemIds === null) {
                        printf(
                            "Skipping feed ID %d for campaign %d -- matching function is "
                            . "missing or too complex for this script.\n",
                            $campaignFeed->getFeedId(),
                            $campaignFeed->getCampaignId()
                        );
                        continue;
                    }

                    // Delete the campaign feed that associates the sitelinks from the
                    // feed to the campaign.
                    self::deleteCampaignFeed($adWordsServices, $session, $campaignFeed);

                    // Mark the sitelinks from the feed for deletion.
                    $allFeedItemsToDelete = array_merge($allFeedItemsToDelete, $feedItemIds);

                    // Create extension settings instead of sitelinks.
                    self::createExtensionSetting(
                        $adWordsServices,
                        $session,
                        $sitelinksFromFeed,
                        $campaignFeed->getCampaignId(),
                        $feedItemIds,
                        $platformRestrictions
                    );
                }

                // Delete all the sitelinks from the feed.
                $allFeedItemsToDelete = array_unique($allFeedItemsToDelete);
                self::deleteOldFeedItems(
                    $adWordsServices,
                    $session,
                    $allFeedItemsToDelete,
                    $feed->getId()
                );
            }
        }
    }

    /**
     * Gets all enabled feeds.
     */
    private static function getFeeds(
        AdWordsServices $adWordsServices,
        AdWordsSession $session
    ) {
        $feedService = $adWordsServices->get($session, FeedService::class);

        // Create paging controls.
        $totalNumEntries = 0;
        $offset = 0;
        $query = 'SELECT Id, Name, Attributes WHERE Origin="USER" AND ' . 'FeedStatus="ENABLED"';
        $feeds = [];
        do {
            $pageQuery = sprintf('%s LIMIT %d,%d', $query, $offset, self::PAGE_LIMIT);

            // Make the query request.
            $page = $feedService->query($pageQuery);

            if ($page->getEntries() !== null) {
                $totalNumEntries = $page->getTotalNumEntries();
                foreach ($page->getEntries() as $feed) {
                    $feeds[] = $feed;
                }
            }
            // Advance the paging offset.
            $offset += self::PAGE_LIMIT;
        } while ($offset < $totalNumEntries);

        return $feeds;
    }

    /**
     * Gets all enabled feed items of the specified feed.
     */
    private static function getFeedItems(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $feedId
    ) {
        $feedItemService = $adWordsServices->get($session, FeedItemService::class);

        // Create paging controls.
        $totalNumEntries = 0;
        $offset = 0;
        $query = sprintf(
            'SELECT FeedItemId, AttributeValues, Scheduling WHERE ' . 'Status = "ENABLED" AND FeedId = %d',
            $feedId
        );
        $feedItems = [];
        do {
            $pageQuery = sprintf('%s LIMIT %d,%d', $query, $offset, self::PAGE_LIMIT);

            // Make the query request.
            $page = $feedItemService->query($pageQuery);

            if ($page->getEntries() !== null) {
                $totalNumEntries = $page->getTotalNumEntries();
                foreach ($page->getEntries() as $feedItem) {
                    $feedItems[] = $feedItem;
                }
            }
            // Advance the paging offset.
            $offset += self::PAGE_LIMIT;
        } while ($offset < $totalNumEntries);

        return $feedItems;
    }

    /**
     * Gets all enabled campaign feeds for the specified feed and placeholder
     * type.
     */
    private static function getCampaignFeeds(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $feedId,
        $placeholderId
    ) {
        $campaignFeedService = $adWordsServices->get($session, CampaignFeedService::class);
        $page = $campaignFeedService->query(
            sprintf(
                'SELECT CampaignId, MatchingFunction, PlaceholderTypes WHERE '
                . 'Status="ENABLED" AND FeedId = %d AND PlaceholderTypes ' . 'CONTAINS_ANY[%d]',
                $feedId,
                $placeholderId
            )
        );

        return $page->getEntries();
    }

    /**
     * Gets attribute field mappings from the specified feed and placeholder type.
     */
    private static function getAttributeFieldMappings(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $feedId,
        $placeholderTypeId
    ) {
        $feedMappingService = $adWordsServices->get($session, FeedMappingService::class);
        $page = $feedMappingService->query(
            sprintf(
                'SELECT FeedMappingId, AttributeFieldMappings WHERE FeedId="%d" '
                . 'AND PlaceholderType="%d" AND Status="ENABLED"',
                $feedId,
                $placeholderTypeId
            )
        );

        $attributeMappings = [];
        if ($page->getEntries() !== null) {
            // Normally, a feed attribute is mapped only to one field. However,
            // you may map it to more than one field if needed.
            foreach ($page->getEntries() as $feedMapping) {
                foreach ($feedMapping->getAttributeFieldMappings() as $attributeMapping) {
                    if (array_key_exists(
                        $attributeMapping->getFeedAttributeId(),
                        $attributeMappings
                    ) === false) {
                        $attributeMappings[$attributeMapping->getFeedAttributeId()] = [];
                    }
                    $attributeMappings[$attributeMapping->getFeedAttributeId()][] = $attributeMapping->getFieldId();
                }
            }
        }

        return $attributeMappings;
    }

    /**
     * Gets sitelinks from the specified feed.
     */
    private static function getSitelinksFromFeed(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $feedId
    ) {
        printf("Processing feed ID %d...\n", $feedId);
        $sitelinks = [];

        // Retrieve all the feed items from the feed.
        $feedItems = self::getFeedItems($adWordsServices, $session, $feedId);

        if ($feedItems !== null) {
            // Retrieve the feed's attribute mapping.
            $attributeFieldMappings = self::getAttributeFieldMappings(
                $adWordsServices,
                $session,
                $feedId,
                self::PLACEHOLDER_TYPE_SITELINKS
            );

            foreach ($feedItems as $feedItem) {
                $sitelinkFromFeed = new SitelinkFromFeed(
                    $feedItem->getFeedId(),
                    $feedItem->getFeedItemId()
                );

                foreach ($feedItem->getAttributeValues() as $attributeValue) {
                    // This attribute hasn't been mapped to a field.
                    if (array_key_exists(
                        $attributeValue->getFeedAttributeId(),
                        $attributeFieldMappings
                    ) === false) {
                        continue;
                    }
                    // Get the list of all the fields to which this attribute has been
                    // mapped.
                    foreach ($attributeFieldMappings[$attributeValue->getFeedAttributeId()] as $fieldId) {
                        // Read the appropriate value depending on the ID of the mapped
                        // field.
                        switch ($fieldId) {
                            case self::PLACEHOLDER_FIELD_TEXT:
                                $sitelinkFromFeed->setText($attributeValue->getStringValue());
                                break;
                            case self::PLACEHOLDER_FIELD_URL:
                                $sitelinkFromFeed->setUrl($attributeValue->getStringValue());
                                break;
                            case self::PLACEHOLDER_FIELD_FINAL_URLS:
                                $sitelinkFromFeed->setFinalUrls(
                                    $attributeValue->getStringValues()
                                );
                                break;
                            case self::PLACEHOLDER_FIELD_FINAL_MOBILE_URLS:
                                $sitelinkFromFeed->setFinalMobileUrls(
                                    $attributeValue->getStringValues()
                                );
                                break;
                            case self::PLACEHOLDER_FIELD_TRACKING_URL_TEMPLATE:
                                $sitelinkFromFeed->setTrackingUrlTemplate(
                                    $attributeValue->getStringValue()
                                );
                                break;
                            case self::PLACEHOLDER_FIELD_LINE2:
                                $sitelinkFromFeed->setLine2($attributeValue->getStringValue());
                                break;
                            case self::PLACEHOLDER_FIELD_LINE3:
                                $sitelinkFromFeed->setLine3($attributeValue->getStringValue());
                                break;
                        }
                    }
                }
                $sitelinkFromFeed->setScheduling($feedItem->getScheduling());
                $sitelinks[$feedItem->getFeedItemId()] = $sitelinkFromFeed;
            }
        }

        return $sitelinks;
    }

    /**
     * Gets plaftform restrictions for the specified campaign feed.
     */
    private static function getPlatformRestrictionsForCampaignFeed(
        $campaignFeed
    ) {
        $platformRestrictions = ExtensionSettingPlatform::NONE;

        if ($campaignFeed->getMatchingFunction()->getOperator() === FunctionOperator::AND_VALUE) {
            foreach ($campaignFeed->getMatchingFunction()->getLhsOperand() as $argument) {
                if ($argument instanceof FunctionOperand) {
                    if ($argument->getValue()->getOperator() === FunctionOperator::EQUALS
                        && $argument->getValue()->getLhsOperand()[0] instanceof RequestContextOperand) {
                        $requestContextOperand = $argument->getValue()->getLhsOperand()[0];
                        if ($requestContextOperand->getContextType()
                            === RequestContextOperandContextType::DEVICE_PLATFORM) {
                            $platformRestrictions = strtoupper(
                                $argument->getValue()->getRhsOperand()[0]->getStringValue()
                            );
                        }
                    }
                }
            }
        }

        return $platformRestrictions;
    }


    /**
     * Gets feed item IDs from the specified campaign feed.
     */
    private static function getFeedItemIdsForCampaignFeed($campaignFeed)
    {
        $feedItemIds = [];

        if ($campaignFeed->getMatchingFunction()->getOperator() === FunctionOperator::IN) {
            // Check if matchingFunction is of the form IN(FEED_ITEM_ID,{xxx,xxx}).
            // Extract feed items if applicable.
            $feedItemIds = array_merge(
                $feedItemIds,
                self::getFeedItemIdsFromArgument($campaignFeed->getMatchingFunction())
            );
        } elseif ($campaignFeed->getMatchingFunction()->getOperator() === FunctionOperator::AND_VALUE) {
            foreach ($campaignFeed->getMatchingFunction()->getLhsOperand() as $argument) {
                // Check if matchingFunction is of the form IN(FEED_ITEM_ID,{xxx,xxx}).
                // Extract feed items if applicable.
                if ($argument instanceof FunctionOperand) {
                    if ($argument->getValue()->getOperator() === FunctionOperator::IN) {
                        $feedItemIds = array_merge(
                            $feedItemIds,
                            self::getFeedItemIdsFromArgument($argument->getValue())
                        );
                    }
                }
            }
        }

        return $feedItemIds;
    }

    /**
     * Gets feed item IDs from the specified function argument.
     */
    private static function getFeedItemIdsFromArgument($function)
    {
        $feedItemIds = [];

        if (count($function->getLhsOperand()) === 1
            && $function->getLhsOperand()[0] instanceof RequestContextOperand
            && $function->getLhsOperand()[0]->getContextType() === RequestContextOperandContextType::FEED_ITEM_ID
            && $function->getOperator() === FunctionOperator::IN) {
            foreach ($function->getRhsOperand() as $argument) {
                $feedItemIds[] = $argument->getLongValue();
            }
        }

        return $feedItemIds;
    }

    /**
     * Creates a new extension setting for the specified feed items.
     */
    private static function createExtensionSetting(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        array $sitelinksFromFeed,
        $campaignId,
        array $feedItemIds,
        $platformRestrictions
    ) {
        $campaignExtensionSettingService = $adWordsServices->get($session, CampaignExtensionSettingService::class);

        $extensionSetting = new CampaignExtensionSetting();
        $extensionSetting->setCampaignId($campaignId);
        $extensionSetting->setExtensionType(FeedType::SITELINK);
        $extensionSetting->setExtensionSetting(new ExtensionSetting());

        $extensionFeedItems = [];
        foreach ($feedItemIds as $feedItemId) {
            $sitelink = $sitelinksFromFeed[$feedItemId];

            $newFeedItem = new SitelinkFeedItem();
            $newFeedItem->setSitelinkText($sitelink->getText());
            $newFeedItem->setSitelinkUrl($sitelink->getUrl());
            $newFeedItem->setSitelinkLine2($sitelink->getLine2());
            $newFeedItem->setSitelinkLine3($sitelink->getLine3());
            $newFeedItem->setSitelinkFinalUrls($sitelink->getFinalUrls());
            $newFeedItem->setSitelinkFinalMobileUrls($sitelink->getFinalMobileUrls());
            $newFeedItem->setSitelinkTrackingUrlTemplate(
                $sitelink->getTrackingUrlTemplate()
            );
            $newFeedItem->setScheduling($sitelink->getScheduling());

            $extensionFeedItems[] = $newFeedItem;
        }
        $extensionSetting->getExtensionSetting()->setExtensions(
            $extensionFeedItems
        );
        $extensionSetting->getExtensionSetting()->setPlatformRestrictions(
            $platformRestrictions
        );

        $operation = new CampaignExtensionSettingOperation();
        $operation->setOperand($extensionSetting);
        $operation->setOperator(Operator::ADD);

        printf(
            "Adding %d sitelinks for campaign ID %d...\n",
            count($feedItemIds),
            $campaignId
        );

        return $campaignExtensionSettingService->mutate([$operation]);
    }

    /**
     * Deletes associations of the specified feed IDs and campaign IDs.
     */
    private static function deleteCampaignFeed(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $campaignFeed
    ) {
        $campaignFeedService = $adWordsServices->get($session, CampaignFeedService::class);

        printf(
            "Deleting association of feed ID %d and campaign ID %d...\n",
            $campaignFeed->getFeedId(),
            $campaignFeed->getCampaignId()
        );

        $operation = new CampaignFeedOperation();
        $operation->setOperand($campaignFeed);
        $operation->setOperator(Operator::REMOVE);

        return $campaignFeedService->mutate([$operation]);
    }

    /**
     * Deletes old feed items that became unused anymore after migration.
     */
    private static function deleteOldFeedItems(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $feedItemIds,
        $feedId
    ) {
        if (count($feedItemIds) === 0) {
            return;
        }

        $feedItemService = $adWordsServices->get($session, FeedItemService::class);

        $operations = [];
        foreach ($feedItemIds as $feedItemId) {
            $feedItem = new FeedItem();
            $feedItem->setFeedId($feedId);
            $feedItem->setFeedItemId($feedItemId);

            $operation = new FeedItemOperation();
            $operation->setOperand($feedItem);
            $operation->setOperator(Operator::REMOVE);
            $operations[] = $operation;
        }

        printf(
            "Deleting %d old feed items from feed ID %d...\n",
            count($feedItemIds),
            $feedId
        );

        return $feedItemService->mutate($operations);
    }


    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()->withOAuth2Credential($oAuth2Credential)->build();
        self::runExample(new AdWordsServices(), $session);
    }
}

// @codingStandardsIgnoreStart
class SitelinkFromFeed
{
    // @codingStandardsIgnoreEnd

    private $feedId;
    private $feedItemId;
    private $text;
    private $url;
    private $finalUrls;
    private $finalMobileUrls;
    private $trackingUrlTemplate;
    private $line2;
    private $line3;
    private $scheduling;

    public function __construct($feedId = null, $feedItemId = null)
    {
        $this->feedId = $feedId;
        $this->feedItemId = $feedItemId;
    }

    public function getFeedId()
    {
        return $this->feedId;
    }

    public function getFeedItemId()
    {
        return $this->feedItemId;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getFinalUrls()
    {
        return $this->finalUrls;
    }

    public function getFinalMobileUrls()
    {
        return $this->finalMobileUrls;
    }

    public function getTrackingUrlTemplate()
    {
        return $this->trackingUrlTemplate;
    }

    public function getLine2()
    {
        return $this->line2;
    }

    public function getLine3()
    {
        return $this->line3;
    }

    public function getScheduling()
    {
        return $this->scheduling;
    }

    public function setFeedId($feedId)
    {
        $this->feedId = $feedId;
    }

    public function setFeedItemId($feedItemId)
    {
        $this->feedItemId = $feedItemId;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function setFinalUrls(array $finalUrls)
    {
        $this->finalUrls = $finalUrls;
    }

    public function setFinalMobileUrls(array $finalMobileUrls)
    {
        $this->finalMobileUrls = $finalMobileUrls;
    }

    public function setTrackingUrlTemplate($trackingUrlTemplate)
    {
        $this->trackingUrlTemplate = $trackingUrlTemplate;
    }

    public function setLine2($line2)
    {
        $this->line2 = $line2;
    }

    public function setLine3($line3)
    {
        $this->line3 = $line3;
    }

    public function setScheduling($scheduling)
    {
        $this->scheduling = $scheduling;
    }
}


MigrateToExtensionSettings::main();
