<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SoapResponseHeader
{

    /**
     * @var string $requestId
     */
    protected $requestId = null;

    /**
     * @var int $responseTime
     */
    protected $responseTime = null;

    /**
     * @param string $requestId
     * @param int $responseTime
     */
    public function __construct($requestId = null, $responseTime = null)
    {
      $this->requestId = $requestId;
      $this->responseTime = $responseTime;
    }

    /**
     * @return string
     */
    public function getRequestId()
    {
      return $this->requestId;
    }

    /**
     * @param string $requestId
     * @return \Google\AdsApi\AdManager\v201805\SoapResponseHeader
     */
    public function setRequestId($requestId)
    {
      $this->requestId = $requestId;
      return $this;
    }

    /**
     * @return int
     */
    public function getResponseTime()
    {
      return $this->responseTime;
    }

    /**
     * @param int $responseTime
     * @return \Google\AdsApi\AdManager\v201805\SoapResponseHeader
     */
    public function setResponseTime($responseTime)
    {
      $this->responseTime = (!is_null($responseTime) && PHP_INT_SIZE === 4)
          ? floatval($responseTime) : $responseTime;
      return $this;
    }

}
