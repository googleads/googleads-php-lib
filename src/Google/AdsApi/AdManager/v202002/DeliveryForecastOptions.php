<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DeliveryForecastOptions
{

    /**
     * @var int[] $ignoredLineItemIds
     */
    protected $ignoredLineItemIds = null;

    /**
     * @param int[] $ignoredLineItemIds
     */
    public function __construct(array $ignoredLineItemIds = null)
    {
      $this->ignoredLineItemIds = $ignoredLineItemIds;
    }

    /**
     * @return int[]
     */
    public function getIgnoredLineItemIds()
    {
      return $this->ignoredLineItemIds;
    }

    /**
     * @param int[]|null $ignoredLineItemIds
     * @return \Google\AdsApi\AdManager\v202002\DeliveryForecastOptions
     */
    public function setIgnoredLineItemIds(array $ignoredLineItemIds = null)
    {
      $this->ignoredLineItemIds = $ignoredLineItemIds;
      return $this;
    }

}
