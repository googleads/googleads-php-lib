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
namespace Google\AdsApi\Examples\AdWords\v201708\AdvancedOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201708\cm\AdGroupCriterionOperation;
use Google\AdsApi\AdWords\v201708\cm\AdGroupCriterionService;
use Google\AdsApi\AdWords\v201708\cm\AttributeFieldMapping;
use Google\AdsApi\AdWords\v201708\cm\BiddableAdGroupCriterion;
use Google\AdsApi\AdWords\v201708\cm\BiddingStrategyConfiguration;
use Google\AdsApi\AdWords\v201708\cm\Campaign;
use Google\AdsApi\AdWords\v201708\cm\CampaignOperation;
use Google\AdsApi\AdWords\v201708\cm\CampaignService;
use Google\AdsApi\AdWords\v201708\cm\CpcBid;
use Google\AdsApi\AdWords\v201708\cm\DynamicSearchAdsSetting;
use Google\AdsApi\AdWords\v201708\cm\Feed;
use Google\AdsApi\AdWords\v201708\cm\FeedAttribute;
use Google\AdsApi\AdWords\v201708\cm\FeedAttributeType;
use Google\AdsApi\AdWords\v201708\cm\FeedItem;
use Google\AdsApi\AdWords\v201708\cm\FeedItemAttributeValue;
use Google\AdsApi\AdWords\v201708\cm\FeedItemOperation;
use Google\AdsApi\AdWords\v201708\cm\FeedItemService;
use Google\AdsApi\AdWords\v201708\cm\FeedMapping;
use Google\AdsApi\AdWords\v201708\cm\FeedMappingOperation;
use Google\AdsApi\AdWords\v201708\cm\FeedMappingService;
use Google\AdsApi\AdWords\v201708\cm\FeedOperation;
use Google\AdsApi\AdWords\v201708\cm\FeedOrigin;
use Google\AdsApi\AdWords\v201708\cm\FeedService;
use Google\AdsApi\AdWords\v201708\cm\Money;
use Google\AdsApi\AdWords\v201708\cm\Operator;
use Google\AdsApi\AdWords\v201708\cm\PageFeed;
use Google\AdsApi\AdWords\v201708\cm\Predicate;
use Google\AdsApi\AdWords\v201708\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201708\cm\Selector;
use Google\AdsApi\AdWords\v201708\cm\Webpage;
use Google\AdsApi\AdWords\v201708\cm\WebpageCondition;
use Google\AdsApi\AdWords\v201708\cm\WebpageConditionOperand;
use Google\AdsApi\AdWords\v201708\cm\WebpageParameter;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use InvalidArgumentException;

/**
 * This code example adds a page feed to specify precisely which URLs to use
 * with your Dynamic Search Ads campaign. To create a Dynamic Search Ads
 * campaign, run AddDynamicSearchAdsCampaign.php. To get campaigns, run
 * GetCampaigns.php.
 */
class AddDynamicPageFeed {

  const CAMPAIGN_ID = 'INSERT_CAMPAIGN_ID_HERE';
  const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';

  // The criterion type to be used for DSA page feeds. DSA page feeds use
  // criterionType field instead of the placeholderType field unlike most other
  // feed types.
  const DSA_PAGE_FEED_CRITERION_TYPE = 61;

  // ID that corresponds to the page URLs.
  const DSA_PAGE_URLS_FIELD_ID = 1;

  // ID that corresponds to the labels.
  const DSA_LABEL_FIELD_ID = 2;

  public static function runExample(
      AdWordsServices $adWordsServices,
      AdWordsSession $session,
      $campaignId,
      $adGroupId
  ) {
    $dsaPageUrlLabel = 'discounts';

    // Get the page feed details. This code example creates a new feed, but you
    // can fetch and re-use an existing feed.
    $feedDetails = self::createFeed($adWordsServices, $session);
    self::createFeedMapping($adWordsServices, $session, $feedDetails);
    self::createFeedItems(
        $adWordsServices, $session, $feedDetails, $dsaPageUrlLabel);

    // Associate the page feed with the campaign.
    self::updateCampaignDsaSetting(
        $adWordsServices, $session, $campaignId, $feedDetails);

    // Optional: Target web pages matching the feed's label in the ad group.
    self::addDsaTargeting(
        $adWordsServices, $session, $adGroupId, $dsaPageUrlLabel);

    printf("Dynamic page feed setup is complete for campaign ID %d.\n",
        $campaignId);
  }

  /**
   * Creates the feed for DSA page URLs.
   */
  private static function createFeed(AdWordsServices $adWordsServices,
      AdWordsSession $session) {
    $feedService = $adWordsServices->get($session, FeedService::class);

    // Create feed attributes.
    $urlAttribute = new FeedAttribute();
    $urlAttribute->setType(FeedAttributeType::URL_LIST);
    $urlAttribute->setName('Page URL');

    $labelAttribute = new FeedAttribute();
    $labelAttribute->setType(FeedAttributeType::STRING_LIST);
    $labelAttribute->setName('Label');

    // Create the feed.
    $dsaPageFeed = new Feed();
    $dsaPageFeed->setName('DSA Feed #' . uniqid());
    $dsaPageFeed->setAttributes([$urlAttribute, $labelAttribute]);
    $dsaPageFeed->setOrigin(FeedOrigin::USER);

    // Create the feed operation and add it on the server.
    $operation = new FeedOperation();
    $operation->setOperator(Operator::ADD);
    $operation->setOperand($dsaPageFeed);
    $result = $feedService->mutate([$operation]);

    // Holds the feeds metadata.
    $feedDetails = new DSAFeedDetails();

    $savedFeed = $result->getValue()[0];
    $feedDetails->feedId = $savedFeed->getId();

    $savedAttributes = $savedFeed->getAttributes();
    $feedDetails->urlAttributeId = $savedAttributes[0]->getId();
    $feedDetails->labelAttributeId = $savedAttributes[1]->getId();

    // Print out some information about the created feed.
    printf(
        "Feed with name '%s', ID %d with urlAttributeId %d and "
            . "labelAttributeId %d was created.\n",
        $savedFeed->getName(),
        $feedDetails->feedId,
        $feedDetails->urlAttributeId,
        $feedDetails->labelAttributeId
    );

    return $feedDetails;
  }

  /**
   * Creates the feed mapping for the DSA page feeds.
   */
  private static function createFeedMapping(
      AdWordsServices $adWordsServices,
      AdWordsSession $session,
      DSAFeedDetails $feedDetails
  ) {
    $feedMappingService =
        $adWordsServices->get($session, FeedMappingService::class);

    // Map the feed attribute IDs to the field ID constants.
    $urlFieldMapping = new AttributeFieldMapping();
    $urlFieldMapping->setFeedAttributeId(
        $feedDetails->urlAttributeId);
    $urlFieldMapping->setFieldId(self::DSA_PAGE_URLS_FIELD_ID);
    $labelFieldMapping = new AttributeFieldMapping();
    $labelFieldMapping->setFeedAttributeId(
        $feedDetails->labelAttributeId);
    $labelFieldMapping->setFieldId(self::DSA_LABEL_FIELD_ID);

    // Create the feed mapping and feed mapping operation.
    $feedMapping = new FeedMapping();
    $feedMapping->setCriterionType(self::DSA_PAGE_FEED_CRITERION_TYPE);
    $feedMapping->setFeedId($feedDetails->feedId);
    $feedMapping->setAttributeFieldMappings(
        [$urlFieldMapping, $labelFieldMapping]);

    $operation = new FeedMappingOperation();
    $operation->setOperand($feedMapping);
    $operation->setOperator(Operator::ADD);

    // Create the feed mapping operation on the server and print out some
    // information.
    $result = $feedMappingService->mutate([$operation]);
    $feedMapping = $result->getValue()[0];
    printf(
        "Feed mapping with ID %d and criterion type %d was saved for "
            .  "feed with ID %d.\n",
        $feedMapping->getFeedMappingId(),
        $feedMapping->getCriterionType(),
        $feedMapping->getFeedId()
    );
  }

  /**
   * Creates the page URLs in the DSA page feed.
   */
  private static function createFeedItems(
      AdWordsServices $adWordsServices,
      AdWordsSession $session,
      DSAFeedDetails $feedDetails,
      $labelName
  ) {
    $feedItemService = $adWordsServices->get($session, FeedItemService::class);

    // Create operations to add feed items.
    $rentalCars = self::createDsaUrlAddOperation(
        $feedDetails,
        'http://www.example.com/discounts/rental-cars',
        $labelName
    );
    $hotelDeals = self::createDsaUrlAddOperation(
        $feedDetails,
        'http://www.example.com/discounts/hotel-deals',
        $labelName
    );
    $flightDeals = self::createDsaUrlAddOperation(
        $feedDetails,
        'http://www.example.com/discounts/flight-deals',
        $labelName
    );

    // Add feed item operations on the server and print out some information.
    $result = $feedItemService->mutate(
        [$rentalCars, $hotelDeals, $flightDeals]);
    foreach ($result->getValue() as $feedItem) {
      printf("Feed item with feed item ID %d was added.\n",
          $feedItem->getFeedItemId());
    }
  }

  /**
   * Creates a feed item operation to add the DSA URL.
   */
  private static function createDsaUrlAddOperation(
      DSAFeedDetails $feedDetails, $url, $labelName) {
    // Create the FeedItemAttributeValues for the URL and label.
    $urlAttributeValue = new FeedItemAttributeValue();
    $urlAttributeValue->setFeedAttributeId($feedDetails->urlAttributeId);

    // Optional: Add the {feeditem} valuetrack parameter to track which page
    // feed items lead to each click.
    $url = $url . '?id={feeditem}';
    $urlAttributeValue->setStringValues([$url]);

    $labelAttributeValue = new FeedItemAttributeValue();
    $labelAttributeValue->setFeedAttributeId(
        $feedDetails->labelAttributeId);
    $labelAttributeValue->setStringValues([$labelName]);

    // Create the feed item.
    $feedItem = new FeedItem();
    $feedItem->setFeedId($feedDetails->feedId);
    $feedItem->setAttributeValues([$urlAttributeValue, $labelAttributeValue]);

    // Create the feed item operation.
    $operation = new FeedItemOperation();
    $operation->setOperand($feedItem);
    $operation->setOperator(Operator::ADD);

    return $operation;
  }

  /**
   * Updates the campaign DSA setting to add DSA pagefeeds.
   */
  private static function updateCampaignDsaSetting(
      AdWordsServices $adWordsServices,
      AdWordsSession $session,
      $campaignId,
      DSAFeedDetails $feedDetails
  ) {
    $campaignService = $adWordsServices->get($session, CampaignService::class);

    // Create selector.
    $selector = new Selector();
    $selector->setFields(['Id', 'Settings']);
    $selector->setPredicates(
        [new Predicate('CampaignId', PredicateOperator::IN, [$campaignId])]);

    $result = $campaignService->get($selector);
    if (empty($result->getEntries()) || $result->getTotalNumEntries() === 0) {
      throw new InvalidArgumentException(
          'No campaign found with ID: ' . $campaignId);
    }
    $campaign = $result->getEntries()[0];

    if ($campaign->getSettings() === null) {
      throw new InvalidArgumentException(
          'Campaign with ID ' . $campaignId . ' is not a DSA campaign.');
    }

    $dsaSetting = null;
    foreach ($campaign->getSettings() as $setting) {
      if ($setting instanceof DynamicSearchAdsSetting) {
        $dsaSetting = $setting;
        break;
      }
    }

    if ($dsaSetting === null) {
      throw new InvalidArgumentException(
          'Campaign with ID ' . $campaignId . ' is not a DSA campaign.');
    }

    // Use a page feed to specify precisely which URLs to use with your
    // Dynamic Search Ads.
    $pageFeed = new PageFeed();
    $pageFeed->setFeedIds([$feedDetails->feedId]);
    $dsaSetting->setPageFeed($pageFeed);

    // Optional: Specify whether only the supplied URLs should be used with your
    // Dynamic Search Ads.
    $dsaSetting->setUseSuppliedUrlsOnly(true);

    $updatedCampaign = new Campaign();
    $updatedCampaign->setId($campaignId);
    $updatedCampaign->setSettings($campaign->getSettings());

    $operation = new CampaignOperation();
    $operation->setOperand($updatedCampaign);
    $operation->setOperator(Operator::SET);

    // Update the campaign on the server and print out some information.
    $result = $campaignService->mutate([$operation]);
    $updatedCampaign = $result->getValue()[0];
    printf("DSA page feed for campaign ID %d was updated with feed ID %d.\n",
        $updatedCampaign->getId(), $feedDetails->feedId);
  }

  /**
   * Sets custom targeting for the page feed URLs based on a list of labels.
   */
  private static function addDsaTargeting(
      AdWordsServices $adWordsServices,
      AdWordsSession $session,
      $adGroupId,
      $dsaPageUrlLabel
  ) {
    $adGroupCriterionService =
        $adWordsServices->get($session, AdGroupCriterionService::class);

    // Create a webpage criterion.
    $webpage = new Webpage();

    $parameter = new WebpageParameter();
    $parameter->setCriterionName('Test criterion');
    $webpage->setParameter($parameter);

    // Add a condition for label=specified_label_name.
    $condition = new WebpageCondition();
    $condition->setOperand(WebpageConditionOperand::CUSTOM_LABEL);
    $condition->setArgument($dsaPageUrlLabel);
    $parameter->setConditions([$condition]);

    $criterion = new BiddableAdGroupCriterion();
    $criterion->setAdGroupId($adGroupId);
    $criterion->setCriterion($webpage);

    // Set a custom bid for this criterion.
    $biddingStrategyConfiguration = new BiddingStrategyConfiguration();

    $cpcBid = new CpcBid();
    $money = new Money();
    $money->setMicroAmount(1500000);
    $cpcBid->setBid($money);
    $biddingStrategyConfiguration->setBids([$cpcBid]);

    $criterion->setBiddingStrategyConfiguration($biddingStrategyConfiguration);

    $operation = new AdGroupCriterionOperation();
    $operation->setOperand($criterion);
    $operation->setOperator(Operator::ADD);

    // Create ad group criterion on the server and print out some information.
    $result = $adGroupCriterionService->mutate([$operation]);
    $criterion = $result->getValue()[0];
    printf("Web page criterion with ID %d and status '%s' was created.\n",
        $criterion->getCriterion()->getId(), $criterion->getUserStatus());
  }

  public static function main() {
    // Generate a refreshable OAuth2 credential for authentication.
    $oAuth2Credential = (new OAuth2TokenBuilder())
        ->fromFile()
        ->build();

    // Construct an API session configured from a properties file and the OAuth2
    // credentials above.
    $session = (new AdWordsSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential)
        ->build();
    self::runExample(
        new AdWordsServices(),
        $session,
        intval(self::CAMPAIGN_ID),
        intval(self::AD_GROUP_ID)
    );
  }
}

/**
 * Class to keep track of DSA page feed details.
 */
final class DSAFeedDetails {
  public $feedId;
  public $urlAttributeId;
  public $labelAttributeId;
}

AddDynamicPageFeed::main();
