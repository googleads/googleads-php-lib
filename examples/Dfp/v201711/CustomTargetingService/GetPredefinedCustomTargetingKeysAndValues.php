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
namespace Google\AdsApi\Examples\Dfp\v201711\CustomTargetingService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201711\StatementBuilder;
use Google\AdsApi\Dfp\v201711\CustomTargetingKeyType;
use Google\AdsApi\Dfp\v201711\CustomTargetingService;

/**
 * This example gets predefined custom targeting keys and values.
 *
 * <p>It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class GetPredefinedCustomTargetingKeysAndValues {

  public static function runExample(DfpServices $dfpServices,
      DfpSession $session) {
    $customTargetingService =
        $dfpServices->get($session, CustomTargetingService::class);

    // Get all predefined custom targeting keys.
    $customTargetingKeyIds =
        self::getPredefinedCustomTargetingKeyIds($dfpServices, $session);

    // Create a statement to select custom targeting values.
    $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
    $statementBuilder = (new StatementBuilder())
        ->where('customTargetingKeyId = :customTargetingKeyId')
        ->orderBy('id ASC')
        ->limit($pageSize);

    // Retrieve a small amount of custom targeting values at a time, paging
    // through until all custom targeting values have been retrieved.

    // For each key, retrieve all its values.
    $totalValueCounter = 0;
    foreach ($customTargetingKeyIds as $customTargetingKeyId) {
      // Set the custom targeting key ID to select from.
      $statementBuilder->withBindVariableValue(
          'customTargetingKeyId', $customTargetingKeyId);

      // Retrieve a small amount of custom targeting values at a time, paging
      // through until all custom targeting values have been retrieved.
      $totalResultSetSize = 0;
      $statementBuilder->offset(0);
      do {
        $page = $customTargetingService->getCustomTargetingValuesByStatement(
            $statementBuilder->toStatement());

        // Print out some information for each custom targeting value.
        if ($page->getResults() !== null) {
          $totalResultSetSize = $page->getTotalResultSetSize();
          foreach ($page->getResults() as $customTargetingValue) {
            printf(
                "%d) Custom targeting value with ID %d, name '%s', display "
                    . "name '%s', belonging to key with ID %d was found.\n",
                $totalValueCounter++,
                $customTargetingValue->getId(),
                $customTargetingValue->getName(),
                $customTargetingValue->getDisplayName(),
                $customTargetingValue->getCustomTargetingKeyId()
            );
          }
        }

        $statementBuilder->increaseOffsetBy($pageSize);
      } while ($statementBuilder->getOffset() < $totalResultSetSize);
    }

    printf("Number of values found: %d\n", $totalValueCounter);
  }

  /**
   * Gets predefined custom targeting key IDs.
   */
  private static function getPredefinedCustomTargetingKeyIds(
      DfpServices $dfpServices, DfpSession $session) {
    $customTargetingKeyIds = [];

    $customTargetingService =
        $dfpServices->get($session, CustomTargetingService::class);

    // Create a statement to get all custom targeting keys.
    $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
    $statementBuilder = (new StatementBuilder())
        ->where('type = :type')
        ->orderBy('id ASC')
        ->limit($pageSize)
        ->withBindVariableValue('type', CustomTargetingKeyType::PREDEFINED);

    // Retrieve a small amount of custom targeting keys at a time, paging
    // through until all custom targeting keys have been retrieved.
    $totalResultSetSize = 0;
    do {
      $page = $customTargetingService->getCustomTargetingKeysByStatement(
          $statementBuilder->toStatement());

      if ($page->getResults() !== null) {
        $totalResultSetSize = $page->getTotalResultSetSize();
        $i = $page->getStartIndex();
        foreach ($page->getResults() as $customTargetingKey) {
          printf(
              "%d) Custom targeting key with ID %d, name '%s', and display "
                  . "name '%s' was found.\n",
              $i++,
              $customTargetingKey->getId(),
              $customTargetingKey->getName(),
              $customTargetingKey->getDisplayName()
          );
          $customTargetingKeyIds[] = $customTargetingKey->getId();
        }
      }

      $statementBuilder->increaseOffsetBy($pageSize);
    } while ($statementBuilder->getOffset() < $totalResultSetSize);

    printf("Number of keys found: %d\n\n", $totalResultSetSize);

    return $customTargetingKeyIds;
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

GetPredefinedCustomTargetingKeysAndValues::main();
