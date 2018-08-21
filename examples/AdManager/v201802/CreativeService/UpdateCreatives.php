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

namespace Google\AdsApi\Examples\AdManager\v201802\CreativeService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerServices;
use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\Util\v201802\StatementBuilder;
use Google\AdsApi\AdManager\v201802\CreativeService;
use Google\AdsApi\AdManager\v201802\HasDestinationUrlCreative;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example updates a single creative's destination URL.
 */
class UpdateCreatives
{

    // Set the ID of the creative to update.
    const CREATIVE_ID = 'INSERT_CREATIVE_ID_HERE';

    public static function runExample(
        AdManagerServices $adManagerServices,
        AdManagerSession $session,
        $creativeId
    ) {
        $creativeService = $adManagerServices->get(
            $session,
            CreativeService::class
        );

        // Create a statement to select a single creative by ID.
        $statementBuilder = (new StatementBuilder())->where('id = :id')
            ->orderBy('id ASC')
            ->limit(1)
            ->withBindVariableValue('id', $creativeId);

        // Get the creative.
        $page = $creativeService->getCreativesByStatement(
            $statementBuilder->toStatement()
        );
        $creative = $page->getResults()[0];

        // Only update the destination URL if it has one.
        if ($creative instanceof HasDestinationUrlCreative) {
            // Update the destination URL of the creative.
            $creative->setDestinationUrl('https://news.google.com');

            // Update the creative on the server.
            $creatives = $creativeService->updateCreatives([$creative]);

            foreach ($creatives as $updatedCreative) {
                printf(
                    "Creative with ID %d and name '%s' was updated.\n",
                    $updatedCreative->getId(),
                    $updatedCreative->getName()
                );
            }
        } else {
            printf("No creatives were updated.\n");
        }
    }

    public static function main()
    {
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()
            ->build();
        $session = (new AdManagerSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();
        self::runExample(
            new AdManagerServices(),
            $session,
            intval(self::CREATIVE_ID)
        );
    }
}

UpdateCreatives::main();
