<?php

namespace Google\AdsApi\AdWords\v201710\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class StoreSalesUploadCommonMetadata
{

    /**
     * @var float $loyaltyRate
     */
    protected $loyaltyRate = null;

    /**
     * @var float $transactionUploadRate
     */
    protected $transactionUploadRate = null;

    /**
     * @var string $StoreSalesUploadCommonMetadataType
     */
    protected $StoreSalesUploadCommonMetadataType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['StoreSalesUploadCommonMetadata.Type' => 'StoreSalesUploadCommonMetadataType'];

    /**
     * @param float $loyaltyRate
     * @param float $transactionUploadRate
     * @param string $StoreSalesUploadCommonMetadataType
     */
    public function __construct($loyaltyRate = null, $transactionUploadRate = null, $StoreSalesUploadCommonMetadataType = null)
    {
      $this->loyaltyRate = $loyaltyRate;
      $this->transactionUploadRate = $transactionUploadRate;
      $this->StoreSalesUploadCommonMetadataType = $StoreSalesUploadCommonMetadataType;
    }

    /**
     * @return float
     */
    public function getLoyaltyRate()
    {
      return $this->loyaltyRate;
    }

    /**
     * @param float $loyaltyRate
     * @return \Google\AdsApi\AdWords\v201710\rm\StoreSalesUploadCommonMetadata
     */
    public function setLoyaltyRate($loyaltyRate)
    {
      $this->loyaltyRate = $loyaltyRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getTransactionUploadRate()
    {
      return $this->transactionUploadRate;
    }

    /**
     * @param float $transactionUploadRate
     * @return \Google\AdsApi\AdWords\v201710\rm\StoreSalesUploadCommonMetadata
     */
    public function setTransactionUploadRate($transactionUploadRate)
    {
      $this->transactionUploadRate = $transactionUploadRate;
      return $this;
    }

    /**
     * @return string
     */
    public function getStoreSalesUploadCommonMetadataType()
    {
      return $this->StoreSalesUploadCommonMetadataType;
    }

    /**
     * @param string $StoreSalesUploadCommonMetadataType
     * @return \Google\AdsApi\AdWords\v201710\rm\StoreSalesUploadCommonMetadata
     */
    public function setStoreSalesUploadCommonMetadataType($StoreSalesUploadCommonMetadataType)
    {
      $this->StoreSalesUploadCommonMetadataType = $StoreSalesUploadCommonMetadataType;
      return $this;
    }

    /**
     * Getter for a non PHP standard named variables.
     *
     * @param string $var variable name to get
     * @return string variable value
     */
    public function __get($var)
    {
      if (!array_key_exists($var, $this->parameterMap)) {
        return null;
      }
      return $this->{$this->parameterMap[$var]};
    }

    /**
     * Setter for a non PHP standard named variables.
     *
     * @param string $var variable name
     * @param mixed $value variable value to set
     * @return \Google\AdsApi\AdWords\v201710\rm\StoreSalesUploadCommonMetadata
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
