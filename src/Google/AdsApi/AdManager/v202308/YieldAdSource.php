<?php

namespace Google\AdsApi\AdManager\v202308;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class YieldAdSource
{

    /**
     * @var int $adSourceId
     */
    protected $adSourceId = null;

    /**
     * @var int $companyId
     */
    protected $companyId = null;

    /**
     * @var \Google\AdsApi\AdManager\v202308\AbstractDisplaySettings $displaySettings
     */
    protected $displaySettings = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \Google\AdsApi\AdManager\v202308\Money $manualCpm
     */
    protected $manualCpm = null;

    /**
     * @var boolean $overrideDynamicCpm
     */
    protected $overrideDynamicCpm = null;

    /**
     * @param int $adSourceId
     * @param int $companyId
     * @param \Google\AdsApi\AdManager\v202308\AbstractDisplaySettings $displaySettings
     * @param string $status
     * @param \Google\AdsApi\AdManager\v202308\Money $manualCpm
     * @param boolean $overrideDynamicCpm
     */
    public function __construct($adSourceId = null, $companyId = null, $displaySettings = null, $status = null, $manualCpm = null, $overrideDynamicCpm = null)
    {
      $this->adSourceId = $adSourceId;
      $this->companyId = $companyId;
      $this->displaySettings = $displaySettings;
      $this->status = $status;
      $this->manualCpm = $manualCpm;
      $this->overrideDynamicCpm = $overrideDynamicCpm;
    }

    /**
     * @return int
     */
    public function getAdSourceId()
    {
      return $this->adSourceId;
    }

    /**
     * @param int $adSourceId
     * @return \Google\AdsApi\AdManager\v202308\YieldAdSource
     */
    public function setAdSourceId($adSourceId)
    {
      $this->adSourceId = (!is_null($adSourceId) && PHP_INT_SIZE === 4)
          ? floatval($adSourceId) : $adSourceId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId()
    {
      return $this->companyId;
    }

    /**
     * @param int $companyId
     * @return \Google\AdsApi\AdManager\v202308\YieldAdSource
     */
    public function setCompanyId($companyId)
    {
      $this->companyId = (!is_null($companyId) && PHP_INT_SIZE === 4)
          ? floatval($companyId) : $companyId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202308\AbstractDisplaySettings
     */
    public function getDisplaySettings()
    {
      return $this->displaySettings;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202308\AbstractDisplaySettings $displaySettings
     * @return \Google\AdsApi\AdManager\v202308\YieldAdSource
     */
    public function setDisplaySettings($displaySettings)
    {
      $this->displaySettings = $displaySettings;
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
     * @return \Google\AdsApi\AdManager\v202308\YieldAdSource
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202308\Money
     */
    public function getManualCpm()
    {
      return $this->manualCpm;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202308\Money $manualCpm
     * @return \Google\AdsApi\AdManager\v202308\YieldAdSource
     */
    public function setManualCpm($manualCpm)
    {
      $this->manualCpm = $manualCpm;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverrideDynamicCpm()
    {
      return $this->overrideDynamicCpm;
    }

    /**
     * @param boolean $overrideDynamicCpm
     * @return \Google\AdsApi\AdManager\v202308\YieldAdSource
     */
    public function setOverrideDynamicCpm($overrideDynamicCpm)
    {
      $this->overrideDynamicCpm = $overrideDynamicCpm;
      return $this;
    }

}
