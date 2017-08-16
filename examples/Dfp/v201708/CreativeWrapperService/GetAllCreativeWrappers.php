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
namespace Google\AdsApi\Examples\Dfp\v201708\CreativeWrapperService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201708\StatementBuilder;
use Google\AdsApi\Dfp\v201708\CreativeWrapperService;

/**
 * This example gets all creative wrappers.
 *
 * <p>It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class GetAllCreativeWrappers {

  public static function runExample(DfpServices $dfpServices,
      DfpSession $session) {
    $creativeWrapperService =
        $dfpServices->get($session, CreativeWrapperService::class);

    // Create a statement to select creative wrappers.
    $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
    $statementBuilder = (new StatementBuilder())
        ->orderBy('id ASC')
        ->limit($pageSize);

    // Retrieve a small amount of creative wrappers at a time, paging
    // through until all creative wrappers have been retrieved.
    $totalResultSetSize = 0;
    do {
      $page = $creativeWrapperService->getCreativeWrappersByStatement(
          $statementBuilder->toStatement());

      // Print out some information for each creative wrapper.
      if ($page->getResults() !== null) {
        $totalResultSetSize = $page->getTotalResultSetSize();
        $i = $page->getStartIndex();
        foreach ($page->getResults() as $creativeWrapper) {
          printf(
              "%d) Creative wrapper with ID %d and label id %d was found.\n",
              $i++,
              $creativeWrapper->getId(),
              $creativeWrapper->getLabelId()
          );
        }
      }

      $statementBuilder->increaseOffsetBy($pageSize);
    } while ($statementBuilder->getOffset() < $totalResultSetSize);

    printf("Number of results found: %d\n", $totalResultSetSize);
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

GetAllCreativeWrappers::main();
