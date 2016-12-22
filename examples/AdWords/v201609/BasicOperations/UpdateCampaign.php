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
namespace Google\AdsApi\Examples\AdWords\v201609\BasicOperations;

require '../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201609\cm\Campaign;
use Google\AdsApi\AdWords\v201609\cm\CampaignOperation;
use Google\AdsApi\AdWords\v201609\cm\CampaignService;
use Google\AdsApi\AdWords\v201609\cm\CampaignStatus;
use Google\AdsApi\AdWords\v201609\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example updates the status of a campaign to PAUSED. To get
 * campaigns, run GetCampaigns.php.
 */
class UpdateCampaign {

  const CAMPAIGN_ID = 'INSERT_CAMPAIGN_ID_HERE';

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $campaignId) {
    $campaignService = $adWordsServices->get($session, CampaignService::class);

    $operations = [];
    // Create a campaign with PAUSED status.
    $campaign = new Campaign();
    $campaign->setId($campaignId);
    $campaign->setStatus(CampaignStatus::PAUSED);

    // Create a campaign operation and add it to the list.
    $operation = new CampaignOperation();
    $operation->setOperand($campaign);
    $operation->setOperator(Operator::SET);
    $operations[] = $operation;

    // Update the campaign on the server.
    $result = $campaignService->mutate($operations);

    $campaign = $result->getValue()[0];
    printf(
        "Campaign with ID %d, name '%s', and budget delivery method '%s' was"
            . " updated.\n",
        $campaign->getId(),
        $campaign->getName(),
        $campaign->getBudget()->getDeliveryMethod()
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

UpdateCampaign::main();
