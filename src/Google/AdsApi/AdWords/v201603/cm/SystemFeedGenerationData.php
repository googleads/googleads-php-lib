<?php

namespace Google\AdsApi\AdWords\v201603\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SystemFeedGenerationData
{

    /**
     * @var string $SystemFeedGenerationDataType
     */
    protected $SystemFeedGenerationDataType = null;

    /**
     * @param string $SystemFeedGenerationDataType
     */
    public function __construct($SystemFeedGenerationDataType = null)
    {
      $this->SystemFeedGenerationDataType = $SystemFeedGenerationDataType;
    }

    /**
     * @return string
     */
    public function getSystemFeedGenerationDataType()
    {
      return $this->SystemFeedGenerationDataType;
    }

    /**
     * @param string $SystemFeedGenerationDataType
     * @return \Google\AdsApi\AdWords\v201603\cm\SystemFeedGenerationData
     */
    public function setSystemFeedGenerationDataType($SystemFeedGenerationDataType)
    {
      $this->SystemFeedGenerationDataType = $SystemFeedGenerationDataType;
      return $this;
    }

}
