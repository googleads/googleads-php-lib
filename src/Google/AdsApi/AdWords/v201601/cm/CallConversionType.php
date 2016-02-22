<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class CallConversionType
{

    /**
     * @var int $conversionTypeId
     */
    protected $conversionTypeId = null;

    /**
     * @param int $conversionTypeId
     */
    public function __construct($conversionTypeId = null)
    {
      $this->conversionTypeId = $conversionTypeId;
    }

    /**
     * @return int
     */
    public function getConversionTypeId()
    {
      return $this->conversionTypeId;
    }

    /**
     * @param int $conversionTypeId
     * @return \Google\AdsApi\AdWords\v201601\cm\CallConversionType
     */
    public function setConversionTypeId($conversionTypeId)
    {
      $this->conversionTypeId = $conversionTypeId;
      return $this;
    }

}
