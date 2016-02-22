<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class LocationExtension extends \Google\AdsApi\AdWords\v201601\cm\AdExtension
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\Address $address
     */
    protected $address = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\GeoPoint $geoPoint
     */
    protected $geoPoint = null;

    /**
     * @var base64Binary $encodedLocation
     */
    protected $encodedLocation = null;

    /**
     * @var string $companyName
     */
    protected $companyName = null;

    /**
     * @var string $phoneNumber
     */
    protected $phoneNumber = null;

    /**
     * @var string $source
     */
    protected $source = null;

    /**
     * @var int $iconMediaId
     */
    protected $iconMediaId = null;

    /**
     * @var int $imageMediaId
     */
    protected $imageMediaId = null;

    /**
     * @param int $id
     * @param string $AdExtensionType
     * @param \Google\AdsApi\AdWords\v201601\cm\Address $address
     * @param \Google\AdsApi\AdWords\v201601\cm\GeoPoint $geoPoint
     * @param base64Binary $encodedLocation
     * @param string $companyName
     * @param string $phoneNumber
     * @param string $source
     * @param int $iconMediaId
     * @param int $imageMediaId
     */
    public function __construct($id = null, $AdExtensionType = null, $address = null, $geoPoint = null, $encodedLocation = null, $companyName = null, $phoneNumber = null, $source = null, $iconMediaId = null, $imageMediaId = null)
    {
      parent::__construct($id, $AdExtensionType);
      $this->address = $address;
      $this->geoPoint = $geoPoint;
      $this->encodedLocation = $encodedLocation;
      $this->companyName = $companyName;
      $this->phoneNumber = $phoneNumber;
      $this->source = $source;
      $this->iconMediaId = $iconMediaId;
      $this->imageMediaId = $imageMediaId;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\Address
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Address $address
     * @return \Google\AdsApi\AdWords\v201601\cm\LocationExtension
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\GeoPoint
     */
    public function getGeoPoint()
    {
      return $this->geoPoint;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\GeoPoint $geoPoint
     * @return \Google\AdsApi\AdWords\v201601\cm\LocationExtension
     */
    public function setGeoPoint($geoPoint)
    {
      $this->geoPoint = $geoPoint;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getEncodedLocation()
    {
      return $this->encodedLocation;
    }

    /**
     * @param base64Binary $encodedLocation
     * @return \Google\AdsApi\AdWords\v201601\cm\LocationExtension
     */
    public function setEncodedLocation($encodedLocation)
    {
      $this->encodedLocation = $encodedLocation;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return \Google\AdsApi\AdWords\v201601\cm\LocationExtension
     */
    public function setCompanyName($companyName)
    {
      $this->companyName = $companyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
      return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return \Google\AdsApi\AdWords\v201601\cm\LocationExtension
     */
    public function setPhoneNumber($phoneNumber)
    {
      $this->phoneNumber = $phoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->source;
    }

    /**
     * @param string $source
     * @return \Google\AdsApi\AdWords\v201601\cm\LocationExtension
     */
    public function setSource($source)
    {
      $this->source = $source;
      return $this;
    }

    /**
     * @return int
     */
    public function getIconMediaId()
    {
      return $this->iconMediaId;
    }

    /**
     * @param int $iconMediaId
     * @return \Google\AdsApi\AdWords\v201601\cm\LocationExtension
     */
    public function setIconMediaId($iconMediaId)
    {
      $this->iconMediaId = $iconMediaId;
      return $this;
    }

    /**
     * @return int
     */
    public function getImageMediaId()
    {
      return $this->imageMediaId;
    }

    /**
     * @param int $imageMediaId
     * @return \Google\AdsApi\AdWords\v201601\cm\LocationExtension
     */
    public function setImageMediaId($imageMediaId)
    {
      $this->imageMediaId = $imageMediaId;
      return $this;
    }

}
