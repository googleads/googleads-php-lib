<?php
/**
 * Copyright 2018 Google Inc. All Rights Reserved.
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

namespace Google\AdsApi\Examples\AdWords\v201802\AdvancedOperations;

require __DIR__ . '/../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201802\cm\AdGroup;
use Google\AdsApi\AdWords\v201802\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201802\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201802\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201802\cm\AdGroupCriterionOperation;
use Google\AdsApi\AdWords\v201802\cm\AdGroupCriterionService;
use Google\AdsApi\AdWords\v201802\cm\AdGroupOperation;
use Google\AdsApi\AdWords\v201802\cm\AdGroupService;
use Google\AdsApi\AdWords\v201802\cm\AdGroupStatus;
use Google\AdsApi\AdWords\v201802\cm\AdvertisingChannelType;
use Google\AdsApi\AdWords\v201802\cm\BiddableAdGroupCriterion;
use Google\AdsApi\AdWords\v201802\cm\BiddingStrategyConfiguration;
use Google\AdsApi\AdWords\v201802\cm\BiddingStrategyType;
use Google\AdsApi\AdWords\v201802\cm\Budget;
use Google\AdsApi\AdWords\v201802\cm\Campaign;
use Google\AdsApi\AdWords\v201802\cm\CampaignOperation;
use Google\AdsApi\AdWords\v201802\cm\CampaignService;
use Google\AdsApi\AdWords\v201802\cm\CampaignStatus;
use Google\AdsApi\AdWords\v201802\cm\CriterionUserList;
use Google\AdsApi\AdWords\v201802\cm\DynamicSettings;
use Google\AdsApi\AdWords\v201802\cm\Image;
use Google\AdsApi\AdWords\v201802\cm\MediaMediaType;
use Google\AdsApi\AdWords\v201802\cm\MediaService;
use Google\AdsApi\AdWords\v201802\cm\Operator;
use Google\AdsApi\AdWords\v201802\cm\ResponsiveDisplayAd;
use Google\AdsApi\AdWords\v201802\cm\ShoppingPurchasePlatform;
use Google\AdsApi\AdWords\v201802\cm\ShoppingSetting;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds a Shopping dynamic remarketing campaign for the Display
 * Network via the following steps:
 *
 * <ul>
 *   <li>Creates a new Display Network campaign.
 *   <li>Links the campaign with Merchant Center.
 *   <li>Links the user list to the ad group.
 *   <li>Creates a responsive display ad to render the dynamic text.
 * </ul>
 */
class AddShoppingDynamicRemarketingCampaign
{

    const BUDGET_ID = 'INSERT_BUDGET_ID_HERE';
    const MERCHANT_ID = 'INSERT_MERCHANT_ID_HERE';
    const USER_LIST_ID = 'INSERT_USER_LIST_ID_HERE';

    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $budgetId,
        $merchantId,
        $userListId
    ) {
        $campaign = self::createCampaign(
            $adWordsServices,
            $session,
            $budgetId,
            $merchantId
        );
        printf(
            "Campaign with name '%s' and ID %d was added.\n",
            $campaign->getName(),
            $campaign->getId()
        );

        $adGroup = self::createAdGroup($adWordsServices, $session, $campaign);
        printf(
            "Ad group with name '%s' and ID %d was added.\n",
            $adGroup->getName(),
            $adGroup->getId()
        );

        $adGroupAd = self::createAd($adWordsServices, $session, $adGroup);
        printf(
            "Responsive display ad with ID %d was added.\n",
            $adGroupAd->getAd()
                ->getId()
        );

        self::attachUserList($adWordsServices, $session, $adGroup, $userListId);
        printf(
            "The user list with ID %d was attached to the ad group ID %d.\n",
            $userListId,
            $adGroup->getId()
        );
    }

    /**
     * Creates a Shopping dynamic remarketing campaign object (not including ad
     * group level and below).
     *
     * This creates a Display campaign with the merchant center feed attached.
     * Merchant Center is used for the product information in combination with
     * a user list which contains hits with {@code ecomm_prodid} specified. See
     * https://developers.google.com/adwords-remarketing-tag/parameters#retail
     * for more detail.
     *
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $session the AdWords session
     * @param int $budgetId the budget ID to use for the campaign
     * @param int $merchantId the ID of the Merchant Center account
     * @return Campaign the created campaign
     */
    private static function createCampaign(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $budgetId,
        $merchantId
    ) {
        $campaignService =
            $adWordsServices->get($session, CampaignService::class);

        // Create a campaign.
        $campaign = new Campaign();
        $campaign->setName('Shopping campaign #' . uniqid());
        // Dynamic remarketing campaigns are only available on the Google
        // Display Network.
        $campaign->setAdvertisingChannelType(AdvertisingChannelType::DISPLAY);

        // Recommendation: Set the campaign to PAUSED when creating it to
        // prevent the ads from immediately serving. Set to ENABLED once you've
        // added targeting and the ads are ready to serve.
        $campaign->setStatus(CampaignStatus::PAUSED);

        // Set shared budget (required).
        $budget = new Budget();
        $budget->setBudgetId($budgetId);
        $campaign->setBudget($budget);

        // This example uses a Manual CPC bidding strategy, but you should
        // select the strategy that best aligns with your sales goals. More
        // details here: https://support.google.com/adwords/answer/2472725.
        $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
        $biddingStrategyConfiguration->setBiddingStrategyType(
            BiddingStrategyType::MANUAL_CPC
        );
        $campaign->setBiddingStrategyConfiguration(
            $biddingStrategyConfiguration
        );

        // All Shopping campaigns need a ShoppingSetting.
        $shoppingSetting = new ShoppingSetting();
        // Campaigns with numerically higher priorities take precedence over
        // those with lower priorities.
        $shoppingSetting->setCampaignPriority(0);

        // Set the Merchant Center account ID from which to source products.
        $shoppingSetting->setMerchantId($merchantId);

        // Display Network campaigns do not support partition by country. The
        // only supported value is "ZZ". This signals that products from all
        // countries are available in the campaign. The actual products which
        // serve are based on the products tagged in the user list entry.
        $shoppingSetting->setSalesCountry('ZZ');

        // Enable local inventory ads (items for sale in physical stores.)
        $shoppingSetting->setEnableLocal(true);

        // Optional: Declare whether purchases are only made on the merchant
        // store, or completed on Google.
        $shoppingSetting->setPurchasePlatform(
            ShoppingPurchasePlatform::MERCHANT
        );

        $campaign->setSettings([$shoppingSetting]);

        // Creates operation.
        $campaignOperation = new CampaignOperation();
        $campaignOperation->setOperand($campaign);
        $campaignOperation->setOperator(Operator::ADD);

        // Makes the mutate request.
        $campaignAddResult = $campaignService->mutate([$campaignOperation]);
        $campaign = $campaignAddResult->getValue()[0];

        return $campaign;
    }

    /**
     * Creates an ad group in the specified campaign.
     *
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $session the AdWords session
     * @param Campaign $campaign the campaign to which the ad group should be
     *     attached
     * @return AdGroup the created ad group
     */
    private static function createAdGroup(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        Campaign $campaign
    ) {
        $adGroupService =
            $adWordsServices->get($session, AdGroupService::class);

        // Creates ad group.
        $adGroup = new AdGroup();
        $adGroup->setCampaignId($campaign->getId());
        $adGroup->setName('Dynamic remarketing ad group #' . uniqid());
        $adGroup->setStatus(AdGroupStatus::ENABLED);

        // Creates operation.
        $adGroupOperation = new AdGroupOperation();
        $adGroupOperation->setOperand($adGroup);
        $adGroupOperation->setOperator(Operator::ADD);

        // Makes the mutate request.
        $adGroupAddResult = $adGroupService->mutate([$adGroupOperation]);
        $adGroup = $adGroupAddResult->getValue()[0];

        return $adGroup;
    }

    /**
     * Attaches a user list to an ad group. The user list provides positive
     * targeting and feed information to drive the dynamic content of the ad.
     *
     * <p>Note: User lists are only supported at the ad group level for
     * positive targeting in dynamic remarketing campaigns.
     *
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $session the AdWords session
     * @param AdGroup $adGroup the ad group to attach the user list used for
     *     dynamic feed content
     * @param int $userListId the user list ID to use for targeting and dynamic
     *     content.
     * @return BiddableAdGroupCriterion the attached ad group criterion
     */
    private static function attachUserList(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        AdGroup $adGroup,
        $userListId
    ) {
        $adGroupCriterionService =
            $adWordsServices->get($session, AdGroupCriterionService::class);

        // Creates criterion user list.
        $userList = new CriterionUserList();
        $userList->setUserListId($userListId);

        // Creates ad group criterion.
        $adGroupCriterion = new BiddableAdGroupCriterion();
        $adGroupCriterion->setCriterion($userList);
        $adGroupCriterion->setAdGroupId($adGroup->getId());

        // Creates operation.
        $adGroupCriterionOperation = new AdGroupCriterionOperation();
        $adGroupCriterionOperation->setOperand($adGroupCriterion);
        $adGroupCriterionOperation->setOperator(Operator::ADD);

        // Makes the mutate request.
        $adGroupCriterionAddResult =
            $adGroupCriterionService->mutate([$adGroupCriterionOperation]);
        $adGroupCriterion = $adGroupCriterionAddResult->getValue()[0];

        return $adGroupCriterion;
    }

    /**
     * Creates an ad for serving dynamic content in a remarketing campaign.
     *
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $session the AdWords session
     * @param AdGroup $adGroup the ad group under wich to create the ad
     * @return AdGroupAd the created ad group ad
     */
    private static function createAd(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        AdGroup $adGroup
    ) {
        $adGroupAdService =
            $adWordsServices->get($session, AdGroupAdService::class);

        $responsiveDisplayAd = new ResponsiveDisplayAd();

        // This ad format does not allow the creation of an image using the
        // Image.data field. An image must first be created using the
        // MediaService and Image.mediaId must be populated when creating the
        // ad.
        $marketingImage = self::uploadImage(
            $adWordsServices,
            $session,
            'https://goo.gl/3b9Wfh'
        );
        $responsiveDisplayAd->setMarketingImage($marketingImage);

        $responsiveDisplayAd->setShortHeadline('Travel');
        $responsiveDisplayAd->setLongHeadline('Travel the World.');
        $responsiveDisplayAd->setDescription('Take to the air!');
        $responsiveDisplayAd->setBusinessName('Interplanetary Cruises');
        $responsiveDisplayAd->setFinalUrls(['http://www.example.com']);

        // Optional: Set the call-to-action text.
        // Valid texts: https://support.google.com/adwords/answer/7005917.
        $responsiveDisplayAd->setCallToActionText('Apply Now');

        // Optional: Set dynamic display ad settings, composed of landscape logo
        // image, promotion text, and price prefix.
        $dynamicDisplayAdSettings =
            self::createDynamicDisplayAdSettings($adWordsServices, $session);
        $responsiveDisplayAd->setDynamicDisplayAdSettings(
            $dynamicDisplayAdSettings
        );

        // Optional: Creates a square marketing image using MediaService, and
        // set it to the ad.
        $squareMarketingImage = self::uploadImage(
            $adWordsServices,
            $session,
            'https://goo.gl/mtt54n'
        );
        $responsiveDisplayAd->setSquareMarketingImage($squareMarketingImage);

        // Optional: Set the logo image.
        $logoImage = self::uploadImage(
            $adWordsServices,
            $session,
            'https://goo.gl/mtt54n'
        );
        $responsiveDisplayAd->setLogoImage($logoImage);

        // Whitelisted accounts only: Set color settings using hexadecimal
        // values. Set allowFlexibleColor to false if you want your ads to
        // render by always using your colors strictly.
        /*
        $responsiveDisplayAd->setMainColor('#0000ff');
        $responsiveDisplayAd->setAccentColor('#ffff00');
        $responsiveDisplayAd->setFlexibleColor(false);
        */

        // Whitelisted accounts only: Set the format setting that the ad will be
        // served in.
        /*
        $responsiveDisplayAd->setFormatSetting(
            \Google\AdsApi\AdWords\v201802\cm\DisplayAdFormatSetting::NON_NATIVE
        );
        */

        // Creates ad group ad.
        $adGroupAd = new AdGroupAd();
        $adGroupAd->setAdGroupId($adGroup->getId());
        $adGroupAd->setAd($responsiveDisplayAd);

        // Create an ad group ad operation.
        $adGroupAdOperation = new AdGroupAdOperation();
        $adGroupAdOperation->setOperand($adGroupAd);
        $adGroupAdOperation->setOperator(Operator::ADD);

        // Creates an ad group ad on the server.
        $adGroupAdAddResult = $adGroupAdService->mutate([$adGroupAdOperation]);
        $adGroupAd = $adGroupAdAddResult->getValue()[0];

        return $adGroupAd;
    }

    /**
     * Uploads an image from the specified URL.
     *
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $session the AdWords session
     * @param string $url the URL used to upload an image
     * @return Image the uploaded image
     */
    private static function uploadImage(
        AdWordsServices $adWordsServices,
        AdWordsSession $session,
        $url
    ) {
        $mediaService = $adWordsServices->get($session, MediaService::class);

        // Creates image.
        $image = new Image();
        $image->setData(file_get_contents($url));
        $image->setType(MediaMediaType::IMAGE);

        // Uploads image into the server.
        $result = $mediaService->upload([$image]);

        return $result[0];
    }

    /**
     * Creates dynamic display ad settings.
     *
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $session the AdWords session
     * @return DynamicSettings the created dynamic settings
     */
    private static function createDynamicDisplayAdSettings(
        AdWordsServices $adWordsServices,
        AdWordsSession $session
    ) {
        $landscapeLogoImage = self::uploadImage(
            $adWordsServices,
            $session,
            'https://goo.gl/dEvQeF'
        );
        $dynamicSettings = new DynamicSettings();
        $dynamicSettings->setLandscapeLogoImage($landscapeLogoImage);
        $dynamicSettings->setPricePrefix('as low as');
        $dynamicSettings->setPromoText('Free shipping!');

        return $dynamicSettings;
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()
            ->build();

        // Construct an API session configured from a properties file and the
        // OAuth2 credentials above.
        $session = (new AdWordsSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();
        self::runExample(
            new AdWordsServices(),
            $session,
            intval(self::BUDGET_ID),
            intval(self::MERCHANT_ID),
            intval(self::USER_LIST_ID)
        );
    }
}

AddShoppingDynamicRemarketingCampaign::main();
