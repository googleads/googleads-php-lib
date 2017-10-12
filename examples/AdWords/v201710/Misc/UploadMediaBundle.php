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
namespace Google\AdsApi\Examples\AdWords\v201710\Misc;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201710\cm\MediaBundle;
use Google\AdsApi\AdWords\v201710\cm\MediaMediaType;
use Google\AdsApi\AdWords\v201710\cm\MediaService;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Common\Util\MapEntries;

/**
 * This example uploads an HTML5 zip file as a MediaBundle.
 */
class UploadImageBundle {

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session) {
    $mediaService =
        $adWordsServices->get($session, MediaService::class);

    // Create HTML5 media and add it to the list.
    $html5Zip = new MediaBundle();
    $html5Zip->setData(file_get_contents('https://goo.gl/9Y7qI2'));
    $html5Zip->setType(MediaMediaType::MEDIA_BUNDLE);
    $mediaBundles = [$html5Zip];

    // Upload the media bundle to the server.
    $result = $mediaService->upload($mediaBundles);

    // Print out some information about the uploaded image.
    $mediaBundle = $result[0];
    $dimensions = MapEntries::toAssociativeArray($mediaBundle->getDimensions());
    printf(
        "HTML5 media with ID %d, dimensions '%dx%d', MIME type '%s' was "
            . "uploaded.\n",
        $mediaBundle->getMediaId(),
        $dimensions['FULL']->getWidth(),
        $dimensions['FULL']->getHeight(),
        $mediaBundle->getMimeType()
    );
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
    self::runExample(new AdWordsServices(), $session);
  }
}

UploadImageBundle::main();
