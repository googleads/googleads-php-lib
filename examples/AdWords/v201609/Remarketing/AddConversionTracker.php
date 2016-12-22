<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
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
namespace Google\AdsApi\Examples\AdWords\v201609\Remarketing;

require '../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201609\cm\AdWordsConversionTracker;
use Google\AdsApi\AdWords\v201609\cm\AdWordsConversionTrackerTextFormat;
use Google\AdsApi\AdWords\v201609\cm\ConversionTrackerCategory;
use Google\AdsApi\AdWords\v201609\cm\ConversionTrackerOperation;
use Google\AdsApi\AdWords\v201609\cm\ConversionTrackerService;
use Google\AdsApi\AdWords\v201609\cm\ConversionTrackerStatus;
use Google\AdsApi\AdWords\v201609\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds a new conversion type to the account.
 */
class AddConversionTracker {

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session) {
    $conversionTrackerService =
        $adWordsServices->get($session, ConversionTrackerService::class);

    // Create a conversion tracker.
    $conversionTracker = new AdWordsConversionTracker();
    $conversionTracker->setName(
        'Interplanetary Cruise Conversion #' . uniqid());

    // Set additional settings (optional).
    $conversionTracker->setStatus(ConversionTrackerStatus::ENABLED);
    $conversionTracker->setCategory(ConversionTrackerCategory::DEFAULT_VALUE);
    $conversionTracker->setViewthroughLookbackWindow(15);
    $conversionTracker->setTextFormat(
        AdWordsConversionTrackerTextFormat::HIDDEN);
    $conversionTracker->setConversionPageLanguage('en');
    $conversionTracker->setBackgroundColor('#0000FF');

    // Create a conversion tracker operation and add it to the list.
    $operations = [];
    $operation = new ConversionTrackerOperation();
    $operation->setOperand($conversionTracker);
    $operation->setOperator(Operator::ADD);
    $operations[] = $operation;

    // Create the conversion tracker on the server and print out some
    // information.
    $conversionTracker =
        $conversionTrackerService->mutate($operations)->getValue()[0];
    printf("Conversion type with name '%s' and ID %d was added.\n",
        $conversionTracker->getName(), $conversionTracker->getId());
    printf("Conversion tracker snippet:\n%s\n",
        $conversionTracker->getSnippet());
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
    self::runExample(new AdWordsServices(), $session);
  }
}

AddConversionTracker::main();
