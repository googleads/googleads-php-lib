<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SamError
{

    /**
     * @var string $samErrorType
     */
    protected $samErrorType = null;

    /**
     * @var string $errorDetails
     */
    protected $errorDetails = null;

    /**
     * @param string $samErrorType
     * @param string $errorDetails
     */
    public function __construct($samErrorType = null, $errorDetails = null)
    {
      $this->samErrorType = $samErrorType;
      $this->errorDetails = $errorDetails;
    }

    /**
     * @return string
     */
    public function getSamErrorType()
    {
      return $this->samErrorType;
    }

    /**
     * @param string $samErrorType
     * @return \Google\AdsApi\AdManager\v202005\SamError
     */
    public function setSamErrorType($samErrorType)
    {
      $this->samErrorType = $samErrorType;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorDetails()
    {
      return $this->errorDetails;
    }

    /**
     * @param string $errorDetails
     * @return \Google\AdsApi\AdManager\v202005\SamError
     */
    public function setErrorDetails($errorDetails)
    {
      $this->errorDetails = $errorDetails;
      return $this;
    }

}
