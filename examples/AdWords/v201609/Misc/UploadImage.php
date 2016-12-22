<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
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
namespace Google\AdsApi\Examples\AdWords\v201609\Misc;

require '../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201609\cm\Image;
use Google\AdsApi\AdWords\v201609\cm\MediaMediaType;
use Google\AdsApi\AdWords\v201609\cm\MediaService;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Common\Util\MapEntries;

/**
 * This example uploads an image.
 */
class UploadImage {

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session) {
    $mediaService =
        $adWordsServices->get($session, MediaService::class);

    // Create an image and add it to the images list.
    $image = new Image();
    $image->setData(file_get_contents('http://goo.gl/HJM3L'));
    $image->setType(MediaMediaType::IMAGE);
    $images = [$image];

    // Upload the image to the server.
    $result = $mediaService->upload($images);

    // Print out some information about the uploaded image.
    $image = $result[0];
    $dimensions = MapEntries::toAssociativeArray($image->getDimensions());
    printf(
        "Image with dimensions '%dx%d', MIME type '%s', and id %d was "
            . "uploaded.\n",
        $dimensions['FULL']->getWidth(),
        $dimensions['FULL']->getHeight(),
        $image->getMimeType(),
        $image->getMediaId()
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

UploadImage::main();
