<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class SimpleMutateResult
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\Operand[] $results
     */
    protected $results = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\ApiError[] $errors
     */
    protected $errors = null;

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Operand[] $results
     * @param \Google\AdsApi\AdWords\v201601\cm\ApiError[] $errors
     */
    public function __construct(array $results = null, array $errors = null)
    {
      $this->results = $results;
      $this->errors = $errors;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\Operand[]
     */
    public function getResults()
    {
      return $this->results;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Operand[] $results
     * @return \Google\AdsApi\AdWords\v201601\cm\SimpleMutateResult
     */
    public function setResults(array $results)
    {
      $this->results = $results;
      return $this;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\SimpleMutateResult
     */
    public function setErrors(array $errors)
    {
      $this->errors = $errors;
      return $this;
    }

}
