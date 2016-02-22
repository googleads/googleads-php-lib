<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class JobResult
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\SimpleMutateResult $SimpleMutateResult
     */
    protected $SimpleMutateResult = null;

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\SimpleMutateResult $SimpleMutateResult
     */
    public function __construct($SimpleMutateResult = null)
    {
      $this->SimpleMutateResult = $SimpleMutateResult;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\SimpleMutateResult
     */
    public function getSimpleMutateResult()
    {
      return $this->SimpleMutateResult;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\SimpleMutateResult $SimpleMutateResult
     * @return \Google\AdsApi\AdWords\v201601\cm\JobResult
     */
    public function setSimpleMutateResult($SimpleMutateResult)
    {
      $this->SimpleMutateResult = $SimpleMutateResult;
      return $this;
    }

}
