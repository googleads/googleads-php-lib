<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ConversionEvent_TrackingUrlsMapEntry
{

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\TrackingUrls $value
     */
    protected $value = null;

    /**
     * @param string $key
     * @param \Google\AdsApi\AdManager\v201808\TrackingUrls $value
     */
    public function __construct($key = null, $value = null)
    {
      $this->key = $key;
      $this->value = $value;
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param string $key
     * @return \Google\AdsApi\AdManager\v201808\ConversionEvent_TrackingUrlsMapEntry
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\TrackingUrls
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\TrackingUrls $value
     * @return \Google\AdsApi\AdManager\v201808\ConversionEvent_TrackingUrlsMapEntry
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
