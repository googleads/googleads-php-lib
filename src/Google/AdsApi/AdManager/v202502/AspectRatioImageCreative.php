<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AspectRatioImageCreative extends \Google\AdsApi\AdManager\v202502\HasDestinationUrlCreative
{

    /**
     * @var \Google\AdsApi\AdManager\v202502\CreativeAsset[] $imageAssets
     */
    protected $imageAssets = null;

    /**
     * @var string $altText
     */
    protected $altText = null;

    /**
     * @var string[] $thirdPartyImpressionTrackingUrls
     */
    protected $thirdPartyImpressionTrackingUrls = null;

    /**
     * @var boolean $overrideSize
     */
    protected $overrideSize = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v202502\Size $size
     * @param string $previewUrl
     * @param string[] $policyLabels
     * @param \Google\AdsApi\AdManager\v202502\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v202502\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v202502\BaseCustomFieldValue[] $customFieldValues
     * @param \Google\AdsApi\AdManager\v202502\ThirdPartyDataDeclaration $thirdPartyDataDeclaration
     * @param boolean $adBadgingEnabled
     * @param string $destinationUrl
     * @param string $destinationUrlType
     * @param \Google\AdsApi\AdManager\v202502\CreativeAsset[] $imageAssets
     * @param string $altText
     * @param string[] $thirdPartyImpressionTrackingUrls
     * @param boolean $overrideSize
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, ?array $policyLabels = null, ?array $appliedLabels = null, $lastModifiedDateTime = null, ?array $customFieldValues = null, $thirdPartyDataDeclaration = null, $adBadgingEnabled = null, $destinationUrl = null, $destinationUrlType = null, ?array $imageAssets = null, $altText = null, ?array $thirdPartyImpressionTrackingUrls = null, $overrideSize = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyLabels, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $thirdPartyDataDeclaration, $adBadgingEnabled, $destinationUrl, $destinationUrlType);
      $this->imageAssets = $imageAssets;
      $this->altText = $altText;
      $this->thirdPartyImpressionTrackingUrls = $thirdPartyImpressionTrackingUrls;
      $this->overrideSize = $overrideSize;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\CreativeAsset[]
     */
    public function getImageAssets()
    {
      return $this->imageAssets;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\CreativeAsset[]|null $imageAssets
     * @return \Google\AdsApi\AdManager\v202502\AspectRatioImageCreative
     */
    public function setImageAssets(?array $imageAssets = null)
    {
      $this->imageAssets = $imageAssets;
      return $this;
    }

    /**
     * @return string
     */
    public function getAltText()
    {
      return $this->altText;
    }

    /**
     * @param string $altText
     * @return \Google\AdsApi\AdManager\v202502\AspectRatioImageCreative
     */
    public function setAltText($altText)
    {
      $this->altText = $altText;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getThirdPartyImpressionTrackingUrls()
    {
      return $this->thirdPartyImpressionTrackingUrls;
    }

    /**
     * @param string[]|null $thirdPartyImpressionTrackingUrls
     * @return \Google\AdsApi\AdManager\v202502\AspectRatioImageCreative
     */
    public function setThirdPartyImpressionTrackingUrls(?array $thirdPartyImpressionTrackingUrls = null)
    {
      $this->thirdPartyImpressionTrackingUrls = $thirdPartyImpressionTrackingUrls;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverrideSize()
    {
      return $this->overrideSize;
    }

    /**
     * @param boolean $overrideSize
     * @return \Google\AdsApi\AdManager\v202502\AspectRatioImageCreative
     */
    public function setOverrideSize($overrideSize)
    {
      $this->overrideSize = $overrideSize;
      return $this;
    }

}
