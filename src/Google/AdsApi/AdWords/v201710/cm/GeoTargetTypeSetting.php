<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class GeoTargetTypeSetting extends \Google\AdsApi\AdWords\v201710\cm\Setting
{

    /**
     * @var string $positiveGeoTargetType
     */
    protected $positiveGeoTargetType = null;

    /**
     * @var string $negativeGeoTargetType
     */
    protected $negativeGeoTargetType = null;

    /**
     * @param string $SettingType
     * @param string $positiveGeoTargetType
     * @param string $negativeGeoTargetType
     */
    public function __construct($SettingType = null, $positiveGeoTargetType = null, $negativeGeoTargetType = null)
    {
      parent::__construct($SettingType);
      $this->positiveGeoTargetType = $positiveGeoTargetType;
      $this->negativeGeoTargetType = $negativeGeoTargetType;
    }

    /**
     * @return string
     */
    public function getPositiveGeoTargetType()
    {
      return $this->positiveGeoTargetType;
    }

    /**
     * @param string $positiveGeoTargetType
     * @return \Google\AdsApi\AdWords\v201710\cm\GeoTargetTypeSetting
     */
    public function setPositiveGeoTargetType($positiveGeoTargetType)
    {
      $this->positiveGeoTargetType = $positiveGeoTargetType;
      return $this;
    }

    /**
     * @return string
     */
    public function getNegativeGeoTargetType()
    {
      return $this->negativeGeoTargetType;
    }

    /**
     * @param string $negativeGeoTargetType
     * @return \Google\AdsApi\AdWords\v201710\cm\GeoTargetTypeSetting
     */
    public function setNegativeGeoTargetType($negativeGeoTargetType)
    {
      $this->negativeGeoTargetType = $negativeGeoTargetType;
      return $this;
    }

}
