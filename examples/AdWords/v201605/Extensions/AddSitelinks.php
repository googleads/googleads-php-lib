<?php
/**
 * This example adds a sitelinks feed and associates it with a campaign.
 * To get campaigns, run GetCampaigns.php.
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
 * @subpackage v201605
 * @category   WebServices
 * @copyright  2015, Google Inc. All Rights Reserved.
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
 * @param string $campaignId the ID of the campaign to add the sitelinks to
 */
function AddSitelinksExample(AdWordsUser $user, $campaignId) {
  // Get the services and load the required classes.
  $campaignExtensionSettingService =
      $user->GetService('CampaignExtensionSettingService', ADWORDS_VERSION);
  $customerService = $user->GetService('CustomerService', ADWORDS_VERSION);
  $customer = $customerService->get();

  // Create the sitelinks:

  // A simple one.
  $sitelink1 = new SitelinkFeedItem();
  $sitelink1->sitelinkText = 'Store Hours';
  $sitelink1->sitelinkFinalUrls =
      new UrlList(array('http://www.example.com/storehours'));

  // This one to show the Thanksgiving specials link only from 20 - 27 Nov.
  $sitelink2 = new SitelinkFeedItem();
  $sitelink2->sitelinkText = 'Thanksgiving Specials';
  $sitelink2->sitelinkFinalUrls =
      new UrlList(array('http://www.example.com/thanksgiving'));
  $sitelink2->startTime = date('Y') . '1120 000000 ' . $customer->dateTimeZone;
  $sitelink2->endTime = date('Y') . '1127 235959 ' . $customer->dateTimeZone;
  // Target this sitelink for United States only. See
  // https://developers.google.com/adwords/api/docs/appendix/geotargeting
  // for valid geolocation codes.
  $location = new Location();
  $location->id = 2840;
  $sitelink2->geoTargeting = $location;

  // Sitelink targetted on high end mobile.
  $sitelink3 = new SitelinkFeedItem();
  $sitelink3->sitelinkText = 'Wifi available';
  $sitelink3->sitelinkFinalUrls =
      new UrlList(array('http://www.example.com/mobile/wifi'));
  $sitelink3->devicePreference = 30001;
  // Target this sitelink only when the ad is triggered by the keyword
  // "free wifi".
  $keyword = new Keyword();
  $keyword->text = 'free wifi';
  $keyword->matchType = 'BROAD';
  $sitelink3->keywordTargeting = $keyword;

  // Show the happy hours link only during Mon - Fri 6PM to 9PM.
  $sitelink4 = new SitelinkFeedItem();
  $sitelink4->sitelinkText = 'Happy Hours Now!';
  $sitelink4->sitelinkFinalUrls =
      new UrlList(array('http://www.example.com/happyhours'));
  $sitelink4->scheduling = new FeedItemScheduling(array(
      new FeedItemSchedule('MONDAY', 18, 'ZERO', 21, 'ZERO'),
      new FeedItemSchedule('TUESDAY', 18, 'ZERO', 21, 'ZERO'),
      new FeedItemSchedule('WEDNESDAY', 18, 'ZERO', 21, 'ZERO'),
      new FeedItemSchedule('THURSDAY', 18, 'ZERO', 21, 'ZERO'),
      new FeedItemSchedule('FRIDAY', 18, 'ZERO', 21, 'ZERO')
  ));

  // Create your campaign extension settings. This associates the sitelinks
  // to your campaign.
  $campaignExtensionSetting = new CampaignExtensionSetting();
  $campaignExtensionSetting->campaignId = $campaignId;
  $campaignExtensionSetting->extensionType = 'SITELINK';
  $campaignExtensionSetting->extensionSetting = new ExtensionSetting();
  $campaignExtensionSetting->extensionSetting->extensions = array();
  $campaignExtensionSetting->extensionSetting->extensions[] = $sitelink1;
  $campaignExtensionSetting->extensionSetting->extensions[] = $sitelink2;
  $campaignExtensionSetting->extensionSetting->extensions[] = $sitelink3;
  $campaignExtensionSetting->extensionSetting->extensions[] = $sitelink4;

  // Create operation.
  $operation = new CampaignExtensionSettingOperation();
  $operation->operator = 'ADD';
  $operation->operand = $campaignExtensionSetting;

  $operations = array($operation);

  // Add the sitelinks.
  $result = $campaignExtensionSettingService->mutate($operations);

  // Print the results.
  $newExtensionSetting = $result->value[0];
  printf('Extension setting with type "%s" was added to campaign ID %d\n',
      $newExtensionSetting->extensionType, $newExtensionSetting->campaignId);

  return $newExtensionSetting;
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
  AddSitelinksExample($user, $campaignId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
