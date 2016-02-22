<?php

namespace Google\AdsApi\AdWords\v201601\mcm;

class AccountLabelReturnValue
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\mcm\AccountLabel[] $labels
     */
    protected $labels = null;

    /**
     * @param \Google\AdsApi\AdWords\v201601\mcm\AccountLabel[] $labels
     */
    public function __construct(array $labels = null)
    {
      $this->labels = $labels;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\mcm\AccountLabel[]
     */
    public function getLabels()
    {
      return $this->labels;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\mcm\AccountLabel[] $labels
     * @return \Google\AdsApi\AdWords\v201601\mcm\AccountLabelReturnValue
     */
    public function setLabels(array $labels)
    {
      $this->labels = $labels;
      return $this;
    }

}
