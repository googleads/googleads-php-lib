<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupAdLabel
{

    /**
     * @var int $adGroupId
     */
    protected $adGroupId = null;

    /**
     * @var int $adId
     */
    protected $adId = null;

    /**
     * @var int $labelId
     */
    protected $labelId = null;

    /**
     * @param int $adGroupId
     * @param int $adId
     * @param int $labelId
     */
    public function __construct($adGroupId = null, $adId = null, $labelId = null)
    {
      $this->adGroupId = $adGroupId;
      $this->adId = $adId;
      $this->labelId = $labelId;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
      return $this->adGroupId;
    }

    /**
     * @param int $adGroupId
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupAdLabel
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = (!is_null($adGroupId) && PHP_INT_SIZE === 4)
          ? floatval($adGroupId) : $adGroupId;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdId()
    {
      return $this->adId;
    }

    /**
     * @param int $adId
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupAdLabel
     */
    public function setAdId($adId)
    {
      $this->adId = (!is_null($adId) && PHP_INT_SIZE === 4)
          ? floatval($adId) : $adId;
      return $this;
    }

    /**
     * @return int
     */
    public function getLabelId()
    {
      return $this->labelId;
    }

    /**
     * @param int $labelId
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupAdLabel
     */
    public function setLabelId($labelId)
    {
      $this->labelId = (!is_null($labelId) && PHP_INT_SIZE === 4)
          ? floatval($labelId) : $labelId;
      return $this;
    }

}
