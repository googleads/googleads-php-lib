<?php

namespace Google\AdsApi\AdManager\v202208;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ApiException extends \Google\AdsApi\AdManager\v202208\ApplicationException
{

    /**
     * @var \Google\AdsApi\AdManager\v202208\ApiError[] $errors
     */
    protected $errors = null;

    /**
     * @param string $message
     * @param string $message1
     * @param \Google\AdsApi\AdManager\v202208\ApiError[] $errors
     */
    public function __construct($message = null, $message1 = null, array $errors = null)
    {
      parent::__construct($message, $message1);
      $this->errors = $errors;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202208\ApiError[]
     */
    public function getErrors()
    {
      return $this->errors;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202208\ApiError[]|null $errors
     * @return \Google\AdsApi\AdManager\v202208\ApiException
     */
    public function setErrors(array $errors = null)
    {
      $this->errors = $errors;
      return $this;
    }

}
