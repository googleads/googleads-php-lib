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

namespace Google\AdsApi\Examples\AdWords\v201710\Remarketing;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201710\cm\ConversionTrackerService;
use Google\AdsApi\AdWords\v201710\cm\Operator;
use Google\AdsApi\AdWords\v201710\cm\Predicate;
use Google\AdsApi\AdWords\v201710\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201710\cm\Selector;
use Google\AdsApi\AdWords\v201710\rm\AdwordsUserListService;
use Google\AdsApi\AdWords\v201710\rm\BasicUserList;
use Google\AdsApi\AdWords\v201710\rm\UserListConversionType;
use Google\AdsApi\AdWords\v201710\rm\UserListMembershipStatus;
use Google\AdsApi\AdWords\v201710\rm\UserListOperation;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds a new remarketing list audience to the account and
 * retrieves the associated remarketing tag code.
 */
class AddAudience
{

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session
    ) {
        $userListService = $adWordsServices->get($session, AdwordsUserListService::class);
        $conversionTrackerService = $adWordsServices->get($session, ConversionTrackerService::class);

        // Create a conversion type (tag).
        $conversionType = new UserListConversionType();
        $conversionType->setName('Mars cruise customers #' . uniqid());

        // Create a basic user list.
        $userList = new BasicUserList();
        $userList->setName('Mars cruise customers #' . uniqid());
        $userList->setConversionTypes([$conversionType]);

        // Set additional settings (optional).
        $userList->setDescription(
            'A list of mars cruise customers in the last year'
        );
        $userList->setStatus(UserListMembershipStatus::OPEN);
        $userList->setMembershipLifeSpan(365);

        // Create a user list operation and add it to the list.
        $operations = [];
        $operation = new UserListOperation();
        $operation->setOperand($userList);
        $operation->setOperator(Operator::ADD);
        $operations[] = $operation;

        // Create the user list on the server.
        $userList = $userListService->mutate($operations)->getValue()[0];

        // Create the selector.
        $selector = new Selector();
        $selector->setFields(['Id']);
        $selector->setPredicates(
            [
                new Predicate(
                    'Id',
                    PredicateOperator::IN,
                    [$userList->getConversionTypes()[0]->getId()]
                )
            ]
        );

        // Retrieve the conversion tracker and print out its information.
        $conversionTracker = $conversionTrackerService->get($selector)->getEntries()[0];
        printf(
            "Audience with name '%s' and ID %d was added.\n",
            $userList->getName(),
            $userList->getId()
        );
        printf(
            "Conversion tracker snippet:\n%s\n",
            $conversionTracker->getSnippet()
        );
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()->withOAuth2Credential($oAuth2Credential)->build();
        self::runExample(new AdWordsServices(), $session);
    }
}

AddAudience::main();
