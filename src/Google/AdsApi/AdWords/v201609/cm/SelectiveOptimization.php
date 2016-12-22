<?php

namespace Google\AdsApi\AdWords\v201609\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SelectiveOptimization
{

    /**
     * @var long[] $conversionTypeIds
     */
    protected $conversionTypeIds = null;

    /**
     * @var \Google\AdsApi\AdWords\v201609\cm\ListOperations $conversionTypeIdsOps
     */
    protected $conversionTypeIdsOps = null;

    /**
     * @param long[] $conversionTypeIds
     * @param \Google\AdsApi\AdWords\v201609\cm\ListOperations $conversionTypeIdsOps
     */
    public function __construct(array $conversionTypeIds = null, $conversionTypeIdsOps = null)
    {
      $this->conversionTypeIds = $conversionTypeIds;
      $this->conversionTypeIdsOps = $conversionTypeIdsOps;
    }

    /**
     * @return long[]
     */
    public function getConversionTypeIds()
    {
      return $this->conversionTypeIds;
    }

    /**
     * @param long[] $conversionTypeIds
     * @return \Google\AdsApi\AdWords\v201609\cm\SelectiveOptimization
     */
    public function setConversionTypeIds(array $conversionTypeIds)
    {
      $this->conversionTypeIds = $conversionTypeIds;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201609\cm\ListOperations
     */
    public function getConversionTypeIdsOps()
    {
      return $this->conversionTypeIdsOps;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201609\cm\ListOperations $conversionTypeIdsOps
     * @return \Google\AdsApi\AdWords\v201609\cm\SelectiveOptimization
     */
    public function setConversionTypeIdsOps($conversionTypeIdsOps)
    {
      $this->conversionTypeIdsOps = $conversionTypeIdsOps;
      return $this;
    }

}
