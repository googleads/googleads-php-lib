<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomerNegativeCriterion
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\Criterion $criterion
     */
    protected $criterion = null;

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Criterion $criterion
     */
    public function __construct($criterion = null)
    {
      $this->criterion = $criterion;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\Criterion
     */
    public function getCriterion()
    {
      return $this->criterion;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Criterion $criterion
     * @return \Google\AdsApi\AdWords\v201802\cm\CustomerNegativeCriterion
     */
    public function setCriterion($criterion)
    {
      $this->criterion = $criterion;
      return $this;
    }

}
