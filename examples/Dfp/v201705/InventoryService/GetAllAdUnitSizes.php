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
namespace Google\AdsApi\Examples\Dfp\v201705\InventoryService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201705\StatementBuilder;
use Google\AdsApi\Dfp\v201705\InventoryService;

/**
 * This example gets all ad unit sizes.
 *
 * <p>It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class GetAllAdUnitSizes {

  public static function runExample(DfpServices $dfpServices,
      DfpSession $session) {
    $inventoryService =
        $dfpServices->get($session, InventoryService::class);

    // Create a statement to select all ad unit sizes.
    $statementBuilder = new StatementBuilder();

    $adUnitSizes = $inventoryService->getAdUnitSizesByStatement(
        $statementBuilder->toStatement());

    // Print out some information for each ad unit size.
    foreach ($adUnitSizes as $i => $adUnitSize) {
      printf(
          "%d) Ad unit size with dimensions %s was found.\n",
          $i,
          $adUnitSize->getFullDisplayString()
      );
    }

    printf("Number of results found: %d\n", count($adUnitSizes));
  }

  public static function main() {
    // Generate a refreshable OAuth2 credential for authentication.
    $oAuth2Credential = (new OAuth2TokenBuilder())
        ->fromFile()
        ->build();

    // Construct an API session configured from a properties file and the OAuth2
    // credentials above.
    $session = (new DfpSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential)
        ->build();

    self::runExample(new DfpServices(), $session);
  }
}

GetAllAdUnitSizes::main();
