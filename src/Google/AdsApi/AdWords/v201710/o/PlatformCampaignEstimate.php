<?php

namespace Google\AdsApi\AdWords\v201710\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PlatformCampaignEstimate
{

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\Platform $platform
     */
    protected $platform = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\o\StatsEstimate $minEstimate
     */
    protected $minEstimate = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\o\StatsEstimate $maxEstimate
     */
    protected $maxEstimate = null;

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\Platform $platform
     * @param \Google\AdsApi\AdWords\v201710\o\StatsEstimate $minEstimate
     * @param \Google\AdsApi\AdWords\v201710\o\StatsEstimate $maxEstimate
     */
    public function __construct($platform = null, $minEstimate = null, $maxEstimate = null)
    {
      $this->platform = $platform;
      $this->minEstimate = $minEstimate;
      $this->maxEstimate = $maxEstimate;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\Platform
     */
    public function getPlatform()
    {
      return $this->platform;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\Platform $platform
     * @return \Google\AdsApi\AdWords\v201710\o\PlatformCampaignEstimate
     */
    public function setPlatform($platform)
    {
      $this->platform = $platform;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\o\StatsEstimate
     */
    public function getMinEstimate()
    {
      return $this->minEstimate;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\o\StatsEstimate $minEstimate
     * @return \Google\AdsApi\AdWords\v201710\o\PlatformCampaignEstimate
     */
    public function setMinEstimate($minEstimate)
    {
      $this->minEstimate = $minEstimate;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\o\StatsEstimate
     */
    public function getMaxEstimate()
    {
      return $this->maxEstimate;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\o\StatsEstimate $maxEstimate
     * @return \Google\AdsApi\AdWords\v201710\o\PlatformCampaignEstimate
     */
    public function setMaxEstimate($maxEstimate)
    {
      $this->maxEstimate = $maxEstimate;
      return $this;
    }

}
