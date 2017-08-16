<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ApiException extends \Google\AdsApi\Dfp\v201708\ApplicationException
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\ApiError[] $errors
     */
    protected $errors = null;

    /**
     * @param string $message
     * @param string $message1
     * @param \Google\AdsApi\Dfp\v201708\ApiError[] $errors
     */
    public function __construct($message = null, $message1 = null, array $errors = null)
    {
      parent::__construct($message, $message1);
      $this->errors = $errors;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\ApiError[]
     */
    public function getErrors()
    {
      return $this->errors;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\ApiError[] $errors
     * @return \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function setErrors(array $errors)
    {
      $this->errors = $errors;
      return $this;
    }

}
