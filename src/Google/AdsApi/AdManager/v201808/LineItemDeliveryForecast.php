<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemDeliveryForecast
{

    /**
     * @var int $lineItemId
     */
    protected $lineItemId = null;

    /**
     * @var int $orderId
     */
    protected $orderId = null;

    /**
     * @var string $unitType
     */
    protected $unitType = null;

    /**
     * @var int $predictedDeliveryUnits
     */
    protected $predictedDeliveryUnits = null;

    /**
     * @var int $deliveredUnits
     */
    protected $deliveredUnits = null;

    /**
     * @var int $matchedUnits
     */
    protected $matchedUnits = null;

    /**
     * @param int $lineItemId
     * @param int $orderId
     * @param string $unitType
     * @param int $predictedDeliveryUnits
     * @param int $deliveredUnits
     * @param int $matchedUnits
     */
    public function __construct($lineItemId = null, $orderId = null, $unitType = null, $predictedDeliveryUnits = null, $deliveredUnits = null, $matchedUnits = null)
    {
      $this->lineItemId = $lineItemId;
      $this->orderId = $orderId;
      $this->unitType = $unitType;
      $this->predictedDeliveryUnits = $predictedDeliveryUnits;
      $this->deliveredUnits = $deliveredUnits;
      $this->matchedUnits = $matchedUnits;
    }

    /**
     * @return int
     */
    public function getLineItemId()
    {
      return $this->lineItemId;
    }

    /**
     * @param int $lineItemId
     * @return \Google\AdsApi\AdManager\v201808\LineItemDeliveryForecast
     */
    public function setLineItemId($lineItemId)
    {
      $this->lineItemId = (!is_null($lineItemId) && PHP_INT_SIZE === 4)
          ? floatval($lineItemId) : $lineItemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
      return $this->orderId;
    }

    /**
     * @param int $orderId
     * @return \Google\AdsApi\AdManager\v201808\LineItemDeliveryForecast
     */
    public function setOrderId($orderId)
    {
      $this->orderId = (!is_null($orderId) && PHP_INT_SIZE === 4)
          ? floatval($orderId) : $orderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitType()
    {
      return $this->unitType;
    }

    /**
     * @param string $unitType
     * @return \Google\AdsApi\AdManager\v201808\LineItemDeliveryForecast
     */
    public function setUnitType($unitType)
    {
      $this->unitType = $unitType;
      return $this;
    }

    /**
     * @return int
     */
    public function getPredictedDeliveryUnits()
    {
      return $this->predictedDeliveryUnits;
    }

    /**
     * @param int $predictedDeliveryUnits
     * @return \Google\AdsApi\AdManager\v201808\LineItemDeliveryForecast
     */
    public function setPredictedDeliveryUnits($predictedDeliveryUnits)
    {
      $this->predictedDeliveryUnits = (!is_null($predictedDeliveryUnits) && PHP_INT_SIZE === 4)
          ? floatval($predictedDeliveryUnits) : $predictedDeliveryUnits;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeliveredUnits()
    {
      return $this->deliveredUnits;
    }

    /**
     * @param int $deliveredUnits
     * @return \Google\AdsApi\AdManager\v201808\LineItemDeliveryForecast
     */
    public function setDeliveredUnits($deliveredUnits)
    {
      $this->deliveredUnits = (!is_null($deliveredUnits) && PHP_INT_SIZE === 4)
          ? floatval($deliveredUnits) : $deliveredUnits;
      return $this;
    }

    /**
     * @return int
     */
    public function getMatchedUnits()
    {
      return $this->matchedUnits;
    }

    /**
     * @param int $matchedUnits
     * @return \Google\AdsApi\AdManager\v201808\LineItemDeliveryForecast
     */
    public function setMatchedUnits($matchedUnits)
    {
      $this->matchedUnits = (!is_null($matchedUnits) && PHP_INT_SIZE === 4)
          ? floatval($matchedUnits) : $matchedUnits;
      return $this;
    }

}
