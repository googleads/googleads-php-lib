<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetCpaBiddingScheme extends \Google\AdsApi\AdWords\v201710\cm\BiddingScheme
{

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\Money $targetCpa
     */
    protected $targetCpa = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\Money $maxCpcBidCeiling
     */
    protected $maxCpcBidCeiling = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\Money $maxCpcBidFloor
     */
    protected $maxCpcBidFloor = null;

    /**
     * @param string $BiddingSchemeType
     * @param \Google\AdsApi\AdWords\v201710\cm\Money $targetCpa
     * @param \Google\AdsApi\AdWords\v201710\cm\Money $maxCpcBidCeiling
     * @param \Google\AdsApi\AdWords\v201710\cm\Money $maxCpcBidFloor
     */
    public function __construct($BiddingSchemeType = null, $targetCpa = null, $maxCpcBidCeiling = null, $maxCpcBidFloor = null)
    {
      parent::__construct($BiddingSchemeType);
      $this->targetCpa = $targetCpa;
      $this->maxCpcBidCeiling = $maxCpcBidCeiling;
      $this->maxCpcBidFloor = $maxCpcBidFloor;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\Money
     */
    public function getTargetCpa()
    {
      return $this->targetCpa;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\Money $targetCpa
     * @return \Google\AdsApi\AdWords\v201710\cm\TargetCpaBiddingScheme
     */
    public function setTargetCpa($targetCpa)
    {
      $this->targetCpa = $targetCpa;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\Money
     */
    public function getMaxCpcBidCeiling()
    {
      return $this->maxCpcBidCeiling;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\Money $maxCpcBidCeiling
     * @return \Google\AdsApi\AdWords\v201710\cm\TargetCpaBiddingScheme
     */
    public function setMaxCpcBidCeiling($maxCpcBidCeiling)
    {
      $this->maxCpcBidCeiling = $maxCpcBidCeiling;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\Money
     */
    public function getMaxCpcBidFloor()
    {
      return $this->maxCpcBidFloor;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\Money $maxCpcBidFloor
     * @return \Google\AdsApi\AdWords\v201710\cm\TargetCpaBiddingScheme
     */
    public function setMaxCpcBidFloor($maxCpcBidFloor)
    {
      $this->maxCpcBidFloor = $maxCpcBidFloor;
      return $this;
    }

}
