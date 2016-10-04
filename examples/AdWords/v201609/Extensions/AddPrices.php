<?php
/**
 * This example adds a price extension and associates it with an account.
 * Campaign targeting is also set using the specified campaign ID.
 * To get campaigns, run GetCampaigns.php.
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
 * @package    GoogleApiAdsAdWords
 * @subpackage v201609
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
$campaignId = 'INSERT_CAMPAIGN_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $campaignId the ID of campaign the price extension is
 *     targeted to
 */
function AddPricesExample(AdWordsUser $user, $campaignId) {
  // Get the services and load the required classes.
  $customerExtensionSettingService =
      $user->GetService('CustomerExtensionSettingService', ADWORDS_VERSION);

  // Create the price extension feed item.
  $priceFeedItem = new PriceFeedItem();
  $priceFeedItem->priceExtensionType = 'SERVICES';
  // Price qualifer is optional.
  $priceFeedItem->priceQualifier = 'FROM';
  $priceFeedItem->trackingUrlTemplate = 'http://tracker.example.com/?u={lpurl}';
  $priceFeedItem->language = 'en';
  $priceFeedItem->campaignTargeting =
      new FeedItemCampaignTargeting($campaignId);
  $priceFeedItem->scheduling = new FeedItemScheduling(array(
      new FeedItemSchedule('SUNDAY', 10, 'ZERO', 18, 'ZERO'),
      new FeedItemSchedule('SATURDAY', 10, 'ZERO', 22, 'ZERO')
  ));

  // To create a price extension, at least three table rows are needed.
  $tableRows = array();
  $tableRows[] = createPriceTableRow(
      'Scrubs',
      'Body Scrub, Salt Scrub',
      'http://www.example.com/scrubs',
      60 * AdWordsConstants::MICROS_PER_DOLLAR,
      'USD',
      'PER_HOUR'
  );
  $tableRows[] = createPriceTableRow(
      'Hair Cuts',
      'Once a month',
      'http://www.example.com/haircuts',
      75 * AdWordsConstants::MICROS_PER_DOLLAR,
      'USD',
      'PER_MONTH'
  );
  $tableRows[] = createPriceTableRow(
      'Skin Care Package',
      'Four times a month',
      'http://www.example.com/skincarepackage',
      250 * AdWordsConstants::MICROS_PER_DOLLAR,
      'USD',
      'PER_MONTH'
  );

  $priceFeedItem->tableRows = $tableRows;

  // Create your customer extension settings. This associates the price
  // extension to your account.
  $customerExtensionSetting = new CustomerExtensionSetting();
  $customerExtensionSetting->extensionType = 'PRICE';
  $customerExtensionSetting->extensionSetting = new ExtensionSetting();
  $customerExtensionSetting->extensionSetting->extensions =
      array($priceFeedItem);

  // Create operation.
  $operation = new CustomerExtensionSettingOperation();
  $operation->operator = 'ADD';
  $operation->operand = $customerExtensionSetting;

  $operations = array($operation);

  // Add the price extension.
  $result = $customerExtensionSettingService->mutate($operations);

  // Print the results.
  $newExtensionSetting = $result->value[0];
  printf("Extension setting with type '%s' was added to your account.\n",
      $newExtensionSetting->extensionType);
}

/**
 * Creates a new price table row with the specified attributes.
 *
 * @param string $header the header of price table row
 * @param string $description the description of price table row
 * @param string $finalUrl the final url of price table row
 * @param integer $priceInMicros the price in micro amount
 * @param string $currencyCode the 3-character currency code
 * @param string $priceUnit the unit of shown price
 */
function createPriceTableRow($header, $description, $finalUrl, $priceInMicros,
    $currencyCode, $priceUnit) {
  $priceTableRow = new PriceTableRow();
  $priceTableRow->header = $header;
  $priceTableRow->description = $description;
  $priceTableRow->finalUrls = new UrlList(array($finalUrl));
  $priceTableRow->price =
      new MoneyWithCurrency(new Money($priceInMicros), $currencyCode);
  $priceTableRow->priceUnit = $priceUnit;
  return $priceTableRow;
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
  AddPricesExample($user, $campaignId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
