<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Chain
{

    /**
     * @var int $chainId
     */
    protected $chainId = null;

    /**
     * @param int $chainId
     */
    public function __construct($chainId = null)
    {
      $this->chainId = $chainId;
    }

    /**
     * @return int
     */
    public function getChainId()
    {
      return $this->chainId;
    }

    /**
     * @param int $chainId
     * @return \Google\AdsApi\AdWords\v201806\cm\Chain
     */
    public function setChainId($chainId)
    {
      $this->chainId = (!is_null($chainId) && PHP_INT_SIZE === 4)
          ? floatval($chainId) : $chainId;
      return $this;
    }

}
