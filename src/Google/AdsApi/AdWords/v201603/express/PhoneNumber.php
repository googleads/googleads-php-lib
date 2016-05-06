<?php

namespace Google\AdsApi\AdWords\v201603\express;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PhoneNumber
{

    /**
     * @var string $regionCode
     */
    protected $regionCode = null;

    /**
     * @var string $number
     */
    protected $number = null;

    /**
     * @param string $regionCode
     * @param string $number
     */
    public function __construct($regionCode = null, $number = null)
    {
      $this->regionCode = $regionCode;
      $this->number = $number;
    }

    /**
     * @return string
     */
    public function getRegionCode()
    {
      return $this->regionCode;
    }

    /**
     * @param string $regionCode
     * @return \Google\AdsApi\AdWords\v201603\express\PhoneNumber
     */
    public function setRegionCode($regionCode)
    {
      $this->regionCode = $regionCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param string $number
     * @return \Google\AdsApi\AdWords\v201603\express\PhoneNumber
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

}
