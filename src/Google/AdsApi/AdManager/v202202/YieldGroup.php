<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class YieldGroup
{

    /**
     * @var int $yieldGroupId
     */
    protected $yieldGroupId = null;

    /**
     * @var string $yieldGroupName
     */
    protected $yieldGroupName = null;

    /**
     * @var string $exchangeStatus
     */
    protected $exchangeStatus = null;

    /**
     * @var string $format
     */
    protected $format = null;

    /**
     * @var string $environmentType
     */
    protected $environmentType = null;

    /**
     * @var \Google\AdsApi\AdManager\v202202\Targeting $targeting
     */
    protected $targeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v202202\YieldAdSource[] $adSources
     */
    protected $adSources = null;

    /**
     * @param int $yieldGroupId
     * @param string $yieldGroupName
     * @param string $exchangeStatus
     * @param string $format
     * @param string $environmentType
     * @param \Google\AdsApi\AdManager\v202202\Targeting $targeting
     * @param \Google\AdsApi\AdManager\v202202\YieldAdSource[] $adSources
     */
    public function __construct($yieldGroupId = null, $yieldGroupName = null, $exchangeStatus = null, $format = null, $environmentType = null, $targeting = null, array $adSources = null)
    {
      $this->yieldGroupId = $yieldGroupId;
      $this->yieldGroupName = $yieldGroupName;
      $this->exchangeStatus = $exchangeStatus;
      $this->format = $format;
      $this->environmentType = $environmentType;
      $this->targeting = $targeting;
      $this->adSources = $adSources;
    }

    /**
     * @return int
     */
    public function getYieldGroupId()
    {
      return $this->yieldGroupId;
    }

    /**
     * @param int $yieldGroupId
     * @return \Google\AdsApi\AdManager\v202202\YieldGroup
     */
    public function setYieldGroupId($yieldGroupId)
    {
      $this->yieldGroupId = (!is_null($yieldGroupId) && PHP_INT_SIZE === 4)
          ? floatval($yieldGroupId) : $yieldGroupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getYieldGroupName()
    {
      return $this->yieldGroupName;
    }

    /**
     * @param string $yieldGroupName
     * @return \Google\AdsApi\AdManager\v202202\YieldGroup
     */
    public function setYieldGroupName($yieldGroupName)
    {
      $this->yieldGroupName = $yieldGroupName;
      return $this;
    }

    /**
     * @return string
     */
    public function getExchangeStatus()
    {
      return $this->exchangeStatus;
    }

    /**
     * @param string $exchangeStatus
     * @return \Google\AdsApi\AdManager\v202202\YieldGroup
     */
    public function setExchangeStatus($exchangeStatus)
    {
      $this->exchangeStatus = $exchangeStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
      return $this->format;
    }

    /**
     * @param string $format
     * @return \Google\AdsApi\AdManager\v202202\YieldGroup
     */
    public function setFormat($format)
    {
      $this->format = $format;
      return $this;
    }

    /**
     * @return string
     */
    public function getEnvironmentType()
    {
      return $this->environmentType;
    }

    /**
     * @param string $environmentType
     * @return \Google\AdsApi\AdManager\v202202\YieldGroup
     */
    public function setEnvironmentType($environmentType)
    {
      $this->environmentType = $environmentType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\Targeting
     */
    public function getTargeting()
    {
      return $this->targeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\Targeting $targeting
     * @return \Google\AdsApi\AdManager\v202202\YieldGroup
     */
    public function setTargeting($targeting)
    {
      $this->targeting = $targeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\YieldAdSource[]
     */
    public function getAdSources()
    {
      return $this->adSources;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\YieldAdSource[]|null $adSources
     * @return \Google\AdsApi\AdManager\v202202\YieldGroup
     */
    public function setAdSources(array $adSources = null)
    {
      $this->adSources = $adSources;
      return $this;
    }

}
