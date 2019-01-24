<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SecurityPolicySettings
{

    /**
     * @var string $securityPolicyType
     */
    protected $securityPolicyType = null;

    /**
     * @var string $tokenAuthenticationKey
     */
    protected $tokenAuthenticationKey = null;

    /**
     * @var boolean $disableServerSideUrlSigning
     */
    protected $disableServerSideUrlSigning = null;

    /**
     * @var string $originForwardingType
     */
    protected $originForwardingType = null;

    /**
     * @var string $originPathPrefix
     */
    protected $originPathPrefix = null;

    /**
     * @param string $securityPolicyType
     * @param string $tokenAuthenticationKey
     * @param boolean $disableServerSideUrlSigning
     * @param string $originForwardingType
     * @param string $originPathPrefix
     */
    public function __construct($securityPolicyType = null, $tokenAuthenticationKey = null, $disableServerSideUrlSigning = null, $originForwardingType = null, $originPathPrefix = null)
    {
      $this->securityPolicyType = $securityPolicyType;
      $this->tokenAuthenticationKey = $tokenAuthenticationKey;
      $this->disableServerSideUrlSigning = $disableServerSideUrlSigning;
      $this->originForwardingType = $originForwardingType;
      $this->originPathPrefix = $originPathPrefix;
    }

    /**
     * @return string
     */
    public function getSecurityPolicyType()
    {
      return $this->securityPolicyType;
    }

    /**
     * @param string $securityPolicyType
     * @return \Google\AdsApi\AdManager\v201808\SecurityPolicySettings
     */
    public function setSecurityPolicyType($securityPolicyType)
    {
      $this->securityPolicyType = $securityPolicyType;
      return $this;
    }

    /**
     * @return string
     */
    public function getTokenAuthenticationKey()
    {
      return $this->tokenAuthenticationKey;
    }

    /**
     * @param string $tokenAuthenticationKey
     * @return \Google\AdsApi\AdManager\v201808\SecurityPolicySettings
     */
    public function setTokenAuthenticationKey($tokenAuthenticationKey)
    {
      $this->tokenAuthenticationKey = $tokenAuthenticationKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisableServerSideUrlSigning()
    {
      return $this->disableServerSideUrlSigning;
    }

    /**
     * @param boolean $disableServerSideUrlSigning
     * @return \Google\AdsApi\AdManager\v201808\SecurityPolicySettings
     */
    public function setDisableServerSideUrlSigning($disableServerSideUrlSigning)
    {
      $this->disableServerSideUrlSigning = $disableServerSideUrlSigning;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginForwardingType()
    {
      return $this->originForwardingType;
    }

    /**
     * @param string $originForwardingType
     * @return \Google\AdsApi\AdManager\v201808\SecurityPolicySettings
     */
    public function setOriginForwardingType($originForwardingType)
    {
      $this->originForwardingType = $originForwardingType;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginPathPrefix()
    {
      return $this->originPathPrefix;
    }

    /**
     * @param string $originPathPrefix
     * @return \Google\AdsApi\AdManager\v201808\SecurityPolicySettings
     */
    public function setOriginPathPrefix($originPathPrefix)
    {
      $this->originPathPrefix = $originPathPrefix;
      return $this;
    }

}
