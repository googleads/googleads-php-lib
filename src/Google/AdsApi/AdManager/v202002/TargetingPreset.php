<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetingPreset
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\Targeting $targeting
     */
    protected $targeting = null;

    /**
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v202002\Targeting $targeting
     */
    public function __construct($id = null, $name = null, $targeting = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->targeting = $targeting;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\AdManager\v202002\TargetingPreset
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
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
     * @return \Google\AdsApi\AdManager\v202002\TargetingPreset
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\Targeting
     */
    public function getTargeting()
    {
      return $this->targeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\Targeting $targeting
     * @return \Google\AdsApi\AdManager\v202002\TargetingPreset
     */
    public function setTargeting($targeting)
    {
      $this->targeting = $targeting;
      return $this;
    }

}
