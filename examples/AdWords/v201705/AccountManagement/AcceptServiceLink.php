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
namespace Google\AdsApi\Examples\AdWords\v201705\AccountManagement;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201705\cm\Operator;
use Google\AdsApi\AdWords\v201705\mcm\CustomerService;
use Google\AdsApi\AdWords\v201705\mcm\ServiceLink;
use Google\AdsApi\AdWords\v201705\mcm\ServiceLinkLinkStatus;
use Google\AdsApi\AdWords\v201705\mcm\ServiceLinkOperation;
use Google\AdsApi\AdWords\v201705\mcm\ServiceType;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example accepts a pending invitation to link your AdWords account to a
 * Google Merchant Center account.
 */
class AcceptServiceLink {

  const SERVICE_LINK_ID = 'INSERT_SERVICE_LINK_ID_HERE';

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $serviceLinkId) {
    $customerService = $adWordsServices->get($session, CustomerService::class);

    // Create service link.
    $serviceLink = new ServiceLink();
    $serviceLink->setServiceLinkId($serviceLinkId);
    $serviceLink->setServiceType(ServiceType::MERCHANT_CENTER);
    $serviceLink->setLinkStatus(ServiceLinkLinkStatus::ACTIVE);

    // Create a service link operation and add it to the list.
    $operations = [];
    $operation = new ServiceLinkOperation();
    $operation->setOperator(Operator::SET);
    $operation->setOperand($serviceLink);
    $operations[] = $operation;

    // Accept service links on the server and print out some information about
    // accepted service links.
    $serviceLinks = $customerService->mutateServiceLinks($operations);
    foreach ($serviceLinks as $serviceLink) {
      printf(
          "Service link with service link ID %d and type '%s' updated to status"
              . ": %s.\n",
          $serviceLink->getServiceLinkId(),
          $serviceLink->getServiceType(),
          $serviceLink->getLinkStatus()
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
    $session = (new AdWordsSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential)
        ->build();
    self::runExample(
        new AdWordsServices(), $session, intval(self::SERVICE_LINK_ID));
  }
}

AcceptServiceLink::main();
