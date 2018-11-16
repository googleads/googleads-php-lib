<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdExchangeCreative extends \Google\AdsApi\AdManager\v201808\HasHtmlSnippetDynamicAllocationCreative
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
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v201808\Size $size
     * @param string $previewUrl
     * @param string[] $policyViolations
     * @param \Google\AdsApi\AdManager\v201808\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v201808\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v201808\BaseCustomFieldValue[] $customFieldValues
     * @param string $codeSnippet
     * @param boolean $isNativeEligible
     * @param boolean $isInterstitial
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $codeSnippet = null, $isNativeEligible = null, $isInterstitial = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $codeSnippet);
      $this->isNativeEligible = $isNativeEligible;
      $this->isInterstitial = $isInterstitial;
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
     * @return \Google\AdsApi\AdManager\v201808\AdExchangeCreative
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
     * @return \Google\AdsApi\AdManager\v201808\AdExchangeCreative
     */
    public function setIsInterstitial($isInterstitial)
    {
      $this->isInterstitial = $isInterstitial;
      return $this;
    }

}
