<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class ProductChannelExclusivity extends \Google\AdsApi\AdWords\v201601\cm\ProductDimension
{

    /**
     * @var string $channelExclusivity
     */
    protected $channelExclusivity = null;

    /**
     * @param string $ProductDimensionType
     * @param string $channelExclusivity
     */
    public function __construct($ProductDimensionType = null, $channelExclusivity = null)
    {
      parent::__construct($ProductDimensionType);
      $this->channelExclusivity = $channelExclusivity;
    }

    /**
     * @return string
     */
    public function getChannelExclusivity()
    {
      return $this->channelExclusivity;
    }

    /**
     * @param string $channelExclusivity
     * @return \Google\AdsApi\AdWords\v201601\cm\ProductChannelExclusivity
     */
    public function setChannelExclusivity($channelExclusivity)
    {
      $this->channelExclusivity = $channelExclusivity;
      return $this;
    }

}
