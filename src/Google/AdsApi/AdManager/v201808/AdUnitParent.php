<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdUnitParent
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $adUnitCode
     */
    protected $adUnitCode = null;

    /**
     * @param string $id
     * @param string $name
     * @param string $adUnitCode
     */
    public function __construct($id = null, $name = null, $adUnitCode = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->adUnitCode = $adUnitCode;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \Google\AdsApi\AdManager\v201808\AdUnitParent
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Google\AdsApi\AdManager\v201808\AdUnitParent
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdUnitCode()
    {
      return $this->adUnitCode;
    }

    /**
     * @param string $adUnitCode
     * @return \Google\AdsApi\AdManager\v201808\AdUnitParent
     */
    public function setAdUnitCode($adUnitCode)
    {
      $this->adUnitCode = $adUnitCode;
      return $this;
    }

}
