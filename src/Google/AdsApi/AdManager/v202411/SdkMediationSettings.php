<?php

namespace Google\AdsApi\AdManager\v202411;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SdkMediationSettings extends \Google\AdsApi\AdManager\v202411\AbstractDisplaySettings
{

    /**
     * @var \Google\AdsApi\AdManager\v202411\YieldParameter_StringMapEntry[] $parameters
     */
    protected $parameters = null;

    /**
     * @var string $yieldIntegrationType
     */
    protected $yieldIntegrationType = null;

    /**
     * @var string $platform
     */
    protected $platform = null;

    /**
     * @param \Google\AdsApi\AdManager\v202411\YieldParameter_StringMapEntry[] $parameters
     * @param string $yieldIntegrationType
     * @param string $platform
     */
    public function __construct(array $parameters = null, $yieldIntegrationType = null, $platform = null)
    {
      $this->parameters = $parameters;
      $this->yieldIntegrationType = $yieldIntegrationType;
      $this->platform = $platform;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202411\YieldParameter_StringMapEntry[]
     */
    public function getParameters()
    {
      return $this->parameters;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202411\YieldParameter_StringMapEntry[]|null $parameters
     * @return \Google\AdsApi\AdManager\v202411\SdkMediationSettings
     */
    public function setParameters(array $parameters = null)
    {
      $this->parameters = $parameters;
      return $this;
    }

    /**
     * @return string
     */
    public function getYieldIntegrationType()
    {
      return $this->yieldIntegrationType;
    }

    /**
     * @param string $yieldIntegrationType
     * @return \Google\AdsApi\AdManager\v202411\SdkMediationSettings
     */
    public function setYieldIntegrationType($yieldIntegrationType)
    {
      $this->yieldIntegrationType = $yieldIntegrationType;
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
     * @return \Google\AdsApi\AdManager\v202411\SdkMediationSettings
     */
    public function setPlatform($platform)
    {
      $this->platform = $platform;
      return $this;
    }

}
