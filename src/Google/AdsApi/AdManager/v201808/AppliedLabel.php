<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AppliedLabel
{

    /**
     * @var int $labelId
     */
    protected $labelId = null;

    /**
     * @var boolean $isNegated
     */
    protected $isNegated = null;

    /**
     * @param int $labelId
     * @param boolean $isNegated
     */
    public function __construct($labelId = null, $isNegated = null)
    {
      $this->labelId = $labelId;
      $this->isNegated = $isNegated;
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
     * @return \Google\AdsApi\AdManager\v201808\AppliedLabel
     */
    public function setLabelId($labelId)
    {
      $this->labelId = (!is_null($labelId) && PHP_INT_SIZE === 4)
          ? floatval($labelId) : $labelId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNegated()
    {
      return $this->isNegated;
    }

    /**
     * @param boolean $isNegated
     * @return \Google\AdsApi\AdManager\v201808\AppliedLabel
     */
    public function setIsNegated($isNegated)
    {
      $this->isNegated = $isNegated;
      return $this;
    }

}
