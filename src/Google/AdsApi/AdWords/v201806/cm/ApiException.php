<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ApiException extends \Google\AdsApi\AdWords\v201806\cm\ApplicationException
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\ApiError[] $errors
     */
    protected $errors = null;

    /**
     * @param string $message
     * @param string $message1
     * @param string $ApplicationExceptionType
     * @param \Google\AdsApi\AdWords\v201806\cm\ApiError[] $errors
     */
    public function __construct($message = null, $message1 = null, $ApplicationExceptionType = null, array $errors = null)
    {
      parent::__construct($message, $message1, $ApplicationExceptionType);
      $this->errors = $errors;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\ApiError[]
     */
    public function getErrors()
    {
      return $this->errors;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\ApiError[] $errors
     * @return \Google\AdsApi\AdWords\v201806\cm\ApiException
     */
    public function setErrors(array $errors)
    {
      $this->errors = $errors;
      return $this;
    }

}
