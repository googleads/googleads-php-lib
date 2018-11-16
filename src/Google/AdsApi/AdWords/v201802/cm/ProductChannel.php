<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductChannel extends \Google\AdsApi\AdWords\v201802\cm\ProductDimension
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
     * @return \Google\AdsApi\AdWords\v201802\cm\ProductChannel
     */
    public function setChannel($channel)
    {
      $this->channel = $channel;
      return $this;
    }

}
