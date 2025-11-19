<?php

namespace Google\AdsApi\AdManager\v202511;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class UnsupportedCreative extends \Google\AdsApi\AdManager\v202511\Creative
{

    /**
     * @var string $unsupportedCreativeType
     */
    protected $unsupportedCreativeType = null;

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
     * @param string $unsupportedCreativeType
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyLabels = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $thirdPartyDataDeclaration = null, $thirdPartyDataDeclarationStatus = null, $adBadgingEnabled = null, $selfDeclaredEuropeanUnionPoliticalContent = null, $unsupportedCreativeType = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyLabels, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $thirdPartyDataDeclaration, $thirdPartyDataDeclarationStatus, $adBadgingEnabled, $selfDeclaredEuropeanUnionPoliticalContent);
      $this->unsupportedCreativeType = $unsupportedCreativeType;
    }

    /**
     * @return string
     */
    public function getUnsupportedCreativeType()
    {
      return $this->unsupportedCreativeType;
    }

    /**
     * @param string $unsupportedCreativeType
     * @return \Google\AdsApi\AdManager\v202511\UnsupportedCreative
     */
    public function setUnsupportedCreativeType($unsupportedCreativeType)
    {
      $this->unsupportedCreativeType = $unsupportedCreativeType;
      return $this;
    }

}
