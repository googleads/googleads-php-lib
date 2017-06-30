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
namespace Google\AdsApi\Examples\AdWords\v201702\CampaignManagement;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201702\cm\CampaignLabel;
use Google\AdsApi\AdWords\v201702\cm\CampaignLabelOperation;
use Google\AdsApi\AdWords\v201702\cm\CampaignService;
use Google\AdsApi\AdWords\v201702\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds a label to multiple campaigns.
 */
class AddCampaignLabels {

  const CAMPAIGN_ID_1 = 'INSERT_CAMPAIGN_ID_1_HERE';
  const CAMPAIGN_ID_2 = 'INSERT_CAMPAIGN_ID_2_HERE';
  const LABEL_ID = 'INSERT_LABEL_ID_HERE';

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, array $campaignIds, $labelId) {
    $campaignService = $adWordsServices->get($session, CampaignService::class);

    // Create campaign labels and campaign label operations, and add the
    // operations to the list.
    $operations = [];
    foreach ($campaignIds as $campaignId) {
      $campaignLabel = new CampaignLabel();
      $campaignLabel->setCampaignId($campaignId);
      $campaignLabel->setLabelId($labelId);

      $operation = new CampaignLabelOperation();
      $operation->setOperand($campaignLabel);
      $operation->setOperator(Operator::ADD);

      $operations[] = $operation;
    }

    // Add campaign labels on the server and print out some information for
    // each created campaign label.
    $result = $campaignService->mutateLabel($operations);
    foreach ($result->getValue() as $campaignLabel) {
      printf("Campaign label for campaign ID %d and label ID %d was added.\n",
          $campaignLabel->getCampaignId(), $campaignLabel->getLabelId());
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
    self::runExample(
        new AdWordsServices(),
        $session,
        [intval(self::CAMPAIGN_ID_1), intval(self::CAMPAIGN_ID_2)],
        intval(self::LABEL_ID)
    );
  }
}

AddCampaignLabels::main();
