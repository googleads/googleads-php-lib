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
namespace Google\AdsApi\Examples\AdWords\v201710\AdvancedOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201710\cm\CampaignSharedSet;
use Google\AdsApi\AdWords\v201710\cm\CampaignSharedSetOperation;
use Google\AdsApi\AdWords\v201710\cm\CampaignSharedSetService;
use Google\AdsApi\AdWords\v201710\cm\Keyword;
use Google\AdsApi\AdWords\v201710\cm\KeywordMatchType;
use Google\AdsApi\AdWords\v201710\cm\Operator;
use Google\AdsApi\AdWords\v201710\cm\SharedCriterion;
use Google\AdsApi\AdWords\v201710\cm\SharedCriterionOperation;
use Google\AdsApi\AdWords\v201710\cm\SharedCriterionService;
use Google\AdsApi\AdWords\v201710\cm\SharedSet;
use Google\AdsApi\AdWords\v201710\cm\SharedSetOperation;
use Google\AdsApi\AdWords\v201710\cm\SharedSetService;
use Google\AdsApi\AdWords\v201710\cm\SharedSetType;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example creates a shared list of negative broad match keywords, then
 * attaches them to a campaign.
 */
class CreateAndAttachSharedKeywordSet  {

  const CAMPAIGN_ID = 'INSERT_CAMPAIGN_ID_HERE';

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $campaignId) {
    $sharedSetService = $adWordsServices->get($session,
        SharedSetService::class);
    $keywords = ['mars cruise', 'mars hotels'];

    // Create the shared negative keyword set.
    $sharedSet = new SharedSet();
    $sharedSet->setName('Negative keyword list #' . uniqid());
    $sharedSet->setType(SharedSetType::NEGATIVE_KEYWORDS);

    $sharedSetOperation = new SharedSetOperation();
    $sharedSetOperation->setOperator(Operator::ADD);
    $sharedSetOperation->setOperand($sharedSet);

    // Create the shared set on the server and print out some information.
    $sharedSet =
        $sharedSetService->mutate([$sharedSetOperation])->getValue()[0];
    printf("Shared set with ID %d and name '%s' was successfully added.\n",
        $sharedSet->getSharedSetId(), $sharedSet->getName());

    $sharedCriterionService = $adWordsServices->get($session,
        SharedCriterionService::class);

    // Add negative keywords to the shared set.
    $operations = [];
    foreach ($keywords as $keyword) {
      $keywordCriterion = new Keyword();
      $keywordCriterion->setText($keyword);
      $keywordCriterion->setMatchType(KeywordMatchType::BROAD);

      $sharedCriterion = new SharedCriterion();
      $sharedCriterion->setCriterion($keywordCriterion);
      $sharedCriterion->setNegative(true);
      $sharedCriterion->setSharedSetId($sharedSet->getSharedSetId());

      $sharedCriterionOperation = new SharedCriterionOperation();
      $sharedCriterionOperation->setOperator(Operator::ADD);
      $sharedCriterionOperation->setOperand($sharedCriterion);

      $operations[] = $sharedCriterionOperation;
    }

    $result = $sharedCriterionService->mutate($operations);
    foreach ($result->getValue() as $sharedCriterion) {
      printf(
          "Added shared criterion ID %d with text '%s' to shared set with"
              . " ID %d.\n",
          $sharedCriterion->getCriterion()->getId(),
          $sharedCriterion->getCriterion()->getText(),
          $sharedCriterion->getSharedSetId()
      );
    }

    $campaignSharedSetService = $adWordsServices->get($session,
        CampaignSharedSetService::class);
    $campaignSharedSet = new CampaignSharedSet();
    $campaignSharedSet->setCampaignId($campaignId);
    $campaignSharedSet->setSharedSetId($sharedSet->getSharedSetId());

    $campaignSharedOperation = new CampaignSharedSetOperation();
    $campaignSharedOperation->setOperator(Operator::ADD);
    $campaignSharedOperation->setOperand($campaignSharedSet);

    $campaignSharedSet = $campaignSharedSetService
        ->mutate([$campaignSharedOperation])->getValue()[0];
    printf(
        "Shared set ID %d was attached to campaign ID %d.\n",
        $campaignSharedSet->getSharedSetId(),
        $campaignSharedSet->getCampaignId()
    );
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
        new AdWordsServices(), $session, intval(self::CAMPAIGN_ID));
  }
}

CreateAndAttachSharedKeywordSet ::main();
