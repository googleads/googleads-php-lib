<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ErrorList
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\ApiError[] $errors
     */
    protected $errors = null;

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\ApiError[] $errors
     */
    public function __construct(array $errors = null)
    {
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
     * @return \Google\AdsApi\AdWords\v201806\cm\ErrorList
     */
    public function setErrors(array $errors)
    {
      $this->errors = $errors;
      return $this;
    }

}
