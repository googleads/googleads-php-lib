<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdResponse
{

    /**
     * @var string $requestUrl
     */
    protected $requestUrl = null;

    /**
     * @var boolean $isVmapRequest
     */
    protected $isVmapRequest = null;

    /**
     * @var string $responseBody
     */
    protected $responseBody = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\AdResponse[] $redirectResponses
     */
    protected $redirectResponses = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\SamError $samError
     */
    protected $samError = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\SamError[] $adErrors
     */
    protected $adErrors = null;

    /**
     * @param string $requestUrl
     * @param boolean $isVmapRequest
     * @param string $responseBody
     * @param \Google\AdsApi\AdManager\v202002\AdResponse[] $redirectResponses
     * @param \Google\AdsApi\AdManager\v202002\SamError $samError
     * @param \Google\AdsApi\AdManager\v202002\SamError[] $adErrors
     */
    public function __construct($requestUrl = null, $isVmapRequest = null, $responseBody = null, array $redirectResponses = null, $samError = null, array $adErrors = null)
    {
      $this->requestUrl = $requestUrl;
      $this->isVmapRequest = $isVmapRequest;
      $this->responseBody = $responseBody;
      $this->redirectResponses = $redirectResponses;
      $this->samError = $samError;
      $this->adErrors = $adErrors;
    }

    /**
     * @return string
     */
    public function getRequestUrl()
    {
      return $this->requestUrl;
    }

    /**
     * @param string $requestUrl
     * @return \Google\AdsApi\AdManager\v202002\AdResponse
     */
    public function setRequestUrl($requestUrl)
    {
      $this->requestUrl = $requestUrl;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsVmapRequest()
    {
      return $this->isVmapRequest;
    }

    /**
     * @param boolean $isVmapRequest
     * @return \Google\AdsApi\AdManager\v202002\AdResponse
     */
    public function setIsVmapRequest($isVmapRequest)
    {
      $this->isVmapRequest = $isVmapRequest;
      return $this;
    }

    /**
     * @return string
     */
    public function getResponseBody()
    {
      return $this->responseBody;
    }

    /**
     * @param string $responseBody
     * @return \Google\AdsApi\AdManager\v202002\AdResponse
     */
    public function setResponseBody($responseBody)
    {
      $this->responseBody = $responseBody;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\AdResponse[]
     */
    public function getRedirectResponses()
    {
      return $this->redirectResponses;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\AdResponse[]|null $redirectResponses
     * @return \Google\AdsApi\AdManager\v202002\AdResponse
     */
    public function setRedirectResponses(array $redirectResponses = null)
    {
      $this->redirectResponses = $redirectResponses;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\SamError
     */
    public function getSamError()
    {
      return $this->samError;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\SamError $samError
     * @return \Google\AdsApi\AdManager\v202002\AdResponse
     */
    public function setSamError($samError)
    {
      $this->samError = $samError;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\SamError[]
     */
    public function getAdErrors()
    {
      return $this->adErrors;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\SamError[]|null $adErrors
     * @return \Google\AdsApi\AdManager\v202002\AdResponse
     */
    public function setAdErrors(array $adErrors = null)
    {
      $this->adErrors = $adErrors;
      return $this;
    }

}
