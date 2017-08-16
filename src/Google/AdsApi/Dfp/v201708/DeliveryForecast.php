<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DeliveryForecast
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\LineItemDeliveryForecast[] $lineItemDeliveryForecasts
     */
    protected $lineItemDeliveryForecasts = null;

    /**
     * @param \Google\AdsApi\Dfp\v201708\LineItemDeliveryForecast[] $lineItemDeliveryForecasts
     */
    public function __construct(array $lineItemDeliveryForecasts = null)
    {
      $this->lineItemDeliveryForecasts = $lineItemDeliveryForecasts;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\LineItemDeliveryForecast[]
     */
    public function getLineItemDeliveryForecasts()
    {
      return $this->lineItemDeliveryForecasts;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\LineItemDeliveryForecast[] $lineItemDeliveryForecasts
     * @return \Google\AdsApi\Dfp\v201708\DeliveryForecast
     */
    public function setLineItemDeliveryForecasts(array $lineItemDeliveryForecasts)
    {
      $this->lineItemDeliveryForecasts = $lineItemDeliveryForecasts;
      return $this;
    }

}
