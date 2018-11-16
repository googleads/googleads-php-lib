<?php

namespace Google\AdsApi\AdWords\v201806\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ManagedCustomer
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $customerId
     */
    protected $customerId = null;

    /**
     * @var boolean $canManageClients
     */
    protected $canManageClients = null;

    /**
     * @var string $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @var string $dateTimeZone
     */
    protected $dateTimeZone = null;

    /**
     * @var boolean $testAccount
     */
    protected $testAccount = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\mcm\AccountLabel[] $accountLabels
     */
    protected $accountLabels = null;

    /**
     * @var boolean $excludeHiddenAccounts
     */
    protected $excludeHiddenAccounts = null;

    /**
     * @param string $name
     * @param int $customerId
     * @param boolean $canManageClients
     * @param string $currencyCode
     * @param string $dateTimeZone
     * @param boolean $testAccount
     * @param \Google\AdsApi\AdWords\v201806\mcm\AccountLabel[] $accountLabels
     * @param boolean $excludeHiddenAccounts
     */
    public function __construct($name = null, $customerId = null, $canManageClients = null, $currencyCode = null, $dateTimeZone = null, $testAccount = null, array $accountLabels = null, $excludeHiddenAccounts = null)
    {
      $this->name = $name;
      $this->customerId = $customerId;
      $this->canManageClients = $canManageClients;
      $this->currencyCode = $currencyCode;
      $this->dateTimeZone = $dateTimeZone;
      $this->testAccount = $testAccount;
      $this->accountLabels = $accountLabels;
      $this->excludeHiddenAccounts = $excludeHiddenAccounts;
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
     * @return \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomer
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomer
     */
    public function setCustomerId($customerId)
    {
      $this->customerId = (!is_null($customerId) && PHP_INT_SIZE === 4)
          ? floatval($customerId) : $customerId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCanManageClients()
    {
      return $this->canManageClients;
    }

    /**
     * @param boolean $canManageClients
     * @return \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomer
     */
    public function setCanManageClients($canManageClients)
    {
      $this->canManageClients = $canManageClients;
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
     * @return \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomer
     */
    public function setCurrencyCode($currencyCode)
    {
      $this->currencyCode = $currencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateTimeZone()
    {
      return $this->dateTimeZone;
    }

    /**
     * @param string $dateTimeZone
     * @return \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomer
     */
    public function setDateTimeZone($dateTimeZone)
    {
      $this->dateTimeZone = $dateTimeZone;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTestAccount()
    {
      return $this->testAccount;
    }

    /**
     * @param boolean $testAccount
     * @return \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomer
     */
    public function setTestAccount($testAccount)
    {
      $this->testAccount = $testAccount;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\mcm\AccountLabel[]
     */
    public function getAccountLabels()
    {
      return $this->accountLabels;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\mcm\AccountLabel[] $accountLabels
     * @return \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomer
     */
    public function setAccountLabels(array $accountLabels)
    {
      $this->accountLabels = $accountLabels;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeHiddenAccounts()
    {
      return $this->excludeHiddenAccounts;
    }

    /**
     * @param boolean $excludeHiddenAccounts
     * @return \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomer
     */
    public function setExcludeHiddenAccounts($excludeHiddenAccounts)
    {
      $this->excludeHiddenAccounts = $excludeHiddenAccounts;
      return $this;
    }

}
