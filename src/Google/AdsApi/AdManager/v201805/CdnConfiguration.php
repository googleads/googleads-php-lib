<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CdnConfiguration
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $cdnConfigurationType
     */
    protected $cdnConfigurationType = null;

    /**
     * @var \Google\AdsApi\AdManager\v201805\SourceContentConfiguration $sourceContentConfiguration
     */
    protected $sourceContentConfiguration = null;

    /**
     * @var string $cdnConfigurationStatus
     */
    protected $cdnConfigurationStatus = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $cdnConfigurationType
     * @param \Google\AdsApi\AdManager\v201805\SourceContentConfiguration $sourceContentConfiguration
     * @param string $cdnConfigurationStatus
     */
    public function __construct($id = null, $name = null, $cdnConfigurationType = null, $sourceContentConfiguration = null, $cdnConfigurationStatus = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->cdnConfigurationType = $cdnConfigurationType;
      $this->sourceContentConfiguration = $sourceContentConfiguration;
      $this->cdnConfigurationStatus = $cdnConfigurationStatus;
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
     * @return \Google\AdsApi\AdManager\v201805\CdnConfiguration
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
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdManager\v201805\CdnConfiguration
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getCdnConfigurationType()
    {
      return $this->cdnConfigurationType;
    }

    /**
     * @param string $cdnConfigurationType
     * @return \Google\AdsApi\AdManager\v201805\CdnConfiguration
     */
    public function setCdnConfigurationType($cdnConfigurationType)
    {
      $this->cdnConfigurationType = $cdnConfigurationType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\SourceContentConfiguration
     */
    public function getSourceContentConfiguration()
    {
      return $this->sourceContentConfiguration;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\SourceContentConfiguration $sourceContentConfiguration
     * @return \Google\AdsApi\AdManager\v201805\CdnConfiguration
     */
    public function setSourceContentConfiguration($sourceContentConfiguration)
    {
      $this->sourceContentConfiguration = $sourceContentConfiguration;
      return $this;
    }

    /**
     * @return string
     */
    public function getCdnConfigurationStatus()
    {
      return $this->cdnConfigurationStatus;
    }

    /**
     * @param string $cdnConfigurationStatus
     * @return \Google\AdsApi\AdManager\v201805\CdnConfiguration
     */
    public function setCdnConfigurationStatus($cdnConfigurationStatus)
    {
      $this->cdnConfigurationStatus = $cdnConfigurationStatus;
      return $this;
    }

}
