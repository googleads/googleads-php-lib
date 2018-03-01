<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Proximity extends \Google\AdsApi\AdWords\v201802\cm\Criterion
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\GeoPoint $geoPoint
     */
    protected $geoPoint = null;

    /**
     * @var string $radiusDistanceUnits
     */
    protected $radiusDistanceUnits = null;

    /**
     * @var float $radiusInUnits
     */
    protected $radiusInUnits = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\Address $address
     */
    protected $address = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param \Google\AdsApi\AdWords\v201802\cm\GeoPoint $geoPoint
     * @param string $radiusDistanceUnits
     * @param float $radiusInUnits
     * @param \Google\AdsApi\AdWords\v201802\cm\Address $address
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $geoPoint = null, $radiusDistanceUnits = null, $radiusInUnits = null, $address = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->geoPoint = $geoPoint;
      $this->radiusDistanceUnits = $radiusDistanceUnits;
      $this->radiusInUnits = $radiusInUnits;
      $this->address = $address;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\GeoPoint
     */
    public function getGeoPoint()
    {
      return $this->geoPoint;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\GeoPoint $geoPoint
     * @return \Google\AdsApi\AdWords\v201802\cm\Proximity
     */
    public function setGeoPoint($geoPoint)
    {
      $this->geoPoint = $geoPoint;
      return $this;
    }

    /**
     * @return string
     */
    public function getRadiusDistanceUnits()
    {
      return $this->radiusDistanceUnits;
    }

    /**
     * @param string $radiusDistanceUnits
     * @return \Google\AdsApi\AdWords\v201802\cm\Proximity
     */
    public function setRadiusDistanceUnits($radiusDistanceUnits)
    {
      $this->radiusDistanceUnits = $radiusDistanceUnits;
      return $this;
    }

    /**
     * @return float
     */
    public function getRadiusInUnits()
    {
      return $this->radiusInUnits;
    }

    /**
     * @param float $radiusInUnits
     * @return \Google\AdsApi\AdWords\v201802\cm\Proximity
     */
    public function setRadiusInUnits($radiusInUnits)
    {
      $this->radiusInUnits = $radiusInUnits;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\Address
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Address $address
     * @return \Google\AdsApi\AdWords\v201802\cm\Proximity
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

}
