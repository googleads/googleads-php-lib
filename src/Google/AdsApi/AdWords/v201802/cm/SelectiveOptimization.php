<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SelectiveOptimization
{

    /**
     * @var int[] $conversionTypeIds
     */
    protected $conversionTypeIds = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\ListOperations $conversionTypeIdsOps
     */
    protected $conversionTypeIdsOps = null;

    /**
     * @param int[] $conversionTypeIds
     * @param \Google\AdsApi\AdWords\v201802\cm\ListOperations $conversionTypeIdsOps
     */
    public function __construct(array $conversionTypeIds = null, $conversionTypeIdsOps = null)
    {
      $this->conversionTypeIds = $conversionTypeIds;
      $this->conversionTypeIdsOps = $conversionTypeIdsOps;
    }

    /**
     * @return int[]
     */
    public function getConversionTypeIds()
    {
      return $this->conversionTypeIds;
    }

    /**
     * @param int[] $conversionTypeIds
     * @return \Google\AdsApi\AdWords\v201802\cm\SelectiveOptimization
     */
    public function setConversionTypeIds(array $conversionTypeIds)
    {
      $this->conversionTypeIds = $conversionTypeIds;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\ListOperations
     */
    public function getConversionTypeIdsOps()
    {
      return $this->conversionTypeIdsOps;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\ListOperations $conversionTypeIdsOps
     * @return \Google\AdsApi\AdWords\v201802\cm\SelectiveOptimization
     */
    public function setConversionTypeIdsOps($conversionTypeIdsOps)
    {
      $this->conversionTypeIdsOps = $conversionTypeIdsOps;
      return $this;
    }

}
