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

namespace Google\AdsApi\Examples\AdWords\v201802\Misc;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201802\cm\MediaMediaType;
use Google\AdsApi\AdWords\v201802\cm\MediaService;
use Google\AdsApi\AdWords\v201802\cm\OrderBy;
use Google\AdsApi\AdWords\v201802\cm\Paging;
use Google\AdsApi\AdWords\v201802\cm\Predicate;
use Google\AdsApi\AdWords\v201802\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201802\cm\Selector;
use Google\AdsApi\AdWords\v201802\cm\SortOrder;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Common\Util\MapEntries;

/**
 * This example gets all images and videos. To upload an image, run
 * UploadImage.php. To upload a video, see http://goo.gl/Uqn0l.
 */
class GetAllImagesAndVideos
{

    const PAGE_LIMIT = 500;

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session
    ) {
        $mediaService = $adWordsServices->get($session, MediaService::class);

        // Create selector.
        $selector = new Selector();
        $selector->setFields(['MediaId', 'Width', 'Height', 'MimeType', 'Name']);
        $selector->setOrdering([new OrderBy('MediaId', SortOrder::ASCENDING)]);
        $selector->setPredicates(
            [
                new Predicate(
                    'Type',
                    PredicateOperator::IN,
                    [MediaMediaType::IMAGE, MediaMediaType::VIDEO]
                )
            ]
        );
        $selector->setPaging(new Paging(0, self::PAGE_LIMIT));

        $totalNumEntries = 0;
        do {
            // Make the get request.
            $page = $mediaService->get($selector);

            // Display results.
            if ($page->getEntries() !== null) {
                $totalNumEntries = $page->getTotalNumEntries();
                foreach ($page->getEntries() as $media) {
                    if ($media->getType() === MediaMediaType::IMAGE) {
                        $dimensions = MapEntries::toAssociativeArray($media->getDimensions());
                        printf(
                            "Image with dimensions %dx%d, MIME type '%s', and ID %d was found.\n",
                            $dimensions['FULL']->getWidth(),
                            $dimensions['FULL']->getHeight(),
                            $media->getMimeType(),
                            $media->getMediaId()
                        );
                    } elseif ($media->getType() === MediaMediaType::VIDEO) {
                        printf(
                            "Video with name '%s' and ID %d was found.\n",
                            $media->getName(),
                            $media->getMediaId()
                        );
                    }
                }
            }

            // Advance the paging index.
            $selector->getPaging()->setStartIndex(
                $selector->getPaging()->getStartIndex() + self::PAGE_LIMIT
            );
        } while ($selector->getPaging()->getStartIndex() < $totalNumEntries);

        printf("Number of results found: %d\n", $totalNumEntries);
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()->withOAuth2Credential($oAuth2Credential)->build();
        self::runExample(new AdWordsServices(), $session);
    }
}

GetAllImagesAndVideos::main();
