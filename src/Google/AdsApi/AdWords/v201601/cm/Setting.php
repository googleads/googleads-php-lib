<?php

namespace Google\AdsApi\AdWords\v201601\cm;

abstract class Setting
{

    /**
     * @var string $SettingType
     */
    protected $SettingType = null;

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
     * @return \Google\AdsApi\AdWords\v201601\cm\Setting
     */
    public function setSettingType($SettingType)
    {
      $this->SettingType = $SettingType;
      return $this;
    }

}
