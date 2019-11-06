<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ImageCreative extends \Google\AdsApi\AdManager\v201911\BaseImageCreative
{

    /**
     * @var string $altText
     */
    protected $altText = null;

    /**
     * @var string $thirdPartyImpressionUrl
     */
    protected $thirdPartyImpressionUrl = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\CreativeAsset[] $secondaryImageAssets
     */
    protected $secondaryImageAssets = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v201911\Size $size
     * @param string $previewUrl
     * @param string[] $policyViolations
     * @param string[] $policyLabels
     * @param \Google\AdsApi\AdManager\v201911\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v201911\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v201911\BaseCustomFieldValue[] $customFieldValues
     * @param string $destinationUrl
     * @param string $destinationUrlType
     * @param boolean $overrideSize
     * @param \Google\AdsApi\AdManager\v201911\CreativeAsset $primaryImageAsset
     * @param string $altText
     * @param string $thirdPartyImpressionUrl
     * @param \Google\AdsApi\AdManager\v201911\CreativeAsset[] $secondaryImageAssets
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyViolations = null, array $policyLabels = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $destinationUrl = null, $destinationUrlType = null, $overrideSize = null, $primaryImageAsset = null, $altText = null, $thirdPartyImpressionUrl = null, array $secondaryImageAssets = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $policyLabels, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $destinationUrl, $destinationUrlType, $overrideSize, $primaryImageAsset);
      $this->altText = $altText;
      $this->thirdPartyImpressionUrl = $thirdPartyImpressionUrl;
      $this->secondaryImageAssets = $secondaryImageAssets;
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
     * @return \Google\AdsApi\AdManager\v201911\ImageCreative
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
     * @return \Google\AdsApi\AdManager\v201911\ImageCreative
     */
    public function setThirdPartyImpressionUrl($thirdPartyImpressionUrl)
    {
      $this->thirdPartyImpressionUrl = $thirdPartyImpressionUrl;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\CreativeAsset[]
     */
    public function getSecondaryImageAssets()
    {
      return $this->secondaryImageAssets;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\CreativeAsset[]|null $secondaryImageAssets
     * @return \Google\AdsApi\AdManager\v201911\ImageCreative
     */
    public function setSecondaryImageAssets(array $secondaryImageAssets = null)
    {
      $this->secondaryImageAssets = $secondaryImageAssets;
      return $this;
    }

}
