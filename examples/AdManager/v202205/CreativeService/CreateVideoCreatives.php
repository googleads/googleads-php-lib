<?php
/**
 * Copyright 2022 Google LLC
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

namespace Google\AdsApi\Examples\AdManager\v202205\CreativeService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\v202205\ServiceFactory;
use Google\AdsApi\AdManager\v202205\Size;
use Google\AdsApi\AdManager\v202205\VideoCreative;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Creates video creatives.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateVideoCreatives
{

    const ADVERTISER_ID = 'INSERT_ADVERTISER_ID_HERE';
    const VIDEO_SOURCE_URL = 'https://storage.googleapis.com/interactive-media-ads/media/android.mp4';

    public static function runExample(
        ServiceFactory $serviceFactory,
        AdManagerSession $session,
        int $advertiserId
    ) {
        $creativeService = $serviceFactory->createCreativeService($session);

        $size = new Size();
        $size->setWidth(640);
        $size->setHeight(360);
        $size->setIsAspectRatio(false);

        // Create a video creative.
        $videoCreative = new VideoCreative();
        $videoCreative->setName('Video creative #' . uniqid());
        $videoCreative->setAdvertiserId($advertiserId);
        $videoCreative->setDestinationUrl('https://www.android.com/');
        $videoCreative->setDuration(115000);
        $videoCreative->setVideoSourceUrl(self::VIDEO_SOURCE_URL);

        // Create the video creatives on the server.
        $results = $creativeService->createCreatives([$videoCreative]);

        // Print out some information for each created video creative.
        foreach ($results as $i => $videoCreative) {
            printf(
                "%d) Video creative with ID %d and name '%s' was created and "
                . "can be previewed at: '%s'.%s",
                $i,
                $videoCreative->getId(),
                $videoCreative->getName(),
                $videoCreative->getVastPreviewUrl(),
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

CreateVideoCreatives::main();
