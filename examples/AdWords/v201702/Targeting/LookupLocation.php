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
namespace Google\AdsApi\Examples\AdWords\v201702\Targeting;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201702\cm\LocationCriterionService;
use Google\AdsApi\AdWords\v201702\cm\Predicate;
use Google\AdsApi\AdWords\v201702\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201702\cm\Selector;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example looks up location criteria by name.
 */
class LookupLocation {

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session) {
    $locationCriterionService =
        $adWordsServices->get($session, LocationCriterionService::class);

    // Location names to look up.
    $locationNames = ['Paris', 'Quebec', 'Spain', 'Deutschland'];
    // Locale to retrieve location names in.
    $locale = 'en';

    // Create a selector to select all locations.
    $selector = new Selector();
    $selector->setFields(['Id', 'LocationName', 'CanonicalName',
        'DisplayType',  'ParentLocations', 'Reach', 'TargetingStatus']);
    // Location names must match exactly, only EQUALS and IN are supported
    // and only one locale can be used in a request.
    $selector->setPredicates([
        new Predicate('LocationName', PredicateOperator::IN, $locationNames),
        new Predicate('Locale', PredicateOperator::EQUALS, [$locale])
    ]);

    // Retrieve location criteria from the server.
    $locationCriteria = $locationCriterionService->get($selector);

    // Print out some information for each location criterion.
    if ($locationCriteria !== null) {
      foreach ($locationCriteria as $locationCriterion) {
        if ($locationCriterion->getLocation()->getParentLocations() !== null) {
          $parentLocations = [];
          foreach ($locationCriterion->getLocation()->getParentLocations()
              as $location) {
            $parentLocations[] = sprintf(
                '%s (%s)',
                $location->getLocationName(),
                $location->getDisplayType()
            );
          }
          $parentLocationsString = implode(', ', $parentLocations);
        } else {
          $parentLocationsString = 'N/A';
        }
        printf(
            "The search term '%s' returned the location '%s' of type '%s' "
                . "with ID %d, parent locations '%s', and reach %d (%s).\n",
            $locationCriterion->getSearchTerm(),
            $locationCriterion->getLocation()->getLocationName(),
            $locationCriterion->getLocation()->getDisplayType(),
            $locationCriterion->getLocation()->getId(),
            $parentLocationsString,
            $locationCriterion->getReach(),
            $locationCriterion->getLocation()->getTargetingStatus()
        );
      }
    } else {
      print "No location criteria were found.\n";
    }
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

LookupLocation::main();
