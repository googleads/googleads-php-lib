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

namespace Google\AdsApi\Examples\AdWords\v201710\AdvancedOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201710\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201710\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201710\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201710\cm\AdGroupAdStatus;
use Google\AdsApi\AdWords\v201710\cm\Dimensions;
use Google\AdsApi\AdWords\v201710\cm\MediaBundle;
use Google\AdsApi\AdWords\v201710\cm\Operator;
use Google\AdsApi\AdWords\v201710\cm\TemplateAd;
use Google\AdsApi\AdWords\v201710\cm\TemplateElement;
use Google\AdsApi\AdWords\v201710\cm\TemplateElementField;
use Google\AdsApi\AdWords\v201710\cm\TemplateElementFieldType;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds an HTML5 ad to given ad group. To get ad groups, run
 * GetAdGroups.php.
 */
class AddHtml5Ad
{

    const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $adGroupId
    ) {
        $adGroupAdService = $adWordsServices->get($session, AdGroupAdService::class);

        $operations = [];
        // Create a template ad.
        $html5Ad = new TemplateAd();
        $html5Ad->setName('Ad for HTML5');
        // 419 represents uploaded HTML5 bundle. See
        // https://developers.google.com/adwords/api/docs/appendix/templateads
        // for details.
        $html5Ad->setTemplateId(419);
        $html5Ad->setFinalUrls(['http://example.com/html5']);
        $html5Ad->setDisplayUrl('example.com/html5');

        $dimensions = new Dimensions();
        $dimensions->setWidth(300);
        $dimensions->setHeight(250);
        $html5Ad->setDimensions($dimensions);

        // The HTML5 zip file contains all the HTML, CSS, and images needed for the
        // HTML5 ad. For help on creating an HTML5 zip file, check out Google Web
        // Designer (https://www.google.com/webdesigner/).
        $html5Zip = file_get_contents('https://goo.gl/9Y7qI2');

        // Create a media bundle containing the zip file with all the HTML5
        // components.
        // NOTE: You may also upload an HTML5 zip using MediaService.upload()
        // and simply set the mediaId field below. See UploadMediaBundle.php for an
        // example.
        $mediaBundle = new MediaBundle();
        $mediaBundle->setData($html5Zip);
        $mediaBundle->setEntryPoint('carousel/index.html');
        $mediaBundle->setType('MEDIA_BUNDLE');

        // Create the template elements for the ad. You can refer to
        // https://developers.google.com/adwords/api/docs/appendix/templateads
        // for the list of avaliable template fields.
        $media = new TemplateElementField();
        $media->setName('Custom_layout');
        $media->setFieldMedia($mediaBundle);
        $media->setType(TemplateElementFieldType::MEDIA_BUNDLE);

        $layout = new TemplateElementField();
        $layout->setName('layout');
        $layout->setFieldText('Custom');
        $layout->setType(TemplateElementFieldType::ENUM);

        $adData = new TemplateElement();
        $adData->setUniqueName('adData');
        $adData->setFields([$media, $layout]);

        $html5Ad->setTemplateElements([$adData]);

        // Create ad group ad.
        $adGroupAd = new AdGroupAd();
        $adGroupAd->setAdGroupId($adGroupId);
        $adGroupAd->setAd($html5Ad);
        // Optional: Set additional settings.
        $adGroupAd->setStatus(AdGroupAdStatus::PAUSED);

        // Create ad group ad operation and add it to the list.
        $operation = new AdGroupAdOperation();
        $operation->setOperand($adGroupAd);
        $operation->setOperator(Operator::ADD);
        $operations[] = $operation;

        // Create the ad group ad on the server and print out some information
        // about it.
        $result = $adGroupAdService->mutate($operations);
        foreach ($result->getValue() as $adGroupAd) {
            printf(
                "New HTML5 ad with ID %d and display URL '%s' was created.\n",
                $adGroupAd->getAd()->getId(),
                $adGroupAd->getAd()->getDisplayUrl()
            );
        }
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()->withOAuth2Credential($oAuth2Credential)->build();
        self::runExample(
            new AdWordsServices(),
            $session,
            intval(self::AD_GROUP_ID)
        );
    }
}

AddHtml5Ad::main();
