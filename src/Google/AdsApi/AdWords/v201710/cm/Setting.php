<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class Setting
{

    /**
     * @var string $SettingType
     */
    protected $SettingType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['Setting.Type' => 'SettingType'];

    /**
     * @param string $SettingType
     */
    public function __construct($SettingType = null)
    {
      $this->SettingType = $SettingType;
    }

    /**
     * @return string
     */
    public function getSettingType()
    {
      return $this->SettingType;
    }

    /**
     * @param string $SettingType
     * @return \Google\AdsApi\AdWords\v201710\cm\Setting
     */
    public function setSettingType($SettingType)
    {
      $this->SettingType = $SettingType;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\Setting
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
