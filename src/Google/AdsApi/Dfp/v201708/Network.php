<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Network
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $displayName
     */
    protected $displayName = null;

    /**
     * @var string $networkCode
     */
    protected $networkCode = null;

    /**
     * @var string $propertyCode
     */
    protected $propertyCode = null;

    /**
     * @var string $timeZone
     */
    protected $timeZone = null;

    /**
     * @var string $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @var string[] $secondaryCurrencyCodes
     */
    protected $secondaryCurrencyCodes = null;

    /**
     * @var string $effectiveRootAdUnitId
     */
    protected $effectiveRootAdUnitId = null;

    /**
     * @var boolean $isTest
     */
    protected $isTest = null;

    /**
     * @param int $id
     * @param string $displayName
     * @param string $networkCode
     * @param string $propertyCode
     * @param string $timeZone
     * @param string $currencyCode
     * @param string[] $secondaryCurrencyCodes
     * @param string $effectiveRootAdUnitId
     * @param boolean $isTest
     */
    public function __construct($id = null, $displayName = null, $networkCode = null, $propertyCode = null, $timeZone = null, $currencyCode = null, array $secondaryCurrencyCodes = null, $effectiveRootAdUnitId = null, $isTest = null)
    {
      $this->id = $id;
      $this->displayName = $displayName;
      $this->networkCode = $networkCode;
      $this->propertyCode = $propertyCode;
      $this->timeZone = $timeZone;
      $this->currencyCode = $currencyCode;
      $this->secondaryCurrencyCodes = $secondaryCurrencyCodes;
      $this->effectiveRootAdUnitId = $effectiveRootAdUnitId;
      $this->isTest = $isTest;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\Dfp\v201708\Network
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
      return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return \Google\AdsApi\Dfp\v201708\Network
     */
    public function setDisplayName($displayName)
    {
      $this->displayName = $displayName;
      return $this;
    }

    /**
     * @return string
     */
    public function getNetworkCode()
    {
      return $this->networkCode;
    }

    /**
     * @param string $networkCode
     * @return \Google\AdsApi\Dfp\v201708\Network
     */
    public function setNetworkCode($networkCode)
    {
      $this->networkCode = $networkCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPropertyCode()
    {
      return $this->propertyCode;
    }

    /**
     * @param string $propertyCode
     * @return \Google\AdsApi\Dfp\v201708\Network
     */
    public function setPropertyCode($propertyCode)
    {
      $this->propertyCode = $propertyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimeZone()
    {
      return $this->timeZone;
    }

    /**
     * @param string $timeZone
     * @return \Google\AdsApi\Dfp\v201708\Network
     */
    public function setTimeZone($timeZone)
    {
      $this->timeZone = $timeZone;
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
     * @return \Google\AdsApi\Dfp\v201708\Network
     */
    public function setCurrencyCode($currencyCode)
    {
      $this->currencyCode = $currencyCode;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getSecondaryCurrencyCodes()
    {
      return $this->secondaryCurrencyCodes;
    }

    /**
     * @param string[] $secondaryCurrencyCodes
     * @return \Google\AdsApi\Dfp\v201708\Network
     */
    public function setSecondaryCurrencyCodes(array $secondaryCurrencyCodes)
    {
      $this->secondaryCurrencyCodes = $secondaryCurrencyCodes;
      return $this;
    }

    /**
     * @return string
     */
    public function getEffectiveRootAdUnitId()
    {
      return $this->effectiveRootAdUnitId;
    }

    /**
     * @param string $effectiveRootAdUnitId
     * @return \Google\AdsApi\Dfp\v201708\Network
     */
    public function setEffectiveRootAdUnitId($effectiveRootAdUnitId)
    {
      $this->effectiveRootAdUnitId = $effectiveRootAdUnitId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTest()
    {
      return $this->isTest;
    }

    /**
     * @param boolean $isTest
     * @return \Google\AdsApi\Dfp\v201708\Network
     */
    public function setIsTest($isTest)
    {
      $this->isTest = $isTest;
      return $this;
    }

}
