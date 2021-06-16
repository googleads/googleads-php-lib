<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeTargeting
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var \Google\AdsApi\AdManager\v202105\Targeting $targeting
     */
    protected $targeting = null;

    /**
     * @param string $name
     * @param \Google\AdsApi\AdManager\v202105\Targeting $targeting
     */
    public function __construct($name = null, $targeting = null)
    {
      $this->name = $name;
      $this->targeting = $targeting;
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
     * @return \Google\AdsApi\AdManager\v202105\CreativeTargeting
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202105\Targeting
     */
    public function getTargeting()
    {
      return $this->targeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202105\Targeting $targeting
     * @return \Google\AdsApi\AdManager\v202105\CreativeTargeting
     */
    public function setTargeting($targeting)
    {
      $this->targeting = $targeting;
      return $this;
    }

}
