<?php

namespace Google\AdsApi\AdWords\v201806\cm;


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
     * @var string $serviceName
     */
    protected $serviceName = null;

    /**
     * @var string $methodName
     */
    protected $methodName = null;

    /**
     * @var int $operations
     */
    protected $operations = null;

    /**
     * @var int $responseTime
     */
    protected $responseTime = null;

    /**
     * @param string $requestId
     * @param string $serviceName
     * @param string $methodName
     * @param int $operations
     * @param int $responseTime
     */
    public function __construct($requestId = null, $serviceName = null, $methodName = null, $operations = null, $responseTime = null)
    {
      $this->requestId = $requestId;
      $this->serviceName = $serviceName;
      $this->methodName = $methodName;
      $this->operations = $operations;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\SoapResponseHeader
     */
    public function setRequestId($requestId)
    {
      $this->requestId = $requestId;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceName()
    {
      return $this->serviceName;
    }

    /**
     * @param string $serviceName
     * @return \Google\AdsApi\AdWords\v201806\cm\SoapResponseHeader
     */
    public function setServiceName($serviceName)
    {
      $this->serviceName = $serviceName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMethodName()
    {
      return $this->methodName;
    }

    /**
     * @param string $methodName
     * @return \Google\AdsApi\AdWords\v201806\cm\SoapResponseHeader
     */
    public function setMethodName($methodName)
    {
      $this->methodName = $methodName;
      return $this;
    }

    /**
     * @return int
     */
    public function getOperations()
    {
      return $this->operations;
    }

    /**
     * @param int $operations
     * @return \Google\AdsApi\AdWords\v201806\cm\SoapResponseHeader
     */
    public function setOperations($operations)
    {
      $this->operations = (!is_null($operations) && PHP_INT_SIZE === 4)
          ? floatval($operations) : $operations;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\SoapResponseHeader
     */
    public function setResponseTime($responseTime)
    {
      $this->responseTime = (!is_null($responseTime) && PHP_INT_SIZE === 4)
          ? floatval($responseTime) : $responseTime;
      return $this;
    }

}
