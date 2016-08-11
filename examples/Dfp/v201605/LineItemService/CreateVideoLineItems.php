<?php
/**
 * This example creates a new line item for a video environment. To determine
 * which line items exist, run GetAllLineItems.php. To determine which orders
 * exist, run GetAllOrders.php. To determine which content metadata key
 * hierarchies exist, run GetAllContentMetadataKeyHierarchies.php. To determine
 * which ad units exist, run GetAllAdUnits.php.
 *
 * PHP version 5
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
 * @package    GoogleApiAdsDfp
 * @subpackage v201605
 * @category   WebServices
 * @copyright  2014, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */
error_reporting(E_STRICT | E_ALL);

// You can set the include path to src directory or reference
// DfpUser.php directly via require_once.
// $path = '/path/to/dfp_api_php_lib/src';
$path = dirname(__FILE__) . '/../../../../src';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

require_once 'Google/Api/Ads/Dfp/Lib/DfpUser.php';
require_once 'Google/Api/Ads/Dfp/Util/v201605/DateTimeUtils.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

// Set the ID of the order that the line item will belong to.
$orderId = 'INSERT_ORDER_ID_HERE';

// Set the ID of the ad unit that the line item will target.
$targetedVideoAdUnitId = 'INSERT_TARGETED_VIDEO_AD_UNIT_ID_HERE';

// Set the custom targeting value ID representing the metadata on the content to
// target. This would typically be from a key representing a "genre" and the
// value representing something like "comedy". The value must be from a key in a
// content metadata key hierarchy.
$contentCustomTargetingValueId = 'INSERT_CUSTOM_TARGETING_VALUE_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the LineItemService.
  $lineItemService = $user->GetService('LineItemService', 'v201605');

  // Create content targeting.
  $contentMetadataTargeting = new ContentMetadataKeyHierarchyTargeting();
  $contentMetadataTargeting->customTargetingValueIds =
      array($contentCustomTargetingValueId);
  $contentTargeting = new ContentTargeting();
  $contentTargeting->targetedContentMetadata = array($contentMetadataTargeting);

  // Create inventory targeting.
  $inventoryTargeting = new InventoryTargeting();
  $inventoryTargeting->targetedAdUnits =
      array(new AdUnitTargeting($targetedVideoAdUnitId, true));

  // Create video position targeting.
  $videoPosition = new VideoPosition;
  $videoPosition->positionType = 'PREROLL';
  $videoPositionTarget = new VideoPositionTarget();
  $videoPositionTarget->videoPosition = $videoPosition;
  $videoPositionTargeting = new VideoPositionTargeting();
  $videoPositionTargeting->targetedPositions = array($videoPositionTarget);

  // Create targeting.
  $targeting = new Targeting();
  $targeting->contentTargeting = $contentTargeting;
  $targeting->inventoryTargeting = $inventoryTargeting;
  $targeting->videoPositionTargeting = $videoPositionTargeting;

  // Create local line item object.
  $lineItem = new LineItem();
  $lineItem->name = sprintf("Video line item #%s", uniqid());
  $lineItem->orderId = $orderId;
  $lineItem->targeting = $targeting;
  $lineItem->lineItemType = 'SPONSORSHIP';
  $lineItem->allowOverbook = true;

  // Set the environment type to video.
  $lineItem->environmentType = 'VIDEO_PLAYER';

  // Set the creative rotation type to optimized.
  $lineItem->creativeRotationType = 'OPTIMIZED';

  // Create the master creative placeholder.
  $creativeMasterPlaceholder = new CreativePlaceholder();
  $creativeMasterPlaceholder->size = new Size(400, 300, false);

  // Create companion creative placeholders.
  $companionCreativePlaceholder1 = new CreativePlaceholder();
  $companionCreativePlaceholder1->size = new Size(300, 250, false);

  $companionCreativePlaceholder2 = new CreativePlaceholder();
  $companionCreativePlaceholder2->size = new Size(728, 90, false);

  // Set companion creative placeholders.
  $creativeMasterPlaceholder->companions =
      array($companionCreativePlaceholder1, $companionCreativePlaceholder2);

  // Set the size of creatives that can be associated with this line item.
  $lineItem->creativePlaceholders = array($creativeMasterPlaceholder);

  // Set delivery of video companions to optional.
  $lineItem->companionDeliveryOption = 'OPTIONAL';

  // Set the length of the line item to run.
  $lineItem->startDateTimeType = 'IMMEDIATELY';
  $lineItem->endDateTime = DateTimeUtils::ToDfpDateTime(
      new DateTime('+1 month', new DateTimeZone('America/New_York')));

  // Set the cost per day to $1.
  $lineItem->costType = 'CPD';
  $lineItem->costPerUnit = new Money('USD', 1000000);

  // Set the percentage to be 100%.
  $goal = new Goal();
  $goal->units = 100;
  $goal->goalType = 'DAILY';
  $lineItem->primaryGoal = $goal;

  // Create the line item on the server.
  $lineItems = $lineItemService->createLineItems($lineItem);

  // Display results.
  foreach ($lineItems as $createdLineItem) {
    printf("A line item with with ID %d, belonging to order ID %d, and name "
        . "'%s' was created.\n",
        $createdLineItem->id,
        $createdLineItem->orderId,
        $createdLineItem->name
    );
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

