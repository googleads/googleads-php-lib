<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class ApiException extends \Google\AdsApi\AdWords\v201601\cm\ApplicationException
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\ApiError[] $errors
     */
    protected $errors = null;

    /**
     * @param string $message
     * @param string $ApplicationExceptionType
     * @param \Google\AdsApi\AdWords\v201601\cm\ApiError[] $errors
     */
    public function __construct($message = null, $ApplicationExceptionType = null, array $errors = null)
    {
      parent::__construct($message, $ApplicationExceptionType);
      $this->errors = $errors;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\ApiError[]
     */
    public function getErrors()
    {
      return $this->errors;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\ApiError[] $errors
     * @return \Google\AdsApi\AdWords\v201601\cm\ApiException
     */
    public function setErrors(array $errors)
    {
      $this->errors = $errors;
      return $this;
    }

}
