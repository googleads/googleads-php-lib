<?php

namespace Google\AdsApi\AdWords\v201710\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LongComparisonOperation
{

    /**
     * @var int $minimum
     */
    protected $minimum = null;

    /**
     * @var int $maximum
     */
    protected $maximum = null;

    /**
     * @param int $minimum
     * @param int $maximum
     */
    public function __construct($minimum = null, $maximum = null)
    {
      $this->minimum = $minimum;
      $this->maximum = $maximum;
    }

    /**
     * @return int
     */
    public function getMinimum()
    {
      return $this->minimum;
    }

    /**
     * @param int $minimum
     * @return \Google\AdsApi\AdWords\v201710\o\LongComparisonOperation
     */
    public function setMinimum($minimum)
    {
      $this->minimum = (!is_null($minimum) && PHP_INT_SIZE === 4)
          ? floatval($minimum) : $minimum;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximum()
    {
      return $this->maximum;
    }

    /**
     * @param int $maximum
     * @return \Google\AdsApi\AdWords\v201710\o\LongComparisonOperation
     */
    public function setMaximum($maximum)
    {
      $this->maximum = (!is_null($maximum) && PHP_INT_SIZE === 4)
          ? floatval($maximum) : $maximum;
      return $this;
    }

}
