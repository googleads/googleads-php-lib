<?php

namespace Google\AdsApi\AdWords\v201710\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ThirdPartyUploadMetadata extends \Google\AdsApi\AdWords\v201710\rm\StoreSalesUploadCommonMetadata
{

    /**
     * @var string $advertiserUploadTime
     */
    protected $advertiserUploadTime = null;

    /**
     * @var float $validTransactionRate
     */
    protected $validTransactionRate = null;

    /**
     * @var float $partnerMatchRate
     */
    protected $partnerMatchRate = null;

    /**
     * @var float $partnerUploadRate
     */
    protected $partnerUploadRate = null;

    /**
     * @var string $bridgeMapVersionId
     */
    protected $bridgeMapVersionId = null;

    /**
     * @var int $partnerId
     */
    protected $partnerId = null;

    /**
     * @param float $loyaltyRate
     * @param float $transactionUploadRate
     * @param string $StoreSalesUploadCommonMetadataType
     * @param string $advertiserUploadTime
     * @param float $validTransactionRate
     * @param float $partnerMatchRate
     * @param float $partnerUploadRate
     * @param string $bridgeMapVersionId
     * @param int $partnerId
     */
    public function __construct($loyaltyRate = null, $transactionUploadRate = null, $StoreSalesUploadCommonMetadataType = null, $advertiserUploadTime = null, $validTransactionRate = null, $partnerMatchRate = null, $partnerUploadRate = null, $bridgeMapVersionId = null, $partnerId = null)
    {
      parent::__construct($loyaltyRate, $transactionUploadRate, $StoreSalesUploadCommonMetadataType);
      $this->advertiserUploadTime = $advertiserUploadTime;
      $this->validTransactionRate = $validTransactionRate;
      $this->partnerMatchRate = $partnerMatchRate;
      $this->partnerUploadRate = $partnerUploadRate;
      $this->bridgeMapVersionId = $bridgeMapVersionId;
      $this->partnerId = $partnerId;
    }

    /**
     * @return string
     */
    public function getAdvertiserUploadTime()
    {
      return $this->advertiserUploadTime;
    }

    /**
     * @param string $advertiserUploadTime
     * @return \Google\AdsApi\AdWords\v201710\rm\ThirdPartyUploadMetadata
     */
    public function setAdvertiserUploadTime($advertiserUploadTime)
    {
      $this->advertiserUploadTime = $advertiserUploadTime;
      return $this;
    }

    /**
     * @return float
     */
    public function getValidTransactionRate()
    {
      return $this->validTransactionRate;
    }

    /**
     * @param float $validTransactionRate
     * @return \Google\AdsApi\AdWords\v201710\rm\ThirdPartyUploadMetadata
     */
    public function setValidTransactionRate($validTransactionRate)
    {
      $this->validTransactionRate = $validTransactionRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getPartnerMatchRate()
    {
      return $this->partnerMatchRate;
    }

    /**
     * @param float $partnerMatchRate
     * @return \Google\AdsApi\AdWords\v201710\rm\ThirdPartyUploadMetadata
     */
    public function setPartnerMatchRate($partnerMatchRate)
    {
      $this->partnerMatchRate = $partnerMatchRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getPartnerUploadRate()
    {
      return $this->partnerUploadRate;
    }

    /**
     * @param float $partnerUploadRate
     * @return \Google\AdsApi\AdWords\v201710\rm\ThirdPartyUploadMetadata
     */
    public function setPartnerUploadRate($partnerUploadRate)
    {
      $this->partnerUploadRate = $partnerUploadRate;
      return $this;
    }

    /**
     * @return string
     */
    public function getBridgeMapVersionId()
    {
      return $this->bridgeMapVersionId;
    }

    /**
     * @param string $bridgeMapVersionId
     * @return \Google\AdsApi\AdWords\v201710\rm\ThirdPartyUploadMetadata
     */
    public function setBridgeMapVersionId($bridgeMapVersionId)
    {
      $this->bridgeMapVersionId = $bridgeMapVersionId;
      return $this;
    }

    /**
     * @return int
     */
    public function getPartnerId()
    {
      return $this->partnerId;
    }

    /**
     * @param int $partnerId
     * @return \Google\AdsApi\AdWords\v201710\rm\ThirdPartyUploadMetadata
     */
    public function setPartnerId($partnerId)
    {
      $this->partnerId = $partnerId;
      return $this;
    }

}
