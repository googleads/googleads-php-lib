<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ThirdPartyMeasurementSettings
{

    /**
     * @var string $viewabilityPartner
     */
    protected $viewabilityPartner = null;

    /**
     * @var string $viewabilityClientId
     */
    protected $viewabilityClientId = null;

    /**
     * @var string $viewabilityReportingId
     */
    protected $viewabilityReportingId = null;

    /**
     * @var string $publisherViewabilityPartner
     */
    protected $publisherViewabilityPartner = null;

    /**
     * @var string $publisherViewabilityClientId
     */
    protected $publisherViewabilityClientId = null;

    /**
     * @var string $publisherViewabilityReportingId
     */
    protected $publisherViewabilityReportingId = null;

    /**
     * @var string $brandLiftPartner
     */
    protected $brandLiftPartner = null;

    /**
     * @var string $brandLiftClientId
     */
    protected $brandLiftClientId = null;

    /**
     * @var string $brandLiftReportingId
     */
    protected $brandLiftReportingId = null;

    /**
     * @var string $reachPartner
     */
    protected $reachPartner = null;

    /**
     * @var string $reachClientId
     */
    protected $reachClientId = null;

    /**
     * @var string $reachReportingId
     */
    protected $reachReportingId = null;

    /**
     * @var string $publisherReachPartner
     */
    protected $publisherReachPartner = null;

    /**
     * @var string $publisherReachClientId
     */
    protected $publisherReachClientId = null;

    /**
     * @var string $publisherReachReportingId
     */
    protected $publisherReachReportingId = null;

    /**
     * @param string $viewabilityPartner
     * @param string $viewabilityClientId
     * @param string $viewabilityReportingId
     * @param string $publisherViewabilityPartner
     * @param string $publisherViewabilityClientId
     * @param string $publisherViewabilityReportingId
     * @param string $brandLiftPartner
     * @param string $brandLiftClientId
     * @param string $brandLiftReportingId
     * @param string $reachPartner
     * @param string $reachClientId
     * @param string $reachReportingId
     * @param string $publisherReachPartner
     * @param string $publisherReachClientId
     * @param string $publisherReachReportingId
     */
    public function __construct($viewabilityPartner = null, $viewabilityClientId = null, $viewabilityReportingId = null, $publisherViewabilityPartner = null, $publisherViewabilityClientId = null, $publisherViewabilityReportingId = null, $brandLiftPartner = null, $brandLiftClientId = null, $brandLiftReportingId = null, $reachPartner = null, $reachClientId = null, $reachReportingId = null, $publisherReachPartner = null, $publisherReachClientId = null, $publisherReachReportingId = null)
    {
      $this->viewabilityPartner = $viewabilityPartner;
      $this->viewabilityClientId = $viewabilityClientId;
      $this->viewabilityReportingId = $viewabilityReportingId;
      $this->publisherViewabilityPartner = $publisherViewabilityPartner;
      $this->publisherViewabilityClientId = $publisherViewabilityClientId;
      $this->publisherViewabilityReportingId = $publisherViewabilityReportingId;
      $this->brandLiftPartner = $brandLiftPartner;
      $this->brandLiftClientId = $brandLiftClientId;
      $this->brandLiftReportingId = $brandLiftReportingId;
      $this->reachPartner = $reachPartner;
      $this->reachClientId = $reachClientId;
      $this->reachReportingId = $reachReportingId;
      $this->publisherReachPartner = $publisherReachPartner;
      $this->publisherReachClientId = $publisherReachClientId;
      $this->publisherReachReportingId = $publisherReachReportingId;
    }

    /**
     * @return string
     */
    public function getViewabilityPartner()
    {
      return $this->viewabilityPartner;
    }

    /**
     * @param string $viewabilityPartner
     * @return \Google\AdsApi\AdManager\v202105\ThirdPartyMeasurementSettings
     */
    public function setViewabilityPartner($viewabilityPartner)
    {
      $this->viewabilityPartner = $viewabilityPartner;
      return $this;
    }

    /**
     * @return string
     */
    public function getViewabilityClientId()
    {
      return $this->viewabilityClientId;
    }

    /**
     * @param string $viewabilityClientId
     * @return \Google\AdsApi\AdManager\v202105\ThirdPartyMeasurementSettings
     */
    public function setViewabilityClientId($viewabilityClientId)
    {
      $this->viewabilityClientId = $viewabilityClientId;
      return $this;
    }

    /**
     * @return string
     */
    public function getViewabilityReportingId()
    {
      return $this->viewabilityReportingId;
    }

    /**
     * @param string $viewabilityReportingId
     * @return \Google\AdsApi\AdManager\v202105\ThirdPartyMeasurementSettings
     */
    public function setViewabilityReportingId($viewabilityReportingId)
    {
      $this->viewabilityReportingId = $viewabilityReportingId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPublisherViewabilityPartner()
    {
      return $this->publisherViewabilityPartner;
    }

    /**
     * @param string $publisherViewabilityPartner
     * @return \Google\AdsApi\AdManager\v202105\ThirdPartyMeasurementSettings
     */
    public function setPublisherViewabilityPartner($publisherViewabilityPartner)
    {
      $this->publisherViewabilityPartner = $publisherViewabilityPartner;
      return $this;
    }

    /**
     * @return string
     */
    public function getPublisherViewabilityClientId()
    {
      return $this->publisherViewabilityClientId;
    }

    /**
     * @param string $publisherViewabilityClientId
     * @return \Google\AdsApi\AdManager\v202105\ThirdPartyMeasurementSettings
     */
    public function setPublisherViewabilityClientId($publisherViewabilityClientId)
    {
      $this->publisherViewabilityClientId = $publisherViewabilityClientId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPublisherViewabilityReportingId()
    {
      return $this->publisherViewabilityReportingId;
    }

    /**
     * @param string $publisherViewabilityReportingId
     * @return \Google\AdsApi\AdManager\v202105\ThirdPartyMeasurementSettings
     */
    public function setPublisherViewabilityReportingId($publisherViewabilityReportingId)
    {
      $this->publisherViewabilityReportingId = $publisherViewabilityReportingId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBrandLiftPartner()
    {
      return $this->brandLiftPartner;
    }

    /**
     * @param string $brandLiftPartner
     * @return \Google\AdsApi\AdManager\v202105\ThirdPartyMeasurementSettings
     */
    public function setBrandLiftPartner($brandLiftPartner)
    {
      $this->brandLiftPartner = $brandLiftPartner;
      return $this;
    }

    /**
     * @return string
     */
    public function getBrandLiftClientId()
    {
      return $this->brandLiftClientId;
    }

    /**
     * @param string $brandLiftClientId
     * @return \Google\AdsApi\AdManager\v202105\ThirdPartyMeasurementSettings
     */
    public function setBrandLiftClientId($brandLiftClientId)
    {
      $this->brandLiftClientId = $brandLiftClientId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBrandLiftReportingId()
    {
      return $this->brandLiftReportingId;
    }

    /**
     * @param string $brandLiftReportingId
     * @return \Google\AdsApi\AdManager\v202105\ThirdPartyMeasurementSettings
     */
    public function setBrandLiftReportingId($brandLiftReportingId)
    {
      $this->brandLiftReportingId = $brandLiftReportingId;
      return $this;
    }

    /**
     * @return string
     */
    public function getReachPartner()
    {
      return $this->reachPartner;
    }

    /**
     * @param string $reachPartner
     * @return \Google\AdsApi\AdManager\v202105\ThirdPartyMeasurementSettings
     */
    public function setReachPartner($reachPartner)
    {
      $this->reachPartner = $reachPartner;
      return $this;
    }

    /**
     * @return string
     */
    public function getReachClientId()
    {
      return $this->reachClientId;
    }

    /**
     * @param string $reachClientId
     * @return \Google\AdsApi\AdManager\v202105\ThirdPartyMeasurementSettings
     */
    public function setReachClientId($reachClientId)
    {
      $this->reachClientId = $reachClientId;
      return $this;
    }

    /**
     * @return string
     */
    public function getReachReportingId()
    {
      return $this->reachReportingId;
    }

    /**
     * @param string $reachReportingId
     * @return \Google\AdsApi\AdManager\v202105\ThirdPartyMeasurementSettings
     */
    public function setReachReportingId($reachReportingId)
    {
      $this->reachReportingId = $reachReportingId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPublisherReachPartner()
    {
      return $this->publisherReachPartner;
    }

    /**
     * @param string $publisherReachPartner
     * @return \Google\AdsApi\AdManager\v202105\ThirdPartyMeasurementSettings
     */
    public function setPublisherReachPartner($publisherReachPartner)
    {
      $this->publisherReachPartner = $publisherReachPartner;
      return $this;
    }

    /**
     * @return string
     */
    public function getPublisherReachClientId()
    {
      return $this->publisherReachClientId;
    }

    /**
     * @param string $publisherReachClientId
     * @return \Google\AdsApi\AdManager\v202105\ThirdPartyMeasurementSettings
     */
    public function setPublisherReachClientId($publisherReachClientId)
    {
      $this->publisherReachClientId = $publisherReachClientId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPublisherReachReportingId()
    {
      return $this->publisherReachReportingId;
    }

    /**
     * @param string $publisherReachReportingId
     * @return \Google\AdsApi\AdManager\v202105\ThirdPartyMeasurementSettings
     */
    public function setPublisherReachReportingId($publisherReachReportingId)
    {
      $this->publisherReachReportingId = $publisherReachReportingId;
      return $this;
    }

}
