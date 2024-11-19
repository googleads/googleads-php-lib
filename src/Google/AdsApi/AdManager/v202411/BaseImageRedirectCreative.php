<?php

namespace Google\AdsApi\AdManager\v202411;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class BaseImageRedirectCreative extends \Google\AdsApi\AdManager\v202411\HasDestinationUrlCreative
{

    /**
     * @var string $imageUrl
     */
    protected $imageUrl = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v202411\Size $size
     * @param string $previewUrl
     * @param string[] $policyLabels
     * @param \Google\AdsApi\AdManager\v202411\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v202411\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v202411\BaseCustomFieldValue[] $customFieldValues
     * @param \Google\AdsApi\AdManager\v202411\ThirdPartyDataDeclaration $thirdPartyDataDeclaration
     * @param boolean $adBadgingEnabled
     * @param string $destinationUrl
     * @param string $destinationUrlType
     * @param string $imageUrl
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyLabels = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $thirdPartyDataDeclaration = null, $adBadgingEnabled = null, $destinationUrl = null, $destinationUrlType = null, $imageUrl = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyLabels, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $thirdPartyDataDeclaration, $adBadgingEnabled, $destinationUrl, $destinationUrlType);
      $this->imageUrl = $imageUrl;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
      return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     * @return \Google\AdsApi\AdManager\v202411\BaseImageRedirectCreative
     */
    public function setImageUrl($imageUrl)
    {
      $this->imageUrl = $imageUrl;
      return $this;
    }

}
