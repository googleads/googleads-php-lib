<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetRoasBiddingScheme extends \Google\AdsApi\AdWords\v201802\cm\BiddingScheme
{

    /**
     * @var float $targetRoas
     */
    protected $targetRoas = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\Money $bidCeiling
     */
    protected $bidCeiling = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\Money $bidFloor
     */
    protected $bidFloor = null;

    /**
     * @param string $BiddingSchemeType
     * @param float $targetRoas
     * @param \Google\AdsApi\AdWords\v201802\cm\Money $bidCeiling
     * @param \Google\AdsApi\AdWords\v201802\cm\Money $bidFloor
     */
    public function __construct($BiddingSchemeType = null, $targetRoas = null, $bidCeiling = null, $bidFloor = null)
    {
      parent::__construct($BiddingSchemeType);
      $this->targetRoas = $targetRoas;
      $this->bidCeiling = $bidCeiling;
      $this->bidFloor = $bidFloor;
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
     * @return \Google\AdsApi\AdWords\v201802\cm\TargetRoasBiddingScheme
     */
    public function setTargetRoas($targetRoas)
    {
      $this->targetRoas = $targetRoas;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\Money
     */
    public function getBidCeiling()
    {
      return $this->bidCeiling;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Money $bidCeiling
     * @return \Google\AdsApi\AdWords\v201802\cm\TargetRoasBiddingScheme
     */
    public function setBidCeiling($bidCeiling)
    {
      $this->bidCeiling = $bidCeiling;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\Money
     */
    public function getBidFloor()
    {
      return $this->bidFloor;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Money $bidFloor
     * @return \Google\AdsApi\AdWords\v201802\cm\TargetRoasBiddingScheme
     */
    public function setBidFloor($bidFloor)
    {
      $this->bidFloor = $bidFloor;
      return $this;
    }

}
