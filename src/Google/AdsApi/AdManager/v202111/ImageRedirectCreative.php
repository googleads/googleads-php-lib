<?php

namespace Google\AdsApi\AdManager\v202111;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ImageRedirectCreative extends \Google\AdsApi\AdManager\v202111\BaseImageRedirectCreative
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
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v202111\Size $size
     * @param string $previewUrl
     * @param string[] $policyLabels
     * @param \Google\AdsApi\AdManager\v202111\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v202111\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v202111\BaseCustomFieldValue[] $customFieldValues
     * @param \Google\AdsApi\AdManager\v202111\ThirdPartyDataDeclaration $thirdPartyDataDeclaration
     * @param string $destinationUrl
     * @param string $destinationUrlType
     * @param string $imageUrl
     * @param string $altText
     * @param string $thirdPartyImpressionUrl
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyLabels = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $thirdPartyDataDeclaration = null, $destinationUrl = null, $destinationUrlType = null, $imageUrl = null, $altText = null, $thirdPartyImpressionUrl = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyLabels, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $thirdPartyDataDeclaration, $destinationUrl, $destinationUrlType, $imageUrl);
      $this->altText = $altText;
      $this->thirdPartyImpressionUrl = $thirdPartyImpressionUrl;
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
     * @return \Google\AdsApi\AdManager\v202111\ImageRedirectCreative
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
     * @return \Google\AdsApi\AdManager\v202111\ImageRedirectCreative
     */
    public function setThirdPartyImpressionUrl($thirdPartyImpressionUrl)
    {
      $this->thirdPartyImpressionUrl = $thirdPartyImpressionUrl;
      return $this;
    }

}
