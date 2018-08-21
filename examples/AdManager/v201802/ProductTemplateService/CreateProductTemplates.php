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

namespace Google\AdsApi\Examples\AdManager\v201802\ProductTemplateService;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdManager\AdManagerServices;
use Google\AdsApi\AdManager\AdManagerSession;
use Google\AdsApi\AdManager\AdManagerSessionBuilder;
use Google\AdsApi\AdManager\v201802\AdUnitTargeting;
use Google\AdsApi\AdManager\v201802\Browser;
use Google\AdsApi\AdManager\v201802\BrowserTargeting;
use Google\AdsApi\AdManager\v201802\CreativePlaceholder;
use Google\AdsApi\AdManager\v201802\CustomizableAttributes;
use Google\AdsApi\AdManager\v201802\DeliveryRateType;
use Google\AdsApi\AdManager\v201802\GeoTargeting;
use Google\AdsApi\AdManager\v201802\LineItemType;
use Google\AdsApi\AdManager\v201802\Location;
use Google\AdsApi\AdManager\v201802\NetworkService;
use Google\AdsApi\AdManager\v201802\ProductSegmentation;
use Google\AdsApi\AdManager\v201802\ProductTemplate;
use Google\AdsApi\AdManager\v201802\ProductTemplateService;
use Google\AdsApi\AdManager\v201802\ProductType;
use Google\AdsApi\AdManager\v201802\RateType;
use Google\AdsApi\AdManager\v201802\RoadblockingType;
use Google\AdsApi\AdManager\v201802\Size;
use Google\AdsApi\AdManager\v201802\Targeting;
use Google\AdsApi\AdManager\v201802\TechnologyTargeting;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Creates product templates.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateProductTemplates
{

    public static function runExample(
        AdManagerServices $adManagerServices,
        AdManagerSession $session
    ) {
        $productTemplateService = $adManagerServices->get(
            $session,
            ProductTemplateService::class
        );
        $networkService = $adManagerServices->get(
            $session,
            NetworkService::class
        );

        $productTemplate = new ProductTemplate();
        $productTemplate->setName('Product template #' . uniqid());
        $productTemplate->setDescription(
            'This product template creates standard '
            . 'proposal line items targeting Chrome browsers with product '
            . 'segmentation on ad units and geo targeting.'
        );

        // Set the name macro which will be used to generate the names of the
        // products. This will create a segmentation based on the line item
        // type, ad unit, and location.
        $productTemplate->setNameMacro(
            '<line-item-type> - <ad-unit> - <template-name> - <location>'
        );

        // Set the product type so the created proposal line items will be
        // trafficked in AdManager.
        $productTemplate->setProductType(ProductType::DFP);

        // Set rate type to create CPM priced proposal line items.
        $productTemplate->setRateType(RateType::CPM);
        $productTemplate->setDeliveryRateType(
            DeliveryRateType::AS_FAST_AS_POSSIBLE
        );

        // Optionally set the creative rotation of the product to serve one or
        // more creatives.
        $productTemplate->setRoadblockingType(RoadblockingType::ONE_OR_MORE);

        // Set the size of creatives that can be associated with the product
        // template.
        $creativePlaceholder1 = new CreativePlaceholder();
        $size = new Size();
        $size->setWidth(728);
        $size->setHeight(90);
        $size->setIsAspectRatio(false);
        $creativePlaceholder1->setSize($size);
        $creativePlaceholder2 = new CreativePlaceholder();
        $size = new Size();
        $size->setWidth(300);
        $size->setHeight(250);
        $size->setIsAspectRatio(false);
        $creativePlaceholder2->setSize($size);
        $productTemplate->setCreativePlaceholders(
            [$creativePlaceholder1, $creativePlaceholder2]
        );

        // Set the type of proposal line item to be created from the product
        // template.
        $productTemplate->setLineItemType(LineItemType::STANDARD);

        // Add browser targeting to Chrome on the product template distinct from
        // product segmentation.
        $targeting = new Targeting();
        $technologyTargeting = new TechnologyTargeting();
        $browserTargeting = new BrowserTargeting();
        $browser = new Browser();
        $browser->setId(500072);
        $browserTargeting->setBrowsers([$browser]);
        $technologyTargeting->setBrowserTargeting($browserTargeting);
        $targeting->setTechnologyTargeting($technologyTargeting);
        $productTemplate->setBuiltInTargeting($targeting);

        // Allow placement targeting to be customized on the proposal line item.
        $customizableAttributes = new CustomizableAttributes();
        $customizableAttributes->setAllowPlacementTargetingCustomization(true);
        $productTemplate->setCustomizableAttributes($customizableAttributes);

        // Add inventory and geo targeting as product segmentation.
        $productSegmentation = new ProductSegmentation();
        // Create ad unit targeting for the root ad unit (i.e. the whole
        // network).
        $adUnitTargeting = new AdUnitTargeting();
        $adUnitTargeting->setAdUnitId(
            $networkService->getCurrentNetwork()
                ->getEffectiveRootAdUnitId()
        );
        $adUnitTargeting->setIncludeDescendants(true);
        $productSegmentation->setAdUnitSegments([$adUnitTargeting]);
        // Create geo targeting for the US and Hong Kong.
        $geoTargeting = new GeoTargeting();
        $location1 = new Location();
        $location1->setId(2840); // US
        $location2 = new Location();
        $location2->setId(2344); // Hong Kong
        $geoTargeting->setTargetedLocations([$location1, $location2]);

        $productSegmentation->setGeoSegment($geoTargeting);
        $productTemplate->setProductSegmentation($productSegmentation);

        // Create the product template on the server.
        $results = $productTemplateService->createProductTemplates(
            [$productTemplate]
        );

        // Print out some information for each created product template.
        foreach ($results as $i => $productTemplate) {
            printf(
                "%d) Product template with ID %d and name '%s' was created.\n",
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
        $session = (new AdManagerSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        self::runExample(new AdManagerServices(), $session);
    }
}

CreateProductTemplates::main();
