<?php
/**
 * Copyright 2018 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\AdsApi\Examples\AdManager\v202305\LineItemService;

require __DIR__ . '/../../../../vendor/autoload.php';

use DateTime;
use DateTimeZone;
use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v202305\AdManagerDateTimes;
use Google\AdsApi\AdManager\v202305\AdUnitTargeting;
use Google\AdsApi\AdManager\v202305\CmsMetadataCriteria;
use Google\AdsApi\AdManager\v202305\CmsMetadataCriteriaComparisonOperator;
use Google\AdsApi\AdManager\v202305\CompanionDeliveryOption;
use Google\AdsApi\AdManager\v202305\ContentTargeting;
use Google\AdsApi\AdManager\v202305\CostType;
use Google\AdsApi\AdManager\v202305\CreativePlaceholder;
use Google\AdsApi\AdManager\v202305\CreativeRotationType;
use Google\AdsApi\AdManager\v202305\CustomCriteriaSet;
use Google\AdsApi\AdManager\v202305\CustomCriteriaSetLogicalOperator;
use Google\AdsApi\AdManager\v202305\EnvironmentType;
use Google\AdsApi\AdManager\v202305\Goal;
use Google\AdsApi\AdManager\v202305\GoalType;
use Google\AdsApi\AdManager\v202305\InventoryTargeting;
use Google\AdsApi\AdManager\v202305\LineItem;
use Google\AdsApi\AdManager\v202305\LineItemType;
use Google\AdsApi\AdManager\v202305\Money;
use Google\AdsApi\AdManager\v202305\RequestPlatform;
use Google\AdsApi\AdManager\v202305\RequestPlatformTargeting;
use Google\AdsApi\AdManager\v202305\ServiceFactory;
use Google\AdsApi\AdManager\v202305\Size;
use Google\AdsApi\AdManager\v202305\StartDateTimeType;
use Google\AdsApi\AdManager\v202305\Targeting;
use Google\AdsApi\AdManager\v202305\VideoPosition;
use Google\AdsApi\AdManager\v202305\VideoPositionTarget;
use Google\AdsApi\AdManager\v202305\VideoPositionTargeting;
use Google\AdsApi\AdManager\v202305\VideoPositionType;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Creates video line items.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateVideoLineItems
{

    const ORDER_ID = 'INSERT_ORDER_ID_HERE';
    const AD_UNIT_ID = 'INSERT_AD_UNIT_ID_HERE';
    const CONTENT_ID = 'INSERT_CONTENT_ID_HERE';
    const CONTENT_BUNDLE_ID = 'INSERT_CONTENT_BUNDLE_ID_HERE';
    const CMS_METADATA_VALUE_ID = 'INSERT_CMS_METADATA_VALUE_ID_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        int $orderId,
        int $adUnitId,
        int $contentId,
        int $contentBundleId,
        int $cmsMetadataValueId
    ) {
        $lineItemService = $serviceFactory->createLineItemService($session);

        // Create content targeting.
        $contentTargeting = new ContentTargeting();
        $contentTargeting->setTargetedContentIds([$contentId]);
        $contentTargeting->setTargetedVideoContentBundleIds([$contentBundleId]);

        // Target only video players.
        $requestPlatformTargeting = new RequestPlatformTargeting();
        $requestPlatformTargeting->setTargetedRequestPlatforms(
            [RequestPlatform::VIDEO_PLAYER]
        );

        // Create inventory targeting.
        $inventoryTargeting = new InventoryTargeting();
        $inventoryTargeting->setTargetedAdUnits(
            [new AdUnitTargeting($adUnitId, true)]
        );

        // Create video position targeting.
        $videoPosition = new VideoPosition();
        $videoPosition->setPositionType(VideoPositionType::PREROLL);
        $videoPositionTarget = new VideoPositionTarget();
        $videoPositionTarget->setVideoPosition($videoPosition);
        $videoPositionTargeting = new VideoPositionTargeting();
        $videoPositionTargeting->setTargetedPositions([$videoPositionTarget]);
        // Alternate ways to target video positions. See the documentation for
        // VideoPositionTarget for more information:
        // https://developers.google.com/ad-manager/docs/reference/v202305/LineItemService.VideoPositionTarget
        // $videoPositionTarget->setVideoBumperType(VideoBumperType::BEFORE);
        // $videoPositionTarget->setVideoPositionWithinPod(1);
        // $videoPositionTarget->setAdSlotId($customAdSlotId);

        // Create custom targeting for a list of CmsMetadataValues.
        $contentCustomCriteria = new CmsMetadataCriteria();
        $contentCustomCriteria
            ->setOperator(CmsMetadataCriteriaComparisonOperator::EQUALS);
        $contentCustomCriteria->setCmsMetadataValueIds([$cmsMetadataValueId]);

        $customCriteriaSet = new CustomCriteriaSet();
        $customCriteriaSet
            ->setLogicalOperator(CustomCriteriaSetLogicalOperator::AND_VALUE);
        $customCriteriaSet->setChildren([$contentCustomCriteria]);

        // Create targeting.
        $targeting = new Targeting();
        $targeting->setContentTargeting($contentTargeting);
        $targeting->setInventoryTargeting($inventoryTargeting);
        $targeting->setVideoPositionTargeting($videoPositionTargeting);
        $targeting->setRequestPlatformTargeting($requestPlatformTargeting);
        $targeting->setCustomTargeting($customCriteriaSet);

        // Create local line item object.
        $lineItem = new LineItem();
        $lineItem->setName("Video line item #" . uniqid());
        $lineItem->setOrderId($orderId);
        $lineItem->setTargeting($targeting);

        // Allow the line item to be booked even if there is not enough
        // inventory.
        $lineItem->setAllowOverbook(true);

        // Set the line item type to SPONSORSHIP.
        $lineItem->setLineItemType(LineItemType::SPONSORSHIP);

        // Set the environment type to video.
        $lineItem->setEnvironmentType(EnvironmentType::VIDEO_PLAYER);

        // Set the creative rotation type to optimized.
        $lineItem->setCreativeRotationType(CreativeRotationType::OPTIMIZED);

        // Create the master creative placeholder.
        $creativeMasterPlaceholder = new CreativePlaceholder();
        $creativeMasterPlaceholder->setSize(new Size(640, 360, false));

        // Create companion creative placeholders.
        $companionCreativePlaceholder = new CreativePlaceholder();
        $companionCreativePlaceholder->setSize(new Size(300, 250, false));

        // Set companion creative placeholders.
        $creativeMasterPlaceholder->setCompanions(
            [$companionCreativePlaceholder]
        );

        // Set the size of creatives that can be associated with this line item.
        $lineItem->setCreativePlaceholders([$creativeMasterPlaceholder]);

        // Set delivery of video companions to optional.
        $lineItem->setCompanionDeliveryOption(
            CompanionDeliveryOption::OPTIONAL
        );

        // Set the maximum video creative length for this line item to
        // 15 seconds.
        $lineItem->setVideoMaxDuration(15000);

        // Set the length of the line item to run.
        $lineItem->setStartDateTimeType(StartDateTimeType::IMMEDIATELY);
        $lineItem->setEndDateTime(
            AdManagerDateTimes::fromDateTime(
                new DateTime('+1 month', new DateTimeZone('America/New_York'))
            )
        );

        // Set the cost per day to $1.
        $lineItem->setCostType(CostType::CPD);
        $lineItem->setCostPerUnit(new Money('USD', 1000000));

        // Set the percentage to be 100%.
        $goal = new Goal();
        $goal->setUnits(100);
        $goal->setGoalType(GoalType::DAILY);
        $lineItem->setPrimaryGoal($goal);

        // Create the line items on the server.
        $results = $lineItemService->createLineItems([$lineItem]);

        // Print out some information for each created line item.
        foreach ($results as $i => $lineItem) {
            printf(
                "%d) Video line item with ID %d, belonging to order ID %d," .
                " and name '%s' was created.%s",
                $i,
                $lineItem->getId(),
                $lineItem->getOrderId(),
                $lineItem->getName(),
                PHP_EOL
            );
        }
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()
            ->build();

        // Construct an API session configured from an `adsapi_php.ini` file
        // and the OAuth2 credentials above.
        $session = (new AdManagerSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        self::runExample(
            new ServiceFactory(),
            $session,
            intval(self::ORDER_ID),
            intval(self::AD_UNIT_ID),
            intval(self::CONTENT_ID),
            intval(self::CONTENT_BUNDLE_ID),
            intval(self::CMS_METADATA_VALUE_ID)
        );
    }
}

CreateVideoLineItems::main();
