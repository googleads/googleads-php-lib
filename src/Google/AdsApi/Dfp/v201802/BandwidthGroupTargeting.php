<?php

namespace Google\AdsApi\Dfp\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BandwidthGroupTargeting
{

    /**
     * @var boolean $isTargeted
     */
    protected $isTargeted = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\Technology[] $bandwidthGroups
     */
    protected $bandwidthGroups = null;

    /**
     * @param boolean $isTargeted
     * @param \Google\AdsApi\Dfp\v201802\Technology[] $bandwidthGroups
     */
    public function __construct($isTargeted = null, array $bandwidthGroups = null)
    {
      $this->isTargeted = $isTargeted;
      $this->bandwidthGroups = $bandwidthGroups;
    }

    /**
     * @return boolean
     */
    public function getIsTargeted()
    {
      return $this->isTargeted;
    }

    /**
     * @param boolean $isTargeted
     * @return \Google\AdsApi\Dfp\v201802\BandwidthGroupTargeting
     */
    public function setIsTargeted($isTargeted)
    {
      $this->isTargeted = $isTargeted;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\Technology[]
     */
    public function getBandwidthGroups()
    {
      return $this->bandwidthGroups;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\Technology[] $bandwidthGroups
     * @return \Google\AdsApi\Dfp\v201802\BandwidthGroupTargeting
     */
    public function setBandwidthGroups(array $bandwidthGroups)
    {
      $this->bandwidthGroups = $bandwidthGroups;
      return $this;
    }

}
