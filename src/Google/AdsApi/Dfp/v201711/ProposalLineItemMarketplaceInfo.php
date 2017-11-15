<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalLineItemMarketplaceInfo
{

    /**
     * @var string $adExchangeEnvironment
     */
    protected $adExchangeEnvironment = null;

    /**
     * @param string $adExchangeEnvironment
     */
    public function __construct($adExchangeEnvironment = null)
    {
      $this->adExchangeEnvironment = $adExchangeEnvironment;
    }

    /**
     * @return string
     */
    public function getAdExchangeEnvironment()
    {
      return $this->adExchangeEnvironment;
    }

    /**
     * @param string $adExchangeEnvironment
     * @return \Google\AdsApi\Dfp\v201711\ProposalLineItemMarketplaceInfo
     */
    public function setAdExchangeEnvironment($adExchangeEnvironment)
    {
      $this->adExchangeEnvironment = $adExchangeEnvironment;
      return $this;
    }

}
