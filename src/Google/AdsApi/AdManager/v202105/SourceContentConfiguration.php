<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SourceContentConfiguration
{

    /**
     * @var \Google\AdsApi\AdManager\v202105\MediaLocationSettings $ingestSettings
     */
    protected $ingestSettings = null;

    /**
     * @var \Google\AdsApi\AdManager\v202105\MediaLocationSettings $defaultDeliverySettings
     */
    protected $defaultDeliverySettings = null;

    /**
     * @param \Google\AdsApi\AdManager\v202105\MediaLocationSettings $ingestSettings
     * @param \Google\AdsApi\AdManager\v202105\MediaLocationSettings $defaultDeliverySettings
     */
    public function __construct($ingestSettings = null, $defaultDeliverySettings = null)
    {
      $this->ingestSettings = $ingestSettings;
      $this->defaultDeliverySettings = $defaultDeliverySettings;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202105\MediaLocationSettings
     */
    public function getIngestSettings()
    {
      return $this->ingestSettings;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202105\MediaLocationSettings $ingestSettings
     * @return \Google\AdsApi\AdManager\v202105\SourceContentConfiguration
     */
    public function setIngestSettings($ingestSettings)
    {
      $this->ingestSettings = $ingestSettings;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202105\MediaLocationSettings
     */
    public function getDefaultDeliverySettings()
    {
      return $this->defaultDeliverySettings;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202105\MediaLocationSettings $defaultDeliverySettings
     * @return \Google\AdsApi\AdManager\v202105\SourceContentConfiguration
     */
    public function setDefaultDeliverySettings($defaultDeliverySettings)
    {
      $this->defaultDeliverySettings = $defaultDeliverySettings;
      return $this;
    }

}
