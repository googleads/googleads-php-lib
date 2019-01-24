<?php
/**
 * Copyright 2018 Google LLC
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

namespace Google\AdsApi\Examples\AdWords\v201806\Remarketing;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201806\cm\GclidOfflineConversionAdjustmentFeed;
use Google\AdsApi\AdWords\v201806\cm\OfflineConversionAdjustmentFeedOperation;
use Google\AdsApi\AdWords\v201806\cm\OfflineConversionAdjustmentFeedService;
use Google\AdsApi\AdWords\v201806\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example demonstrates adjusting one conversion, but you can add more
 * than one operation in a single mutate request.
 */
class UploadOfflineConversionAdjustments
{

    const CONVERSION_NAME = 'INSERT_CONVERSION_NAME_HERE';
    const GCLID = 'INSERT_GOOGLE_CLICK_ID_HERE';
    const CONVERSION_TIME = 'INSERT_CONVERSION_TIME_HERE';
    const ADJUSTMENT_TYPE = 'INSERT_ADJUSTMENT_TYPE_HERE';
    const ADJUSTMENT_TIME = 'INSERT_ADJUSTMENT_TIME_HERE';
    const ADJUSTED_VALUE = 'INSERT_ADJUSTED_VALUE_HERE';

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $conversionName,
        $gclid,
        $conversionTime,
        $adjustmentType,
        $adjustmentTime,
        $adjustedValue
    ) {
        $offlineConversionService = $adWordsServices->get(
            $session,
            OfflineConversionAdjustmentFeedService::class
        );

        // Associate conversion adjustments with the existing named conversion
        // tracker. The GCLID should have been uploaded before with a
        // conversion.
        $feed = new GclidOfflineConversionAdjustmentFeed();
        $feed->setConversionName($conversionName);
        $feed->setGoogleClickId($gclid);
        $feed->setConversionTime($conversionTime);
        $feed->setAdjustmentType($adjustmentType);
        $feed->setAdjustmentTime($adjustmentTime);
        $feed->setAdjustedValue($adjustedValue);

        $offlineConversionAdjustmentFeedOperation =
            new OfflineConversionAdjustmentFeedOperation();
        $offlineConversionAdjustmentFeedOperation->setOperator(Operator::ADD);
        $offlineConversionAdjustmentFeedOperation->setOperand($feed);

        // Issues a request to the servers for adjustments of the conversion.
        $result = $offlineConversionService->mutate(
            [$offlineConversionAdjustmentFeedOperation]
        );

        $feed = $result->getValue()[0];
        printf(
            "Uploaded conversion adjustment value of '%s' for Google "
            . "Click ID '%s'.%s",
            $feed->getConversionName(),
            $feed->getGoogleClickId(),
            PHP_EOL
        );
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();
        self::runExample(
            new AdWordsServices(),
            $session,
            self::CONVERSION_NAME,
            self::GCLID,
            self::CONVERSION_TIME,
            self::ADJUSTMENT_TYPE,
            self::ADJUSTMENT_TIME,
            floatval(self::ADJUSTED_VALUE)
        );
    }
}

UploadOfflineConversionAdjustments::main();
