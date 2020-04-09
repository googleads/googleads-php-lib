<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BreakTemplateBreakTemplateMember
{

    /**
     * @var int $adSpotId
     */
    protected $adSpotId = null;

    /**
     * @var string $adSpotFillType
     */
    protected $adSpotFillType = null;

    /**
     * @param int $adSpotId
     * @param string $adSpotFillType
     */
    public function __construct($adSpotId = null, $adSpotFillType = null)
    {
      $this->adSpotId = $adSpotId;
      $this->adSpotFillType = $adSpotFillType;
    }

    /**
     * @return int
     */
    public function getAdSpotId()
    {
      return $this->adSpotId;
    }

    /**
     * @param int $adSpotId
     * @return \Google\AdsApi\AdManager\v202002\BreakTemplateBreakTemplateMember
     */
    public function setAdSpotId($adSpotId)
    {
      $this->adSpotId = (!is_null($adSpotId) && PHP_INT_SIZE === 4)
          ? floatval($adSpotId) : $adSpotId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdSpotFillType()
    {
      return $this->adSpotFillType;
    }

    /**
     * @param string $adSpotFillType
     * @return \Google\AdsApi\AdManager\v202002\BreakTemplateBreakTemplateMember
     */
    public function setAdSpotFillType($adSpotFillType)
    {
      $this->adSpotFillType = $adSpotFillType;
      return $this;
    }

}
