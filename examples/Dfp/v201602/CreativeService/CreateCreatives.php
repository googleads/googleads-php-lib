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
namespace Google\AdsApi\Examples\Dfp\v201602\CreativeService;

require '../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\v201602\CreativeAsset;
use Google\AdsApi\Dfp\v201602\ImageCreative;
use Google\AdsApi\Dfp\v201602\Size;
use ReflectionObject;

/**
 * This example creates a new image creative for a specified advertiser.
 */
class CreateCreatives {

  // Set the ID of the advertiser that the creative will belong to.
  const ADVERTISER_ID = 'INSERT_ADVERTISER_ID_HERE';

  public static function runExample(DfpServices $dfpServices,
      DfpSession $session, $advertiserId) {
    $creativeService = $dfpServices->get(
        $session, 'CreativeService', 'v201602');

    // Create creative size.
    $size = new Size();
    $size->setWidth(300);
    $size->setHeight(250);
    $size->setIsAspectRatio(false);

    // Create image creative.
    $imageCreative = new ImageCreative();
    $imageCreative->setName('Image creative #' . uniqid());
    $imageCreative->setAdvertiserId($advertiserId);
    $imageCreative->setDestinationUrl('http://google.com');
    $imageCreative->setSize($size);

    // Create image asset.
    $creativeAsset = new CreativeAsset();
    $creativeAsset->setFileName(sprintf('image-%s.jpg', uniqid()));
    $creativeAsset->setAssetByteArray(file_get_contents(
        'http://www.google.com/intl/en/adwords/select/images/samples/inline.jpg'
    ));

    $imageCreative->setPrimaryImageAsset($creativeAsset);

    // Create the image creative on the server.
    $createdCreatives =
        $creativeService->createCreatives([$imageCreative]);

    foreach ($createdCreatives as $imageCreative) {
      $imageCreativeClazz = new ReflectionObject($imageCreative);
      printf("Creative with ID %d, name '%s', size '%sx%s', and type '%s' "
          . "was created and can be previewed at: '%s'\n",
          $imageCreative->getId(),
          $imageCreative->getName(),
          $imageCreative->getSize()->getWidth(),
          $imageCreative->getSize()->getHeight(),
          $imageCreativeClazz->getShortName(),
          $imageCreative->getPreviewUrl()
      );
    }
  }

  public static function main() {
    $oAuth2Credential = (new OAuth2TokenBuilder())
        ->fromFile()
        ->build();
    $session = (new DfpSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential)
        ->build();
    self::runExample(new DfpServices(), $session, intval(self::ADVERTISER_ID));
  }
}

CreateCreatives::main();

