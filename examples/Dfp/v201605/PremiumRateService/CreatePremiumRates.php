<?php
/**
 * This example creates a new premium rate for a specific rate card. To
 * determine which premium rates exist, run GetAllPremiumRates.php.
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
require_once dirname(__FILE__) . '/../../../Common/ExampleUtils.php';

// Set the ID of the rate card to add premium rates to.
$rateCardId = 'INSERT_RATE_CARD_ID_HERE';

try {
  // Get DfpUser from credentials in "../auth.ini"
  // relative to the DfpUser.php file's directory.
  $user = new DfpUser();

  // Log SOAP XML request and response.
  $user->LogDefaults();

  // Get the PremiumRateService.
  $premiumRateService = $user->GetService('PremiumRateService', 'v201605');

  $premiumRate = new PremiumRate();

  // Create an ad unit premium to apply to the rate card.
  $adUnitPremiumFeature = new AdUnitPremiumFeature();

  // Create a CPM based premium rate value with adjustments in micro amounts.
  // This will adjust a CPM priced proposal line item that has inventory
  // targeting specified by 2 units of the currency associated with the rate
  // card (this comes from absolute value adjustment).
  $cpmPremiumRateValue = new PremiumRateValue();
  $cpmPremiumRateValue->premiumFeature = $adUnitPremiumFeature;
  $cpmPremiumRateValue->rateType = 'CPM';
  $cpmPremiumRateValue->adjustmentSize = 2000000;
  $cpmPremiumRateValue->adjustmentType = 'ABSOLUTE_VALUE';

  // Create a CPC based premium rate value with adjustments in milli amounts.
  // This will adjust a CPC priced proposal line item that has inventory
  // targeting specified by 10% of the cost associated with the rate card (this
  // comes from a percentage adjustment).
  $cpcPremiumRateValue = new PremiumRateValue();
  $cpcPremiumRateValue->premiumFeature = $adUnitPremiumFeature;
  $cpcPremiumRateValue->rateType = 'CPC';
  $cpcPremiumRateValue->adjustmentSize = 10000;
  $cpcPremiumRateValue->adjustmentType = 'PERCENTAGE';

  // Associate premium rate with the rate card and set premium information. This
  // premium will apply for proposal line items targeting 'any' ad unit for both
  // CPM and CPC rate types.
  $premiumRate->rateCardId = $rateCardId;
  $premiumRate->pricingMethod = 'ANY_VALUE';
  $premiumRate->premiumFeature = $adUnitPremiumFeature;
  $premiumRate->premiumRateValues =
      array($cpmPremiumRateValue, $cpcPremiumRateValue);

  // Create the premium rate on the server.
  $premiumRates = $premiumRateService->createPremiumRates(array($premiumRate));

  foreach ($premiumRates as $createdPremiumRate) {
    printf("A premium rate with ID %d, of type '%s', assigned to rate card "
        . "with ID %d was created.\n",
        $createdPremiumRate->id,
        get_class($createdPremiumRate->premiumFeature),
        $createdPremiumRate->rateCardId
    );
  }
} catch (OAuth2Exception $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (ValidationException $e) {
  ExampleUtils::CheckForOAuth2Errors($e);
} catch (Exception $e) {
  printf("%s\n", $e->getMessage());
}

