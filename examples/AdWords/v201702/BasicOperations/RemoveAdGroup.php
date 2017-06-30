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
namespace Google\AdsApi\Examples\AdWords\v201702\BasicOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201702\cm\AdGroup;
use Google\AdsApi\AdWords\v201702\cm\AdGroupOperation;
use Google\AdsApi\AdWords\v201702\cm\AdGroupService;
use Google\AdsApi\AdWords\v201702\cm\AdGroupStatus;
use Google\AdsApi\AdWords\v201702\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example removes an ad group. To get ad groups, run GetAdGroups.php.
 */
class RemoveAdGroup {

  const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $adGroupId) {
    $adGroupService = $adWordsServices->get($session, AdGroupService::class);

    $operations = [];
    // Create ad group with REMOVED status.
    $adGroup = new AdGroup();
    $adGroup->setId($adGroupId);
    $adGroup->setStatus(AdGroupStatus::REMOVED);

    // Create ad group operation and add it to the list.
    $operation = new AdGroupOperation();
    $operation->setOperand($adGroup);
    $operation->setOperator(Operator::SET);
    $operations[] = $operation;

    // Remove the ad group on the server.
    $result = $adGroupService->mutate($operations);

    $adGroup = $result->getValue()[0];
    printf("Ad group with ID %d was removed.\n", $adGroup->getId());
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
    self::runExample(
        new AdWordsServices(), $session, intval(self::AD_GROUP_ID));
  }
}

RemoveAdGroup::main();
