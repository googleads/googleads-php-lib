<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MediaLocationSettings
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $urlPrefix
     */
    protected $urlPrefix = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\SecurityPolicySettings $securityPolicy
     */
    protected $securityPolicy = null;

    /**
     * @param string $name
     * @param string $urlPrefix
     * @param \Google\AdsApi\AdManager\v201808\SecurityPolicySettings $securityPolicy
     */
    public function __construct($name = null, $urlPrefix = null, $securityPolicy = null)
    {
      $this->name = $name;
      $this->urlPrefix = $urlPrefix;
      $this->securityPolicy = $securityPolicy;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdManager\v201808\MediaLocationSettings
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrlPrefix()
    {
      return $this->urlPrefix;
    }

    /**
     * @param string $urlPrefix
     * @return \Google\AdsApi\AdManager\v201808\MediaLocationSettings
     */
    public function setUrlPrefix($urlPrefix)
    {
      $this->urlPrefix = $urlPrefix;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\SecurityPolicySettings
     */
    public function getSecurityPolicy()
    {
      return $this->securityPolicy;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\SecurityPolicySettings $securityPolicy
     * @return \Google\AdsApi\AdManager\v201808\MediaLocationSettings
     */
    public function setSecurityPolicy($securityPolicy)
    {
      $this->securityPolicy = $securityPolicy;
      return $this;
    }

}
