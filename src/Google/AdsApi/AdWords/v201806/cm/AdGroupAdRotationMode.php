<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupAdRotationMode
{

    /**
     * @var string $adRotationMode
     */
    protected $adRotationMode = null;

    /**
     * @param string $adRotationMode
     */
    public function __construct($adRotationMode = null)
    {
      $this->adRotationMode = $adRotationMode;
    }

    /**
     * @return string
     */
    public function getAdRotationMode()
    {
      return $this->adRotationMode;
    }

    /**
     * @param string $adRotationMode
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupAdRotationMode
     */
    public function setAdRotationMode($adRotationMode)
    {
      $this->adRotationMode = $adRotationMode;
      return $this;
    }

}
