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

namespace Google\AdsApi\Examples\Dfp\v201805\ProductTemplateService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\v201805\AdExchangeEnvironment;
use Google\AdsApi\Dfp\v201805\AdUnitTargeting;
use Google\AdsApi\Dfp\v201805\CreativePlaceholder;
use Google\AdsApi\Dfp\v201805\GeoTargeting;
use Google\AdsApi\Dfp\v201805\LineItemType;
use Google\AdsApi\Dfp\v201805\Location;
use Google\AdsApi\Dfp\v201805\NetworkService;
use Google\AdsApi\Dfp\v201805\ProductSegmentation;
use Google\AdsApi\Dfp\v201805\ProductTemplate;
use Google\AdsApi\Dfp\v201805\ProductTemplateMarketplaceInfo;
use Google\AdsApi\Dfp\v201805\ProductTemplateService;
use Google\AdsApi\Dfp\v201805\ProductType;
use Google\AdsApi\Dfp\v201805\RateType;
use Google\AdsApi\Dfp\v201805\Size;

/**
 * Creates a programmatic product template.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateProgrammaticProductTemplates
{

    public static function runExample(
        DfpServices $dfpServices,
        DfpSession $session
    ) {
        $productTemplateService = $dfpServices->get($session, ProductTemplateService::class);
        $networkService = $dfpServices->get($session, NetworkService::class);

        // Create a product template that will have standard proposal line items and
        // be trafficked in DFP.
        $productTemplate = new ProductTemplate();
        $productTemplate->setName('Product template #' . uniqid());
        $productTemplate->setLineItemType(LineItemType::STANDARD);
        $productTemplate->setProductType(ProductType::DFP);
        $productTemplate->setDescription(
            'This product template creates standard '
            . 'programmatic proposal line items targeting all ad units with '
            . 'product segmentation on geo targeting.'
        );
        $productTemplate->setRateType(RateType::CPM);

        // Set required Marketplace information.
        $marketplaceInfo = new ProductTemplateMarketplaceInfo();
        $marketplaceInfo->setAdExchangeEnvironment(AdExchangeEnvironment::DISPLAY);
        $productTemplate->setProductTemplateMarketplaceInfo($marketplaceInfo);

        // Set the name macro which will be used to generate the names of the
        // products. This will create a segmentation based on the line item type, ad
        // unit, and location.
        $productTemplate->setNameMacro(
            '<line-item-type> - <ad-unit> - <template-name> - <location>'
        );

        // Set the size of creatives that can be associated with the product template.
        $creativePlaceholder = new CreativePlaceholder();
        $creativePlaceholder->setSize(new Size(728, 90, false));
        $productTemplate->setCreativePlaceholders([$creativePlaceholder]);

        // Create ad unit targeting for the root ad unit (i.e. the whole network).
        $rootAdUnitId = $networkService->getCurrentNetwork()
            ->getEffectiveRootAdUnitId();
        $adUnitTargeting = new AdUnitTargeting();
        $adUnitTargeting->setAdUnitId($rootAdUnitId);
        $adUnitTargeting->setIncludeDescendants(true);

        // Create geo targeting for the US.
        $countryLocation = new Location();
        $countryLocation->setId(2840);

        // Create geo targeting for Hong Kong.
        $regionLocation = new Location();
        $regionLocation->setId(2344);

        $geoTargeting = new GeoTargeting();
        $geoTargeting->setTargetedLocations([$countryLocation, $regionLocation]);

        // Add geo as product segmentation.
        $productSegmentation = new ProductSegmentation();
        $productSegmentation->setAdUnitSegments([$adUnitTargeting]);
        $productSegmentation->setGeoSegment($geoTargeting);
        $productTemplate->setProductSegmentation($productSegmentation);

        // Create the product templates on the server.
        $results = $productTemplateService->createProductTemplates([$productTemplate]);

        // Print out some information for each created product template.
        foreach ($results as $i => $productTemplate) {
            printf(
                "%d) Programmatic product template with ID %d and name '%s' was created.\n",
                $i,
                $productTemplate->getId(),
                $productTemplate->getName()
            );
        }
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()
            ->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new DfpSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        self::runExample(new DfpServices(), $session);
    }
}

CreateProgrammaticProductTemplates::main();
