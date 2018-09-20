<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class NetworkSetting
{

    /**
     * @var boolean $targetGoogleSearch
     */
    protected $targetGoogleSearch = null;

    /**
     * @var boolean $targetSearchNetwork
     */
    protected $targetSearchNetwork = null;

    /**
     * @var boolean $targetContentNetwork
     */
    protected $targetContentNetwork = null;

    /**
     * @var boolean $targetPartnerSearchNetwork
     */
    protected $targetPartnerSearchNetwork = null;

    /**
     * @param boolean $targetGoogleSearch
     * @param boolean $targetSearchNetwork
     * @param boolean $targetContentNetwork
     * @param boolean $targetPartnerSearchNetwork
     */
    public function __construct($targetGoogleSearch = null, $targetSearchNetwork = null, $targetContentNetwork = null, $targetPartnerSearchNetwork = null)
    {
      $this->targetGoogleSearch = $targetGoogleSearch;
      $this->targetSearchNetwork = $targetSearchNetwork;
      $this->targetContentNetwork = $targetContentNetwork;
      $this->targetPartnerSearchNetwork = $targetPartnerSearchNetwork;
    }

    /**
     * @return boolean
     */
    public function getTargetGoogleSearch()
    {
      return $this->targetGoogleSearch;
    }

    /**
     * @param boolean $targetGoogleSearch
     * @return \Google\AdsApi\AdWords\v201809\cm\NetworkSetting
     */
    public function setTargetGoogleSearch($targetGoogleSearch)
    {
      $this->targetGoogleSearch = $targetGoogleSearch;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTargetSearchNetwork()
    {
      return $this->targetSearchNetwork;
    }

    /**
     * @param boolean $targetSearchNetwork
     * @return \Google\AdsApi\AdWords\v201809\cm\NetworkSetting
     */
    public function setTargetSearchNetwork($targetSearchNetwork)
    {
      $this->targetSearchNetwork = $targetSearchNetwork;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTargetContentNetwork()
    {
      return $this->targetContentNetwork;
    }

    /**
     * @param boolean $targetContentNetwork
     * @return \Google\AdsApi\AdWords\v201809\cm\NetworkSetting
     */
    public function setTargetContentNetwork($targetContentNetwork)
    {
      $this->targetContentNetwork = $targetContentNetwork;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTargetPartnerSearchNetwork()
    {
      return $this->targetPartnerSearchNetwork;
    }

    /**
     * @param boolean $targetPartnerSearchNetwork
     * @return \Google\AdsApi\AdWords\v201809\cm\NetworkSetting
     */
    public function setTargetPartnerSearchNetwork($targetPartnerSearchNetwork)
    {
      $this->targetPartnerSearchNetwork = $targetPartnerSearchNetwork;
      return $this;
    }

}
