<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class ProductChannel extends \Google\AdsApi\AdWords\v201601\cm\ProductDimension
{

    /**
     * @var string $channel
     */
    protected $channel = null;

    /**
     * @param string $ProductDimensionType
     * @param string $channel
     */
    public function __construct($ProductDimensionType = null, $channel = null)
    {
      parent::__construct($ProductDimensionType);
      $this->channel = $channel;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
      return $this->channel;
    }

    /**
     * @param string $channel
     * @return \Google\AdsApi\AdWords\v201601\cm\ProductChannel
     */
    public function setChannel($channel)
    {
      $this->channel = $channel;
      return $this;
    }

}
