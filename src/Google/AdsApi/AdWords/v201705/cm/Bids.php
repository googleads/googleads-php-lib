<?php

namespace Google\AdsApi\AdWords\v201705\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class Bids
{

    /**
     * @var string $BidsType
     */
    protected $BidsType = null;

    /**
     * @param string $BidsType
     */
    public function __construct($BidsType = null)
    {
      $this->BidsType = $BidsType;
    }

    /**
     * @return string
     */
    public function getBidsType()
    {
      return $this->BidsType;
    }

    /**
     * @param string $BidsType
     * @return \Google\AdsApi\AdWords\v201705\cm\Bids
     */
    public function setBidsType($BidsType)
    {
      $this->BidsType = $BidsType;
      return $this;
    }

}
