<?php

namespace Google\AdsApi\Dfp\v201511;

class ApiException extends \Google\AdsApi\Dfp\v201511\ApplicationException
{

    /**
     * @var \Google\AdsApi\Dfp\v201511\ApiError[] $errors
     */
    protected $errors = null;

    /**
     * @param string $message
     * @param \Google\AdsApi\Dfp\v201511\ApiError[] $errors
     */
    public function __construct($message = null, array $errors = null)
    {
      parent::__construct($message);
      $this->errors = $errors;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\ApiError[]
     */
    public function getErrors()
    {
      return $this->errors;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\ApiError[] $errors
     * @return \Google\AdsApi\Dfp\v201511\ApiException
     */
    public function setErrors(array $errors)
    {
      $this->errors = $errors;
      return $this;
    }

}
