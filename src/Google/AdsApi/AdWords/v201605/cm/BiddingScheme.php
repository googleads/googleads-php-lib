<?php

namespace Google\AdsApi\AdWords\v201605\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class BiddingScheme
{

    /**
     * @var string $BiddingSchemeType
     */
    protected $BiddingSchemeType = null;

    /**
     * @param string $BiddingSchemeType
     */
    public function __construct($BiddingSchemeType = null)
    {
      $this->BiddingSchemeType = $BiddingSchemeType;
    }

    /**
     * @return string
     */
    public function getBiddingSchemeType()
    {
      return $this->BiddingSchemeType;
    }

    /**
     * @param string $BiddingSchemeType
     * @return \Google\AdsApi\AdWords\v201605\cm\BiddingScheme
     */
    public function setBiddingSchemeType($BiddingSchemeType)
    {
      $this->BiddingSchemeType = $BiddingSchemeType;
      return $this;
    }

}
