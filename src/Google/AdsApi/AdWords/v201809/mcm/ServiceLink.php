<?php

namespace Google\AdsApi\AdWords\v201809\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ServiceLink
{

    /**
     * @var string $serviceType
     */
    protected $serviceType = null;

    /**
     * @var int $serviceLinkId
     */
    protected $serviceLinkId = null;

    /**
     * @var string $linkStatus
     */
    protected $linkStatus = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param string $serviceType
     * @param int $serviceLinkId
     * @param string $linkStatus
     * @param string $name
     */
    public function __construct($serviceType = null, $serviceLinkId = null, $linkStatus = null, $name = null)
    {
      $this->serviceType = $serviceType;
      $this->serviceLinkId = $serviceLinkId;
      $this->linkStatus = $linkStatus;
      $this->name = $name;
    }

    /**
     * @return string
     */
    public function getServiceType()
    {
      return $this->serviceType;
    }

    /**
     * @param string $serviceType
     * @return \Google\AdsApi\AdWords\v201809\mcm\ServiceLink
     */
    public function setServiceType($serviceType)
    {
      $this->serviceType = $serviceType;
      return $this;
    }

    /**
     * @return int
     */
    public function getServiceLinkId()
    {
      return $this->serviceLinkId;
    }

    /**
     * @param int $serviceLinkId
     * @return \Google\AdsApi\AdWords\v201809\mcm\ServiceLink
     */
    public function setServiceLinkId($serviceLinkId)
    {
      $this->serviceLinkId = (!is_null($serviceLinkId) && PHP_INT_SIZE === 4)
          ? floatval($serviceLinkId) : $serviceLinkId;
      return $this;
    }

    /**
     * @return string
     */
    public function getLinkStatus()
    {
      return $this->linkStatus;
    }

    /**
     * @param string $linkStatus
     * @return \Google\AdsApi\AdWords\v201809\mcm\ServiceLink
     */
    public function setLinkStatus($linkStatus)
    {
      $this->linkStatus = $linkStatus;
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
     * @return \Google\AdsApi\AdWords\v201809\mcm\ServiceLink
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
