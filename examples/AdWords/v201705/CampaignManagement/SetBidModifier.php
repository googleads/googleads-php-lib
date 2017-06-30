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
namespace Google\AdsApi\Examples\AdWords\v201705\CampaignManagement;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201705\cm\CampaignCriterion;
use Google\AdsApi\AdWords\v201705\cm\CampaignCriterionOperation;
use Google\AdsApi\AdWords\v201705\cm\CampaignCriterionService;
use Google\AdsApi\AdWords\v201705\cm\Operator;
use Google\AdsApi\AdWords\v201705\cm\Platform;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example sets a bid modifier on a campaign.
 */
class SetBidModifier {

  const CAMPAIGN_ID = 'INSERT_CAMPAIGN_ID_HERE';
  // Bid modifiers are float number, not percentages, e.g., 1.5 means 50% more
  // bidding.
  const BID_MODIFIER = 'INSERT_BID_MODIFIER_HERE';

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $campaignId, $bidModifier) {
    $campaignCriterionService =
        $adWordsServices->get($session, CampaignCriterionService::class);

    // Create a mobile platform. The ID can be found in the documentation.
    // https://developers.google.com/adwords/api/docs/appendix/platforms
    $mobile = new Platform();
    $mobile->setId(30001); // HighEndMobile = 30001

    // Create a criterion with modified bid.
    $criterion = new CampaignCriterion();
    $criterion->setCampaignId($campaignId);
    $criterion->setCriterion($mobile);
    $criterion->setBidModifier($bidModifier);

    // Create a campaign criterion operation and add it to the operations list.
    $operation = new CampaignCriterionOperation();
    $operation->setOperator(Operator::SET);
    $operation->setOperand($criterion);
    $operations = [$operation];

    // Update campaign criteria on the server.
    $results = $campaignCriterionService->mutate($operations);

    // Print out some information about the updated campaign criterion.
    foreach ($results->getValue() as $campaignCriterion) {
      printf(
          "Campaign criterion with campaign ID %d, criterion ID %d, "
              . "and type '%s' was modified with bid %.2f.\n",
          $campaignCriterion->getCampaignId(),
          $campaignCriterion->getCriterion()->getId(),
          $campaignCriterion->getCriterion()->getType(),
          $campaignCriterion->getBidModifier());
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
    self::runExample(new AdWordsServices(), $session, intval(self::CAMPAIGN_ID),
        floatval(self::BID_MODIFIER));
  }
}

SetBidModifier::main();
