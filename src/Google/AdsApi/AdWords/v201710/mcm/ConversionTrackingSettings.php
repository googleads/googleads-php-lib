<?php

namespace Google\AdsApi\AdWords\v201710\mcm;


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
     * @var boolean $optimizeOnEstimatedConversions
     */
    protected $optimizeOnEstimatedConversions = null;

    /**
     * @param int $effectiveConversionTrackingId
     * @param boolean $usesCrossAccountConversionTracking
     * @param boolean $optimizeOnEstimatedConversions
     */
    public function __construct($effectiveConversionTrackingId = null, $usesCrossAccountConversionTracking = null, $optimizeOnEstimatedConversions = null)
    {
      $this->effectiveConversionTrackingId = $effectiveConversionTrackingId;
      $this->usesCrossAccountConversionTracking = $usesCrossAccountConversionTracking;
      $this->optimizeOnEstimatedConversions = $optimizeOnEstimatedConversions;
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
     * @return \Google\AdsApi\AdWords\v201710\mcm\ConversionTrackingSettings
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
     * @return \Google\AdsApi\AdWords\v201710\mcm\ConversionTrackingSettings
     */
    public function setUsesCrossAccountConversionTracking($usesCrossAccountConversionTracking)
    {
      $this->usesCrossAccountConversionTracking = $usesCrossAccountConversionTracking;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOptimizeOnEstimatedConversions()
    {
      return $this->optimizeOnEstimatedConversions;
    }

    /**
     * @param boolean $optimizeOnEstimatedConversions
     * @return \Google\AdsApi\AdWords\v201710\mcm\ConversionTrackingSettings
     */
    public function setOptimizeOnEstimatedConversions($optimizeOnEstimatedConversions)
    {
      $this->optimizeOnEstimatedConversions = $optimizeOnEstimatedConversions;
      return $this;
    }

}
