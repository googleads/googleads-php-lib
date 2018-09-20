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

namespace Google\AdsApi\Examples\AdWords\v201809\Remarketing;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201809\cm\AdWordsConversionTracker;
use Google\AdsApi\AdWords\v201809\cm\ConversionTrackerCategory;
use Google\AdsApi\AdWords\v201809\cm\ConversionTrackerOperation;
use Google\AdsApi\AdWords\v201809\cm\ConversionTrackerService;
use Google\AdsApi\AdWords\v201809\cm\ConversionTrackerStatus;
use Google\AdsApi\AdWords\v201809\cm\Operator;
use Google\AdsApi\AdWords\v201809\cm\UploadConversion;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds an AdWords conversion tracker and an upload conversion
 * tracker.
 */
class AddConversionTrackers
{

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session
    ) {
        $conversionTrackerService = $adWordsServices->get($session, ConversionTrackerService::class);
        $conversionTrackers = [];

        // Create an AdWords conversion tracker.
        $adWordsConversionTracker = new AdWordsConversionTracker();
        $adWordsConversionTracker->setName(
            'Interplanetary Cruise Conversion #' . uniqid()
        );

        // Set additional settings (optional).
        $adWordsConversionTracker->setStatus(ConversionTrackerStatus::ENABLED);
        $adWordsConversionTracker->setCategory(
            ConversionTrackerCategory::DEFAULT_VALUE
        );
        $adWordsConversionTracker->setViewthroughLookbackWindow(15);
        $adWordsConversionTracker->setDefaultRevenueValue(23.41);
        $adWordsConversionTracker->setAlwaysUseDefaultRevenueValue(true);
        $conversionTrackers[] = $adWordsConversionTracker;

        // Create an upload conversion for offline conversion imports.
        $uploadConversion = new UploadConversion();
        // Set an appropriate category. This field is optional, and will be set to
        // DEFAULT if not mentioned.
        $uploadConversion->setCategory(ConversionTrackerCategory::LEAD);
        $uploadConversion->setName('Upload Conversion # ' . uniqid());
        $uploadConversion->setViewthroughLookbackWindow(30);
        $uploadConversion->setCtcLookbackWindow(90);

        // Optional: Set the default currency code to use for conversions
        // that do not specify a conversion currency. This must be an ISO 4217
        // 3-character currency code such as "EUR" or "USD".
        // If this field is not set on this UploadConversion, AdWords will use
        // the account's currency.
        $uploadConversion->setDefaultRevenueCurrencyCode('EUR');

        // Optional: Set the default revenue value to use for conversions
        // that do not specify a conversion value. Note that this value
        // should NOT be in micros.
        $uploadConversion->setDefaultRevenueValue(2.50);

        // Optional: To upload fractional conversion credits, mark the upload
        // conversion as externally attributed. See
        // https://developers.google.com/adwords/api/docs/guides/conversion-tracking#importing_externally_attributed_conversions
        // to learn more about importing externally attributed conversions.

        // uploadConversion->setIsExternallyAttributed(true);

        $conversionTrackers[] = $uploadConversion;

        // Create conversion tracker operations and add them to the list.
        $operations = [];
        foreach ($conversionTrackers as $conversionTracker) {
            $operation = new ConversionTrackerOperation();
            $operation->setOperand($conversionTracker);
            $operation->setOperator(Operator::ADD);
            $operations[] = $operation;
        }

        // Create the conversion trackers on the server.
        $result = $conversionTrackerService->mutate($operations);

        // Print out some information about created trackers.
        foreach ($result->getValue() as $conversionTracker) {
            printf(
                "Conversion with ID %d, name '%s', status '%s' and category '%s' was added.\n",
                $conversionTracker->getId(),
                $conversionTracker->getName(),
                $conversionTracker->getStatus(),
                $conversionTracker->getCategory()
            );
            if ($conversionTracker instanceof AdWordsConversionTracker) {
                printf(
                    "Google global site tag:\n%s\n\n",
                    $conversionTracker->getGoogleGlobalSiteTag()
                );
                printf(
                    "Google event snippet:\n%s\n\n",
                    $conversionTracker->getGoogleEventSnippet()
                );
            }
        }
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()->withOAuth2Credential($oAuth2Credential)->build();
        self::runExample(new AdWordsServices(), $session);
    }
}

AddConversionTrackers::main();
