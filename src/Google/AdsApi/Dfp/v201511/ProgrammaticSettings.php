<?php

namespace Google\AdsApi\Dfp\v201511;

class ProgrammaticSettings
{

    /**
     * @var int $adxBuyerNetworkId
     */
    protected $adxBuyerNetworkId = null;

    /**
     * @var int $buyerId
     */
    protected $buyerId = null;

    /**
     * @var string $buyerPlatform
     */
    protected $buyerPlatform = null;

    /**
     * @var string $billingTermsType
     */
    protected $billingTermsType = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @param int $adxBuyerNetworkId
     * @param int $buyerId
     * @param string $buyerPlatform
     * @param string $billingTermsType
     * @param string $status
     */
    public function __construct($adxBuyerNetworkId = null, $buyerId = null, $buyerPlatform = null, $billingTermsType = null, $status = null)
    {
      $this->adxBuyerNetworkId = $adxBuyerNetworkId;
      $this->buyerId = $buyerId;
      $this->buyerPlatform = $buyerPlatform;
      $this->billingTermsType = $billingTermsType;
      $this->status = $status;
    }

    /**
     * @return int
     */
    public function getAdxBuyerNetworkId()
    {
      return $this->adxBuyerNetworkId;
    }

    /**
     * @param int $adxBuyerNetworkId
     * @return \Google\AdsApi\Dfp\v201511\ProgrammaticSettings
     */
    public function setAdxBuyerNetworkId($adxBuyerNetworkId)
    {
      $this->adxBuyerNetworkId = $adxBuyerNetworkId;
      return $this;
    }

    /**
     * @return int
     */
    public function getBuyerId()
    {
      return $this->buyerId;
    }

    /**
     * @param int $buyerId
     * @return \Google\AdsApi\Dfp\v201511\ProgrammaticSettings
     */
    public function setBuyerId($buyerId)
    {
      $this->buyerId = $buyerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuyerPlatform()
    {
      return $this->buyerPlatform;
    }

    /**
     * @param string $buyerPlatform
     * @return \Google\AdsApi\Dfp\v201511\ProgrammaticSettings
     */
    public function setBuyerPlatform($buyerPlatform)
    {
      $this->buyerPlatform = $buyerPlatform;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingTermsType()
    {
      return $this->billingTermsType;
    }

    /**
     * @param string $billingTermsType
     * @return \Google\AdsApi\Dfp\v201511\ProgrammaticSettings
     */
    public function setBillingTermsType($billingTermsType)
    {
      $this->billingTermsType = $billingTermsType;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\Dfp\v201511\ProgrammaticSettings
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
