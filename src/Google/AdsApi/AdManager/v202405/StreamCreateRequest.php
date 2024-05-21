<?php

namespace Google\AdsApi\AdManager\v202405;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class StreamCreateRequest
{

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $userAgent
     */
    protected $userAgent = null;

    /**
     * @var string $reportingType
     */
    protected $reportingType = null;

    /**
     * @param string $url
     * @param string $userAgent
     * @param string $reportingType
     */
    public function __construct($url = null, $userAgent = null, $reportingType = null)
    {
      $this->url = $url;
      $this->userAgent = $userAgent;
      $this->reportingType = $reportingType;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \Google\AdsApi\AdManager\v202405\StreamCreateRequest
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserAgent()
    {
      return $this->userAgent;
    }

    /**
     * @param string $userAgent
     * @return \Google\AdsApi\AdManager\v202405\StreamCreateRequest
     */
    public function setUserAgent($userAgent)
    {
      $this->userAgent = $userAgent;
      return $this;
    }

    /**
     * @return string
     */
    public function getReportingType()
    {
      return $this->reportingType;
    }

    /**
     * @param string $reportingType
     * @return \Google\AdsApi\AdManager\v202405\StreamCreateRequest
     */
    public function setReportingType($reportingType)
    {
      $this->reportingType = $reportingType;
      return $this;
    }

}
