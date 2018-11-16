<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class DataEntry
{

    /**
     * @var string $DataEntryType
     */
    protected $DataEntryType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['DataEntry.Type' => 'DataEntryType'];

    /**
     * @param string $DataEntryType
     */
    public function __construct($DataEntryType = null)
    {
      $this->DataEntryType = $DataEntryType;
    }

    /**
     * @return string
     */
    public function getDataEntryType()
    {
      return $this->DataEntryType;
    }

    /**
     * @param string $DataEntryType
     * @return \Google\AdsApi\AdWords\v201806\cm\DataEntry
     */
    public function setDataEntryType($DataEntryType)
    {
      $this->DataEntryType = $DataEntryType;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\DataEntry
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
