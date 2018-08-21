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

namespace Google\AdsApi\Examples\AdManager\v201802\NetworkService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerServices;
use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\v201802\NetworkService;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example creates a test network. You do not need to have an Ad Manager
 * account to run this example, but you do need to have a Google account
 * (created at https://www.google.com/accounts/newaccount if you currently don't
 * have one) that is not associated with any other Ad Manager test networks.
 * Once this network is created, you can supply the network code in your
 * ads.properties file to make calls to other services.
 *
 * Alternatively, if you do not wish to run this example, you can create a test
 * network at: https://dfp-playground.appspot.com
 *
 * Please see the following URL for more information:
 * https://developers.google.com/ad-manager/docs/environments
 *
 * It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class MakeTestNetwork
{

    public static function runExample(
        AdManagerServices $adManagerServices,
        AdManagerSession $session
    ) {
        $networkService = $adManagerServices->get(
            $session,
            NetworkService::class
        );

        // Make the test network.
        $network = $networkService->makeTestNetwork();

        printf(
            "Test network with network code '%s' and display name '%s' "
            . "created.\nYou may now sign in at "
            . "https://admanager.google.com/%s\n",
            $network->getNetworkCode(),
            $network->getDisplayName(),
            $network->getNetworkCode()
        );
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()
            ->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdManagerSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        self::runExample(new AdManagerServices(), $session);
    }
}

MakeTestNetwork::main();
