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

namespace Google\AdsApi\Examples\AdManager\v202205\CdnConfigurationService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\v202205\CdnConfiguration;
use Google\AdsApi\AdManager\v202205\CdnConfigurationType;
use Google\AdsApi\AdManager\v202205\MediaLocationSettings;
use Google\AdsApi\AdManager\v202205\OriginForwardingType;
use Google\AdsApi\AdManager\v202205\SecurityPolicySettings;
use Google\AdsApi\AdManager\v202205\SecurityPolicyType;
use Google\AdsApi\AdManager\v202205\ServiceFactory;
use Google\AdsApi\AdManager\v202205\SourceContentConfiguration;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Creates CDN Configurations.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateCdnConfigurations
{

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session
    ) {
        $cdnConfigurationService =
            $serviceFactory->createCdnConfigurationService($session);

        // Make CDN Configuration objects.
        // Only LIVE_STREAM_SOURCE_CONTENT is currently supported by the API.

        // Basic example with no security policies.
        $noneSecurityPolicy = new SecurityPolicySettings(
            SecurityPolicyType::NONE
        );

        $ingestSettings = new MediaLocationSettings();
        $ingestSettings->setUrlPrefix('ingest1.com');
        $ingestSettings->setSecurityPolicy($noneSecurityPolicy);

        $deliverySettings = new MediaLocationSettings();
        $deliverySettings->setUrlPrefix('delivery1.com');
        $deliverySettings->setSecurityPolicy($noneSecurityPolicy);

        $sourceConfig = new SourceContentConfiguration();
        $sourceConfig->setIngestSettings($ingestSettings);
        $sourceConfig->setDefaultDeliverySettings($deliverySettings);

        $cdnConfigWithoutSecurityPolicy = new CdnConfiguration();
        $cdnConfigWithoutSecurityPolicy->setName('ApiConfig1');
        $cdnConfigWithoutSecurityPolicy->setCdnConfigurationType(
            CdnConfigurationType::LIVE_STREAM_SOURCE_CONTENT
        );
        $cdnConfigWithoutSecurityPolicy->setSourceContentConfiguration(
            $sourceConfig
        );

        // Complex example with security policies
        $ingestSecurityPolicy = new SecurityPolicySettings(
            SecurityPolicyType::AKAMAI
        );
        $ingestSecurityPolicy->setDisableServerSideUrlSigning(false);
        $ingestSecurityPolicy->setTokenAuthenticationKey('abc123');

        $securedIngestSettings = new MediaLocationSettings();
        $securedIngestSettings->setUrlPrefix('ingest1.com');
        $securedIngestSettings->setSecurityPolicy($ingestSecurityPolicy);

        $deliverySecurityPolicy = new SecurityPolicySettings(
            SecurityPolicyType::AKAMAI
        );
        $deliverySecurityPolicy->setDisableServerSideUrlSigning(true);
        $deliverySecurityPolicy->setOriginForwardingType(
            OriginForwardingType::CONVENTIONAL
        );
        $deliverySecurityPolicy->setOriginPathPrefix('/path/to/my/origin');

        $securedDeliverySettings = new MediaLocationSettings();
        $securedDeliverySettings->setUrlPrefix('delivery1.com');
        $securedDeliverySettings->setSecurityPolicy($deliverySecurityPolicy);

        $securedSourceConfig = new SourceContentConfiguration();
        $securedSourceConfig->setIngestSettings($securedIngestSettings);
        $securedSourceConfig->setDefaultDeliverySettings(
            $securedDeliverySettings
        );

        $cdnConfigWithSecurityPolicy = new CdnConfiguration();
        $cdnConfigWithSecurityPolicy->setName('ApiConfig2');
        $cdnConfigWithSecurityPolicy->setCdnConfigurationType(
            CdnConfigurationType::LIVE_STREAM_SOURCE_CONTENT
        );
        $cdnConfigWithSecurityPolicy->setSourceContentConfiguration(
            $securedSourceConfig
        );

        // Create the CdnConfiguration on the server.
        $results = $cdnConfigurationService->createCdnConfigurations(
            [
                $cdnConfigWithoutSecurityPolicy,
                $cdnConfigWithSecurityPolicy
            ]
        );

        // Print out some information for each created CdnConfiguration.
        foreach ($results as $i => $cdnConfiguration) {
            printf(
                "%d) CDN configuration with ID %d and name '%s' was created.%s",
                $i,
                $cdnConfiguration->getId(),
                $cdnConfiguration->getName(),
                PHP_EOL
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

        self::runExample(new ServiceFactory(), $session);
    }
}

CreateCdnConfigurations::main();
