<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TrackingEventPing
{

    /**
     * @var string $uri
     */
    protected $uri = null;

    /**
     * @var boolean $hasError
     */
    protected $hasError = null;

    /**
     * @param string $uri
     * @param boolean $hasError
     */
    public function __construct($uri = null, $hasError = null)
    {
      $this->uri = $uri;
      $this->hasError = $hasError;
    }

    /**
     * @return string
     */
    public function getUri()
    {
      return $this->uri;
    }

    /**
     * @param string $uri
     * @return \Google\AdsApi\AdManager\v202005\TrackingEventPing
     */
    public function setUri($uri)
    {
      $this->uri = $uri;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasError()
    {
      return $this->hasError;
    }

    /**
     * @param boolean $hasError
     * @return \Google\AdsApi\AdManager\v202005\TrackingEventPing
     */
    public function setHasError($hasError)
    {
      $this->hasError = $hasError;
      return $this;
    }

}
