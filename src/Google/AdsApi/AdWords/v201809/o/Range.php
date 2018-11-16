<?php

namespace Google\AdsApi\AdWords\v201809\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Range
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\ComparableValue $min
     */
    protected $min = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\ComparableValue $max
     */
    protected $max = null;

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\ComparableValue $min
     * @param \Google\AdsApi\AdWords\v201809\cm\ComparableValue $max
     */
    public function __construct($min = null, $max = null)
    {
      $this->min = $min;
      $this->max = $max;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\ComparableValue
     */
    public function getMin()
    {
      return $this->min;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\ComparableValue $min
     * @return \Google\AdsApi\AdWords\v201809\o\Range
     */
    public function setMin($min)
    {
      $this->min = $min;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\ComparableValue
     */
    public function getMax()
    {
      return $this->max;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\ComparableValue $max
     * @return \Google\AdsApi\AdWords\v201809\o\Range
     */
    public function setMax($max)
    {
      $this->max = $max;
      return $this;
    }

}
