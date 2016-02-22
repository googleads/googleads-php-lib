<?php

namespace Google\AdsApi\Dfp\v201511;

class CrossSellingDistributor
{

    /**
     * @var string $networkName
     */
    protected $networkName = null;

    /**
     * @param string $networkName
     */
    public function __construct($networkName = null)
    {
      $this->networkName = $networkName;
    }

    /**
     * @return string
     */
    public function getNetworkName()
    {
      return $this->networkName;
    }

    /**
     * @param string $networkName
     * @return \Google\AdsApi\Dfp\v201511\CrossSellingDistributor
     */
    public function setNetworkName($networkName)
    {
      $this->networkName = $networkName;
      return $this;
    }

}
