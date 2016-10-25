<?php
/**
 * This code example creates a click-to-download ad, also known as an
 * app promotion ad to a given ad group. To list ad groups, run
 * GetAdGroups.php.
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
 * @subpackage v201605
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

// Enter parameters required by the code example.
$adGroupId = 'INSERT_ADGROUP_ID_HERE';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 * @param string $adGroupId the ID of the ad group to add the ad to
 */
function AddClickToDownloadAd(AdWordsUser $user, $adGroupId) {
  // Get the AdGroupAdService, which loads the required classes.
  $adGroupAdService = $user->GetService('AdGroupAdService', ADWORDS_VERSION);

  // Create the template ad.
  $clickToDownloadAppAd = new TemplateAd();

  $clickToDownloadAppAd->name = 'Ad for demo game';
  $clickToDownloadAppAd->templateId = 353;
  $clickToDownloadAppAd->finalUrls = array(
      'http://play.google.com/store/apps/details?id=com.example.demogame');
  $clickToDownloadAppAd->displayUrl = 'play.google.com';

  // Create the template elements for the ad. You can refer to
  // https://developers.google.com/adwords/api/docs/appendix/templateads
  // for the list of avaliable template fields.
  $headline = new TemplateElementField();
  $headline->name = 'headline';
  $headline->fieldText = 'Enjoy your drive in Mars';
  $headline->type = 'TEXT';

  $description1 = new TemplateElementField();
  $description1->name = 'description1';
  $description1->fieldText = 'Realistic physics simulation';
  $description1->type = 'TEXT';

  $description2 = new TemplateElementField();
  $description2->name = 'description2';
  $description2->fieldText = 'Race against players online';
  $description2->type = 'TEXT';

  $appId = new TemplateElementField();
  $appId->name = 'appId';
  $appId->fieldText = 'com.example.demogame';
  $appId->type = 'TEXT';

  $appStore = new TemplateElementField();
  $appStore->name = 'appStore';
  $appStore->fieldText = '2';
  $appStore->type = 'ENUM';

  $adData = new TemplateElement();
  $adData->uniqueName = 'adData';
  $adData->fields =
      array($headline, $description1, $description2, $appId, $appStore);

  $clickToDownloadAppAd->templateElements = array($adData);

  // Create the adgroupad.
  $clickToDownloadAppAdGroupAd = new AdGroupAd();
  $clickToDownloadAppAdGroupAd->adGroupId = $adGroupId;
  $clickToDownloadAppAdGroupAd->ad = $clickToDownloadAppAd;

  // Optional: Set the status.
  $clickToDownloadAppAdGroupAd->status = 'PAUSED';

  // Create the operation.
  $operation = new AdGroupAdOperation();
  $operation->operator = 'ADD';
  $operation->operand = $clickToDownloadAppAdGroupAd;

  $operations = array($operation);

  // Create the ads.
  $result = $adGroupAdService->mutate($operations);

  foreach ($result->value as $adGroupAd) {
    printf('New click-to-download ad with ID = %d and URL = "%s" ' .
        "was created.\n", $adGroupAd->ad->id, $adGroupAd->ad->finalUrls[0]);
  }
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
  AddClickToDownloadAd($user, $adGroupId);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
