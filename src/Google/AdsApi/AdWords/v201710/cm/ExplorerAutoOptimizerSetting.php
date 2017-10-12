<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ExplorerAutoOptimizerSetting extends \Google\AdsApi\AdWords\v201710\cm\Setting
{

    /**
     * @var boolean $optIn
     */
    protected $optIn = null;

    /**
     * @param string $SettingType
     * @param boolean $optIn
     */
    public function __construct($SettingType = null, $optIn = null)
    {
      parent::__construct($SettingType);
      $this->optIn = $optIn;
    }

    /**
     * @return boolean
     */
    public function getOptIn()
    {
      return $this->optIn;
    }

    /**
     * @param boolean $optIn
     * @return \Google\AdsApi\AdWords\v201710\cm\ExplorerAutoOptimizerSetting
     */
    public function setOptIn($optIn)
    {
      $this->optIn = $optIn;
      return $this;
    }

}
