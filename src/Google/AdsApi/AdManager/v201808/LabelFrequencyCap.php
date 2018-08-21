<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LabelFrequencyCap
{

    /**
     * @var \Google\AdsApi\AdManager\v201808\FrequencyCap $frequencyCap
     */
    protected $frequencyCap = null;

    /**
     * @var int $labelId
     */
    protected $labelId = null;

    /**
     * @param \Google\AdsApi\AdManager\v201808\FrequencyCap $frequencyCap
     * @param int $labelId
     */
    public function __construct($frequencyCap = null, $labelId = null)
    {
      $this->frequencyCap = $frequencyCap;
      $this->labelId = $labelId;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\FrequencyCap
     */
    public function getFrequencyCap()
    {
      return $this->frequencyCap;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\FrequencyCap $frequencyCap
     * @return \Google\AdsApi\AdManager\v201808\LabelFrequencyCap
     */
    public function setFrequencyCap($frequencyCap)
    {
      $this->frequencyCap = $frequencyCap;
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
     * @return \Google\AdsApi\AdManager\v201808\LabelFrequencyCap
     */
    public function setLabelId($labelId)
    {
      $this->labelId = (!is_null($labelId) && PHP_INT_SIZE === 4)
          ? floatval($labelId) : $labelId;
      return $this;
    }

}
