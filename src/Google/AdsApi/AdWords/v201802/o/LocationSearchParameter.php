<?php

namespace Google\AdsApi\AdWords\v201802\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LocationSearchParameter extends \Google\AdsApi\AdWords\v201802\o\SearchParameter
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\Location[] $locations
     */
    protected $locations = null;

    /**
     * @param string $SearchParameterType
     * @param \Google\AdsApi\AdWords\v201802\cm\Location[] $locations
     */
    public function __construct($SearchParameterType = null, array $locations = null)
    {
      parent::__construct($SearchParameterType);
      $this->locations = $locations;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\Location[]
     */
    public function getLocations()
    {
      return $this->locations;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Location[] $locations
     * @return \Google\AdsApi\AdWords\v201802\o\LocationSearchParameter
     */
    public function setLocations(array $locations)
    {
      $this->locations = $locations;
      return $this;
    }

}
