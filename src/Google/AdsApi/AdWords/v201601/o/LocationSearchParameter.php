<?php

namespace Google\AdsApi\AdWords\v201601\o;

class LocationSearchParameter extends \Google\AdsApi\AdWords\v201601\o\SearchParameter
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\Location[] $locations
     */
    protected $locations = null;

    /**
     * @param string $SearchParameterType
     * @param \Google\AdsApi\AdWords\v201601\cm\Location[] $locations
     */
    public function __construct($SearchParameterType = null, array $locations = null)
    {
      parent::__construct($SearchParameterType);
      $this->locations = $locations;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\Location[]
     */
    public function getLocations()
    {
      return $this->locations;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Location[] $locations
     * @return \Google\AdsApi\AdWords\v201601\o\LocationSearchParameter
     */
    public function setLocations(array $locations)
    {
      $this->locations = $locations;
      return $this;
    }

}
