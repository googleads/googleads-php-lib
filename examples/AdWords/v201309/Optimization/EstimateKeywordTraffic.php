<?php
/**
 * This example gets traffic estimates for new keywords.
 *
 * Tags: TrafficEstimatorService.get
 * Restriction: adwords-only
 *
 * Copyright 2012, Google Inc. All Rights Reserved.
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
 * @subpackage v201309
 * @category   WebServices
 * @copyright  2012, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Eric Koleda
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

  // Negative keywords don't return estimates, but adjust the estimates of the
  // other keywords in the hypothetical ad group.
  $negativeKeywords = array();
  $negativeKeywords[] = new Keyword('moon walk', 'BROAD');

  // Create a keyword estimate request for each keyword.
  $keywordEstimateRequests = array();
  foreach ($keywords as $keyword) {
    $keywordEstimateRequest = new KeywordEstimateRequest();
    $keywordEstimateRequest->keyword = $keyword;
    $keywordEstimateRequests[] = $keywordEstimateRequest;
  }

  // Create a keyword estimate request for each negative keyword.
  foreach ($negativeKeywords as $negativeKeyword) {
    $keywordEstimateRequest = new KeywordEstimateRequest();
    $keywordEstimateRequest->keyword = $negativeKeyword;
    $keywordEstimateRequest->isNegative = TRUE;
    $keywordEstimateRequests[] = $keywordEstimateRequest;
  }

  // Create ad group estimate requests.
  $adGroupEstimateRequest = new AdGroupEstimateRequest();
  $adGroupEstimateRequest->keywordEstimateRequests = $keywordEstimateRequests;
  $adGroupEstimateRequest->maxCpc = new Money(1000000);

  // Create campaign estimate requests.
  $campaignEstimateRequest = new CampaignEstimateRequest();
  $campaignEstimateRequest->adGroupEstimateRequests[] = $adGroupEstimateRequest;

  // Set targeting criteria. Only locations and languages are supported.
  $unitedStates = new Location();
  $unitedStates->id = 2840;
  $campaignEstimateRequest->criteria[] = $unitedStates;

  $english = new Language();
  $english->id = 1000;
  $campaignEstimateRequest->criteria[] = $english;

  // Create selector.
  $selector = new TrafficEstimatorSelector();
  $selector->campaignEstimateRequests[] = $campaignEstimateRequest;

  // Make the get request.
  $result = $trafficEstimatorService->get($selector);

  // Display results.
  $keywordEstimates =
      $result->campaignEstimates[0]->adGroupEstimates[0]->keywordEstimates;
  for ($i = 0; $i < sizeof($keywordEstimates); $i++) {
    $keywordEstimateRequest = $keywordEstimateRequests[$i];
    // Skip negative keywords, since they don't return estimates.
    if (!$keywordEstimateRequest->isNegative) {
      $keyword = $keywordEstimateRequest->keyword;
      $keywordEstimate = $keywordEstimates[$i];

      // Find the mean of the min and max values.
      $meanAverageCpc = ($keywordEstimate->min->averageCpc->microAmount
          + $keywordEstimate->max->averageCpc->microAmount) / 2;
      $meanAveragePosition = ($keywordEstimate->min->averagePosition
          + $keywordEstimate->max->averagePosition) / 2;
      $meanClicks = ($keywordEstimate->min->clicksPerDay
          + $keywordEstimate->max->clicksPerDay) / 2;
      $meanTotalCost = ($keywordEstimate->min->totalCost->microAmount
          + $keywordEstimate->max->totalCost->microAmount) / 2;

      printf("Results for the keyword with text '%s' and match type '%s':\n",
          $keyword->text, $keyword->matchType);
      printf("  Estimated average CPC in micros: %.0f\n", $meanAverageCpc);
      printf("  Estimated ad position: %.2f \n", $meanAveragePosition);
      printf("  Estimated daily clicks: %d\n", $meanClicks);
      printf("  Estimated daily cost in micros: %.0f\n\n", $meanTotalCost);
    }
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
  EstimateKeywordTrafficExample($user);
} catch (Exception $e) {
  printf("An error has occurred: %s\n", $e->getMessage());
}
