<?php

namespace Google\AdsApi\AdManager\v202311;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DashBridge
{

    /**
     * @var boolean $enabled
     */
    protected $enabled = null;

    /**
     * @param boolean $enabled
     */
    public function __construct($enabled = null)
    {
      $this->enabled = $enabled;
    }

    /**
     * @return boolean
     */
    public function getEnabled()
    {
      return $this->enabled;
    }

    /**
     * @param boolean $enabled
     * @return \Google\AdsApi\AdManager\v202311\DashBridge
     */
    public function setEnabled($enabled)
    {
      $this->enabled = $enabled;
      return $this;
    }

}
