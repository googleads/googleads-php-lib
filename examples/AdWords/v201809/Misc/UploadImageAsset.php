<?php
/**
 * Copyright 2018 Google LLC
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

namespace Google\AdsApi\Examples\AdWords\v201809\Misc;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201809\cm\AssetOperation;
use Google\AdsApi\AdWords\v201809\cm\AssetService;
use Google\AdsApi\AdWords\v201809\cm\ImageAsset;
use Google\AdsApi\AdWords\v201809\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This code example uploads an image asset. To get images, run
 * GetAllImageAssets.php.
 */
class UploadImageAsset
{

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session
    ) {
        $assetService = $adWordsServices->get($session, AssetService::class);

        // Create an image asset.
        $imageAsset = new ImageAsset();
        // Optional: Provide a unique friendly name to identify your asset. If
        // you specify the assetName field, then both the asset name and the
        // image being uploaded should be unique, and should not match another
        // ACTIVE asset in this customer account.
        // $imageAsset->setAssetName('Jupiter Trip #' . uniqid());
        $imageAsset->setImageData(file_get_contents('https://goo.gl/3b9Wfh'));

        // Create an asset operation.
        $operation = new AssetOperation();
        $operation->setOperand($imageAsset);
        $operation->setOperator(Operator::ADD);

        // Adds the image asset on the server.
        $result = $assetService->mutate([$operation]);

        if (!empty($result->getValue())) {
            // Print out some information about the added image asset.
            $addedImageAsset = $result->getValue()[0];
            printf(
                "Image asset with ID = '%s' and name = '%s' was created.%s",
                $addedImageAsset->getAssetId(),
                $addedImageAsset->getAssetName(),
                PHP_EOL
            );
        } else {
            print 'No image asset was created.' . PHP_EOL;
        }
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();
        self::runExample(new AdWordsServices(), $session);
    }
}

UploadImageAsset::main();
