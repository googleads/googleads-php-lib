<?php
/**
 * This example gets traffic estimates for new keywords.
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
 * @subpackage v201609
 * @category   WebServices
 * @copyright  2016, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

// Include the initialization file
require_once dirname(dirname(__FILE__)) . '/init.php';

/**
 * Runs the example.
 * @param AdWordsUser $user the user to run the example with
 */
function EstimateKeywordTrafficExample(AdWordsUser $user) {
  // Get the service, which loads the required classes.
  $trafficEstimatorService =
      $user->GetService('TrafficEstimatorService', ADWORDS_VERSION);

  // Create keywords. Up to 2000 keywords can be passed in a single request.
  $keywords = array();
  $keywords[] = new Keyword('mars cruise', 'BROAD');
  $keywords[] = new Keyword('cheap cruise', 'PHRASE');
  $keywords[] = new Keyword('cruise', 'EXACT');

  // Create a keyword estimate request for each keyword.
  $keywordEstimateRequests = array();
  foreach ($keywords as $keyword) {
    $keywordEstimateRequest = new KeywordEstimateRequest();
    $keywordEstimateRequest->keyword = $keyword;
    $keywordEstimateRequests[] = $keywordEstimateRequest;
  }

  // Negative keywords don't return estimates, but adjust the estimates of the
  // other keywords in the hypothetical ad group.
  $negativeKeywords = array();
  $negativeKeywords[] = new Keyword('moon walk', 'BROAD');

  // Create a keyword estimate request for each negative keyword.
  foreach ($negativeKeywords as $negativeKeyword) {
    $keywordEstimateRequest = new KeywordEstimateRequest();
    $keywordEstimateRequest->keyword = $negativeKeyword;
    $keywordEstimateRequest->isNegative = true;
    $keywordEstimateRequests[] = $keywordEstimateRequest;
  }

  // Create ad group estimate requests.
  $adGroupEstimateRequest = new AdGroupEstimateRequest();
  $adGroupEstimateRequest->keywordEstimateRequests = $keywordEstimateRequests;
  $adGroupEstimateRequest->maxCpc = new Money(1000000);

  // Create campaign estimate requests.
  $campaignEstimateRequest = new CampaignEstimateRequest();
  $campaignEstimateRequest->adGroupEstimateRequests[] = $adGroupEstimateRequest;

  // Optional: Set additional criteria for filtering estimates.
  // See http://code.google.com/apis/adwords/docs/appendix/countrycodes.html
  // for a detailed list of country codes.
  // Set targeting criteria. Only locations and languages are supported.
  $unitedStates = new Location();
  $unitedStates->id = 2840;
  $campaignEstimateRequest->criteria[] = $unitedStates;

  // See http://code.google.com/apis/adwords/docs/appendix/languagecodes.html
  // for a detailed list of language codes.
  $english = new Language();
  $english->id = 1000;
  $campaignEstimateRequest->criteria[] = $english;

  // Create selector.
  $selector = new TrafficEstimatorSelector();
  $selector->campaignEstimateRequests[] = $campaignEstimateRequest;

  // Optional: Request a list of campaign level estimates segmented by platform.
  $selector->platformEstimateRequested = true;

  // Make the get request.
  $result = $trafficEstimatorService->get($selector);

  // Display results.
  $platformEstimates = $result->campaignEstimates[0]->platformEstimates;
  if ($platformEstimates !== null) {
    foreach ($platformEstimates as $platformEstimate) {
      if ($platformEstimate->minEstimate !== null
          && $platformEstimate->maxEstimate !== null) {
        printf(
            "Results for the platform with ID %d and name '%s':\n",
            $platformEstimate->platform->id,
            $platformEstimate->platform->platformName
        );
        printMeanEstimate($platformEstimate->minEstimate,
            $platformEstimate->maxEstimate);
      }
    }
  }

  $keywordEstimates =
      $result->campaignEstimates[0]->adGroupEstimates[0]->keywordEstimates;
  for ($i = 0; $i < sizeof($keywordEstimates); $i++) {
    $keywordEstimateRequest = $keywordEstimateRequests[$i];
    // Skip negative keywords, since they don't return estimates.
    if (!$keywordEstimateRequest->isNegative) {
      $keyword = $keywordEstimateRequest->keyword;
      $keywordEstimate = $keywordEstimates[$i];

      if ($keywordEstimate->min !== null && $keywordEstimate->max !== null) {
        // Print the mean of the min and max values.
        printf("Results for the keyword with text '%s' and match type '%s':\n",
            $keyword->text, $keyword->matchType);
        printMeanEstimate($keywordEstimate->min, $keywordEstimate->max);
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
function printMeanEstimate(StatsEstimate $minEstimate,
    StatsEstimate $maxEstimate) {
  $minEstimateAverageCpcMicroAmount = ($minEstimate->averageCpc === null)
      ? 0 : $minEstimate->averageCpc->microAmount;
  $maxEstimateAverageCpcMicroAmount = ($maxEstimate->averageCpc === null)
      ? 0 : $maxEstimate->averageCpc->microAmount;
  $meanAverageCpc =
      ($minEstimateAverageCpcMicroAmount + $maxEstimateAverageCpcMicroAmount)
          / 2;

  $minEstimateAveragePosition = ($minEstimate->averagePosition === null)
      ? 0 : $minEstimate->averagePosition;
  $maxEstimateAveragePosition = ($maxEstimate->averagePosition === null)
      ? 0 : $maxEstimate->averagePosition;
  $meanAveragePosition =
      ($minEstimateAveragePosition + $maxEstimateAveragePosition) / 2;

  $minEstimateClicksPerDay = ($minEstimate->clicksPerDay === null)
      ? 0 : $minEstimate->clicksPerDay;
  $maxEstimateClicksPerDay = ($maxEstimate->clicksPerDay === null)
      ? 0 : $maxEstimate->clicksPerDay;
  $meanClicks = ($minEstimateClicksPerDay + $maxEstimateClicksPerDay) / 2;

  $minEstimateTotalCostMicroAmount = ($minEstimate->totalCost === null)
      ? 0 : $minEstimate->totalCost->microAmount;
  $maxEstimateTotalCostMicroAmount = ($maxEstimate->totalCost === null)
      ? 0 : $maxEstimate->totalCost->microAmount;
  $meanTotalCost =
      ($minEstimateTotalCostMicroAmount + $maxEstimateTotalCostMicroAmount) / 2;

  printf(" Estimated avaerage CPC: %.0f\n", $meanAverageCpc);
  printf(" Estimated ad position: %.2f\n", $meanAveragePosition);
  printf(" Estimated daily clicks: %d\n", $meanClicks);
  printf(" Estimated daily cost: %.0f\n\n", $meanTotalCost);
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
  EstimateKeywordTrafficExample($user);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
