<?php

namespace Google\AdsApi\AdManager\v202005;


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
     * @param string $url
     * @param string $userAgent
     */
    public function __construct($url = null, $userAgent = null)
    {
      $this->url = $url;
      $this->userAgent = $userAgent;
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
     * @return \Google\AdsApi\AdManager\v202005\StreamCreateRequest
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
     * @return \Google\AdsApi\AdManager\v202005\StreamCreateRequest
     */
    public function setUserAgent($userAgent)
    {
      $this->userAgent = $userAgent;
      return $this;
    }

}
