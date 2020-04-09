<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeTranscode
{

    /**
     * @var string $adServer
     */
    protected $adServer = null;

    /**
     * @var string $creativeIdType
     */
    protected $creativeIdType = null;

    /**
     * @var string $creativeId
     */
    protected $creativeId = null;

    /**
     * @param string $adServer
     * @param string $creativeIdType
     * @param string $creativeId
     */
    public function __construct($adServer = null, $creativeIdType = null, $creativeId = null)
    {
      $this->adServer = $adServer;
      $this->creativeIdType = $creativeIdType;
      $this->creativeId = $creativeId;
    }

    /**
     * @return string
     */
    public function getAdServer()
    {
      return $this->adServer;
    }

    /**
     * @param string $adServer
     * @return \Google\AdsApi\AdManager\v202002\CreativeTranscode
     */
    public function setAdServer($adServer)
    {
      $this->adServer = $adServer;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreativeIdType()
    {
      return $this->creativeIdType;
    }

    /**
     * @param string $creativeIdType
     * @return \Google\AdsApi\AdManager\v202002\CreativeTranscode
     */
    public function setCreativeIdType($creativeIdType)
    {
      $this->creativeIdType = $creativeIdType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreativeId()
    {
      return $this->creativeId;
    }

    /**
     * @param string $creativeId
     * @return \Google\AdsApi\AdManager\v202002\CreativeTranscode
     */
    public function setCreativeId($creativeId)
    {
      $this->creativeId = $creativeId;
      return $this;
    }

}
