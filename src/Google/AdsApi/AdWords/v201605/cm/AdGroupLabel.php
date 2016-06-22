<?php

namespace Google\AdsApi\AdWords\v201605\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupLabel
{

    /**
     * @var int $adGroupId
     */
    protected $adGroupId = null;

    /**
     * @var int $labelId
     */
    protected $labelId = null;

    /**
     * @param int $adGroupId
     * @param int $labelId
     */
    public function __construct($adGroupId = null, $labelId = null)
    {
      $this->adGroupId = $adGroupId;
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
     * @return \Google\AdsApi\AdWords\v201605\cm\AdGroupLabel
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = $adGroupId;
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
     * @return \Google\AdsApi\AdWords\v201605\cm\AdGroupLabel
     */
    public function setLabelId($labelId)
    {
      $this->labelId = $labelId;
      return $this;
    }

}
