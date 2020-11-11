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

namespace Google\AdsApi\Examples\AdManager\v202011\NetworkService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v202011\Pql;
use Google\AdsApi\AdManager\Util\v202011\StatementBuilder;
use Google\AdsApi\AdManager\v202005\DeclarationType;
use Google\AdsApi\AdManager\v202011\ApiException;
use Google\AdsApi\AdManager\v202011\NumberValue;
use Google\AdsApi\AdManager\v202011\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets the network's default third party data declarations.
 *
 * It is meant to be run from a command line (not as a webpage) and requires
 * that you've setup an `adsapi_php.ini` file in your home directory with your
 * API credentials and settings. See README.md for more info.
 */
class GetDefaultThirdPartyDataDeclaration
{

    /**
     * Gets the network's default third party data declarations.
     *
     * @param ServiceFactory $serviceFactory the factory class for creating a
     *     network service client
     * @param AdManagerSession $session the session containing configurations
     *     for creating a network service client
     * @throws ApiException if the request for getting all networks fails
     */
    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session
    ) {
        $networkService = $serviceFactory->createNetworkService($session);
        $pqlService = $serviceFactory->createPublisherQueryLanguageService(
            $session
        );

        // Get the network's default third party data declarations.
        $thirdPartyDataDeclaration =
            $networkService->getDefaultThirdPartyDataDeclaration();

        if (is_null($thirdPartyDataDeclaration)) {
            printf(
                "No default ad technology partners have been set on this " .
                "network.%s",
                PHP_EOL
            );
            return;
        }

        $thirdPartyCompanyIds =
            $thirdPartyDataDeclaration->getThirdPartyCompanyIds();
        // For more information about how to declare ad technology providers for
        // creatives in Ad Manager reservation campaigns for GDPR, please read
        // https://support.google.com/admanager/answer/9835267
        $declarationType = $thirdPartyDataDeclaration->getDeclarationType();
        if ($declarationType == DeclarationType::NONE
            || empty($thirdPartyCompanyIds)) {
            printf(
                "This network has specified that there are no ad technology " .
                "providers associated with its reservation creatives " .
                "by default.%s",
                PHP_EOL
            );
            return;
        }

        // In this case, there are third party companies and a declaration type.
        // So, print the count of companies and the declaration type.
        printf(
            "This network has specified %d ad technology provider(s) " .
            "associated with its reservation creatives by default.%s" .
            "Declaration type: '%s'%s",
            count($thirdPartyCompanyIds),
            PHP_EOL,
            $declarationType,
            PHP_EOL
        );

        // Fetch the company names from the Rich_Media_Ad_Company PQL table.
        $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
        $statementBuilder = (new StatementBuilder())
            ->select('Id, Name')
            ->from('Rich_Media_Ad_Company')
            ->where('Id IN (:company_ids)')
            ->withBindVariableValue('company_ids', $thirdPartyCompanyIds)
            ->limit($pageSize);

        while (true) {
            // Get all companies.
            $resultSet = $pqlService->select($statementBuilder->toStatement());
            $rows = $resultSet->getRows();
            if (empty($rows)) {
                break;
            }
            foreach ($rows as $row) {
                $values = $row->getValues();
                printf(
                    "Rich media ad company ID: %d name: '%s' was found.%s",
                    $values[0]->getValue(),
                    $values[1]->getValue(),
                    PHP_EOL
                );
            }
            $statementBuilder->increaseOffsetBy($pageSize);
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

        self::runExample(new ServiceFactory(), $session);
    }
}

GetDefaultThirdPartyDataDeclaration::main();
