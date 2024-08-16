<?php
/**
 * Copyright 2021 Google LLC
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

namespace Google\AdsApi\Examples\AdManager\v202402\LineItemCreativeAssociationService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v202402\StatementBuilder;
use Google\AdsApi\AdManager\v202402\CreativePushOptions;
use Google\AdsApi\AdManager\v202402\ServiceFactory;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Pushes a LICA to a linked device for preview. To determine which linked
 * devices exist, use the PublisherQueryLanguageService linked_device table.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class PushCreativeToDevices
{

    const LINE_ITEM_ID = 'INSERT_LINE_ITEM_ID_HERE';
    const CREATIVE_ID = 'INSERT_CREATIVE_ID_HERE';
    const LINKED_DEVICE_ID = 'INSERT_LINKED_DEVICE_ID_HERE';

    /**
     * Runs the example.
     *
     * @param ServiceFactory $serviceFactory the factory class for creating a
     *     LineItemCreativeAssociationService client
     * @param AdManagerSession $session the session containing configurations
     *     for creating a network service client
     * @param int $lineItemId the ID of the line item to push to a device
     * @param int $creativeId the ID of the creative to push to a device
     * @param int $linkedDeviceId the ID of the linked device to which the LICA
     *     is pushed
     */
    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        int $lineItemId,
        int $creativeId,
        int $linkedDeviceId
    ) {
        $licaService =
            $serviceFactory->createLineItemCreativeAssociationService($session);

        // Create a statement to select a single linked device.
        // Linked devices can be read from the linked_device PQL table:
        // https://developers.google.com/ad-manager/api/reference/latest/PublisherQueryLanguageService#linked_device
        $statementBuilder = (new StatementBuilder())
            ->where('id = :linkedDeviceId')
            ->withBindVariableValue('linkedDeviceId', $linkedDeviceId);

        $options = new CreativePushOptions();
        $options->setLineItemId($lineItemId);
        $options->setCreativeId($creativeId);
        $updateResult = $licaService->pushCreativeToDevices(
            $statementBuilder->toStatement(),
            $options
        );
        printf("Pushed creative to %d devices.%s",
            $updateResult->getNumChanges(),
            PHP_EOL
        );
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
            intval(self::LINE_ITEM_ID),
            intval(self::CREATIVE_ID),
            intval(self::LINKED_DEVICE_ID)
        );
    }
}

PushCreativeToDevices::main();
