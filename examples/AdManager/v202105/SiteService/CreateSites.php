<?php
/**
 * Copyright 2020 Google LLC. All Rights Reserved.
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

namespace Google\AdsApi\Examples\AdManager\v202105\SiteService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\v202105\DelegationType;
use Google\AdsApi\AdManager\v202105\ServiceFactory;
use Google\AdsApi\AdManager\v202105\Site;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use RuntimeException;

/**
 * Creates sites.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateSites
{

    // Set the URL and child network code for the site.
    const URL = 'INSERT_URL_HERE';
    const CHILD_NETWORK_CODE = 'INSERT_CHILD_NETWORK_CODE_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        $url,
        $childNetworkCode
    ) {
        $networkService = $serviceFactory->createNetworkService($session);
        $siteService = $serviceFactory->createSiteService($session);

        // Check that the child network code is approved for MANAGE_INVENTORY by
        // this network.
        $currentNetwork = $networkService->getCurrentNetwork();
        $currentNetworkCode = $currentNetwork->getNetworkCode();
        $childNetwork = null;
        foreach ($currentNetwork->getChildPublishers() as $childPublisher) {
            if ($childPublisher->getChildNetworkCode() === $childNetworkCode) {
                $childNetwork = $childPublisher;
                break;
            }
        }

        if (is_null($childNetwork)) {
            throw new RuntimeException(
                sprintf(
                    "Child network '%s' not found on the current " .
                    "network (%s). Cannot create sites.",
                    $childNetworkCode,
                    $currentNetworkCode
                )
            );
        }

        if ($childNetwork->getApprovedDelegationType()
            !== DelegationType::MANAGE_INVENTORY) {
            throw new RuntimeException(
                sprintf(
                    "Child network %s has not approved for the current " .
                    "network (%s) to manage its inventory. Cannot create " .
                    "sites.",
                    $childNetworkCode,
                    $currentNetworkCode)
            );
        }

        // Create site object.
        $site = new Site();
        $site->setUrl($url);
        $site->setChildNetworkCode($childNetworkCode);

        // Create the site on the server.
        $createdSites = $siteService->createSites([$site]);

        foreach ($createdSites as $createdSite) {
            printf(
                "Site with ID '%d' and URL '%s' was created for child " .
                "network '%s'.",
                $createdSite->getId(),
                $createdSite->getUrl(),
                $childNetworkCode
            );
        }
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()
            ->build();

        // Construct an API session configured from an `adsapi_php.ini` file
        // and the OAuth2 credentials above.
        $session = (new AdManagerSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        self::runExample(
            new ServiceFactory(),
            $session,
            intval(self::URL),
            intval(self::CHILD_NETWORK_CODE)
        );
    }
}

CreateSites::main();
