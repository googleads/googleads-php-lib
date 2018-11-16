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

namespace Google\AdsApi\Examples\AdWords\v201809\Optimization;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201809\cm\Keyword;
use Google\AdsApi\AdWords\v201809\cm\KeywordMatchType;
use Google\AdsApi\AdWords\v201809\cm\Language;
use Google\AdsApi\AdWords\v201809\cm\Location;
use Google\AdsApi\AdWords\v201809\cm\Money;
use Google\AdsApi\AdWords\v201809\o\AdGroupEstimateRequest;
use Google\AdsApi\AdWords\v201809\o\CampaignEstimateRequest;
use Google\AdsApi\AdWords\v201809\o\KeywordEstimateRequest;
use Google\AdsApi\AdWords\v201809\o\StatsEstimate;
use Google\AdsApi\AdWords\v201809\o\TrafficEstimatorSelector;
use Google\AdsApi\AdWords\v201809\o\TrafficEstimatorService;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets traffic estimates for new keywords.
 */
class EstimateKeywordTraffic
{

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session
    ) {
        $trafficEstimatorService = $adWordsServices->get($session, TrafficEstimatorService::class);

        // Create keywords. Up to 2000 keywords can be passed in a single request.
        $keywords = [];

        $keyword = new Keyword();
        $keyword->setText('mars cruise');
        $keyword->setMatchType(KeywordMatchType::BROAD);
        $keywords[] = $keyword;

        $keyword = new Keyword();
        $keyword->setText('cheap cruise');
        $keyword->setMatchType(KeywordMatchType::PHRASE);
        $keywords[] = $keyword;

        $keyword = new Keyword();
        $keyword->setText('cruise');
        $keyword->setMatchType(KeywordMatchType::EXACT);
        $keywords[] = $keyword;

        // Create a keyword estimate request for each keyword.
        $keywordEstimateRequests = [];
        foreach ($keywords as $keyword) {
            $keywordEstimateRequest = new KeywordEstimateRequest();
            $keywordEstimateRequest->setKeyword($keyword);
            $keywordEstimateRequests[] = $keywordEstimateRequest;
        }

        // Negative keywords don't return estimates, but adjust the estimates of the
        // other keywords in the hypothetical ad group.
        $negativeKeywords = [];

        $keyword = new Keyword();
        $keyword->setText('moon walk');
        $keyword->setMatchType(KeywordMatchType::BROAD);
        $negativeKeywords[] = $keyword;

        // Create a keyword estimate request for each negative keyword.
        foreach ($negativeKeywords as $negativeKeyword) {
            $keywordEstimateRequest = new KeywordEstimateRequest();
            $keywordEstimateRequest->setKeyword($negativeKeyword);
            $keywordEstimateRequest->setIsNegative(true);
            $keywordEstimateRequests[] = $keywordEstimateRequest;
        }

        // Create ad group estimate requests.
        $adGroupEstimateRequest = new AdGroupEstimateRequest();
        $adGroupEstimateRequest->setKeywordEstimateRequests(
            $keywordEstimateRequests
        );
        $money = new Money();
        $money->setMicroAmount(1000000);
        $adGroupEstimateRequest->setMaxCpc($money);

        // Create campaign estimate requests.
        $campaignEstimateRequest = new CampaignEstimateRequest();
        $campaignEstimateRequest->setAdGroupEstimateRequests(
            [$adGroupEstimateRequest]
        );

        // Optional: Set additional criteria for filtering estimates.
        // See http://code.google.com/apis/adwords/docs/appendix/countrycodes.html
        // for a detailed list of country codes.
        // Set targeting criteria. Only locations and languages are supported.
        $unitedStates = new Location();
        $unitedStates->setId(2840);

        // See http://code.google.com/apis/adwords/docs/appendix/languagecodes.html
        // for a detailed list of language codes.
        $english = new Language();
        $english->setId(1000);

        $campaignEstimateRequest->setCriteria([$unitedStates, $english]);

        // Create selector.
        $selector = new TrafficEstimatorSelector();
        $selector->setCampaignEstimateRequests([$campaignEstimateRequest]);

        // Optional: Request a list of campaign level estimates segmented by
        // platform.
        $selector->setPlatformEstimateRequested(true);

        $result = $trafficEstimatorService->get($selector);

        $platformEstimates = $result->getCampaignEstimates()[0]->getPlatformEstimates();
        if ($platformEstimates !== null) {
            foreach ($platformEstimates as $platformEstimate) {
                if ($platformEstimate->getMinEstimate() !== null
                    && $platformEstimate->getMaxEstimate() !== null) {
                    printf(
                        "Results for the platform with ID %d and name '%s':\n",
                        $platformEstimate->getPlatform()->getId(),
                        $platformEstimate->getPlatform()->getPlatformName()
                    );
                    self::printMeanEstimate(
                        $platformEstimate->getMinEstimate(),
                        $platformEstimate->getMaxEstimate()
                    );
                }
            }
        }

        $keywordEstimates = $result->getCampaignEstimates()[0]->getAdGroupEstimates()[0]->getKeywordEstimates();
        $estimatesCount = count($keywordEstimates);
        for ($i = 0; $i < $estimatesCount; $i++) {
            $keywordEstimateRequest = $keywordEstimateRequests[$i];
            // Skip negative keywords, since they don't return estimates.
            if ($keywordEstimateRequest->getIsNegative() !== true) {
                $keyword = $keywordEstimateRequest->getKeyword();
                $keywordEstimate = $keywordEstimates[$i];

                if ($keywordEstimate->getMin() !== null
                    && $keywordEstimate->getMax() !== null) {
                    // Print the mean of the min and max values.
                    printf(
                        "Results for the keyword with text '%s' and match type '%s':\n",
                        $keyword->getText(),
                        $keyword->getMatchType()
                    );
                    self::printMeanEstimate(
                        $keywordEstimate->getMin(),
                        $keywordEstimate->getMax()
                    );
                }
            }
        }
    }

    /**
     * Prints estimated average CPC, ad position, daily clicks, and daily costs
     * between the provided lower bound and upper bound of estimated stats.
     *
     * @param StatsEstimate $minEstimate the lower bound on the estimated stats
     * @param StatsEstimate $maxEstimate the upper bound on the estimated stats
     */
    private static function printMeanEstimate(
        StatsEstimate $minEstimate,
        StatsEstimate $maxEstimate
    ) {
        $meanAverageCpc = self::calculateMeanMicroAmount(
            $minEstimate->getAverageCpc(),
            $maxEstimate->getAverageCpc()
        );

        $meanAveragePosition = self::calculateMean(
            $minEstimate->getAveragePosition(),
            $maxEstimate->getAveragePosition()
        );

        $meanClicks = self::calculateMean(
            $minEstimate->getClicksPerDay(),
            $maxEstimate->getClicksPerDay()
        );

        $meanTotalCost = self::calculateMeanMicroAmount(
            $minEstimate->getTotalCost(),
            $maxEstimate->getTotalCost()
        );

        printf(
            " Estimated average CPC: %s\n",
            self::formatMean($meanAverageCpc)
        );
        printf(
            " Estimated ad position: %s\n",
            self::formatMean($meanAveragePosition)
        );
        printf(" Estimated daily clicks: %s\n", self::formatMean($meanClicks));
        printf(
            " Estimated daily cost: %s\n\n",
            self::formatMean($meanTotalCost)
        );
    }

    /**
     * Returns the mean of the two numbers if neither is null, else returns null.
     */
    private static function calculateMean($min, $max)
    {
        if ($min === null || $max === null) {
            return null;
        }

        return ($min + $max) / 2;
    }

    /**
     * Returns the mean of the two object's microAmounts if neither is null, else
     * returns null.
     */
    private static function calculateMeanMicroAmount($min, $max)
    {
        if ($min === null || $max === null) {
            return null;
        }
        if ($min->getMicroAmount() === null
            || $max->getMicroAmount() === null) {
            return null;
        }

        return ($min->getMicroAmount() + $max->getMicroAmount()) / 2;
    }

    /**
     * Returns a formatted version of the mean value, handling nulls.
     */
    private static function formatMean($mean)
    {
        if ($mean === null) {
            return 'null';
        }

        return sprintf("%.2f", $mean);
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

EstimateKeywordTraffic::main();
