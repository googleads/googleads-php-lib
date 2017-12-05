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
namespace Google\AdsApi\Examples\AdWords\v201708\Extensions;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201708\cm\CustomerExtensionSetting;
use Google\AdsApi\AdWords\v201708\cm\CustomerExtensionSettingOperation;
use Google\AdsApi\AdWords\v201708\cm\CustomerExtensionSettingService;
use Google\AdsApi\AdWords\v201708\cm\DayOfWeek;
use Google\AdsApi\AdWords\v201708\cm\ExtensionSetting;
use Google\AdsApi\AdWords\v201708\cm\FeedItemCampaignTargeting;
use Google\AdsApi\AdWords\v201708\cm\FeedItemScheduling;
use Google\AdsApi\AdWords\v201708\cm\FeedItemSchedule;
use Google\AdsApi\AdWords\v201708\cm\FeedType;
use Google\AdsApi\AdWords\v201708\cm\MinuteOfHour;
use Google\AdsApi\AdWords\v201708\cm\Money;
use Google\AdsApi\AdWords\v201708\cm\MoneyWithCurrency;
use Google\AdsApi\AdWords\v201708\cm\Operator;
use Google\AdsApi\AdWords\v201708\cm\PriceFeedItem;
use Google\AdsApi\AdWords\v201708\cm\PriceExtensionType;
use Google\AdsApi\AdWords\v201708\cm\PriceExtensionPriceQualifier;
use Google\AdsApi\AdWords\v201708\cm\PriceExtensionPriceUnit;
use Google\AdsApi\AdWords\v201708\cm\PriceTableRow;
use Google\AdsApi\AdWords\v201708\cm\UrlList;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds a price extension and associates it with an account.
 * Campaign targeting is also set using the specified campaign ID.
 * To get campaigns, run GetCampaigns.php.
 */
class AddPrices {

  const CAMPAIGN_ID = 'INSERT_CAMPAIGN_ID_HERE';
  const MICROS_PER_DOLLAR = 1000000;

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $campaignId) {
    $customerExtensionSettingService =
        $adWordsServices->get($session, CustomerExtensionSettingService::class);

    // Create the price extension feed item.
    $priceFeedItem = new PriceFeedItem();
    $priceFeedItem->setPriceExtensionType(PriceExtensionType::SERVICES);
    // Price qualifer is optional.
    $priceFeedItem->setPriceQualifier(PriceExtensionPriceQualifier::FROM);
    $priceFeedItem->setTrackingUrlTemplate(
        'http://tracker.example.com/?u={lpurl}');
    $priceFeedItem->setLanguage('en');
    $priceFeedItem->setCampaignTargeting(
        new FeedItemCampaignTargeting($campaignId));
    $priceFeedItem->setScheduling(new FeedItemScheduling([
        new FeedItemSchedule(DayOfWeek::SUNDAY, 10, MinuteOfHour::ZERO, 18,
            MinuteOfHour::ZERO),
        new FeedItemSchedule(DayOfWeek::SATURDAY, 10, MinuteOfHour::ZERO, 22,
            MinuteOfHour::ZERO)
    ]));

    // To create a price extension, at least three table rows are needed.
    $tableRows = [];
    $tableRows[] = self::createPriceTableRow(
        'Scrubs',
        'Body Scrub, Salt Scrub',
        'http://www.example.com/scrubs',
        60 * self::MICROS_PER_DOLLAR,
        'USD',
        PriceExtensionPriceUnit::PER_HOUR,
        'http://m.example.com/scrubs'
    );
    $tableRows[] = self::createPriceTableRow(
        'Hair Cuts',
        'Once a month',
        'http://www.example.com/haircuts',
        75 * self::MICROS_PER_DOLLAR,
        'USD',
        PriceExtensionPriceUnit::PER_MONTH,
        'http://m.example.com/haircuts'
    );
    $tableRows[] = self::createPriceTableRow(
        'Skin Care Package',
        'Four times a month',
        'http://www.example.com/skincarepackage',
        250 * self::MICROS_PER_DOLLAR,
        'USD',
        PriceExtensionPriceUnit::PER_MONTH
    );

    $priceFeedItem->setTableRows($tableRows);

    // Create your customer extension settings. This associates the price
    // extension to your account.
    $customerExtensionSetting = new CustomerExtensionSetting();
    $customerExtensionSetting->setExtensionType(FeedType::PRICE);
    $customerExtensionSetting->setExtensionSetting(new ExtensionSetting());
    $customerExtensionSetting->getExtensionSetting()->setExtensions(
        [$priceFeedItem]);

    // Create a customer extension setting operation and add it to the list.
    $operation = new CustomerExtensionSettingOperation();
    $operation->setOperator(Operator::ADD);
    $operation->setOperand($customerExtensionSetting);
    $operations = [$operation];

    // Add the price extension on the server.
    $result = $customerExtensionSettingService->mutate($operations);

    // Print out some information about the added extension setting.
    $newExtensionSetting = $result->getValue()[0];
    printf("Extension setting with type '%s' was added to your account.\n",
        $newExtensionSetting->getExtensionType());
  }

  /**
   * Creates a new price table row with the specified attributes.
   *
   * @param string $header the header of price table row
   * @param string $description the description of price table row
   * @param string $finalUrl the final URL of price table row
   * @param integer $priceInMicros the price in micro amount
   * @param string $currencyCode the 3-character currency code
   * @param string $priceUnit the unit of shown price
   * @param string|null $finalMobileUrl the mobile final URL of price table row
   * @return PriceTableRow the created price table row
   */
  private static function createPriceTableRow(
      $header,
      $description,
      $finalUrl,
      $priceInMicros,
      $currencyCode,
      $priceUnit,
      $finalMobileUrl = null
  ) {
    $priceTableRow = new PriceTableRow();
    $priceTableRow->setHeader($header);
    $priceTableRow->setDescription($description);
    $priceTableRow->setFinalUrls(new UrlList([$finalUrl]));
    $money = new Money();
    $money->setMicroAmount($priceInMicros);
    $moneyWithCurrency = new MoneyWithCurrency();
    $moneyWithCurrency->setMoney($money);
    $moneyWithCurrency->setCurrencyCode($currencyCode);
    $priceTableRow->setPrice($moneyWithCurrency);
    $priceTableRow->setPriceUnit($priceUnit);

    if ($finalMobileUrl !== null) {
      $priceTableRow->setFinalMobileUrls(new UrlList([$finalMobileUrl]));
    }
    return $priceTableRow;
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
        new AdWordsServices(), $session, intval(self::CAMPAIGN_ID));
  }
}

AddPrices::main();
