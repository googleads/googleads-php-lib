<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MaximizeConversionValueBiddingScheme extends \Google\AdsApi\AdWords\v201809\cm\BiddingScheme
{

    /**
     * @var float $targetRoas
     */
    protected $targetRoas = null;

    /**
     * @param string $BiddingSchemeType
     * @param float $targetRoas
     */
    public function __construct($BiddingSchemeType = null, $targetRoas = null)
    {
      parent::__construct($BiddingSchemeType);
      $this->targetRoas = $targetRoas;
    }

    /**
     * @return float
     */
    public function getTargetRoas()
    {
      return $this->targetRoas;
    }

    /**
     * @param float $targetRoas
     * @return \Google\AdsApi\AdWords\v201809\cm\MaximizeConversionValueBiddingScheme
     */
    public function setTargetRoas($targetRoas)
    {
      $this->targetRoas = $targetRoas;
      return $this;
    }

}
