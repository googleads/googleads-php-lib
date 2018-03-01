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

namespace Google\AdsApi\Examples\AdWords\v201802\Remarketing;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201802\cm\OfflineCallConversionFeed;
use Google\AdsApi\AdWords\v201802\cm\OfflineCallConversionFeedOperation;
use Google\AdsApi\AdWords\v201802\cm\OfflineCallConversionFeedService;
use Google\AdsApi\AdWords\v201802\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This code example imports offline call conversion values for calls related
 * to the ads in your account.
 */
class UploadOfflineCallConversions
{

    const CALLER_ID = 'INSERT_CALLER_ID_HERE';
    // For times use the format yyyyMMdd HHmmss tz. For more details on formats,
    // see:
    // https://developers.google.com/adwords/api/docs/appendix/codes-formats#date-and-time-formats
    // For time zones, see:
    // https://developers.google.com/adwords/api/docs/appendix/codes-formats#timezone-ids
    const CALL_START_TIME = 'INSERT_CALL_START_TIME_HERE';
    const CONVERSION_NAME = 'INSERT_CONVERSION_NAME_HERE';
    const CONVERSION_TIME = 'INSERT_CONVERSION_TIME_HERE';
    const CONVERSION_VALUE = 'INSERT_CONVERSION_VALUE_HERE';

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $callerId,
        $callStartTime,
        $conversionName,
        $conversionTime,
        $conversionValue
    ) {
        $offlineCallConversionService = $adWordsServices->get(
            $session,
            OfflineCallConversionFeedService::class
        );

        // Associate offline call conversions with the existing named conversion
        // tracker. If this tracker was newly created, it may be a few hours before
        // it can accept conversions.
        $feed = new OfflineCallConversionFeed();
        $feed->setCallerId($callerId);
        $feed->setCallStartTime($callStartTime);
        $feed->setConversionName($conversionName);
        $feed->setConversionTime($conversionTime);
        $feed->setConversionValue($conversionValue);

        $offlineCallConversionOperations = [];
        $offlineCallConversionOperation = new OfflineCallConversionFeedOperation();
        $offlineCallConversionOperation->setOperator(Operator::ADD);
        $offlineCallConversionOperation->setOperand($feed);
        $offlineCallConversionOperations[] = $offlineCallConversionOperation;

        // This example uploads only one call conversion, but you can upload
        // multiple call conversions by passing additional operations.
        $result = $offlineCallConversionService->mutate($offlineCallConversionOperations);

        $feed = $result->getValue()[0];
        printf(
            "Uploaded offline call conversion value of '%s' for caller ID '%s'.\n",
            $feed->getConversionValue(),
            $feed->getCallerId()
        );
    }


    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()->withOAuth2Credential($oAuth2Credential)->build();
        self::runExample(
            new AdWordsServices(),
            $session,
            self::CALLER_ID,
            self::CALL_START_TIME,
            self::CONVERSION_NAME,
            self::CONVERSION_TIME,
            floatval(self::CONVERSION_VALUE)
        );
    }
}

UploadOfflineCallConversions::main();
