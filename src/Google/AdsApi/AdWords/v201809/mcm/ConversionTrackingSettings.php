<?php

namespace Google\AdsApi\AdWords\v201809\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ConversionTrackingSettings
{

    /**
     * @var int $effectiveConversionTrackingId
     */
    protected $effectiveConversionTrackingId = null;

    /**
     * @var boolean $usesCrossAccountConversionTracking
     */
    protected $usesCrossAccountConversionTracking = null;

    /**
     * @param int $effectiveConversionTrackingId
     * @param boolean $usesCrossAccountConversionTracking
     */
    public function __construct($effectiveConversionTrackingId = null, $usesCrossAccountConversionTracking = null)
    {
      $this->effectiveConversionTrackingId = $effectiveConversionTrackingId;
      $this->usesCrossAccountConversionTracking = $usesCrossAccountConversionTracking;
    }

    /**
     * @return int
     */
    public function getEffectiveConversionTrackingId()
    {
      return $this->effectiveConversionTrackingId;
    }

    /**
     * @param int $effectiveConversionTrackingId
     * @return \Google\AdsApi\AdWords\v201809\mcm\ConversionTrackingSettings
     */
    public function setEffectiveConversionTrackingId($effectiveConversionTrackingId)
    {
      $this->effectiveConversionTrackingId = (!is_null($effectiveConversionTrackingId) && PHP_INT_SIZE === 4)
          ? floatval($effectiveConversionTrackingId) : $effectiveConversionTrackingId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUsesCrossAccountConversionTracking()
    {
      return $this->usesCrossAccountConversionTracking;
    }

    /**
     * @param boolean $usesCrossAccountConversionTracking
     * @return \Google\AdsApi\AdWords\v201809\mcm\ConversionTrackingSettings
     */
    public function setUsesCrossAccountConversionTracking($usesCrossAccountConversionTracking)
    {
      $this->usesCrossAccountConversionTracking = $usesCrossAccountConversionTracking;
      return $this;
    }

}
