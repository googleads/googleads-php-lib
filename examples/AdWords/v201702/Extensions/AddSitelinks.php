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
namespace Google\AdsApi\Examples\AdWords\v201702\Extensions;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201702\cm\CampaignExtensionSetting;
use Google\AdsApi\AdWords\v201702\cm\CampaignExtensionSettingOperation;
use Google\AdsApi\AdWords\v201702\cm\CampaignExtensionSettingService;
use Google\AdsApi\AdWords\v201702\cm\ExtensionSetting;
use Google\AdsApi\AdWords\v201702\cm\FeedItemDevicePreference;
use Google\AdsApi\AdWords\v201702\cm\FeedItemGeoRestriction;
use Google\AdsApi\AdWords\v201702\cm\FeedItemScheduling;
use Google\AdsApi\AdWords\v201702\cm\FeedItemSchedule;
use Google\AdsApi\AdWords\v201702\cm\FeedType;
use Google\AdsApi\AdWords\v201702\cm\GeoRestriction;
use Google\AdsApi\AdWords\v201702\cm\Keyword;
use Google\AdsApi\AdWords\v201702\cm\KeywordMatchType;
use Google\AdsApi\AdWords\v201702\cm\Location;
use Google\AdsApi\AdWords\v201702\cm\Operator;
use Google\AdsApi\AdWords\v201702\cm\SitelinkFeedItem;
use Google\AdsApi\AdWords\v201702\cm\UrlList;
use Google\AdsApi\AdWords\v201702\mcm\CustomerService;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds a sitelinks feed and associates it with a campaign.
 * To get campaigns, run BasicOperations/GetCampaigns.php.
 */
class AddSitelinks {

  const CAMPAIGN_ID = 'INSERT_CAMPAIGN_ID_HERE';

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $campaignId) {
    $campaignExtensionSettingService =
        $adWordsServices->get($session, CampaignExtensionSettingService::class);
    $customerService =
        $adWordsServices->get($session, CustomerService::class);

    // Find the matching customer and its time zone. The getCustomers method
    // will return a single Customer object corresponding to the user's
    // clientCustomerId.
    $customers = $customerService->getCustomers();
    $customer = $customers[0];
    printf("Found customer ID %d with time zone %s.\n",
        $customer->getCustomerId(), $customer->getDateTimeZone());

    $sitelinks = [];
    // Create a simple sitelink.
    $sitelink1 = new SitelinkFeedItem();
    $sitelink1->setSitelinkText('Store Hours');
    $sitelink1->setSitelinkFinalUrls(
        new UrlList(['http://www.example.com/storehours']));
    $sitelinks[] = $sitelink1;

    // This one to show the Thanksgiving specials link only from 20 - 27 Nov.
    $sitelink2 = new SitelinkFeedItem();
    $sitelink2->setSitelinkText('Thanksgiving Specials');
    $sitelink2->setSitelinkFinalUrls(
        new UrlList(['http://www.example.com/thanksgiving']));
    $sitelink2->setStartTime(
        date('Y') . '1120 000000 ' . $customer->getDateTimeZone());
    $sitelink2->setEndTime(
        date('Y') . '1127 235959 ' . $customer->getDateTimeZone());
    // Target this sitelink for United States only. See
    // https://developers.google.com/adwords/api/docs/appendix/geotargeting
    // for valid geolocation codes.
    $location = new Location();
    $location->setId(2840);
    $sitelink2->setGeoTargeting($location);

    // Restrict targeting only to people physically within the United States.
    // Otherwise, this could also show to people interested in the United States
    // but not physically located there.
    $sitelink2->setGeoTargetingRestriction(
        new FeedItemGeoRestriction(GeoRestriction::LOCATION_OF_PRESENCE));
    $sitelinks[] = $sitelink2;

    // Sitelink targetted on high end mobile.
    $sitelink3 = new SitelinkFeedItem();
    $sitelink3->setSitelinkText('Wifi available');
    $sitelink3->setSitelinkFinalUrls(
        new UrlList(['http://www.example.com/mobile/wifi']));
    $sitelink3->setDevicePreference(new FeedItemDevicePreference(30001));
    // Target this sitelink only when the ad is triggered by the keyword
    // "free wifi".
    $keyword = new Keyword();
    $keyword->setText('free wifi');
    $keyword->setMatchType(KeywordMatchType::BROAD);
    $sitelink3->setKeywordTargeting($keyword);
    $sitelinks[] = $sitelink3;

    // Show the happy hours link only during Mon - Fri 6PM to 9PM.
    $sitelink4 = new SitelinkFeedItem();
    $sitelink4->setSitelinkText('Happy Hours Now!');
    $sitelink4->setSitelinkFinalUrls(
        new UrlList(['http://www.example.com/happyhours']));
    $sitelink4->setScheduling(new FeedItemScheduling([
        new FeedItemSchedule('MONDAY', 18, 'ZERO', 21, 'ZERO'),
        new FeedItemSchedule('TUESDAY', 18, 'ZERO', 21, 'ZERO'),
        new FeedItemSchedule('WEDNESDAY', 18, 'ZERO', 21, 'ZERO'),
        new FeedItemSchedule('THURSDAY', 18, 'ZERO', 21, 'ZERO'),
        new FeedItemSchedule('FRIDAY', 18, 'ZERO', 21, 'ZERO')
    ]));
    $sitelinks[] = $sitelink4;

    // Create your campaign extension settings. This associates the sitelinks
    // to your campaign.
    $campaignExtensionSetting = new CampaignExtensionSetting();
    $campaignExtensionSetting->setCampaignId($campaignId);
    $campaignExtensionSetting->setExtensionType(FeedType::SITELINK);
    $campaignExtensionSetting->setExtensionSetting(new ExtensionSetting());
    $campaignExtensionSetting->getExtensionSetting()->setExtensions($sitelinks);

    // Create a campaign extension setting operation and add it to the list.
    $operation = new CampaignExtensionSettingOperation();
    $operation->setOperator(Operator::ADD);
    $operation->setOperand($campaignExtensionSetting);
    $operations = [$operation];

    // Add the sitelinks on the server.
    $result = $campaignExtensionSettingService->mutate($operations);

    // Print out some information about the added extension setting.
    $newExtensionSetting = $result->getValue()[0];
    printf(
        "Extension setting with type '%s' was added to campaign ID %d\n",
        $newExtensionSetting->getExtensionType(),
        $newExtensionSetting->getCampaignId()
    );
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

AddSitelinks::main();
