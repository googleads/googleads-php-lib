<?php

namespace Google\AdsApi\Dfp\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DeliveryIndicator
{

    /**
     * @var float $expectedDeliveryPercentage
     */
    protected $expectedDeliveryPercentage = null;

    /**
     * @var float $actualDeliveryPercentage
     */
    protected $actualDeliveryPercentage = null;

    /**
     * @param float $expectedDeliveryPercentage
     * @param float $actualDeliveryPercentage
     */
    public function __construct($expectedDeliveryPercentage = null, $actualDeliveryPercentage = null)
    {
      $this->expectedDeliveryPercentage = $expectedDeliveryPercentage;
      $this->actualDeliveryPercentage = $actualDeliveryPercentage;
    }

    /**
     * @return float
     */
    public function getExpectedDeliveryPercentage()
    {
      return $this->expectedDeliveryPercentage;
    }

    /**
     * @param float $expectedDeliveryPercentage
     * @return \Google\AdsApi\Dfp\v201802\DeliveryIndicator
     */
    public function setExpectedDeliveryPercentage($expectedDeliveryPercentage)
    {
      $this->expectedDeliveryPercentage = $expectedDeliveryPercentage;
      return $this;
    }

    /**
     * @return float
     */
    public function getActualDeliveryPercentage()
    {
      return $this->actualDeliveryPercentage;
    }

    /**
     * @param float $actualDeliveryPercentage
     * @return \Google\AdsApi\Dfp\v201802\DeliveryIndicator
     */
    public function setActualDeliveryPercentage($actualDeliveryPercentage)
    {
      $this->actualDeliveryPercentage = $actualDeliveryPercentage;
      return $this;
    }

}
