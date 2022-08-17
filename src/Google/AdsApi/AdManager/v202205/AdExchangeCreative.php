<?php

namespace Google\AdsApi\AdManager\v202205;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdExchangeCreative extends \Google\AdsApi\AdManager\v202205\HasHtmlSnippetDynamicAllocationCreative
{

    /**
     * @var boolean $isNativeEligible
     */
    protected $isNativeEligible = null;

    /**
     * @var boolean $isInterstitial
     */
    protected $isInterstitial = null;

    /**
     * @var boolean $isAllowsAllRequestedSizes
     */
    protected $isAllowsAllRequestedSizes = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v202205\Size $size
     * @param string $previewUrl
     * @param string[] $policyLabels
     * @param \Google\AdsApi\AdManager\v202205\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v202205\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v202205\BaseCustomFieldValue[] $customFieldValues
     * @param \Google\AdsApi\AdManager\v202205\ThirdPartyDataDeclaration $thirdPartyDataDeclaration
     * @param string $codeSnippet
     * @param boolean $isNativeEligible
     * @param boolean $isInterstitial
     * @param boolean $isAllowsAllRequestedSizes
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyLabels = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $thirdPartyDataDeclaration = null, $codeSnippet = null, $isNativeEligible = null, $isInterstitial = null, $isAllowsAllRequestedSizes = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyLabels, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $thirdPartyDataDeclaration, $codeSnippet);
      $this->isNativeEligible = $isNativeEligible;
      $this->isInterstitial = $isInterstitial;
      $this->isAllowsAllRequestedSizes = $isAllowsAllRequestedSizes;
    }

    /**
     * @return boolean
     */
    public function getIsNativeEligible()
    {
      return $this->isNativeEligible;
    }

    /**
     * @param boolean $isNativeEligible
     * @return \Google\AdsApi\AdManager\v202205\AdExchangeCreative
     */
    public function setIsNativeEligible($isNativeEligible)
    {
      $this->isNativeEligible = $isNativeEligible;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInterstitial()
    {
      return $this->isInterstitial;
    }

    /**
     * @param boolean $isInterstitial
     * @return \Google\AdsApi\AdManager\v202205\AdExchangeCreative
     */
    public function setIsInterstitial($isInterstitial)
    {
      $this->isInterstitial = $isInterstitial;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAllowsAllRequestedSizes()
    {
      return $this->isAllowsAllRequestedSizes;
    }

    /**
     * @param boolean $isAllowsAllRequestedSizes
     * @return \Google\AdsApi\AdManager\v202205\AdExchangeCreative
     */
    public function setIsAllowsAllRequestedSizes($isAllowsAllRequestedSizes)
    {
      $this->isAllowsAllRequestedSizes = $isAllowsAllRequestedSizes;
      return $this;
    }

}
