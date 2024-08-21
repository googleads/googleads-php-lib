<?php

namespace Google\AdsApi\AdManager\v202408;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LiveStreamConditioning
{

    /**
     * @var \Google\AdsApi\AdManager\v202408\DashBridge $dashBridge
     */
    protected $dashBridge = null;

    /**
     * @param \Google\AdsApi\AdManager\v202408\DashBridge $dashBridge
     */
    public function __construct($dashBridge = null)
    {
      $this->dashBridge = $dashBridge;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202408\DashBridge
     */
    public function getDashBridge()
    {
      return $this->dashBridge;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202408\DashBridge $dashBridge
     * @return \Google\AdsApi\AdManager\v202408\LiveStreamConditioning
     */
    public function setDashBridge($dashBridge)
    {
      $this->dashBridge = $dashBridge;
      return $this;
    }

}
