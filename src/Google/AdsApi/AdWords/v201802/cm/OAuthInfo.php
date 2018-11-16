<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OAuthInfo
{

    /**
     * @var string $httpMethod
     */
    protected $httpMethod = null;

    /**
     * @var string $httpRequestUrl
     */
    protected $httpRequestUrl = null;

    /**
     * @var string $httpAuthorizationHeader
     */
    protected $httpAuthorizationHeader = null;

    /**
     * @param string $httpMethod
     * @param string $httpRequestUrl
     * @param string $httpAuthorizationHeader
     */
    public function __construct($httpMethod = null, $httpRequestUrl = null, $httpAuthorizationHeader = null)
    {
      $this->httpMethod = $httpMethod;
      $this->httpRequestUrl = $httpRequestUrl;
      $this->httpAuthorizationHeader = $httpAuthorizationHeader;
    }

    /**
     * @return string
     */
    public function getHttpMethod()
    {
      return $this->httpMethod;
    }

    /**
     * @param string $httpMethod
     * @return \Google\AdsApi\AdWords\v201802\cm\OAuthInfo
     */
    public function setHttpMethod($httpMethod)
    {
      $this->httpMethod = $httpMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getHttpRequestUrl()
    {
      return $this->httpRequestUrl;
    }

    /**
     * @param string $httpRequestUrl
     * @return \Google\AdsApi\AdWords\v201802\cm\OAuthInfo
     */
    public function setHttpRequestUrl($httpRequestUrl)
    {
      $this->httpRequestUrl = $httpRequestUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getHttpAuthorizationHeader()
    {
      return $this->httpAuthorizationHeader;
    }

    /**
     * @param string $httpAuthorizationHeader
     * @return \Google\AdsApi\AdWords\v201802\cm\OAuthInfo
     */
    public function setHttpAuthorizationHeader($httpAuthorizationHeader)
    {
      $this->httpAuthorizationHeader = $httpAuthorizationHeader;
      return $this;
    }

}
