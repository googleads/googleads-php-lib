<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class YieldPartner
{

    /**
     * @var int $companyId
     */
    protected $companyId = null;

    /**
     * @var \Google\AdsApi\AdManager\v202202\YieldPartnerSettings[] $settings
     */
    protected $settings = null;

    /**
     * @param int $companyId
     * @param \Google\AdsApi\AdManager\v202202\YieldPartnerSettings[] $settings
     */
    public function __construct($companyId = null, array $settings = null)
    {
      $this->companyId = $companyId;
      $this->settings = $settings;
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
     * @return \Google\AdsApi\AdManager\v202202\YieldPartner
     */
    public function setCompanyId($companyId)
    {
      $this->companyId = (!is_null($companyId) && PHP_INT_SIZE === 4)
          ? floatval($companyId) : $companyId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\YieldPartnerSettings[]
     */
    public function getSettings()
    {
      return $this->settings;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\YieldPartnerSettings[]|null $settings
     * @return \Google\AdsApi\AdManager\v202202\YieldPartner
     */
    public function setSettings(array $settings = null)
    {
      $this->settings = $settings;
      return $this;
    }

}
