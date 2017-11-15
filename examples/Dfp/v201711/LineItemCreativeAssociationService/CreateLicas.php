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
namespace Google\AdsApi\Examples\Dfp\v201711\LineItemCreativeAssociationService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\v201711\LineItemCreativeAssociation;
use Google\AdsApi\Dfp\v201711\LineItemCreativeAssociationService;

/**
 * Creates LICAs.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateLicas {

  const LINE_ITEM_ID = 'INSERT_LINE_ITEM_ID_HERE';
  const CREATIVE_ID = 'INSERT_CREATIVE_ID_HERE';

  public static function runExample(DfpServices $dfpServices,
      DfpSession $session, $lineItemId, $creativeId) {
    $licaService =
        $dfpServices->get($session, LineItemCreativeAssociationService::class);

    $lica = new LineItemCreativeAssociation();
    $lica->setCreativeId($creativeId);
    $lica->setLineItemId($lineItemId);

    // Create the LICAs on the server.
    $results = $licaService->createLineItemCreativeAssociations([$lica]);

    // Print out some information for each created LICA.
    foreach ($results as $i => $lica) {
      printf(
          "%d) LICA with line item ID %d, creative ID %d, and status '%s' was "
              . "created.\n",
          $i,
          $lica->getLineItemId(),
          $lica->getCreativeId(),
          $lica->getStatus()
      );
    }
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

    self::runExample(
        new DfpServices(),
        $session,
        intval(self::LINE_ITEM_ID),
        intval(self::CREATIVE_ID)
    );
  }
}

CreateLicas::main();
