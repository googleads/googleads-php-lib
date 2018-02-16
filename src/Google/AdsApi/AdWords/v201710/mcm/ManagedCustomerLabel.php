<?php

namespace Google\AdsApi\AdWords\v201710\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ManagedCustomerLabel
{

    /**
     * @var int $labelId
     */
    protected $labelId = null;

    /**
     * @var int $customerId
     */
    protected $customerId = null;

    /**
     * @param int $labelId
     * @param int $customerId
     */
    public function __construct($labelId = null, $customerId = null)
    {
      $this->labelId = $labelId;
      $this->customerId = $customerId;
    }

    /**
     * @return int
     */
    public function getLabelId()
    {
      return $this->labelId;
    }

    /**
     * @param int $labelId
     * @return \Google\AdsApi\AdWords\v201710\mcm\ManagedCustomerLabel
     */
    public function setLabelId($labelId)
    {
      $this->labelId = (!is_null($labelId) && PHP_INT_SIZE === 4)
          ? floatval($labelId) : $labelId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
      return $this->customerId;
    }

    /**
     * @param int $customerId
     * @return \Google\AdsApi\AdWords\v201710\mcm\ManagedCustomerLabel
     */
    public function setCustomerId($customerId)
    {
      $this->customerId = (!is_null($customerId) && PHP_INT_SIZE === 4)
          ? floatval($customerId) : $customerId;
      return $this;
    }

}
