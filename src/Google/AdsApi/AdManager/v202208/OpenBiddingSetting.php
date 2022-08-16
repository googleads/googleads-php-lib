<?php

namespace Google\AdsApi\AdManager\v202208;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OpenBiddingSetting extends \Google\AdsApi\AdManager\v202208\AbstractDisplaySettings
{

    /**
     * @var string $yieldIntegrationType
     */
    protected $yieldIntegrationType = null;

    /**
     * @param string $yieldIntegrationType
     */
    public function __construct($yieldIntegrationType = null)
    {
      $this->yieldIntegrationType = $yieldIntegrationType;
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
     * @return \Google\AdsApi\AdManager\v202208\OpenBiddingSetting
     */
    public function setYieldIntegrationType($yieldIntegrationType)
    {
      $this->yieldIntegrationType = $yieldIntegrationType;
      return $this;
    }

}
