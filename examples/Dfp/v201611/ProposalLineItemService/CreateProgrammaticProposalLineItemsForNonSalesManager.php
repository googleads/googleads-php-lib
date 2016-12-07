<?php
/**
 * This example creates a new programmatic proposal line item in a network
 * without sales management.
 *
 * PHP version 5
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
 * @package    GoogleApiAdsDfp
 * @subpackage v201611
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
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
require_once 'Google/Api/Ads/Dfp/Util/v201611/DateTimeUtils.php';
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

// Set the ID of the proposal that the proposal line items will belong to.
$proposalId = 'INSERT_PROPOSAL_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  $proposalLineItemService = $user->GetService('ProposalLineItemService',
      'v201611');
  $networkService = $user->GetService('NetworkService', 'v201611');

  // Create a standard proposal line items.
  $proposalLineItem = new ProposalLineItem();
  $proposalLineItem->name = 'Proposal line item #' . uniqid();
  $proposalLineItem->proposalId = $proposalId;
  $proposalLineItem->lineItemType = 'STANDARD';

  // Set required Marketplace information.
  $proposalLineItemMarketplaceInfo = new ProposalLineItemMarketplaceInfo();
  $proposalLineItemMarketplaceInfo->adExchangeEnvironment = 'DISPLAY';
  $proposalLineItem->marketplaceInfo = $proposalLineItemMarketplaceInfo;

  // Set the length of the proposal line item to run.
  $proposalLineItem->startDateTime = DateTimeUtils::ToDfpDateTime(
      new DateTime('now', new DateTimeZone('America/New_York')));
  $proposalLineItem->endDateTime = DateTimeUtils::ToDfpDateTime(
      new DateTime('+1 month', new DateTimeZone('America/New_York')));

  // Set delivery specifications for the proposal line item.
  $proposalLineItem->deliveryRateType = 'EVENLY';

  // Set pricing for the proposal line item for 1000 impressions at a CPM of $2
  // for a total value of $2.
  $goal = new Goal();
  $goal->units = 1000;
  $goal->unitType = 'IMPRESSIONS';
  $proposalLineItem->goal = $goal;
  $proposalLineItem->netCost = new Money('USD', 2000000);
  $proposalLineItem->netRate = new Money('USD', 2000000);
  $proposalLineItem->rateType = 'CPM';

  // Set the size of creatives that can be associated with the proposal line
  // item.
  $creativePlaceholder = new CreativePlaceholder();
  $creativePlaceholder->size = new Size(300, 250, false);
  $proposalLineItem->creativePlaceholders = array($creativePlaceholder);

  // Create ad unit targeting for the root ad unit (i.e. the whole network).
  $rootAdUnitId = $networkService->getCurrentNetwork()->effectiveRootAdUnitId;
  $inventoryTargeting = new InventoryTargeting();
  $adUnitTargeting = new AdUnitTargeting();
  $adUnitTargeting->adUnitId = $rootAdUnitId;
  $adUnitTargeting->includeDescendants = true;
  $inventoryTargeting->targetedAdUnits = array($adUnitTargeting);

  // Create targeting.
  $targeting = new Targeting();
  $targeting->inventoryTargeting = $inventoryTargeting;
  $proposalLineItem->targeting = $targeting;

  // Create the proposal line item on the server.
  $proposalLineItems = $proposalLineItemService->createProposalLineItems(
      array($proposalLineItem));

  foreach ($proposalLineItems as $createdProposalLineItem) {
    printf(
        "A programmatic proposal line item with ID %d and name '%s' was "
            . "created.\n",
        $createdProposalLineItem->id,
        $createdProposalLineItem->name
    );
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}
