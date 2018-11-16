<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AspectRatioImageCreative extends \Google\AdsApi\AdManager\v201808\HasDestinationUrlCreative
{

    /**
     * @var \Google\AdsApi\AdManager\v201808\CreativeAsset[] $imageAssets
     */
    protected $imageAssets = null;

    /**
     * @var string $altText
     */
    protected $altText = null;

    /**
     * @var string $thirdPartyImpressionUrl
     */
    protected $thirdPartyImpressionUrl = null;

    /**
     * @var boolean $overrideSize
     */
    protected $overrideSize = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v201808\Size $size
     * @param string $previewUrl
     * @param string[] $policyViolations
     * @param \Google\AdsApi\AdManager\v201808\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v201808\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v201808\BaseCustomFieldValue[] $customFieldValues
     * @param string $destinationUrl
     * @param string $destinationUrlType
     * @param \Google\AdsApi\AdManager\v201808\CreativeAsset[] $imageAssets
     * @param string $altText
     * @param string $thirdPartyImpressionUrl
     * @param boolean $overrideSize
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $destinationUrl = null, $destinationUrlType = null, array $imageAssets = null, $altText = null, $thirdPartyImpressionUrl = null, $overrideSize = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $destinationUrl, $destinationUrlType);
      $this->imageAssets = $imageAssets;
      $this->altText = $altText;
      $this->thirdPartyImpressionUrl = $thirdPartyImpressionUrl;
      $this->overrideSize = $overrideSize;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\CreativeAsset[]
     */
    public function getImageAssets()
    {
      return $this->imageAssets;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\CreativeAsset[] $imageAssets
     * @return \Google\AdsApi\AdManager\v201808\AspectRatioImageCreative
     */
    public function setImageAssets(array $imageAssets)
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
     * @return \Google\AdsApi\AdManager\v201808\AspectRatioImageCreative
     */
    public function setAltText($altText)
    {
      $this->altText = $altText;
      return $this;
    }

    /**
     * @return string
     */
    public function getThirdPartyImpressionUrl()
    {
      return $this->thirdPartyImpressionUrl;
    }

    /**
     * @param string $thirdPartyImpressionUrl
     * @return \Google\AdsApi\AdManager\v201808\AspectRatioImageCreative
     */
    public function setThirdPartyImpressionUrl($thirdPartyImpressionUrl)
    {
      $this->thirdPartyImpressionUrl = $thirdPartyImpressionUrl;
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
     * @return \Google\AdsApi\AdManager\v201808\AspectRatioImageCreative
     */
    public function setOverrideSize($overrideSize)
    {
      $this->overrideSize = $overrideSize;
      return $this;
    }

}
