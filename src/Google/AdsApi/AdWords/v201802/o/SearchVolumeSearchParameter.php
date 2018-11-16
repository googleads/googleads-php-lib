<?php

namespace Google\AdsApi\AdWords\v201802\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SearchVolumeSearchParameter extends \Google\AdsApi\AdWords\v201802\o\SearchParameter
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\o\LongComparisonOperation $operation
     */
    protected $operation = null;

    /**
     * @param string $SearchParameterType
     * @param \Google\AdsApi\AdWords\v201802\o\LongComparisonOperation $operation
     */
    public function __construct($SearchParameterType = null, $operation = null)
    {
      parent::__construct($SearchParameterType);
      $this->operation = $operation;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\o\LongComparisonOperation
     */
    public function getOperation()
    {
      return $this->operation;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\o\LongComparisonOperation $operation
     * @return \Google\AdsApi\AdWords\v201802\o\SearchVolumeSearchParameter
     */
    public function setOperation($operation)
    {
      $this->operation = $operation;
      return $this;
    }

}
