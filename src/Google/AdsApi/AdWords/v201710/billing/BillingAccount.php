<?php

namespace Google\AdsApi\AdWords\v201710\billing;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BillingAccount
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @var string $primaryBillingId
     */
    protected $primaryBillingId = null;

    /**
     * @var string $secondaryBillingId
     */
    protected $secondaryBillingId = null;

    /**
     * @param string $id
     * @param string $name
     * @param string $currencyCode
     * @param string $primaryBillingId
     * @param string $secondaryBillingId
     */
    public function __construct($id = null, $name = null, $currencyCode = null, $primaryBillingId = null, $secondaryBillingId = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->currencyCode = $currencyCode;
      $this->primaryBillingId = $primaryBillingId;
      $this->secondaryBillingId = $secondaryBillingId;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \Google\AdsApi\AdWords\v201710\billing\BillingAccount
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdWords\v201710\billing\BillingAccount
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     * @return \Google\AdsApi\AdWords\v201710\billing\BillingAccount
     */
    public function setCurrencyCode($currencyCode)
    {
      $this->currencyCode = $currencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrimaryBillingId()
    {
      return $this->primaryBillingId;
    }

    /**
     * @param string $primaryBillingId
     * @return \Google\AdsApi\AdWords\v201710\billing\BillingAccount
     */
    public function setPrimaryBillingId($primaryBillingId)
    {
      $this->primaryBillingId = $primaryBillingId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecondaryBillingId()
    {
      return $this->secondaryBillingId;
    }

    /**
     * @param string $secondaryBillingId
     * @return \Google\AdsApi\AdWords\v201710\billing\BillingAccount
     */
    public function setSecondaryBillingId($secondaryBillingId)
    {
      $this->secondaryBillingId = $secondaryBillingId;
      return $this;
    }

}
