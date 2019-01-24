<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ViewabilityProvider
{

    /**
     * @var string $vendorKey
     */
    protected $vendorKey = null;

    /**
     * @var string $verificationScriptUrl
     */
    protected $verificationScriptUrl = null;

    /**
     * @var string $verificationParameters
     */
    protected $verificationParameters = null;

    /**
     * @var string $verificationRejectionTrackerUrl
     */
    protected $verificationRejectionTrackerUrl = null;

    /**
     * @param string $vendorKey
     * @param string $verificationScriptUrl
     * @param string $verificationParameters
     * @param string $verificationRejectionTrackerUrl
     */
    public function __construct($vendorKey = null, $verificationScriptUrl = null, $verificationParameters = null, $verificationRejectionTrackerUrl = null)
    {
      $this->vendorKey = $vendorKey;
      $this->verificationScriptUrl = $verificationScriptUrl;
      $this->verificationParameters = $verificationParameters;
      $this->verificationRejectionTrackerUrl = $verificationRejectionTrackerUrl;
    }

    /**
     * @return string
     */
    public function getVendorKey()
    {
      return $this->vendorKey;
    }

    /**
     * @param string $vendorKey
     * @return \Google\AdsApi\AdManager\v201808\ViewabilityProvider
     */
    public function setVendorKey($vendorKey)
    {
      $this->vendorKey = $vendorKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getVerificationScriptUrl()
    {
      return $this->verificationScriptUrl;
    }

    /**
     * @param string $verificationScriptUrl
     * @return \Google\AdsApi\AdManager\v201808\ViewabilityProvider
     */
    public function setVerificationScriptUrl($verificationScriptUrl)
    {
      $this->verificationScriptUrl = $verificationScriptUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getVerificationParameters()
    {
      return $this->verificationParameters;
    }

    /**
     * @param string $verificationParameters
     * @return \Google\AdsApi\AdManager\v201808\ViewabilityProvider
     */
    public function setVerificationParameters($verificationParameters)
    {
      $this->verificationParameters = $verificationParameters;
      return $this;
    }

    /**
     * @return string
     */
    public function getVerificationRejectionTrackerUrl()
    {
      return $this->verificationRejectionTrackerUrl;
    }

    /**
     * @param string $verificationRejectionTrackerUrl
     * @return \Google\AdsApi\AdManager\v201808\ViewabilityProvider
     */
    public function setVerificationRejectionTrackerUrl($verificationRejectionTrackerUrl)
    {
      $this->verificationRejectionTrackerUrl = $verificationRejectionTrackerUrl;
      return $this;
    }

}
