<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class FeedItemDevicePreference
{

    /**
     * @var int $devicePreference
     */
    protected $devicePreference = null;

    /**
     * @param int $devicePreference
     */
    public function __construct($devicePreference = null)
    {
      $this->devicePreference = $devicePreference;
    }

    /**
     * @return int
     */
    public function getDevicePreference()
    {
      return $this->devicePreference;
    }

    /**
     * @param int $devicePreference
     * @return \Google\AdsApi\AdWords\v201601\cm\FeedItemDevicePreference
     */
    public function setDevicePreference($devicePreference)
    {
      $this->devicePreference = $devicePreference;
      return $this;
    }

}
