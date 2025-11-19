<?php

namespace Google\AdsApi\AdManager\v202511;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ClickTrackingCreative extends \Google\AdsApi\AdManager\v202511\Creative
{

    /**
     * @var string $clickTrackingUrl
     */
    protected $clickTrackingUrl = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v202511\Size $size
     * @param string $previewUrl
     * @param string[] $policyLabels
     * @param \Google\AdsApi\AdManager\v202511\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v202511\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v202511\BaseCustomFieldValue[] $customFieldValues
     * @param \Google\AdsApi\AdManager\v202511\ThirdPartyDataDeclaration $thirdPartyDataDeclaration
     * @param string $thirdPartyDataDeclarationStatus
     * @param boolean $adBadgingEnabled
     * @param boolean $selfDeclaredEuropeanUnionPoliticalContent
     * @param string $clickTrackingUrl
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyLabels = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $thirdPartyDataDeclaration = null, $thirdPartyDataDeclarationStatus = null, $adBadgingEnabled = null, $selfDeclaredEuropeanUnionPoliticalContent = null, $clickTrackingUrl = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyLabels, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $thirdPartyDataDeclaration, $thirdPartyDataDeclarationStatus, $adBadgingEnabled, $selfDeclaredEuropeanUnionPoliticalContent);
      $this->clickTrackingUrl = $clickTrackingUrl;
    }

    /**
     * @return string
     */
    public function getClickTrackingUrl()
    {
      return $this->clickTrackingUrl;
    }

    /**
     * @param string $clickTrackingUrl
     * @return \Google\AdsApi\AdManager\v202511\ClickTrackingCreative
     */
    public function setClickTrackingUrl($clickTrackingUrl)
    {
      $this->clickTrackingUrl = $clickTrackingUrl;
      return $this;
    }

}
