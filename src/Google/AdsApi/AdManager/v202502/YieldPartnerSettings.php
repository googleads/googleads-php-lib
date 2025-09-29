<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class YieldPartnerSettings
{

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $environment
     */
    protected $environment = null;

    /**
     * @var string $format
     */
    protected $format = null;

    /**
     * @var string $integrationType
     */
    protected $integrationType = null;

    /**
     * @var string $platform
     */
    protected $platform = null;

    /**
     * @var \Google\AdsApi\AdManager\v202502\YieldParameter[] $parameters
     */
    protected $parameters = null;

    /**
     * @param string $status
     * @param string $environment
     * @param string $format
     * @param string $integrationType
     * @param string $platform
     * @param \Google\AdsApi\AdManager\v202502\YieldParameter[] $parameters
     */
    public function __construct($status = null, $environment = null, $format = null, $integrationType = null, $platform = null, ?array $parameters = null)
    {
      $this->status = $status;
      $this->environment = $environment;
      $this->format = $format;
      $this->integrationType = $integrationType;
      $this->platform = $platform;
      $this->parameters = $parameters;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdManager\v202502\YieldPartnerSettings
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getEnvironment()
    {
      return $this->environment;
    }

    /**
     * @param string $environment
     * @return \Google\AdsApi\AdManager\v202502\YieldPartnerSettings
     */
    public function setEnvironment($environment)
    {
      $this->environment = $environment;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
      return $this->format;
    }

    /**
     * @param string $format
     * @return \Google\AdsApi\AdManager\v202502\YieldPartnerSettings
     */
    public function setFormat($format)
    {
      $this->format = $format;
      return $this;
    }

    /**
     * @return string
     */
    public function getIntegrationType()
    {
      return $this->integrationType;
    }

    /**
     * @param string $integrationType
     * @return \Google\AdsApi\AdManager\v202502\YieldPartnerSettings
     */
    public function setIntegrationType($integrationType)
    {
      $this->integrationType = $integrationType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlatform()
    {
      return $this->platform;
    }

    /**
     * @param string $platform
     * @return \Google\AdsApi\AdManager\v202502\YieldPartnerSettings
     */
    public function setPlatform($platform)
    {
      $this->platform = $platform;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\YieldParameter[]
     */
    public function getParameters()
    {
      return $this->parameters;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\YieldParameter[]|null $parameters
     * @return \Google\AdsApi\AdManager\v202502\YieldPartnerSettings
     */
    public function setParameters(?array $parameters = null)
    {
      $this->parameters = $parameters;
      return $this;
    }

}
