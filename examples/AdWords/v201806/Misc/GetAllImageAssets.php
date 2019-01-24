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

namespace Google\AdsApi\Examples\AdWords\v201806\Misc;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201806\cm\AssetService;
use Google\AdsApi\AdWords\v201806\cm\AssetType;
use Google\AdsApi\AdWords\v201806\cm\Paging;
use Google\AdsApi\AdWords\v201806\cm\Predicate;
use Google\AdsApi\AdWords\v201806\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201806\cm\Selector;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This code example gets all image assets. To upload an image asset, run
 * UploadImageAsset.php.
 */
class GetAllImageAssets
{

    const PAGE_LIMIT = 500;

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session
    ) {
        $assetService = $adWordsServices->get($session, AssetService::class);

        // Create selector.
        $selector = new Selector();
        $selector->setFields(
            [
                'AssetName',
                'AssetStatus',
                'ImageFileSize',
                'ImageWidth',
                'ImageHeight',
                'ImageFullSizeUrl'
            ]
        );
        // Filters for image assets only.
        $selector->setPredicates(
            [
                new Predicate(
                    'AssetSubtype',
                    PredicateOperator::IN,
                    [AssetType::IMAGE]
                )
            ]
        );
        $selector->setPaging(new Paging(0, self::PAGE_LIMIT));

        $totalNumEntries = 0;
        $i = 1;
        do {
            // Gets the image assets.
            $page = $assetService->get($selector);

            // Display the results.
            if ($page->getEntries() !== null) {
                $totalNumEntries = $page->getTotalNumEntries();
                foreach ($page->getEntries() as $imageAsset) {
                    printf(
                        "%d) Image asset with ID = '%s', name = '%s', "
                        . "and status = '%s' was found.%s",
                        $i,
                        $imageAsset->getAssetId(),
                        $imageAsset->getAssetName(),
                        $imageAsset->getAssetStatus(),
                        PHP_EOL
                    );
                    printf(
                        "  Size is %dx%d and asset URL is %s.%s",
                        $imageAsset->getFullSizeInfo()->getImageWidth(),
                        $imageAsset->getFullSizeInfo()->getImageHeight(),
                        $imageAsset->getFullSizeInfo()->getImageUrl(),
                        PHP_EOL
                    );
                    $i++;
                }
            }

            // Advance the paging index.
            $selector->getPaging()->setStartIndex(
                $selector->getPaging()->getStartIndex() + self::PAGE_LIMIT
            );
        } while ($selector->getPaging()->getStartIndex() < $totalNumEntries);

        printf(
            "Number of image assets found: %d.%s",
            $totalNumEntries,
            PHP_EOL
        );
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

GetAllImageAssets::main();
