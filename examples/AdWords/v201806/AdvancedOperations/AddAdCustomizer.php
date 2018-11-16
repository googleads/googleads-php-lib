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

namespace Google\AdsApi\Examples\AdWords\v201806\AdvancedOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201806\cm\AdCustomizerFeed;
use Google\AdsApi\AdWords\v201806\cm\AdCustomizerFeedAttribute;
use Google\AdsApi\AdWords\v201806\cm\AdCustomizerFeedAttributeType;
use Google\AdsApi\AdWords\v201806\cm\AdCustomizerFeedOperation;
use Google\AdsApi\AdWords\v201806\cm\AdCustomizerFeedService;
use Google\AdsApi\AdWords\v201806\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201806\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201806\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201806\cm\ExpandedTextAd;
use Google\AdsApi\AdWords\v201806\cm\FeedItem;
use Google\AdsApi\AdWords\v201806\cm\FeedItemAdGroupTarget;
use Google\AdsApi\AdWords\v201806\cm\FeedItemAttributeValue;
use Google\AdsApi\AdWords\v201806\cm\FeedItemOperation;
use Google\AdsApi\AdWords\v201806\cm\FeedItemService;
use Google\AdsApi\AdWords\v201806\cm\FeedItemTargetOperation;
use Google\AdsApi\AdWords\v201806\cm\FeedItemTargetService;
use Google\AdsApi\AdWords\v201806\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds an ad customizer feed and associates it with the customer.
 * Then it adds an ad that uses the feed to populate dynamic data.
 */
class AddAdCustomizer
{

    const AD_GROUP_ID_1 = 'INSERT_AD_GROUP_ID_HERE';
    const AD_GROUP_ID_2 = 'INSERT_AD_GROUP_ID_HERE';
    const FEED_NAME = 'INSERT_FEED_NAME_HERE';

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        array $adGroupIds,
        $feedName
    ) {
        // Create a customizer feed. One feed per account can be used for all ads.
        $adCustomizerFeed = self::createCustomizerFeed($adWordsServices, $session, $feedName);

        // Add feed items containing the values we'd like to place in ads.
        self::createCustomizerFeedItems(
            $adWordsServices,
            $session,
            $adCustomizerFeed,
            $adGroupIds
        );

        // Create ads with customizations.
        self::createAdsWithCustomizations(
            $adWordsServices,
            $session,
            $adGroupIds,
            $feedName
        );
    }

    /**
     * Creates a new feed for AdCustomizerFeed.
     *
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $session the AdWords session
     * @param string $feedName the name of feed to be created
     * @return AdCustomizerFeed the ad customizer feed
     */
    private static function createCustomizerFeed(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $feedName
    ) {
        $adCustomizerFeedService = $adWordsServices->get($session, AdCustomizerFeedService::class);
        $nameAttribute = new AdCustomizerFeedAttribute();
        $nameAttribute->setName('Name');
        $nameAttribute->setType(AdCustomizerFeedAttributeType::STRING);

        $priceAttribute = new AdCustomizerFeedAttribute();
        $priceAttribute->setName('Price');
        $priceAttribute->setType(AdCustomizerFeedAttributeType::STRING);

        $dateAttribute = new AdCustomizerFeedAttribute();
        $dateAttribute->setName('Date');
        $dateAttribute->setType(AdCustomizerFeedAttributeType::DATE_TIME);

        $customizerFeed = new AdCustomizerFeed();
        $customizerFeed->setFeedName($feedName);
        $customizerFeed->setFeedAttributes(
            [$nameAttribute, $priceAttribute, $dateAttribute]
        );

        $feedOperation = new AdCustomizerFeedOperation();
        $feedOperation->setOperand($customizerFeed);
        $feedOperation->setOperator(Operator::ADD);
        $operations = [$feedOperation];

        $result = $adCustomizerFeedService->mutate($operations);
        $addedFeed = $result->getValue()[0];

        printf(
            "Created ad customizer feed with ID %d, name '%s' and attributes:\n",
            $addedFeed->getFeedId(),
            $addedFeed->getFeedName()
        );
        if (empty($addedFeed)) {
            print "  No attributes\n";
        } else {
            foreach ($addedFeed->getFeedAttributes() as $feedAttribute) {
                printf(
                    "  ID: %d, name: '%s', type: %s\n",
                    $feedAttribute->getId(),
                    $feedAttribute->getName(),
                    $feedAttribute->getType()
                );
            }
        }


        return $addedFeed;
    }

    /**
     * Creates feed items with the values to use in ad customizations for each ad
     * group.
     *
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $session the AdWords session
     * @param AdCustomizerFeed $adCustomizerFeed the ad customizer feed
     * @param int[] $adGroupIds the ad group IDs to add the ad customizer
     */
    private static function createCustomizerFeedItems(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        AdCustomizerFeed $adCustomizerFeed,
        array $adGroupIds
    ) {
        $feedItemService = $adWordsServices->get($session, FeedItemService::class);

        $operations = [];

        $marsDate = mktime(0, 0, 0, date('m'), 1, date('Y'));
        $venusDate = mktime(0, 0, 0, date('m'), 15, date('Y'));

        // Create multiple feed item operations and add them to the operations list.
        $operations[] = self::createFeedItemAddOperation(
            'Mars',
            '$1234.56',
            date('Ymd His', $marsDate),
            $adCustomizerFeed
        );
        $operations[] = self::createFeedItemAddOperation(
            'Venus',
            '$1450.00',
            date('Ymd His', $venusDate),
            $adCustomizerFeed
        );

        $result = $feedItemService->mutate($operations);

        foreach ($result->getValue() as $feedItem) {
            printf(
                'FeedItem with ID %d was added.%s',
                $feedItem->getFeedItemId(),
                PHP_EOL
            );
        }
        for ($i = 0; $i < count($result->getValue()); $i++) {
            // Add feed item targeting to restrict the feed item to specific ad
            // groups.
            self::restrictFeedItemToAdGroup(
                $adWordsServices,
                $session,
                $result->getValue()[$i],
                $adGroupIds[$i]
            );
        }
    }

    /**
     * Creates a feed item operation that will create a feed item with the
     * specified values and ad group target when sent to FeedItemService.mutate.
     *
     * @param string $name the value for the name attribute of the feed item
     * @param string $price the value for the price attribute of the feed item
     * @param string $date the value for the date attribute of the feed item
     * @param AdCustomizerFeed $adCustomizerFeed the customizer feed
     * @return FeedItemOperation the feed item operation
     */
    private static function createFeedItemAddOperation(
        $name,
        $price,
        $date,
        AdCustomizerFeed $adCustomizerFeed
    ) {
        $nameAttributeValue = new FeedItemAttributeValue();
        $nameAttributeValue->setFeedAttributeId(
            $adCustomizerFeed->getFeedAttributes()[0]->getId()
        );
        $nameAttributeValue->setStringValue($name);

        $priceAttributeValue = new FeedItemAttributeValue();
        $priceAttributeValue->setFeedAttributeId(
            $adCustomizerFeed->getFeedAttributes()[1]->getId()
        );
        $priceAttributeValue->setStringValue($price);

        $dateAttributeValue = new FeedItemAttributeValue();
        $dateAttributeValue->setFeedAttributeId(
            $adCustomizerFeed->getFeedAttributes()[2]->getId()
        );
        $dateAttributeValue->setStringValue($date);

        $item = new FeedItem();
        $item->setFeedId($adCustomizerFeed->getFeedId());
        $item->setAttributeValues(
            [$nameAttributeValue, $priceAttributeValue, $dateAttributeValue]
        );

        $operation = new FeedItemOperation();
        $operation->setOperand($item);
        $operation->setOperator('ADD');

        return $operation;
    }

    /**
     * Restricts the feed item to an ad group.
     *
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $session the AdWords session
     * @param FeedItem $feedItem the feed item to restrict
     * @param int $adGroupId the ad group ID to which the feed item will be
     *     restricted
     */
    private static function restrictFeedItemToAdGroup(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        FeedItem $feedItem,
        $adGroupId
    ) {
        $feedItemTargetService =
            $adWordsServices->get($session, FeedItemTargetService::class);

        // Create a feed item ad group target.
        $adGroupTarget = new FeedItemAdGroupTarget();
        $adGroupTarget->setFeedId($feedItem->getFeedId());
        $adGroupTarget->setFeedItemId($feedItem->getFeedItemId());
        $adGroupTarget->setAdGroupId($adGroupId);

        // Create a feed item target operation.
        $operation = new FeedItemTargetOperation();
        $operation->setOperator(Operator::ADD);
        $operation->setOperand($adGroupTarget);

        // Add a feed item target on the server and print out some information.
        $result = $feedItemTargetService->mutate([$operation]);
        $addedAdGroupTarget = $result->getValue()[0];
        sprintf(
            'Feed item target for feed ID %s and feed item ID %s '
            . 'was created to restrict serving to ad group ID %s.%s',
            $addedAdGroupTarget->getFeedId(),
            $addedAdGroupTarget->getFeedItemId(),
            $addedAdGroupTarget->getAdGroupId(),
            PHP_EOL
        );
    }


    /**
     * Creates expanded text ads that use ad customizations for the specified
     * ad group IDs.
     *
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $session the AdWords session
     * @param int[] $adGroupIds the ad group IDs to add the ad customizer
     * @param string $feedName the name of feed to be created
     */
    private static function createAdsWithCustomizations(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        array $adGroupIds,
        $feedName
    ) {
        $adGroupAdService = $adWordsServices->get($session, AdGroupAdService::class);
        $operations = [];

        // Create an expanded text ad that uses ad customization.
        $expandedTextAd = new ExpandedTextAd();
        $expandedTextAd->setHeadlinePart1(
            sprintf('Luxury Cruise to {=%s.Name}', $feedName)
        );
        $expandedTextAd->setHeadlinePart2(
            sprintf('Only {=%s.Price}', $feedName)
        );
        $expandedTextAd->setDescription(
            sprintf('Offer ends in {=countdown(%s.Date)}!', $feedName)
        );
        $expandedTextAd->setFinalUrls(['http://www.example.com']);

        $adGroupAd = new AdGroupAd();
        $adGroupAd->setAdGroupId($adGroupIds[0]);
        $adGroupAd->setAd($expandedTextAd);

        $operation = new AdGroupAdOperation();
        $operation->setOperand($adGroupAd);
        $operation->setOperator(Operator::ADD);
        $operations[] = $operation;

        // Create another expanded text ad with the same properties as the first
        // one for another ad group.
        // This is done to prevent PHP SoapClient from making a reference
        // to this object in the generated XML payload, which is not recognized by
        // AdWords API.
        $expandedTextAd2 = new ExpandedTextAd();
        $expandedTextAd2->setHeadlinePart1(
            sprintf('Luxury Cruise to {=%s.Name}', $feedName)
        );
        $expandedTextAd2->setHeadlinePart2(
            sprintf('Only {=%s.Price}', $feedName)
        );
        $expandedTextAd2->setDescription(
            sprintf('Offer ends in {=countdown(%s.Date)}!', $feedName)
        );
        $expandedTextAd2->setFinalUrls(['http://www.example.com']);

        $adGroupAd = new AdGroupAd();
        $adGroupAd->setAdGroupId($adGroupIds[1]);
        $adGroupAd->setAd($expandedTextAd2);

        $operation = new AdGroupAdOperation();
        $operation->setOperand($adGroupAd);
        $operation->setOperator(Operator::ADD);
        $operations[] = $operation;

        $result = $adGroupAdService->mutate($operations);

        foreach ($result->getValue() as $adGroupAd) {
            printf(
                "Expanded text ad with ID %d and status '%s' was added.\n",
                $adGroupAd->getAd()->getId(),
                $adGroupAd->getStatus()
            );
        }
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()->withOAuth2Credential($oAuth2Credential)->build();
        self::runExample(
            new AdWordsServices(),
            $session,
            [intval(self::AD_GROUP_ID_1), intval(self::AD_GROUP_ID_2)],
            self::FEED_NAME
        );
    }
}

AddAdCustomizer::main();
