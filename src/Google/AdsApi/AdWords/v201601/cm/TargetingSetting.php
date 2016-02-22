<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class TargetingSetting extends \Google\AdsApi\AdWords\v201601\cm\Setting
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\TargetingSettingDetail[] $details
     */
    protected $details = null;

    /**
     * @param string $SettingType
     * @param \Google\AdsApi\AdWords\v201601\cm\TargetingSettingDetail[] $details
     */
    public function __construct($SettingType = null, array $details = null)
    {
      parent::__construct($SettingType);
      $this->details = $details;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\TargetingSettingDetail[]
     */
    public function getDetails()
    {
      return $this->details;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\TargetingSettingDetail[] $details
     * @return \Google\AdsApi\AdWords\v201601\cm\TargetingSetting
     */
    public function setDetails(array $details)
    {
      $this->details = $details;
      return $this;
    }

}
