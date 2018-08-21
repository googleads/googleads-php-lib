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

namespace Google\AdsApi\Examples\AdManager\v201808\CreativeService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\v201808\CreativeAsset;
use Google\AdsApi\AdManager\v201808\ImageCreative;
use Google\AdsApi\AdManager\v201808\ServiceFactory;
use Google\AdsApi\AdManager\v201808\Size;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Creates image creatives.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateCreatives
{

    const ADVERTISER_ID = 'INSERT_ADVERTISER_ID_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        $advertiserId
    ) {
        $creativeService = $serviceFactory->createCreativeService($session);

        $imageCreative = new ImageCreative();
        $imageCreative->setName('Image creative #' . uniqid());
        $imageCreative->setAdvertiserId($advertiserId);
        $imageCreative->setDestinationUrl('http://google.com');

        // Set the size of the image creative.
        $size = new Size();
        $size->setWidth(600);
        $size->setHeight(315);
        $size->setIsAspectRatio(false);
        $imageCreative->setSize($size);

        // Set the creative's asset.
        $creativeAsset = new CreativeAsset();
        $creativeAsset->setFileName(300);
        $creativeAsset->setAssetByteArray(
            file_get_contents('https://goo.gl/3b9Wfh')
        );
        $imageCreative->setPrimaryImageAsset($creativeAsset);

        // Create the image creatives on the server.
        $results = $creativeService->createCreatives([$imageCreative]);

        // Print out some information for each created image creative.
        foreach ($results as $i => $imageCreative) {
            printf(
                "%d) Image creative with ID %d and name '%s' was created.%s",
                $i,
                $imageCreative->getId(),
                $imageCreative->getName(),
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

        self::runExample(
            new ServiceFactory(),
            $session,
            intval(self::ADVERTISER_ID)
        );
    }
}

CreateCreatives::main();
