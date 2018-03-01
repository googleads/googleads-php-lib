<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetingSetting extends \Google\AdsApi\AdWords\v201802\cm\Setting
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\TargetingSettingDetail[] $details
     */
    protected $details = null;

    /**
     * @param string $SettingType
     * @param \Google\AdsApi\AdWords\v201802\cm\TargetingSettingDetail[] $details
     */
    public function __construct($SettingType = null, array $details = null)
    {
      parent::__construct($SettingType);
      $this->details = $details;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\TargetingSettingDetail[]
     */
    public function getDetails()
    {
      return $this->details;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\TargetingSettingDetail[] $details
     * @return \Google\AdsApi\AdWords\v201802\cm\TargetingSetting
     */
    public function setDetails(array $details)
    {
      $this->details = $details;
      return $this;
    }

}
