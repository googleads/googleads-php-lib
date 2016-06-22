<?php

namespace Google\AdsApi\AdWords\v201605\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ConversionTrackingSettings
{

    /**
     * @var string $conversionOptimizerMode
     */
    protected $conversionOptimizerMode = null;

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
     * @param string $conversionOptimizerMode
     * @param int $effectiveConversionTrackingId
     * @param boolean $usesCrossAccountConversionTracking
     * @param boolean $optimizeOnEstimatedConversions
     */
    public function __construct($conversionOptimizerMode = null, $effectiveConversionTrackingId = null, $usesCrossAccountConversionTracking = null, $optimizeOnEstimatedConversions = null)
    {
      $this->conversionOptimizerMode = $conversionOptimizerMode;
      $this->effectiveConversionTrackingId = $effectiveConversionTrackingId;
      $this->usesCrossAccountConversionTracking = $usesCrossAccountConversionTracking;
      $this->optimizeOnEstimatedConversions = $optimizeOnEstimatedConversions;
    }

    /**
     * @return string
     */
    public function getConversionOptimizerMode()
    {
      return $this->conversionOptimizerMode;
    }

    /**
     * @param string $conversionOptimizerMode
     * @return \Google\AdsApi\AdWords\v201605\mcm\ConversionTrackingSettings
     */
    public function setConversionOptimizerMode($conversionOptimizerMode)
    {
      $this->conversionOptimizerMode = $conversionOptimizerMode;
      return $this;
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
     * @return \Google\AdsApi\AdWords\v201605\mcm\ConversionTrackingSettings
     */
    public function setEffectiveConversionTrackingId($effectiveConversionTrackingId)
    {
      $this->effectiveConversionTrackingId = $effectiveConversionTrackingId;
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
     * @return \Google\AdsApi\AdWords\v201605\mcm\ConversionTrackingSettings
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
     * @return \Google\AdsApi\AdWords\v201605\mcm\ConversionTrackingSettings
     */
    public function setOptimizeOnEstimatedConversions($optimizeOnEstimatedConversions)
    {
      $this->optimizeOnEstimatedConversions = $optimizeOnEstimatedConversions;
      return $this;
    }

}
