<?php

namespace Google\AdsApi\AdWords\v201802\cm;


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
     * @var array $parameterMap
     */
    private $parameterMap = ['SystemFeedGenerationData.Type' => 'SystemFeedGenerationDataType'];

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
     * @return \Google\AdsApi\AdWords\v201802\cm\SystemFeedGenerationData
     */
    public function setSystemFeedGenerationDataType($SystemFeedGenerationDataType)
    {
      $this->SystemFeedGenerationDataType = $SystemFeedGenerationDataType;
      return $this;
    }

    /**
     * Getter for a non PHP standard named variables.
     *
     * @param string $var variable name to get
     * @return string variable value
     */
    public function __get($var)
    {
      if (!array_key_exists($var, $this->parameterMap)) {
        return null;
      }
      return $this->{$this->parameterMap[$var]};
    }

    /**
     * Setter for a non PHP standard named variables.
     *
     * @param string $var variable name
     * @param mixed $value variable value to set
     * @return \Google\AdsApi\AdWords\v201802\cm\SystemFeedGenerationData
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
